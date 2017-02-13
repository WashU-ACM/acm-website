@extends('layout')

@section('title', 'WashU ACM')

@section('content')
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
  <div class="container">
    <h1 class="display-3">Hello, world! We are ACM.</h1>
    <p>We are the Washington University in St. Louis' chapter of ACM, the Association for Computing Machinery. </p>
    <p><a class="btn btn-primary btn-md" href="https://www.acm.org/" role="button">Learn more about ACM &raquo;</a></p>
  </div>
</div>

<div class="container">
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-4">
      <h2>Heading</h2>
      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
    </div>
    <div class="col-md-4">
      <h2>Heading</h2>
      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
   </div>
    <div class="col-md-4">
      <div class="twitter-wrap">
      <a class="twitter-timeline" href="https://twitter.com/WashUACM">Tweets by WashUACM</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></div>
    </div>
  </div>

  <hr>

  <footer>
    <p>2017 &copy; WashU ACM </p>
  </footer>
</div> <!-- /container -->
@endsection
