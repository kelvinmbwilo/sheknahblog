@extends('layout.admin')

@section('content')
<h3>Manage Users</h3>
<table class="table">
    <tr>
        <th>#</th>
        <th>
            Name
        </th>
        <th>
            Email
        </th>
        <th>
            Action
        </th>
        
    </tr>
   <?php $count=1 ?>
    @foreach($user as $us)
    <tr>
        <td>{{ $count++ }}</td>
        <td>{{ $us->firstname." " .$us->lastname }} </td>
        <td>{{ $us->email }}</td>
        <td id='{{ $us->id }}'>
            <a href="{{ url("admin/edituser/{$us->id}") }}" title="edit user" class="edituser"><i class="fa fa-pencil text-info"></i> edit</a>&nbsp;&nbsp;&nbsp;
            <a href="#b" title="delete user" class="deleteuser"><i class="fa fa-trash-o text-danger"></i> delete</a>
        </td>
        
       
    @endforeach
    
 
</table>
@stop