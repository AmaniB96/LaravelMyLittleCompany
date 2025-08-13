<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title', 'MyLittleCompany')</title>
    <!-- Bootstrap CDN si besoin -->
</head>
<body>
    <nav class="navbar navbar-light bg-light mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">MyLittleCompany</a>
            <!-- Ajoute ici le lien discret vers le backend si besoin -->
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>