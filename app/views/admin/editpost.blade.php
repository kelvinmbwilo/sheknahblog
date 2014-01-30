@extends('layout.admin')

@section('content')
<!--response messages-->
         @if(isset($emsg))
         <div class="alert alert-danger alert-dismissable" >
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>{{ $emsg }}!</strong> 
          </div>
         @endif
         
         @if(isset($msg))
         <div class="alert alert-success alert-dismissable" >
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>{{ $msg }}!</strong> 
          </div>
         @endif
{{ Form::open(array("url"=>route('editpost1'),"class"=>"form-horizontal" ,'files' => true)) }}
<div class='form-group'>
        {{ Form::label('name', 'Name or Brand',array('class'=>'control-label col-sm-4')) }}
        <input type="hidden" name="id" value="{{ $post->id }}" />
        <div class='col-sm-8'>{{ Form::text('name',$post->name,array('class'=>'form-control','placeholder'=>'Name Or Brand','required'=>'required')) }} </div>
    </div>
<div class='form-group'>
        {{ Form::label('category', 'Category',array('class'=>'control-label col-sm-4')) }}
        <div class='col-sm-8'>{{ Form::select('category',Category::lists('name','id'),$post->category,array('class'=>'form-control','required'=>'requiered')) }}  </div>
    </div>
<div class='form-group'>
        {{ Form::label('subcategory', 'Subcategory',array('class'=>'control-label col-sm-4')) }}
        <div class='col-sm-8'>{{ Form::select('subcategory',Subcategory::lists('name','id'),$post->subcategory,array('class'=>'form-control','required'=>'requiered')) }}  </div>
    </div>
<div class='form-group'>
        {{ Form::label('price', 'Price',array('class'=>'control-label col-sm-4')) }}
        <div class='col-sm-8'>{{ Form::text('price',$post->price,array('class'=>'form-control','placeholder'=>'Price','required'=>'required')) }} </div>
    </div>
    <div class='form-group'>
        {{ Form::label('discr', 'Discription',array('class'=>'control-label col-sm-4')) }}
        <div class='col-sm-8'>{{ Form::textarea('discr',$post->discr,array('class'=>'form-control','placeholder'=>'Subcategory','required'=>'required')) }} </div>
    </div>
<span class="help-block text-center">**change images or add images</span>
   <div class='form-group'>
       <label class="control-label col-sm-4">{{ HTML::image("uploads/rooms/{$post->img1}","",array("style"=>"width:100px;height:100px")) }}</label>
        <div class='col-sm-8'>{{ Form::file('img1',array('class'=>'form-control')) }} </div>
    </div>

   <div class='form-group'>
        @if($post->img2 == "")
        {{ Form::label('img2', 'Second Image',array('class'=>'control-label col-sm-4')) }}
        @else
        <label class="control-label col-sm-4">{{ HTML::image("uploads/rooms/{$post->img2}","",array("style"=>"width:100px;height:100px")) }}</label>
        @endif
        
        <div class='col-sm-8'>{{ Form::file('img2',array('class'=>'form-control')) }} </div>
    </div>

    <div class='form-group'>
        @if($post->img3 == "")
        {{ Form::label('img3', 'Third Image',array('class'=>'control-label col-sm-4')) }}
        @else
        <label class="control-label col-sm-4">{{ HTML::image("uploads/rooms/{$post->img3}","",array("style"=>"width:100px;height:100px")) }}</label>
        @endif
        
        <div class='col-sm-8'>{{ Form::file('img3',array('class'=>'form-control')) }} </div>
    </div>
      
   <div class='col-sm-12 form-group text-center'>
        {{ Form::submit('Save and add Images',array('class'=>'btn btn-primary','id'=>'submitqn')) }}
        
    </div>
  {{ Form::close() }}
@stop