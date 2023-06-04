<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // !auth()->check() kalau dia udah login maka true kalau auth()->guest() kalau dia blm login maka true
        if(auth()->guest() || !auth()->user()->role){
            abort(403);
        }

        return $next($request);
    }
}
