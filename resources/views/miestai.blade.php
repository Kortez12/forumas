@extends('layouts.app')

@section('content')
    <ul class="list-group">
        @foreach($cities as $city)
            <li class="list-group-item">{{ $city->id }} {{ $city->name }} </li>
        @endforeach
    </ul>
@endsection
