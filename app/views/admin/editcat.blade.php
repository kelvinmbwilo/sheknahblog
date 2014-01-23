@extends('layout.admin')

@section('content')

{{ Form::open(array("url"=>route('editcat'),"class"=>"form-horizontal")) }}
<input type="hidden" name="id" value="{{ $cats->id }}" />
    <div class='form-group'>
        {{ Form::label('value', 'Category',array('class'=>'control-label col-sm-4')) }}
        <div class='col-sm-8'>{{ Form::text('value',$cats->name,array('class'=>'form-control','placeholder'=>'Category','required'=>'required')) }} </div>
    </div>
      
   <div class='col-sm-12 form-group text-center'>
        {{ Form::submit('Submit',array('class'=>'btn btn-primary','id'=>'submitqn')) }}
        
    </div>
  {{ Form::close() }}

@stop