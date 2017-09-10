@extends('layout')

@section('title', 'WashU ACM Join Us')

@section('content')
<div class="container">
	<h1>Join Us</h1>
	<br>
	<div class="container">
		<div class="row justify-content-md-center">
			<h5>
				<br><br>
				Leave your name and email address below to hear from us the trending news and upcoming events!
				<br><br><br>
			</h5>
			<div class="container">
				<div class="row justify-content-md-center">
					<form>
						<div class="form-group">
							<label class="control-label col-auto" for="email">Name:</label>
							<input type="name" class="form-control col-lg-12" id="bane" placeholder="WashU ACM">
						</div>
						<div class="form-group">
							<label class="control-label col-auto" for="pwd">Email:</label>
							<input type="email" class="form-control col-auto" id="email" placeholder="acm@wustl.edu">
						</div>
						<div class="form-group">
							<div class="col-md-auto">
								<a class="btn btn-primary btn-md" role="button" style="color:white">Submit</a>
							</div>
						</div>
					</form>
				</div>
			</div>
			<br><br><br>
		</div>
	</div>
	@include('footer')
</div>

@endsection
