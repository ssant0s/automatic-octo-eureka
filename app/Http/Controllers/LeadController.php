<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Sortlist;
use App\Grade;
use DB;

class LeadController extends Controller
{
	public function getList(){
		$id=2;
		$test=new Sortlist();
		$list=$test->getLists($id);
	    return view('intevieweer',['list' =>  $list]);

		

	}

	public function addMarks(){
		return view ('scoreCard');
	}

	// public function insertGrade( Request $request){
	// $grad=new Grade();
	// $grad->candidate_id= $request->candidateid;
	// $grad->user_id=$request->user_id;
	// $grad->grade=$request->grade;
	// $grad->feedback=$request->feebback;
	// $query=$grad->save();
	// if($query){
	// 	echo "test pass";
	// }
	// else {
	// 	echo "test feailed";
	// }

	// }
}
