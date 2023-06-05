<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('main-interface.login-landing',[
            'title' => 'Login',
            'active'=> 'login'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email'=> 'required',
            'password' => 'required'
        ]);

        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/dashboard');
        }
        return back()->with('loginError', 'login failed');
    }

    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/dashboard');
    }

    /**
     * Store a newly created resource in storage.
     */
   
    
}
