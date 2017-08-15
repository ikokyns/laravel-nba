@extends('layouts.master')

@section('content')
	<h1>Register</h1>
	<form method="POST" action="/register">
		{{ csrf_field()}}

		<input type="text" name="name" placeholder="Name">
		<input type="email" name="email" placeholder="Email">
		<input type="password" name="password" placeholder="Password">
		<input type="password" name="password_confirmation" placeholder="Confirm password">
		<button>Submit</button>
	</form>

	@include('partials.errors')

@endsection