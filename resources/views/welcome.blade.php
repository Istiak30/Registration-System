{{--This file is for Homepage. Created using Bootstrap and basic HTML.--}}

@extends('layout')
@section('title', 'Home Page')
@section('content')
<p><br></p>
<figure class="text-center">
  <blockquote class="blockquote">
    <p>This Project is made by <b>Istiak Ahmed</b> for PHP/Laravel Internship position at Innova Infosys.</p>
  </blockquote>
  <figcaption class="blockquote-footer">
  Link to find the Registration Page <a href="{{route('signup')}}">Registration Form</a>
  </figcaption>
</figure>
@endsection