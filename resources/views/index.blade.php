@extends('layouts.app')


@section('content')
@include('inc.carousel')
<div class="container py-4">
    
    <div class="alert-dark p-2 rounded-topc bg-grand text-white">
        <h4 class="pt-2">Diskusijų temos</h4>
    </div>

    <div class="jumbotroncus rounded-bot">
        <ul class="list-group">
            <li class="list-group-item rounded-1rem">
                <h4><a href="{{ url('/automobiliai') }}">Automobiliai</a></h4>
                <div><p class="p-0 m-0">Viskas apie automobilius</p></div>
            </li>
            <li class="list-group-item mt-2 rounded-1rem">
                <h4><a href="{{ url('/knygos') }}">Knygos</a></h4>
                <div><p class="p-0 m-0">Viskas apie knygas</p></div>
            </li>
            <li class="list-group-item mt-2 rounded-1rem">
                <h4><a href="{{ url('/laisvalaikis') }}">Laisvalaikis</a></h4>
                <div><p class="p-0 m-0">Viskas apie laisvalaikį</p></div>
            </li>
            <li class="list-group-item mt-2 rounded-1rem">
                <h4><a href="{{ url('/muzika') }}">Muzika</a></h4>
                <div><p class="p-0 m-0">Viskas apie muziką</p></div>
            </li>
        </ul>
        </div>
    </div>


@endsection
