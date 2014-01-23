@extends('layout.admin')

@section('content')
<h3>Manage Subcategories</h3>
<table class="table">
    <tr>
        <th>#</th>
        <th>
            Name
        </th>
        <th>
            Main Category
        </th>
        <th>
            Action
        </th>
        
    </tr>
   <?php $count=1 ?>
    @foreach($subs as $us)
    <tr>
        <td>{{ $count++ }}</td>
        <td>{{ $us->name }} </td>
        <td>{{ $us->maincategory->name }}</td>
        <td id='{{ $us->id }}'>
            <a href="{{ url("admin/editsub/{$us->id}") }}" title="edit Subcategory" class="edituser"><i class="fa fa-pencil text-info"></i> edit</a>&nbsp;&nbsp;&nbsp;
            <a href="#b" title="delete Subcategory" class="deletesub"><i class="fa fa-trash-o text-danger"></i> delete</a>
        </td>
        
       
    @endforeach
    
 
</table>
@stop