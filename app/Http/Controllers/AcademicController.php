<?php

// Author  : Hasan El Jabir
// Date    : 17-09-2017

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfessionalController extends Controller
{

    public function index()
    {
       	return view('academic.professional');
    }

    public function informaticsManagement()
    {
    	
    }
}
