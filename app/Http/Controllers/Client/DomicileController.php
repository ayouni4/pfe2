<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Domicile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DomicileController extends Controller
{
    public function client_domicile(Request $request){
        $domiciles = Domicile::all();
        return view('admin.client.domicile', compact('domiciles'));

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
            'ville' => 'required',
            'codepostal' => 'required',
            'city' => 'required',
            'gouvernement' => 'required',
        ]);

        $domicile = new Domicile();

        $domicile->nom = $request->input('nom');
        $domicile->prenom = $request->input('prenom');
        $domicile->pointdepart = $request->input('pointdepart');
        $domicile->pointfinal = $request->input('pointfinal');
        $domicile->ville = $request->input('ville');
        $domicile->codepostal = $request->input('codepostal');
        $domicile->city = $request->input('city');
        $domicile->gouvernement = $request->input('gouvernement');
        $domicile->numero = $request->input('numero');

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


    public function update(Request $request){

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
        $id = $request->id_domicile;
        $domicile = Domicile::find($id);

        $domicile->nom = $request->input('nom');
        $domicile->prenom = $request->input('prenom');
        $domicile->pointdepart = $request->input('pointdepart');
        $domicile->pointfinal = $request->input('pointfinal');
        $domicile->ville = $request->input('ville');
        $domicile->codepostal = $request->input('codepostal');
        $domicile->city = $request->input('city');
        $domicile->gouvernement = $request->input('gouvernement');
        $domicile->numero = $request->input('numero');

        if( $domicile->update()){
            return redirect()->back()->with('status', 'Votre formulaire a été enregistré avvec succès.');
          }else{
          echo "error";
          }

    }
}




