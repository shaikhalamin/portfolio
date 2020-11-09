<?php

namespace App\Http\Middleware;

use Closure;

class ProfileChecker
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
        if (!$request->user()->profile) {
            return redirect('admin.index')->with('error', 'Please add your profile first !');
        }
        return $next($request);
    }
}
