@extends('layout')

@section('title', 'WashU ACM ICPC')

@section('content')
<div class="container">
	<h1>International Collegiate Programming Contest</h1>
	<br>
	<h2>About ACM-ICPC</h2>
	<p><a href="https://icpc.baylor.edu" style="color:inherit">ACM International Collegiate Programming Contest</a> (abbreviated as ACM-ICPC or ICPC) is an annual multi-tiered competitive programming competition among the universities of the world. It is a contest where you have limited time to make correct and efficient programs. A lot of them are similar to questions asked in technical interviews. Here at WashU we host a qualifier contest each year and form teams to compete in the regional contests. For the 2017 season, WashU ICPC team has been ranked as the 34th in the <a href="https://icpc.baylor.edu/scoreboard/" style="color:inherit">ICPC World Final.</a> Read about the news <a href="https://engineering.wustl.edu/news/Pages/WashU-programming-team-headed-to-world-competition-.aspx" style="color:inherit">here.</a></p>
	<br>
	<h2>ACM-ICPC Qualifier (October 2018) @ WashU</h2>
	<p>WashU ACM will host ICPC Qualifier Contest at Wash U, at 11:00 - 16:00 (CDT) October 6, 2018, and participation in this event is required for those who wish to compete in the regional contest. Please complete the registration form by September 28, 2018 1:00PM. Come and have fun programming!!</p>
	<p><a class="btn btn-primary btn-md" href="https://goo.gl/forms/of6sHYOTAXya10l33" role="button">
		Sign-up for the Qualifier &raquo;</a></p>
	<br>
	@include('footer')
</div>

@endsection
