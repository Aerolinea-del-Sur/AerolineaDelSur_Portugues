@extends('a_EncabezadoFooter.princi')
@section('content')
        <link rel="stylesheet" href="{{ asset('public/css/footer/esna.css') }}">
        <!-- Background Elements -->
    <div class="bg-elements">
        <div class="bg-gradient"></div>
        <div class="bg-pattern"></div>
        <div class="floating-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
        </div>
    </div>

    <!-- Main Container -->
    <main class="document-container">
        <!-- Header Section -->
        <header class="document-header">
            <div class="header-content">
                <div class="brand-section">
                    <div class="logo-container">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="brand-text">
                        <h1 style = "color: #C9A227;">Aerolíneas del Sur</h1>
                        <p class="brand-subtitle">Compromiso y Responsabilidad</p>
                    </div>
                </div>
                
                <div class="header-image">
                    <a href="https://www.gob.pe/15106" target="_blank" rel="noopener noreferrer">
                        <img src="Afiche.jpg" alt="Código de Conducta" class="afiche-image" id="mainImage">
                    </a>
                    <div class="image-overlay"></div>
                </div>

            </header>

            <!-- Modal Simple -->
            <div id="simpleModal" class="simple-modal">
                <img src="Afiche.jpg" alt="Código de Conducta" class="modal-img">
            </div>
            <!-- Image Modal -->
            <div id="imageModal" class="image-modal" onclick="closeImageModal()">
                <div class="modal-content">
                    <span class="modal-close" onclick="closeImageModal()">&times;</span>
                    <img src="Afiche.jpg" alt="Código de Conducta" class="modal-image">
                    <div class="modal-caption">
                        <h3>Código de Conducta</h3>
                        <p>Aerolíneas del Sur - Protección contra la Explotación Sexual Infantil</p>
                    </div>
                </div>
            </div>

        <!-- Document Content -->
        <section class="content-wrapper">
            <div class="document-title-section">
                <div class="title-decoration"></div>
                <h1 class="document-title">
                    <span style = "color: #C9A227;">Código de Conducta</span>
                    <span class="title-subtitle">contra la Explotación Sexual de Niñas, Niños y Adolescentes</span>
                </h1>
                <div class="title-decoration"></div>
            </div>

            <article class="document-content">
                <div class="intro-section">
                    <div class="intro-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <p class="intro-text">
                        Como empresa comprometida con el turismo responsable y la protección de los derechos fundamentales, 
                        <strong>Aerolíneas del Sur</strong>  este código de conductatrong para prevenir y combatir cualquier forma 
                        de explotación sexual comercial de menores de edad.
                    </p>
                </div>

                <div class="commitments-section">
                    <h2 class="section-title">
                        <i class="fas fa-handshake"></i>
                        Nuestros Compromisos
                    </h2>
                    
                    <div class="commitment-grid">
                        <div class="commitment-card">
                            <div class="card-number">01</div>
                            <div class="card-icon">
                                <i class="fas fa-users-cog"></i>
                            </div>
                            <h3 class="card-title">Capacitación Continua</h3>
                            <p class="card-description">
                                Capacitar a nuestro personal en la identificación y prevención de situaciones 
                                de riesgo relacionadas con la explotación sexual comercial de menores.
                            </p>
                        </div>

                        <div class="commitment-card">
                            <div class="card-number">02</div>
                            <div class="card-icon">
                                <i class="fas fa-eye"></i>
                            </div>
                            <h3 class="card-title">Vigilancia Activa</h3>
                            <p class="card-description">
                                Mantener una vigilancia constante en nuestras instalaciones y servicios 
                                para detectar comportamientos sospechosos o situaciones irregulares.
                            </p>
                        </div>

                        <div class="commitment-card">
                            <div class="card-number">03</div>
                            <div class="card-icon">
                                <i class="fas fa-exclamation-triangle"></i>
                            </div>
                            <h3 class="card-title">Denuncia Inmediata</h3>
                            <p class="card-description">
                                Reportar de manera inmediata a las autoridades competentes cualquier 
                                situación sospechosa o caso confirmado de explotación sexual de menores.
                            </p>
                        </div>

                        <div class="commitment-card">
                            <div class="card-number">04</div>
                            <div class="card-icon">
                                <i class="fas fa-ban"></i>
                            </div>
                            <h3 class="card-title">Tolerancia Cero</h3>
                            <p class="card-description">
                                Aplicar una política de tolerancia cero hacia cualquier forma de 
                                explotación sexual comercial de niñas, niños y adolescentes.
                            </p>
                        </div>

                        <div class="commitment-card">
                            <div class="card-number">05</div>
                            <div class="card-icon">
                                <i class="fas fa-handshake"></i>
                            </div>
                            <h3 class="card-title">Colaboración Institucional</h3>
                            <p class="card-description">
                                Colaborar activamente con organizaciones gubernamentales y no gubernamentales 
                                en la lucha contra la explotación sexual infantil.
                            </p>
                        </div>

                        <div class="commitment-card">
                            <div class="card-number">06</div>
                            <div class="card-icon">
                                <i class="fas fa-bullhorn"></i>
                            </div>
                            <h3 class="card-title">Promoción y Difusión</h3>
                            <p class="card-description">
                                Promover este código de conducta entre nuestros clientes, proveedores 
                                y socios comerciales para crear una red de protección integral.
                            </p>
                        </div>
                    </div>
                </div>
            </article>
        </section>

        <!-- Footer -->
        <footer>
            <div class="footer-content">
                <div class="legal-notice">
                    <p>
                        <i class="fas fa-balance-scale"></i>
                        Este código de conducta está en conformidad con la Ley N° 28251 y demás normativas 
                        vigentes en Perú para la prevención de la explotación sexual comercial de menores de edad.
                    </p>
                </div>
                
            </div>
        </footer>
    </main>

    <!-- Scroll Progress Indicator -->
    <div class="scroll-progress">
        <div class="progress-bar"></div>
    </div>

    <!-- Modern JavaScript for Interactions -->
    <script>
        // Image Modal Functions - Versión Mejorada
        function openImageModal() {
            console.log('Abriendo modal...'); // Para debug
            const modal = document.getElementById('imageModal');
            if (modal) {
                modal.style.display = 'flex';
                document.body.style.overflow = 'hidden';
                
                // Add animation class
                setTimeout(() => {
                    modal.classList.add('modal-open');
                }, 10);
            } else {
                console.error('Modal no encontrado');
            }
        }
    
        function closeImageModal() {
            console.log('Cerrando modal...'); // Para debug
            const modal = document.getElementById('imageModal');
            if (modal) {
                modal.classList.remove('modal-open');
                document.body.style.overflow = 'auto';
                
                // Hide modal after animation
                setTimeout(() => {
                    modal.style.display = 'none';
                }, 300);
            }
        }
    
        // Asegurar que el DOM esté cargado
        document.addEventListener('DOMContentLoaded', function() {
            // Verificar que los elementos existen
            const modal = document.getElementById('imageModal');
            const image = document.querySelector('.clickable-image');
            
            console.log('Modal encontrado:', modal ? 'Sí' : 'No');
            console.log('Imagen encontrada:', image ? 'Sí' : 'No');
            
            // Agregar event listener alternativo si onclick no funciona
            if (image) {
                image.addEventListener('click', function(e) {
                    e.preventDefault();
                    openImageModal();
                });
            }
        });
    
        // Close modal with Escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                closeImageModal();
            }
        });

        // Modal súper simple
        document.getElementById('mainImage').onclick = function() {
            document.getElementById('simpleModal').style.display = 'block';
        }
        
        document.getElementById('simpleModal').onclick = function() {
            this.style.display = 'none';
        }
        
        // Cerrar con Escape
        document.onkeydown = function(e) {
            if (e.key === 'Escape') {
                document.getElementById('simpleModal').style.display = 'none';
            }
        }

        // Scroll Progress
        window.addEventListener('scroll', () => {
            const scrolled = (window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100;
            document.querySelector('.progress-bar').style.width = scrolled + '%';
        });

        // Intersection Observer for Animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                }
            });
        }, observerOptions);

        // Observe elements
        document.querySelectorAll('.commitment-card, .intro-section, .contact-card').forEach(el => {
            observer.observe(el);
        });

        // Floating shapes animation
        const shapes = document.querySelectorAll('.shape');
        shapes.forEach((shape, index) => {
            shape.style.animationDelay = `${index * 2}s`;
        });
    </script>
    
@endsection
