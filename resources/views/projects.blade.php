@extends('layout')

@section('title', 'WashU ACM Projects')

@section('content')
<div class="container">
	<h1>Projects</h1>
	<p>ACM members are encouraged to develop their side projects! If you need help on brainstorming, programming or actually anything related to your project, please talk to our officers!</p>
	<h2>Showcase</h2>
	<p>Below list the most successful projects created by our ACM members. If you have a project that you believe are suitable to be on this list, contact us!</p>
	<ul>
		@foreach ($projects as $project)
	    <li><b>{{$project->name}}</b>
				<p>{!! $project->description !!}</p>
			</li>
		@endforeach
	</ul>
<!-- Footer -->
@include('footer')
</div>

@endsection
