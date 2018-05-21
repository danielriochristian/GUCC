<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ManageArticle;
use App\Http\Requests;

class ManageArticleController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
    public function index()
    {
    	$manages = ManageArticle::all();
        return view('partial.manage_article', ['manages' => $manages]);
    }

    public function edit($id)
    {
        $manages = ManageArticle::find($id);
        if(!$manages){
            abort(503);
        }
        return view('partial.editarticle')->with('manages',$manages);
    }

    public function create()
    {
        return view('partial.newarticle');
    }

    public function store(Request $request)
    {
           $manages = new ManageArticle;
           $manages->title = $request->title;
           $manages->content = $request->content;
           $manages->id_category = 1;
           $manages->status = 1;
           $manages->slug = str_slug($request->title);
           $manages->keyword = $request->keyword;
           $manages->save();

           return redirect('managearticle')->with('message','data berhasil ditambahkan!!');

     }

    public function update(Request $request, $id)
    {
            //$this->validate($request, [
            //'title'   => 'required',
            //'subject' => 'required', ]);


        $manages = ManageArticle::find($id);
        $manages->title = $request->title;
        $manages->content = $request->content;
        $manages->id_category = 1;
        $manages->status = 1;
        $manages->slug = str_slug($request->title);
        $manages->keyword = $request->keyword;
        $manages->save();

        return redirect('managearticle')->with('message','data berhasil ditambahkan!!');
    }

    public function destroy($id)
    {
    	$manages = ManageArticle::find($id);
        $manages->delete();
        return redirect('managearticle')->with('message','data berhasil dihapus!!');
    }

    public function view(){
      $manages = ManageArticle::all();
        return view('partial.view_article', ['manages' => $manages]);
    }



}
