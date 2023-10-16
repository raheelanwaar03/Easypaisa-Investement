<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class status
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (auth()->user()->role == 'user') {
            if (auth()->user()->status == 'approved') {
                return redirect(route('User.Dashboard'));
            }
            if (auth()->user()->status == 'pending') {
                return redirect(url('/'));
            }
        }
        if (auth()->user()->status == 'admin') {
            return redirect()->route('Admin.Dashboard')->with('success', 'Welcome to admin dashboard');
        }
    }
}
