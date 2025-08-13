@extends('layouts/front')

@section('title', 'Home')

@section('content')

<style>
.carousel-item img {
  height: 600px; /* ou la hauteur souhaitée */
  width: 100%;
  object-fit: cover;
}
</style>
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
                <div class="row">
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Développement Web</h5>
                                <p class="card-text">Création de sites web sur mesure, applications web et plateformes e-commerce performantes et sécurisées.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Solutions Cloud</h5>
                                <p class="card-text">Migration, gestion et optimisation de vos infrastructures sur le cloud pour plus de flexibilité et de sécurité.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Cybersécurité</h5>
                                <p class="card-text">Audit, conseil et mise en place de solutions pour protéger vos données et vos systèmes informatiques.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Produits -->
        <section class="mb-5">
            <div class="container">
                <h2 class="mb-3">Nos Produits</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">MyCloudApp</h5>
                                <p class="card-text">Application SaaS pour la gestion collaborative de projets et de documents en ligne.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">SecureBox</h5>
                                <p class="card-text">Solution de stockage et partage de fichiers sécurisés pour entreprises et indépendants.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">WebShop360</h5>
                                <p class="card-text">Plateforme e-commerce clé en main, personnalisable et évolutive pour tous types de business.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section À propos -->
        <section>
            <div class="container">
                <h2 class="mb-3">À propos de nous</h2>
                <div class="row">
                    <div class="col-md-12">
                        <p>MyLittleCompany est une entreprise fictive spécialisée dans les solutions numériques innovantes pour les professionnels. Notre mission : accompagner la transformation digitale des entreprises grâce à des services sur mesure et des produits performants.</p>
                        <ul>
                            <li><strong>Innovation</strong> : Nous développons des outils à la pointe de la technologie.</li>
                            <li><strong>Proximité</strong> : Un accompagnement personnalisé pour chaque client.</li>
                            <li><strong>Sécurité</strong> : La protection des données est au cœur de nos préoccupations.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
@endsection