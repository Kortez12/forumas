@extends('layouts.app')


@section('content')
<div class="container py-4">
    
    <div class="alert-dark p-2 rounded-topc bg-grand text-white">
        <h4 class="pt-2">Automobliai</h4>
    </div>

    <div class="jumbotroncus rounded-bot">
        <a class="btnc btn-pink" href="{{ url('automobiliai/create') }}">Sukurti temą...</a>
        @if (count($automobiliai) > 0)
        @foreach ($automobiliai as $auto)
           <ul class="list-group">
            <li class="list-group-item mt-2 rounded-1rem">
                <h4><a href="{{ url("automobiliai/$auto->id") }}">{{ $auto->pavadinimas }}</a></h4>
                    <small>Tema sukurta {{ $auto->created_at->diffForHumans() }}</small>
                
            </li> 
              </ul>
        @endforeach
        </div>
        <div class="">
        {!!$automobiliai->links()!!}
        </div>
        @else
        <h2>Jokių temų dar nėra sukurtą</h2>
    @endif
</div>

@endsection
