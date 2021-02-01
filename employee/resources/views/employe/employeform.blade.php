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
        <form class="table row col-xl-9" style="margin-left:200px" method="post" action="{{route('employes.store')}}">
        @csrf
        <div class="row">
            <div class="col-xl-12  text-center mb-4">
                <h4>Register<h4>
            </div>
            <div class="col-xl-6">
            <lable for="first_name">FirstName</lable></div>
            <div class="col-xl-6 mb-4">
            <input type="text" name="first_name"/></div>
            <div class="col-xl-6 ">
            <lable for="last_name">LastName</lable></div>
            <div class="col-xl-6 mb-4">
            <input type="text" name="last_name"/></div>
            <div class="col-xl-6">
            <lable for="gender">Gender</lable></div>
            <div class="col-xl-6 mb-4">
            <input type="radio" name="gender" value="male" />Male
            <input type="radio" name="gender" value="female" />Female
            </div>
            <div class="col-xl-6">
            <lable for="city">CityName</lable></div>
            <div class="col-xl-6 mb-4">
            <input type="text" name="city"/></div>
            <div class="col-xl-6">
            <lable for="age">Age</lable></div>
            <div class="col-xl-6 mb-4">
            <select name="age" id="country" class="form-control">
                    <option value="">Select Age</option>
                    @foreach($ages as $key => $value)
                    <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                     </select>
            </div>
            <div class="col-xl-6">
            <lable for="state">State</lable></div>
            <div class="col-xl-6 mb-4">
            <select name="state" id="country" class="form-control">
                    <option value="">Select State</option>
                    @foreach($state as $key => $value)
                    <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                     </select> 
            </div>
            <div class="col-xl-6">
            <lable for="country">Country</lable></div>
            <div class="col-xl-6 mb-4">
            <select name="country" id="country" class="form-control">
                    <option value="">Select Country</option>
                    @foreach($country as $key => $value)
                    <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                     </select>
            </div>
            <div class="col-xl-6">
            <lable for="phone">PhoneNumber</lable></div>
            <div class="col-xl-6 mb-4">
            <input type="number" name="phone"/></div>
            <div class="col-xl-6">
            <lable for="pincode">Pincode</lable></div>
            <div class="col-xl-6 mb-4">
            <input type="number" name="pincode"></div>
            <div class="col-xl-6">
            <lable for="date">Date-Of-Birth</lable></div>
            <div class="col-xl-6 mb-4">
            <input type="date" name="date"/></div>
            <div class="col-xl-6">
            <lable for="email">Email</lable></div>
            <div class="col-xl-6 mb-4">
            <input type="text" name="email"/></div>
            <div class="col-xl-6">
            <lable for="password">Password</lable></div>
            <div class="col-xl-6 mb-4">
            <input type="password" name='password'/></div>
            <div class="col-xl-6">
            <lable for="confirm_password">Confirm Password</lable></div>
            <div class="col-xl-6 mb-4">
            <input type="password" name="confirm_password"/></div>
            <div class="col-xl-6">
            <lable>Submit</lable></div>
            <div class="col-xl-6 mb-4">
            <input type="submit" value="submit"/></div>
            </div>
        </form>
    </body>
</html>







            
     