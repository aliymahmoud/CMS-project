<?php

namespace App\Http\Middleware;

use Closure;

class Instructor
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
        if(\Auth::user()->isInstructor()){
            return $next($request);
        }
        else{
            return abort('404');
        }
    }
}
