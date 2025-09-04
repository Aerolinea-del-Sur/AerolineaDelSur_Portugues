@extends('a_EncabezadoFooter.princi')
@section('content')
<link rel="stylesheet" href="{{ asset('public/css/paginas/agencia/1_TourGeneral.css') }}">
<!-- Sección Hero -->
<section class="tour-hero">
    <div class="hero-background">
        <img src="https://images.pexels.com/photos/6921111/pexels-photo-6921111.jpeg" alt="Machu Picchu desde el aire">
        <div class="hero-overlay"></div>
    </div>
    <div class="hero-content">
        <div class="tour-badges">
            <span class="badge popular">POPULAR</span>
            <span class="badge exclusive">EXCLUSIVO</span>
        </div>
        <h1 class="tour-title">Valle Sagrado y Maras</h1>
        <p class="tour-subtitle">Descubre Sacsayhuamán, Tambomachay, Pisac, Valle Sagrado, Maras y Laguna de Huaypo.</p>


        <div class="tour-meta">
            <div class="meta-item">
                <i class="fas fa-clock"></i>
                <span>1 día</span>
            </div>
            <div class="meta-item">
                <i class="fas fa-users"></i>
                <span>Hasta 6 personas</span>
            </div>
            <div class="meta-item">
                <i class="fas fa-star"></i>
                <span>4.9/5</span>
            </div>
        </div>
    </div>
</section>

<!-- Detalles Generales -->
<section class="tour-details">
    <div class="container">
        <div class="details-grid">
            <div class="details-content">
                <h2 class="section-title">Detalles del Tour</h2>
                <p class="tour-description">
                    <strong>Aerolínea del Sur se complace en presentar una experiencia aérea inigualable: un sobrevuelo escénico en avioneta, ideal para quienes desean descubrir desde el cielo algunos de los sitios arqueológicos y paisajes más emblemáticos del corazón del Valle Sagrado de los Incas, sin necesidad de desplazamientos largos por tierra.
                </p>
                <div class="detail-items">
                    <div class="detail-item">
                        <i class="fas fa-users"></i>
                        <div>
                            <h4>Grupo Máximo</h4>
                            <p>6 personas</p>

                        </div>
                    </div>
                    <div class="detail-item">
                        <i class="fas fa-user-plus"></i>
                        <div>
                            <h4>Edad Mínima</h4>
                            <p>Ninguna</p>
                        </div>
                    </div>
                    <div class="detail-item">
                        <i class="fas fa-clock"></i>
                        <div>
                            <h4>Duración</h4>
                            <p>1 día</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gallery-section">
                <h3>Galería de Imágenes</h3>
                <div class="image-carousel">
                    <div class="carousel-container" id="carouselContainer">
                        <div class="carousel-slide active">
                            <img src="https://images.pexels.com/photos/7343379/pexels-photo-7343379.jpeg" alt="Vista aérea de Machu Picchu">
                        </div>
                        <div class="carousel-slide">
                            <img src="https://images.pexels.com/photos/30478655/pexels-photo-30478655.jpeg" alt="Valle Sagrado desde el aire">
                        </div>
                        <div class="carousel-slide">
                            <img src="https://images.unsplash.com/photo-1645740714708-f5632b42d24c?q=80&w=2070" alt="Montañas andinas">
                        </div>
                        <div class="carousel-slide">
                            <img src="https://images.unsplash.com/photo-1645740717496-c6281d983bd3?q=80&w=2070" alt="Río Urubamba">
                        </div>
                    </div>
                    <button class="carousel-btn prev" onclick="moveSlide(-1)">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="carousel-btn next" onclick="moveSlide(1)">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                    <div class="carousel-indicators">
                        <span class="indicator active" onclick="currentSlide(1)"></span>
                        <span class="indicator" onclick="currentSlide(2)"></span>
                        <span class="indicator" onclick="currentSlide(3)"></span>
                        <span class="indicator" onclick="currentSlide(4)"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Resumen del Viaje -->
<section class="trip-summary">
    <div class="container">
        <h2 class="section-title">Resumen del Viaje</h2>
        <div class="summary-grid">
            <div class="highlights">
                <h3>Aspectos Destacados</h3>
                <div class="highlight-items">
                    <div class="highlight-item">
                        <i class="fas fa-mountain"></i>
                        <h4>Vinicunca</h4>
                        <p>Conoceras la Montaña de 7 Colores, un lugar colorido con paisajes impresionantes.</p>

                    </div>
                    <div class="highlight-item">
                        <i class="fas fa-camera-retro"></i>
                        <h4>Fotografía Paisajes</h4>
                        <p>Captura tomas espectaculares de los pueblos, paisajes y costrucciones milenarias.</p>
                    </div>
                    <div class="highlight-item">
                        <i class="fas fa-history"></i>
                        <h4>Historia y vistas</h4>
                        <p> El guía te narrará la historia del lugar mientras recorres el sendero hasta la montaña.</p>
                    </div>
                </div>
            </div>
            <div class="statistics">
                <h3>Estadísticas del Tour</h3>
                <div class="stats-grid">
                    <div class="stat-item">
                        <div class="stat-number">1</div>
                        <div class="stat-label">Día</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">1</div>
                        <div class="stat-label">Lugar Turistico</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">10</div>
                        <div class="stat-label">Km recorridos</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">100%</div>
                        <div class="stat-label">Conformidad</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Itinerario Detallado -->
<section class="detailed-itinerary">
    <div class="container">
        <h2 class="section-title">Itinerario Detallado</h2>
        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <h4>1. El complejo arqueológico de Sacsayhuamán</h4>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <h4>2. Las fuentes ceremoniales de Tambomachay</h4>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <h4>3. Las andenerías circulares y terrazas de Pisac</h4>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <h4>4. Los fértiles campos del Valle Sagrado de los Incas</h4>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <h4>5. Las misteriosas Salineras de Maras</h4>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <h4>6. la hermosa laguna de Huaypo, rodeada de campos agrícolas y montañas</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Inclusiones -->
<section class="inclusions">
    <div class="container">
        <h2 class="section-title">Inclusiones del Tour</h2>
        <div class="inclusions-grid">
            <div class="included">
                <h3><i class="fas fa-check-circle"></i> Incluido</h3>
                <ul>
                    <li><i class="fas fa-check"></i> Vuelo privado en avioneta (ida y vuelta desde Cusco).</li>
                    <li><i class="fas fa-check"></i> Traslados privados hotel – aeropuerto – hotel.</li>
                    <li><i class="fas fa-check"></i> Regalo andino de cortesía (bufanda o chullo de alpaca).</li>
                    <li><i class="fas fa-check"></i> Snack bag personalizada con productos naturales.</li>
                    <li><i class="fas fa-check"></i> Guía profesional especializado. </li>
                </ul>
            </div>
            <div class="not-included">
                <h3><i class="fas fa-times-circle"></i> No Incluido</h3>
                <ul>
                    <li><i class="fas fa-times"></i> Pasajes aéreos a Cusco</li>
                    <li><i class="fas fa-times"></i> Seguro de viaje (es recomendado)</li>
                    <li><i class="fas fa-times"></i> Propinas y consumos personales no mencionados</li>
                </ul>
            </div>
        </div>
        <div class="important-notes">
            <h4><i class="fas fa-exclamation-triangle"></i> Notas Importantes</h4>
            <ul>
                <li>Se requiere documento de identidad válido</li>
                <li>Cancelación hasta 24 horas antes</li>
            </ul>
        </div>
    </div>
</section>

<!-- Tours Recomendados -->
<section class="recommended-tours">
    <div class="container">
        <h2 class="section-title">Otros Tours Recomendados</h2>
        <div class="tours-grid">
            <div class="tour-card">
                <div class="tour-image">
                    <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Líneas de Nazca">
                    <div class="tour-badge">POPULAR</div>
                </div>
                <div class="tour-content">
                    <h4>Líneas de Nazca</h4>
                    <p>Descubre los misteriosos geoglifos desde el aire en este tour de día completo.</p>
                    <div class="tour-details">
                        <span><i class="fas fa-clock"></i> 1.5 horas</span>
                        <span><i class="fas fa-users"></i> 4 personas</span>
                    </div>
                    <div class="tour-footer">
                        <span class="tour-more">Conoce más >></span>
                    </div>
                </div>
            </div>
            <div class="tour-card">
                <div class="tour-image">
                    <img src="https://images.unsplash.com/photo-1583416750470-965b2707b355?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Vuelo Amazónico">
                    <div class="tour-badge">NUEVO</div>
                </div>
                <div class="tour-content">
                    <h4>Vuelo Amazónico</h4>
                    <p>Explora la selva peruana desde las alturas y observa la biodiversidad única.</p>
                    <div class="tour-details">
                        <span><i class="fas fa-clock"></i> 3 horas</span>
                        <span><i class="fas fa-users"></i> 6 personas</span>
                    </div>
                    <div class="tour-footer">
                        <span class="tour-more">Conoce más >></span>
                    </div>
                </div>
            </div>
            <div class="tour-card">
                <div class="tour-image">
                    <img src="https://images.unsplash.com/photo-1469474968028-56623f02e42e?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Costa Peruana">
                    <div class="tour-badge">EXCLUSIVO</div>
                </div>
                <div class="tour-content">
                    <h4>Costa Peruana</h4>
                    <p>Sobrevuela la hermosa costa del Pacífico y las islas Ballestas.</p>
                    <div class="tour-details">
                        <span><i class="fas fa-clock"></i> 2.5 horas</span>
                        <span><i class="fas fa-users"></i> 5 personas</span>
                    </div>
                    <div class="tour-footer">
                        <span class="tour-more">Conoce más >></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Formulario de Reserva Lateral -->
<div class="booking-sidebar" id="bookingSidebar">
    <div class="booking-form-container">
        <div class="booking-header">
            <h3>Reserva tu Tour</h3>
            <button class="close-form" onclick="toggleBookingForm()">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <form class="booking-form" id="bookingForm">
            <div class="form-group">
                <label for="fullName">Nombre Completo *</label>
                <input type="text" id="fullName" name="fullName" required>
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico *</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Teléfono *</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="tourDate">Fecha del Tour *</label>
                <input type="date" id="tourDate" name="tourDate" required>
            </div>
            <div class="form-group">
                <label for="tourName">Nombre del Tour *</label>
                <input type="text" id="tourName" name="tourName" value="Montaña de 7 Colores" required readonly>
            </div>
            <div class="form-group">
                <label for="passengers">Número de Pasajeros *</label>
                <select id="passengers" name="passengers" required>
                    <option value="">Seleccionar...</option>
                    <option value="1">1 Pasajero</option>
                    <option value="2">2 Pasajeros</option>
                    <option value="3">3 Pasajeros</option>
                    <option value="4">4 Pasajeros</option>
                    <option value="5">5 Pasajeros</option>
                    <option value="6">6 Pasajeros a más</option>
                </select>
            </div>
            <div class="form-group">
                <label for="specialRequests">Solicitudes Especiales</label>
                <textarea id="specialRequests" name="specialRequests" rows="3" placeholder="Alergias, necesidades especiales, etc."></textarea>
            </div>
            <button type="submit" class="submit-btn">
                <i class="fas fa-paper-plane"></i>
                Enviar Solicitud
            </button>
            <p class="form-note">* Campos obligatorios. Te contactaremos en 24 horas para confirmar tu reserva.</p>
        </form>
    </div>
</div>

<!-- Botón de Reserva Flotante -->
<div class="floating-booking">
    <button class="booking-btn" onclick="toggleBookingForm()">
        <i class="fas fa-calendar-check"></i>
        Reservar Tour
    </button>
</div>

<script>
    // Smooth scrolling para enlaces internos
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

    // Efecto parallax en hero
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const hero = document.querySelector('.tour-hero');
        if (hero) {
            const heroBackground = hero.querySelector('.hero-background img');
            if (heroBackground) {
                heroBackground.style.transform = `translateY(${scrolled * 0.5}px)`;
            }
        }
    });

    // Animación de aparición para elementos
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

    // Observar elementos para animación
    document.querySelectorAll('.detail-item, .highlight-item, .timeline-item, .tour-card').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });

    // Funcionalidad del carrusel
    let currentSlideIndex = 0;
    const slides = document.querySelectorAll('.carousel-slide');
    const indicators = document.querySelectorAll('.indicator');
    const totalSlides = slides.length;

    function showSlide(index) {
        const container = document.getElementById('carouselContainer');
        const slideWidth = slides[0].offsetWidth;
        container.style.transform = `translateX(-${index * slideWidth}px)`;
        
        // Actualizar indicadores
        indicators.forEach((indicator, i) => {
            indicator.classList.toggle('active', i === index);
        });
    }

    function moveSlide(direction) {
        currentSlideIndex += direction;
        
        if (currentSlideIndex >= totalSlides) {
            currentSlideIndex = 0;
        } else if (currentSlideIndex < 0) {
            currentSlideIndex = totalSlides - 1;
        }
        
        showSlide(currentSlideIndex);
    }

    function currentSlide(index) {
        currentSlideIndex = index - 1;
        showSlide(currentSlideIndex);
    }

    // Auto-play del carrusel
    setInterval(() => {
        moveSlide(1);
    }, 5000);

    // Ajustar carrusel en redimensionamiento de ventana
    window.addEventListener('resize', () => {
        showSlide(currentSlideIndex);
    });

    // ===== FUNCIONALIDAD DEL FORMULARIO DE RESERVA =====
    function toggleBookingForm() {
        const bookingSidebar = document.getElementById('bookingSidebar');
        bookingSidebar.classList.toggle('active');
        
        if (bookingSidebar.classList.contains('active')) {
            document.body.style.overflow = 'hidden';
        } else {
            document.body.style.overflow = 'auto';
        }
    }

    // Cerrar formulario con tecla Escape
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            const bookingSidebar = document.getElementById('bookingSidebar');
            if (bookingSidebar.classList.contains('active')) {
                toggleBookingForm();
            }
        }
    });

    // Manejar envío del formulario
    const bookingForm = document.getElementById('bookingForm');
    if (bookingForm) {
        bookingForm.addEventListener('submit', (e) => {
            e.preventDefault();
            
            // Validar campos requeridos
            const requiredFields = bookingForm.querySelectorAll('[required]');
            let isValid = true;
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.style.borderColor = '#e74c3c';
                } else {
                    field.style.borderColor = '#ddd';
                }
            });
            
            if (isValid) {
                alert('¡Gracias por tu solicitud! Te contactaremos en las próximas 24 horas para confirmar tu reserva.');
                toggleBookingForm();
                bookingForm.reset();
            } else {
                alert('Por favor, completa todos los campos obligatorios.');
            }
        });
    }

    // Establecer fecha mínima como hoy
    const tourDateInput = document.getElementById('tourDate');
    if (tourDateInput) {
        const today = new Date().toISOString().split('T')[0];
        tourDateInput.min = today;
    }
</script>
@endsection