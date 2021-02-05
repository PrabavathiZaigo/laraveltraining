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
        <form class="table row col-xl-9" style="margin-left:200px" method="post" action="{{route('employes.store')}}" enctype="multipart/form-data" >
        @csrf
        <div class="row">
            <div class="col-xl-12  text-center mb-4">
                <h4>Register<h4>
            </div>
            <div class="col-xl-6">
            <lable for="first_name">FirstName</lable></div>
            <div class="col-xl-6 mb-4 text-danger">
            <input type="text" name="first_name" class="form-control" value="{{old('first_name')}}"/>
            @if($errors->has('first_name'))
                {{ $errors->first('first_name') }}
            @endif
            </div>
            <div class="col-xl-6 ">
            <lable for="last_name">LastName</lable></div>
            <div class="col-xl-6 mb-4 text-danger">
            <input type="text" name="last_name" class="form-control" value="{{old('last_name')}}"/>
            @if($errors->has('last_name'))
                {{ $errors->first('last_name') }}
            @endif
            </div>
            <div class="col-xl-6">
            <lable for="gender">Gender</lable></div>
            <div class="col-xl-6 mb-4">
            <input type="radio" name="gender" value="male" ("male" @if(old('gender')=="male") checked @endif)  />Male
            <input type="radio" name="gender" value="female" ("female" @if(old('gender')=="female") checked @endif) />Female
            @if($errors->has('gender'))
                {{ $errors->first('gender') }}
            @endif
            </div>
            <div class="col-xl-6">
            <lable for="city">CityName</lable></div>
            <div class="col-xl-6 mb-4 text-danger">
            <input type="text" name="city" class="form-control"  value="{{old('city')}}"/>
            @if($errors->has('city'))
                {{ $errors->first('city') }}
            @endif
            </div>
            <div class="col-xl-6 ">
            <lable for="age">Age</lable></div>
            <div class="col-xl-6 mb-4 text-danger">
            <select name="age" id="age" class="form-control" value="{{old('age')}}">
                    <option value="{{old('age')}}">Select Age</option>
                    @foreach($ages as $key => $value)
                    <option value="{{$key}}" ("$key" @if(old('age')=="$key") selected @endif)>{{$value}}</option>
                    @endforeach
                     </select>
                     @if($errors->has('age'))
                        {{ $errors->first('age') }}
                    @endif
            </div>
            <div class="col-xl-6">
            <lable for="state">State</lable></div>
            <div class="col-xl-6 mb-4 text-danger">
            <select name="state" id="state" class="form-control" value="{{old('state')}}">
                    <option value="{{old('state')}}">Select State</option>
                    @foreach($state as $key => $value)
                    <option value="{{$key}}" ("$key" @if(old('state')=="$key") selected @endif)>{{$value}}</option>
                    @endforeach
                     </select> 
                     @if($errors->has('state'))
                        {{ $errors->first('state') }}
                    @endif
            </div>
            <div class="col-xl-6">
            <lable for="country">Country</lable></div>
            <div class="col-xl-6 mb-4 text-danger">
            <select name="country" id="country" class="form-control" value="{{old('country')}}">
                    <option value="{{old('country')}}">Select Country</option>
                    @foreach($country as $key => $value)
                    <option value="{{$key}}" ("$key" @if(old('country')=="$key") selected @endif)>{{$value}}</option>
                    @endforeach
                     </select>
                     @if($errors->has('country'))
                         {{ $errors->first('country') }}
                    @endif
            </div>
            <div class="col-xl-6">
            <lable for="phone_number">PhoneNumber</lable></div>
            <div class="col-xl-6 mb-4 text-danger">
            <input type="number" name="phone_number" class="form-control" value="{{old('phone_number')}}"/>
            @if($errors->has('phone_number'))
                {{ $errors->first('phone_number') }}
            @endif
            </div>
            <div class="col-xl-6">
            <lable for="pincode">Pincode</lable></div>
            <div class="col-xl-6 mb-4 text-danger">
            <input type="number" name="pincode" class="form-control" value="{{old('pincode')}}"/>
            @if($errors->has('pincode'))
                {{ $errors->first('pincode') }}
            @endif
            </div>
            <div class="col-xl-6">
            <lable for="date_of_birth">Date-Of-Birth</lable></div>
            <div class="col-xl-6 mb-4 text-danger">
            <input type="date" name="date_of_birth" class="form-control" value="{{old('date_of_birth')}}"/>
            @if($errors->has('date_of_birth'))
                {{ $errors->first('date_of_birth') }}
            @endif
            </div>
            <div class="col-xl-6">
            <lable for="email">Email</lable></div>
            <div class="col-xl-6 mb-4 text-danger">
            <input type="text" name="email" class="form-control" value="{{old('email')}}"/>
            @if($errors->has('email'))
                {{ $errors->first('email') }}
            @endif
            </div>
            <div class="col-xl-6">
            <lable for="passwords">Password</lable></div>
            <div class="col-xl-6 mb-4 text-danger">
            <input type="password" name='passwords' class="form-control" value="{{old('passwors')}}"/>
            @if($errors->has('passwords'))
                {{ $errors->first('passwords') }}
            @endif
            </div>
            <div class="col-xl-6">
            <lable for="confirm_password">Confirm Password</lable></div>
            <div class="col-xl-6 mb-4">
            <input type="password" name="confirm_password" class="form-control" value="{{old('confirm_passwors')}}"/>
            </div>
            <div class="col-xl-6">
            <lable for="hobbies">Hobbies</lable></div>
            <div class="col-xl-6 mb-4">
            <input type="checkbox" name="hobbies[]" value="readings"  {{ (is_array(old('hobbies')) && in_array("readings", old('hobbies'))) ? 'checked' : '' }} />readings
            <input type="checkbox" name="hobbies[]" value="music" {{ (is_array(old('hobbies')) && in_array("music", old('hobbies'))) ? 'checked' : '' }}   />music
            <input type="checkbox" name="hobbies[]" value="cooking" {{ (is_array(old('hobbies')) && in_array("cooking", old('hobbies'))) ? 'checked' : '' }}   />cooking
            <input type="checkbox" name="hobbies[]" value="play" {{ (is_array(old('hobbies')) && in_array("play", old('hobbies'))) ? 'checked' : '' }}   />play
            <div class="text-danger">
            @if($errors->has('hobbies'))
                {{ $errors->first('hobbies') }}
            @endif
            </div>
            </div>
            <div class="col-xl-6">
            <lable for="file_name">File</lable></div>
            <div class="col-xl-6 mb-4">
            <input type="file" name="file_name" class="form-control" />
            <div class="text-danger">
            @if($errors->has('file_name'))
                {{ $errors->first('file_name') }}
            @endif
            </div>
            </div>
            <div class="col-xl-6">
            <lable>Submit</lable></div>
            <div class="col-xl-6 mb-4">
            <input type="submit" value="submit" class="btn btn-primary"/></div>
            </div>
        </form>
    </body>
</html>







            
     