<?php

namespace App\Http\Middleware;

use Closure;

class FirstLoginWelcome
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
        
        if (auth()->user() != null && auth()->user()->first_time_login == true) {

            $user = \App\User::find(auth()->user()->id);
            $user->first_time_login = false;
            $user->save();

            return redirect('/welcome');
        }

        return $next($request);
    }
}
