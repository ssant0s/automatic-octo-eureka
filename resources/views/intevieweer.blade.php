@extends('layouts.default')
 @section('content') 

 <link rel="stylesheet" href="{{'css/table.css'}}">
 <table class="tbl">
 <tr><td><p style="color:red">{{ session('status')}}</p></td></tr>
 <tr><td>Candidate Name</td><td>Date</td><td>Role</td><td>Resume</td><td>Add grade</td></tr>
 @foreach($list as $list)
 <tr><td>{!! $list->first_name.' '.$list->middle_name.' '.$list->last_name !!}</td><td>{!! $list->date!!}</td><td>{!!$list->role_id!!}</td><td>{!!!!}</td><td>
 {{link_to_route('addscore', '', [$list->candidate_id],['class' => 'icon-add'])}}
 <!-- {{link_to_route('addscore', '', '[]',['class' => 'icon-add'])}}</td></tr> -->
   @endforeach
</table>
   



@endsection