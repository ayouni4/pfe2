<?php

namespace App\Http\Controllers\Pointrelai;

use App\Http\Controllers\Controller;
Use App\Models\Pointrelai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class PointrelaiformulaireController extends Controller
{
    public function pointrelai_index()
    {
        $pointrelais = Pointrelai::all();
        return view('admin.pointrelai.index', compact('pointrelais'));
    }




    public function form_pointrelai(Request $request){
        if($request->session()->get('pointrelai.pointrelai')){
            return redirect('espace-membre')->with('status','vous devez vous déconnecter avant de vous re-inscrire');
        }
        return view  ('pointrelai.pointrelai');

    }

    public function traitement_pointrelai(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'responsable' => 'required',
            'numero' => 'required|numeric|digits:8',
            'matricule' => 'required',
            'adresse' => 'required',
            'Houvert' => 'required',
            'Hfermeture' => 'required',
            'journnée' => 'required',
            'typeprelais' => 'required',
        ]);

        // Utilisez le modèle Livreur au lieu de Formulaire
        $pointrelai = new Pointrelai();

        $pointrelai->nom = $request->input('nom');
        $pointrelai->responsable = $request->input('responsable');
        $pointrelai->numero = $request->input('numero');
        $pointrelai->matricule = $request->input('matricule');
        $pointrelai->adresse = $request->input('adresse');
        $pointrelai->Houvert = $request->input('Houvert');
        $pointrelai->Hfermeture = $request->input('Hfermeture');
        $pointrelai->journnée = $request->input('journnée');
        $pointrelai->typeprelais = $request->input('typeprelais');

       
        if( $pointrelai->save()){
            return redirect()->back()->with('status', 'Votre formulaire a été enregistré avec succès.');
          }else{
          echo "error";
          }

    }

    public function destroy($id) {
       
        $pointrelai = Pointrelai::find($id);
        
        
    
        if (!$pointrelai) {
            echo "L'élément avec l'ID spécifié n'existe pas.";
            
        } else {
          
            if ($pointrelai->delete()) {
                return redirect()->back();
            } else {
                echo "Une erreur s'est produite lors de la suppression.";
                
            }
        }
    }




    public function update(Request $request){
        $request->validate([
            'nom' => 'required',
            'responsable' => 'required',
            'numero' => 'required|numeric|digits:8',
            'matricule' => 'required',
            'adresse' => 'required',
            'Houvert' => 'required',
            'Hfermeture' => 'required',
            'journnée' => 'required',
            'typeprelais' => 'required',
        ]);

        $id = $request->id_pointrelai;
        
        $pointrelai = Pointrelai::find($id);
        
    
   
        if(! $pointrelai) {
            return redirect()->back()->with('error', ' pointrelai introuvable.');
        }
    
       
        $pointrelai->nom = $request->input('nom');
        $pointrelai->responsable = $request->input('responsable');
        $pointrelai->numero = $request->input('numero');
        $pointrelai->matricule = $request->input('matricule');
        $pointrelai->adresse = $request->input('adresse');
        $pointrelai->Houvert = $request->input('Houvert');
        $pointrelai->Hfermeture = $request->input('Hfermeture');
        $pointrelai->journnée = $request->input('journnée');
        $pointrelai->typeprelais = $request->input('typeprelais');
    
        // Sauvegarder les modifications
        if($pointrelai->save()) {
            return redirect()->back()->with('status', 'Votre formulaire a été enregistré avec succès.');
        } else {
            return redirect()->back()->with('error', 'Une erreur est survenue lors de la sauvegarde du formulaire.');
        }
    }
}
