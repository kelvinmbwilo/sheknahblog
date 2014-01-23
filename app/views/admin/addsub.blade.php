@extends('layout.admin')

@section('content')
{{ Form::open(array("url"=>route('addsubcat'),"class"=>"form-horizontal")) }}
<div class='form-group'>
        {{ Form::label('category', 'Category',array('class'=>'control-label col-sm-4')) }}
        <div class='col-sm-8'>{{ Form::select('category',Category::lists('name','id'),'',array('class'=>'form-control','required'=>'requiered')) }}  </div>
    </div>
    <div class='form-group'>
        {{ Form::label('value', 'Subcategory',array('class'=>'control-label col-sm-4')) }}
        <div class='col-sm-8'>{{ Form::text('value','',array('class'=>'form-control','placeholder'=>'Subcategory','required'=>'required')) }} </div>
    </div>
      
   <div class='col-sm-12 form-group text-center'>
        {{ Form::submit('Submit',array('class'=>'btn btn-primary','id'=>'submitqn')) }}
        
    </div>
  {{ Form::close() }}
@stop