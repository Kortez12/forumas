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
                <h4>Knygos</h4>
                <div><a href="{{ url('/') }}">Laikas</a><br>
                        <small>Something And data 2021-04-24</small>
                    </div>
                                    </li>
                                    <li class="list-group-item mt-2 rounded-1rem">
                                        <h4>Muzika<span class="badge btn-blue ml-2">Nauja!</span></h4>
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


@endsection
