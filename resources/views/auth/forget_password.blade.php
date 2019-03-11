@extends('auth.layout')
@section('content')
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Password Reset</h1>
    </div>
    <form class="user" action="{{route('password.email')}}" method="post">
        @csrf
        <div class="form-group">
            <input type="email" class="form-control form-control-user {{ $errors->has('email') ? 'is-invalid' : ''}}" id="email"  value="{{old('email')}}" placeholder="Enter Email Address...">
            @if($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <b>{{$errors->first('email')}}</b>
                </span>
            @endif
        </div>
        <button class="btn btn-primary btn-user btn-block">
            Send Email Reset Link
        </button>
    </form>
    <hr>
    <div class="text-center">
        <a class="small" href="{{route('login')}}">Login</a>
    </div>
@endsection
