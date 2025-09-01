@extends('a_EncabezadoFooter.princi')
@section('content')
    <link rel="stylesheet" href="{{ asset('public/css/paginas/blog/blog.css') }}">

    <!-- Hero Section -->
    <section class="blog-hero">
        <div class="hero-background"></div>
        <div class="hero-content">
            <div class="hero-badge">
                <i class="fas fa-newspaper"></i>
                <span>Blog Oficial</span>
            </div>
            <h1 class="hero-title">
                <span class="title-line-1">Explora el</span>
                <span class="title-line-2">mundo con <span class="highlight">nosotros</span></span>
            </h1>
            <p class="hero-description">
                Descubre destinos increíbles, consejos de viaje y las últimas noticias 
                de la aviación en nuestro blog oficial.
            </p>
        </div>
    </section>

    <!-- Filtros de Categorías -->
    <section class="blog-filters">
        <div class="container">
            <div class="filter-buttons">
                <button class="filter-btn active" data-category="all">
                    <i class="fas fa-globe"></i>
                    Todos
                </button>
                <button class="filter-btn" data-category="destinos">
                    <i class="fas fa-map-marker-alt"></i>
                    Destinos
                </button>
                <button class="filter-btn" data-category="consejos">
                    <i class="fas fa-lightbulb"></i>
                    Consejos
                </button>
                <button class="filter-btn" data-category="noticias">
                    <i class="fas fa-newspaper"></i>
                    Noticias
                </button>
                <button class="filter-btn" data-category="experiencias">
                    <i class="fas fa-star"></i>
                    Experiencias
                </button>
            </div>
        </div>
    </section>

    <!-- Grid de Artículos -->
    <section class="blog-grid">
        <div class="container">
            <div class="articles-grid">
                <!-- Artículos Regulares -->
                <article class="article-card" data-category="consejos">
                    <div class="article-image">
                        <img src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=600&h=400&fit=crop" alt="Consejos de viaje">
                        <div class="article-category">Consejos</div>
                    </div>
                    <div class="article-content">
                        <div class="article-meta">
                            <span class="article-date">
                                <i class="fas fa-calendar"></i>
                                12 Enero 2024
                            </span>
                            <span class="article-read-time">
                                <i class="fas fa-clock"></i>
                                5 min
                            </span>
                        </div>
                        <h3 class="article-title">10 consejos para viajar cómodo en vuelos largos</h3>
                        <p class="article-excerpt">
                            Maximiza tu comodidad en vuelos de larga distancia con estos consejos probados por expertos.
                        </p>
                        <a href="#" class="article-link">
                            Leer más
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </article>

                <article class="article-card" data-category="noticias">
                    <div class="article-image">
                        <img src="https://images.unsplash.com/photo-1556388158-158ea5ccacbd?w=600&h=400&fit=crop" alt="Nueva flota">
                        <div class="article-category">Noticias</div>
                    </div>
                    <div class="article-content">
                        <div class="article-meta">
                            <span class="article-date">
                                <i class="fas fa-calendar"></i>
                                10 Enero 2024
                            </span>
                            <span class="article-read-time">
                                <i class="fas fa-clock"></i>
                                3 min
                            </span>
                        </div>
                        <h3 class="article-title">Aerolíneas del Sur incorpora nuevos Boeing 787 Dreamliner</h3>
                        <p class="article-excerpt">
                            Nuestra flota se moderniza con aeronaves de última generación para brindarte mayor comodidad.
                        </p>
                        <a href="#" class="article-link">
                            Leer más
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </article>

                <article class="article-card" data-category="experiencias">
                    <div class="article-image">
                        <img src="https://images.unsplash.com/photo-1488646953014-85cb44e25828?w=600&h=400&fit=crop" alt="Experiencia de viaje">
                        <div class="article-category">Experiencias</div>
                    </div>
                    <div class="article-content">
                        <div class="article-meta">
                            <span class="article-date">
                                <i class="fas fa-calendar"></i>
                                8 Enero 2024
                            </span>
                            <span class="article-read-time">
                                <i class="fas fa-clock"></i>
                                6 min
                            </span>
                        </div>
                        <h3 class="article-title">Mi experiencia en Clase Ejecutiva: Lujo en las alturas</h3>
                        <p class="article-excerpt">
                            Descubre cómo es volar en nuestra Clase Ejecutiva a través de la experiencia de nuestros pasajeros.
                        </p>
                        <a href="#" class="article-link">
                            Leer más
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </article>

                <article class="article-card" data-category="destinos">
                    <div class="article-image">
                        <img src="https://images.unsplash.com/photo-1483729558449-99ef09a8c325?w=600&h=400&fit=crop" alt="Machu Picchu">
                        <div class="article-category">Destinos</div>
                    </div>
                    <div class="article-content">
                        <div class="article-meta">
                            <span class="article-date">
                                <i class="fas fa-calendar"></i>
                                5 Enero 2024
                            </span>
                            <span class="article-read-time">
                                <i class="fas fa-clock"></i>
                                7 min
                            </span>
                        </div>
                        <h3 class="article-title">Machu Picchu: Guía completa para tu visita</h3>
                        <p class="article-excerpt">
                            Todo lo que necesitas saber para planificar tu viaje a una de las maravillas del mundo.
                        </p>
                        <a href="#" class="article-link">
                            Leer más
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </article>

                <article class="article-card" data-category="consejos">
                    <div class="article-image">
                        <img src="https://images.unsplash.com/photo-1488646953014-85cb44e25828?w=600&h=400&fit=crop" alt="Equipaje">
                        <div class="article-category">Consejos</div>
                    </div>
                    <div class="article-content">
                        <div class="article-meta">
                            <span class="article-date">
                                <i class="fas fa-calendar"></i>
                                3 Enero 2024
                            </span>
                            <span class="article-read-time">
                                <i class="fas fa-clock"></i>
                                4 min
                            </span>
                        </div>
                        <h3 class="article-title">Cómo hacer la maleta perfecta: Guía paso a paso</h3>
                        <p class="article-excerpt">
                            Aprende a optimizar tu equipaje y viajar con todo lo necesario sin excesos.
                        </p>
                        <a href="#" class="article-link">
                            Leer más
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </article>
            </div>

            <!-- Botón Cargar Más -->
            <div class="load-more-section">
                <button class="btn-primary load-more-btn">
                    <span>Cargar más artículos</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter-section">
        <div class="container">
            <div class="newsletter-content">
                <div class="newsletter-text">
                    <h2>Mantente informado</h2>
                    <p>Suscríbete a nuestro newsletter y recibe las últimas noticias, ofertas especiales y consejos de viaje directamente en tu correo.</p>
                </div>
                <div class="newsletter-form">
                    <form class="newsletter-form-container">
                        <input type="email" placeholder="Tu correo electrónico" required>
                        <button type="submit" class="btn-primary">
                            <span>Suscribirse</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Filtros de categorías
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.filter-btn');
            const articles = document.querySelectorAll('.article-card');

            filterButtons.forEach(button => {
                button.addEventListener('click', () => {
                    // Remover clase active de todos los botones
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    // Agregar clase active al botón clickeado
                    button.classList.add('active');

                    const category = button.getAttribute('data-category');

                    articles.forEach(article => {
                        if (category === 'all' || article.getAttribute('data-category') === category) {
                            article.style.display = 'block';
                            article.style.animation = 'fadeInUp 0.6s ease forwards';
                        } else {
                            article.style.display = 'none';
                        }
                    });
                });
            });

            // Animación de scroll
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.animation = 'fadeInUp 0.6s ease forwards';
                    }
                });
            }, observerOptions);

            articles.forEach(article => {
                observer.observe(article);
            });
        });
    </script>
@endsection