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
        if (auth()->user()->status == 'rejected') {
            return $next($request);
        }

        if (auth()->user()->status == 'pending') {
            return redirect(url('/'))->with('error', 'wait for your accout approval');
        }

        if (auth()->user()->status == 'approved') {
            return redirect(route('User.Dashboard'))->with('success', 'Welcome to User Dashboard');
        }
    }
}
