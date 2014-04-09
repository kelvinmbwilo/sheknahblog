@extends('layout.admin')

@section('content')
<!--response messages-->
<h3>Add New Post</h3>
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
{{ Form::open(array("url"=>route('addpost1'),"class"=>"form-horizontal" ,'files' => true)) }}
<div class='form-group'>
        <div class='col-sm-10'>Title / Event Name <br>{{ Form::text('name','',array('class'=>'form-control','placeholder'=>'Title / Event Name','required'=>'required')) }} </div>
    </div>
@if(Category::all()->count() == 0 )
<div class='form-group'>
    <div class='col-sm-10'>Category: <br>{{ Form::text('category','',array('class'=>'form-control')) }}  </div>
</div>
@else
<div class='form-group'>
    <div class='col-sm-10'>Category<br>{{ Form::select('category',Category::lists('name','id'),'',array('class'=>'form-control')) }}  </div>
</div>
@endif
<div class='form-group'>
    <div class='col-sm-10'>Date: <br>{{ Form::text('dates','',array('class'=>'form-control','id' => 'datepicker')) }}  </div>
</div>
    <div class='form-group'>
        <div class='col-sm-10'>Discription{{ Form::textarea('discr','',array('class'=>'form-control','placeholder'=>'Discription','required'=>'required')) }} </div>
    </div>
<span class="help-block text-center">**choose at least one image and maximum of ten images for one event</span>
<div class="col-xs-12">
    <div class="col-sm-6 thumbnail">
        <div class='form-group'>
            <div class='col-sm-5'>First Image <br>{{ Form::file('img1',array('class'=>'input-sm form-control','required'=>'required')) }} </div>
            <div class='col-sm-7'>First Image Description <br>{{ Form::textarea('txt1','',array('class'=>'input-sm form-control', 'rows'=>'3')) }}  </div>
        </div>

        <div class='form-group'>
            <div class='col-sm-5'>Third Image <br>{{ Form::file('img3',array('class'=>'input-sm form-control')) }} </div>
            <div class='col-sm-7'>Third Image Description <br>{{ Form::textarea('txt3','',array('class'=>'input-sm form-control', 'rows'=>'3')) }}  </div>
        </div>

        <div class='form-group'>
            <div class='col-sm-5'>Firth Image <br>{{ Form::file('img5',array('class'=>'input-sm form-control')) }} </div>
            <div class='col-sm-7'>Firth Image Description <br>{{ Form::textarea('txt5','',array('class'=>'input-sm form-control', 'rows'=>'3')) }}  </div>
        </div>
        <div class='form-group'>
            <div class='col-sm-5'>Seventh Image <br>{{ Form::file('img7',array('class'=>'input-sm form-control')) }} </div>
            <div class='col-sm-7'>Seventh Image Description <br>{{ Form::textarea('txt7','',array('class'=>'input-sm form-control', 'rows'=>'3')) }}  </div>
        </div>

        <div class='form-group'>
            <div class='col-sm-5'>Ninth Image <br>{{ Form::file('img9',array('class'=>'input-sm form-control')) }} </div>
            <div class='col-sm-7'>Ninth Image Description <br>{{ Form::textarea('txt9','',array('class'=>'input-sm form-control', 'rows'=>'3')) }}  </div>
        </div>
    </div>
    <div class="col-sm-6 thumbnail">
        <div class='form-group'>
            <div class='col-sm-5'>Second Image <br>{{ Form::file('img2',array('class'=>'input-sm form-control')) }} </div>
            <div class='col-sm-7'>Second Image Description <br>{{ Form::textarea('txt2','',array('class'=>'input-sm form-control', 'rows'=>'3')) }}  </div>
        </div>

        <div class='form-group'>
            <div class='col-sm-5'>Forth Image <br>{{ Form::file('img4',array('class'=>'input-sm form-control')) }} </div>
            <div class='col-sm-7'>Forth Image Description <br>{{ Form::textarea('txt4','',array('class'=>'input-sm form-control', 'rows'=>'3')) }}  </div>
        </div>

        <div class='form-group'>
            <div class='col-sm-5'>Sixth Image <br>{{ Form::file('img6',array('class'=>'input-sm form-control')) }} </div>
            <div class='col-sm-7'>Sixth Image Description <br>{{ Form::textarea('txt6','',array('class'=>'input-sm form-control', 'rows'=>'3')) }}  </div>
        </div>
        <div class='form-group'>
            <div class='col-sm-5'>Eighth Image <br>{{ Form::file('img8',array('class'=>'input-sm form-control')) }} </div>
            <div class='col-sm-7'>Eighth Image Description <br>{{ Form::textarea('txt8','',array('class'=>'input-sm form-control', 'rows'=>'3')) }}  </div>
        </div>

        <div class='form-group'>
            <div class='col-sm-5'>Tenth Image <br>{{ Form::file('img10',array('class'=>'input-sm form-control')) }} </div>
            <div class='col-sm-7'>Tenth Image Description <br>{{ Form::textarea('txt10','',array('class'=>'input-sm form-control', 'rows'=>'3')) }}  </div>
        </div>

    </div>
</div>

   <div class='col-sm-12 form-group text-center'>
        {{ Form::submit('Save and add Images',array('class'=>'btn btn-primary','id'=>'submitqn')) }}
        
    </div>
  {{ Form::close() }}
  <script>
    $(document).ready(function(){
        $("#category").change(function(){
            var url = "<?php echo url("admin/subaddcat") ?>/";
            url+= $(this).val();
            $("#subcats").html("<i class='fa fa-spinner fa-spin'></i> wait...");
            $("#subcats").load(url);
        })
        $("#datepicker").datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat:"yy-mm-dd"
        });
    });
</script>
@stop
