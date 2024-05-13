<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Domicile;
use App\Models\Livreur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DomicileController extends Controller
{
    public function client_domicile(Request $request){
        $user = Auth::user();
        $domiciles = Domicile::all();
        $livreurs = Livreur::all();

        // Passer les variables $user, $domiciles et $livreurs à la vue
        return view('admin.client.domicile', compact('user', 'domiciles', 'livreurs'));
    }



    public function profile_domicile (Request $request){
        $user = Auth::user();
        return view('profile.client.domicile',['user' => $user]);

    }




    public function form_domicile(Request $request)
    {
        if ($request->session()->get('client.domicile')) {
            return redirect('espace-membre')->with('status', 'vous devez vous déconnecter avant de vous re-inscrire');
        }
        return view('client.domicile');
    }

    public function traitement_domicile(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'pointdepart' => 'required',
            'pointfinal' => 'required',
            'numero' => 'required|numeric|digits:8',
            'poids' => 'required',
            'largeur' => 'required',
            'hauteur' => 'required',


        ]);

        $domicile = new Domicile();

        $domicile->nom = $request->input('nom');
        $domicile->prenom = $request->input('prenom');
        $domicile->pointdepart = $request->input('pointdepart');
        $domicile->pointfinal = $request->input('pointfinal');
        $domicile->numero = $request->input('numero');
        $domicile->poids = $request->input('poids');
        $domicile->largeur = $request->input('largeur');
        $domicile->hauteur = $request->input('hauteur');


        if ($domicile->save()) {
            return redirect()->back()->with('status', 'Votre commande a été enregistrée avec succès.');
        } else {
            return redirect()->back()->with('error', 'Une erreur est survenue lors de l\'enregistrement de votre commande.');
        }
    }




    public function destroy($id) {

        $domicile = Domicile::find($id);


        if (!$domicile) {
            echo "L'élément avec l'ID spécifié n'existe pas.";

        } else {

            if ($domicile->delete()) {
                return redirect()->back();
            } else {
                echo "Une erreur s'est produite lors de la suppression.";

            }
        }
}




}
