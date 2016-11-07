<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Candidate;

use App\Sortlist;

use DB;


class InterviewController extends Controller
{
    
    public function getCandidates(){
    	$Candidates= DB::table('Candidates')->get();
    	return view('candidatelist', ['Candidates' =>  $Candidates]);
   
    }

    public function actionStatus(Request $request){

    	

    	$insertStatus= new Sortlist;
       echo $insertStatus->candidate_id = $request->id;
       echo $insertStatus->status_id = $request->status;
        $query=$insertStatus->save();
        if($query){
        	$request->session()->flash('status',"Data Add successfully");
        }
        else{
        	$request->session()->flash('status','Data Faild td Add');
        }


    }

    public function addMarker(Request $request){

        return view('addMember');
       // $getMarks=new Sortlist;
        //dd($getMarks);
        
      
        

   

    }
}


