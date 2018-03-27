@extends('layout')

@section('title', 'WashU ACM Hackathon')

@section('content')
<div class="container">
	<h1>Hackathon with Google&trade; and SafeTrek&trade;</h1>
	<br>
	<h2>Wait. What's Hackathon?</h2>
	<p>Just start with <a href="https://google.com/search?q=hackathon">this</a>.</p>
	<br>
	<h2>Hackathon by WashU ACM</h2>
	<p>WashU ACM will host a hackathon! Participation is welcome to all WashU students. Please complete the registration form below. Come and have fun programming!!</p>
  <ul>
    <li>Location & Time: Hillman 060, 11:00AM - 5:00PM, March 31</li>
    <li>Featuring: Free food, snacks, and prizes - including a Google Mini Home and more!</li>
  </ul>
  <br>
	<p><a class="btn btn-primary btn-md" href="http://tinyurl.com/acmhack-sp18" role="button">
		Sign-up here &raquo;</a></p>
	<br>
	@include('footer')
</div>

@endsection
