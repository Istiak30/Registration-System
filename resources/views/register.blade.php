{{--This file is for Registration Form. Created using Bootstrap.--}}

@extends('layout')                                 {{--Extend Page Layout--}}
@section('title', 'Register')                      {{--Page Title--}}
@section('content')

{{--Handles Validation error using Laravel's built-in error handling system--}}

<div class="container">
    <div class="mt-5">
        @if($errors->any())
        <div class="col-12">
            @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        </div>
        @endif
        
{{--Handles and Display session error and success--}}

        @if(session()->has('error'))
        <div class="alert alert-danger">{{session('error')}}</div>
        @endif

        @if(session()->has('success'))
        <div class="alert alert-success">{{session('success')}}</div>
        @endif
    </div>

{{--Form Section--}}
    
<form action="{{route('signup.post')}}" method="POST" class = 'ms-auto me-auto mt-3' style="width: 500px">
@csrf

{{--First Name & Last Name Side by Side--}}

<div class="row g-3">
  <div class="col">
    <label class="form-label">First Name</label>
    <input type="text" class="form-control" placeholder="Jane" name="firstName">
  </div>
  <div class="col">
    <label class="form-label">Last Name</label>
    <input type="text" class="form-control" placeholder="Doe" name="lastName">
  </div>
</div>

{{--Email Section of the form--}}

  <div class="mb-3">
    <label class="form-label">Email Address</label>
    <input type="email" class="form-control" placeholder="example@gmail.com" name="email">
  </div>

  {{--Password Section of the form--}}

  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" name="password" required>
  </div>

{{--Confirm Password Section of the form--}}

  <div class="mb-3">
    <label class="form-label">Confirm Password</label>
    <input type="password" class="form-control" name="password_confirmation" required>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection