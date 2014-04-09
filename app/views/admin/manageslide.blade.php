@extends('layout.admin')

@section('content')
<h3>Manage Slide Show Images</h3>
@if($post->count() == 0)
<h3>There Are no Images</h3>
@else
<table class="table table-responsive">
    <tr>
        <th>#</th>
        <th>

        </th>

        <th>
            Action
        </th>

    </tr>
    <?php $count=1 ?>
    @foreach($post as $us)
    <tr>
        <td>{{ $count++ }}</td>
        <td>{{ HTML::image("uploads/slideshow/{$us->picture}","",array("style"=>"width:100px;height:100px")) }}</td>

        <td id='{{ $us->id }}' >
            <br><a href="#b" title="delete post" class="deleteslide"><i class="fa fa-trash-o text-danger"></i> delete</a>
        </td>


        @endforeach


</table>
<script>
    $(document).ready(function(){
        $(".deleteslide").click(function(){
            var id1 = $(this).parent().attr('id');
            $(".deleteslide").show("slow").parent().parent().find("span").remove();
            var btn = $(this).parent().parent();
            $(this).hide("slow").parent().append("<span><br>Are You Sure <br /> <a href='#s' id='yes'><i class='fa fa-check'></i> Yes</a> <a href='#s' id='no'> <i class='fa fa-times'></i> No</a></span>");
            $("#no").click(function(){
                $(this).parent().parent().find(".deleteslide").show("slow");
                $(this).parent().parent().find("span").remove();
            });
            $("#yes").click(function(){
                $(this).parent().html("<br><i class='fa fa-spinner fa-spin'></i>deleting...");
                $.post("<?php echo url('admin/deleteslide') ?>/"+id1,function(data){
                    btn.hide("slow").next("hr").hide("slow");
                });
            });
        });//endof deleting category
    });
</script>
@endif
@stop
