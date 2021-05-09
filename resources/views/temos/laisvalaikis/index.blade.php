@extends('layouts.app')


@section('content')
<div class="container py-4">
    
    <div class="alert-dark p-2 rounded-topc bg-grand text-white">
        <h4 class="pt-2">Laisvalaikis</h4>
    </div>

    <div class="jumbotroncus rounded-bot">
        <a class="btnc btn-pink" href="{{ url('laisvalaikis/create') }}">Sukurti temą...</a>
        @if (count($laisvalaikis) > 0)
        @foreach ($laisvalaikis as $laisv)
           <ul class="list-group">
            <li class="list-group-item mt-2 rounded-1rem">
                <h4><a href="{{ url("laisvalaikis/$laisv->id") }}">{{ $laisv->pavadinimas }}</a></h4>
                    <small>Tema sukurta {{ $laisv->created_at->diffForHumans() }}</small>
                
            </li> 
              </ul>
              
        @endforeach
        </div>
        {!!$laisvalaikis->links()!!}
        @else
        <h2>Jokių temų dar nėra sukurtą</h2>
    @endif
</div>

@endsection
