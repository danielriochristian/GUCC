<?php

// Author  : Hasan El Jabir
// Date    : 17-09-2017

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\News;
use App\Models\Slider;
use App\Models\Study;

class HomeController extends Controller
{
    public function index()
    {
        $column_news = ['title', 'content', 'created_at', 'id'];
        $column_slider = ['title', 'content', 'id'];
        $column_study = ['name', 'information', 'id'];
        $news = News::select($column_news)
            ->take(3)
            ->get();
        $headline = News::select($column_news)
            ->take(2)
            ->get();
        $slider = Slider::select($column_slider)
            ->take(2)
            ->get();
        $study = Study::select($column_study)
            ->take(8)
            ->get();
       	return view('home', compact(
            'news',
            'headline',
            'slider',
            'study'));
    }
}
