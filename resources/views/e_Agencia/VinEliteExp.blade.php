@extends('a_EncabezadoFooter.princi')
@section('content')

    <link rel="stylesheet" href="{{ asset('public/css/VPMachuPichu.css') }}">
    <!-- Sección Hero -->
    <section class="tour-hero">
        <div class="hero-background">
            <img src="https://images.pexels.com/photos/6921111/pexels-photo-6921111.jpeg" alt="Montaña de Siete Colores desde el aire">
            <div class="hero-overlay"></div>
        </div>
        <div class="hero-content">
            <div class="tour-badges">
                <span class="badge popular">VIP</span>
                <span class="badge exclusive">HELICÓPTERO</span>
            </div>
            <h1 class="tour-title">Montaña de Siete Colores VIP</h1>
            <p class="tour-subtitle">Experiencia exclusiva en helicóptero a la montaña arcoíris más famosa del mundo.</p>

            <div class="tour-meta">
                <div class="meta-item">
                    <i class="fas fa-clock"></i>
                    <span>1 día</span>
                </div>
                <div class="meta-item">
                    <i class="fas fa-users"></i>
                    <span>Hasta 4 personas</span>
                </div>
                <div class="meta-item">
                    <i class="fas fa-star"></i>
                    <span>5.0/5</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Detalles Generales -->
    <section class="tour-details">
        <div class="container">
            <div class="details-grid">
                <div class="details-content">
                    <h2 class="section-title">Detalles del Tour VIP</h2>
                    <p class="tour-description">
                        <strong>Vive una experiencia única y exclusiva en helicóptero a la Montaña de 7 Colores</strong>, también conocida como Vinicunca. 
                        Este tour VIP te permite disfrutar de vistas aéreas espectaculares de los Andes peruanos y aterrizar directamente cerca de la montaña multicolor, 
                        evitando las largas caminatas tradicionales. Una aventura de lujo que combina comodidad, exclusividad y paisajes inolvidables a más de 5,000 m s.n.m.
                    </p>
                    <div class="detail-items">
                        <div class="detail-item">
                            <i class="fas fa-users"></i>
                            <div>
                                <h4>Grupo Máximo</h4>
                                <p>4 personas</p>
                            </div>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-user-plus"></i>
                            <div>
                                <h4>Edad Mínima</h4>
                                <p>12 años</p>
                            </div>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-clock"></i>
                            <div>
                                <h4>Duración</h4>
                                <p>1 día completo</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gallery-section">
                    <h3>Galería de Imágenes</h3>
                    <div class="image-carousel">
                        <div class="carousel-container" id="carouselContainer">
                            <div class="carousel-slide active">
                                <img src="https://images.pexels.com/photos/7343379/pexels-photo-7343379.jpeg" alt="Helicóptero sobrevolando la Montaña de Siete Colores">
                            </div>
                            <div class="carousel-slide">
                                <img src="https://images.pexels.com/photos/30478655/pexels-photo-30478655.jpeg" alt="Vista aérea de Vinicunca">
                            </div>
                            <div class="carousel-slide">
                                <img src="https://images.unsplash.com/photo-1645740714708-f5632b42d24c?q=80&w=2070" alt="Montañas andinas desde el helicóptero">
                            </div>
                            <div class="carousel-slide">
                                <img src="https://images.unsplash.com/photo-1645740717496-c6281d983bd3?q=80&w=2070" alt="Caballos en los Andes">
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
            <h2 class="section-title">Resumen del Viaje VIP</h2>
            <div class="summary-grid">
                <div class="highlights">
                    <h3>Aspectos Destacados</h3>
                    <div class="highlight-items">
                        <div class="highlight-item">
                            <i class="fas fa-helicopter"></i>
                            <h4>Vuelo en Helicóptero</h4>
                            <p>Disfruta de un vuelo panorámico exclusivo con vistas aéreas espectaculares de los Andes.</p>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-mountain"></i>
                            <h4>Aterrizaje VIP</h4>
                            <p>Aterriza cerca de Vinicunca sin necesidad de largas caminatas, acceso directo y cómodo.</p>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-camera-retro"></i>
                            <h4>Fotografía Exclusiva</h4>
                            <p>Captura tomas únicas desde perspectivas aéreas y terrestres de la montaña multicolor.</p>
                        </div>
                    </div>
                </div>
                <div class="statistics">
                    <h3>Estadísticas del Tour</h3>
                    <div class="stats-grid">
                        <div class="stat-item">
                            <div class="stat-number">45</div>
                            <div class="stat-label">Min de vuelo</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">5036</div>
                            <div class="stat-label">Metros altitud</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">4</div>
                            <div class="stat-label">Pasajeros máx</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">100%</div>
                            <div class="stat-label">Exclusividad</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Itinerario Detallado -->
    <section class="detailed-itinerary">
        <div class="container">
            <h2 class="section-title">Itinerario Detallado VIP</h2>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h4>1. Recojo VIP (6:00 AM)</h4>
                        <p>Recojo personalizado desde tu hotel en Cusco en vehículo de lujo. Traslado al helipuerto con desayuno ligero incluido y briefing de seguridad.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h4>2. Despegue y vuelo panorámico (7:00 AM)</h4>
                        <p>Despegue desde Cusco en helicóptero privado. Vuelo panorámico de 45 minutos sobre el Valle Sagrado, montañas andinas y pueblos tradicionales con vistas espectaculares.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h4>3. Aterrizaje en Vinicunca (8:00 AM)</h4>
                        <p>Aterrizaje exclusivo cerca de la Montaña de Siete Colores. Acceso directo sin caminatas largas, ideal para todas las edades y condiciones físicas.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h4>4. Exploración y fotografía (8:30 - 10:30 AM)</h4>
                        <p>Tiempo libre para explorar la montaña multicolor, tomar fotografías profesionales y disfrutar del paisaje único. Guía especializado incluido para explicar la geología del lugar.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h4>5. Vuelo de retorno (11:00 AM)</h4>
                        <p>Vuelo de regreso a Cusco con ruta panorámica diferente para maximizar las vistas. Oportunidad de avistar cóndores y otros paisajes andinos desde el aire.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h4>6. Almuerzo de celebración (12:30 PM)</h4>
                        <p>Almuerzo gourmet en restaurante exclusivo de Cusco para celebrar la experiencia, con vista panorámica de la ciudad imperial.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Inclusiones -->
    <section class="inclusions">
        <div class="container">
            <h2 class="section-title">Inclusiones del Tour VIP</h2>
            <div class="inclusions-grid">
                <div class="included">
                    <h3><i class="fas fa-check-circle"></i> Incluido</h3>
                    <ul>
                        <li><i class="fas fa-check"></i> Vuelo en helicóptero privado (ida y vuelta)</li>
                        <li><i class="fas fa-check"></i> Recojo y traslado VIP desde/hacia tu hotel</li>
                        <li><i class="fas fa-check"></i> Guía especializado bilingüe (español - inglés)</li>
                        <li><i class="fas fa-check"></i> Desayuno ligero y almuerzo gourmet</li>
                        <li><i class="fas fa-check"></i> Equipo de seguridad completo (oxígeno, comunicaciones)</li>
                        <li><i class="fas fa-check"></i> Sesión fotográfica profesional</li>
                        <li><i class="fas fa-check"></i> Certificado de vuelo personalizado</li>
                        <li><i class="fas fa-check"></i> Seguro de vuelo incluido</li>
                    </ul>
                </div>
                <div class="not-included">
                    <h3><i class="fas fa-times-circle"></i> No Incluido</h3>
                    <ul>
                        <li><i class="fas fa-times"></i> Gastos personales y souvenirs</li>
                        <li><i class="fas fa-times"></i> Bebidas alcohólicas durante el almuerzo</li>
                        <li><i class="fas fa-times"></i> Propinas para el piloto y guía</li>
                        <li><i class="fas fa-times"></i> Seguro de viaje personal adicional</li>
                    </ul>
                </div>
            </div>
            <div class="important-notes">
                <h4><i class="fas fa-exclamation-triangle"></i> Notas Importantes</h4>
                <ul>
                    <li>Peso máximo por pasajero: 100 kg</li>
                    <li>Condiciones climáticas pueden afectar el vuelo</li>
                    <li>Cancelación hasta 48 horas antes sin penalización</li>
                    <li>Documento de identidad válido requerido</li>
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
                    <input type="text" id="tourName" name="tourName" value="Montaña de 7 Colores VIP - Helicóptero" required readonly>
                </div>
                <div class="form-group">
                    <label for="passengers">Número de Pasajeros *</label>
                    <select id="passengers" name="passengers" required>
                        <option value="">Seleccionar...</option>
                        <option value="1">1 Pasajero</option>
                        <option value="2">2 Pasajeros</option>
                        <option value="3">3 Pasajeros</option>
                        <option value="4">4 Pasajeros</option>
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