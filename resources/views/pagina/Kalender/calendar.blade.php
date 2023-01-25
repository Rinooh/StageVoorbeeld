@extends('layouts.app')

@section('content')
<div class="container-fluid rows">
    @vite(['resources/css/calendar.css'])
    <?php
        // Aanmaken db connectie
        $mysqli = new mysqli("localhost","root", "", "autorijschool");
        include '../resources/views/pagina/Kalender/Calendar.php';
        // Aanmaken nieuwe kalender
        $calendar = new Calendar();
        // Ophalen ingelogde gebruiker z'n userID
        $userId = Auth::id();
        $instructeurID = null;

        // Ophalen van alle instructeur ID's gelinkt aan de ingelogde gebruiker
        if ($results = $mysqli->query("SELECT id_instructeur FROM instructeur WHERE gebruiker_id = $userId")) {
            $newIDResult = $results->fetch_all();
            foreach($newIDResult as $rows) {
                
                $instructeurID = $rows[0];
            }
        }
        // Ophalen van alle informatie die in de kalender wordt laten zien
        if ($result = $mysqli->query(
            "SELECT rijles.datum_tijd_rijles, leerling.voornaam, leerling.achternaam, rijles.id_instructeur, rijles.id_rijles, rijles.lesdoel, rijles.les_commentaar_instructeur, rijles.ander_ophaal_adres, rijles.les_resultaat FROM rijles INNER JOIN leerling ON rijles.id_leerling = leerling.id_leerling;")) 
        {
            $newResult = $result->fetch_all();
            // Voor elk resultaat wordt er een nieuw event aan de kalender toegevoegd
            foreach($newResult as $row) {
                if($row[3] === $instructeurID) {
                    echo $row[3];
                    $leerlingNaam = $row[1] . " " . $row[2] . ' Tijd: ' . $row[0];
                    $calendar->add_event($leerlingNaam, $row[0], 1, '', $row[4], $row[5], $row[6], $row[7], $row[8]);
                }
            }
        }
        // De kalender wordt in HTML laten zien.
        echo $calendar;
    ?>
</div>
@endsection
