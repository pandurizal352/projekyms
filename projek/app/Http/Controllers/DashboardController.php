<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {   
        return view('main-interface.course',[
            "title" => "Course",
        ]);
    }
    
    public function checkPin(Request $request)
    {
        $user = Auth::user();
        if ($user->pin1 === $request->pin1) {
            return redirect()->route('dashboard.spm');
        } else {
            return back()->with('pinError','Pin yang anda masukkan salah');
        }
    }
<<<<<<< HEAD
=======
    public function checkPin2(Request $request)
    {
        $user = Auth::user();
        if ($user->pin2 === $request->pin2) {
            return redirect()->route('dashboard.kelas_investasi');
        } else {
            return back()->with('pin2Error','Pin yang anda masukkan salah');
        }
    }
>>>>>>> a706b64 (last update)
    
 
    
}
