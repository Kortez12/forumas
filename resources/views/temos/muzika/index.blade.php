@extends('layouts.app')


@section('content')
<div class="container py-4">
    
    <div class="alert-dark p-2 rounded-topc bg-grand text-white">
        <h4 class="pt-2">Muzika</h4>
    </div>

    <div class="jumbotroncus rounded-bot">
        <a class="btnc btn-pink" href="{{ url('muzika/create') }}">Sukurti temą...</a>
        @if (count($muzika) > 0)
        @foreach ($muzika as $muz)
           <ul class="list-group">
            <li class="list-group-item mt-2 rounded-1rem">
                <h4><a href="{{ url("muzika/$muz->id") }}">{{ $muz->pavadinimas }}</a></h4>
                    <small>Tema sukurta {{ $muz->created_at->diffForHumans() }}</small>
                
            </li> 
              </ul>
        @endforeach
        </div>
        {!!$muzika->links()!!}
        @else
        <h2>Jokių temų dar nėra sukurtą</h2>
    @endif
</div>

@endsection
