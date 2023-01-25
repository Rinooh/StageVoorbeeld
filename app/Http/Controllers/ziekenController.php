<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\ziekmelding;

class ziekenController extends Controller
{
    public function ziekMelden(Request $request)
    {
        $ziekmelding = new ziekmelding;
        $ziekmelding->id_gebruiker = Auth::id();
        $ziekmelding->datum_tijd_ziekmelding = date("Y-m-d H:i:s", strtotime('+24 hours'));
        $ziekmelding->reden_ziekmelding = $request->input('reden_ziekmelding');
        $ziekmelding->save();

        return redirect('/panel')->with("success", "Ziekmelding aangemaakt");
    }
}
