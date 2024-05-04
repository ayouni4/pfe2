<?php

namespace App\Http\Controllers\Commande;

use App\Http\Controllers\Controller;
use App\Models\Domicile;
use App\Models\Coli;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommandeeController extends Controller
{
    public function showDomicileForm()
    {  $user = Auth::user();
        return view('profile.client.domicile',['user' => $user]);
    }

    public function storeDomicile(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'pointdepart' => 'required',
            'pointfinal' => 'required',
            'numero' => 'required|numeric|digits:8',
            'ville' => 'required',
            'codepostal' => 'required',
            'city' => 'required',
            'gouvernement' => 'required',
        ]);

        // Créer et enregistrer le domicile dans la base de données
        $domicile = Domicile::create($request->all());

        // Rediriger vers le formulaire du colis avec l'ID du domicile
        return redirect()->route('commande.colis', ['domicile_id' => $domicile->id]);
    }

    public function showColisForm(Request $request)
    {
        $domicile_id = $request->query('domicile_id');

        // Récupérer le domicile à partir de l'ID
        $domicile = Domicile::findOrFail($domicile_id);

        return view('profile.client.colis', compact('domicile'));
    }

    public function storeColis(Request $request)
    {
        $validatedData = $request->validate([
            'code' => 'required|unique:colis',
            'hauteur' => 'required',
            'largeur' => 'required',
            'poids' => 'required',
            'adresse_debut' => 'required',
            'adresse_fin' => 'required',
            'type_colis' => 'required',
            'type_matier' => 'required',
        ]);

        try {
            $coli = Coli::create($validatedData);
            return redirect()->back()->with('status', 'Votre commande a été enregistrée avec succès.');
        } catch (\Exception $e) {
            // Afficher l'erreur pour le débogage
            dd($e->getMessage());
            return redirect()->back()->with('error', 'Une erreur est survenue lors de l\'enregistrement de votre commande.');
        }
    }
}
