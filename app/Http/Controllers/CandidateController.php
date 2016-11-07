<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Candidate;

use DB;

class CandidateController extends Controller
{

 	public function get_candidate(){
        $Candidates= DB::table('Candidates')->Paginate(5);
        return view('details', ['Candidates' =>  $Candidates]);
		
 	}

 	public function show_page(){
 		return view('add');
 	}

 	public function insert_candidates(Request $request){

 
 		$name=$request->input('candidate-name');
        $lastname=$request->input('last-name');
        $middlename=$request->input('middle-name');
        $phoneno=$request->input('phone_id');
        $emailid=$request->input('email_id');
        $address=$request->input('address');
        $gender=$request->input('gender'); 
        $path=$request->file('file-name')->store('uploads');
        $query= DB::table('Candidates')->insert(['first_name' => $name,'last_name'=>$lastname,'photo'=>$path,'middle_name'=>$middlename,'phone_no'=>$phoneno,'email_id'=>$emailid,'address'=>$address,'gender'=>$gender]);
       // if(intval($query->Total)>0)
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
    public function update_candidate($id){
    	return view('addcandidate');
    	$update=DB::table('Candidates')
    	->where('id','=',$id)
    	->update();

    }

    
	

}
