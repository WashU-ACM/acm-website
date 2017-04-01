@extends('layout')

@section('title', 'WashU ACM Events')

@section('content')
<div class="container">
	<h1>Events</h1><br>

	<!-- Section: Upcoming -->
	<h2>Upcoming</h2>
	<div class="list-group">
		@foreach ($upcomings as $i => $upcoming)
		<div class="list-group-item list-group-item-action flex-column align-items-start">
			<div class="d-flex w-100 justify-content-between">
				<h5 class="mb-1">{!! $upcoming["name"] !!}</b></h5>
				<h5><span class="badge badge-default">{!! $upcoming["tag"] !!}</span></h5>
			</div>
			<div class="media">
				@unless (!isset($upcoming["poster"]))
				<!-- Image -->
				<a class="d-flex align-self-center mr-3" role="button" data-toggle="modal"  data-target="#upcoming-modal-{{ $i }}">
					<img src="{{ $upcoming["poster"] }}" height="204.8" width="158.2">
				</a>
				<!-- Modal -->
				<div id="upcoming-modal-{{ $i }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-body">
								<img src="{{ $upcoming["poster"] }}" height="auto" width="100%">
							</div>
						</div>
					</div>
				</div>
				@endunless
				<!-- Details -->
				<div class="media-body">
					<dl class="row">
						<dd class="col-sm-12"><br></dd>
						<dt class="col-sm-2 offset-sm-1">Speaker</dt>
						<dd class="col-sm-9">{!! $upcoming["speaker"] !!}</dd>

						<dt class="col-sm-2 offset-sm-1">Date &amp; Time</dt>
						<dd class="col-sm-9">{!! $upcoming["date"] !!}</dd>

						<dt class="col-sm-2 offset-sm-1">Location</dt>
						<dd class="col-sm-9">{!! $upcoming["location"] !!}</dd>

						<dt class="col-sm-2 offset-sm-1">Description</dt>
						<dd class="col-sm-9">{!! $upcoming["description"] !!}</dd>
					</dl>
				</div>
			</div>
		</div>
		@endforeach
	</div>
	<br>

	<!-- Section: Past -->
	<h2>Past</h2>
	<div class="list-group">
		@foreach ($pasts as $i => $past)
		<div class="list-group-item list-group-item-action flex-column align-items-start">
			<div class="d-flex w-100 justify-content-between">
				<h5 class="mb-1">{!! $past["name"] !!}</b></h5>
				<h5><span class="badge badge-default">{!! $past["tag"] !!}</span></h5>
			</div>
			<div class="media">
				@unless (!isset($past["poster"]))
				<!-- Image -->
				<a class="d-flex align-self-center mr-3" role="button" data-toggle="modal"  data-target="#past-modal-{{ $i }}">
					<img src="{{ $past["poster"] }}" height="204.8" width="158.2">
				</a>
				<!-- Modal -->
				<div id="past-modal-{{ $i }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-body">
								<img src="{{ $past["poster"] }}" height="auto" width="100%">
							</div>
						</div>
					</div>
				</div>
				@endunless
				<!-- Details -->
				<div class="media-body">
					<dl class="row">
						<dd class="col-sm-12"><br></dd>
						<dt class="col-sm-2 offset-sm-1">Speaker</dt>
						<dd class="col-sm-9">{!! $past["speaker"] !!}</dd>

						<dt class="col-sm-2 offset-sm-1">Date &amp; Time</dt>
						<dd class="col-sm-9">{!! $past["date"] !!}</dd>

						<dt class="col-sm-2 offset-sm-1">Location</dt>
						<dd class="col-sm-9">{!! $past["location"] !!}</dd>

						<dt class="col-sm-2 offset-sm-1">Description</dt>
						<dd class="col-sm-9">{!! $past["description"] !!}</dd>
					</dl>
				</div>
			</div>
		</div>
		@endforeach
	</div>
	<br>

	<!-- Section: Calendar -->
	<h2>Calendar</h2>
	<iframe src="https://calendar.google.com/calendar/embed?src=su.wustl.edu_v3urbk68gh9g2g83db66su3erk%40group.calendar.google.com&ctz=America/Chicago" style="border: 0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>

	<!-- Footer -->
	@include('footer')
</div>

@endsection
