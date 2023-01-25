@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header kleurEen font40">Ziek? dat kan gebeuren, meld je makkelijk af door op de volgende knop te drukken, Morgen nog steeds ziek? klik de knop dan weer aan</div>
                <form method="POST" action="{{ url('ziekMelding') }}">
                @csrf
                    <div class="card-body">
                        <div class="row mb-3 justify-content-md-center">
                            <label for="reden_ziekmelding" class="col-md-7 col-form-label text-center kleurDrie font40">{{ __('Reden Ziekmelding') }}</label>

                            <div class="col-md-5">
                                <input id="reden_ziekmelding" type="text" class="form-control kleurDrie font40" name="reden_ziekmelding" value="{{ old('reden_ziekmelding') }}" required autocomplete="reden_ziekmelding" autofocus>
                            </div>
                        </div>

                        <div class="row mb-0 justify-content-md-center">
                            <div class="col-md-auto">
                                <button type="submit" class="btn btnOpmaak font40">
                                    {{ __('Ziek Melden') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection