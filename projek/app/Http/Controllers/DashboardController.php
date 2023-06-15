<?php

namespace App\Http\Controllers;
use App\Models\video;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {   
        $video = Video::all();
        return view('main-interface.course',[
            "title" => "Course",
            "videos"=> $video,
        ]);
    }

}
