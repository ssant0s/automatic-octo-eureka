<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Candidate;

use App\Sortlist;

use Validator;

use DB;

use Session;

class CandidateController extends Controller
{  


 	public function get_candidate(){
       $Candidates= Candidate::get_candidates();
        return view('details', ['Candidates' =>  $Candidates]);
    		
 	}

 	public function show_page(){
 		return view('add');
 	}

 	public function insert_candidates(Request $request){

         $this->validate($request, [
            'candidate-name' => 'required',
            'last-name' => 'required',
            'middle-name' => 'required',
            'phone_no' => 'required',
            'file-name' => 'required',
            'address' => 'required',
            'gender' => 'required',
            
    ]);

 
 		$name=$request->input('candidate-name');
        $lastname=$request->input('last-name');
        $middlename=$request->input('middle-name');
        $phoneno=$request->input('phone_no');
        $emailid=$request->input('email_id');
        $address=$request->input('address');
        $gender=$request->input('gender'); 
        $path=$request->file('file-name')->store('uploads');
        $query= DB::table('Candidates')->insert(['first_name' => $name,'last_name'=>$lastname,'photo'=>$path,'middle_name'=>$middlename,'phone_no'=>$phoneno,'email_id'=>$emailid,'address'=>$address,'gender'=>$gender]);
           if($query)
            {
     		$request->session()->flash('status', 'Data Added Successfully!');
    }

        else{
            $request->session()->flash('status', 'Insertion Failde!');
        }
           return redirect('reception');
        }
     		


 

 	public function update_candidates(){
 		
 	}

 	 public function delete_candidate(Request $request, $id){
        $delete=DB::table('Candidates')
        ->where('id','=',$id)->delete();
        if($delete){
            $request->session()->flash('status', 'Data deleted Successfully');
        }
        else{
            $request->session()->flash('status', 'Data Not Deleted');
        }
        return redirect('reception');
    }

    public function get_candidate_id($id){
    	$candidate_by_id= DB::table('Candidates')
    	->where('id','=',$id)->get();
    	return view('viewCandidate',['candidate_by_id'=>$candidate_by_id]);
    }
   

    public function getCalllist(){
        $calllist = new Sortlist;
       $list=$calllist->checkStatus();
       return view('calllist',['list'=>$list]);


    }

    
	

}
