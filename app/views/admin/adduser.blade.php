@extends('layout.admin')

@section('content')
{{ Form::open(array("url"=>route('adduser'),"class"=>"form-horizontal")) }}

    <div class='form-group'>
        {{ Form::label('email', 'Email Address',array('class'=>'control-label col-sm-4')) }}
        <div class='col-sm-8'>{{ Form::text('email','',array('class'=>'form-control','placeholder'=>'Email Address','required'=>'required')) }} </div>
    </div>
<div class='form-group'>
        {{ Form::label('firstname', 'First Name',array('class'=>'control-label col-sm-4')) }}
        <div class='col-sm-8'>{{ Form::text('firstname','',array('class'=>'form-control','placeholder'=>'First Name','required'=>'required')) }} </div>
    </div>
<div class='form-group'>
        {{ Form::label('lastname', 'Last Name',array('class'=>'control-label col-sm-4')) }}
        <div class='col-sm-8'>{{ Form::text('lastname','',array('class'=>'form-control','placeholder'=>'Last Name','required'=>'required')) }} </div>
    </div>
<div class='form-group'>
        {{ Form::label('password', 'Password',array('class'=>'control-label col-sm-4')) }}
        <div class='col-sm-8'>{{ Form::password('password',array('class'=>'form-control','placeholder'=>'Password','required'=>'required')) }} </div>
    </div>
      <div class='form-group'>
        {{ Form::label('repassword', 'Re-password',array('class'=>'control-label col-sm-4')) }}
        <div class='col-sm-8'>{{ Form::password('repassword',array('class'=>'form-control','placeholder'=>'Re-password','required'=>'required')) }} </div>
    </div>
      
   <div class='col-sm-12 form-group text-center'>
        {{ Form::submit('Submit',array('class'=>'btn btn-primary','id'=>'submitqn')) }}
        
    </div>
  {{ Form::close() }}
@stop