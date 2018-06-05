<?php


namespace App\Http\Controllers;

use Datatables;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Http\Controllers\Controller;

class EventController extends Controller
{

    public function index($id)
    {
    	$data = Event::find($id);
       	return view('event_detail', compact('data'));
    }

    public function show($id)
    {
        $manages = Event::find($id);
        return view('event_detail')->with('manages',$manages);
    }
}
