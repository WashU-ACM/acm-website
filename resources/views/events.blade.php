@extends('layout')

@section('title', 'WashU ACM Events')

@section('content')
<div class="container">
	<h1>Events</h1><br>

	<!-- Section: Upcoming -->
	<h2>Upcoming</h2>
	<div class="list-group">

		<!-- Event 1 -->
		<div class="list-group-item list-group-item-action flex-column align-items-start">
			<div class="d-flex w-100 justify-content-between">
				<h5 class="mb-1">ACM Dev Team | <b>Master Command Line</b></h5>
				<h5><span class="badge badge-default">Dev Team</span></h5>
			</div>
			<div class="media">
				<img class="d-flex align-self-center mr-3" src="images/events/dt.pdf" height="204.8" width="158.2">
				<div class="media-body">
					<dl class="row">
						<dd class="col-sm-12"><br></dd>
						<dt class="col-sm-2 offset-sm-1">Speaker</dt>
						<dd class="col-sm-9">Isaias Suarez</dd>

						<dt class="col-sm-2 offset-sm-1">Date &amp; Time</dt>
						<dd class="col-sm-9">Saturday 2/25 @ 4-6 PM</dd>

						<dt class="col-sm-2 offset-sm-1">Location</dt>
						<dd class="col-sm-9">Gregg Technology Center(GTC) @ South 40 STS</dd>

						<dt class="col-sm-2 offset-sm-1">Description</dt>
						<dd class="col-sm-9">Learn how to be a master of command line. Tips and tricks to speed up your work flow. </dd>
						</dl>
					</div>
				</div>
			</div>

			<!-- Event 2 -->
			<div class="list-group-item list-group-item-action flex-column align-items-start">
				<div class="d-flex w-100 justify-content-between">
					<h5 class="mb-1">Tuesday Tech Talk | <b>Python: 0 to production</b></h5>
					<h5><span class="badge badge-default">T3</span></h5>
				</div>
				<div class="media">
					<img class="d-flex align-self-center mr-3" src="images/events/t3.png" height="204.8" width="158.2">
					<div class="media-body">
						<dl class="row">
							<dd class="col-sm-12"><br></dd>
							<dt class="col-sm-2 offset-sm-1">Speaker</dt>
							<dd class="col-sm-9">Roger Iyengar</dd>

							<dt class="col-sm-2 offset-sm-1">Date &amp; Time</dt>
							<dd class="col-sm-9">Tuesday 2/28 @ 7 PM</dd>

							<dt class="col-sm-2 offset-sm-1">Location</dt>
							<dd class="col-sm-9">Gregg Technology Center(GTC) @ South 40 STS</dd>

							<dt class="col-sm-2 offset-sm-1">Description</dt>
							<dd class="col-sm-9">Roger is going to give you a tour through the lovely Python programming language. Going from 0 to production. Real practical staffs that you should never miss. </dd>
						</dl>
					</div>
				</div>
			</div>
		</div>
		<br>

		<!-- Section: Calendar -->
		<h2>Calendar</h2>
		<iframe src="https://www.google.com/calendar/embed?src=washuacm%40gmail.com&ctz=America/Chicago" style="border: 0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>

		<!-- Footer -->
		@include('footer')
	</div>

	@endsection
