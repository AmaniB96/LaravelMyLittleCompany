<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title', 'Admin - MyLittleCompany')</title>
    <!-- Bootstrap CDN si besoin -->
    <style>
        body { background: #f8f9fa; }
        .admin-nav { background: #343a40; color: #fff; }
    </style>
</head>
<body>
    <nav class="admin-nav p-3 mb-4">
        <div class="container">
            <span>Backend - MyLittleCompany</span>
            <!-- Lien retour front -->
            <a href="{{ route('home') }}" class="btn btn-light btn-sm float-end">Retour site</a>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>