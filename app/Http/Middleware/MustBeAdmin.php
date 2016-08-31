<?php

namespace App\Http\Middleware;

use Closure;

use Tymon\JWTAuth\Middleware\BaseMiddleware;

class MustBeAdmin extends BaseMiddleware
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
        return $this->respond('tymon.jwt.absent', 'must be amdin', 400);
    }
}
