@extends('layouts.master')

@section('content')

<h3>Your account is deactivated. Do you want to activate your account ?</h3>
<form method="POST" action="/user/activate/{{ $user_id }}">
	{{ csrf_field() }}
	<input type="radio" name="activate" value="1">Yes
	<input type="radio" name="activate" value="0">No
	<button>Submit</button>

	@include('partials.errors')
</form>


@endsection