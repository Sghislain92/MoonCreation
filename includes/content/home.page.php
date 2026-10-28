    <!-- Section En Vedette -->
    <section class="py-5">
        <div class="container py-4">
            <h3 class="section-title">En vedette</h3>
            
            <div class="row">
                <div class="col-6 col-md-4 col-lg-3 product-col mb-4">
                    <div class="product-card h-100 d-flex flex-column">
                        <!-- Zone image avec badge -->
                        <div class="product-img-container position-relative">
                            <img src="<?php echo $URL;?>images/img-1.jpg" 
                                 class="product-img" 
                                 alt="Baiser de Nacre - Collier perles blanches iridescentes">
                            <div class="product-badge rupture">Nouveauté</div>
                            
                            <!-- Bouton "Voir" bien visible -->
                            <button class="btn btn-view-product" onclick="window.location.href='fiche-produit.html'">
                                <i class="fas fa-search-plus me-2"></i>Voir détails
                            </button>
                            <div class="product-actions">
                                    <button class="btn-action quick-view"  data-bs-toggle="modal" data-bs-target="#quickViewModal" onclick="window.location.href='fiche-produit.html'">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn-action add-wishlist">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                        </div>
                
                        <!-- Contenu texte -->
                        <div class="card-body text-center">
                            <h5 class="card-title">Baiser de Nacre</h5>
                            <p class="text-muted small">Perles blanches iridescentes</p>
                            
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
                
                <!-- Produit 2 -->
                <div class="col-6 col-md-4 col-lg-3 product-col mb-4">
                    <div class="product-card h-100 d-flex flex-column">
                        <div class="product-img-container">
                            <img src="<?php echo $URL;?>images/img-2.jpg" class="product-img" alt="Péché de Hanche">
                            <div class="product-badge disponible bestseller">BEST-SELLER</div>
                            
                            <!-- Bouton "Voir" bien visible -->
                            <button class="btn btn-view-product" onclick="window.location.href='fiche-produit.html'">
                                <i class="fas fa-search-plus me-2"></i>Voir détails
                            </button>
                            <div class="product-actions">
                                    <button class="btn-action quick-view"  data-bs-toggle="modal" data-bs-target="#quickViewModal" onclick="window.location.href='fiche-produit.html'">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn-action add-wishlist">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Péché de Hanche</h5>
                            <p class="text-muted small">Perles rouges profondes</p>
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
                
                <!-- Produit 3 -->
                <div class="col-6 col-md-4 col-lg-3 product-col mb-4">
                    <div class="product-card h-100 d-flex flex-column">
                        <div class="product-img-container">
                            <img src="<?php echo $URL;?>images/img-3.jpg" class="product-img" alt="Étreinte Lunaire">
                            <div class="product-badge limited">LIMITÉ</div>
                            
                            <!-- Bouton "Voir" bien visible -->
                            <button class="btn btn-view-product" onclick="window.location.href='fiche-produit.html'">
                                <i class="fas fa-search-plus me-2"></i>Voir détails
                            </button>
                            <div class="product-actions">
                                    <button class="btn-action quick-view"  data-bs-toggle="modal" data-bs-target="#quickViewModal" onclick="window.location.href='fiche-produit.html'">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn-action add-wishlist">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Étreinte Lunaire</h5>
                            <p class="text-muted small">Perles noires mystérieuses</p>
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
                
                <!-- Produit 4 -->
                <div class="col-6 col-md-4 col-lg-3 product-col mb-4">
                    <div class="product-card h-100 d-flex flex-column">
                        <div class="product-img-container">
                            <img src="<?php echo $URL;?>images/img-4.jpg" class="product-img" alt="Silk & Désir">
                            <div class="product-badge exclusive">EXCLUSIF</div>
                            
                            <!-- Bouton "Voir" bien visible -->
                            <button class="btn btn-view-product" onclick="window.location.href='fiche-produit.html'">
                                <i class="fas fa-search-plus me-2"></i>Voir détails
                            </button>
                            <div class="product-actions">
                                    <button class="btn-action quick-view"  data-bs-toggle="modal" data-bs-target="#quickViewModal" onclick="window.location.href='fiche-produit.html'">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn-action add-wishlist">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Silk & Désir</h5>
                            <p class="text-muted small">Soie et perles entrelacées</p>
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
            </div>
        </div>
    </section>
    
    <!-- Section Les Plus Vendus -->
    <section class="py-5 bg-light">
        <div class="container py-4">
            <h3 class="section-title">Les plus vendus</h3>
            
            <div class="row">
                <!-- Produit 1 -->
                <div class="col-6 col-md-4 col-lg-3 product-col mb-4">
                    <div class="product-card h-100 d-flex flex-column">
                        <div class="product-img-container">
                            <img src="<?php echo $URL;?>images/img-5.jpg" class="product-img" alt="Baiser de Nacre">
                            <div class="product-badge">Nouveauté</div>
                            
                            <!-- Bouton "Voir" bien visible -->
                            <button class="btn btn-view-product" onclick="window.location.href='fiche-produit.html'">
                                <i class="fas fa-search-plus me-2"></i>Voir détails
                            </button>
                            <div class="product-actions">
                                    <button class="btn-action quick-view"  data-bs-toggle="modal" data-bs-target="#quickViewModal" onclick="window.location.href='fiche-produit.html'">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn-action add-wishlist">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Baiser de Nacre</h5>
                            <p class="text-muted small">Perles blanches iridescentes</p>
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
                
                <!-- Produit 2 -->
                <div class="col-6 col-md-4 col-lg-3 product-col mb-4">
                    <div class="product-card h-100 d-flex flex-column">
                        <div class="product-img-container">
                            <img src="<?php echo $URL;?>images/img-6.jpg" class="product-img" alt="Péché de Hanche">
                            <div class="product-badge bestseller">BEST-SELLER</div>
                            
                            <!-- Bouton "Voir" bien visible -->
                            <button class="btn btn-view-product" onclick="window.location.href='fiche-produit.html'">
                                <i class="fas fa-search-plus me-2"></i>Voir détails
                            </button>
                            <div class="product-actions">
                                    <button class="btn-action quick-view"  data-bs-toggle="modal" data-bs-target="#quickViewModal" onclick="window.location.href='fiche-produit.html'">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn-action add-wishlist">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Péché de Hanche</h5>
                            <p class="text-muted small">Perles rouges profondes</p>
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
                
                <!-- Produit 3 -->
                <div class="col-6 col-md-4 col-lg-3 product-col mb-4">
                    <div class="product-card h-100 d-flex flex-column">
                        <div class="product-img-container">
                            <img src="<?php echo $URL;?>images/img-7.jpg" class="product-img" alt="Étreinte Lunaire">
                            <div class="product-badge limited">LIMITÉ</div>
                            
                            <!-- Bouton "Voir" bien visible -->
                            <button class="btn btn-view-product" onclick="window.location.href='fiche-produit.html'">
                                <i class="fas fa-search-plus me-2"></i>Voir détails
                            </button>
                            <div class="product-actions">
                                    <button class="btn-action quick-view"  data-bs-toggle="modal" data-bs-target="#quickViewModal" onclick="window.location.href='fiche-produit.html'">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn-action add-wishlist">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Étreinte Lunaire</h5>
                            <p class="text-muted small">Perles noires mystérieuses</p>
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
                
                <!-- Produit 4 -->
                <div class="col-6 col-md-4 col-lg-3 product-col mb-4">
                    <div class="product-card h-100 d-flex flex-column">
                        <div class="product-img-container">
                            <img src="<?php echo $URL;?>images/img-15.jpg" class="product-img" alt="Silk & Désir">
                            <div class="product-badge exclusive">EXCLUSIF</div>
                            
                            <!-- Bouton "Voir" bien visible -->
                            <button class="btn btn-view-product" onclick="window.location.href='fiche-produit.html'">
                                <i class="fas fa-search-plus me-2"></i>Voir détails
                            </button>
                            <div class="product-actions">
                                    <button class="btn-action quick-view"  data-bs-toggle="modal" data-bs-target="#quickViewModal" onclick="window.location.href='fiche-produit.html'">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn-action add-wishlist">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Silk & Désir</h5>
                            <p class="text-muted small">Soie et perles entrelacées</p>
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
            </div>
        </div>
    </section>
    
    <section class="recommended-products py-5 ">
        <div class="container py-4 position-relative">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="section-title">Nos recommandations</h3>
                <div class="carousel-controls">
                    <button class="btn-carousel prev" aria-label="Précédent">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="btn-carousel next" aria-label="Suivant">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
    
            <!-- Conteneur Swiper corrigé -->
            <div class="swiper products-carousel">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div class="product-card h-100 d-flex flex-column">
                            <div class="product-badge rupture">Nouveauté</div>
                            <div class="product-media">
                                <img src="<?php echo $URL;?>images/img-9.jpg" class="img-fluid" alt="Baiser de Nacre">
                                <!-- Bouton "Voir" bien visible -->
                                <button class="btn btn-view-product" onclick="window.location.href='fiche-produit.html'">
                                    <i class="fas fa-search-plus me-2"></i>Voir détails
                                </button>
                                <div class="product-actions">
                                    <button class="btn-action quick-view">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn-action add-wishlist">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-body">
                                <h5 class="product-title">Baiser de Nacre</h5>
                                <p class="product-subtitle">Perles blanches iridescentes</p>
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
                    
                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <div class="product-card h-100 d-flex flex-column">
                            <div class="product-badge bestseller">BEST-SELLER</div>
                            <div class="product-media">
                                <img src="<?php echo $URL;?>images/img-10.jpg" class="img-fluid" alt="Péché de Hanche">
                                <!-- Bouton "Voir" bien visible -->
                                <button class="btn btn-view-product" onclick="window.location.href='fiche-produit.html'">
                                    <i class="fas fa-search-plus me-2"></i>Voir détails
                                </button>
                                <div class="product-actions">
                                    <button class="btn-action quick-view">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn-action add-wishlist">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-body">
                                <h5 class="product-title">Péché de Hanche</h5>
                                <p class="product-subtitle">Perles rouges profondes</p>
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
                    
                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <div class="product-card h-100 d-flex flex-column">
                            <div class="product-badge limited">LIMITÉ</div>
                            <div class="product-media">
                                <img src="<?php echo $URL;?>images/img-11.jpg" class="img-fluid" alt="Étreinte Lunaire">
                                <!-- Bouton "Voir" bien visible -->
                                <button class="btn btn-view-product" onclick="window.location.href='fiche-produit.html'">
                                    <i class="fas fa-search-plus me-2"></i>Voir détails
                                </button>
                                <div class="product-actions">
                                    <button class="btn-action quick-view">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn-action add-wishlist">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-body">
                                <h5 class="product-title">Étreinte Lunaire</h5>
                                <p class="product-subtitle">Perles noires mystérieuses</p>
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
                    
                    <!-- Slide 4 -->
                    <div class="swiper-slide">
                        <div class="product-card h-100 d-flex flex-column">
                            <div class="product-badge exclusive">EXCLUSIF</div>
                            <div class="product-media">
                                <img src="<?php echo $URL;?>images/img-12.jpg" class="img-fluid" alt="Silk & Désir">
                                <!-- Bouton "Voir" bien visible -->
                                <button class="btn btn-view-product" onclick="window.location.href='fiche-produit.html'">
                                    <i class="fas fa-search-plus me-2"></i>Voir détails
                                </button>
                                <div class="product-actions">
                                    <button class="btn-action quick-view">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn-action add-wishlist">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-body">
                                <h5 class="product-title">Silk & Désir</h5>
                                <p class="product-subtitle">Soie et perles entrelacées</p>
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

                    <!-- Slide 5 -->
                    <div class="swiper-slide">
                        <div class="product-card h-100 d-flex flex-column">
                            <div class="product-badge exclusive">EXCLUSIF</div>
                            <div class="product-media">
                                <img src="<?php echo $URL;?>images/img-1.jpg" class="img-fluid" alt="Silk & Désir">
                                <!-- Bouton "Voir" bien visible -->
                                <button class="btn btn-view-product" onclick="window.location.href='fiche-produit.html'">
                                    <i class="fas fa-search-plus me-2"></i>Voir détails
                                </button>
                                <div class="product-actions">
                                    <button class="btn-action quick-view">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn-action add-wishlist">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-body">
                                <h5 class="product-title">Silk & Désir</h5>
                                <p class="product-subtitle">Soie et perles entrelacées</p>
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
                </div>
            </div>
        </div>
    </section>

    <!-- Section Nouveautétés -->
    <section class="py-5 bg-light">
        <div class="container py-4">
            <h3 class="section-title">Nouveautés</h3>
            
            <div class="row">
                <!-- Produit 1 -->
                <div class="col-6 col-md-4 col-lg-3 product-col mb-4">
                    <div class="product-card h-100 d-flex flex-column">
                        <div class="product-img-container">
                            <img src="<?php echo $URL;?>images/img-9.jpg" class="product-img" alt="Baiser de Nacre">
                            <div class="product-badge">Nouveauté</div>
                            
                            <!-- Bouton "Voir" bien visible -->
                            <button class="btn btn-view-product" onclick="window.location.href='fiche-produit.html'">
                                <i class="fas fa-search-plus me-2"></i>Voir détails
                            </button>
                            <div class="product-actions">
                                    <button class="btn-action quick-view"  data-bs-toggle="modal" data-bs-target="#quickViewModal" onclick="window.location.href='fiche-produit.html'">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn-action add-wishlist">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Baiser de Nacre</h5>
                            <p class="text-muted small">Perles blanches iridescentes</p>
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
                
                <!-- Produit 2 -->
                <div class="col-6 col-md-4 col-lg-3 product-col mb-4">
                    <div class="product-card h-100 d-flex flex-column">
                        <div class="product-img-container">
                            <img src="<?php echo $URL;?>images/img-10.jpg" class="product-img" alt="Péché de Hanche">
                            <div class="product-badge bestseller">BEST-SELLER</div>
                            
                            <!-- Bouton "Voir" bien visible -->
                            <button class="btn btn-view-product" onclick="window.location.href='fiche-produit.html'">
                                <i class="fas fa-search-plus me-2"></i>Voir détails
                            </button>
                            <div class="product-actions">
                                    <button class="btn-action quick-view"  data-bs-toggle="modal" data-bs-target="#quickViewModal" onclick="window.location.href='fiche-produit.html'">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn-action add-wishlist">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Péché de Hanche</h5>
                            <p class="text-muted small">Perles rouges profondes</p>
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
                
                <!-- Produit 3 -->
                <div class="col-6 col-md-4 col-lg-3 product-col mb-4">
                    <div class="product-card h-100 d-flex flex-column">
                        <div class="product-img-container">
                            <img src="<?php echo $URL;?>images/img-11.jpg" class="product-img" alt="Étreinte Lunaire">
                            <div class="product-badge limited">LIMITÉ</div>
                            
                            <!-- Bouton "Voir" bien visible -->
                            <button class="btn btn-view-product" onclick="window.location.href='fiche-produit.html'">
                                <i class="fas fa-search-plus me-2"></i>Voir détails
                            </button>
                            <div class="product-actions">
                                    <button class="btn-action quick-view"  data-bs-toggle="modal" data-bs-target="#quickViewModal" onclick="window.location.href='fiche-produit.html'">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn-action add-wishlist">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Étreinte Lunaire</h5>
                            <p class="text-muted small">Perles noires mystérieuses</p>
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
                
                <!-- Produit 4 -->
                <div class="col-6 col-md-4 col-lg-3 product-col mb-4">
                    <div class="product-card h-100 d-flex flex-column">
                        <div class="product-img-container">
                            <img src="<?php echo $URL;?>images/img-12.jpg" class="product-img" alt="Silk & Désir">
                            <div class="product-badge exclusive">EXCLUSIF</div>
                            
                            <!-- Bouton "Voir" bien visible -->
                            <button class="btn btn-view-product" onclick="window.location.href='fiche-produit.html'">
                                <i class="fas fa-search-plus me-2"></i>Voir détails
                            </button>
                            <div class="product-actions">
                                    <button class="btn-action quick-view"  data-bs-toggle="modal" data-bs-target="#quickViewModal" onclick="window.location.href='fiche-produit.html'">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn-action add-wishlist">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Silk & Désir</h5>
                            <p class="text-muted small">Soie et perles entrelacées</p>
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
            </div>
        </div>
    </section>