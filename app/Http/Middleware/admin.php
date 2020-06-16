<?php

namespace App\Http\Middleware;

use Closure;
use http\Client\Curl\User;

class admin
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
        if ($request->user()->roles == 0){
            return redirect('home');
        }
        return $next($request);
    }
}
