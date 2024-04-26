<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
Use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class ClientController extends Controller
{


    public function form_register(Request $request){
        return view  ('client.register');

    }
    public function form_login(Request $request){

        return view  ('client.login');

    }

    public function traitement_register(Request $request)
    {
        $request->validate([
            'email' => 'email|required|unique:users',
            'password' =>'required|min:8',
            'name' => 'required',

        ]);
        $user = new User();
        $user->email = $request->input('email');
        $user->password = bcrypt( $request->input('password'));
        $user->name = $request->input('name');

        $user->save();
        return back()->with('status','votre compte est bien creer');

    }

    public function traitement_login(Request $request){
        $request->validate([
            'email' => 'email|required',
            'password' =>'required|min:8',
        ]);

        $user = User::where('email', $request->input('email'))->first();

        if($user){
            if(Hash::check($request->input('password'), $user->password)){
                $request->session()->put('user', $user);
                $userType = $request->input('user_type');

                // Déterminez la redirection en fonction du type d'utilisateur
                switch ($userType) {
                    case 'livreur':
                        return redirect('/formulaire');
                        break;
                    case 'garcon':
                        return redirect('/garcon/formulaire');
                        break;
                    case 'pointrelai':
                        return redirect('/pointrelai/formulaire');
                        break;
                    default:
                        return redirect('/commande');
                        break;
                }
            } else {
                return back()->with('status', 'Identifiant ou mot de passe incorrect');
            }
        } else {
            return back()->with('status', 'Désolé, vous n\'avez pas de compte avec cet email');
        }
    }

    public function logout(Request $request){

        $request->session()->forget('user');
        return redirect('/login')->with('status','vous venez de vous déconnecter');
    }








}
