@extends('layout')

@section('title', 'WashU ACM Officers')

@section('content')
<div class="container">
	<h1>2017-2018 ACM Officers</h1>
	<p class="lead">Bellow are the people who make WashU ACM what it is today.
		<!-- Checkout here for <a href="officers">Past ACM Officers</a>. -->
	</p><br>
	<h2>Elected Officers</h2>
  <!-- Example row of columns -->
	<br>
  <div class="row">
		@foreach ($officers as $officer)
			<div class="col-md-3">
				<img src="/images/officers/{!! $officer->profile_pic !!}" alt={!! $officer->name !!} class="img-thumbnail" style='width:inherit;'>
				<h4>{!! $officer->name !!}</h4>
				<h5><span class="text-muted">{!! $officer->title !!}</span></h5>
			</div>
		@endforeach
	</div>
	<br>
	@include('footer')
</div>

@endsection
