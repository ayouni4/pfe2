<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirectToLogin
{

    public function handle($request, Closure $next)
    {
        if (!auth()->check()) {
            return redirect()->route('login'); // Rediriger vers la page de connexion normale
        }

        return $next($request);
    }
}
