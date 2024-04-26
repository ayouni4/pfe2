<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next, ...$roles)
    {
        // Votre logique de vérification des rôles ici
        if (!Auth::check()) {
            // L'utilisateur n'est pas authentifié, rediriger ou renvoyer une réponse d'erreur
        }

        if (!$request->user()->hasRole($roles)) {
            // L'utilisateur n'a pas les rôles requis, rediriger ou renvoyer une réponse d'erreur
        }

        return $next($request);
    }
}
