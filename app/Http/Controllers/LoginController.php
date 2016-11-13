<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Session;




class LoginController extends Controller
{
    public function index() {
    	return view('auth/login');
    }

    public function checkLogin(Request $request){
    
 	$list=User::checkAuth($request->email,$request->password);
                if($list){
                    foreach($list as $list);
                    Session::put('role',$list->role);
                }else{ 
                    return redirect('login');
        }
 
    }

       public function logout(){
            Session::flush();
            return redirect('login');
             }

    

}
