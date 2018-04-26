<?php

// Author  : Hasan El Jabir
// Date    : 17-09-2017

namespace App\Http\Controllers;

use Datatables;
use Illuminate\Http\Request;
use App\Models\News;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{

    public function index($id)
    {
    	$data = News::find($id);
       	return view('news_detail', compact('data'));
    }
}
