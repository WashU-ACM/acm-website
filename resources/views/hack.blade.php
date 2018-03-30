@extends('layout')

@section('title', 'WashU ACM Hackathon')

@section('content')
<div class="container">
	<h1>Hackathon with Google&trade; and SafeTrek&trade;</h1>
	<br>
	<h2>Hackathon by WashU ACM</h2>
	<p>WashU ACM will host a hackathon! Participation is welcome to all WashU students. Please complete the registration form below. Come and have fun programming!!</p>
  <ul>
    <li>Location & Time: Hillman 060, 11:00AM - 5:00PM, March 31</li>
    <li>Featuring: Free food, snacks, and prizes - including a Google Mini Home and more!</li>
  </ul>
	<p><a class="btn btn-primary btn-md" href="http://tinyurl.com/acmhack-sp18" role="button">
		Sign-up here &raquo;</a></p>
  <h2>More info</h2>
  <p>The two main events will be the <b>Android App</b> (sponsored by Google Developers Group) and the <b>SafeTrek Integration</b> (sponsored by SafeTrek).</p>
  <p>The competition will take place from 11am to 5pm. You are highly encouraged to install and set up necessary software (Android Studio, etc) before the hackathon to maximize the amount of time spent coding rather than installing software.</p>
  <p>Submissions should be made to the devpost:
    <a href="https://washu-acm-hack.devpost.com/">https://washu-acm-hack.devpost.com/</a></p>
  <p>You’ll need to create an account in order to make a submisision.</p>
  <h3><u>Android:</u></h3>
  <p><b>Resources</b> (download Android Studio, example code, tutorials):</p>
  <p><a href="https://tinyurl.com/android-resources-acmsp18">
    https://tinyurl.com/android-resources-acmsp18</a></p>
  <p><b>Info:</b> A representative from Google Developers Group will be judging apps based on the creativity of the app idea and (to a lesser degree) the quality of the app.</p>
  <h3><u>SafeTrek:</u></h3>
  <p>Today, people use connected networks to make things easy- turning on lights, syncing music, unlocking doors, and tracking steps take no time at all. But why can’t signaling first responders in an emergency be that simple and fast? What if a smartwatch that detected a spike in a user’s heart rate could alert an ambulance to their exact location, automatically?</p>
  <p>The SafeTrek API connects users in danger to immediate help. A heart rate spike is just one example of a life-saving integration. Our Safety Division's aim is to inspire projects that solve for public, personal, and perceived safety- leveraging smart devices and/or apps to make users’ lives both simpler AND safer.</p>
  <p>Interested? We’re looking for participants who can solve for a wide variety of use-cases in this space. The three best integrations will each win $100 Amazon gift cards.</p>
  <p>Find an example project at <a href="https://github.com/SafeTrek/safetrek-node-bootstrap">
    https://github.com/SafeTrek/safetrek-node-bootstrap</a></p>
  <p>Read more about API capabilities and request sandbox access at <a href="https://developers.safetrek.io/">
    https://developers.safetrek.io/</a></p>
    <br>
    <br>
	@include('footer')
</div>

@endsection
