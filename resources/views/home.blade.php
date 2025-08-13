<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Home</title>
</head>
<body>
    <!-- Carrousel Bootstrap -->
        <div id="carouselExample" class="carousel slide mb-5">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSvGCDR5nBpsRnjkCoIccrnqoKpDSYUTG7MLA&s" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Bienvenue chez MyLittleCompany</h5>
                <p>Votre partenaire de confiance.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSvt8hUMuD86FVUGiBzcfuAU7yOu7tPi16ojA&s" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Nos Services</h5>
                <p>Découvrez nos solutions.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="https://www.theladders.com/wp-content/uploads/manager-office-190723-800x450.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Nos Produits</h5>
                <p>Qualité et innovation.</p>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
        </div>

        <!-- Section Services -->
        <section class="mb-5">
        <div class="container">
            <h2 class="mb-3">Nos Services</h2>
            <p>Présentation des services proposés par l’entreprise.</p>
        </div>
        </section>

        <!-- Section Produits -->
        <section class="mb-5">
        <div class="container">
            <h2 class="mb-3">Nos Produits</h2>
            <p>Présentation rapide des produits phares.</p>
        </div>
        </section>

        <!-- Section À propos -->
        <section>
        <div class="container">
            <h2 class="mb-3">À propos de nous</h2>
            <p>Valeurs, mission, histoire de l’entreprise.</p>
        </div>
        </section>
</body>
</html>