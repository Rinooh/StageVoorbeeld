<?php

namespace App\Http\Controllers;

use App\Models\melding;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class meldingController extends Controller
{
    public function meldingOphalen()
    {
        $results = DB::select('SELECT * FROM mededelingen_instructeur ORDER BY id_mededeling DESC LIMIT 1');
        return view('pagina/panel')->with('results',$results);
    }
}
