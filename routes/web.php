<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/ 

/*@uthor: Santosh Sharma */

/*  Route for Authentication*/


Route::group(['middleware'=>'checkuser'], function(){
	
	Route::Post('check','LoginController@checkLogin');
	

});
Route::group(['middleware'=>'checkadmin'], function(){
	
	Route::get('admin','InterviewController@getCandidates');

});

Route::group(['middleware'=>'checklead'], function(){
	
	Route::get('user','LeadController@getList');

});

Route::group(['middleware'=>'checkreception'], function(){
	
	Route::get('reception','CandidateController@get_candidate');
});

//Route::get('admin','InterviewController@getCandidates');
	//Route::get('reception','CandidateController@get_candidate');
	//Route::get('user','LeadController@getList');


Route::get('password',function(){
	echo "under construction";
});

Route::get('registers',function(){
	echo "under construction";
});





Route::get('login','LoginController@index');
//Route::Post('check','LoginController@checkLogin');
Route::get('logout','LoginController@logout');

Route::get('registers','LoginController@getRegister')->name('registers');
Route::Post('addregister','LoginController@insertRegister')->name('addregister');


//Route::get('/home', 'HomeController@index');

//Route::get('reception','CandidateController@get_candidate');

//Route::get('update','CandidateController@update_candidates');


Route::get('grades','InterviewController@getGradecandidate');
Route::get('delete/{id}','CandidateController@delete_candidate')->name('delete');
Route::get('update/{id}','CandidateController@get_candidate_id')->name('update');
Route::get('view/{id}','CandidateController@get_candidate_id')->name('view');
Route::post('insert', 'CandidateController@insert_candidates')->name('insert');
Route::get('add', 'CandidateController@show_page')->name('add');
//Route::get('admin','InterviewController@getCandidates');
Route::post('statuss','InterviewController@actionStatus')->name('statuss');
Route::post('addinterviewer','InterviewController@actionStatus')->name('addinterviewer');
// Route::get('user','LeadController@getList');
Route::get('addscore/{id}','LeadController@addMarks')->name('addscore');
Route::post('inserscore','LeadController@insertGrade')->name('inserscore');

Route::get('scorelist','InterviewController@getGradecandidate');


Route::get('callist','CandidateController@getCalllist');

Route::get('checkid/{id}','InterviewController@checkId')->name('checkid');


  







