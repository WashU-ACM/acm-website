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
				<h5 class="mb-1">{!! $upcoming["title"] !!}</h5>
				<h5><span class="badge badge-default">{!! $upcoming["tag"] !!}</span></h5>
			</div>
			<div class="media">
				@unless (!isset($upcoming["poster"]))
				<!-- Image -->
				<a class="d-flex align-self-center mr-3" role="button" data-toggle="modal"  data-target="#upcoming-modal-{{ $i }}">
					<img src="/images/events/{{ $upcoming["poster"] }}" height="204.8" width="158.2">
				</a>
				<!-- Modal -->
				<div id="upcoming-modal-{{ $i }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-body">
								<img src="/images/events/{{ $upcoming["poster"] }}" height="auto" width="100%">
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
						<dd class="col-sm-9">{!! date('l, M jS @ g:i A', strtotime($upcoming["date"])) !!}</dd>

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

	<!-- Section: Calendar -->
	<h2>Calendar</h2>
	<iframe src="https://calendar.google.com/calendar/embed?src=1n3706c7gs5pdm7f05htfp5k58%40group.calendar.google.com&ctz=America%2FChicago" style="border: 0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>

	<!-- Footer -->
	@include('footer')
</div>

@endsection
