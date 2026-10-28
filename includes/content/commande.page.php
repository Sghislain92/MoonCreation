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
    <main class="order-confirmation py-5">
        <div class="container">
            
            <!-- En-tête -->
            <div class="confirmation-header fade-in delay-1">
                <h2 class="confirmation-title">Commande Confirmée</h2>
                <p class="confirmation-subtitle">Merci pour votre confiance, <span class="customer-name">Sarah</span>. Votre commande a bien été enregistrée.</p>
                <div class="order-number">N° MC20235678</div>
            </div>
            
            <!-- Carte de confirmation -->
            <div class="confirmation-card fade-in delay-2">
                <div class="card-header-confirm">
                    <h2><i class="fas fa-box-open me-2"></i> Votre Commande</h2>
                    <div class="order-status">En Préparation</div>
                </div>
                
                <div class="card-body-confirm">
                    <!-- Produits commandés -->
                    <div class="ordered-products">
                        <div class="product-item-confirm">
                            <img src="<?php echo $URL;?>images/img-17.jpg" alt="Baiser de Nacre" class="product-img-confirm">
                            <div class="product-info-confirm">
                                <h3 class="product-name-confirm">Baiser de Nacre</h3>
                                <p class="product-variant-confirm">Couleur: Blanc nacré • Taille: 70cm</p>
                                <p class="product-price-confirm">28 000 FCFA</p>
                            </div>
                        </div>
                        
                        <div class="product-item-confirm">
                            <img src="<?php echo $URL;?>images/img-18.jpg" alt="Étreinte Lunaire" class="product-img-confirm">
                            <div class="product-info-confirm">
                                <h3 class="product-name-confirm">Étreinte Lunaire</h3>
                                <p class="product-variant-confirm">Couleur: Noir • Taille: 65cm</p>
                                <p class="product-price-confirm">35 000 FCFA</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Récapitulatif -->
                    <div class="order-summary-confirm">
                        <div class="summary-row-confirm">
                            <span>Sous-total</span>
                            <span>63 000 FCFA</span>
                        </div>
                        <div class="summary-row-confirm">
                            <span>Livraison</span>
                            <span class="free-confirm">OFFERTE</span>
                        </div>
                        <div class=" total">
                            <span>Total</span>
                            <span class="highlight-confirm">63 000 FCFA</span>
                        </div>
                    </div>
                </div>
                
                <!-- Livraison -->
                <div class="delivery-info-confirm">
                    <div class="delivery-info-content">
                        <div class="delivery-icon">
                            <i class="fas fa-truck"></i>
                        </div>
                        <div class="delivery-text">
                            <h4>Livraison Prévisionnelle</h4>
                            <p>Jeudi 12 octobre - Lundi 16 octobre</p>
                            <small>Expédition suivie avec DHL • Numéro de suivi disponible sous 24h</small>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Suivi de commande -->
            <div class="tracking-section fade-in delay-3">
                <h3 class="tracking-title"><i class="fas fa-map-marked-alt"></i> Suivi de Votre Commande</h3>
                
                <div class="tracking-steps">
                    <div class="tracking-step completed">
                        <div class="step-icon-confirm">1</div>
                        <div class="step-info-confirm">
                            <h4>Commande Validée</h4>
                            <p>Aujourd'hui à 14:32</p>
                        </div>
                    </div>
                    
                    <div class="tracking-step active">
                        <div class="step-icon-confirm">2</div>
                        <div class="step-info-confirm">
                            <h4>En Préparation</h4>
                            <p>Expédition prévue sous 24h</p>
                        </div>
                    </div>
                    
                    <div class="tracking-step">
                        <div class="step-icon-confirm">3</div>
                        <div class="step-info-confirm">
                            <h4>Expédiée</h4>
                            <p>Avec numéro de suivi</p>
                        </div>
                    </div>
                    
                    <div class="tracking-step">
                        <div class="step-icon-confirm">4</div>
                        <div class="step-info-confirm">
                            <h4>Livrée</h4>
                            <p>À votre domicile</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Informations -->
            <div class="info-sections-confirm">
                <!-- Adresse -->
                <div class="info-card-confirm fade-in delay-4">
                    <h3 class="info-card-title"><i class="fas fa-home"></i> Adresse de Livraison</h3>
                    <address>
                        <strong>Sarah Koffi</strong><br>
                        12 Rue des Cocotiers<br>
                        Résidence Les Palmiers, Appt 34<br>
                        Cotonou, Bénin<br><br>
                        <i class="fas fa-phone me-2"></i> +229 67 89 01 23
                    </address>
                </div>
                
                <!-- Paiement -->
                <div class="info-card-confirm fade-in delay-4">
                    <h3 class="info-card-title"><i class="fas fa-credit-card"></i> Paiement</h3>
                    
                    <div class="payment-method-confirm">
                        <div class="payment-icon-confirm">
                            <i class="fab fa-cc-mastercard"></i>
                        </div>
                        <div class="payment-details-confirm">
                            <p>Mastercard •••• •••• •••• 4242</p>
                            <small>Payé le 10/10/2023 à 14:32</small>
                        </div>
                    </div>
                    
                    <div class="mt-4">
                        <p><strong>Total payé:</strong> 63 000 FCFA</p>
                        <p class="text-success"><i class="fas fa-check-circle me-2"></i> Paiement confirmé</p>
                    </div>
                </div>
            </div>
            
            <!-- Actions -->
            <div class="action-buttons-confirm fade-in delay-5">
                <a href="#" class="btn-confirm btn-confirm-primary">
                    <i class="fas fa-download"></i> Télécharger la Facture
                </a>
                <a href="<?php echo $URL ;?>htdocs/boutique" class="btn-confirm btn-confirm-secondary">
                    <i class="fas fa-undo"></i> Retour à la Boutique
                </a>
            </div>
            
            <!-- Offre spéciale -->
            <div class="special-offer fade-in delay-5">
                <div class="offer-icon">
                    <i class="fas fa-gift"></i>
                </div>
                <div class="offer-content">
                    <h3>Votre Cadeau de Bienvenue</h3>
                    <p>Pour votre première commande, nous vous offrons un code promo de <strong>10%</strong> valable sur votre prochaine acquisition.</p>
                    <div class="promo-code-confirm">
                        <span>MOON10</span>
                        <button class="btn-copy-confirm" data-clipboard-text="MOON10">
                            <i class="far fa-copy"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Sécurité -->
            <div class="security-badge-confirm fade-in delay-5">
                <i class="fas fa-shield-alt"></i>
                <h5 class="mb-2">Paiement 100% Sécurisé</h5>
                <p class="security-text">Toutes vos informations sont protégées par un chiffrement SSL</p>
            </div>
        </div>
    </main>

