<?php

namespace App\Http\Middleware;

use Closure;

Use Session;

class CheckLead
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
           if( Session::get('role')=='2'){
           // return redirect('admin');
        }else{
            return redirect('login');
        }
        return $next($request);
    }
}
