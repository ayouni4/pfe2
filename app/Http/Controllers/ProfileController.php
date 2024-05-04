<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show()
    {

        if (!Auth::check()) {
            // Utilisateur non authentifié, rediriger vers la page de connexion avec un message d'erreur
            return redirect()->route('login')->with('error', 'Vous devez vous connecter pour accéder à votre profil.');
        }



        $user = Auth::user();
        return view('profile.profile', ['user' => $user]);



    }
}
