@extends('layouts.master')

@section('content')
	<div class="blog-post">
		<h2 class="blog-post-title">Pregled timova</h2>
		<ul class="list-unstyled">
			@foreach($teams as $team)
				<li><a href="teams/{{ $team->id }}">{{ $team->name }}</a></li>
			@endforeach
		</ul>
	</div>
@endsection