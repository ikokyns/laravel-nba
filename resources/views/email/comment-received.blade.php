<p>Hello {{ $team->name }} </p>

<p>Yoy have new comment on your team
	<a href="{{ url('team/' . $team->id) }}">
		{{ $team->name }}
	</a>
</p>