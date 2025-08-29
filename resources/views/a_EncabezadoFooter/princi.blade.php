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
            <link rel="stylesheet" href="{{ asset('public/css/header.css') }}">
            <link rel="stylesheet" href="{{ asset('public/css/footer.css') }}">
    </head>
    <body>
        <!-- Encabezado -->
            <header class="header">
                <div class="header-container">
                    <!-- Logo -->
                    <a href="inicio" class="logo"><img src="public/img/logo.svg" alt="Aerolineas del Sur" class="logo-img"></a>
                    <!-- Pill Navigation -->
                    <nav class="nav">
                        
                        <a href="nosotros" class="nav-link pricing-link">Nosotros</a>
                        <a href="servicio" class="nav-link pricing-link">Servicio</a>
                        <!-- Product Dropdown 
                        <div class="nav-item">
                            <div class="nav-link">
                                <span>Servicio</span>
                                <svg class="nav-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="6,9 12,15 18,9"></polyline>
                                </svg>
                            </div>
                            
                            <div class="dropdown">
                                <div class="dropdown-grid">
                                    <div class="dropdown-section">
                                        <h3 class="dropdown-title">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                                <polyline points="14,2 14,8 20,8"></polyline>
                                                <line x1="16" y1="13" x2="8" y2="13"></line>
                                                <line x1="16" y1="17" x2="8" y2="17"></line>
                                                <polyline points="10,9 9,9 8,9"></polyline>
                                            </svg>
                                            Content Creation
                                        </h3>
                                        <div class="dropdown-links">
                                            <a href="#" class="dropdown-link">
                                                <div class="dropdown-icon">
                                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                        <path d="M12 2L2 7v10c0 5.55 3.84 10 9 11 1.16-.21 2.31-.48 3.38-.84"></path>
                                                        <circle cx="12" cy="10" r="3"></circle>
                                                    </svg>
                                                </div>
                                                <div class="dropdown-content">
                                                    <h4>AI Article Writer</h4>
                                                    <p>Create SEO-optimized content in minutes with advanced AI</p>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-link">
                                                <div class="dropdown-icon">
                                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                                    </svg>
                                                </div>
                                                <div class="dropdown-content">
                                                    <h4>Brand Voice</h4>
                                                    <p>Maintain consistent messaging across all content</p>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-link">
                                                <div class="dropdown-icon">
                                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                                    </svg>
                                                </div>
                                                <div class="dropdown-content">
                                                    <h4>Content Editor</h4>
                                                    <p>Advanced editing tools with real-time optimization</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="dropdown-section">
                                        <h3 class="dropdown-title">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <circle cx="11" cy="11" r="8"></circle>
                                                <path d="m21 21-4.35-4.35"></path>
                                            </svg>
                                            SEO & Analytics
                                        </h3>
                                        <div class="dropdown-links">
                                            <a href="#" class="dropdown-link">
                                                <div class="dropdown-icon">
                                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                        <path d="M9 12l2 2 4-4"></path>
                                                        <path d="M21 12c.552 0 1-.448 1-1V9a2 2 0 0 0-1.11-1.791l-7-3.5a2 2 0 0 0-1.78 0l-7 3.5A2 2 0 0 0 3 9v2c0 .552.448 1 1 1h16z"></path>
                                                    </svg>
                                                </div>
                                                <div class="dropdown-content">
                                                    <h4>Keyword Research</h4>
                                                    <p>Discover high-value keywords and track rankings</p>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-link">
                                                <div class="dropdown-icon">
                                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                        <polyline points="22,12 18,12 15,21 9,3 6,12 2,12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="dropdown-content">
                                                    <h4>Content Optimization</h4>
                                                    <p>Real-time SEO scoring and improvement suggestions</p>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-link">
                                                <div class="dropdown-icon">
                                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                        <path d="M3 3v5h5"></path>
                                                        <path d="M3 5a9 9 0 0 1 9-9 9 9 0 0 1 9 9"></path>
                                                        <path d="M21 21v-5h-5"></path>
                                                        <path d="M21 19a9 9 0 0 1-9 9 9 9 0 0 1-9-9"></path>
                                                    </svg>
                                                </div>
                                                <div class="dropdown-content">
                                                    <h4>Performance Analytics</h4>
                                                    <p>Track content performance and ROI metrics</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="featured-card">
                                    <div class="featured-badge">NEW</div>
                                    <div class="featured-content">
                                        <h4>AI Content Clusters</h4>
                                        <p>Generate topic clusters automatically and build content authority with interconnected articles that boost your domain expertise.</p>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                        <a href="flota" class="nav-link pricing-link">Aeronaves</a>
                        <!-- Solutions Dropdown -->
                        <div class="nav-item">
                            <a href="agencia" class="nav-link pricing-link"> Agencia</a>
                            <!--  <div class="nav-link">
                                <span>Agencia</span>
                                <svg class="nav-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="6,9 12,15 18,9"></polyline>
                                </svg>
                            </div>-->
                            <!-- Floating web Button 
                            <div class="dropdown">
                                <div class="dropdown-grid">
                                    <div class="dropdown-section">
                                        <h3 class="dropdown-title">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg>
                                            By Role
                                        </h3>
                                        <div class="dropdown-links">
                                            <a href="#" class="dropdown-link">
                                                <div class="dropdown-icon">
                                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                                    </svg>
                                                </div>
                                                <div class="dropdown-content">
                                                    <h4>Content Marketers</h4>
                                                    <p>Scale content creation with AI-powered tools</p>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-link">
                                                <div class="dropdown-icon">
                                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                        <circle cx="11" cy="11" r="8"></circle>
                                                        <path d="m21 21-4.35-4.35"></path>
                                                    </svg>
                                                </div>
                                                <div class="dropdown-content">
                                                    <h4>SEO Specialists</h4>
                                                    <p>Advanced SEO tools and competitive analysis</p>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-link">
                                                <div class="dropdown-icon">
                                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                        <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1 1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                                                    </svg>
                                                </div>
                                                <div class="dropdown-content">
                                                    <h4>Marketing Managers</h4>
                                                    <p>Streamline workflows and team collaboration</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="dropdown-section">
                                        <h3 class="dropdown-title">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="9" cy="7" r="4"></circle>
                                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                            </svg>
                                            By Company Size
                                        </h3>
                                        <div class="dropdown-links">
                                            <a href="#" class="dropdown-link">
                                                <div class="dropdown-icon">
                                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                        <line x1="3" y1="6" x2="21" y2="6"></line>
                                                        <line x1="3" y1="12" x2="21" y2="12"></line>
                                                        <line x1="3" y1="18" x2="21" y2="18"></line>
                                                    </svg>
                                                </div>
                                                <div class="dropdown-content">
                                                    <h4>Marketing Agencies</h4>
                                                    <p>Scalable solutions for client management</p>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-link">
                                                <div class="dropdown-icon">
                                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                                        <polyline points="9,22 9,12 15,12 15,22"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="dropdown-content">
                                                    <h4>Enterprise</h4>
                                                    <p>Advanced features for large organizations</p>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-link">
                                                <div class="dropdown-icon">
                                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                                        <circle cx="9" cy="7" r="4"></circle>
                                                        <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                                    </svg>
                                                </div>
                                                <div class="dropdown-content">
                                                    <h4>Small Business</h4>
                                                    <p>Affordable tools for growing companies</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="featured-card">
                                    <div class="featured-badge">⭐</div>
                                    <div class="featured-content">
                                        <h4>Success Story: TechCorp</h4>
                                        <p>See how TechCorp increased their organic traffic by 400% in 6 months using Frase's AI-powered content strategy and optimization tools.</p>
                                    </div>
                                </div>
                            </div>-->
                        </div>
                        <a href="blog" class="nav-link pricing-link">Blog</a>
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
                        <a href="/public_html/public_html/AeroSurPort/flota" class="mobile-nav-link">Flota Aerea</a>
                        <a href="/public_html/public_html/AeroSurPort/servicio" class="mobile-nav-link">Servicio</a>
                        <a href="/public_html/public_html/AeroSurPort/agencia" class="mobile-nav-link">Agencia</a>
                        <a href="/public_html/public_html/AeroSurPort/blog" class="mobile-nav-link">Blog</a>
                        <div class="mobile-cta">
                            <a href="/public_html/public_html/AeroSurPort/contacto" class="mobile-btn mobile-btn-primary">Contact</a>
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
                                
                                <!-- Información de contacto -->
                                <div class="footer-contact-info">
                                    <div class="contact-item">
                                        <strong>RUC:</strong> 20612563234
                                    </div>
                                    <div class="contact-item">
                                        <strong>Celular:</strong> +51 944 055 408
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
                                
                                <div class="footer-social">
                                    <a href="#" class="social-link" aria-label="Twitter">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                        </svg>
                                    </a>
                                    <a href="#" class="social-link" aria-label="LinkedIn">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                                            <rect x="2" y="9" width="4" height="12"></rect>
                                            <circle cx="4" cy="4" r="2"></circle>
                                        </svg>
                                    </a>
                                    <a href="#" class="social-link" aria-label="GitHub">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                                        </svg>
                                    </a>
                                    <a href="#" class="social-link" aria-label="YouTube">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path>
                                            <polygon points="9.75,15.02 15.5,11.75 9.75,8.48"></polygon>
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <div class="footer-links">

                                <div class="footer-column">
                                    <h3 class="footer-title">Servicios</h3>
                                    <ul class="footer-list">
                                        <li><a href="nosotros" class="footer-link">Nosotros</a></li>
                                        <li><a href="servicio" class="footer-link">Servicio</a></li>
                                        <li><a href="flota" class="footer-link">Aeronaves</a></li>
                                        <li><a href="agencia" class="footer-link">Agencia</a></li>
                                        <li><a href="blog" class="footer-link">Blog</a></li>
                                    </ul>
                                </div>

                                <div class="footer-column">
                                    <h3 class="footer-title">Legal</h3>
                                    <ul class="footer-list">
                                        <li><a href="esna" class="footer-link">Code Esnna</a></li>
                                        <li><a href="pagos" class="footer-link">Métodos de Pago</a></li>
                                        <li><a href="privaty" class="footer-link">Políticas de Privacidad</a></li>
                                        <li><a href="temrinos" class="footer-link">Términos y Condiciones</a></li>
                                        <li><a href="contacto" class="footer-link">Contáctanos</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Newsletter Subscription -->
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
                        </div>

                        <!-- Footer Bottom -->
                        <div class="footer-bottom">
                            <div class="footer-legal">
                                <p class="copyright">&copy; 2025 Frase. All rights reserved.</p>
                                <div class="legal-links">
                                    <a href="#" class="legal-link">Privacy Policy</a>
                                    <a href="#" class="legal-link">Terms of Service</a>
                                    <a href="#" class="legal-link">Cookie Settings</a>
                                    <a href="#" class="legal-link">GDPR</a>
                                </div>
                            </div>
                            
                            <div class="footer-badges">
                                <div class="badge">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                    </svg>
                                    <span>SOC 2 Compliant</span>
                                </div>
                                <div class="badge">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                        <circle cx="12" cy="16" r="1"></circle>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                    </svg>
                                    <span>256-bit SSL</span>
                                </div>
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
            </script>
        <!-- Botones Verticales de Redes Sociales -->
            <!-- Botones Verticales de Redes Sociales -->
            <div class="social-sidebar">
                <div class="social-line top-line"></div>
                <div class="social-buttons-vertical">
                    <a href="https://facebook.com" target="_blank" class="social-btn-minimal facebook" title="Facebook">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                    <a href="https://instagram.com" target="_blank" class="social-btn-minimal instagram" title="Instagram">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                    <a href="https://tiktok.com" target="_blank" class="social-btn-minimal tiktok" title="TikTok">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-.88-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-.04-.1z"/>
                        </svg>
                    </a>
                    <a href="https://tripadvisor.com" target="_blank" class="social-btn-minimal tripadvisor" title="TripAdvisor">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1.5 3.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5S9 7.83 9 7s.67-1.5 1.5-1.5zm3 0c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5S12 7.83 12 7s.67-1.5 1.5-1.5zM12 18.5c-2.5 0-4.71-1.28-6-3.22.65-.14 1.29-.28 2-.28 1.5 0 2.5 1 4 1s2.5-1 4-1c.71 0 1.35.14 2 .28-1.29 1.94-3.5 3.22-6 3.22z"/>
                            <circle cx="8.5" cy="12" r="1.5"/>
                            <circle cx="15.5" cy="12" r="1.5"/>
                        </svg>
                    </a>
                </div>
                <div class="social-line bottom-line"></div>
            </div>
        <!-- WhatsApp Floating Button -->
            <div class="whatsapp-float">
                <a href="https://wa.me/1234567890" target="_blank" class="whatsapp-btn">
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