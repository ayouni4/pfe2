<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
Use App\Models\Commande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CommandeController extends Controller
{
    public function client_index(Request $request){
        $clients = Commande::all();
        return view('admin.client.index', compact('clients'));

    }


    public function form_espace(Request $request){
        if($request->session()->get('client.commande')){
            return redirect('espace-membre')->with('status','vous devez vous déconnecter avant de vous re-inscrire');
        }
        return view  ('client.commande');

    }
//ajouter les commandes dans BD
    public function traitement_espace(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'pointdepart' => 'required',
            'pointrelais' => 'required',
            'numero' => 'required|numeric|digits:8',
        ]);

        $commande = new Commande();

        $commande->nom = $request->input('nom');
        $commande->prenom = $request->input('prenom');
        $commande->pointdepart = $request->input('pointdepart');
        $commande->pointrelais = $request->input('pointrelais');
        $commande->numero = $request->input('numero');

      if( $commande->save()){
        return redirect()->back()->with('status', 'Votre commande a été enregistré avec succès.');
      }else{
      echo "error";
      }



    }
    public function destroy($id) {

        $Commande = Commande::find($id);


        if (!$Commande) {
            echo "L'élément avec l'ID spécifié n'existe pas.";

        } else {

            if ($Commande->delete()) {
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
            'pointrelais' => 'required',
            'numero' => 'required|numeric|digits:8',
        ]);
        $id = $request->id_client;
        $commande = Commande::find($id);

        $commande->nom = $request->input('nom');
        $commande->prenom = $request->input('prenom');
        $commande->pointdepart = $request->input('pointdepart');
        $commande->pointrelais = $request->input('pointrelais');
        $commande->numero = $request->input('numero');

        if( $commande->update()){
            return redirect()->back()->with('status', 'Votre formulaire a été enregistré avvec succès.');
          }else{
          echo "error";
          }

    }


}
