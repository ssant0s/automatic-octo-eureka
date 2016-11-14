<?php

namespace App\Http\Middleware;

use Closure;

use Session;
class checkAdmin
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
        
        if( Session::get('role')=='1'){
           // return redirect('admin');
        }else{
            return redirect('login');
        }
        return $next($request);


    }
}
