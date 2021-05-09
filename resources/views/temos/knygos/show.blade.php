@extends('layouts.app')
@section('content')

<div class="container py-4">
   <a class="btn btn-primary mb-3" href="{{ url('knygos') }}">Grįžti atgal</a>
   @if (!auth::guest())
    @if (Auth::user()->id  == $knygos->user_id)
   <a class="btnc btn-pink mb-3 float-right" href="{{$knygos->id}}/edit">Redaguoti</a>
   {!! Form::open(['action' => ['App\Http\Controllers\KnygosController@destroy', $knygos->id], 'method' => 'POST', 'class' => 'float-right pr-1']) !!}
      {{ Form::hidden('_method', 'DELETE') }}
      {{ Form::submit('Ištrinti', ['class' => 'btn border']) }}
   {!! Form::close() !!}
   @endif
   @endif
   <div class="alert-dark p-2 rounded-topc bg-grand text-white">
      <h4 class="pt-2">{{ $knygos->pavadinimas }}</h4>
   </div>
   <div class="jumbotron rounded-bot p-4">
      <div class="row flex-row-reverse">
         <div class=" rounded-1rem col-8">
            <div class="">
               {!! $knygos->tekstas !!}
            </div>
         </div>
         <div class="col">
            <div class="container pr-5">
               <small> {{ $knygos->user->name }}<br> {{ $knygos->created_at->diffForHumans() }} <br> <br> <b>Tema sukurta <br></b> {{ $knygos->created_at }}</small>
            </div>
         </div>
         <div class="vl">
         </div>
      </div>
   </div>
</div>
</div>



{{-- @include('temos.knygos.ccreate') --}}

@endsection  