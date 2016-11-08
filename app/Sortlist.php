<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;


class Sortlist extends Model
{
      
  public function getLists($id){

   return DB::select('SELECT * FROM `sortlists` AS s INNER JOIN `candidates` AS c ON s.`candidate_id`=c.`id` HAVING role_id= ?', [$id]);
    }

    public funtion insertShortlis(){
    	echo "aayo";
    }
}
