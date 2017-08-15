@if (count($errors->all()) > 0)

        @foreach($errors->all() as $error)
                <ul>
                    <li>{{ $error }}</li>
                </ul>
        @endforeach

@endif