<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckPinMiddleware
{
    public function handle($request, Closure $next)
    {   
        dd($request);
        $user = Auth::user();   
        if ($user && !$user->pin1) {
            return redirect()->back()->withErrors(['Anda harus memasukkan PIN terlebih dahulu.']);
        }

        return $next($request);
    }
}
