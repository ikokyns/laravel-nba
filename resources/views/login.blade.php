@extends('layouts.master')

@section('content')
	<h1>Login</h1>
	<form method="POST" action="/login">
		{{ csrf_field() }}

		<input type="email" name="email" placeholder="email">
		<input type="password" name="password" placeholder="password">
		<button>Login</button>
	</form>

	@include('partials.errors')
@endsection 