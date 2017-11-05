@extends('layout')

@section('title', 'WashU ACM')

@section('content')
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
  <div class="container">
    <h1 class="display-3">Hello, world! We are <b>WashU ACM.</b></h1>
    <p>We are the <a href="https://wustl.edu" style="color:inherit"><b>Washington University in St. Louis'</b></a> chapter of ACM, the Association for Computing Machinery.</p>
    <p> Every semester, we organize all sorts of events: Tuesday/Thursday Tech Talks, Programming Competition, Intership Panel, Course Registration Discussion, and Fireside Chat with CSE department faculties. We welcome every student with interest in computing or computer science. Come and join us to get notified of our news and upcoming events! </p>
    <p><a class="btn btn-primary btn-md" href="/join" role="button">Join Us! &raquo;</a></p>
  </div>
</div>

<div class="container">
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-8">
      <!-- Heading: Welcome -->
      <h2>Welcome to WashU ACM</h2>
      <p>ACM, the Association for Computing Machinery, is an international scientific and educational organization dedicated to advancing the arts, sciences, and applications of information technology. Here at Washington University we strive to be a resource for everyone, student, faculty, and staff, who has an interest in computing or computer science. </p><br>
      <!-- Heading: Upcoming Events -->
      <h3>News and Events</h3>
      <ul>
        @php
          $upcomings = app('db') -> select("SELECT title FROM events WHERE date >= NOW() ORDER BY date ASC;");
          $upcomings = json_decode(json_encode($upcomings), True);
        @endphp
        @foreach ($upcomings as $upcoming)
          <li>{!! $upcoming['title'] !!}</li>
        @endforeach
      </ul>
      <p><a class="btn btn-secondary" href="events" role="button">View details &raquo;</a></p><br>
      <h3>Useful Tools</h3>
      <p>ACM projects that make the life easier for WashU students.</p>
      <ul>
        <li><b>Trade Meal Points</b></li>
        <li><b>WebSTAC to Calendar</b></li>
        <li><b>WURatings</b></li>
      </ul>
      <p><a class="btn btn-secondary" href="projects" role="button">View details &raquo;</a></p>
   </div>
    <div class="col-md-4">
      <div class="twitter-wrap">
      <a class="twitter-timeline" href="https://twitter.com/WashUACM">Tweets by WashUACM</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></div>
    </div>
  </div>

  @include('footer')

</div> <!-- /container -->
@endsection
