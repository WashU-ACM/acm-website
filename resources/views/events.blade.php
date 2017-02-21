@extends('layout')

@section('title', 'WashU ACM Events')

@section('content')
<div class="container">
	<h1>Events</h1><br>
	<h2>Coming Events</h2>
	<ul>
		<li>Dev Team Regular Meeting</li>
		<li>Thursday Tech Talk about Python programming by Roger Iyengar</li>
		<li>EnWeek ACM Showcase</li>
		<li>Invited Speaker: Richard Stallman</li>
	</ul><br>
	@include('footer')
</div>

@endsection
