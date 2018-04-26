<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use DB;

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
}
