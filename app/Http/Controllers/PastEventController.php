<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ManageEvent;
use App\Http\Requests;

class PastEventController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
    public function index()
    {
    	$manages = ManageEvent::all();
        return view('partial.past_event', ['manages' => $manages]);
    }

    public function show($id)
    {
        $manages = ManageEvent::find($id);
        return view('partial.viewevent')->with('manages',$manages);
    }

    public function edit($id)
    {
        $manages = ManageEvent::find($id);
        if(!$manages){
            abort(503);
        }
        return view('partial.editevent')->with('manages',$manages);
    }

    // public function create()
    // {
    //     return view('partial.newevent');
    // }

    // public function store(Request $request)
    // {
    //        $manages = new ManageEvent;
    //        $manages->title = $request->title;
    //        $manages->content = $request->content;
    //        // $manages->id_category = 1;
    //        $manages->status = 1;
    //        $manages->date = $request->date ;
    //        $manages->place = $request->place;
    //        //$manages->slug = str_slug($request->title);
    //        //$manages->keyword = $request->keyword;
    //        $manages->save();
    //
    //        return redirect('manageevent')->with('message','data berhasil ditambahkan!!');
    //
    //  }

    public function update(Request $request, $id)
    {
            //$this->validate($request, [
            //'title'   => 'required',
            //'subject' => 'required', ]);


        $manages = ManageEvent::find($id);
        $manages->title = $request->title;
        $manages->content = $request->content;
        // $manages->id_category = 1;
        $manages->status = 1;
        $manages->date = $request->date ;
        $manages->place = $request->place;
        //$manages->slug = str_slug($request->title);
        //$manages->keyword = $request->keyword;
        $manages->save();

        return redirect('manageevent')->with('message','data berhasil ditambahkan!!');
    }

    public function destroy($id)
    {
    	$manages = ManageEvent::find($id);
        $manages->delete();
        return redirect('manageevent')->with('message','data berhasil dihapus!!');
    }




}
