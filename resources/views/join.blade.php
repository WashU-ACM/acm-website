@extends('layout')

@section('title', 'WashU ACM Join Us')

@section('content')
<div class="container">
  <h1>Joining WashU ACM</h1>
  <br>
  <div class="container">
      <h5 class="row justify-content-md-center">
        Leave your email below to join us and get notified of the trending news and upcoming events!
      </h5>
      <br>
      <div class="container">
        <div class="row justify-content-md-center">
          <form method="post">
            <div class="form-group">
              <label class="form-label" for="email">Email:</label>
              <input type="email" class="form-control" name="email" placeholder="acm@wustl.edu" required>
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="row">
              <div class="form-group col-lg-6">
                <label class="form-label" for="firstname">First Name:</label>
                <input type="text" class="form-control" name="fname" placeholder="WashU">
              </div>
              <div class="form-group col-lg-6">
                <label class="form-label" for="lastname">Last Name:</label>
                <input type="text" class="form-control" name="lname" placeholder="ACM">
              </div>
            </div>
            <div class="form-group">
              <label class="form-label" for="gradyear">Graduation Year (if applicable)</label>
              <select class="form-control" name="gradyear">
                @for ($i = 0; $i < 6; $i++)
                  <option>{{ $i + date("Y") }}</option>
                @endfor
                <option>N/A</option>
              </select>
            </div>
            <div class="form-group">
              <label class="form-label" for="affiliation">Affiliation</label>
              <select class="form-control" name="affil">
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
                In addition to an ACM newsletter, I am interested in...
              </label>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" name='intern'>
                  Internship and Job Opportunities
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" name='exec'>
                  Becoming an Exec Member
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

@if ($submitted)
  <script>alert('{!! $message !!}')</script>
@endif

@endsection
