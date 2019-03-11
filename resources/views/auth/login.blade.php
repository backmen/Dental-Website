@extends('auth.layout')

@section('content')
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Admin Login Section</h1>
    </div>
    <form class="user" action="{{route('login')}}" method="post">
        @csrf
        <div class="form-group">
            <input type="email" class="form-control form-control-user {{ $errors->has('email') ? 'is-invalid' : ''}}" id="email"  value="{{old('email')}}" placeholder="Enter Email Address...">
           @if($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <b>{{$errors->first('email')}}</b>
                </span>
            @endif
        </div>
        <div class="form-group">
            <input type="password" value="{{old('password')}}" class="form-control form-control-user {{$errors->has('password') ? 'is-invalid' : ''}}" id="password" placeholder="Password">
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <b>{{$errors->first('password')}}</b>
                </span>
            @endif
        </div>
        <div class="form-group">
            <div class="custom-control custom-checkbox small">
                <input type="checkbox" name="remember" {{old('remember')? 'checked' : ''}} class="custom-control-input" id="customCheck">
                <label class="custom-control-label" for="customCheck">Remember Me</label>
            </div>
        </div>
        <button class="btn btn-primary btn-user btn-block">
            Login
        </button>
    </form>
    <hr>
    <div class="text-center">
        <a class="small" href="{{route('password.request')}}">Forgot Password?</a>
    </div>
@endsection
