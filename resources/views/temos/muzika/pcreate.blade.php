@extends('layouts.app')

@section('content')

<div class="container py-4">

    <div class="alert-dark p-2 rounded-1rem bg-grand text-white">
        <h4 class="pt-2">Sukurti įrašą</h4>
    </div>
    <div>
        {!! Form::open(['action' => 'App\Http\Controllers\MuzikaController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            <br>
            {{ Form::text('pavadinimas', '', ['class' => 'form-control flexas rounded-1rem', 'placeholder' => 'Temos pavadinimas...']) }}
            <br>
            {{ Form::textarea('tekstas', '', ['class' => 'form-control flexas rounded-1rem', 'placeholder' => 'Tekstas...']) }}
        </div>
         </div>
        
<div>
        {{ Form::Submit('Paskelbti', ['class' => 'btnc btn-blue']) }}
  {!! Form::close() !!}
        <a class="btn btn-primary" href="{{ url('/muzika') }}">Atgal</a>
   </div>
</div>
@endsection
