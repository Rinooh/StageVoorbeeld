@extends('layouts.app')

@section('content')
<div class="container-fluid rows">
    <div class="row">
        <div class="col-md-6 homeLeft">
            <h1 class="font40 kleurDrie">Instructeur? Navigeer naar het login portaal: <a href="/login">Login</a></h1>
            <img class="imgHome" src="images/Sprinter.png" alt="Sprinter Les Auto">
        </div>
        <div class="col-md-6 homeRight">
            <img class="imgHome" src="images/Ford.png" alt="Ford Les Auto">
            <q class="font40">Lessen was nog nooit zo makkelijk!</q>
        </div>
    </div>
</div>
@endsection
