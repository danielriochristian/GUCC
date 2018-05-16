<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ManageSlider;
use App\Http\Requests;
// use Auth;
// use Illuminate\Http\Request;
// use DB;

class BackStageController extends Controller
{
    public function setView()
    {
        return view('admin.login');
    }

    public function submit(Request $req)
    {
      $username = $req->input('username');
        $password = $req->input('password');
        $checkLogin = DB::table('tb_admin')->where(['admin_user'=>$username,'admin_password'=>$password])->get();

            if(count($checkLogin)  >0)
            return redirect()->action('PostController@index');
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
}
