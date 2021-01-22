<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
class userAuth
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
        //If request does not comes from logged in employer
        //then he shall be redirected to employer Login page
        if (!Auth::guard('userinfo')->check()) {
            return "error";
        }
        return "success";
    }
}
