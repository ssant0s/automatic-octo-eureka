@extends('layouts.default')
@section('content')
			
			<table class ="tbl">
			{!! Form::open(['url' => 'inserscore', 'files' => true]) !!}
			{!! Form::hidden('id',$id) !!}
			<tr class ="unique"> <td>Grade</td><td>{!! Form::text('grade') !!}</td></tr>
			<tr class ="unique"> <td>Feedback</td><td>{!!Form::textarea('feedback') !!}</td></tr>
			<tr class ="unique"><td>{!!Form::submit('submit') !!}</td></tr>
			{!!Form::close()!!}

			</table>
			<link rel="stylesheet" href="{{ 'css/table.css' }}"> 

@endsection