<?php

namespace App\Http\Middleware;

use Closure;

class MustBeAdmin
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
        // \Auth::user()
        if($request->user() && $request->user()->isAdmin()){
            return $next($request);
        }

        // return redirect('/');
    }
}
