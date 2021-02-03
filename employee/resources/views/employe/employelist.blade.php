<html>
    <title>Employee Management</title>
    <head>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" />
     <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js" type="javascript"></script>
     <link rel="stylesheet" href="../css/index.css">
    </head>
    <body>
        <header>
            
                        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                            <!-- Brand/logo -->
                            <a class="navbar-brand" href="#">
                            </a>
                            <a >
                            <h3 class="text-white" style="margin-left: 500px">EMPLOYEE REGISTER</h3></a>
                        </nav>
            </div>
        </header>



<h2>Student List</h2>
<form action="{{route('employes.create')}}" method="">
@csrf
<input type="submit" value="add" class="btn btn-info"/></form>
<table border='2'>
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
<th>Hobbies</th>
<th>File</th>
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
    <td>{{$model1->age}}</td>
    <td>{{$model1->state}}</td>
    <td>{{$model1->country}}</td>
    <td>{{$model1->phone_number}}</td>
    <td>{{$model1->pincode}}</td>
    <td>{{$model1->date_of_birth}}</td>
    <td>{{$model1->email}}</td>
    <td>{{$model1->passwords}}</td>
    <td>{{$model1->hobbies}}</td>
    <td>{{$model1->file_name}}</td>
    <td><a href="{{route('employes.edit',['id' =>$model1['id']])}}">Edit</a></td>
    <td><form action="{{route('employes.destroy',['id' =>$model1['id']])}}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" value="delete" /></form></td></tr>
    </tr>
    @empty
    
@endforelse

{{$model -> links()}}