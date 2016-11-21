<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Candidate;

use App\Sortlist;

use DB;

use Session;


class InterviewController extends Controller
{
   
    
  public function getCandidates(){
    $Candidates= Candidate::get_candidates();
    return view('candidatelist', ['Candidates' =>  $Candidates]);
   
    }


  public function actionStatus(Request $request){
        if(isset($request->id) && isset($request->status)){
                 $request->session()->put('id',$request->id);
                 $request->session()->put('status',$request->status);
           
           return view('addMember');
       }else{

                  $id = $request->session()->pull('id');
                   $status = $request->session()->pull('status');
                   $sortlist = Sortlist::add($id, $status,$request->interviewerf,$request->Date);
                        if($sortlist){
        	               $request->session()->flash('stat',"Called ");
                         }else{
        	               $request->session()->flash('stat','Data Faild td Add');
                         }
            return redirect('admin');
                }

    }



    public function addMarker(Request $request){
        $this->actionStatus();

    }


    public function getGradecandidate(){
       $list=Sortlist::displayGrade();
        return view('finalResult',['list' => $list]);
    }

    public function checkId(){
      dd('testijng');
    }
}


