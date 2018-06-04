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
      if ($request->hasFile('tes')) {
         $namafile = $request->file('tes')->getClientOriginalName();
         $ext = $request->file('tes')->getClientOriginalExtension();
         $lokasifileskr = '/photos/'.$namafile;
         //cek jika file sudah ada...
         if ($ext == "png" ||
             $ext == "jpg")
         {
           $destinasi = public_path('/photos');
           $proses = $request->file('tes')->move($destinasi,$namafile);

           $manages = new ManageSlider;
           $manages->title = $request->title;
           $manages->content = $request->content;
           $manages->link = $request->link;
           $manages->image = $lokasifileskr;
           $manages->save();


           return redirect('manageslider')->with('message','data berhasil ditambahkan!!');
         }
         else {
           return Redirect::back()->withErrors(['file tidak sesuai, tidak bisa diupload']);
         }
       }
    }

      public function store(Request $request)
      {
        if ($request->hasFile('tes')) {
           $namafile = $request->file('tes')->getClientOriginalName();
           $ext = $request->file('tes')->getClientOriginalExtension();
           $lokasifileskr = '/photos/'.$namafile;
           //cek jika file sudah ada...
           if ($ext == "png" ||
               $ext == "jpg")
           {
             $destinasi = public_path('/photos');
             $proses = $request->file('tes')->move($destinasi,$namafile);

             $manages = new ManageSlider;
             $manages->title = $request->title;
             $manages->content = $request->content;
             $manages->link = $request->link;
             $manages->image = $lokasifileskr;
             $manages->save();


             return redirect('manageslider')->with('message','data berhasil ditambahkan!!');
           }
           else {
             return Redirect::back()->withErrors(['file tidak sesuai, tidak bisa diupload']);
           }
         }
       }

    public function destroy($id)
    {
    	$manages = ManageSlider::find($id);
        $manages->delete();
        return redirect('manageslider')->with('message','data berhasil dihapus!!');
    }

}
