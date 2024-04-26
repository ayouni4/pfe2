<?php

namespace App\Http\Controllers\Garcon;
use App\Http\Controllers\Controller;
Use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GarconController extends Controller
{
    public function form_register(Request $request){
        return view  ('garcon.register');

    }
    public function form_login(Request $request){
       
        return view  ('garcon.login');

    }
    public function traitement_register(Request $request)
    {
        $request->validate([
            'email' => 'email|required|unique:clients',
            'password' =>'required|min:8',
            'nom' => 'required',
            'prenom' => 'required',
        ]);
        $user = new User();
        $user->email = $request->input('email');
        $user->password = bcrypt( $request->input('password'));
        $user->nom = $request->input('nom');
        $user->prenom = $request->input('prenom');
        $user->save();
        return redirect('/garcon.register')->with('status','votre compte est bien creer');

    }
    public function traitement_login(Request $request){
        $request->validate([
            'email' => 'email|required',
            'password' =>'required|min:8',
        ]);
        $user = User::where('email', $request->input('email'))->first();
        if($user){
            if(Hash::check($request->input('password'),$user->password)){
                $request->session()->put('user',$user);
                return  redirect('/garcon/formulaire');//commande
            }else{
                return back()->with('status','identifiant ou mot de passe in correct');
            }
        }else{
            return back()->with('status','Désolé vous n\'aver pas de compte cet email');
        }

}
}
