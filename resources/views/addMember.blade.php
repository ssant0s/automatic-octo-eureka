@extends('layouts.app')
 @section('content') 
<link rel="stylesheet" href="{{ 'css/table.css' }}"> 

<table>

<tr>
   {!! Form::open(['url' => 'addinterviewer'])!!}
	
	<td>Interviewer1</td><td>{!!Form::text('interviewerf')!!}</td>
	</tr>
	<tr>
	<td>Date</td><td>{!!Form::text('Date')!!}</td>
	</tr>
	<tr>
	<td>
	{{Form::submit('Add')}}
	</td>
	</tr>
</table>
   {!! Form::close()!!}


@endsection
