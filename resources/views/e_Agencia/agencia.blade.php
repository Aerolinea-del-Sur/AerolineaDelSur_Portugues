@extends('a_EncabezadoFooter.princi')
@section('content')

    <link rel="stylesheet" href="{{ asset('public/css/paginas/agencia/Agencia.css') }}">
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <div class="hero-badge">
                <i class="fas fa-plane"></i>
                <span>TOURS AÉREOS</span>
            </div>
            <h1 class="hero-title">
                <span class="title-line">Descubre el Mundo</span>
                <span class="title-line highlight">Desde las Alturas</span>
            </h1>
            <p class="hero-description">
                Explora destinos únicos con nuestros tours aéreos premium y vive experiencias inolvidables
            </p>
            <div class="hero-actions">
                <a href="#tours" class="btn btn-primary">
                    <span>Ver Tours</span>
                    <i class="fas fa-arrow-down"></i>
                </a>
                <a href="#contacto" class="btn btn-outline">
                    <i class="fas fa-phone"></i>
                    <span>Reservar</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Tours Section -->
    <section id="tours" class="tours">
        <div class="container">
            <div class="section-header">
                <div class="section-badge">TOURS EXCLUSIVOS</div>
                <h2 class="section-title">Nuestros Tours Aéreos</h2>
                <p class="section-subtitle">
                    Descubre los lugares más espectaculares del Perú desde una perspectiva única
                </p>
            </div>
            
            <!-- Filter Buttons -->
            <div class="filter-buttons">
                <button class="filter-btn active" data-filter="all">Todos</button>
                <!--<button class="filter-btn" data-filter="popular">Populares</button>
                <button class="filter-btn" data-filter="new">Nuevos</button>-->
                <button class="filter-btn" data-filter="sobrevuelo">Sobrevuelo</button>
                <button class="filter-btn" data-filter="tradicional">Tradicional</button>
                
            </div>

            <div class="tours-grid">
                <!-- Tour 01: Andes Mágicos -->
                <div class="tour-card" data-category="sobrevuelo">
                    <div class="tour-image">
                        <img src="https://player.vimeo.com/video/1117325379?badge=0&autopause=0&player_id=0&app_id=58479&autoplay=1&loop=1&muted=1&background=1&controls=0" alt="Líneas de Nazca">
                        <div class="tour-overlay">
                            <div class="tour-badge sobrevuelo">Sobrevuelo</div>
                            <!-- <div class="tour-price">Desde $199</div>-->
                        </div>
                    </div>
                    <div class="tour-content">
                        <h3 class="tour-title">Andes Mágicos</h3>
                        <p class="tour-description">
                            Descubre la montaña de 7 colores, nevado ausangate, valle rojo, complejos arquielogico del cusco, Pisac junto al Valle Sagrado finalizando con las salineras de maras
                        </p>
                        <div class="tour-details">
                            <div class="detail">
                                <i class="fas fa-clock"></i>
                                <span>1.5 horas</span>
                            </div>
                            <div class="detail">
                                <i class="fas fa-users"></i>
                                <span>Hasta 4 personas</span>
                            </div>
                            <div class="detail">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Nazca</span>
                            </div>
                        </div>
                        <div class="tour-features">
                        </div>
                        <a href="https://tb4.d81.mytemp.website/micosina.online/AndesMagicos" class="tour-btn">
                            <span>Conoce más</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <!-- Tour 02: Tesoros del Cusco -->
                <div class="tour-card" data-category="tradicional">
                    <div class="tour-image">
                        <img src="https://images.unsplash.com/photo-1587595431973-160d0d94add1?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" alt="Amazonía">
                        <div class="tour-overlay">
                            <div class="tour-badge tradicional">Tradicional</div>
                            <!-- <div class="tour-price">Desde $399</div>-->
                        </div>
                    </div>
                    <div class="tour-content">
                        <h3 class="tour-title">Tesoros del Cusco</h3>
                        <p class="tour-description">
                            Descubre Valle Sagrado y Machu Picchu en un tour exclusivo.
                        </p>
                        <div class="tour-details">
                            <div class="detail">
                                <i class="fas fa-clock"></i>
                                <span>3 horas</span>
                            </div>
                            <div class="detail">
                                <i class="fas fa-users"></i>
                                <span>Hasta 8 personas</span>
                            </div>
                            <div class="detail">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Iquitos</span>
                            </div>
                        </div>
                        <div class="tour-features">
                        </div>
                        <a href="https://tb4.d81.mytemp.website/micosina.online/TesorosCusco" class="tour-btn">
                            <span>Conoce más</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <!-- Tour 03: Valle Maras -->
                <div class="tour-card" data-category="sobrevuelo">
                    <div class="tour-image">
                        <img src="https://images.pexels.com/photos/6921111/pexels-photo-6921111.jpeg" alt="Machu Picchu desde el aire" alt="Cordillera Blanca">
                        <div class="tour-overlay">
                            <div class="tour-badge sobrevuelo">Sobrevuelo</div>
                            <!-- <div class="tour-price">Desde $249</div>-->
                        </div>
                    </div>
                    <div class="tour-content">
                        <h3 class="tour-title">Valle Maras</h3>
                        <p class="tour-description">
                            Descubre Sacsayhuamán, Tambomachay, Pisac, Valle Sagrado, Maras y Laguna de Huaypo.
                        </p>
                        <div class="tour-details">
                            <div class="detail">
                                <i class="fas fa-clock"></i>
                                <span>2.5 horas</span>
                            </div>
                            <div class="detail">
                                <i class="fas fa-users"></i>
                                <span>Hasta 6 personas</span>
                            </div>
                            <div class="detail">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Nazca</span>
                            </div>
                        </div>
                        <div class="tour-features">
                        </div>
                        <a href="https://tb4.d81.mytemp.website/micosina.online/ValleMaras" class="tour-btn">
                            <span>Conoce más</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <!-- Tour 04:  Vinicunca-->
                <div class="tour-card" data-category="tradicional">
                    <div class="tour-image">
                        <img src="https://images.pexels.com/photos/6921111/pexels-photo-6921111.jpeg" alt="Machu Picchu desde el aire" alt="Cordillera Blanca">
                        <div class="tour-overlay">
                            <div class="tour-badge tradicional">Tradicional</div>
                            <!-- <div class="tour-price">Desde $249</div>-->
                        </div>
                    </div>
                    <div class="tour-content">
                        <h3 class="tour-title">Montaña de Siete Colores</h3>
                        <p class="tour-description">
                            Descubre la montaña arcoiris en una excursión por Cusco.
                        </p>
                        <div class="tour-details">
                            <div class="detail">
                                <i class="fas fa-clock"></i>
                                <span>2.5 horas</span>
                            </div>
                            <div class="detail">
                                <i class="fas fa-users"></i>
                                <span>Hasta 6 personas</span>
                            </div>
                            <div class="detail">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Nazca</span>
                            </div>
                        </div>
                        <div class="tour-features">
                        </div>
                        <a href="https://tb4.d81.mytemp.website/micosina.online/Vinicunca" class="tour-btn">
                            <span>Conoce más</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <!-- Tour 05: Vinicunca Elite Experience -->
                <div class="tour-card" data-category="sobrevuelo">
                    <div class="tour-image">
                        <img src="https://images.pexels.com/photos/6921111/pexels-photo-6921111.jpeg" alt="Machu Picchu desde el aire" alt="Cordillera Blanca">
                        <div class="tour-overlay">
                            <div class="tour-badge sobrevuelo">Sobrevuelo</div>
                            <!-- <div class="tour-price">Desde $249</div>-->
                        </div>
                    </div>
                    <div class="tour-content">
                        <h3 class="tour-title">Vinicunca Elite Experience</h3>
                        <p class="tour-description">
                            Visitamos a Vinicunca, Palcoyo, Ausangate, Valle Rojo y Cuatro Lagunas.
                        </p>
                        <div class="tour-details">
                            <div class="detail">
                                <i class="fas fa-clock"></i>
                                <span>2.5 horas</span>
                            </div>
                            <div class="detail">
                                <i class="fas fa-users"></i>
                                <span>Hasta 6 personas</span>
                            </div>
                            <div class="detail">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Nazca</span>
                            </div>
                        </div>
                        <div class="tour-features">
                        </div>
                        <a href="https://tb4.d81.mytemp.website/micosina.online/VinEliteExp" class="tour-btn">
                            <span>Conoce más</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <!-- Tour 06: Machu Picchu -->
                <div class="tour-card" data-category="tradicional">
                    <div class="tour-image">
                        <img src="https://images.unsplash.com/photo-1526392060635-9d6019884377?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Machu Picchu">
                        <div class="tour-overlay">
                            <div class="tour-badge tradicional">Tradicional</div>
                            <!-- <div class="tour-price">Desde $299</div>-->
                        </div>
                    </div>
                    <div class="tour-content">
                        <h3 class="tour-title">Machu Picchu</h3>
                        <p class="tour-description">
                            Visita la ciudadela inca más famosa del mundo y contempla su majestuosidad desde las alturas.
                        </p>
                        <div class="tour-details">
                            <div class="detail">
                                <i class="fas fa-clock"></i>
                                <span>2 horas</span>
                            </div>
                            <div class="detail">
                                <i class="fas fa-users"></i>
                                <span>Hasta 6 personas</span>
                            </div>
                            <div class="detail">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Cusco</span>
                            </div>
                        </div>
                        <div class="tour-features">
                        </div>
                        <a href="https://tb4.d81.mytemp.website/micosina.online/VPMachuPichu" class="tour-btn">
                            <span>Conoce más</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contacto" class="contact">
        <div class="container">
            <div class="section-header">
                <div class="section-badge">CONTACTO</div>
                <h2 class="section-title">¿Listo para tu Próxima Aventura?</h2>
                <p class="section-subtitle">
                    Contáctanos para reservar tu tour aéreo y vivir una experiencia inolvidable
                </p>
            </div>
            <div class="contact-content">
                <div class="contact-text">
                    <div class="section-badge">RESERVA AHORA</div>
                    <h2 class="section-title">Listo para tu Próxima Aventura?</h2>
                    <p class="section-subtitle">
                        Contáctanos para reservar tu tour aéreo y vivir una experiencia inolvidable desde las alturas
                    </p>
                </div>
                <div class="contact-methods">
                    <div class="contact-method">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-info">
                            <h4>Teléfono</h4>
                            <p>+51 984 123 456</p>
                        </div>
                    </div>
                    <div class="contact-method">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-info">
                            <h4>Email</h4>
                            <p>tours@aviacionlujo.com</p>
                        </div>
                    </div>
                    <div class="contact-method">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-info">
                            <h4>Ubicación</h4>
                            <p>Lima, Perú</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Filter functionality
        const filterButtons = document.querySelectorAll('.filter-btn');
        const tourCards = document.querySelectorAll('.tour-card');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                // Add active class to clicked button
                button.classList.add('active');

                const filter = button.getAttribute('data-filter');

                tourCards.forEach(card => {
                    if (filter === 'all' || card.getAttribute('data-category') === filter) {
                        card.style.display = 'block';
                        card.style.animation = 'fadeIn 0.5s ease-in-out';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe tour cards
        document.querySelectorAll('.tour-card').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(card);
        });
    </script>
<script src="https://player.vimeo.com/api/player.js"></script>
<script>
    // Opcional: Control adicional del video
    document.addEventListener('DOMContentLoaded', function() {
        const iframe = document.querySelector('.bg-video iframe');
        if (iframe) {
            const player = new Vimeo.Player(iframe);
            player.setVolume(0); // Asegurar que esté silenciado
        }
    });
</script>
@endsection