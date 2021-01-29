<html>
<title>Laravel</title>
<body>
<form method="post" action="{{route('student')}}" enctype="multipart/form-data" align="center">
@csrf
<lable for='name'>Name</lable>
<input type="text" name="name" /><br><br>
<lable for='address'>Address</lable>
<input type="text" name="address"/><br><br>
<lable for='pincode'>Pincode</lable>
<input type="text" name="pincode"/><br><br>
<lable></lable>
<input type="submit" value="submit"  style="background-color: blue"/><br>
</form>
</body>
</html>
@if(session("success"))
    <p>{{session("success")}}</p>
@endif

