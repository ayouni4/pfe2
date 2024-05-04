<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            // Vérifie si l'utilisateur tente d'accéder à '/profile'
            if ($request->is('profile')) {
                return route('login'); // Redirige vers la page de connexion pour '/profile'
            }

            // Vérifie si l'utilisateur tente d'accéder à '/admin/dashboard'
            if ($request->is('admin/dashboard')) {
                return route('admin'); // Redirige vers la page de connexion pour '/admin/dashboard'
            }

            // Par défaut, redirige vers la route 'login' pour les autres cas
            return route('login');
        }

        return null; // ou retourne une réponse appropriée pour les requêtes JSON
    }
}
