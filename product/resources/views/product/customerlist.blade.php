
@extends('backend.layouts.app')

@section('content')
<h2>Customer List</h2>
<form action="{{route('products.create')}}" method="">
@csrf
<input type="submit" value="add" class="btn btn-info"/>
</form>
<table border='2'>
    <tr>
        <th>Id</th>
        <th>FirstName</th>
        <th>LastName</th>
        <th>Gender</th>
        <th>City</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Operation</th>
        <th>Operation</th>
    </tr>
@forelse($model as $k => $model1) 

<tr>
    <td>{{$model1->id}}</td>
    <td>{{$model1->first_name}}</td>
    <td>{{$model1->last_name}}</td>
    <td>{{$model1->gender}}</td>
    <td>{{$model1->city}}</td>
    <td>{{$model1->phone_number}}</td>
    <td>{{$model1->email}}</td>
    <td><a href="{{route('products.edit',['id' => $model1['id']])}}">Edit</a></td>
    <td><form action="{{route('products.destroy',['id' => $model1['id']])}}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" value="delete" /></form></td></tr>
    </tr>
    
    @empty
    
@endforelse
</table>

{{$model -> links()}}
@endsection
  


    