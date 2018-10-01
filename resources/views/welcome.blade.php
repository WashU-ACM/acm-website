@extends('layout')

@section('title', 'WashU ACM')

@section('content')
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
  <div class="container">
    <h1 class="display-3">Hello, world! We are <b>WashU ACM.</b></h1>
    <p class="lead">We are the <a href="https://wustl.edu" style="color:inherit"><b>Washington University in St. Louis'</b></a> chapter of ACM, the Association for Computing Machinery.</p>
    <hr class="my-4" style="border-color:white">
    <p> Every semester, we organize all sorts of events: Tuesday/Thursday Tech Talks, Programming Competition, Intership Panel, Course Registration Discussion, and Fireside Chat with CSE department faculties. We welcome every student with interest in computing or computer science. Come and join us to get notified of our news and upcoming events! </p>
    <p class="lead">
      <a class="btn btn-primary btn-md" href="/join" role="button">Join Us! &raquo;</a>
    </p>
  </div>
</div>

<div class="container">
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-12">
      <!-- Heading: Welcome -->
      <h2>Welcome to WashU ACM</h2>
      <p>ACM, the Association for Computing Machinery, is an international scientific and educational organization dedicated to advancing the arts, sciences, and applications of information technology. Here at Washington University we strive to be a resource for everyone, student, faculty, and staff, who has an interest in computing or computer science. </p><br>

      <!-- Heading: Upcoming Events -->
      <h3>News and Events</h3>
      <ul>
        @php
          try {
            app('db') -> connection() -> getPdo();
            $upcomings = app('db') ->
              select("SELECT title FROM events WHERE date >= NOW() - INTERVAL 6 HOUR ORDER BY date ASC;");
            $upcomings = json_decode(json_encode($upcomings), True);
          } catch (\PDOException $e) {
            $upcomings = [];
          }
        @endphp
        @foreach ($upcomings as $upcoming)
          <li>{!! $upcoming['title'] !!}</li>
        @endforeach
      </ul>
      <p><a class="btn btn-outline-primary" href="events" role="button">View details &raquo;</a></p><br>

      <h3>Useful Tools</h3>
      <p>ACM projects that make the life easier for WashU students.</p>
      <ul>
        <li><b>Trade Meal Points</b></li>
        <li><b>WebSTAC to Calendar</b></li>
        <li><b>WURatings</b></li>
      </ul>
      <p><a class="btn btn-outline-primary" href="projects" role="button">View details &raquo;</a></p><br>

      <!-- Commented out because empty right now -->
      <!-- <h3>Upcoming</h3>
      <div class="list-group">
        @foreach ($upcomings as $i => $upcoming)
        <div class="list-group-item list-group-item-action flex-column align-items-start">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">{!! $upcoming["title"] !!}</h5>
            <h5><span class="badge badge-default">{!! $upcoming["tag"] !!}</span></h5>
          </div>
          <div class="media">
            @unless (!isset($upcoming["poster"])) -->
            <!-- Image -->
            <!-- <a class="d-flex align-self-center mr-3" role="button" data-toggle="modal"  data-target="#upcoming-modal-{{ $i }}">
              <img src="/images/events/{{ $upcoming["poster"] }}" height="204.8" width="158.2">
            </a> -->
            <!-- Modal -->
            <!-- <div id="upcoming-modal-{{ $i }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-body">
                    <img src="/images/events/{{ $upcoming["poster"] }}" height="auto" width="100%">
                  </div>
                </div>
              </div>
            </div> 
            @endunless -->
            <!-- Details -->
            <!-- <div class="media-body">
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
      </div> -->

      <h3>Calendar</h3>
      <p><iframe src="https://calendar.google.com/calendar/embed?src=1n3706c7gs5pdm7f05htfp5k58%40group.calendar.google.com&ctz=America%2FChicago" style="border: 0" width="100%" height="600" frameborder="0" scrolling="no"></iframe></p><br>

      <!-- <h3>Join/Contact Us</h3><br>
      <div class = "row">
        <form method="post">
          <div class="form-group">
            <label class="form-label" for="email">Email:</label>
            <input type="email" class="form-control" name="email" placeholder="acm@su.wustl.edu" required>
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
                <input class="form-check-input" type="checkbox" name='exec'>
                Becoming an Exec Member
              </label>
            </div>
          </div>
          <br>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div> -->

      <br>
      <div class="row justify-content-md-center">
        <h6>
          If you have any question/suggestion/idea of events, just send an email to
          <a href="mailto:acm@su.wustl.edu">
            acm@su.wustl.edu</a> :)
        </h6>
      </div>
    </div>
  </div>

  @include('footer')

</div> <!-- /container -->
@endsection
