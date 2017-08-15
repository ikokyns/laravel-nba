<?php

namespace App\Http\Middleware;

use Closure;

class LogoutInactiveUser
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
        if (auth()->user() != null && auth()->user()->activated == false) {
            auth()->logout();

            return redirect('/login');
        }
        return $next($request);
    }
}
