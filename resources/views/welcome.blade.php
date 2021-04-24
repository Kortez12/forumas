@extends('layouts.app')

@include('inc.carousel') 
@section('content')

<div class="container py-4">
    <div class="alert-dark p-2 rounded">
        <h4>Naujausios temos</h4>
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