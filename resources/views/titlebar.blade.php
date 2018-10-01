<nav class="navbar navbar-light navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="/"><img src="/images/acm_logo_tablet.svg" alt="ACM"></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item{{Request::is('/')?' active':''}}">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <!-- <li class="nav-item{{Request::is('events')?' active':''}}">
          <a class="nav-link" href="events">Events</a>
        </li> -->
        <li class="nav-item{{Request::is('projects')?' active':''}}">
          <a class="nav-link" href="projects">Projects</a>
        </li>
        <li class="nav-item{{Request::is('icpc')?' active':''}}">
          <a class="nav-link" href="icpc">ICPC</a>
        </li>
        <li class="nav-item{{Request::is('officers')?' active':''}}">
          <a class="nav-link" href="officers">Officers</a>
        </li>
        <li class="nav-item{{Request::is('join')?' active':''}}">
          <a class="nav-link" href="join">Join / Contact</a>
        </li>
        <!-- <li class="nav-item{{Request::is('join')?' active':''}}">
          <a class="nav-link" href="hack">HACKATHON!!</a>
        </li> -->
      </ul>
    </div>
  </div>
</nav>
