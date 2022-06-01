<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class isAdmin
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
        // if (!auth()->check() || auth()->user()->status !== 'admin') {

        //     abort(403);
        // }
        if (!auth()->check() || auth()->user()->access === 'admin') {
            return redirect('/adminProduct');
        } else {
            return redirect('/');
        }

        // if (in_array($request->user()->status === 'admin')) {
        //     return redirect('/adminProduct');
        // }
        // return redirect('/');
        return $next($request);
    }
}
