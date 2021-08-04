<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class user_rizky
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
        // dd($request);

        if(!$request->user() || @$request->user()->id != 1){
            return redirect()->route('forbid');
        }
        return $next($request);
    }
}
