@extends('layouts.master')

@section('content')
	<h2>{{ $player->first_name . ' ' . $player->last_name }}</h2>
	<h6>{{ $player->email }}</h6>
	<h6>{{ $player->team->name }}</h6>
@endsection