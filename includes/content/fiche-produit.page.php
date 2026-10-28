    <!-- En-tête de la page produit -->
    <header class="page-panier-header">
        <div class="container">
            <div class="breadcrumb-container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                        <li class="breadcrumb-item"><a href="boutique.html">Boutique</a></li>
                        <li class="breadcrumb-item"><a href="#">Perles de Hanche</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Baiser de Nacre</li>
                    </ol>
                </nav>
            </div>
            <div class="header-content text-center">
                <h1 class="display-4 mb-3">Collection Érotique</h1>
                <p class="lead">Des bijoux intimes qui célèbrent votre sensualité</p>
                <div class="collection-badge">Édition Limitée</div>
            </div>
        </div>
    </header>

    <!-- Contenu principal de la fiche produit -->
    <main class="page-produit">
        <div class="container">
            <div class="row g-4">
                <!-- Galerie Produit -->
                <div class="col-lg-7">
                    <div class="product-gallery">
                        <!-- Image principale avec zoom -->
                        <div class="main-image-container">
                            <img src="<?php echo $URL;?>images/img-9.jpg" alt="Baiser de Nacre - Vue principale" class="main-image img-fluid" id="zoom-image">
                            <div class="product-badge exclusive">EXCLUSIF</div>
                        </div>
                        <p>&nbsp;</p>
                        <!-- Navigation des miniatures -->
                        <div class="thumbnails-container">
                            <div class="thumbnails-slider swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide thumbnail-item active" data-index="0">
                                        <img src="<?php echo $URL;?>images/img-9.jpg" alt="Baiser de Nacre - Vue 1" class="img-fluid">
                                    </div>
                                    <div class="swiper-slide thumbnail-item" data-index="1">
                                        <img src="<?php echo $URL;?>images/img-10.jpg" alt="Baiser de Nacre - Vue 2" class="img-fluid">
                                    </div>
                                    <div class="swiper-slide thumbnail-item" data-index="2">
                                        <img src="<?php echo $URL;?>images/img-11.jpg" alt="Baiser de Nacre - Vue 3" class="img-fluid">
                                    </div>
                                    <div class="swiper-slide thumbnail-item" data-index="3">
                                        <img src="<?php echo $URL;?>images/img-12.jpg" alt="Baiser de Nacre - Vue 4" class="img-fluid">
                                    </div>
                                    <div class="swiper-slide thumbnail-item" data-index="4">
                                        <img src="<?php echo $URL;?>images/img-13.jpg" alt="Baiser de Nacre - Vue 5" class="img-fluid">
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Modal Gallery -->
                <div class="gallery-modal" id="galleryModal">
                    <div class="modal-close" id="modalClose">&times;</div>
                    <div class="modal-counter" id="modalCounter">1 / 5</div>
                    
                    <div class="modal-content">
                        <div class="modal-nav">
                            <button class="modal-nav-btn" id="modalPrev">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <button class="modal-nav-btn" id="modalNext">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                        
                        <div class="modal-slides-container" id="modalSlides">
                            <!-- Les slides seront injectées ici par JavaScript -->
                        </div>
                    </div>
                    
                    <div class="modal-thumbnails" id="modalThumbnails">
                        <!-- Les miniatures seront injectées ici par JavaScript -->
                    </div>
                </div>

                <!-- Détails Produit -->
                <div class="col-lg-5">
                    <div class="product-details">
                        <div class="product-header">
                            <h1 class="product-title">Baiser de Nacre</h1>
                            <div class="product-subtitle">Perles blanches iridescentes</div>
                            <div class="product-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <a href="#reviews" class="review-link">12 avis clients</a>
                            </div>
                        </div>
                        
                        <div class="product-price-container">
                            <span class="current-price">28 000 FCFA</span>
                            <span class="original-price">35 000 FCFA</span>
                            <span class="discount-badge">-20%</span>
                        </div>
                        
                        <div class="product-description">
                            <p>Ce collier de hanche en perles de nacre naturelle capture la lumière avec élégance, créant un jeu subtil de reflets iridescents sur votre peau. Une pièce intemporelle qui sublime les courbes féminines.</p>
                            
                            <ul class="product-features">
                                <li><i class="fas fa-check-circle"></i> Perles de nacre naturelle de 8mm</li>
                                <li><i class="fas fa-check-circle"></i> Chaîne en argent 925 plaqué or</li>
                                <li><i class="fas fa-check-circle"></i> Longueur ajustable de 60 à 80cm</li>
                                <li><i class="fas fa-check-circle"></i> Fermoir sécurisé</li>
                                <li><i class="fas fa-check-circle"></i> Livré dans son écrin en velours</li>
                            </ul>
                        </div>
                        
                        <!-- Sélecteur de variantes -->
                        <div class="product-variants">
                            <div class="variant-option">
                                <label>Couleur :</label>
                                <div class="color-swatches">
                                    <button class="color-swatch active" style="background-color: #f5f5f5" data-color="Blanc nacré" title="Blanc nacré"></button>
                                    <button class="color-swatch" style="background-color: #E6C8A1" data-color="Or rose" title="Or rose"></button>
                                    <button class="color-swatch" style="background-color: #8C2F4A" data-color="Bordeaux" title="Bordeaux"></button>
                                </div>
                            </div>
                            
                            <div class="variant-option">
                                <label for="size">Longueur :</label>
                                <select class="form-select" id="size">
                                    <option>60cm (Petite)</option>
                                    <option>70cm (Standard)</option>
                                    <option selected>80cm (Grande)</option>
                                </select>
                            </div>
                        </div>
                        
                        <!-- Ajout au panier -->
                        <div class="product-actions">
                            <div class="quantity-selector">
                                <button class="quantity-btn minus"><i class="fas fa-minus"></i></button>
                                <input type="number" value="1" min="1" class="quantity-input">
                                <button class="quantity-btn plus"><i class="fas fa-plus"></i></button>
                            </div>
                            
                            <button class="btn-add-to-cart">
                                <i class="fas fa-shopping-bag me-2"></i> Ajouter au panier
                            </button>
                            
                            <button class="btn-wishlist">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                        
                        <!-- Livraison et garanties -->
                        <div class="product-meta">
                            <div class="meta-item">
                                <i class="fas fa-truck"></i>
                                <span>Livraison offerte dès 50 000 FCFA</span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-shield-alt"></i>
                                <span>Garantie satisfaction 30 jours</span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-lock"></i>
                                <span>Paiement sécurisé</span>
                            </div>
                        </div>
                        
                        <!-- Partage sur réseaux sociaux -->
                        <div class="product-social">
                            <span>Partager :</span>
                            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Onglets de description détaillée -->
            <div class="product-tabs">
                <ul class="nav nav-tabs" id="productTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab">Description</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="details-tab" data-bs-toggle="tab" data-bs-target="#details" type="button" role="tab">Détails techniques</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="shipping-tab" data-bs-toggle="tab" data-bs-target="#shipping" type="button" role="tab">Livraison & Retours</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab">Avis (12)</button>
                    </li>
                </ul>
                
                <div class="tab-content" id="productTabsContent">
                    <div class="tab-pane fade show active" id="description" role="tabpanel">
                        <div class="rich-description">
                            <h5>L'Essence de la féminité</h5>
                            <p>Le collier de hanche "Baiser de Nacre" est une ode à la sensualité discrète. Chaque perle, soigneusement sélectionnée pour sa qualité et son iridescence, danse au rythme de vos mouvements, créant une harmonie entre élégance et provocation subtile.</p>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>Détails perle</h5>
                                    <p>Les perles sont enfilées une à une sur un fil de soie renforcé, garantissant à la fois souplesse et durabilité.</p>
                                </div>
                                <div class="col-md-6">
                                    <h5>Un Savoir-Faire Artisanal</h5>
                                    <p>Fabriqué à la main par nos artisans, chaque collier requiert plus de 3 heures de travail minutieux. Les perles sont enfilées une à une sur un fil de soie renforcé, garantissant à la fois souplesse et durabilité.</p>
                                </div>
                            </div>
                            
                            <h5>Conseils d'Entretien</h5>
                            <p>Pour préserver la beauté de votre collier, éviter le contact avec les parfums et produits cosmétiques. Nettoyer délicatement avec un chiffon doux légèrement humide.</p>
                        </div>
                    </div>
                    
                    <div class="tab-pane fade" id="details" role="tabpanel">
                        <table class="product-specs">
                            <tr>
                                <th>Matériaux</th>
                                <td>Perles de nacre naturelle, argent 925 plaqué or</td>
                            </tr>
                            <tr>
                                <th>Dimensions</th>
                                <td>Perles de 8mm de diamètre, longueur ajustable 60-80cm</td>
                            </tr>
                            <tr>
                                <th>Poids</th>
                                <td>45g</td>
                            </tr>
                            <tr>
                                <th>Origine</th>
                                <td>Fabriqué à la main au Bénin</td>
                            </tr>
                            <tr>
                                <th>Code produit</th>
                                <td>MN-2047</td>
                            </tr>
                        </table>
                    </div>
                    
                    <div class="tab-pane fade" id="shipping" role="tabpanel">
                        <div class="shipping-info">
                            <h5>Options de Livraison</h5>
                            <ul>
                                <li><strong>Standard (3-5 jours) :</strong> 2 500 FCFA</li>
                                <li><strong>Express (24-48h) :</strong> 5 000 FCFA</li>
                                <li><strong>Point relais :</strong> 1 500 FCFA</li>
                            </ul>
                            <p>Livraison offerte pour les commandes supérieures à 50 000 FCFA</p>
                            
                            <h5 class="mt-4">Politique de Retour</h5>
                            <p>Vous disposez de 14 jours à réception de votre colis pour effectuer un retour. Les articles doivent être dans leur état d'origine, non portés et avec leur emballage.</p>
                        </div>
                    </div>
                    
                    <div class="tab-pane fade" id="reviews" role="tabpanel">
                        <div class="reviews-container">
                            <div class="average-rating">
                                <div class="rating-value">4.7</div>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <div class="rating-count">Basé sur 12 avis</div>
                            </div>
                            
                            <div class="review-progress">
                                <div class="progress-item">
                                    <span>5 étoiles</span>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 85%"></div>
                                    </div>
                                    <span>85%</span>
                                </div>
                                <div class="progress-item">
                                    <span>4 étoiles</span>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 10%"></div>
                                    </div>
                                    <span>10%</span>
                                </div>
                                <div class="progress-item">
                                    <span>3 étoiles</span>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 5%"></div>
                                    </div>
                                    <span>5%</span>
                                </div>
                                <div class="progress-item">
                                    <span>2 étoiles</span>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 0%"></div>
                                    </div>
                                    <span>0%</span>
                                </div>
                                <div class="progress-item">
                                    <span>1 étoile</span>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 0%"></div>
                                    </div>
                                    <span>0%</span>
                                </div>
                            </div>
                            
                            <button class="btn-review">Écrire un avis</button>
                            
                            <div class="review-list">
                                <div class="review">
                                    <div class="review-header">
                                        <div class="review-author">Amina K.</div>
                                        <div class="review-date">15/06/2023</div>
                                        <div class="review-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="review-title">Magnifique !</div>
                                    <div class="review-content">
                                        <p>Ce collier est tout simplement sublime. La qualité des perles dépasse mes attentes et il est incroyablement confortable à porter. Un must-have de la collection Moon.</p>
                                    </div>
                                </div>
                                
                                <div class="review">
                                    <div class="review-header">
                                        <div class="review-author">Sophie D.</div>
                                        <div class="review-date">02/05/2023</div>
                                        <div class="review-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="review-title">Très belle qualité</div>
                                    <div class="review-content">
                                        <p>J'ai offert ce collier à ma meilleure amie pour son anniversaire et elle en est ravie. L'emballage était soigné et le produit correspond parfaitement à la description.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Produits similaires -->
            <section class="related-products">
                <div class="section-header">
                    <h5>Vous aimerez aussi</h5>
                    <a href="boutique.html" class="view-all">Voir tout <i class="fas fa-arrow-right"></i></a>
                </div>
                
                <div class="products-slider swiper">
                    <div class="swiper-wrapper">
                        <!-- Produit 1 -->
                        <div class="swiper-slide">
                            <div class="product-card">
                                <div class="product-badge">NOUVEAU</div>
                                <div class="product-media">
                                    <img src="<?php echo $URL;?>images/img-10.jpg" alt="Ombre Dorée">
                                    <div class="product-actions">
                                        <button class=  "btn-action quick-view" data-bs-toggle="modal" data-bs-target="#quickViewModal" onclick="window.location.href='fiche-produit.html'">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="btn-action add-wishlist">
                                            <i class="far fa-heart"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="product-body text-center">
                                    <div class="product-title">Ombre Dorée</div>
                                    <div class="product-subtitle">Perles dorées</div>
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
                        <div class="swiper-slide">
                            <div class="product-card">
                                <div class="product-badge bestseller">BEST-SELLER</div>
                                <div class="product-media">
                                    <img src="<?php echo $URL;?>images/img-11.jpg" alt="Étreinte Lunaire">
                                    <div class="product-actions">
                                        <button class=  "btn-action quick-view" data-bs-toggle="modal" data-bs-target="#quickViewModal" onclick="window.location.href='fiche-produit.html'">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="btn-action add-wishlist">
                                            <i class="far fa-heart"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="product-body text-center">
                                    <div class="product-title">Étreinte Lunaire</div>
                                    <div class="product-subtitle">Perles noires</div>
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
                        <div class="swiper-slide">
                            <div class="product-card">
                                <div class="product-badge exclusive">EXCLUSIF</div>
                                <div class="product-media">
                                    <img src="<?php echo $URL;?>images/img-12.jpg" alt="Silk & Désir">
                                    <div class="product-actions">
                                        <button class=  "btn-action quick-view" data-bs-toggle="modal" data-bs-target="#quickViewModal" onclick="window.location.href='fiche-produit.html'">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="btn-action add-wishlist">
                                            <i class="far fa-heart"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="product-body text-center">
                                    <div class="product-title">Silk & Désir</div>
                                    <div class="product-subtitle">Soie et perles</div>
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
                        <div class="swiper-slide">
                            <div class="product-card">
                                <div class="product-media">
                                    <img src="<?php echo $URL;?>images/img-13.jpg" alt="Rouge Hanche">
                                    <div class="product-actions">
                                        <button class="btn-action quick-view" data-bs-toggle="modal" data-bs-target="#quickViewModal" onclick="window.location.href='fiche-produit.html'">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="btn-action add-wishlist">
                                            <i class="far fa-heart"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="product-body text-center">
                                    <div class="product-title">Rouge Hanche</div>
                                    <div class="product-subtitle">Perles rouges</div>
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
                    <p>&nbsp;</p>
                    <div class="swiper-pagination"></div>

                </div>
            </section>
        </div>
    </main>
