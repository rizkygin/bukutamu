<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HanyaAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!$request->user() || $request->user()->id != 1){
            return redirect()->route('larangan');
        }
        return $next($request);
    }
}
