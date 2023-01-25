<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rijles;
use App\Models\leerling;
use Faker\Factory as Faker;

class lesAanmakenController extends Controller
{
    public function lesAanmaken(Request $request)
    {
        $faker = Faker::create();

        $les = new rijles;
        $les->id_leerling = $request->input('id_leerling');
        $les->id_instructeur = $request->input('id_instructeur');
        $les->datum_tijd_rijles = $request->input('datum_tijd_rijles');
        $les->lesdoel = $request->input('lesdoel');
        $les->les_commentaar_instructeur = $request->input('les_commentaar_instructeur');
        $les->ander_ophaal_adres = $request->input('ander_ophaal_adres');
        $les->les_resultaat = $request->input('les_resultaat');
        $les->save();

        $leerling = new leerling;
        $leerling->voornaam = $faker->firstName();
        $leerling->achternaam = $faker->lastName();


        return redirect('/panel')->with("success", "Nieuwe les aangemaakt");
    }

    public function lesAanpassen(Request $request)
    {
        $les = rijles::find($request->input('rijles_id'));
        $les->les_commentaar_instructeur = $request->input('les_commentaar_instructeur');
        $les->les_resultaat = $request->input('les_resultaat');
        $les->update();
        return redirect ('/kalender')->with("success", "les is bewerkt");
    }

    public function lesOphalen($id) 
    {
        $les = rijles::find($id);
        return view('pagina/lesAanpassen')->with('les',$les);
    }
}
