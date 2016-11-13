@extends('layouts.default')
 @section('content') 
 <link rel="stylesheet" href="{{ 'css/table.css' }}"> 

@foreach ($candidate_by_id as $candidate)
        
 
 <table class="tbl">

        <tr clas="unique">
        </tr>
             
                       <tr>
                       <td >
                       First Name
                           </td> 
                             <td>
                            {{ $candidate->first_name }}
                          
                            </td>
                            </tr>
                            <tr>
                            <td>
                            Last Name
                            </td>
                            <td>
                            {{ $candidate->last_name }}
                            </td>
                            </tr>
                            <tr>
                            <td>
                            Middle Name</td> 
                            <td>
                           {{ $candidate->middle_name }}
                            </td>
                            </tr>
                            <tr>
                            <td>
                            Phone-number
                            </td> 
                             <td>
                           {{ $candidate->phone_no }}
                           
                            </td>
                            </tr>
                            <tr>
                            <td>
                            Email Id
                              </td> 
                            
                            <td>
                            {{ $candidate->email_id }}
                            </td>
                            </tr>
                            <tr>
                            <td>
                            Address
                              </td>
                          
                            <td>
                           {{ $candidate->address }}
                            </td>
                            </tr>
                            <tr>
                            <td>
                             Gender
                              </td>
                            
                            <td>
                            {{ $candidate->gender }}
                            </td>
                            </tr>
                            <tr>
                            <td>
                            Resume
                            </td> 
                            
                           <td>
                           <!-- {{$path = storage_path("app\ $candidate->photo")}} -->
                         {!! Html::link(storage_path("app\.$candidate->photo"), 'Resume', ['class' => 'icon-view']) !!} 
                       </td>

                     
      
        
    </table>
    @endforeach 
 
  
  @endsection