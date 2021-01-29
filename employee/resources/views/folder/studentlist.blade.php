<table border=2>
<tr>
<th>Id</th>
<th>Name</th>
<th>Address</th>
<th>Pincode</th>
<th>Edit</th>
</tr>

@forelse($model as $k => $model1) 

<tr>
    <td>{{$model1->id}}</td>
    <td>{{$model1->Name}}</td>
    <td>{{$model1->Address}}</td>
    <td>{{$model1->Pincode}}</td>
    <td><a href="{{route('student_details1')}}">edit</a></td></tr>
@empty
<td>no record<td>
@endforelse
<tfoot>
{{$model->links()}}
</tfoot>

