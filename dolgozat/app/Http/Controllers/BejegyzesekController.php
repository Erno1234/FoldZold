<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Bejegyzesek;
use Illuminate\Http\Request;

class BejegyzesekController extends Controller
{
    public function index()
    {
        return Bejegyzesek::all();
    }

    public function store(Request $request)
    {
        $bejegyzes = new Bejegyzesek();
        $bejegyzes->tevekenyseg_id = $request->tevekenyseg_id;
        $bejegyzes->osztaly_id = $request->osztaly_id;
        $bejegyzes->allapot = $request->allapot;
        $bejegyzes->save();

        return $bejegyzes;
    }

    public function show($id)
    {
        return Bejegyzesek::find($id);
    }

    public function update(Request $request, $id)
    {
        $bejegyzes = Bejegyzesek::find($id);
        if ($bejegyzes) {
            $bejegyzes->tevekenyseg_id = $request->tevekenyseg_id;
            $bejegyzes->osztaly_id = $request->osztaly_id;
            $bejegyzes->allapot = $request->allapot;
            $bejegyzes->save();
        }

        return $bejegyzes;
    }

    
}
