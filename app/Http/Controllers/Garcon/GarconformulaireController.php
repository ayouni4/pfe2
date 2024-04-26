<?php

namespace App\Http\Controllers\Garcon;

use App\Http\Controllers\Controller;
Use App\Models\Garcon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GarconformulaireController extends Controller
{
    public function garcon_index()
    {
        $garcons = Garcon::all();
        return view('admin.garcon.index', compact('garcons'));
    }

    public function form_garcon(Request $request){
        if($request->session()->get('garcon.garcon')){
            return redirect('espace-membre')->with('status','vous devez vous déconnecter avant de vous re-inscrire');
        }
        return view  ('garcon.garcon');

    }

    public function traitement_garcon(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'numero' => 'required|numeric|digits:8',
            'adresse' => 'required',
            'typetransport' => 'required',
            'matricule' => 'required',
        ]);

        // Utilisez le modèle Livreur au lieu de Formulaire
        $garcon = new Garcon();

        $garcon->nom = $request->input('nom');
        $garcon->prenom = $request->input('prenom');
        $garcon->numero = $request->input('numero');
        $garcon->adresse = $request->input('adresse');
        $garcon->typetransport = $request->input('typetransport');
        $garcon->matricule = $request->input('matricule');

       
        if( $garcon->save()){
            return redirect()->back()->with('status', 'Votre formulaire a été enregistré avec succès.');
          }else{
          echo "error";
          }

    }
    public function destroy($id) {
       
        $garcon = Garcon::find($id);
        
    
        if (!$garcon) {
            echo "L'élément avec l'ID spécifié n'existe pas.";
            
        } else {
          
            if ($garcon->delete()) {
                return redirect()->back();
            } else {
                echo "Une erreur s'est produite lors de la suppression.";
                
            }
        }
    }
    //functio update
    public function update(Request $request){
        
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'numero' => 'required|numeric|digits:8',
            'adresse' => 'required',
            'typetransport' => 'required',
            'matricule' => 'required',
        ]);
        $id = $request->id_garcon;
        $garcon = Garcon::find($id);

        $garcon->nom = $request->input('nom');
        $garcon->prenom = $request->input('prenom');
        $garcon->numero = $request->input('numero');
        $garcon->adresse = $request->input('adresse');
        $garcon->typetransport = $request->input('typetransport');
        $garcon->matricule = $request->input('matricule');

        if( $garcon->update()){
            return redirect()->back()->with('status', 'Votre formulaire a été enregistré avec succès.');
          }else{
          echo "error";
          }

    }

   
}
