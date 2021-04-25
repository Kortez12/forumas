@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 py-3">
            <div class="card">
                <div class="card-header bg-grand text-white">Registracija</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row justify-content-center">
                            {{-- <label for="name" class="col-md-4 col-form-label text-md-top">{{ __('Name') }}</label> --}}

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Vardas">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            {{-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> --}}

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="El. Paštas">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            {{-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> --}}

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Slaptažodis">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            {{-- <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label> --}}

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Pakartokite slaptažodį">
                            </div>
                        </div>



                        <div class="form-group row justify-content-center">
                            <div class="col-md-6">
                            <select class="custom-select{{ $errors->has('city_id') ? ' is-invalid' : '' }} " id="city_id" name="city_id">
                                <option value="" selected>Pasirinkite miestą</option>
                                @foreach($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                @endforeach
                            </select>
                            
                            @if($errors->has('city_id'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('city_id') }}
                                </div>
                            @endif
                            </div>
                        </div>


                        <div class="form-group row mb-0 justify-content-center">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-pink">
                                    {{ __('Registruotis') }}
                                </button>
                           
                            <a class="btn btn-link pl-0" href="{{ url('/') }}">
                                {{ __('Atgal') }}
                            </a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
