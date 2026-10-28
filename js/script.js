        // Hero Slider
        const heroSlider = new Swiper('.hero-slider', {
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
        
        // Animation des liens de navigation
        document.querySelectorAll('.nav-link-moon').forEach(link => {
            link.addEventListener('mouseenter', function() {
                this.style.color = 'var(--or-veritable)';
            });
            
            link.addEventListener('mouseleave', function() {
                this.style.color = 'var(--rose-poudré)';
            });
        });
        
        // Animation des cartes produits
        document.querySelectorAll('.product-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px)';
                this.style.boxShadow = '0 10px 20px rgba(140, 47, 74, 0.1)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = '';
                this.style.boxShadow = '';
            });
        });


        // Menu mobile
        const mobileMenuToggle = document.getElementById('mobileMenuToggle');
        const mobileMenu = document.getElementById('mobileMenu');
        
        mobileMenuToggle.addEventListener('click', function() {
            mobileMenu.classList.toggle('active');
            document.body.classList.toggle('no-scroll');
        });
        
        // Animation parallax
        window.addEventListener('scroll', function() {
            const scrollPosition = window.pageYOffset;
            const parallaxLayer = document.querySelector('.layer-1');
            
            if (parallaxLayer) {
                parallaxLayer.style.transform = `translateY(${scrollPosition * 0.5}px)`;
            }
            
            // Navbar scroll effect
            if (scrollPosition > 100) {
                document.querySelector('.navbar-moon').classList.add('scrolled');
            } else {
                document.querySelector('.navbar-moon').classList.remove('scrolled');
            }
        });
        
        // Animation au chargement
        document.addEventListener('DOMContentLoaded', function() {
            const elements = document.querySelectorAll('.hero-title, .hero-subtitle, .btn-signature');
            
            elements.forEach((el, index) => {
                setTimeout(() => {
                    el.style.opacity = 1;
                    el.style.transform = 'translateY(0)';
                }, 300 * index);
            });
        });

