
@extends('layouts.default')
 @section('content') 

<link rel="stylesheet" href="{{ 'css/table.css' }}"> 
<table class="tbl">
      <tr>{{link_to_route('add', 'Add Candidate','',['class' => 'icon-add'])}}</tr> 
      <tr><td class="message">{{ session('status') }}</td></tr>
     
     <tr class="unique"><td>First Name</td><td>last Name</td><td>Phone</td><td>Gender</td><td>Action</td></tr>
				@foreach ($Candidates as $candidate)
   				 <tr class="unique">
   				 <td> {{ $candidate->first_name }}</td>
           <!-- <td> {!!$candidate->first_name !!}</td> -->
   				 <td>{{ $candidate->last_name }}</td>
   				 <td>{{ $candidate->phone_no }}</td>
   				 <td>{{ $candidate->gender }}</td>
   				 <td>{{link_to_route('delete', '', [$candidate->id],['class' => 'icon-delete'])}}||
                {{link_to_route('update', '', [$candidate->id],['class' => 'icon-edit'])}} ||
                {{link_to_route('view','',[$candidate->id],['class' => 'icon-view'])}}  </td>
          </tr>
 

				@endforeach
        <tr class="unique"><td colspan="5">
        {{ $Candidates->links() }}</td>
        </tr>

   </table>
   @endsection
   

