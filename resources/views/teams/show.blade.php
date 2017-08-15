@extends('layouts.master')

@section('content')
	<h2>{{ $team->name }}</h2>
	<h6>{{ $team->email }}</h6>
	<h6>{{ $team->address }}</h6>
	<h6>{{ $team->city }}</h6>
	<h5>Players:</h5>
	<ul>
		@foreach($team->players as $player)
		<li><a href="/players/{{ $player->id }}">{{ $player->first_name . ' ' . $player->last_name }}</a></li>
		@endforeach
	</ul>
@endsection