@extends('backend.layouts.app')
@section('content')
<form class="table row col-xl-9" style="margin-left:200px" method="post" action="{{route('products.store')}}" enctype="multipart/form-data" >
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
            <div class="col-xl-6">
            <lable for="phone_number">PhoneNumber</lable></div>
            <div class="col-xl-6 mb-4 text-danger">
            <input type="number" name="phone_number" class="form-control" value="{{old('phone_number')}}"/>
            @if($errors->has('phone_number'))
                {{ $errors->first('phone_number') }}
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
            <lable>Submit</lable></div>
            <div class="col-xl-6 mb-4">
            <input type="submit" value="submit" class="btn btn-primary"/></div>
            </div>
        </form>

@endsection
  