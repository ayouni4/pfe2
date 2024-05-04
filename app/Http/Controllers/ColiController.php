<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
Use App\Models\Coli;
use Illuminate\Http\Request;

class ColiController extends Controller
{
    public function showCreateForm(){

        return view  ('coli');

    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|unique:colis',
            'hauteur' => 'required',
            'largeur' => 'required',
            'poids' => 'required',
            'adresse_debut' => 'required',
            'adresse_fin' => 'required',
            'type_colis' => 'required',
            'type_matier' => 'required',
        ]);

        $coli = new Coli();

        $coli->code = $request->input('code');
        $coli->hauteur = $request->input('hauteur');
        $coli->largeur = $request->input('largeur');
        $coli->poids = $request->input('poids');
        $coli->adresse_debut = $request->input('adresse_debut');
        $coli->adresse_fin = $request->input('adresse_fin');
        $coli->type_colis = $request->input('type_colis');
        $coli->type_matier = $request->input('type_matier');

        if ($coli->save()) {
            return redirect()->back()->with('status', 'Votre coli a été enregistrée avec succès.');
        } else {
            return redirect()->back()->with('status', 'Erreur lors de l\'enregistrement de la commande.');
        }
    }







}
