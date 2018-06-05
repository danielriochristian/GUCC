<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Help;
use App\Http\Requests;
use DB;

class HelpController extends Controller
{
  public function getRoleAdmin() {
      $rolesyangberhak = DB::table('roles')->where('id','=','2')->get()->first()->namaRule;
      return $rolesyangberhak;
    }

  public function __construct()
   {
       $this->middleware('auth');
       $this->middleware('rule:'.$this->getRoleAdmin());
   }

  public function index()
  {
    $manages = help::all();
      return view('partial.help', ['manages' => $manages]);
  }

  public function create()
  {
      return view('partial.addhelp');
  }
  public function createmanager()
  {
      return view('partial.question');
  }

  public function store(Request $request)
  {
         $manages = new Help;
         $manages->question = $request->question;
         $manages->answer = $request->answer;
         $manages->save();

         return redirect('help')->with('message','data berhasil ditambahkan!!');

   }
   public function edit($id)
   {
       $manages = Help::find($id);
       if(!$manages){
           abort(503);
       }
       return view('partial.edithelp')->with('manages',$manages);
   }
   public function update(Request $request, $id)
   {
           //$this->validate($request, [
           //'title'   => 'required',
           //'subject' => 'required', ]);


       $manages = Help::find($id);
       $manages->question = $request->question;
       $manages->answer = $request->answer;
       $manages->save();

       return redirect('help')->with('message','data berhasil ditambahkan!!');
   }
   public function destroy($id)
   {
     $manages = Help::find($id);
       $manages->delete();
       return redirect('help')->with('message','data berhasil dihapus!!');
   }

   public function manager()
   {
     $manages = help::all();
     return view('partial.manager', ['manages' => $manages]);
   }

}
