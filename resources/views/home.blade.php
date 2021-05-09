@extends('layouts.app')
@section('content')
<div class="container py-4">
   <div class="row justify-content-center">
      <div class="col-md-8">
         <div class="card">
            <div class="card-header bg-grand text-white">{{ __('Sukurtos temos') }}</div>
            <div class="card-body">
               @if (session('status'))
               <div class="alert alert-success" role="alert">
                  {{ session('status') }}
               </div>
               @endif
               <table class="table table-striped">
                  <h2 class="text-center">Automobiliai</h2>
                  @foreach ($automobiliai as $auto)
                  <tr>
                     <th class="col"><a href="automobiliai/{{$auto->id}}">{{ $auto->pavadinimas }}</a></th>
                     <th class="col"><a class="btnc btn-pink f-right" href="automobiliai/{{$auto->id}}/edit">Redaguoti</a></th>
                     <th class="col">{!! Form::open(['action' => ['App\Http\Controllers\AutomobiliaiController@destroy', $auto->id], 'method' => 'POST', 'class' => 'float-right pr-1']) !!}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Ištrinti', ['class' => 'btn border']) }}
                        {!! Form::close() !!}
                     </th>
                  </tr>
                  @endforeach 
               </table>
               <table class="table table-striped">
                  <h2 class="text-center">Knygos</h2>
                  @foreach ($knygos as $knyga)
                  <tr>
                     <th class="col"><a href="knygos/{{$knyga->id}}">{{ $knyga->pavadinimas }}</a></th>
                     <th class="col"><a class="btnc btn-pink f-right" href="knygos/{{$knyga->id}}/edit">Redaguoti</a></th>
                     <th class="col">{!! Form::open(['action' => ['App\Http\Controllers\KnygosController@destroy', $knyga->id], 'method' => 'POST', 'class' => 'float-right pr-1']) !!}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Ištrinti', ['class' => 'btn border']) }}
                        {!! Form::close() !!}
                     </th>
                  </tr>
                  @endforeach 
               </table>
               <table class="table table-striped">
                  <h2 class="text-center">Laisvalaikis</h2>
                  @foreach ($laisvalaikis as $laisv)
                  <tr>
                     <th class="col"><a href="laisvalaikis/{{$laisv->id}}">{{ $laisv->pavadinimas }}</a></th>
                     <th class="col"><a class="btnc btn-pink f-right" href="laisvalaikis/{{$laisv->id}}/edit">Redaguoti</a></th>
                     <th class="col">{!! Form::open(['action' => ['App\Http\Controllers\LaisvalaikisController@destroy', $laisv->id], 'method' => 'POST', 'class' => 'float-right pr-1']) !!}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Ištrinti', ['class' => 'btn border']) }}
                        {!! Form::close() !!}
                     </th>
                  </tr>
                  @endforeach 
               </table>
               <table class="table table-striped">
                  <h2 class="text-center">Muzika</h2>
                  @foreach ($muzikos as $muzika)
                  <tr>
                     <th class="col"><a href="muzika/{{$muzika->id}}">{{ $muzika->pavadinimas }}</a></th>
                     <th class="col"><a class="btnc btn-pink f-right" href="muzika/{{$muzika->id}}/edit">Redaguoti</a></th>
                     <th class="col">{!! Form::open(['action' => ['App\Http\Controllers\MuzikaController@destroy', $muzika->id], 'method' => 'POST', 'class' => 'float-right pr-1']) !!}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Ištrinti', ['class' => 'btn border']) }}
                        {!! Form::close() !!}
                     </th>
                  </tr>
                  @endforeach 
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection