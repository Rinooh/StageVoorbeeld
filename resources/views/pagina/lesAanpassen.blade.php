@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header font40">Leerling ID: {{ $les['id_leerling'] }} Les ID: {{ $les['id_rijles'] }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('lesAanpassen') }}" class="loginFormulier">
                        @csrf
                        <div class="row mb-3 justify-content-md-center">
                            <label for="id_leerling" class="col-md-7 col-form-label text-center kleurDrie font40">{{ __('Resultaten: ') }}</label>

                            <div class="col-md-5">
                                {{Form::textarea('les_resultaat', $les['les_resultaat'], ['class' => 'form-control', 'placeholder' => 'les_resultaat'])}}
                                <input type="hidden" value="{{ $les['id_rijles'] }}" name="rijles_id">
                            </div>
                        </div>
                        <div class="row mb-3 justify-content-md-center">
                            <label for="id_leerling" class="col-md-7 col-form-label text-center kleurDrie font40">{{ __('Opmerkingen: ') }}</label>

                            <div class="col-md-5">
                                {{Form::textarea('les_commentaar_instructeur', $les['les_commentaar_instructeur'], ['class' => 'form-control', 'placeholder' => 'les_commentaar_instructeur'])}}
                            </div>
                        </div>

                        <div class="row mb-0 justify-content-md-center">
                            <div class="col-md-auto">
                                <button type="submit" class="btn btnOpmaak font40">
                                    {{ __('Resultaat/Commentaar toevoegen/wijzigen') }}
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