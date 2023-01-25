@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header font40">{{ __('Les Aanmaken') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('nieuweLesAanmaken') }}" class="loginFormulier">
                        @csrf

                        <div class="row mb-3 justify-content-md-center">
                            <label for="id_leerling" class="col-md-7 col-form-label text-center kleurDrie font40">{{ __('Leerling ID') }}</label>

                            <div class="col-md-5">
                                <input id="id_leerling" type="text" class="form-control kleurDrie font40" name="id_leerling" value="{{ old('id_leerling') }}" required autocomplete="id_leerling" autofocus>
                            </div>

                            <label for="id_instructeur" class="col-md-7 col-form-label text-center kleurDrie font40">{{ __('Instructeur ID') }}</label>

                            <div class="col-md-5">
                                <input id="id_instructeur" type="text" class="form-control kleurDrie font40" name="id_instructeur" value="{{ old('id_instructeur') }}" required autocomplete="id_instructeur" autofocus>
                            </div>
                            
                            <label for="datum_tijd_rijles" class="col-md-7 col-form-label text-center kleurDrie font40">{{ __('Datum en Tijd') }}</label>

                            <div class="col-md-5">
                                <input id="datum_tijd_rijles" type="datetime-local" class="form-control kleurDrie font40" name="datum_tijd_rijles" value="{{ old('datum_tijd_rijles') }}" required autocomplete="datum_tijd_rijles" autofocus>
                            </div>

                            <label for="lesdoel" class="col-md-7 col-form-label text-center kleurDrie font40">{{ __('Lesdoel') }}</label>

                            <div class="col-md-5">
                                <input id="lesdoel" type="text" class="form-control kleurDrie font40" name="lesdoel" value="{{ old('lesdoel') }}" required autocomplete="lesdoel" autofocus>
                            </div>

                            <label for="les_commentaar_instructeur" class="col-md-7 col-form-label text-center kleurDrie font40">{{ __('Commentaar Instructeur') }}</label>

                            <div class="col-md-5">
                                <input id="les_commentaar_instructeur" type="text" class="form-control kleurDrie font40" name="les_commentaar_instructeur" value="{{ old('les_commentaar_instructeur') }}" required autocomplete="les_commentaar_instructeur" autofocus>
                            </div>

                            <label for="ander_ophaal_adres" class="col-md-7 col-form-label text-center kleurDrie font40">{{ __('Ophaal Adres') }}</label>

                            <div class="col-md-5">
                                <input id="ander_ophaal_adres" type="text" class="form-control kleurDrie font40" name="ander_ophaal_adres" value="{{ old('ander_ophaal_adres') }}" required autocomplete="ander_ophaal_adres" autofocus>
                            </div>

                            <label for="les_resultaat" class="col-md-7 col-form-label text-center kleurDrie font40">{{ __('Les Resultaat') }}</label>

                            <div class="col-md-5">
                                <input id="les_resultaat" type="text" class="form-control kleurDrie font40" name="les_resultaat" value="{{ old('les_resultaat') }}" required autocomplete="les_resultaat" autofocus>
                            </div>
                        </div>

                        <div class="row mb-0 justify-content-md-center">
                            <div class="col-md-auto">
                                <button type="submit" class="btn btnOpmaak font40">
                                    {{ __('Aanmaken') }}
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
