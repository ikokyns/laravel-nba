@extends('layouts.master')

@section('content')
	<h1>Welcome {{ auth()->user()->first_name }}</h1>
@endsection