<?php

namespace App\Http\Controllers\Livreur;

use App\Http\Controllers\Controller;
Use App\Models\Livreur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class FormulaireController extends Controller
{

    public function livreur_index()
    {
        $livreurs = Livreur::all();
        return view('admin.livreur.index', compact('livreurs'));
    }

    public function   profile_index()
    {
        $user = Auth::user();
        return view('profile.livreur',['user' => $user]);
    }



    public function index(Request $request){
        return view  ('admin.livreur.index');

    }

    public function form_formulaire(Request $request){
        if($request->session()->get('livreur.formulaire')){
            return redirect('espace-membre')->with('status','vous devez vous déconnecter avant de vous re-inscrire');
        }
        return view  ('livreur.formulaire');

    }

    public function traitement_formulaire(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'numero' => 'required|numeric|digits:8',
            'trajectoire' => 'required',
            'typedetransport' => 'required',
            'matricule' => 'required',
        ]);

        // Utilisez le modèle Livreur au lieu de Formulaire
        $livreur = new Livreur();

        $livreur->nom = $request->input('nom');
        $livreur->prenom = $request->input('prenom');
        $livreur->numero = $request->input('numero');
        $livreur->trajectoire = $request->input('trajectoire');
        $livreur->typedetransport = $request->input('typedetransport');
        $livreur->matricule = $request->input('matricule');

       if( $livreur->save()){
        return redirect()->back()->with('status', 'Votre formulaire a été enregistré avec succès.') ;
      }else{
      echo "error";
      }

    }

    public function destroy($id) {

        $livreur = Livreur::find($id);


        if (!$livreur) {
            echo "L'élément avec l'ID spécifié n'existe pas.";

        } else {

            if ($livreur->delete()) {
                return redirect()->back();
            } else {
                echo "Une erreur s'est produite lors de la suppression.";

            }
        }
    }

    public function update(Request $request){
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'numero' => 'required|numeric|digits:8',
            'trajectoire' => 'required',
            'typedetransport' => 'required',
            'matricule' => 'required',
        ]);

        // Récupérer l'ID du livreur à partir de la requête
        $id = $request->id_livreur;

        // Trouver le livreur avec cet ID
        $livreur = Livreur::find($id);

        // Vérifier si le livreur existe
        if(!$livreur) {
            return redirect()->back()->with('error', 'Livreur introuvable.');
        }

        // Mettre à jour les attributs du livreur
        $livreur->nom = $request->input('nom');
        $livreur->prenom = $request->input('prenom');
        $livreur->numero = $request->input('numero');
        $livreur->trajectoire = $request->input('trajectoire');
        $livreur->typedetransport = $request->input('typedetransport');
        $livreur->matricule = $request->input('matricule');

        // Sauvegarder les modifications
        if($livreur->save()) {
            return redirect()->back()->with('status', 'Votre formulaire a été enregistré avec succès.');
        } else {
            return redirect()->back()->with('error', 'Une erreur est survenue lors de la sauvegarde du formulaire.');
        }
    }



}
