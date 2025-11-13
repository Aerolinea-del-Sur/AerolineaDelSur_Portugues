<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- BUSQUEDA GOOGLE -->
            <title>aerolineas del sur</title>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <meta name="description" content="" />
            <meta name="keywords" content="" />
            <meta name="author" content="" />
        <!-- CONEXION A TIPOGRAFIAS -->
            <!-- CONEXION A TIPOGRAFIAS -->
            <!-- Preconexión para fuentes de Google (mejora velocidad de carga) -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <!-- Precarga de fuentes -->
            <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Space+Grotesk:wght@300;400;500;600;700&display=swap">
            <link rel="preload" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
            
            <!-- Carga el CSS de fuentes de forma no bloqueante -->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" media="print" onload="this.media='all'">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" media="print" onload="this.media='all'">
            
            <!-- Fallback para navegadores sin JavaScript -->
            <noscript>
                <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Space+Grotesk:wght@300;400;500;600;700&display=swap">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
            </noscript>
                <!-- Iconos -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />   
        <!-- CONEXION A ESTILOS 
            <link rel="stylesheet" href="/css/princi.css">
            <link rel="stylesheet" href="/js/princi.js">-->
        
        <!-- METAETIQUETAS -->
            <!-- Open Graph (FACEBOOK) -->
            <meta property="og:title" content="Aerolineas del Sur - Viajes VIP">
            <meta property="og:description" content="Descubre experiencias únicas y personalizadas.">
            <meta property="og:image" content="https://tusitio.com/imagenes/og-image.jpg"><!-- Fala -->
            <meta property="og:url" content="https://russellexperienceperutravel.com"><!-- Fala -->
            <meta property="og:type" content="website"><!-- Fala -->
            <meta property="og:site_name" content="Russell Experience">
            <meta property="og:locale" content="es_PE">
            <meta property="og:locale:alternate" content="en_US">
            <meta property="og:locale:alternate" content="fr_FR">
            
            <!-- Twitter Card 
            <meta name="twitter:card" content="summary_large_image">
            <meta name="twitter:title" content="Russell Experience - Turismo Sostenible en Perú">
            <meta name="twitter:description" content="Descubre experiencias únicas y personalizadas en Perú con Russell Experience.">
            <meta name="twitter:image" content="https://tusitio.com/imagenes/twitter-image.jpg">
            /* Datos estructurados (JSON-LD)*/
            <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Organization",
                "name": "Russell Experience",
                "url": "https://tusitio.com",
                "logo": "https://tusitio.com/imagenes/logo.png",
                "contactPoint": {
                    "@type": "ContactPoint",
                    "telephone": "+51 946 033 024",
                    "contactType": "Customer Service"
                }
            } 
            </script>-->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- CSS Separados -->
            <link rel="stylesheet" href="{{ asset('public/css/general.css') }}">
            <link rel="stylesheet" href="{{ asset('public/css/princi/header.css') }}">
            <link rel="stylesheet" href="{{ asset('public/css/princi/footer.css') }}">
    </head>
    <body>
        <!-- Encabezado -->
            <header class="header">
                <div class="header-container">
                    <!-- Logo -->
                    <a href="/" class="logo"><img src="public/img/logo.svg" alt="Aerolineas del Sur" class="logo-img"></a>
                    <!-- Pill Navigation -->
                    <nav class="nav">
                        
                        <a href="/nosotros" class="nav-link pricing-link">Nosotros</a>
                        <a href="/servicio" class="nav-link pricing-link">Servicio</a>
                        <a href="/aeronaves" class="nav-link pricing-link">Aeronaves</a>
                        <a href="/agencia" class="nav-link pricing-link"> Agencia</a>
                        <a href="/blog" class="nav-link pricing-link">Blog</a>

                    </nav>
                    <!-- Gradient Buttons -->
                    <div class="header-cta">
                        <a href="contacto" class="btn-primary">
                            <span>Contactanos</span>
                        </a>
                    </div>
                    <!-- Floating Mobile Button -->
                    <button class="mobile-menu-btn" onclick="toggleMobileMenu()">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <line x1="3" y1="12" x2="21" y2="12"></line>
                            <line x1="3" y1="18" x2="21" y2="18"></line>
                        </svg>
                    </button>
                </div>
                <!-- Floating Mobile Menu -->
                <div class="mobile-menu" id="mobileMenu">
                    <nav class="mobile-nav">
                        <a href="nosotros" class="mobile-nav-link">Nosotros</a>
                        <a href="aeronaves" class="mobile-nav-link">Flota Aerea</a>
                        <a href="servicio" class="mobile-nav-link">Servicio</a>
                        <a href="agencia" class="mobile-nav-link">Agencia</a>
                        <a href="blog" class="mobile-nav-link">Blog</a>
                        <div class="mobile-cta">
                            <a href="contacto" class="mobile-btn mobile-btn-primary">Contacto</a>
                        </div>
                    </nav>
                </div>
            </header>
        <!-- Main Content -->
            @yield('content')
        <!-- Footer -->
            <footer class="footer">
                    <div class="footer-container">
                        <!-- Main Footer Content -->
                        <div class="footer-main">
                            <div class="footer-brand">
                                <div class="footer-logo">AEROLINEA DEL SUR E.I.R.L</div>
                                <p class="footer-tagline">Tu aerolínea de confianza para volar por el sur del Perú con seguridad y comodidad.</p>
                                <div class="footer-social">
                                    <a href="https://www.facebook.com/profile.php?id=61575792015865" target="_blank" class="social-link" aria-label="Facebook">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                        </svg>
                                    </a>
                                    <a href="https://www.instagram.com/aerolineadelsur/" target="_blank" class="social-link" aria-label="Instagram">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                        </svg>
                                    </a>
                                    <a href="https://www.tiktok.com/@aerolineadelsur" target="_blank" class="social-link" aria-label="TikTok">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-.88-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-.04-.1z"/>
                                        </svg>
                                    </a>
                                    <a href="https://www.tripadvisor.com/Attraction_Review-g294314-d33262541-Reviews-Aerolinea_Del_Sur-Cusco_Cusco_Region.html" target="_blank" class="social-link" aria-label="TripAdvisor">
                                        <img src="public/img/tripadvisor.png" alt="TripAdvisor" class="tripadvisor-icon">
                                    </a>
                                </div>
                            </div>

                            <div class="footer-links">

                                <div class="footer-column">
                                    <h3 class="footer-title">Servicios</h3>
                                    <ul class="footer-list">
                                        <li><a href="/nosotros" class="footer-link">Nosotros</a></li>
                                        <li><a href="/servicio" class="footer-link">Servicio</a></li>
                                        <li><a href="/aeronaves" class="footer-link">Aeronaves</a></li>
                                        <li><a href="/agencia" class="footer-link">Agencia</a></li>
                                        <li><a href="/blog" class="footer-link">Blog</a></li>
                                    </ul>
                                </div>

                                <div class="footer-column">
                                    <h3 class="footer-title">Legal</h3>
                                    <ul class="footer-list">
                                        <li><a href="/esna" class="footer-link">Code Esnna</a></li>
                                        <li><a href="/pagos" class="footer-link">Métodos de Pago</a></li>
                                        <li><a href="/politicas-privacidad" class="footer-link">Políticas de Privacidad</a></li>
                                        <li><a href="/terminos-condiciones" class="footer-link">Términos y Condiciones</a></li>
                                    </ul>
                                </div>
                                <!-- Información de contacto -->
                                <div class="footer-tagline">
                                    <div class="contact-item">
                                        <strong>RUC:</strong> 20612563234
                                    </div>
                                    <div class="contact-item">
                                        <strong>Celular:</strong> +51 932 475 995
                                    </div>
                                    <div class="contact-item">
                                        <strong>Email:</strong> contacto@aerolineadelsur.com.pe
                                    </div>
                                    <div class="contact-item">
                                        <strong>Email:</strong> paul.olivares@aerolineadelsur.com.pe
                                    </div>
                                    <div class="contact-item">
                                        <strong>Dirección:</strong> Centro Comercial San Andrés oficina nro 314 tercer piso
                                    </div>
                                    <div class="contact-item">
                                        <strong>Ciudad:</strong> Cusco
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Newsletter Subscription 
                        <div class="footer-newsletter">
                            <div class="newsletter-content">
                                <div class="newsletter-text">
                                    <h3>Únete a nuestra comunidad</h3>
                                    <p>Suscríbete y descubre todas las novedades y beneficios exclusivos.</p>
                                </div>
                                <div class="newsletter-form">
                                    <div class="input-group">
                                        <input type="email" placeholder="Enter your email" class="newsletter-input">
                                        <button class="newsletter-btn">
                                            <span>Subscribe</span>
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                                <polyline points="12,5 19,12 12,19"></polyline>
                                            </svg>
                                        </button>
                                    </div>
                                    <p class="newsletter-disclaimer">
                                        Sin spam. Darse de baja en cualquier momento.
                                    </p>
                                </div>
                            </div>
                        </div>-->

                        <!-- Footer Bottom -->
                        <div class="footer-bottom">
                            <div class="footer-legal" >
                                <p class="copyright">&copy; Aerolineas del Sur - 2025 Derechos Reservados</p>
                            </div>
                        </div>
                    </div>
            </footer>
            <script>
                function toggleMobileMenu() {
                    const mobileMenu = document.getElementById('mobileMenu');
                    const menuBtn = document.querySelector('.mobile-menu-btn');
                    
                    if (mobileMenu && menuBtn) {
                        mobileMenu.classList.toggle('active');
                        menuBtn.classList.toggle('active');
                    }
                }

                // Cerrar menú móvil al hacer clic fuera
                document.addEventListener('click', function(event) {
                    const mobileMenu = document.getElementById('mobileMenu');
                    const menuBtn = document.querySelector('.mobile-menu-btn');
                    
                    if (mobileMenu && menuBtn && 
                        !mobileMenu.contains(event.target) && 
                        !menuBtn.contains(event.target) && 
                        mobileMenu.classList.contains('active')) {
                        mobileMenu.classList.remove('active');
                        menuBtn.classList.remove('active');
                    }
                });

                // Cerrar menú móvil al redimensionar ventana
                window.addEventListener('resize', function() {
                    const mobileMenu = document.getElementById('mobileMenu');
                    const menuBtn = document.querySelector('.mobile-menu-btn');
                    
                    if (window.innerWidth > 768 && mobileMenu && menuBtn) {
                        mobileMenu.classList.remove('active');
                        menuBtn.classList.remove('active');
                    }
                });
                window.addEventListener('scroll', () => {
                const header = document.querySelector('.header');
                if (window.scrollY > 50) header.classList.add('scrolled');
                else header.classList.remove('scrolled');
                });

            </script>
            <!-- Botones Verticales de Redes Sociales --> 
            <div class="social-sidebar">
                <div class="social-header">
                    <span>Síguenos</span>
                </div>
                <div class="social-buttons-vertical">
                    <a href="https://www.facebook.com/profile.php?id=61575792015865" target="_blank" class="social-btn-minimal facebook" title="Facebook">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/aerolineadelsur/" target="_blank" class="social-btn-minimal instagram" title="Instagram">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                    <a href="https://www.tiktok.com/@aerolineadelsur" target="_blank" class="social-btn-minimal tiktok" title="TikTok">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-.88-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-.04-.1z"/>
                        </svg>
                    </a>
                    <a href="https://www.tripadvisor.com/Attraction_Review-g294314-d33262541-Reviews-Aerolinea_Del_Sur-Cusco_Cusco_Region.html" target="_blank" class="social-btn-minimal tripadvisor" title="TripAdvisor">
                        <img src="public/img/tripadvisor.png" alt="TripAdvisor" class="tripadvisor-icon">
                    </a>
                </div>
            </div>
        <!-- WhatsApp Floating Button -->
            <div class="whatsapp-float">
                <a href="https://wa.me/932475995" target="_blank" class="whatsapp-btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.465 3.516" fill="currentColor"/>
                    </svg>
                </a>
            </div>
            <script>
                // Footer accordion for mobile devices
                document.addEventListener('DOMContentLoaded', function() {
                    const footerTitles = document.querySelectorAll('.footer-title');
                    
                    footerTitles.forEach(title => {
                        title.addEventListener('click', function() {
                            // Solo activar en dispositivos móviles
                            if (window.innerWidth <= 480) {
                                const column = this.parentElement;
                                const isActive = column.classList.contains('active');
                                
                                // Cerrar todas las otras columnas
                                const allColumns = document.querySelectorAll('.footer-column');
                                allColumns.forEach(col => {
                                    if (col !== column) {
                                        col.classList.remove('active');
                                    }
                                });
                                
                                // Toggle la columna actual
                                if (isActive) {
                                    column.classList.remove('active');
                                } else {
                                    column.classList.add('active');
                                }
                            }
                        });
                    });

                    // Reiniciar acordeón en cambio de tamaño
                    window.addEventListener('resize', function() {
                        if (window.innerWidth > 480) {
                            const activeColumns = document.querySelectorAll('.footer-column.active');
                            activeColumns.forEach(column => {
                                column.classList.remove('active');
                            });
                        }
                    });
                });
            </script>
    </body>
</html>