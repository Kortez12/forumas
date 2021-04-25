@extends('layouts.app')

@section('content')
<body class="antialiased">
    <ul class="list-group-horizontal">
        @foreach($cities as $city)
            <li class="list-group-item">{{ $city->id }} {{ $city->name }} </li>
        @endforeach
    </ul>
</body>
@endsection
