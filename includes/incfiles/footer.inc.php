    <!-- Footer -->
    <footer class="footer-moon">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <img src="<?php echo $URL ;?>images/logo-moon-creation.png" class="logo-moon" alt="Logo" class="d-none d-lg-inline-block ms-2 mb-3">
                    <p>Bijoux érotiques de luxe pour célébrer la féminité et la sensualité.</p>
                    <div class="social-links mt-3">
                        <a href="#" class="tiktok"><i class="fab fa-tiktok"></i></a>
                        <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="snapchat"><i class="fab fa-snapchat-ghost"></i></a>
                        <a href="#" class="user"><i class="fas fa-user"></i></a>
                    </div>
                </div>
                
                <div class="col-md-2 col-6 mb-4">
                    <h4 class="footer-title">Boutique</h4>
                    <a href="#" class="footer-link">Perles de Hanche</a>
                    <a href="#" class="footer-link">Chevillères</a>
                    <a href="#" class="footer-link">Nouveautétés</a>
                    <a href="#" class="footer-link">Promotions</a>
                </div>
                
                <div class="col-md-2 col-6 mb-4">
                    <h4 class="footer-title">Informations</h4>
                    <a href="#" class="footer-link">Livraison</a>
                    <a href="#" class="footer-link">Paiement</a>
                    <a href="#" class="footer-link">Retours</a>
                    <a href="#" class="footer-link">FAQ</a>
                </div>
                
                <div class="col-md-2 col-6 mb-4">
                    <h4 class="footer-title">Légal</h4>
                    <a href="#" class="footer-link">CGV</a>
                    <a href="#" class="footer-link">CGU</a>
                    <a href="#" class="footer-link">Mentions légales</a>
                    <a href="#" class="footer-link">Confidentialité</a>
                </div>
                
                <div class="col-md-2 col-6 mb-4">
                    <h4 class="footer-title">Contact</h4>
                    <a href="mailto:contact@moon-creations.com" class="footer-link">contact@moon-creations.com</a>
                    <a href="tel:+22901000000" class="footer-link">+229 01 00 00 00</a>
                    <a href="#" class="footer-link">Service client</a>
                </div>
            </div>
            
            <div class="text-center pt-4 mt-4 border-top" style="border-color: rgba(230, 200, 161, 0.2) !important;">
                <p class="small">© 2023 Moon Création by Vantablack. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
    
    <!-- WhatsApp Float -->
    <div class="whatsapp-float">
        <a href="https://wa.me/0022969384533?text=Bonjour%20Moon%20Création,%20je%20suis%20intéressé(e)%20par%20vos%20collections%20de%20perles%20et%20je%20souhaiterais%20obtenir%20plus%20d'informations." target="_blank" rel="noopener noreferrer" aria-label="Contactez-nous sur WhatsApp">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32" fill="currentColor">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
            </svg>
        </a>
    </div>
    
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <!-- Intégration de Swiper JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <script src="<?php echo $URL ;?>js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
    AOS.init({
        duration: 800,
        easing: 'ease-in-out-quad',
        once: true,
        mirror: false
    });



    // Initialisation du carrousel
    document.addEventListener('DOMContentLoaded', function() {
        new Swiper('.products-carousel', {
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            slidesPerView: 1,
            spaceBetween: 20,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.next',
                prevEl: '.prev',
            },
            breakpoints: {
                576: { slidesPerView: 2 },
                768: { slidesPerView: 3 },
                992: { slidesPerView: 4 }
            }
        });
    });


    document.addEventListener('DOMContentLoaded', function() {
            // Gestion de la quantité
            document.querySelectorAll('.quantity-btn.minus').forEach(btn => {
                btn.addEventListener('click', function() {
                    const input = this.nextElementSibling;
                    let value = parseInt(input.value);
                    if (value > 1) {
                        input.value = value - 1;
                        updateCartTotal();
                    }
                });
            });
            
            document.querySelectorAll('.quantity-btn.plus').forEach(btn => {
                btn.addEventListener('click', function() {
                    const input = this.previousElementSibling;
                    let value = parseInt(input.value);
                    input.value = value + 1;
                    updateCartTotal();
                });
            });
            
            // Suppression d'article
            document.querySelectorAll('.btn-remove-item').forEach(btn => {
                btn.addEventListener('click', function() {
                    this.closest('.cart-item').style.opacity = 0;
                    setTimeout(() => {
                        this.closest('.cart-item').remove();
                        updateCartTotal();
                    }, 300);
                });
            });
            
            // Mise à jour du total du panier (simplifié)
            function updateCartTotal() {
                // Dans une vraie implémentation, vous feriez un calcul réel ici
                console.log("Mise à jour du total du panier");
            }
            
            // Animation au survol des articles recommandés
            document.querySelectorAll('.recommendation-item img').forEach(img => {
                img.addEventListener('mouseenter', function() {
                    this.style.transform = 'scale(1.05)';
                });
                
                img.addEventListener('mouseleave', function() {
                    this.style.transform = 'scale(1)';
                });
            });
        });

    ///////////////////////// FICHE PRODUIT /////////////////////////

        // Initialisation du carrousel
        document.addEventListener('DOMContentLoaded', function() {
            new Swiper('.products-carousel', {
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                slidesPerView: 1,
                spaceBetween: 20,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.next',
                    prevEl: '.prev',
                },
                breakpoints: {
                    576: { slidesPerView: 2 },
                    768: { slidesPerView: 3 },
                    992: { slidesPerView: 4 }
                }
            });
        });

            document.addEventListener('DOMContentLoaded', function() {
                // Initialisation du slider des miniatures
                const thumbSlider = new Swiper('.thumbnails-slider', {
                    slidesPerView: 4,
                    spaceBetween: 10,
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    breakpoints: {
                        576: { slidesPerView: 5 },
                        768: { slidesPerView: 6 },
                        992: { slidesPerView: 4 }
                    }
                });
                
                // Initialisation du slider des produits similaires
                const relatedSlider = new Swiper('.products-slider', {
                    slidesPerView: 2,
                    spaceBetween: 20,
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    breakpoints: {
                        576: { slidesPerView: 3 },
                        768: { slidesPerView: 4 },
                        992: { slidesPerView: 3 }
                    }
                });
                
                // Changement d'image principale au clic sur les miniatures
                document.querySelectorAll('.thumbnail-item').forEach(thumb => {
                    thumb.addEventListener('click', function() {
                        const mainImg = document.querySelector('.main-image');
                        const newSrc = this.querySelector('img').src;
                        
                        // Effet de fondu
                        mainImg.style.opacity = 0;
                        setTimeout(() => {
                            mainImg.src = newSrc;
                            mainImg.style.opacity = 1;
                        }, 200);
                        
                        // Mise à jour de la miniature active
                        document.querySelectorAll('.thumbnail-item').forEach(item => {
                            item.classList.remove('active');
                        });
                        this.classList.add('active');
                    });
                });
                
                // Zoom sur l'image principale
                const mainImage = document.getElementById('zoom-image');
                mainImage.addEventListener('click', function() {
                    const overlay = document.createElement('div');
                    overlay.className = 'zoom-overlay';
                    
                    const zoomedImg = document.createElement('img');
                    zoomedImg.className = 'zoomed-image';
                    zoomedImg.src = this.src;
                    zoomedImg.alt = this.alt;
                    
                    overlay.appendChild(zoomedImg);
                    document.body.appendChild(overlay);
                    
                    overlay.addEventListener('click', function() {
                        document.body.removeChild(overlay);
                    });
                });
                
                // Sélecteur de quantité
                const minusBtn = document.querySelector('.quantity-btn.minus');
                const plusBtn = document.querySelector('.quantity-btn.plus');
                const quantityInput = document.querySelector('.quantity-input');
                
                minusBtn.addEventListener('click', function() {
                    let value = parseInt(quantityInput.value);
                    if (value > 1) {
                        quantityInput.value = value - 1;
                    }
                });
                
                plusBtn.addEventListener('click', function() {
                    let value = parseInt(quantityInput.value);
                    quantityInput.value = value + 1;
                });
                
                // Sélecteur de couleur
                document.querySelectorAll('.color-swatch').forEach(swatch => {
                    swatch.addEventListener('click', function() {
                        document.querySelectorAll('.color-swatch').forEach(s => {
                            s.classList.remove('active');
                        });
                        this.classList.add('active');
                    });
                });
            });

            document.addEventListener('DOMContentLoaded', function() {
        // Données des images
        const galleryImages = [
            { src: '<?php echo $URL;?>images/img-9.jpg', alt: 'Baiser de Nacre - Vue 1' },
            { src: '<?php echo $URL;?>images/img-10.jpg', alt: 'Baiser de Nacre - Vue 2' },
            { src: '<?php echo $URL;?>images/img-11.jpg', alt: 'Baiser de Nacre - Vue 3' },
            { src: '<?php echo $URL;?>images/img-12.jpg', alt: 'Baiser de Nacre - Vue 4' },
            { src: '<?php echo $URL;?>images/img-13.jpg', alt: 'Baiser de Nacre - Vue 5' }
        ];
        
        // Éléments du DOM
        const galleryModal = document.getElementById('galleryModal');
        const modalClose = document.getElementById('modalClose');
        const modalPrev = document.getElementById('modalPrev');
        const modalNext = document.getElementById('modalNext');
        const modalSlides = document.getElementById('modalSlides');
        const modalThumbnails = document.getElementById('modalThumbnails');
        const modalCounter = document.getElementById('modalCounter');
        const mainImage = document.querySelector('.main-image');
        const thumbnailItems = document.querySelectorAll('.thumbnail-item');
        
        let currentSlideIndex = 0;
        
        // Initialisation de la galerie modale
        function initModalGallery() {
            // Vider les conteneurs au cas où
            modalSlides.innerHTML = '';
            modalThumbnails.innerHTML = '';
            
            // Création des slides
            galleryImages.forEach((image, index) => {
                const slide = document.createElement('div');
                slide.className = `modal-slide ${index === 0 ? 'active' : ''}`;
                slide.dataset.index = index;
                
                const img = document.createElement('img');
                img.src = image.src;
                img.alt = image.alt;
                img.loading = 'lazy';
                
                slide.appendChild(img);
                modalSlides.appendChild(slide);
            });
            
            // Création des miniatures
            galleryImages.forEach((image, index) => {
                const thumbnail = document.createElement('div');
                thumbnail.className = `modal-thumbnail ${index === 0 ? 'active' : ''}`;
                thumbnail.dataset.index = index;
                
                const img = document.createElement('img');
                img.src = image.src;
                img.alt = `Miniature ${index + 1}`;
                
                thumbnail.appendChild(img);
                modalThumbnails.appendChild(thumbnail);
                
                // Gestionnaire d'événement pour les miniatures
                thumbnail.addEventListener('click', () => {
                    goToSlide(index);
                });
            });
            
            // Mise à jour du compteur
            updateCounter();
        }
        
        // Ouvrir la modale
        function openModal(index = 0) {
            currentSlideIndex = index;
            galleryModal.classList.add('active');
            document.body.style.overflow = 'hidden';
            document.body.style.paddingRight = `${getScrollbarWidth()}px`;
            goToSlide(index);
        }
        
        // Fermer la modale
        function closeModal() {
            galleryModal.classList.remove('active');
            document.body.style.overflow = '';
            document.body.style.paddingRight = '';
        }
        
        // Aller à un slide spécifique
    // Dans votre fonction goToSlide():
    function goToSlide(index) {
        // Masquer toutes les slides
        document.querySelectorAll('.modal-slide').forEach(slide => {
            slide.classList.remove('active');
        });
        
        // Afficher la slide active
        const slides = document.querySelectorAll('.modal-slide');
        if (slides[index]) {
            slides[index].classList.add('active');
        }
        
        // Mettre à jour l'index courant
        currentSlideIndex = index;
        
        // Mettre à jour le compteur et les miniatures
        updateCounter();
        updateThumbnails();
    }
        
        // Mettre à jour le compteur
        function updateCounter() {
            modalCounter.textContent = `${currentSlideIndex + 1} / ${galleryImages.length}`;
        }
        
        // Navigation
        function nextSlide() {
            goToSlide(currentSlideIndex + 1);
        }
        
        function prevSlide() {
            goToSlide(currentSlideIndex - 1);
        }
        
        // Calculer la largeur de la scrollbar pour éviter le saut de contenu
        function getScrollbarWidth() {
            return window.innerWidth - document.documentElement.clientWidth;
        }
        
        // Événements clavier
        function handleKeyDown(e) {
            if (!galleryModal.classList.contains('active')) return;
            
            switch (e.key) {
                case 'Escape':
                    closeModal();
                    break;
                case 'ArrowLeft':
                    prevSlide();
                    break;
                case 'ArrowRight':
                    nextSlide();
                    break;
            }
        }
        
        // Initialisation
        initModalGallery();
        
        // Événements
        mainImage.addEventListener('click', () => openModal(0));
        
        thumbnailItems.forEach((item, index) => {
            item.addEventListener('click', (e) => {
                e.preventDefault();
                openModal(parseInt(item.dataset.index));
            });
        });
        
        modalClose.addEventListener('click', closeModal);
        modalPrev.addEventListener('click', prevSlide);
        modalNext.addEventListener('click', nextSlide);
        document.addEventListener('keydown', handleKeyDown);
        
        // Swipe pour les mobiles
        let touchStartX = 0;
        let touchEndX = 0;
        
        modalSlides.addEventListener('touchstart', (e) => {
            touchStartX = e.changedTouches[0].screenX;
        }, { passive: true });
        
        modalSlides.addEventListener('touchend', (e) => {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        }, { passive: true });
        
        function handleSwipe() {
            const threshold = 50;
            if (touchEndX < touchStartX - threshold) {
                nextSlide();
            } else if (touchEndX > touchStartX + threshold) {
                prevSlide();
            }
        }
        
        // Initialisation du slider des miniatures
        const thumbSlider = new Swiper('.thumbnails-slider', {
            slidesPerView: 4,
            spaceBetween: 10,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                576: { slidesPerView: 5 },
                768: { slidesPerView: 6 },
                992: { slidesPerView: 4 }
            }
        });
    });
        
    /////////////////////////FIN FICHE PRODUIT /////////////////////////


    ///////////////////////////CONTACT///////////////////////////////

    function openMap() {
        // Fonction pour ouvrir la localisation dans Google Maps
        window.open('https://maps.google.com?q=123+Rue+de+la+Sensualité,Cotonou,Bénin', '_blank');
    }

        // Animation pour le formulaire
        document.querySelectorAll('.form-control').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentNode.classList.add('focused');
            });
            
            input.addEventListener('blur', function() {
                if (this.value === '') {
                    this.parentNode.classList.remove('focused');
                }
            });
        });

        // Validation et soumission du formulaire
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const form = this;
            
            // Validation manuelle
            if (!form.checkValidity()) {
                e.stopPropagation();
                form.classList.add('was-validated');
                return;
            }
            
            const submitBtn = form.querySelector('[name="btn-send-msg"]');
            const originalText = submitBtn.innerHTML;
            
            // Animation de chargement
            submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span> Envoi en cours...';
            submitBtn.disabled = true;
            
            // Envoi AJAX
            fetch('', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: new URLSearchParams(new FormData(form))
            })
            .then(response => {
                if (!response.ok) {
                    return response.text().then(text => {
                        throw new Error(`Erreur HTTP ${response.status}: ${text}`);
                    });
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    // Succès
                    submitBtn.innerHTML = '<i class="fas fa-check me-2"></i> Message envoyé';
                    submitBtn.classList.remove('btn-dark');
                    submitBtn.classList.add('btn-success');
                    
                    // Confirmation élégante
                    const confirmation = document.createElement('div');
                    confirmation.className = 'alert alert-dark mt-4 text-center fade show';
                    confirmation.innerHTML = `
                        <div class="d-flex align-items-center justify-content-center">
                            <i class="fas fa-gem me-3" style="color: var(--gold-moon);"></i>
                            <div>
                                <h4 class="alert-heading mb-1">Merci pour votre message</h4>
                                <p class="mb-0">Notre équipe vous répondra sous 24h</p>
                            </div>
                        </div>
                    `;
                    
                    form.appendChild(confirmation);
                    
                    // Réinitialisation après 5s
                    setTimeout(() => {
                        form.reset();
                        form.classList.remove('was-validated');
                        submitBtn.innerHTML = originalText;
                        submitBtn.classList.add('btn-dark');
                        submitBtn.classList.remove('btn-success');
                        submitBtn.disabled = false;
                        confirmation.remove();
                    }, 5000);
                } else {
                    // Erreur
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                    alert('Erreur: ' + (data.message || 'Une erreur est survenue'));
                }
            })
            .catch(error => {
                console.error("Erreur complète:", error); // Debug 2
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
                alert("Erreur technique. Voir console pour détails.");
            });
        });

        // Animation pour les champs du formulaire
        document.querySelectorAll('.form-control').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentNode.classList.add('focused');
            });
            
            input.addEventListener('blur', function() {
                if (this.value === '') {
                    this.parentNode.classList.remove('focused');
                }
            });
        });

    ///////////////////////// FIN CONTACT /////////////////////////


    ///////////////////////////PANIER///////////////////////////
    document.addEventListener('DOMContentLoaded', function() {
            // Gestion de la quantité
            document.querySelectorAll('.quantity-btn.minus').forEach(btn => {
                btn.addEventListener('click', function() {
                    const input = this.nextElementSibling;
                    let value = parseInt(input.value);
                    if (value > 1) {
                        input.value = value - 1;
                        updateCartTotal();
                    }
                });
            });
            
            document.querySelectorAll('.quantity-btn.plus').forEach(btn => {
                btn.addEventListener('click', function() {
                    const input = this.previousElementSibling;
                    let value = parseInt(input.value);
                    input.value = value + 1;
                    updateCartTotal();
                });
            });
            
            // Suppression d'article
            document.querySelectorAll('.btn-remove-item').forEach(btn => {
                btn.addEventListener('click', function() {
                    this.closest('.cart-item').style.opacity = 0;
                    setTimeout(() => {
                        this.closest('.cart-item').remove();
                        updateCartTotal();
                    }, 300);
                });
            });
            
            // Mise à jour du total du panier (simplifié)
            function updateCartTotal() {
                // Dans une vraie implémentation, vous feriez un calcul réel ici
                console.log("Mise à jour du total du panier");
            }
            
            // Animation au survol des articles recommandés
            document.querySelectorAll('.recommendation-item img').forEach(img => {
                img.addEventListener('mouseenter', function() {
                    this.style.transform = 'scale(1.05)';
                });
                
                img.addEventListener('mouseleave', function() {
                    this.style.transform = 'scale(1)';
                });
            });
        });
    ///////////////////////// FIN PANIER ///////////////////////


    ///////////////////////// Validation de commande///////////////////////

    document.addEventListener('DOMContentLoaded', function() {
            // Animation de copie du code promo
            const copyBtn = document.querySelector('.btn-copy-confirm');
            if (copyBtn) {
                copyBtn.addEventListener('click', function() {
                    const code = this.getAttribute('data-clipboard-text');
                    navigator.clipboard.writeText(code).then(() => {
                        const originalIcon = this.innerHTML;
                        this.innerHTML = '<i class="fas fa-check"></i>';
                        setTimeout(() => {
                            this.innerHTML = originalIcon;
                        }, 2000);
                    });
                });
            }
            
            // Animation des éléments
            const animateElements = document.querySelectorAll('.fade-in');
            animateElements.forEach(el => {
                const delay = el.classList.contains('delay-1') ? 200 : 
                             el.classList.contains('delay-2') ? 400 :
                             el.classList.contains('delay-3') ? 600 :
                             el.classList.contains('delay-4') ? 800 :
                             el.classList.contains('delay-5') ? 1000 : 0;
                
                setTimeout(() => {
                    el.style.opacity = 1;
                    el.style.transform = 'translateY(0)';
                }, delay);
            });
        });


    ////////////////////////// FIN Validation de commande ///////////////////////


    /////////////////////////CHECKOUT///////////////////////////////////

    document.addEventListener('DOMContentLoaded', function() {
            // Sélection des méthodes de paiement
            const paymentMethods = document.querySelectorAll('.payment-method');
            paymentMethods.forEach(method => {
                method.addEventListener('click', function() {
                    paymentMethods.forEach(m => m.classList.remove('active'));
                    this.classList.add('active');
                });
            });
            
            // Animation des éléments
            const animateElements = document.querySelectorAll('.animate-in');
            animateElements.forEach((el, index) => {
                el.style.animationDelay = `${index * 0.1 + 0.2}s`;
            });
            
            // Validation du formulaire
            const form = document.getElementById('checkoutForm');
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                // Ici vous ajouteriez la validation et la soumission
                window.location.href = "paiement.html";
            });
        });
    //////////////////////////// FIN CHECKOUT /////////////////////////
    </script>

</body>
</html>