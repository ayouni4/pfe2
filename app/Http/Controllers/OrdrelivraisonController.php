<?php

namespace App\Http\Controllers;

use App\Models\Coli;
use Illuminate\Http\Request;

class OrdrelivraisonController extends Controller
{
    public function showColisData()
    {
        $colisData = Coli::all();
        return view('admin.ordrelivraison', ['colisData' => $colisData]);
    }
}
