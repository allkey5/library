<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if(auth('web')->user()->role_id != 1 || auth('admin')->user()->role_id == 2 && auth('admin')->user()->role === 'Admin'){
        if (auth('web')->user()->role === 'Admin' || auth('admin')->user()->role === 'Admin') {
            return $next($request);
        }
        abort(403, 'Unauthorized.');
    }
}
