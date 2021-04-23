@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="jumbotron text-center">
            <h2 class="text-center">Sveiki atvykę į forumą</h2>
            <p class="text-center">Geriausiai praktikai rekomenduojame prisiregistruoti</p>
            <a class="btn btn-primary" href="{{ url('/login') }}">Prisijungti</a>
            <a class="btn btn-success" href="{{ url('/register') }}">Registruotis</a>
        </div>

    <div class="alert-dark p-2 rounded">
        <h4>Naujausios temos</h4>
    </div>
    <div>
    </div>
    <div class="jumbotron">
        <ul class="p-0 m-0">
            <li>Automobiliai
                <div>Laikas</div>
                <br>
            </li>

            <li>Knygos
                <div>Laikas</div>
                <br>
            </li>
            <li>Muzika
                <div>Laikas</div>
                <br>
            </li>
            <li>Laisvalaikis
                <div>Laikas</div>
                <br>
            </li>
        </ul>
    </div>




    </div>



@endsection