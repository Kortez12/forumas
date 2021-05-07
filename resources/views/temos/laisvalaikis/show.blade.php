@extends('layouts.app')
@section('content')

<div class="container py-4">
   <a class="btn btn-primary mb-3" href="{{ url('laisvalaikis') }}">Grįžti atgal</a>
   <a class="btnc btn-pink mb-3 float-right" href="{{$laisvalaikis->id}}/edit">Redaguoti</a>
   {!! Form::open(['action' => ['App\Http\Controllers\LaisvalaikisController@destroy', $laisvalaikis->id], 'method' => 'POST', 'class' => 'float-right pr-1']) !!}
      {{ Form::hidden('_method', 'DELETE') }}
      {{ Form::submit('Ištrinti', ['class' => 'btn border']) }}
   {!! Form::close() !!}
   <div class="alert-dark p-2 rounded-topc bg-grand text-white">
      <h4 class="pt-2">{{ $laisvalaikis->pavadinimas }}</h4>
   </div>
   <div class="jumbotron rounded-bot p-4">
      <div class="row flex-row-reverse">
         <div class=" rounded-1rem col-8">
            <div class="">
               {{ $laisvalaikis->tekstas }}
            </div>
         </div>
         <div class="col">
            <div class="container pr-5">
               <small>{{ $laisvalaikis->user_id }}<br> {{ $laisvalaikis->created_at }}</small>
            </div>
         </div>
         <div class="vl">
         </div>
      </div>
   </div>
</div>
</div>



{{-- @include('temos.laisvalaikis.ccreate') --}}

@endsection  