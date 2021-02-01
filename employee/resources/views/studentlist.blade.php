
<h2>Student List</h2>

<table border=2>
<tr>
<th>Id</th>
<th>Name</th>
<th>Age</th>
<th>Phone</th>
<th>Operation</th>
<th>Operation</th>
</tr>

@forelse($model as $k => $model1) 

<tr>
    <td>{{$model1->id}}</td>
    <td>{{$model1->name}}</td>
    <td>{{$model1->age}}</td>
    <td>{{$model1->phone_number}}</td>
    <td><a href="{{route('edit',['id' =>$model1['id']])}}">Edit</a></td>
    <td><form action="{{route('destroy',['id' =>$model1['id']])}}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" value="delete" /></form></td></tr>
@empty
<td>no record<td>
@endforelse
