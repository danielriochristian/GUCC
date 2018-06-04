<?php

namespace App\Http\Controllers;
use App\Posts;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use App\http\Requests;
use Illuminate\Http\Request;

class PostController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index(){
    $post = Posts::paginate(4);
    return view('partial.menu_admin',compact('post'));
  }

  public function addPost(Request $request){
    $rules = array(
      'admin_user' => 'required',
      'admin_password' => 'required',
    );
  $validator = Validator::make ( Input::all(), $rules);
  if ($validator->fails())
  return Response::json(array('errors'=> $validator->getMessageBag()->toarray()));

  else {
    $post = new Posts;
    $post->name = $request->admin_user;
    $post->password = $request->admin_password;
    $post->roles_id = 1;
    $post->status = $request->status;
    $post->save();
    return response()->json($post);
  }
}

public function editPost(request $request){
$post = Posts::find ($request->id);
$post->title = $request->title;
$post->body = $request->body;
$post->save();
return response()->json($post);
}

public function deletePost(request $request){
$post = Posts::find ($request->id)->delete();
return response()->json();
}
}
