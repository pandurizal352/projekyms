<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class CheckPinMiddleware2
{
    
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();   
        if ($user && !$user->pin2) {
            return redirect()->back()->withErrors(['Pin yang anda masukkan salah']);
        }

        return $next($request);
    }
}
