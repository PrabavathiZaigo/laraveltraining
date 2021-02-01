<html>
<title>Laravel</title>
<body>
<form method="post" action="{{route('update')}}" enctype="multipart/form-data" align="center">
@csrf
@method('put')
<input type="hidden" name="id" value="{{$data['id'] }}" />
<lable for='name'>Name</lable>
<input type="text" name="name" value="{{$data['name']}}" /><br><br>
<lable for='age'>Age</lable>
<input type="text" name="age" value="{{$data['age']}}"/><br><br>
<lable for='phone'>Phone</lable>
<input type='number' name="phone" value="{{$data['phone_number']}}"/><br><br>
<lable></lable>
<input type="submit" value="update"  style="background-color: blue"/><br>
</body>
</html>