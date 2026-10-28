

    <!-- En-tête de la page panier -->
    <header class="page-panier-header">
        <div class="container">
            <div class="breadcrumb-container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo $URL;?>">Accueil</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Panier</li>
                    </ol>
                </nav>
            </div>
            <div class="header-content">
                <h1 class="display-4">Votre sélection</h1>
                <p class="lead">Des pièces uniques pour célébrer votre sensualité</p>
                <div class="collection-badge">Édition Limitée</div>
            </div>
        </div>
    </header>

    <!-- Contenu principal du panier -->
    <main class="page-panier">
        <div class="container">
            <div class="row">
                <!-- Articles du panier -->
                <div class="col-lg-8">
                    <div class="cart-container">
                        <!-- En-tête du panier -->
                        <div class="cart-header">
                            <h2><i class="fas fa-shopping-bag me-2"></i> Votre panier <span class="item-count">(3 articles)</span></h2>
                            <button class="btn-continue-shopping">
                                <i class="fas fa-arrow-left me-2"></i> Continuer vos achats
                            </button>
                        </div>
                        
                        <!-- Liste des articles -->
                        <div class="cart-items">
                            <!-- Article 1 -->
                            <div class="cart-item">
                                <div class="item-image">
                                    <img src="<?php echo $URL;?>images/img-17.jpg" alt="Baiser de Nacre" class="img-fluid">
                                    <button class="btn-remove-item" title="Supprimer">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                                <div class="item-details">
                                    <h3 class="item-title">Baiser de Nacre</h3>
                                    <p class="item-variant">Couleur: Blanc nacré • Taille: 70cm</p>
                                    <div class="item-actions">
                                        <div class="quantity-selector">
                                            <button class="quantity-btn minus"><i class="fas fa-minus"></i></button>
                                            <input type="number" value="1" min="1" class="quantity-input">
                                            <button class="quantity-btn plus"><i class="fas fa-plus"></i></button>
                                        </div>
                                        <div class="item-price">28 000 FCFA</div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Article 2 -->
                            <div class="cart-item">
                                <div class="item-image">
                                    <img src="<?php echo $URL;?>images/img-18.jpg" alt="Étreinte Lunaire" class="img-fluid">
                                    <button class="btn-remove-item" title="Supprimer">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                                <div class="item-details">
                                    <h3 class="item-title">Étreinte Lunaire</h3>
                                    <p class="item-variant">Couleur: Noir • Taille: 65cm</p>
                                    <div class="item-actions">
                                        <div class="quantity-selector">
                                            <button class="quantity-btn minus"><i class="fas fa-minus"></i></button>
                                            <input type="number" value="1" min="1" class="quantity-input">
                                            <button class="quantity-btn plus"><i class="fas fa-plus"></i></button>
                                        </div>
                                        <div class="item-price">35 000 FCFA</div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Article 3 -->
                            <div class="cart-item">
                                <div class="item-image">
                                    <img src="<?php echo $URL;?>images/img-19.jpg" alt="Silk & Désir" class="img-fluid">
                                    <button class="btn-remove-item" title="Supprimer">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                                <div class="item-details">
                                    <h3 class="item-title">Silk & Désir</h3>
                                    <p class="item-variant">Couleur: Rouge rubis • Taille: 75cm</p>
                                    <div class="item-actions">
                                        <div class="quantity-selector">
                                            <button class="quantity-btn minus"><i class="fas fa-minus"></i></button>
                                            <input type="number" value="1" min="1" class="quantity-input">
                                            <button class="quantity-btn plus"><i class="fas fa-plus"></i></button>
                                        </div>
                                        <div class="item-price">38 000 FCFA</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Code promo -->
                        <div class="promo-code">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Code promo">
                                <button class="btn-apply">Appliquer</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Récapitulatif de commande -->
                <div class="col-lg-4">
                    <div class="order-summary">
                        <div class="summary-header">
                            <h3><i class="fas fa-receipt me-2"></i> Récapitulatif</h3>
                        </div>
                        
                        <div class="summary-content">
                            <div class="summary-row">
                                <span>Sous-total</span>
                                <span>101 000 FCFA</span>
                            </div>
                            <div class="summary-row">
                                <span>Livraison</span>
                                <span class="free-shipping">OFFERTE</span>
                            </div>
                            <div class="summary-row promo-row">
                                <span>Promotion</span>
                                <span>-10 000 FCFA</span>
                            </div>
                            
                            <div class="divider"></div>
                            
                            <div class="summary-row total">
                                <span>Total</span>
                                <span class="total-price">91 000 FCFA</span>
                            </div>
                            
                            <button class="btn-checkout">
                                <i class="fas fa-lock me-2"></i> Passer la commande
                            </button>
                            
                            <div class="payment-methods">
                                <p>Modes de paiement acceptés :</p>
                                <div class="payment-icons">
                                    <i class="fab fa-cc-visa"></i>
                                    <i class="fab fa-cc-mastercard"></i>
                                    <i class="fab fa-cc-paypal"></i>
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="security-badge">
                            <i class="fas fa-shield-alt"></i>
                            <span>Paiement 100% sécurisé</span>
                        </div>
                    </div>
                    
                    <!-- Recommandations -->
                    <div class="cart-recommendations">
                        <h4><i class="fas fa-heart me-2"></i> Complétez votre look</h4>
                        <div class="recommendation-items">
                            <div class="recommendation-item">
                                <img src="<?php echo $URL;?>images/img-20.jpg" alt="Ombre Dorée" class="img-fluid">
                                <div class="item-info">
                                    <h5>Ombre Dorée</h5>
                                    <p>25 000 FCFA</p>
                                    <button class="btn-add-to-cart">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="recommendation-item">
                                <img src="<?php echo $URL;?>images/img-15.jpg" alt="Rouge Hanche" class="img-fluid">
                                <div class="item-info">
                                    <h5>Rouge Hanche</h5>
                                    <p>30 000 FCFA</p>
                                    <button class="btn-add-to-cart">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

*