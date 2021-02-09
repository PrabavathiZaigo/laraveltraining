
  @extends('backend.layouts.app')

@section('content')
<form class="table row col-xl-9" style="margin-left:200px" method="post" action="" enctype="multipart/form-data" >
        @csrf
        <div class="row">
            <div class="col-xl-12  text-center mb-4">
                <h4>Register<h4>
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
            <lable>Submit</lable></div>
            <div class="col-xl-6 mb-4">
            <input type="submit" value="submit" class="btn btn-primary"/></div>
            </div>
        </form>
@endsection
  


    