<html>
<head>
<title>File</title>
</head>
<body>
<form method="post" action="{{route('store1')}}" enctype="multipart/form-data" >
@csrf
<input type="file" name="file" /><br>
@if($errors->has('file'))
    {{ $errors->first('file') }}
@endif
<br>
<input type="submit" value="submit"/>
</form>
</html>