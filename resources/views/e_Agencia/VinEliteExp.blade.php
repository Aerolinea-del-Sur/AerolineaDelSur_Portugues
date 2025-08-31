@extends('a_EncabezadoFooter.princi')
@section('content')

    <link rel="stylesheet" href="{{ asset('public/css/VPMachuPichu.css') }}">
    <!-- Sección Hero -->
    <section class="tour-hero">
        <div class="hero-background">
            <img src="https://images.pexels.com/photos/6921111/pexels-photo-6921111.jpeg" alt="Vinicunca Elite Experience">
            <div class="hero-overlay"></div>
        </div>
        <div class="hero-content">
            <div class="tour-badges">
                <span class="badge popular">VIP</span>
                <span class="badge exclusive">EXCLUSIVO</span>
            </div>
            <h1 class="tour-title">Vinicunca Elite Experience</h1>
            <p class="tour-subtitle">Un día VIP en Helicóptero a la Montaña de Siete Colores</p>
            <p class="tour-subtitle">Lujos, paisajes andinos y cultura milenaria desde el cielo</p>

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
                    <span>5.0/5</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Detalles Generales -->
    <section class="tour-details">
        <div class="container">
            <div class="details-content">
                <h2 class="section-title">Detalles del Tour VIP</h2>
                <p class="tour-description">
                    <strong>Esta es una experiencia diseñada para los viajeros más exigentes:</strong> una travesía exclusiva que combina lujo, seguridad y una conexión profunda con la imponente belleza de los Andes peruanos.
                    Este programa full day en helicóptero hacia la emblemática Montaña de 7 Colores ha sido cuidadosamente diseñado para ofrecerle una experiencia inolvidable. Disfrutará de vistas panorámicas desde el cielo y, al mismo tiempo, vivirá la emoción de una caminata escénica hasta uno de los destinos naturales más espectaculares del Perú.
                    <br><br>
                    Una propuesta de alto nivel que une confort, paisajes únicos y un servicio personalizado de primera clase porque sabemos que los grandes viajes no solo se hacen para ver, sino para sentir.
                </p>
                <div class="detail-items">
                    <div class="detail-item">
                        <i class="fas fa-helicopter"></i>
                        <div>
                            <h4>Transporte</h4>
                            <p>Helicóptero privado</p>
                        </div>
                    </div>
                    <div class="detail-item">
                        <i class="fas fa-users"></i>
                        <div>
                            <h4>Grupo Máximo</h4>
                            <p>6 personas</p>
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
                            <img src="https://images.pexels.com/photos/7343379/pexels-photo-7343379.jpeg" alt="Helicóptero BELL 212">
                        </div>
                        <div class="carousel-slide">
                            <img src="https://images.pexels.com/photos/30478655/pexels-photo-30478655.jpeg" alt="Vista aérea Vinicunca">
                        </div>
                        <div class="carousel-slide">
                            <img src="https://images.unsplash.com/photo-1645740714708-f5632b42d24c?q=80&w=2070" alt="Cabalgata en Vinicunca">
                        </div>
                        <div class="carousel-slide">
                            <img src="https://images.unsplash.com/photo-1645740717496-c6281d983bd3?q=80&w=2070" alt="Vista Montaña Arcoíris desde tierra">
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
    </section>

    <!-- Itinerario Detallado -->
    <section class="itinerary">
        <div class="container">
            <h2 class="section-title">Itinerario Detallado</h2>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h4>08:00 AM - Traslado privado desde su hotel</h4>
                        <p>Nuestro chofer pasará por su alojamiento para llevarlo al aeropuerto en una unidad turística privada equipada con agua y comodidades.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h4>Vuelo en helicóptero hacia Vinicunca</h4>
                        <p>Iniciará un espectacular sobrevuelo rumbo al sur de Cusco, apreciando desde el aire los valles andinos, el nevado Ausangate y paisajes imponentes. El aterrizaje se realiza en una hacienda privada, punto estratégico de acceso a la montaña.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h4>Bienvenida VIP en la hacienda</h4>
                        <p>Nuestro staff y guía le recibirán con atención personalizada. Se le entregará un kit térmico andino de cortesía (bufanda, chullo y guantes de alpaca), junto a una estación de mates de coca y muña para aclimatarse adecuadamente.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h4>Traslado escénico hacia la base de Vinicunca</h4>
                        <p>A bordo de un vehículo privado, se dirigirá hacia la zona de ingreso. Durante el trayecto podrá disfrutar de vistas panorámicas de los paisajes altoandinos y rebaños de llamas.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h4>Cabalgata asistida o caminata hacia el mirador</h4>
                        <p>Con asistencia logística y un guía profesional, comenzará el ascenso hacia el mirador, ya sea a caballo o caminando, según su preferencia. Desde allí, se abre una vista privilegiada de Vinicunca, en todo su esplendor.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h4>Tiempo libre en la cima</h4>
                        <p>Disfrute del impresionante paisaje, tome fotografías memorables y escuche la explicación del guía sobre este fenómeno natural y su valor cultural. Durante la experiencia se le entregará un snack bag con productos naturales, chocolates y bebidas energéticas.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h4>Sobrevuelo de retorno y traslado final</h4>
                        <p>Emprenderá el vuelo de regreso hacia Cusco, con un último vistazo aéreo a la Montaña Arcoíris, Valle Rojo y Palcoyo. Nuestro personal lo recibirá para llevarlo cómodamente de regreso a su alojamiento.</p>
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
                            <p>Transporte privado en helicóptero BELL 212 con vistas panorámicas espectaculares.</p>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-mountain"></i>
                            <h4>Montaña de 7 Colores</h4>
                            <p>Experiencia VIP en uno de los destinos naturales más impresionantes del mundo.</p>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-star"></i>
                            <h4>Servicio Premium</h4>
                            <p>Atención personalizada, kit térmico andino y snack bag de cortesía.</p>
                        </div>
                    </div>
                </div>
                <div class="statistics">
                    <h3>Estadísticas del Tour</h3>
                    <div class="stats-grid">
                        <div class="stat-item">
                            <div class="stat-number">1</div>
                            <div class="stat-label">Día VIP</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">6</div>
                            <div class="stat-label">Max Personas</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">5000</div>
                            <div class="stat-label">Metros s.n.m.</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">100%</div>
                            <div class="stat-label">Satisfacción</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Incluye y No Incluye -->
    <section class="inclusions">
        <div class="container">
            <h2 class="section-title">¿Qué Incluye?</h2>
            <div class="inclusions-grid">
                <div class="included">
                    <h3><i class="fas fa-check-circle"></i> Incluido</h3>
                    <ul>
                        <li><i class="fas fa-check"></i> Vuelo privado en helicóptero (ida y vuelta Cusco – Vinicunca)</li>
                        <li><i class="fas fa-check"></i> Traslados privados hotel – aeropuerto – hotel</li>
                        <li><i class="fas fa-check"></i> Entrada oficial a la Montaña de Siete Colores</li>
                        <li><i class="fas fa-check"></i> Regalo andino (bufanda o chullo)</li>
                        <li><i class="fas fa-check"></i> Estación de mates de coca y muña</li>
                        <li><i class="fas fa-check"></i> Transporte privado a la montaña</li>
                        <li><i class="fas fa-check"></i> Transporte a caballo</li>
                        <li><i class="fas fa-check"></i> Snack bag personalizada</li>
                        <li><i class="fas fa-check"></i> Guía profesional bilingüe</li>
                        <li><i class="fas fa-check"></i> Almuerzo gourmet</li>
                    </ul>
                </div>
                <div class="not-included">
                    <h3><i class="fas fa-times-circle"></i> No Incluido</h3>
                    <ul>
                        <li><i class="fas fa-times"></i> Pasajes aéreos a Cusco</li>
                        <li><i class="fas fa-times"></i> Seguro de viaje (recomendado)</li>
                        <li><i class="fas fa-times"></i> Propinas y consumos personales no mencionados</li>
                        <li><i class="fas fa-times"></i> Gastos personales adicionales</li>
                    </ul>
                </div>
            </div>
            <div class="important-notes">
                <h4><i class="fas fa-exclamation-triangle"></i> Notas Importantes</h4>
                <ul>
                    <li>Se requiere documento de identidad válido</li>
                    <li>Cancelación hasta 48 horas antes para tours VIP</li>
                    <li>Condiciones climáticas pueden afectar el vuelo</li>
                    <li>Experiencia sujeta a disponibilidad</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Tours Recomendados -->
    <section class="recommended-tours">
        <div class="container">
            <h2 class="section-title">Otros Tours VIP Recomendados</h2>
            <div class="tours-grid">
                <div class="tour-card">
                    <div class="tour-image">
                        <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Líneas de Nazca VIP">
                        <div class="tour-badge">VIP</div>
                    </div>
                    <div class="tour-content">
                        <h4>Líneas de Nazca VIP</h4>
                        <p>Descubre los misteriosos geoglifos desde el aire en un vuelo privado exclusivo.</p>
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
                        <img src="https://images.pexels.com/photos/6921111/pexels-photo-6921111.jpeg" alt="Machu Picchu Elite">
                        <div class="tour-badge">ELITE</div>
                    </div>
                    <div class="tour-content">
                        <h4>Machu Picchu Elite</h4>
                        <p>Experiencia premium a la ciudadela inca con helicóptero y guía privado.</p>
                        <div class="tour-details">
                            <span><i class="fas fa-clock"></i> 1 día</span>
                            <span><i class="fas fa-users"></i> 6 personas</span>
                        </div>
                        <div class="tour-footer">
                            <span class="tour-more">Conoce más >></span>
                        </div>
                    </div>
                </div>
                <div class="tour-card">
                    <div class="tour-image">
                        <img src="https://images.unsplash.com/photo-1469474968028-56623f02e42e?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Amazonía Premium">
                        <div class="tour-badge">PREMIUM</div>
                    </div>
                    <div class="tour-content">
                        <h4>Amazonía Premium</h4>
                        <p>Sobrevuela la selva peruana en una experiencia de lujo única.</p>
                        <div class="tour-details">
                            <span><i class="fas fa-clock"></i> 3 horas</span>
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
                <h3>Reserva tu Tour VIP</h3>
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
                    <input type="text" id="tourName" name="tourName" value="Vinicunca Elite Experience" required readonly>
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
                        <option value="6">6 Pasajeros</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="specialRequests">Solicitudes Especiales</label>
                    <textarea id="specialRequests" name="specialRequests" rows="3" placeholder="Menciona cualquier requerimiento especial..."></textarea>
                </div>
                <button type="submit" class="submit-btn">
                    <i class="fas fa-paper-plane"></i>
                    Enviar Solicitud
                </button>
            </form>
        </div>
    </div>

    <!-- Botón flotante para abrir formulario -->
    <button class="floating-book-btn" onclick="toggleBookingForm()">
        <i class="fas fa-calendar-plus"></i>
        <span>Reservar</span>
    </button>

    <script>
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

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.toggle('active', i === index);
            });
            indicators.forEach((indicator, i) => {
                indicator.classList.toggle('active', i === index);
            });
        }

        function moveSlide(direction) {
            currentSlideIndex += direction;
            if (currentSlideIndex >= slides.length) currentSlideIndex = 0;
            if (currentSlideIndex < 0) currentSlideIndex = slides.length - 1;
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

        // Funcionalidad del formulario de reserva
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
                    alert('¡Gracias por tu solicitud VIP! Te contactaremos en las próximas 12 horas para confirmar tu reserva exclusiva.');
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