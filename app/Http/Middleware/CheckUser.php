<?php

namespace App\Http\Middleware;

use Closure;

use Session;

class CheckUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {     $id =Session::pull('role');

            
         switch ($id){
                case 1:
                     return redirect('admin');
                     break;
                case 2:     
                   return redirect('user');
                    break;
                case 3:
                   return redirect('reception');
                    break;
                default:
                    echo "aaa muhi";

                   // return redirect('login');

        
    }
    return $next($request);
}
}
