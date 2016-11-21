<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class Candidate extends Model
{
	public static function get_candidates(){
		return $Candidates= DB::table('Candidates')
            ->orderBy('id','desc')
            ->Paginate(10);
		
	}
}
