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
           $request->session()->put('id',$request->id);
            $request->session()->put('status',$request->id);
            return view('addMember',['list'=> $request]);
            $id = $request->session()->pull('id');
            $status = $request->session()->pull('status');
            $sortlist = Sortlist::add($id, $status,$request->Date,
                $request->interviewerf);
                if($sortlists ){
        	           $request->session()->flash('status',"Called ");
                         }
                else{
        	       $request->session()->flash('status','Data Faild td Add');
                    }
            //return redirect('admin');

    }






    public function addMarker(Request $request){
        $this->actionStatus();

    }














    public function getGradecandidate(){
        $list=DB::select('SELECT c.first_name, g.grade FROM `candidates` AS c 
                                INNER JOIN`sortlists` AS s ON c.id= s.candidate_id 
                                INNER JOIN `gardes` AS g ON s.candidate_id= g.candidate_id
                                GROUP BY grade');
        return view('finalResult',['list' => $list]);
    }
}


