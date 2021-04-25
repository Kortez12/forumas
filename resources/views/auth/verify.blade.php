@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-grand text-white">{{ __('Patvirtinkite savo El. Paštą') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif
                    {{ __('Norėdami toliau naudotis šia svetaine turite patvirtinti savo elektroninį paštą.') }}
                    {{ __('Jeigu negavote laiško') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('spauskite čia, kad gautumėte dar vieną') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
