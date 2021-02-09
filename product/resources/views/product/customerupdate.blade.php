
  @extends('backend.layouts.app')

@section('content')
<form class="table row col-xl-9" style="margin-left:200px" method="post" action="{{route('products.update')}}" enctype="multipart/form-data">
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
            <input type="text" name="first_name" value="{{$data['first_name']}}" class="form-control"/>
            @if($errors->has('first_name'))
                {{ $errors->first('first_name') }}
            @endif
            </div>
            <div class="col-xl-6 ">
            <lable for="last_name">LastName</lable></div>
            <div class="col-xl-6 mb-4">
            <input type="text" name="last_name" value="{{$data['last_name']}}" class="form-control"/>
            @if($errors->has('last_name'))
                {{ $errors->first('last_name') }}
            @endif
            </div>
            <div class="col-xl-6">
            <lable for="gender">Gender</lable></div>
            <div class="col-xl-6 mb-4">
            <input type="radio" name="gender" value="male" {{$data['gender'] == 'male' ? 'checked' : '' }} />Male
            <input type="radio" name="gender" value="female" {{$data['gender'] == 'female' ? 'checked': '' }} />Female
            @if($errors->has('gender'))
                {{ $errors->first('gender') }}
            @endif
            </div>
            <div class="col-xl-6">
            <lable for="city">CityName</lable></div>
            <div class="col-xl-6 mb-4">
            <input type="text" name="city" value="{{$data['city']}}" class="form-control"/>
            @if($errors->has('city'))
                {{ $errors->first('city') }}
            @endif
            </div>
            <div class="col-xl-6">
            <lable for="phone_number">PhoneNumber</lable></div>
            <div class="col-xl-6 mb-4">
            <input type="number" name="phone_number" value="{{$data['phone_number']}}" class="form-control"/>
            @if($errors->has('phone_number'))
                {{ $errors->first('phone_number') }}
            @endif
            </div>
            <div class="col-xl-6">
            <lable for="email">Email</lable></div>
            <div class="col-xl-6 mb-4">
            <input type="text" name="email" value="{{$data['email']}}" class="form-control"/>
            @if($errors->has('email'))
                {{ $errors->first('email') }}
            @endif
            </div>
            <div class="col-xl-6">
            <lable for="passwords">Password</lable></div>
            <div class="col-xl-6 mb-4">
            <input type="password" name='passwords' value="" class="form-control"/>
            @if($errors->has('passwords'))
                {{ $errors->first('passwords') }}
            @endif
            </div>
            <div class="col-xl-6">
            <lable for="confirm_password">Confirm Password</lable></div>
            <div class="col-xl-6 mb-4">
            <input type="password" name="confirm_password" value="" class="form-control"/></div>
            <div class="col-xl-6 mb-4">
            <lable></lable></div>
            <div class="col-xl-6 mb-4">
            <input type="submit" value="update" class="btn btn-primary"/></div>
            </div>
        </form>
@endsection
  


    