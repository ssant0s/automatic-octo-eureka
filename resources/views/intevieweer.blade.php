@extends('layouts.app')
 @section('content') 

 <link rel="stylesheet" href="{{'css/table.css'}}">
 <table class="tbl">
 <tr><td>Candidate Name</td><td>Date</td><td>Role</td><td>Resume</td></tr>
 @foreach($list as $list)
 <tr><td>{!! $list->first_name.' '.$list->middle_name.' '.$list->last_name !!}</td><td>{!! $list->date!!}</td><td>{!!$list->role_id!!}</td><td>{!!!!}</td></tr>
   
</table>
   @endforeach

@endsection