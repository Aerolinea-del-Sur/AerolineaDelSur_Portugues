@extends('a_EncabezadoFooter.princi')
@section('content')

    <link rel="stylesheet" href="{{ asset('public/css/paginas/agencia/1_TourGeneral.css') }}">
    <!-- Sección Hero -->
    <section class="tour-hero">
        <div class="hero-background">
            <img src="https://images.unsplash.com/photo-1587595431973-160d0d94add1?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" alt="Machu Picchu desde el aire">
            <div class="hero-overlay"></div>
        </div>
        <div class="hero-content">
            <div class="tour-badges">
                <span class="badge popular">POPULAR</span>
                <span class="badge exclusive">EXCLUSIVO</span>
            </div>
            <h1 class="tour-title">Tesoros del Cusco</h1>
            <p class="tour-subtitle">Descubre Valle Sagrado y Machu Picchu en un tour exclusivo</p>

            <div class="tour-meta">
                <div class="meta-item">
                    <i class="fas fa-clock"></i>
                    <span>2.5 horas</span>
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
                        <strong>¿Poco tiempo y muchas ganas de descubrir lo mejor de Cusco?</strong> Esta experiencia está pensada para viajeros que desean aprovechar al 
                        máximo cada instante. En solo 2 días y 1 noche recorrerás el Valle Sagrado de los Incas, un lugar con historia, cultura y paisajes 
                        deslumbrantes; finalizaras visitando Machu Picchu, la joya del mundo andino y una de las Siete Maravillas del Mundo Moderno. 
                    </p>
                    <div class="detail-items">
                        <div class="detail-item">
                            <i class="fas fa-users"></i>
                            <div>
                                <h4>Grupo Máximo</h4>
                                <p>10 Personas</p>
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
                                <p>2 días y 1 noche</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gallery-section">
                    <h3>Galería de Imágenes</h3>
                    <div class="image-carousel">
                        <div class="carousel-container" id="carouselContainer">
                            <div class="carousel-slide active">
                                <img src="https://images.unsplash.com/photo-1587595431973-160d0d94add1?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Vista aérea de Machu Picchu">
                            </div>
                            <div class="carousel-slide">
                                <img src="https://images.unsplash.com/photo-1730905272261-db18cffd8a5e?q=80&w=2072" alt="Valle Sagrado desde el aire">
                            </div>
                            <div class="carousel-slide">
                                <img src="https://images.unsplash.com/photo-1648862134614-097ffcea8059?q=80&w=2070" alt="Montañas andinas">
                            </div>
                            <div class="carousel-slide">
                                <img src="https://images.unsplash.com/photo-1568729670692-0d2de9a3c027?q=80&w=1988" alt="Río Urubamba">
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
                            <h4>Machu Picchu</h4>
                            <p>Conoceras la Ciudadela Inca en un recorrido de 2 horas.</p>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-water"></i>
                            <h4>Valle Sagrado</h4>
                            <p>Recorreras varios destinos llenos de historia, tradición y vestigios inca.</p>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-camera-retro"></i>
                            <h4>Fotografía Paisajes</h4>
                            <p>Captura tomas espectaculares de los pueblos, paisajes y costrucciones milenarias.</p>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-history"></i>
                            <h4>Historia en cada rincón</h4>
                            <p> El guía te narrará la historia de cada lugar y te mostrará pueblos, mercados y los vestigios de la cultura inca.</p>
                        </div>
                    </div>
                </div>
                <div class="statistics">
                    <h3>Estadísticas del Tour</h3>
                    <div class="stats-grid">
                        <div class="stat-item">
                            <div class="stat-number">2</div>
                            <div class="stat-label">Días</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">4</div>
                            <div class="stat-label">Lugares Turisticos</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">35</div>
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
                        <h4>Día 1 - Recorrido por el Valle Sagrado</h4>
                        <p>Salimos por la mañana desde tu hotel en Cusco rumbo a los paisajes andinos del Valle Sagrado, donde la historia y la naturaleza se entrelazan.</p>
                        <p>
                            <br>- Comenzamos con una visita del majestuoso Centro Arqueológico de Pisac, ubicado sobre una colina con vistas impresionantes al valle.
                            <br><br>- Luego descendemos al colorido mercado artesanal de Pisac, ideal para descubrir textiles, cerámica, platería y productos hechos a mano por las comunidades locales.
                            <br><br>- Continuamos el recorrido hacia el corazón del valle para disfrutar de un almuerzo buffet con ingredientes andinos y cocina fusión andina internacional.
                            <br><br>- Por la tarde, visitamos la enigmática fortaleza de Ollantaytambo, una joya inca viva rodeada de misterio y arquitectura monumental.
                            <br><br>- Pernocte en Ollantaytambo, en un acogedor hotel del pueblo, lo que te permitirá descansar sin prisas y estar listo para la gran experiencia del día siguiente.
                        </p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h4>Día 2 - Visita a Machu Picchu</h4>
                        <p>Despierta temprano para vivir uno de los momentos más esperados de tu viaje.</p>
                        <p>
                            <br>- Traslado a la estación de Ollantaytambo para abordar el tren con destino a Aguas Calientes, disfrutando de paisajes selváticos y quebradas impresionantes.
                            <br><br>- Al llegar, tomamos el bus que nos llevará montaña arriba hasta la ciudadela de Machu Picchu, una de las maravillas más espectaculares del mundo.
                            <br><br>- Disfruta de una visita guiada de 2 horas y media, donde recorrerás templos, andenes y miradores junto a un guía experto que te revelará los secretos de esta ciudad sagrada, según el circuito que se obtuvo.
                            <br><br>- Luego del recorrido, regresamos en bus a Aguas Calientes, donde tendrás tiempo libre para almorzar a tu ritmo, comprar recuerdos o recorrer sus encantadoras calles.
                            <br><br>- Por la tarde, abordarás el tren de retorno a Ollantaytambo y desde allí un transporte turístico te llevará de vuelta a Cusco, con llegada directa al centro de la ciudad. Allí te espera un taxi para llevarte a tu hotel.
                        </p>
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
                        <li><i class="fas fa-check"></i> Traslados turísticos desde y hacia tu hotel en Cusco (en el centro de la ciudad)</li>
                        <li><i class="fas fa-check"></i> Tren turístico de ida y vuelta (categoría Expedition o voagager)</li>
                        <li><i class="fas fa-check"></i> Tickets de ingreso a todos los sitios arqueológicos</li>
                        <li><i class="fas fa-check"></i> Almuerzo buffet en el Valle Sagrado</li>
                        <li><i class="fas fa-check"></i> Guía oficial bilingüe durante las visitas</li>
                        <li><i class="fas fa-check"></i> 1 noche de alojamiento en hotel 3★ en Ollantaytambo</li>
                        <li><i class="fas fa-check"></i> Asistencia permanente durante todo el viaje</li>
                    </ul>
                </div>
                <div class="not-included">
                    <h3><i class="fas fa-times-circle"></i> No Incluido</h3>
                    <ul>
                        <li><i class="fas fa-times"></i> Desayuno del primer día</li>
                        <li><i class="fas fa-times"></i> Almuerzo en Machu Picchu</li>
                        <li><i class="fas fa-times"></i> Seguro de viaje personal</li>
                        <li><i class="fas fa-times"></i> Propinas</li>
                        <li><i class="fas fa-times"></i> Seguros de viaje (se les recomienda tener uno)</li>
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
                    <input type="text" id="tourName" name="tourName" value="Tesoros del Cusco" required readonly>
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