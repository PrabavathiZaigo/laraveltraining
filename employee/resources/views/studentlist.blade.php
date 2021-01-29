
<h2>Student List</h2>

<table border=2>
<tr>
<th>Id</th>
<th>Name</th>
<th>Age</th>
<th>Phone</th>
</tr>

@forelse($model as $k => $model1) 

<tr>
    <td>{{$model1->id}}</td>
    <td>{{$model1->name}}</td>
    <td>{{$model1->age}}</td>
    <td>{{$model1->phone_number}}</td></tr>
@empty
<td>no record<td>
@endforelse
