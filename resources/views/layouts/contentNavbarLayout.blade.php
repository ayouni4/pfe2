<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Gestion des devises')</title>
    <!-- Inclure les ressources CSS et JS ici -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Autres liens CSS et JS -->
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Gestion des devises</a>
                <!-- Insérer d'autres éléments de navigation ici -->
            </div>
        </nav>
    </header>

    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Inclure des scripts supplémentaires si nécessaire -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Autres liens JS -->
</body>
</html>
