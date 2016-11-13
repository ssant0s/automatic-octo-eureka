@extends('layouts.default')
 @section('content') 
 <link rel="stylesheet" href="{{'css/table.css'}}">
<table class="tbl">

<tr class="unique"><td>Candidate Name</td><td>grade</td></tr>
 @foreach($list as $list)
 <tr><td>{!! $list->first_name !!}</td><td>{!! $list->grade!!}</td>
 @endforeach
</table>
@endsection