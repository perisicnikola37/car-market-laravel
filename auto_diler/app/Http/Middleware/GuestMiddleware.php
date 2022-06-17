<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

//!
use Illuminate\Support\Facades\Auth;

class GuestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        
        if (Auth::check() && Auth::user()->roles->name == 'Administrator') {
            return $next($request);
        }
        
        return response()->view('includes.error_404');

        // return redirect('errors.404');

    }
}
