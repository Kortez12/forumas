@extends('layouts.app')

@section('content')
<body class="antialiased">
    <ul class="list-group-item">
        @foreach($countries as $country)
            <li>{{ $country->id }} {{ $country->name }} </li>
        @endforeach
    </ul>
</body>
@endsection
