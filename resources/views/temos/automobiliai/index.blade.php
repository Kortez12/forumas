@extends('layouts.app')


@section('content')
<div class="container py-4">
    
    <div class="alert-dark p-2 rounded-topc bg-grand text-white">
        <h4 class="pt-2">Automobliai</h4>
    </div>

    <div class="jumbotroncus rounded-bot">
        @if (count($automobiliai) > 0)
        @foreach ($automobiliai as $auto)
           <ul class="list-group">
            <li class="list-group-item mt-2 rounded-1rem">
                <h4><a href="{{ url("automobiliai/$auto->id") }}">{{ $auto->pavadinimas }}</a></h4>
                <div><a href="{{ url('/') }}">Laikas</a><br><hr class="p-0 m-1 w-25">
                    <small>Tema sukurta {{ $auto->created_at }}</small>
                </div>
            </li> 
              </ul>
        @endforeach
        @else
        <h2>Jokių temų dar nėra sukurtą</h2>
    @endif
</div>

@endsection
