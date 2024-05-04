<?php

namespace App\Http\Controllers\Commande;

use App\Http\Controllers\Controller;

use App\Models\Coli;
use App\Models\Commande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PoinrelaiController extends Controller
{
    public function showPointRelaisForm()
    {  $user = Auth::user();
        return view('profile.client.prelais',['user' => $user]);
    }


    public function storePointRelais(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'pointdepart' => 'required',
            'pointrelais' => 'required',
            'numero' => 'required|numeric|digits:8',
        ]);

        // Créer et enregistrer le point relais dans la base de données
        $commande = Commande::create($request->all());

        // Rediriger vers le formulaire du colis avec l'ID du point relais
        return redirect()->route('commande.colis', ['commande_id' => $commande->id]);
    }

    public function showColisForm(Request $request)
    {
        $commande_id = $request->query('commande_id');

        // Récupérer le domicile à partir de l'ID
        $commande = Commande::findOrFail($commande_id);

        return view('profile.client.coli', compact('commande'));
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
