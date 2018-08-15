<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;


use Closure;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->email =='admin@email.com') {
            return $next($request);
        } else {
            return redirect('/404');
        }
    }
}
