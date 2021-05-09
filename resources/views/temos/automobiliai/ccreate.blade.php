@if (auth::guest())

<div class="container">
    <div>
          {!! Form::open(['action' => 'App\Http\Controllers\AutomobiliaiController@store', 'method' => 'POST']) !!}
             <div class="form-group">
                {{ Form::textarea('body', '', ['class' => 'form-control flexas rounded-1rem', 'placeholder' => 'Tekstas']) }}
             </div>
          {{ Form::Submit('Paskelbti', ['class' => 'btnc btn-blue']) }}
          {!! Form::close() !!} 
    </div>
 </div>
 @endif