<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    <!-- Include Navbar -->
    @include('partials.navbar')

    <!-- Main Content Section -->
    <div class="container mt-5">
        @yield('content')
    </div>

    <!-- Include Footer -->
    @include('partials.footer')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
