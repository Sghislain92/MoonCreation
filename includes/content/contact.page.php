
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

    <!-- Contenu principal de la fiche produit -->
    <main class="page-contact">
        <!-- Contact Grid -->
        <section class="contact-methods">
            <div class="container">
                <div class="contact-grid">
                    <!-- Carte Email - Version améliorée -->
                    <div class="contact-card email-card">
                        <div class="card-inner">
                            <div class="icon-container">
                                <div class="icon-bg" style="background-color: rgba(255, 90, 95, 0.1);"></div>
                                <i class="fas fa-envelope-open-text"></i>
                                <div class="hover-effect"></div>
                            </div>
                            <h3>Contact Électronique</h3>
                            <p class="card-description">Réponse garantie sous 24h</p>
                            <div class="contact-detail">
                                <a href="mailto:contact@moon-creations.com" class="contact-link">
                                    <span>contact@moon-creations.com</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="card-decoration"></div>
                        </div>
                    </div>
                    
                    <!-- Carte Téléphone - Version améliorée -->
                    <div class="contact-card phone-card">
                        <div class="card-inner">
                            <div class="icon-container">
                                <div class="icon-bg" style="background-color: rgba(67, 97, 238, 0.1);"></div>
                                <i class="fas fa-mobile-alt"></i>
                                <div class="hover-effect"></div>
                            </div>
                            <h3>Support Immédiat</h3>
                            <p class="card-description">9h-18h, du lundi au vendredi</p>
                            <div class="contact-detail">
                                <a href="tel:+22901000000" class="contact-link">
                                    <span>+229 01 00 00 00</span>
                                    <i class="fas fa-phone"></i>
                                </a>
                            </div>
                            <div class="card-decoration"></div>
                        </div>
                    </div>
                    
                    <!-- Carte Adresse - Version améliorée -->
                    <div class="contact-card address-card">
                        <div class="card-inner">
                            <div class="icon-container">
                                <div class="icon-bg" style="background-color: rgba(76, 175, 80, 0.1);"></div>
                                <i class="fas fa-map-marked-alt"></i>
                                <div class="hover-effect"></div>
                            </div>
                            <h3>Visite Atelier</h3>
                            <p class="card-description">Sur rendez-vous exclusif</p>
                            <div class="contact-detail">
                                <div class="contact-link" onclick="openMap()">
                                    <span>123 Rue de la Sensualité<br>Cotonou, Bénin</span>
                                    <i class="fas fa-directions"></i>
                                </div>
                            </div>
                            <div class="card-decoration"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Formulaire -->
        <section class="py-5">
            <div class="container-fluid h-100">
                <div class="row g-0 min-vh-100">
                    <!-- Colonne Image -->
                    <div class="col-md-6">
                        <div class="contact-aside-img ratio ratio-1x1 w-100 h-100"> <!-- Ajout des classes ratio -->
                            <video class="img-fluid" autoplay muted loop style="object-fit: cover;">
                                <source src="<?php echo $URL ;?>videos/video-1.mp4" type="video/mp4">
                                Votre navigateur ne supporte pas les vidéos HTML5.
                                <!-- Fallback image si vidéo impossible -->
                                <img src="<?php echo $URL ;?>images/img-15.jpg" alt="Fallback" class="img-fluid h-100" style="object-fit: cover;">
                            </video>
                        </div>
                    </div>
                    
                    <!-- Colonne Formulaire -->
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="contact-form bg-white p-4 p-md-5">
                            <h2 class="text-center mb-4">Laissez-nous un message</h2><br/>
                            <p class="text-center text-muted">Nos conseillers clientels se feront une joie d evous répondre </p>
                            
                            <form style="<?php echo $affichage;?>" method="POST" action="<?php echo $URL;?>includes/incfiles/allajax.inc.php" class="flex-grow-1 d-flex flex-column">
                                <div class="row g-3 flex-grow-1">
                                    <!-- Nom -->
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Nom complet<span class="required-field">*</span></label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                        <div class="invalid-feedback">Veuillez saisir votre nom.</div>
                                    </div>
                                    
                                    <!-- Email -->
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email<span class="required-field">*</span></label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                        <div class="invalid-feedback">Veuillez saisir un email valide.</div>
                                    </div>

                                    <!-- Numéro -->
                                    <div class="col-md-6">
                                        <label for="tel" class="form-label">Téléphone<span class="required-field">*</span></label>
                                        <input type="text" class="form-control" id="tel" name="tel" required>
                                        <div class="invalid-feedback">Veuillez saisir votre téléphone.</div>
                                    </div>
                                    
                                    <!-- Pays -->
                                    <div class="col-md-6">
                                        <label for="pays" class="form-label">Pays<span class="required-field">*</span></label>
                                        <input type="text" class="form-control" id="pays" name="pays" required>
                                        <div class="invalid-feedback">Veuillez saisir votre pays.</div>
                                    </div>
                                    
                                    <!-- Sujet -->
                                    <div class="col-12">
                                        <label for="subject" class="form-label">Sujet<span class="required-field">*</span></label>
                                        <select class="form-select form-control" id="subject" name="subject" required>
                                            <option value="">Sélectionnez un sujet</option>
                                            <option>Commande sur mesure</option>
                                            <option>Question produit</option>
                                            <option>Retour/Échange</option>
                                            <option>Collaboration</option>
                                            <option>Autre</option>
                                        </select>
                                        <div class="invalid-feedback">Veuillez sélectionner un sujet.</div>
                                    </div>
                                    
                                    <!-- Message -->
                                    <div class="col-12">
                                        <label for="message" class="form-label">Message<span class="required-field">*</span></label>
                                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                                        <div class="invalid-feedback">Veuillez saisir votre message.</div>
                                    </div>
                                    <input type="hidden" name="csrf" value="<?php echo htmlspecialchars($_SESSION['csrf_token'], ENT_QUOTES, 'UTF-8'); ?>">
                                    
                                    <!-- Bouton -->
                                    <div class="col-12 text-center mt-4">
                                        <button type="submit" name="btn-send-msg" class="btn btn-sm btn-dark flex-grow-1" style="width:100%; height: 50px;">
                                            Envoyer le message
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div class="message-container <?php echo $message_class; ?>" style="<?php echo ($message ? 'display: flex;' : 'display: none;'); ?>">
                                <?php echo $message; ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA -->
        <section class="whatsapp-cta">
            <div class="cta-container">
                <div class="cta-content">
                    <!-- Icône animée -->
                    <div class="whatsapp-icon">
                        <div class="pulse-effect"></div>
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    
                    <h2 class="cta-title">Besoin d'aide immédiate ?</h2>
                    <p class="cta-subtitle">Notre équipe répond en moins de 5 minutes</p>
                    
                    <a href="https://wa.me/0022969384533" class="whatsapp-button"  target="_blank" >
                        <span class="button-icon"><i class="fab fa-whatsapp"></i></span>
                        <span class="button-text">Discuter sur WhatsApp</span>
                        <span class="button-hint">Réponse instantanée</span>
                    </a>
                    
                    <div class="availability-badge">
                        <?php
                        // Définir les heures d'ouverture (9h à 17h30)
                        $heure_actuelle = date('H:i');
                        $est_en_ligne = ($heure_actuelle >= '09:00' && $heure_actuelle <= '17:30');
                        ?>
                        
                        <span class="status-dot <?php echo $est_en_ligne ? 'available' : 'unavailable'; ?>"></span>
                        <?php echo $est_en_ligne ? 'En ligne maintenant' : 'Hors ligne'; ?>
                    </div>
                </div>
            </div>
        </section>
    </main>

