<h2>Student List</h2>

<table border=2>
<tr>
<th>Id</th>
<th>FirstName</th>
<th>LastName</th>
<th>Gender</th>
<th>City</th>
<th>Age</th>
<th>State</th>
<th>Country</th>
<th>Phone</th>
<th>Pincode</th>
<th>Date</th>
<th>Email</th>
<th>Password</th>
</tr>
@forelse($model as $k => $model1) 

<tr>
    <td>{{$model1->id}}</td>
    <td>{{$model1->first_name}}</td>
    <td>{{$model1->last_name}}</td>
    <td>{{$model1->gender}}</td>
    <td>{{$model1->city}}</td>
    <td>{{$model1->age}}</td>
    <td>{{$model1->state}}</td>
    <td>{{$model1->country}}</td>
    <td>{{$model1->phone_number}}</td>
    <td>{{$model1->pincode}}</td>
    <td>{{$model1->date_of_birth}}</td>
    <td>{{$model1->email}}</td>
    <td>{{$model1->password}}</td>
    </tr>
@endforelse