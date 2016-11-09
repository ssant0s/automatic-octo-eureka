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
Auth::routes();


Route::get('/home', 'HomeController@index');

Route::get('reception','CandidateController@get_candidate');

//Route::get('update','CandidateController@update_candidates');


Route::get('grades','GradeController@get_score');
Route::get('delete/{id}','CandidateController@delete_candidate')->name('delete');
Route::get('update/{id}','CandidateController@get_candidate_id')->name('update');
Route::get('view/{id}','CandidateController@get_candidate_id')->name('view');
Route::post('insert', 'CandidateController@insert_candidates')->name('insert');
Route::get('add', 'CandidateController@show_page')->name('add');
Route::get('admin','InterviewController@getCandidates');
Route::post('statuss','InterviewController@actionStatus')->name('statuss');
Route::post('addinterviewer','InterviewController@actionStatus')->name('addinterviewer');
Route::get('user','LeadController@getList');
Route::get('addscore/{id}','LeadController@addMarks')->name('addscore');
Route::post('inserscore','LeadController@insertGrade')->name('inserscore');

Route::get('scorelist','InterviewController@getGradecandidate');



  







