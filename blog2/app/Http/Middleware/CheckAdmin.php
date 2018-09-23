<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdmin
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
        if(!empty(session('user'))){
            if(session('is_admin'))
                return $next($request);
            else
                return redirect('/');
        }
        else
        return redirect('/login');
    }
}
