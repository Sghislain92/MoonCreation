

    <!-- Nouvel en-tête de page -->
    <header class="page-panier-header">
        <div class="container">
            <div class="breadcrumb-container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo $URL;?>">Accueil</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Boutique</li>
                    </ol>
                </nav>
            </div>
            <div class="header-content text-center">
                <h1 class="display-4 mb-3">Collection érotique</h1>
                <p class="lead">Des bijoux intimes qui célèbrent votre sensualité</p>
                <div class="collection-badge">Édition Limitée</div>
            </div>
        </div>
    </header>
    <!-- Barre d'information complémentaire -->
    <div class="category-info-bar bg-white py-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <p class="mb-0"><i class="fas fa-info-circle me-2 text-primary"></i> Livraison offerte dès 50 000 FCFA | Retours gratuits sous 30 jours</p>
                </div>
                <div class="col-md-4 text-end">
                    <div class="social-proof">
                        <div class="d-inline-block me-3">
                            <i class="fas fa-star text-warning"></i>
                            <span>4.9/5</span>
                            <small>(128 avis)</small>
                        </div>
                        <div class="d-inline-block">
                            <i class="fas fa-check-circle text-success"></i>
                            <span>100% Satisfait</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Filtres mobiles -->
    <div class="mobile-filters d-lg-none">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <button class="btn btn-filter" type="button" data-bs-toggle="offcanvas" data-bs-target="#filtersOffcanvas">
                    <i class="fas fa-sliders-h me-2"></i>Filtres
                </button>
                <div class="sort-dropdown">
                    <select class="form-select">
                        <option selected>Trier par</option>
                        <option>Prix croissant</option>
                        <option>Prix décroissant</option>
                        <option>Nouveautés</option>
                        <option>Populaires</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <!-- Contenu principal -->
    <main class="boutique-main">
        <div class="container">
            <div class="row">
                <!-- Filtres desktop (offcanvas sur mobile) -->
                <aside class="col-lg-3 d-none d-lg-block">
                    <div class="filter-card">
                        <div class="filter-header">
                            <h3>Filtrer</h3>
                            <button class="btn btn-reset">Réinitialiser</button>
                        </div>
                        
                        <!-- Filtre par catégorie -->
                        <div class="filter-group">
                            <div class="filter-title" data-bs-toggle="collapse" href="#categoriesFilter">
                                <span>Catégories</span>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="filter-options collapse show" id="categoriesFilter">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="catHipBeads" checked>
                                    <label class="form-check-label" for="catHipBeads">Perles de Hanche</label>
                                    <span class="badge">24</span>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="catAnklets">
                                    <label class="form-check-label" for="catAnklets">Chevillères</label>
                                    <span class="badge">12</span>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="catSets">
                                    <label class="form-check-label" for="catSets">Ensembles</label>
                                    <span class="badge">8</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Filtre par collection -->
                        <div class="filter-group">
                            <div class="filter-title" data-bs-toggle="collapse" href="#collectionsFilter">
                                <span>Collections</span>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="filter-options collapse show" id="collectionsFilter">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="colNacre" checked>
                                    <label class="form-check-label" for="colNacre">Baiser de Nacre</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="colLunaire">
                                    <label class="form-check-label" for="colLunaire">Étreinte Lunaire</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="colDesir">
                                    <label class="form-check-label" for="colDesir">Silk & Désir</label>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Filtre par prix -->
                        <div class="filter-group">
                            <div class="filter-title" data-bs-toggle="collapse" href="#priceFilter">
                                <span>Prix</span>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="filter-options collapse show" id="priceFilter">
                                <div class="price-range">
                                    <div class="price-inputs">
                                        <input type="number" class="form-control" placeholder="Min" value="0">
                                        <span>-</span>
                                        <input type="number" class="form-control" placeholder="Max" value="50000">
                                        <span>FCFA</span>
                                    </div>
                                    <input type="range" class="form-range" min="0" max="100000" step="5000">
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- Section inspirations -->
                <div class="inspiration-card mt-4">
                    <div class="card border-0 shadow-sm">
                        <img src="https://www.websoftenterprise.com/mooncreation/images/inspiration-perles.jpg" class="card-img-top" alt="Inspiration style">
                        <div class="card-body text-center">
                            <h5 class="card-title">Inspirations</h5>
                            <p class="card-text small">Découvrez comment assortir vos perles</p>
                            <a href="#" class="btn btn-outline-dark btn-sm">Voir les looks</a>
                        </div>
                    </div>
                </div>
                </aside>
                
                <!-- Produits -->
                <div class="col-lg-9">
                    <div class="product-grid">
                        <!-- Produit 1 -->
                        <div class="product-card">
                            <div class="product-media lazy progressive-load">
                                <img src="<?php echo $URL;?>images/img-1.jpg" alt="Baiser de Nacre">
                                <div class="product-badge">NOUVEAU</div>
                                <!-- Bouton "Voir" bien visible -->
                                <button class="btn btn-view-product" onclick="window.location.href='<?php echo $URL;?>htdocs/fiche-produit'">
                                    <i class="fas fa-search-plus me-2"></i>Voir détails
                                </button>

                                <div class="product-actions">
                                    <button class="btn-action quick-view"  data-bs-toggle="modal" data-bs-target="#quickViewModal" onclick="window.location.href='<?php echo $URL;?>htdocs/fiche-produit'">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn-action add-wishlist">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class=" product-body text-center">
                                <div class="product-title">Baiser de Nacre</div>
                                <div class="product-subtitle">Perles blanches iridescentes</div>
                                <div class="mt-auto">
                                    <p class="h5 mb-3 price">28 000 FCFA</p>
                                    
                                    <div class="d-flex gap-2 cart-cta">
                                        <button class="btn btn-sm btn-dark flex-grow-1 add-cart">
                                            <i class="fas fa-cart-plus me-2"></i>Ajouter
                                        </button>
                                        <button class="btn btn-sm btn-outline-dark quick-view eye" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#quickViewModal">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Produit 2 -->
                        <div class="product-card">
                            <div class="product-media lazy progressive-load">
                                <img src="<?php echo $URL;?>images/img-2.jpg" alt="Péché de Hanche">
                                <div class="product-badge bestseller">Best-seller</div>
                                <!-- Bouton "Voir" bien visible -->
                                <button class="btn btn-view-product" onclick="window.location.href='<?php echo $URL;?>htdocs/fiche-produit'">
                                    <i class="fas fa-search-plus me-2"></i>Voir détails
                                </button>

                                <div class="product-actions">
                                    <button class="btn-action quick-view"  data-bs-toggle="modal" data-bs-target="#quickViewModal" onclick="window.location.href='<?php echo $URL;?>htdocs/fiche-produit'">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn-action add-wishlist">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class=" product-body text-center">
                                <div class="product-title">Baiser de Nacre</div>
                                <div class="product-subtitle">Perles blanches iridescentes</div>
                                <div class="mt-auto">
                                    <p class="h5 mb-3 price">28 000 FCFA</p>
                                    
                                    <div class="d-flex gap-2 cart-cta">
                                        <button class="btn btn-sm btn-dark flex-grow-1 add-cart">
                                            <i class="fas fa-cart-plus me-2"></i>Ajouter
                                        </button>
                                        <button class="btn btn-sm btn-outline-dark quick-view eye" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#quickViewModal">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Produit 3 -->
                        <div class="product-card">
                            <div class="product-media lazy progressive-load">
                                <img src="<?php echo $URL;?>images/img-3.jpg" alt="Étreinte Lunaire">
                                <div class="product-badge exclusive">Exclusive</div>
                                <!-- Bouton "Voir" bien visible -->
                                <button class="btn btn-view-product" onclick="window.location.href='<?php echo $URL;?>htdocs/fiche-produit'">
                                    <i class="fas fa-search-plus me-2"></i>Voir détails
                                </button>
                                <div class="product-actions">
                                    <button class="btn-action quick-view"  data-bs-toggle="modal" data-bs-target="#quickViewModal" onclick="window.location.href='<?php echo $URL;?>htdocs/fiche-produit'">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn-action add-wishlist">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class=" product-body text-center">
                                <div class="product-title">Baiser de Nacre</div>
                                <div class="product-subtitle">Perles blanches iridescentes</div>
                                <div class="mt-auto">
                                    <p class="h5 mb-3 price">28 000 FCFA</p>
                                    
                                    <div class="d-flex gap-2 cart-cta">
                                        <button class="btn btn-sm btn-dark flex-grow-1 add-cart">
                                            <i class="fas fa-cart-plus me-2"></i>Ajouter
                                        </button>
                                        <button class="btn btn-sm btn-outline-dark quick-view eye" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#quickViewModal">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Produit 4 -->
                        <div class="product-card">
                            <div class="product-media lazy progressive-load">
                                <img src="<?php echo $URL;?>images/img-4.jpg" alt="Silk & Désir">
                                <div class="product-badge">NOUVEAU</div>
                                <!-- Bouton "Voir" bien visible -->
                                <button class="btn btn-view-product" onclick="window.location.href='<?php echo $URL;?>htdocs/fiche-produit'">
                                    <i class="fas fa-search-plus me-2"></i>Voir détails
                                </button>
                                <div class="product-actions">
                                    <button class="btn-action quick-view"  data-bs-toggle="modal" data-bs-target="#quickViewModal" onclick="window.location.href='<?php echo $URL;?>htdocs/fiche-produit'">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn-action add-wishlist">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class=" product-body text-center">
                                <div class="product-title">Baiser de Nacre</div>
                                <div class="product-subtitle">Perles blanches iridescentes</div>
                                <div class="mt-auto">
                                    <p class="h5 mb-3 price">28 000 FCFA</p>
                                    
                                    <div class="d-flex gap-2 cart-cta">
                                        <button class="btn btn-sm btn-dark flex-grow-1 add-cart">
                                            <i class="fas fa-cart-plus me-2"></i>Ajouter
                                        </button>
                                        <button class="btn btn-sm btn-outline-dark quick-view eye" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#quickViewModal">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Produit 5 -->
                        <div class="product-card">
                            <!-- <div class="product-badge">Nouveau</div> -->
                            <div class="product-media lazy progressive-load">
                                <img src="<?php echo $URL;?>images/img-5.jpg" alt="Ombre Dorée">
                                <div class="product-badge limited">Limited</div>
                                <!-- Bouton "Voir" bien visible -->
                                <button class="btn btn-view-product" onclick="window.location.href='<?php echo $URL;?>htdocs/fiche-produit'">
                                    <i class="fas fa-search-plus me-2"></i>Voir détails
                                </button>
                                <div class="product-actions">
                                    <button class="btn-action quick-view"  data-bs-toggle="modal" data-bs-target="#quickViewModal" onclick="window.location.href='<?php echo $URL;?>htdocs/fiche-produit'">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn-action add-wishlist">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class=" product-body text-center">
                                <div class="product-title">Baiser de Nacre</div>
                                <div class="product-subtitle">Perles blanches iridescentes</div>
                                <div class="mt-auto">
                                    <p class="h5 mb-3 price">28 000 FCFA</p>
                                    
                                    <div class="d-flex gap-2 cart-cta">
                                        <button class="btn btn-sm btn-dark flex-grow-1 add-cart">
                                            <i class="fas fa-cart-plus me-2"></i>Ajouter
                                        </button>
                                        <button class="btn btn-sm btn-outline-dark quick-view eye" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#quickViewModal">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Produit 6 -->
                        <div class="product-card">
                            <div class="product-media lazy progressive-load">
                                <img src="<?php echo $URL;?>images/img-6.jpg" alt="Rouge Hanche">
                                
                                <!-- Bouton "Voir" bien visible -->
                                <button class="btn btn-view-product" onclick="window.location.href='<?php echo $URL;?>htdocs/fiche-produit'">
                                    <i class="fas fa-search-plus me-2"></i>Voir détails
                                </button>
                                <div class="product-actions">
                                    <button class="btn-action quick-view"  data-bs-toggle="modal" data-bs-target="#quickViewModal" onclick="window.location.href='<?php echo $URL;?>htdocs/fiche-produit'">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn-action add-wishlist">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class=" product-body text-center">
                                <div class="product-title">Baiser de Nacre</div>
                                <div class="product-subtitle">Perles blanches iridescentes</div>
                                <div class="mt-auto">
                                    <p class="h5 mb-3 price">28 000 FCFA</p>
                                    
                                    <div class="d-flex gap-2 cart-cta">
                                        <button class="btn btn-sm btn-dark flex-grow-1 add-cart">
                                            <i class="fas fa-cart-plus me-2"></i>Ajouter
                                        </button>
                                        <button class="btn btn-sm btn-outline-dark quick-view eye" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#quickViewModal">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Produit 5 -->
                        <div class="product-card">
                            <!-- <div class="product-badge">Nouveau</div> -->
                            <div class="product-media lazy progressive-load">
                                <img src="<?php echo $URL;?>images/img-7.jpg" alt="Ombre Dorée">
                                
                                <!-- Bouton "Voir" bien visible -->
                                <button class="btn btn-view-product" onclick="window.location.href='<?php echo $URL;?>htdocs/fiche-produit'">
                                    <i class="fas fa-search-plus me-2"></i>Voir détails
                                </button>
                                <div class="product-actions">
                                    <button class="btn-action quick-view"  data-bs-toggle="modal" data-bs-target="#quickViewModal" onclick="window.location.href='<?php echo $URL;?>htdocs/fiche-produit'">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn-action add-wishlist">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class=" product-body text-center">
                                <div class="product-title">Baiser de Nacre</div>
                                <div class="product-subtitle">Perles blanches iridescentes</div>
                                <div class="mt-auto">
                                    <p class="h5 mb-3 price">28 000 FCFA</p>
                                    
                                    <div class="d-flex gap-2 cart-cta">
                                        <button class="btn btn-sm btn-dark flex-grow-1 add-cart">
                                            <i class="fas fa-cart-plus me-2"></i>Ajouter
                                        </button>
                                        <button class="btn btn-sm btn-outline-dark quick-view eye" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#quickViewModal">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Produit 5 -->
                        <div class="product-card">
                            <!-- <div class="product-badge">Nouveau</div> -->
                            <div class="product-media lazy progressive-load">
                                <img src="<?php echo $URL;?>images/img-8.jpg" alt="Ombre Dorée">
                                
                                <!-- Bouton "Voir" bien visible -->
                                <button class="btn btn-view-product" onclick="window.location.href='<?php echo $URL;?>htdocs/fiche-produit'">
                                    <i class="fas fa-search-plus me-2"></i>Voir détails
                                </button>
                                <div class="product-actions">
                                    <button class="btn-action quick-view"  data-bs-toggle="modal" data-bs-target="#quickViewModal" onclick="window.location.href='<?php echo $URL;?>htdocs/fiche-produit'">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn-action add-wishlist">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class=" product-body text-center">
                                <div class="product-title">Baiser de Nacre</div>
                                <div class="product-subtitle">Perles blanches iridescentes</div>
                                <div class="mt-auto">
                                    <p class="h5 mb-3 price">28 000 FCFA</p>
                                    
                                    <div class="d-flex gap-2 cart-cta">
                                        <button class="btn btn-sm btn-dark flex-grow-1 add-cart">
                                            <i class="fas fa-cart-plus me-2"></i>Ajouter
                                        </button>
                                        <button class="btn btn-sm btn-outline-dark quick-view eye" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#quickViewModal">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Produit 5 -->
                        <div class="product-card">
                            <!-- <div class="product-badge">Nouveau</div> -->
                            <div class="product-media lazy progressive-load">
                                <img src="<?php echo $URL;?>images/img-9.jpg" alt="Ombre Dorée">
                                
                                <!-- Bouton "Voir" bien visible -->
                                <button class="btn btn-view-product" onclick="window.location.href='<?php echo $URL;?>htdocs/fiche-produit'">
                                    <i class="fas fa-search-plus me-2"></i>Voir détails
                                </button>
                                <div class="product-actions">
                                    <button class="btn-action quick-view"  data-bs-toggle="modal" data-bs-target="#quickViewModal" onclick="window.location.href='<?php echo $URL;?>htdocs/fiche-produit'">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn-action add-wishlist">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class=" product-body text-center">
                                <div class="product-title">Baiser de Nacre</div>
                                <div class="product-subtitle">Perles blanches iridescentes</div>
                                <div class="mt-auto">
                                    <p class="h5 mb-3 price">28 000 FCFA</p>
                                    
                                    <div class="d-flex gap-2 cart-cta">
                                        <button class="btn btn-sm btn-dark flex-grow-1 add-cart">
                                            <i class="fas fa-cart-plus me-2"></i>Ajouter
                                        </button>
                                        <button class="btn btn-sm btn-outline-dark quick-view eye" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#quickViewModal">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Pagination -->
                    <nav class="pagination-container">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </main>
    <br/>
<!-- Section témoignages avec Carousel Bootstrap -->
<section class="testimonials-section bg-light py-5">
  <div class="container py-4 position-relative">
    <h2 class="text-center mb-5">Ce que disent nos clientes</h2>
    
    <!-- Carousel Bootstrap -->
    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
      <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="row g-4 justify-content-center">
            <!-- Témoignage 1 - Desktop: visible, Tablet: visible, Mobile: visible -->
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card h-100 border-0 shadow-sm">
                <div class="card-body d-flex flex-column">
                  <div class="text-warning mb-3">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                  <blockquote class="mb-4 flex-grow-1">
                    <i class="fas fa-quote-left text-muted me-2"></i>
                    "Mes perles de hanche sont devenues mon accessoire fétiche. La qualité est exceptionnelle et je reçois des compliments à chaque fois que je les porte."
                  </blockquote>
                  <div class="text-end mt-auto pt-3">
                    <h6 class="mb-0 fw-bold">Amina D.</h6>
                    <small class="text-muted">Abidjan</small>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Témoignage 2 - Desktop: visible, Tablet: visible, Mobile: hidden -->
            <div class="col-md-6 col-lg-4 d-none d-md-block">
              <div class="card h-100 border-0 shadow-sm">
                <div class="card-body d-flex flex-column">
                  <div class="text-warning mb-3">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                  <blockquote class="mb-4 flex-grow-1">
                    <i class="fas fa-quote-left text-muted me-2"></i>
                    "Livraison rapide et produit encore plus beau en vrai. Le confort est incroyable, on dirait qu'elles ont été faites pour moi."
                  </blockquote>
                  <div class="text-end mt-auto pt-3">
                    <h6 class="mb-0 fw-bold">Fatou K.</h6>
                    <small class="text-muted">Dakar</small>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Témoignage 3 - Desktop: visible, Tablet: hidden, Mobile: hidden -->
            <div class="col-lg-4 d-none d-lg-block">
              <div class="card h-100 border-0 shadow-sm">
                <div class="card-body d-flex flex-column">
                  <div class="text-warning mb-3">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                  </div>
                  <blockquote class="mb-4 flex-grow-1">
                    <i class="fas fa-quote-left text-muted me-2"></i>
                    "J'ai offert le set 'Baiser de Nacre' à ma femme pour notre anniversaire, elle a adoré ! Le packaging était sublime."
                  </blockquote>
                  <div class="text-end mt-auto pt-3">
                    <h6 class="mb-0 fw-bold">Jean-Paul T.</h6>
                    <small class="text-muted">Lomé</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Slide 2 -->
        <div class="carousel-item">
          <div class="row g-4 justify-content-center">
            <!-- Témoignage 2 - Desktop: visible, Tablet: visible, Mobile: visible -->
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card h-100 border-0 shadow-sm">
                <div class="card-body d-flex flex-column">
                  <div class="text-warning mb-3">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                  <blockquote class="mb-4 flex-grow-1">
                    <i class="fas fa-quote-left text-muted me-2"></i>
                    "Livraison rapide et produit encore plus beau en vrai. Le confort est incroyable, on dirait qu'elles ont été faites pour moi."
                  </blockquote>
                  <div class="text-end mt-auto pt-3">
                    <h6 class="mb-0 fw-bold">Fatou K.</h6>
                    <small class="text-muted">Dakar</small>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Témoignage 3 - Desktop: visible, Tablet: visible, Mobile: hidden -->
            <div class="col-md-6 col-lg-4 d-none d-md-block">
              <div class="card h-100 border-0 shadow-sm">
                <div class="card-body d-flex flex-column">
                  <div class="text-warning mb-3">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                  </div>
                  <blockquote class="mb-4 flex-grow-1">
                    <i class="fas fa-quote-left text-muted me-2"></i>
                    "J'ai offert le set 'Baiser de Nacre' à ma femme pour notre anniversaire, elle a adoré ! Le packaging était sublime."
                  </blockquote>
                  <div class="text-end mt-auto pt-3">
                    <h6 class="mb-0 fw-bold">Jean-Paul T.</h6>
                    <small class="text-muted">Lomé</small>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Témoignage 4 - Desktop: visible, Tablet: hidden, Mobile: hidden -->
            <div class="col-lg-4 d-none d-lg-block">
              <div class="card h-100 border-0 shadow-sm">
                <div class="card-body d-flex flex-column">
                  <div class="text-warning mb-3">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                  </div>
                  <blockquote class="mb-4 flex-grow-1">
                    <i class="fas fa-quote-left text-muted me-2"></i>
                    "Produit de très bonne qualité mais la livraison a pris un peu plus de temps que prévu. Je recommande tout de même !"
                  </blockquote>
                  <div class="text-end mt-auto pt-3">
                    <h6 class="mb-0 fw-bold">Aïcha M.</h6>
                    <small class="text-muted">Cotonou</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Ajoutez d'autres slides de la même manière -->
      </div>
    </div>
    
    <!-- Contrôles -->
    <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </button>
  </div>
</section>

    <!-- Offcanvas pour les filtres mobiles -->
    <div class="offcanvas offcanvas-start filters-offcanvas" tabindex="-1" id="filtersOffcanvas">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Filtrer</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <!-- Contenu identique au filtre desktop -->
            <div class="filter-card">
                <div class="filter-group">
                    <div class="filter-title" data-bs-toggle="collapse" href="#mobileCategoriesFilter">
                        <span>Catégories</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="filter-options collapse show" id="mobileCategoriesFilter">
                        <!-- Options identiques -->
                    </div>
                </div>
                <!-- Autres groupes de filtres -->
            </div>
        </div>
        <div class="offcanvas-footer">
            <button class="btn btn-reset">Réinitialiser</button>
            <button class="btn btn-apply" data-bs-dismiss="offcanvas">Appliquer</button>
        </div>
    </div>
