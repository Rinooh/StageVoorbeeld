@extends('layouts.app')

@section('content')
<x-popup />
<div class="container-fluid rows">
    <div class="row">

        <div class="col-md-6 panelLeft">
            <img class="panelIcons iconGray" src="images/internet.png" alt="Internet">
            <h1 class="font30 kleurDrie panelFieldOne">Nieuw in het portaal? hier kan je alle schermen vinden die je nodig zult hebben</h1>
        </div>

        <div class="col-md-6 panelRight">
            <img class="panelIcons iconBlue" src="images/sick.png" alt="Ziek">
            <a class="btn buttonBlue font30" href="/ziekMelden">Ziek Melden</a>
        </div>

        <div class="col-md-6 panelRight">
            <img class="panelIcons iconBlue" src="images/lesson.png" alt="Les">
            <a class="btn buttonBlue font30" href="/lesAanmaken">Les Aanmaken</a>
        </div>

        <div class="col-md-6 panelLeft">
            <img class="panelIcons iconGray" src="images/calendar.png" alt="Kalender">
            <a class="btn buttonGray font30" href="/kalender">Bekijk je rooster</a>
        </div>
    </div>
    
</div>
@endsection
