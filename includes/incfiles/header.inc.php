<?php
    session_start();
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    define('BASE_URL', "http://127.0.0.1:8080/moon-crea/");

    $URL = "http://127.0.0.1:8080/moon-crea/";

    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }

    //var_dump($_SESSION);

    include($_SERVER['DOCUMENT_ROOT'] . "/moon-crea/includes/incfiles/connexion.inc.php");

;?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">

    <?php
    // Titres de base pour chaque page
    $pageTitles = [
        'accueil' => 'Moon Création | Bijoux Érotiques de Luxe - Perles de Hanche & Chevillères Sensuelles',
        'boutique' => 'Boutique | Moon Création - Nos Collections Exclusives',
        'panier' => 'Votre Panier | Moon Création',
        'checkout' => 'Finalisez Votre Commande | Moon Création',
        'commande' => 'Confirmation de Commande | Moon Création',
        'fiche-produit' => 'Découvrez ce Produit | Moon Création',
        'collection' => 'Collection | Moon Création',
        'contact' => 'Ecrivez-nous | Moon Création',
        'categorie' => 'Catégorie | Moon Création'
    ];

    // Titre par défaut si la page n'est pas définie
    $defaultTitle = 'Moon Création | Bijoux Érotiques de Luxe';

    // Déterminer le titre de base
    $baseTitle = isset($pageTitles[$page]) ? $pageTitles[$page] : $defaultTitle;

    // Cas particuliers pour collection et catégorie
    if (($page === 'collection' || $page === 'categorie') && isset($currentCollection)) {
        $title = htmlspecialchars($currentCollection) . ' | ' . $baseTitle;
    } elseif (($page === 'collection' || $page === 'categorie') && isset($currentCategory)) {
        $title = htmlspecialchars($currentCategory) . ' | ' . $baseTitle;
    } else {
        $title = $baseTitle;
    }

    // Cas spécial pour la fiche produit si vous avez une variable $productName
    if ($page === 'fiche-produit' && isset($productName)) {
        $title = htmlspecialchars($productName) . ' | Moon Création';
    }
    ?>
    <title><?php echo $title; ?></title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#8C2F4A">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="Moon Création">

    <meta name="description" content="Moon Création - Bijoux érotiques de luxe en perles fines. Découvrez nos collections exclusives de perles de hanche et chevillères qui célèbrent la sensualité féminine. Livraison discrète mondiale.">
    <meta name="keywords" content="perles de hanche, chevillères, bijoux érotiques, lingerie fine, accessoires sensuels, luxe, Moon Création, bijoux intimes">
    <meta name="author" content="Moon Création">
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="7 days">
    <meta name="language" content="French">
    
    <!-- Balises Open Graph (Facebook, LinkedIn, etc.) -->
    <meta property="og:title" content="Moon Création | Bijoux Érotiques de Luxe">
    <meta property="og:description" content="Découvrez des bijoux intimes d'exception qui subliment les courbes féminines. Collections limitées en perles fines et soie.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.moon-creations.com">
    <meta property="og:image" content="https://www.moon-creations.com/images/og-image.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Moon Création - Collection Signature">
    <meta property="og:site_name" content="Moon Création">
    <meta property="og:locale" content="fr_FR">
    
    <!-- Balises Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Moon Création | Bijoux Intimes de Luxe">
    <meta name="twitter:description" content="Perles de hanche & chevillères artisanales pour une sensualité raffinée. Pièces uniques, édition limitée.">
    <meta name="twitter:image" content="https://www.moon-creations.com/images/twitter-card.jpg">
    <meta name="twitter:site" content="@MoonCreation">
    <meta name="twitter:creator" content="@MoonCreation">
    
    <!-- Balises supplémentaires -->
    <link rel="canonical" href="https://www.moon-creations.com">
    <meta name="theme-color" content="#8C2F4A">
    
    <link rel="icon" type="image/png" href="<?php echo $URL;?>images/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="<?php echo $URL;?>images/favicon.svg" />
    <link rel="shortcut icon" href="<?php echo $URL;?>images/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $URL;?>images/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="Moon Créations" />
    <link rel="manifest" href="site.webmanifest" />

    <!-- Schema.org Markup -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LingerieStore",
      "name": "Moon Création",
      "description": "Boutique en ligne de bijoux érotiques haut de gamme",
      "url": "https://www.moon-creations.com",
      "logo": "https://www.moon-creations.com/images/logo.png",
      "telephone": "+22901000000",
      "email": "contact@moon-creations.com",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "123 Rue de la Sensualité",
        "addressLocality": "Cotonou",
        "postalCode": "00229",
        "addressCountry": "BJ"
      },
      "openingHours": "Mo-Fr 10:00-18:00",
      "priceRange": "$$$",
      "sameAs": [
        "https://www.instagram.com/mooncreation",
        "https://www.pinterest.com/mooncreation",
        "https://www.facebook.com/mooncreation"
      ]
    }
    </script>
    
    <!-- Styles Premium -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Montserrat:wght@300;400&family=Dancing+Script:wght@700&family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" media="screen" type="text/css" href="<?php echo $URL ;?>css/style.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    


    <link rel="stylesheet" media="screen" type="text/css" href="https://www.websoftenterprise.com/mooncreation/css/responsive-fixed.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    

</head>
<body>
    <!-- Navigation Principale -->
    <nav class="navbar navbar-expand-lg navbar-moon fixed-top">
        <div class="container-fluid px-3 px-md-4">
            <!-- Logo + Panier (visible sur mobile) -->
            <div class="d-flex align-items-center">
                <!-- Bouton Menu Catégories -->
                <button class="navbar-toggler custom-toggler me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#categoriesMenu" aria-label="Menu catégories">
                    <span class="toggler-icon toggler-icon--categories"></span>
                </button>
                
                <!-- Logo -->
                <a class="navbar-brand flex-grow-1 text-center" href="<?php echo $URL ;?>">
                    <img src="<?php echo $URL;?>images/logo-moon-creation.png" class="logo-moon" alt="Logo" width="120">
                </a>
            </div>

            <!-- Panier + Burger -->
            <div class="d-flex align-items-center">
                <!-- Bouton Panier -->
                <a href="<?php echo $URL ;?>htdocs/panier" class="nav-link nav-link-moon position-relative me-3" aria-label="Panier">
                    <i class="fas fa-shopping-bag fa-lg"></i>
                    <span class="cart-badge">0</span>
                </a>
                
                <!-- Bouton Menu Principal -->
                <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-label="Menu principal" aria-expanded="false">
                    <span class="toggler-icon toggler-icon--main whitemenu"></span>
                </button>
            </div>

            <!-- Menu Principal -->
            <div class="collapse navbar-collapse" id="navbarMain">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link nav-link-moon active" href="<?php echo $URL ;?>">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link nav-link-moon" href="<?php echo $URL ;?>htdocs/boutique">Boutique</a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link nav-link-moon dropdown-toggle" href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown">
                            Nos catégories
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="#" class="category-link">Baiser de Nacre</a></li>
                            <li><a class="dropdown-item" href="#" class="category-link">Ombre Dorée</a></li>
                            <li><a class="dropdown-item" href="#" class="category-link">Péché de Hanche</a></li>
                            <li><a class="dropdown-item"  href="#" class="category-link">Étreinte Lunaire</a></li>
                            <li><a class="dropdown-item"  href="#" class="category-link">Silk & Désir</a></li>
                            <li><a class="dropdown-item"  href="#" class="category-link">Rouge Hanche</a></li>
                            <li><a class="dropdown-item"  href="#" class="category-link">Satin Sauvage</a></li>
                            <li><a class="dropdown-item"  href="#" class="category-link">L'Effleureuse</a></li>
                            <li class="dropdown-divider-container"><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="categories.html">Toutes les catégories</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link nav-link-moon dropdown-toggle" href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown">
                            Nos collections
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="#">Baiser de Nacre</a></li>
                            <li><a class="dropdown-item" href="#">Ombre Dorée</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="boutique.html">Toutes les collections</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link nav-link-moon" href="<?php echo $URL ;?>htdocs/commander">Commander</a></li>
                    <li class="nav-item"><a class="nav-link nav-link-moon" href="<?php echo $URL ;?>htdocs/contact">Contact</a></li>
                </ul>
                
                <div class="d-flex">
                    <div class="input-group search-box">
                        <input type="text" class="form-control" placeholder="Rechercher...">
                        <button class="btn" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Menu Catégories Offcanvas -->
    <div class="offcanvas offcanvas-start categories-offcanvas" tabindex="-1" id="categoriesMenu">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Nos Collections</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <div class="categories-accordion" id="categoriesAccordion">
                <!-- Collection 1 -->
                <div class="category-item">
                    <button class="category-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLingerie">
                        <i class="fas fa-chevron-right"></i> Lingerie Sensuelle
                    </button>
                    <div id="collapseLingerie" class="collapse show" data-bs-parent="#categoriesAccordion">
                        <div class="subcategories">
                            <a href="#" class="subcategory-link">Baiser de Nacre</a>
                            <a href="#" class="subcategory-link">Étreinte Lunaire</a>
                            <a href="#" class="subcategory-link">Satin Sauvage</a>
                        </div>
                    </div>
                </div>
                
                <!-- Collection 2 -->
                <div class="category-item">
                    <button class="category-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAccessoires">
                        <i class="fas fa-chevron-right"></i> Accessoires
                    </button>
                    <div id="collapseAccessoires" class="collapse" data-bs-parent="#categoriesAccordion">
                        <div class="subcategories">
                            <a href="#" class="subcategory-link">Ombre Dorée</a>
                            <a href="#" class="subcategory-link">Silk & Désir</a>
                        </div>
                    </div>
                </div>
                
                <!-- Lien direct -->
                <a href="boutique.html" class="category-link-all">
                    <i class="fas fa-star me-2"></i> Toutes les collections
                </a>
            </div>
            
            <div class="categories-footer mt-auto">
                <div class="social-links mt-3">
                    <a href="#" class="tiktok"><i class="fab fa-tiktok"></i></a>
                    <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="snapchat"><i class="fab fa-snapchat-ghost"></i></a>
                    <a href="#" class="user"><i class="fas fa-user"></i></a>
                </div>
                <small>© 2023 Moon Création</small>
            </div>
        </div>
    </div>