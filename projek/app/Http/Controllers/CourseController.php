<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\video;
use App\Models\Video2;



class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function spm()
    {   
        $video = Video::all();
        return view('main-interface.course-spm',[
            "title"=> "Course",
            "videos"=> $video

        ]);
    }
    public function kelas_investasi()
    {    
        $video2 = Video2::all();
        return view('main-interface.course-kelas_investasi',[
            "title"=>"Course",
            "videos"=> $video2,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
