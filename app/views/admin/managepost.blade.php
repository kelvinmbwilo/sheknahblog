@extends('layout.admin')

@section('content')
<h3>Manage Blog Posts</h3>
@if($post->count() == 0)
<h3>There Are no Blog Posts</h3>
@else
<table class="table table-responsive">
    <tr>
        <th>#</th>
        <th>
            
        </th>
        <th>
             Name
        </th>
        <th>
           Description
        </th>
        
        <th>
            Action
        </th>
        
    </tr>
   <?php $count=1 ?>
    @foreach($post as $us)
    <tr>
        <td>{{ $count++ }}</td>
        <td>{{ HTML::image("uploads/rooms/{$us->img1}","",array("style"=>"width:100px;height:100px")) }}</td>
        
        <td>{{ $us->name }} </td>
          <td>{{ $us->discr }} </td>
        <td id='{{ $us->id }}' >
            <a href="{{ url("admin/editpost/{$us->id}") }}" title="edit Subcategory" class="edituser"><i class="fa fa-pencil text-info"></i> edit</a>&nbsp;&nbsp;&nbsp;
            <br><a href="#b" title="delete post" class="deletepost"><i class="fa fa-trash-o text-danger"></i> delete</a>
        </td>
        
       
    @endforeach
    
 
</table>
@endif
@stop
