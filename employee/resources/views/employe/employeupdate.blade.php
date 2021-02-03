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
        <form class="table row col-xl-9" style="margin-left:200px" method="post" action="{{route('employes.update')}}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-xl-12  text-center mb-4">
                <h4>Register<h4>
            </div>
            <input type="hidden" name="id" value="{{$data['id'] }}" />
            <div class="col-xl-6">
            <lable for="first_name">FirstName</lable></div>
            <div class="col-xl-6 mb-4">
            <input type="text" name="first_name" value="{{$data['first_name']}}"/></div>
            <div class="col-xl-6 ">
            <lable for="last_name">LastName</lable></div>
            <div class="col-xl-6 mb-4">
            <input type="text" name="last_name" value="{{$data['last_name']}}"/></div>
            <div class="col-xl-6">
            <lable for="gender">Gender</lable></div>
            <div class="col-xl-6 mb-4">
            <input type="radio" name="gender" value="male" {{$data['gender'] == 'male' ? 'checked' : '' }} />Male
            <input type="radio" name="gender" value="female" {{$data['gender'] == 'female' ? 'checked': '' }} />Female
            </div>
            <div class="col-xl-6">
            <lable for="city">CityName</lable></div>
            <div class="col-xl-6 mb-4">
            <input type="text" name="city" value="{{$data['city']}}"/></div>
            <div class="col-xl-6">
            <lable for="age">Age</lable></div>
            <div class="col-xl-6 mb-4">
            <select name="age" id="age" class="form-control">
                    <option value="">Select Age</option>
                    @foreach($ages as $key => $value)
                    <option value="{{$key}}" {{ $data['age'] == $key ? 'selected': '' }}>{{$value}}</option>
                    @endforeach
                     </select>
            </div>
            <div class="col-xl-6">
            <lable for="state">State</lable></div>
            <div class="col-xl-6 mb-4">
            <select name="state" id="state" class="form-control">
                    <option value="">Select State</option>
                    @foreach($state as $key => $value)
                    <option value="{{$key}}" {{ $data['state'] == $key ? 'selected': '' }}>{{$value}}</option>
                    @endforeach
                     </select> 
            </div>
            <div class="col-xl-6">
            <lable for="country">Country</lable></div>
            <div class="col-xl-6 mb-4">
            <select name="country" id="country" class="form-control">
                    <option value="">Select Country</option>
                    @foreach($country as $key => $value)
                    <option value="{{$key}}" {{ $data['country'] == $key ? 'selected': '' }}>{{$value}}</option>
                    @endforeach
                     </select>
            </div>
            <div class="col-xl-6">
            <lable for="phone_number">PhoneNumber</lable></div>
            <div class="col-xl-6 mb-4">
            <input type="number" name="phone_number" value="{{$data['phone_number']}}"/></div>
            <div class="col-xl-6">
            <lable for="pincode">Pincode</lable></div>
            <div class="col-xl-6 mb-4">
            <input type="number" name="pincode" value="{{$data['pincode']}}"/></div>
            <div class="col-xl-6">
            <lable for="date_of_birth">Date-Of-Birth</lable></div>
            <div class="col-xl-6 mb-4">
            <input type="date" name="date_of_birth" value="{{$data['date_of_birth']}}"/></div>
            <div class="col-xl-6">
            <lable for="email">Email</lable></div>
            <div class="col-xl-6 mb-4">
            <input type="text" name="email" value="{{$data['email']}}"/></div>
            <div class="col-xl-6">
            <lable for="passwords">Password</lable></div>
            <div class="col-xl-6 mb-4">
            <input type="password" name='passwords' value=""/></div>
            <div class="col-xl-6">
            <lable for="confirm_password">Confirm Password</lable></div>
            <div class="col-xl-6 mb-4">
            <input type="password" name="confirm_password" value=""/></div>
            
            <div class="col-xl-6">
            <lable for="hobbies">Hobbies</lable></div>
            <div class="col-xl-6 mb-4">
            @php $hobbies = explode(',',$data['hobbies']); @endphp
            <input type="checkbox" name="hobbies[]" value="readings" @if(in_array('readings',$hobbies)) checked @endif />readings
            <input type="checkbox" name="hobbies[]" value="music"  @if(in_array('music',$hobbies)) checked @endif  />music
            <input type="checkbox" name="hobbies[]" value="cooking"  @if(in_array('cooking',$hobbies)) checked @endif />cooking
            <input type="checkbox" name="hobbies[]" value="play"  @if(in_array('play',$hobbies)) checked @endif />play
            </div>
            <div class="col-xl-6">
            <lable for="file_name">File</lable></div>
            <div class="col-xl-6 mb-4">
            <input type="file" name="file_name"  value=""/>
            <a target="_blank" href="{{ asset('storage/images/'.$data['file_name']) }}">Download</a> 
            <div class="col-xl-6">
            <lable></lable></div>
            <div class="col-xl-6 mb-4">
            <input type="submit" value="update" class="btn btn-primary"/></div>
            </div>
        </form>
    </body>
</html>







            
     