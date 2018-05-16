<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ManageEvent;
use App\Http\Requests;

class ManageEventController extends Controller
{
    public function index()
    {
    	$manages = ManageEvent::all();
        return view('partial.manage_event', ['manages' => $manages]);
    }

    public function edit($id)
    {
        $manages = ManageEvent::find($id);
        if(!$manages){
            abort(503);
        }
        return view('partial.editevent')->with('manages',$manages);
    }

    public function destroy($id)
    {
    	$manages = ManageEvent::find($id);
        $manages->delete();
        return redirect('manageevent')->with('message','data berhasil dihapus!!');
    }



}
