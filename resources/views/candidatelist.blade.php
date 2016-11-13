@extends('layouts.default')
 @section('content') 

<table class="tbl">
<tr><td class="message">{{ session('stat')}}</td></tr>
     <tr class="unique"><td>First Name</td><td>Resume<td>Status</td><td>Action</td></tr>
				@foreach ($Candidates as $candidate)
   				 <tr class="unique">
   				 <td> {{ $candidate->first_name }}</td>
                <td> {{link_to_route('update', 'CV', [$candidate->id],['class' => 'icon-view'])}}   </td>
                
                   {!! Form::open(['url' => 'statuss']) !!}
                   <!-- {{Form::hidden('id', $candidate->id)}} -->
                   <input type="hidden" name="id" value="{{$candidate->id}}">
                   <td> {{Form::select('status', array('1' => 'Pending', '2' => 'Call'), 'status')}}</td>
                    <td>{{Form::submit('Add')}}
   				          
                    {!!Form::close()!!}
   				 
   				 
   				 </tr>
 

				@endforeach
   </table>




<link rel="stylesheet" href="{{ 'css/table.css' }}"> 
   @endsection
