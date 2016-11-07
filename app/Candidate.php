<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
	public function get_candidates(){
		$Candidates= DB::table('Candidates')->get();
	}
}
