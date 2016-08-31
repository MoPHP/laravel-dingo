<?php

namespace App\Http\Middleware;

use Closure;

use App\Api\V1\Controller\BaseController;

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
        // return $this->respond('tymon.jwt.absent', 'must be admin', 400);
        return BaseController::responseError('MUST_BE_ADMIN');
    }
}
