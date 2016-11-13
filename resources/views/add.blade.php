@extends('layouts.default')
 @section('content') 


 {!! Form::open(['url' => 'insert', 'files' => true]) !!}
 <table class="tbl">

        <tr clas="unique">
           <!-- <td>{!!Form::hidden('id');!!}</td> -->
        </tr>
             
        
                       <tr>
                       <td >
                       First Name
                           </td> 
                             <td>
                            <!-- {!!Form::text('candidate-name');!!} -->
                             {{Form::text('candidate-name')}}
                          
                            </td>
                            </tr>
                            <tr>
                            <td>
                            Last Name
                            </td>
                            <td>
                            {!!Form::text('last-name');!!}
                            </td>
                            </tr>
                            <tr>
                            <td>
                            Middle Name</td> 
                            <td>
                            {!!Form::text('middle-name');!!}
                            </td>
                            </tr>
                            <tr>
                            <td>
                            Phone-number
                            </td> 
                             <td>
                            {!!Form::text('phone_no');!!}
                           
                            </td>
                            </tr>
                            <tr>
                            <td>
                            Email Id
                              </td> 
                            
                            <td>
                            {!!Form::text('email_id');!!}
                            </td>
                            </tr>
                            <tr>
                            <td>
                            Address
                              </td>
                          
                            <td>
                              {!!Form::text('address');!!}
                            </td>
                            </tr>
                            <tr>
                            <td>
                             Gender
                              </td>
                            
                            <td>
                            {!!Form::text('gender');!!}
                            </td>
                            </tr>
                            <tr>
                            <td>
                            Resume
                            </td> 
                            
                           <td>
                           {!!Form::file('file-name')!!}
                       </td>

                     
      
        </tr>
        <tr clas="unique"><td id="button">{!!Form::submit('Add')!!}</td></tr>
    </table>
  {!! Form::close() !!}
  <lnk rel="stylesheet" href="{{'css/table.css'}}">
  @endsection