<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Sortlist;
use DB;

class LeadController extends Controller
{
	public function getList(){
		$id=2;
		$test=new Sortlist();
		$list=$test->getLists($id);
	    return view('intevieweer',['list' =>  $list]);

		

	}
    
}
