@extends('layouts.app')
@section('content')

<div class="container py-4">
   <a class="btn btn-info mb-3" href="{{ url('automobiliai') }}">Grįžti atgal</a>
   <div class="alert-dark p-2 rounded-topc bg-grand text-white">
      <h4 class="pt-2">{{ $automobiliai->pavadinimas }}</h4>
   </div>
   <div class="jumbotron rounded-bot p-4">
      <div class="row flex-row-reverse">
         <div class=" rounded-1rem col-8">
            <div class="">
               {{ $automobiliai->tekstas }}
            </div>
         </div>
         <div class="col">
            <div class="container pr-5">
               <small>Prašė <br> {{ $automobiliai->created_at }}</small>
            </div>
         </div>
         <div class="vl">
         </div>
      </div>
   </div>
</div>
</div>


@if (AUTH::guest())
<div class="container py-4">
   <div class="jumbotron rounded-1rem p-4">
      <div class="row flex-row-reverse">
         <div class=" rounded-1rem col-8">
            <div class="">
               {{ $automobiliai->tekstas }}
            </div>
         </div>
         <div class="col">
            <div class="container pr-5">
               <small>Prašė <br> {{ $automobiliai->created_at }}</small>
            </div>
         </div>
         <div class="vl">
         </div>
      </div>
   </div>
</div>
</div>
@else

  

@endif
@include('temos.automobiliai.create')

@endsection  