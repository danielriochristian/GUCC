<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
       	$admins = Admin::all();
        return view('post.index', ['admins' => $admins]);
    }

}
