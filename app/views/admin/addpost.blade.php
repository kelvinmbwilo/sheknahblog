@extends('layout.admin')

@section('content')
{{ Form::open(array("url"=>route('addpost'),"class"=>"form-horizontal")) }}
<div class='form-group'>
        {{ Form::label('name', 'Name or Brand',array('class'=>'control-label col-sm-4')) }}
        <div class='col-sm-8'>{{ Form::text('name','',array('class'=>'form-control','placeholder'=>'Name Or Brand','required'=>'required')) }} </div>
    </div>
<div class='form-group'>
        {{ Form::label('category', 'Category',array('class'=>'control-label col-sm-4')) }}
        <div class='col-sm-8'>{{ Form::select('category',Category::lists('name','id'),'',array('class'=>'form-control','required'=>'requiered')) }}  </div>
    </div>
<div class='form-group'>
        {{ Form::label('subcategory', 'Subcategory',array('class'=>'control-label col-sm-4')) }}
        <div class='col-sm-8'>{{ Form::select('subcategory',Subcategory::lists('name','id'),'',array('class'=>'form-control','required'=>'requiered')) }}  </div>
    </div>
    <div class='form-group'>
        {{ Form::label('discr', 'Discription',array('class'=>'control-label col-sm-4')) }}
        <div class='col-sm-8'>{{ Form::textarea('discr','',array('class'=>'form-control','placeholder'=>'Subcategory','required'=>'required')) }} </div>
    </div>
      
   <div class='col-sm-12 form-group text-center'>
        {{ Form::submit('Save and add Images',array('class'=>'btn btn-primary','id'=>'submitqn')) }}
        
    </div>
  {{ Form::close() }}
@stop