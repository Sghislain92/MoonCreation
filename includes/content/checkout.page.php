
    <!-- En-tête de la page produit -->
    <header class="page-panier-header">
        <div class="container">
            <div class="breadcrumb-container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo $URL;?>">Accueil</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo $URL;?>htdocs/boutique">Boutique</a></li>
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

    <main class="container checkout-container mb-5">
        <div class="row">
            <!-- Colonne de formulaire -->
            <div class="col-lg-8 mb-4">
                <!-- Indicateur d'étapes -->
                <div class="step-indicator row mb-5 animate-in" style="animation-delay: 0.1s;">
                    <div class="col step completed">
                        <div class="step-number">1</div>
                        <div class="step-label">Panier</div>
                    </div>
                    <div class="col step active">
                        <div class="step-number">2</div>
                        <div class="step-label">Livraison</div>
                    </div>
                    <div class="col step">
                        <div class="step-number">3</div>
                        <div class="step-label">Paiement</div>
                    </div>
                    <div class="col step">
                        <div class="step-number">4</div>
                        <div class="step-label">Confirmation</div>
                    </div>
                </div>
                
                <!-- Carte de formulaire -->
                <div class="card form-card-checkout mb-4 animate-in" style="animation-delay: 0.2s;">
                    <div class="form-card-header">
                        <h3 class="checkout-title mb-0"><i class="fas fa-truck me-2"></i> Informations de livraison</h3>
                    </div>
                    <div class="form-card-body">
                        <form id="checkoutForm">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="firstName" placeholder="Prénom" required>
                                        <label for="firstName">Prénom</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="lastName" placeholder="Nom" required>
                                        <label for="lastName">Nom</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Email" required>
                                        <label for="email">Adresse email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="address" placeholder="Adresse" required>
                                        <label for="address">Adresse</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="postalCode" placeholder="Code postal" required>
                                        <label for="postalCode">Code postal</label>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="city" placeholder="Ville" required>
                                        <label for="city">Ville</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating">
                                        <select class="form-select" id="country" required>
                                            <option value="">Choisir</option>
                                            <option value="BJ">Bénin</option>
                                            <option value="FR">France</option>
                                            <option value="SN">Sénégal</option>
                                        </select>
                                        <label for="country">Pays</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="tel" class="form-control" id="phone" placeholder="Téléphone" required>
                                        <label for="phone">Téléphone</label>
                                    </div>
                                </div>
                                <div class="col-12 mt-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="terms" required>
                                        <label class="form-check-label" for="terms">
                                            J'accepte les <a href="#" class="text-bordeaux-passion">conditions générales de vente</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
                <!-- Carte de livraison -->
                <div class="card form-card animate-in" style="animation-delay: 0.3s;">
                    <div class="form-card-header">
                        <h3 class="checkout-title mb-0"><i class="fas fa-shipping-fast me-2"></i> Options de livraison</h3>
                    </div>
                    <div class="form-card-body">
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="deliveryOption" id="standardDelivery" checked>
                            <label class="form-check-label d-flex justify-content-between" for="standardDelivery">
                                <span>
                                    <strong>Livraison standard</strong><br>
                                    <small class="text-muted">Délai: 3-5 jours ouvrables</small>
                                </span>
                                <span class="text-bordeaux-passion">OFFERTE</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="deliveryOption" id="expressDelivery">
                            <label class="form-check-label d-flex justify-content-between" for="expressDelivery">
                                <span>
                                    <strong>Livraison express</strong><br>
                                    <small class="text-muted">Délai: 1-2 jours ouvrables</small>
                                </span>
                                <span class="text-bordeaux-passion">+5 000 FCFA</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Colonne récapitulative -->
            <div class="col-lg-4">
                <div class="card summary-card animate-in" style="animation-delay: 0.4s;">
                    <div class="summary-header">
                        <h3 class="checkout-title mb-0"><i class="fas fa-shopping-bag me-2"></i> Votre commande</h3>
                    </div>
                    <div class="card-body">
                        <!-- Liste des produits -->
                        <div class="d-flex mb-4">
                            <img src="<?php echo $URL;?>images/img-17.jpg" class="product-img-checkout me-3" alt="Baiser de Nacre">
                            <div class="flex-grow-1">
                                <h5 class="product-title-checkout">Baiser de Nacre</h5>
                                <p class="product-variant mb-1">Blanc nacré • 70cm</p>
                                <p class="mb-0">28 000 FCFA</p>
                            </div>
                        </div>
                        
                        <div class="d-flex mb-4">
                            <img src="<?php echo $URL;?>images/img-18.jpg" class="product-img-checkout me-3" alt="Étreinte Lunaire">
                            <div class="flex-grow-1">
                                <h5 class="product-title-checkout">Étreinte Lunaire</h5>
                                <p class="product-variant mb-1">Noir • 65cm</p>
                                <p class="mb-0">35 000 FCFA</p>
                            </div>
                        </div>
                        
                        <div class="divider"></div>
                        
                        <!-- Récapitulatif des prix -->
                        <div class="mb-3">
                            <div class="d-flex justify-content-between mb-2">
                                <span>Sous-total</span>
                                <span>63 000 FCFA</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span>Livraison</span>
                                <span class="text-success">OFFERTE</span>
                            </div>
                            <div class="d-flex justify-content-between fw-bold fs-5 mt-3">
                                <span>Total</span>
                                <span>63 000 FCFA</span>
                            </div>
                        </div>
                        
                        <div class="divider"></div>
                        
                        <!-- Méthodes de paiement -->
                        <h5 class="mb-3"><i class="fas fa-credit-card me-2"></i> Paiement</h5>
                        
                        <div class="payment-method active mb-3">
                            <div class="payment-icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-1">Mobile Money</h6>
                                <small class="text-muted">MTN, Moov, etc.</small>
                            </div>
                        </div>

                        <div class="payment-method  mb-3">
                            <div class="payment-icon">
                                <i class="fab fa-cc-mastercard"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-1">Carte bancaire</h6>
                                <small class="text-muted">Visa, Mastercard, etc.</small>
                            </div>
                        </div>
                        
                        <div class="payment-method">
                            <div class="payment-icon">
                                <i class="fab fa-cc-paypal"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-1">PayPal</h6>
                                <small class="text-muted">Paiement sécurisé</small>
                            </div>
                        </div>

                        
                        <!-- Bouton de paiement -->
                        <button class="btn btn-pay w-100 mt-4 py-3">
                            <i class="fas fa-lock me-2"></i> Payer maintenant
                        </button>
                        
                        <!-- Sécurité -->
                        <div class="security-badge mt-3">
                            <i class="fas fa-shield-alt me-2"></i>
                            <small>Transactions 100% sécurisées</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

