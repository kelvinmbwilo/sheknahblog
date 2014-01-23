@extends('layout.admin')

@section('content')

{{ Form::open(array("url"=>route('edituser'),"class"=>"form-horizontal")) }}
<input type="hidden" name='id' value='{{ $user->id }}' id='id'>
    <div class='form-group'>
        {{ Form::label('email', 'Email Address',array('class'=>'control-label col-sm-4')) }}
        <div class='col-sm-8'>{{ Form::text('email',$user->email,array('class'=>'form-control','placeholder'=>'Email Address','required'=>'required')) }} </div>
    </div>
<div class='form-group'>
        {{ Form::label('firstname', 'First Name',array('class'=>'control-label col-sm-4')) }}
        <div class='col-sm-8'>{{ Form::text('firstname',$user->firstname,array('class'=>'form-control','placeholder'=>'First Name','required'=>'required')) }} </div>
    </div>
<div class='form-group'>
        {{ Form::label('lastname', 'Last Name',array('class'=>'control-label col-sm-4')) }}
        <div class='col-sm-8'>{{ Form::text('lastname',$user->lastname,array('class'=>'form-control','placeholder'=>'Last Name','required'=>'required')) }} </div>
    </div>

   <div class='col-sm-12 form-group text-center'>
        {{ Form::submit('Submit',array('class'=>'btn btn-primary','id'=>'submitqn')) }}
        
    </div>
  {{ Form::close() }}

@stop