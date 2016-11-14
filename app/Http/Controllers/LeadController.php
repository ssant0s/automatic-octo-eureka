<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Sortlist;
use App\Grade;
use DB;
Use Session;

class LeadController extends Controller
{

	public function getList(){
		$id=2;
		$test=new Sortlist();
		$list=$test->checkStatus($id);
	    return view('intevieweer',['list' =>  $list]);

	}

	public function addMarks($id){
		return view ('scoreCard',['id' => $id]);
	}

	public function insertGrade( Request $request){
	$grad=new Grade();
	$grad->candidate_id= $request->id;
	$grad->user_id=2;
	$grad->grade=$request->grade;
	$grad->feedback=$request->feedback;
	$query=$grad->save();
	if($query){
		$request->session()->flash('status',"Called ");	}
	else {
		$request->session()->flash('status','grades failed inserted');
	}
	   return redirect('user');

	}
}
