@extends('layouts.default')
@section('content')
<link rel="stylesheet" href="{{ 'css/table.css' }}"> 
<div></div>
<table class="tbl">
<tr class="unique"><td>Name</td><td>Phone</td><td>Gender</td></tr>

				@foreach ($list as $list)
   				 <tr class="unique">
   				 <td> {{ $list->first_name .' '. $list->last_name}}</td>
   				 <td>{{ $list->phone_no }}</td>
   				  <td>{!!$list->gender!!}</td>
   				 

   				 
   				 </tr>

@endforeach
</table>
@endsection