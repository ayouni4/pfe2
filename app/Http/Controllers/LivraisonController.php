<?php

namespace App\Http\Controllers;

use App\Models\Coli;
use App\Models\Domicile;
use Illuminate\Http\Request;
/*
class LivraisonController extends Controller
{

        public function index()
        {
            $livraisons = coli::join('domiciles', 'colis.adresse_debut', '=', 'domiciles.pointdepart')
                                ->select('colis.id', 'colis.code', 'domiciles.nom', 'domiciles.prenom')
                                ->get();

            return view('livraisons.index', compact('livraisons'));
        }

}
*/
