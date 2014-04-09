@extends('layout.admin')

@section('content')
{{ Form::open(array("url"=>url('admin/slideshow/add'),"class"=>"form-horizontal",'files' => true)) }}
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
<div class='form-group'>
    <div class='col-sm-5'>Add Image <br>{{ Form::file('img1',array('class'=>'input-sm form-control','required'=>'required')) }} </div>

</div>
<div class='col-sm-12 form-group'>
    {{ Form::submit('Submit',array('class'=>'btn btn-primary','id'=>'submitqn')) }}

</div>
{{ Form::close() }}
@stop