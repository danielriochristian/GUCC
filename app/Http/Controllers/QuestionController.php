<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\question;

class QuestionController extends Controller
{
    public funtion index(){
      $manages = question::all();
      return view('partial.question_to_answer', ['manages' => $manages]);
    }
}
