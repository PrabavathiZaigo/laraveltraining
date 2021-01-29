<html>
<title>Laravel</title>
<body>
<form method="post" action="{{route('student_details')}}" enctype="multipart/form-data" align="center">
@csrf
<lable for='name'>Name</lable>
<input type="text" name="name" /><br><br>
<lable for='age'>Age</lable>
<input type="text" name="age"/><br><br>
<lable for='phone'>Phone</lable>
<input type='number' name="phone"/><br><br>
<lable></lable>
<input type="submit" value="submit"  style="background-color: blue"/><br>
</body>
</html>
@if(session("success"))
    <p>{{session("success")}}</p>
@endif
