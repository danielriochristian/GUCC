<?php

// Author  : Hasan El Jabir
// Date    : 17-09-2017

namespace App\Http\Controllers;

use Datatables;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{

    public function index($id)
    {
    	$data = Slider::find($id);
       	return view('slider_detail', compact('data'));
    }
}
