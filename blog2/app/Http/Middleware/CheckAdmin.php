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
            $auth = session('user');
            if(!empty($auth->is_admin)) // đi qua đay ok roi nhe, no phai check thuộc tính của cái auth
                return $next($request);
            else
                return redirect('/');
        }
        else
        return redirect('/login');
    }
}
