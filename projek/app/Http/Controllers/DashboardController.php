<?php

namespace App\Http\Controllers;
use App\Models\video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
    
    public function checkPin(Request $request)
    {
        $user = Auth::user();
        if ($user->pin1 === $request->pin1) {
            return redirect()->route('dashboard.spm');
        } else {
            return back()->withErrors(['Pin yang Anda masukkan salah.']);
        }
    }
    
 
    
}
