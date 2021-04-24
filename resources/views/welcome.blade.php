@extends('layouts.app')

@include('inc.carousel')
@section('content')

<div class="container py-4">
    <div class="alert-dark p-2 rounded-topc bg-grand text-white">
        <h4 class="pt-2">Naujausios temos</h4>
    </div>

    <div class="jumbotroncus rounded-bot">
        <ul class="list-group">
            <li class="list-group-item rounded-1rem">
                <h4>Automobiliai</h4>
                <div><a href="{{ url('/') }}">Laikas</a><br>
                    <small>Something And data 2021-04-24</small>
                </div>
            </li>
            <li class="list-group-item mt-2 rounded-1rem">
                <h4>Knygos</h4>
                <div><a href="{{ url('/') }}">Laikas</a><br>
                        <small>Something And data 2021-04-24</small>
                    </div>
                                    </li>
                                    <li class="list-group-item mt-2 rounded-1rem">
                                        <h4>Muzika</h4>
                                    <div><a href="{{ url('/') }}">Laikas</a><br>
                                <small>Something And data 2021-04-24</small>
                            </div>
                            </li>
                <li class="list-group-item mt-2 rounded-1rem">
                    <h4>Laisvalaikis</h4>
                    <div><a href="{{ url('/') }}">Laikas</a><br>
                        <small>Something And data 2021-04-24</small>
                    </div>
                </li>
        </ul>
        </div>
    </div>

    <div class="container">
        <h2>Įvairūs žaidimai</h2>
                    <div class="alert-dark p-2 bg-grand text-white">
            <h4>Žaidimai</h4>
    </div>

        <div class="jumbotron">
            <ul class="p-0 m-0">
                            <li>Automobiliai
                    <div>Laikas</div>
                </li>

                <li>Knygos
                    <div>Laikas</div>
            </li>

            <li>Muzika
                <div>Laikas</div>
            </li>
            <li>Laisvalaikis
                <div>Laikas</div>
            </li>
        </ul>
    </div>
</div>

@endsection
