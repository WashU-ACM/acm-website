@extends('layout')

@section('title', 'WashU ACM Join Us')

@section('content')
<div class="container">
	<h1>Join Us</h1>
	<br>
	<div class="container">
			<h5 class="row justify-content-md-center">
				Leave your email below to join us and get notified of the trending news and upcoming events!
			</h5>
			<br>
			<div class="container">
				<div class="row justify-content-md-center">
					<form>
						<div class="form-group">
							<label class="form-label" for="email">Email:</label>
							<input type="email" class="form-control" id="email" placeholder="acm@wustl.edu">
							<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						</div>
						<div class="row">
							<div class="form-group col-lg-6">
								<label class="form-label" for="firstname">First Name:</label>
								<input type="name" class="form-control" id="firstname" placeholder="WashU">
							</div>
							<div class="form-group col-lg-6">
								<label class="form-label" for="lastname">Last Name:</label>
								<input type="name" class="form-control" id="lastname" placeholder="ACM">
							</div>
						</div>
						<div class="form-group">
							<label class="form-label" for="email">Graduation Year (if applicable)</label>
							<input type="name" class="form-control" id="gradyear" placeholder="2099">
						</div>
						<div class="form-group">
							<label class="form-label" for="affiliation">Affiliation</label>
							<select class="form-control" id="affiliation">
								<option>WashU Undergraduate Student</option>
								<option>WashU Graduate Student</option>
								<option>WashU Alum</option>
								<option>WashU Faculty/Staff</option>
								<option>Industry Representative/Recruiter</option>
								<option>Just someone interested in WashU ACM!</option>
							</select>
						</div>
						<div class="form-group">
							<label class="form-label">
								In addition to an ACM newsletter, send info about...
							</label>
							<div class="form-check">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" checked>
									Code and Cookies (including ICPC)
								</label>
							</div>
							<div class="form-check">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" checked>
									Internship and Job Opportunities
								</label>
							</div>
						</div>
						<br>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
			<br><br>
	</div>
	@include('footer')
</div>

@endsection
