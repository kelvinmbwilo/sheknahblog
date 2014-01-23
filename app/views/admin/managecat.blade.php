@extends('layout.admin')

@section('content')
<h3>Manage Main Categories</h3>
<table class="table">
    <tr>
        <th>#</th>
        <th>
            Name
        </th>
        
        <th>
            Action
        </th>
        
    </tr>
   <?php $count=1 ?>
    @foreach($cats as $us)
    <tr>
        <td>{{ $count++ }}</td>
        <td class="col-md-7">{{ $us->name }} </td>
        <td id='{{ $us->id }}' >
            <a href="{{ url("admin/editcat/{$us->id}") }}" title="edit Subcategory" class="edituser"><i class="fa fa-pencil text-info"></i> edit</a>&nbsp;&nbsp;&nbsp;
            <a href="#b" title="delete Subcategory" class="deletecat"><i class="fa fa-trash-o text-danger"></i> delete</a>
        </td>
        
       
    @endforeach
    
 
</table>
@stop
