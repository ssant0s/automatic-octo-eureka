@extends('layouts.default')
 @section('content') 
 <script src="js/jquery.js"></script>
 <script>
 function hideBlur($id){
   var id = $id;
     $.ajax({  
                        type: 'GET',
                        url: 'checkid',
                        data: {'id':id},
                        success: function(data){
                            if(data)
                            {   
                              console.log("already added");
                        
                            }
                            else
                            {
                                console.log("you are allow to add");
                            }
                        }
                            
                    });

 }
</script>

<table class="tbl">
<tr><td class="message">{{ session('stat')}}</td></tr>
     <tr class="unique"><td>First Name</td><td>Resume<td>Status</td><td>Action</td></tr>
				@foreach ($Candidates as $candidate)
   				 <tr class="unique">
   				 <td> {{ $candidate->first_name }}</td>
                <td> {{link_to_route('update', 'CV', [$candidate->id],['class' => 'icon-view'])}}   </td>
                
                   {!! Form::open(['url' => 'statuss']) !!}
                   <input type="hidden" name="id" value="{{$candidate->id}}">
                   <td> {{Form::select('status', array('1' => 'Pending', '2' => 'Call'), 'status')}}</td>
                    <td><button type="button" id='add' onclick="hideBlur(<?= $candidate->id ?>)">Add</button></td>
   				          
                    {!!Form::close()!!}
   				 
   				 
   				 </tr>}
 

				@endforeach

        <tr class="unique"><td colspan="5">
        {{ $Candidates->links() }}</td>
        </tr>
   </table>




<link rel="stylesheet" href="{{ 'css/table.css' }}"> 
   @endsection
