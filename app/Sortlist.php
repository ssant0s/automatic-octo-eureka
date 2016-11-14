<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;
 


class Sortlist extends Model
{
      
  // public function getLists($id){

  //  return DB::select('SELECT * FROM `sortlists` AS s INNER JOIN `candidates` AS c ON s.`candidate_id`=c.`id` HAVING role_id= ?', [$id]);
  //   }

    
 public static function add($id, $status,$interviewer,$date){
    	$sortlist =new Sortlist;
    	$sortlist->candidate_id = $id;
    	$sortlist->status_id = $status;
    	$sortlist->role_id =$interviewer;
    	$sortlist->date = $date;
		return $sortlist->save();


    }

    public function checkStatus(){
      $id=2;

      return DB::table('sortlists')
      ->join('candidates','sortlists.candidate_id','=','candidates.id')
      ->HAVING ('sortlists.status_id','=',[$id])
      ->orderBy('candidates.id','desc')
      ->get();
     
     
      
    // return DB::select('SELECT * FROM `sortlists` AS s INNER JOIN `candidates` AS c ON s.`candidate_id`=c.`id` HAVING status_id= ?', [$id]);
    
  
   }

   public static function displayGrade(){
      
    return DB::table('candidates')
            ->join('sortlists', 'candidates.id', '=', 'sortlists.candidate_id')
            ->join('gardes', 'sortlists.candidate_id', '=', 'gardes.candidate_id')
            ->select('candidates.first_name', 'gardes.grade')
            ->get();
            
    

    // return DB::select('SELECT c.first_name, g.grade FROM `candidates` AS c 
    //                             INNER JOIN`sortlists` AS s ON c.id= s.candidate_id 
    //                             INNER JOIN `gardes` AS g ON s.candidate_id= g.candidate_id
    //                             GROUP BY grade');
  

   }


}
