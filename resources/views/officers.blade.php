@extends('layout')

@section('title', 'WashU ACM Officers')

@section('content')
<div class="container">
	<h1>2017 ACM Officers</h1>
	<p class="lead">Bellow are the people who make WashU ACM what it is today. Checkout here for <a href="officers">Past ACM Officers</a>.</p>
	<h2>Elected Officers</h2>
  <!-- Example row of columns -->
	<br>
  <div class="row">
    <div class="col-md-2">
			<img src="/images/officers/elliott.jpg" alt="Elliott Battle" class="img-thumbnail">
      <h4>Elliott Battle</h4>
			<h5><span class="text-muted">Co-President</span></h5>
    </div>
    <div class="col-md-2">
			<img src="/images/officers/roger.jpg" alt="Roger Iyengar" class="img-thumbnail">
      <h4>Roger Iyengar</h4>
			<h5><span class="text-muted">Co-President</span></h5>
    </div>
    <div class="col-md-2">
			<img src="/images/officers/ryan.jpg" alt="Ryan Wan" class="img-thumbnail">
      <h4>Ryan Wan</h4>
			<h5><span class="text-muted">Treasurer</span></h5>
   	</div>
		<div class="col-md-2">
			<img src="/images/officers/isaias.jpg" alt="Isaias Suarez" class="img-thumbnail">
			<h4>Isaias Suarez</h4>
			<h5><span class="text-muted">Events</span></h5>
		</div>
		<div class="col-md-2">
		 <img src="/images/officers/zach.jpg" alt="Zach Glick" class="img-thumbnail">
		 <h4>Zach Glick</h4>
		 <h5><span class="text-muted">Events</span></h5>
		</div>
		<div class="col-md-2">
			<img src="/images/officers/han.jpg" alt="Han Liu" class="img-thumbnail">
      <h4>Han Liu</h4>
			<h5><span class="text-muted">Tech Director</span></h5>
    </div>
    <div class="col-md-2">
			<img src="/images/officers/peter.jpg" alt="Peter Olson" class="img-thumbnail">
      <h4>Peter Olson</h4>
			<h5><span class="text-muted">Publicity</span></h5>
    </div>
    <div class="col-md-2">
			<img src="/images/officers/aaron.jpg" alt="Aaron Handleman" class="img-thumbnail">
      <h4>Aaron Handleman</h4>
			<h5><span class="text-muted">Publicity</span></h5>
   	</div>
		<div class="col-md-2">
			<img src="/images/officers/julia.jpg" alt="Julia Vogl" class="img-thumbnail">
			<h4>Julia Vogl</h4>
			<h5><span class="text-muted">Publicity</span></h5>
		</div>
		<div class="col-md-2">
		 <svg src="..." alt="Jackie Wong" class="img-thumbnail">
		 <h4>Jackie Wong</h4>
		 <h5><span class="text-muted">Freshman Outreach</span></h5>
		</div>
		<div class="col-md-2">
			<img src="/images/officers/joey.jpg" alt="Joseph(Joey) Ch Woodson" class="img-thumbnail">
			<h4>Joseph(Joey) Ch Woodson</h4>
			<h5><span class="text-muted">ICPC</span></h5>
		</div>
		<div class="col-md-2">
			<img src="/images/officers/john.jpg" alt="John Xiahou"  class="img-thumbnail">
			<h4>John Xiahou</h4>
			<h5><span class="text-muted">ICPC</span></h5>
			<br><br>
			<br><br>
		</div>
		<div class="col-md-2" style="margin:auto;text-align:center;">
			<img src="/images/officers/david.jpg" alt="David Ayeke"  class="img-thumbnail">
			<h4>David Ayeke</h4>
			<h5><span class="text-muted">Eternal President &amp; Supreme Leader-for-Life</span></h5>
		</div>
	</div>
	<br>
	<hr>
	<footer>
    <p>2017 &copy; WashU ACM </p>
  </footer>
</div>

@endsection
