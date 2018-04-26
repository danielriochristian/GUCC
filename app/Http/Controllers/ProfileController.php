<?php

// Author  : Hasan El Jabir
// Date    : 17-09-2017

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\History;
use App\Models\Management;
use App\Models\Vision;

class ProfileController extends Controller
{

    public function index()
    {
    	$column = ['title', 'content'];
        $data = Profile::select($column)
            ->get();
       	return view('profile', compact(
            'data'));
    }

    public function history()
    {
    	$column = ['title', 'content'];
        $data = History::select($column)
            ->get();
       	return view('profile', compact(
            'data'));
    }

    public function management()
    {
    	$column = ['title', 'content'];
        $data = Management::select($column)
            ->get();
       	return view('profile', compact(
            'data'));
    }

    public function vision()
    {
    	$column = ['title', 'content'];
        $data = Vision::select($column)
            ->get();
       	return view('profile', compact(
            'data'));
    }
}
