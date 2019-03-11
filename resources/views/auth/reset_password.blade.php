@extends('auth.layout')
@section('content')
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Password Reset</h1>
    </div>
    <form class="user" action="{{route('password.update')}}" method="post">
        @csrf
        <input type="hidden" name="token" value="{{$token}}">
        <div class="form-group">
            <input type="email" name="email" class="form-control form-control-user {{ $errors->has('email') ? 'is-invalid' : ''}}" id="email"  value="{{old('email')}}" placeholder="Enter Email Address...">
            @if($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <b>{{$errors->first('email')}}</b>
                </span>
            @endif
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control form-control-user {{$errors->has('password') ? 'is-invalid' : ''}}" id="password" placeholder="Password">
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <b>{{$errors->first('password')}}</b>
                </span>
            @endif
        </div>
        <div class="form-group">
            <input type="password" name="password_confirmation" class="form-control form-control-user " id="password-confirm" placeholder="Confirm Password">
        </div>
        <button class="btn btn-primary btn-user btn-block">
            Reset Password
        </button>
    </form>
@endsection
