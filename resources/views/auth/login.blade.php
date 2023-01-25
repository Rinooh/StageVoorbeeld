@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login Formulier') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" class="loginFormulier">
                        @csrf

                        <div class="row mb-3 justify-content-md-center">
                            <label for="naam_gebruiker" class="col-md-6 col-form-label text-center kleurDrie font40">{{ __('Gebruikersnaam') }}</label>

                            <div class="col-md-7">
                                <input id="naam_gebruiker" type="text" class="form-control @error('naam_gebruiker') is-invalid @enderror kleurDrie font40" name="naam_gebruiker" value="{{ old('naam_gebruiker') }}" required autocomplete="naam_gebruiker" autofocus>

                                @error('naam_gebruiker')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-md-center">
                            <label for="password" class="col-md-6 col-form-label text-center kleurDrie font40">{{ __('Wachtwoord') }}</label>

                            <div class="col-md-7">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror kleurDrie font40" name="password" required autocomplete="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0 justify-content-md-center">
                            <div class="col-md-auto">
                                <button type="submit" class="btn btnOpmaak font40">
                                    {{ __('Inloggen') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
