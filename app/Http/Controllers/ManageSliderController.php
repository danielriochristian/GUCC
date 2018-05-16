<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ManageSlider;

class ManageSliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$manages = ManageSlider::all();
      return view('partial.manage_slider', ['manages' => $manages]);
    }

    public function show($id)
    {
        $manages = ManageSlider::find($id);
        return view('partial.viewslider')->with('manages',$manages);
    }


    public function edit($id)
    {
        $manages = ManageSlider::find($id);
        if(!$manages){
            abort(503);
        }
        return view('partial.editslider')->with('manages',$manages);
    }

    public function update(Request $request, $id)
    {
            //$this->validate($request, [
            //'title'   => 'required',
            //'subject' => 'required', ]);


        $manages = ManageSlider::find($id);
        $manages->title = $request->title;
        $manages->content = $request->content;
        $manages->link = $request->link;
        $manages->image = $request->image;
        $manages->save();

        return redirect('manageslider')->with('message','data berhasil ditambahkan!!');
    }

    public function store(Request $request)
    {
        $manages = new ManageSlider;
        $manages->title = $request->title;
        $manages->content = $request->content;
        $manages->link = $request->link;
        $manages->image = $request->image;
        $manages->save();

        return redirect('manageslider')->with('message','data berhasil ditambahkan!!');
    }

    public function destroy($id)
    {
    	$manages = ManageSlider::find($id);
        $manages->delete();
        return redirect('manageslider')->with('message','data berhasil dihapus!!');
    }

}
