@extends('a_EncabezadoFooter.princi')
@section('content')
<link rel="stylesheet" href="{{ asset('public/css/TourIndividual.css') }}">

<div class="tour-container">
    <!-- Hero Section -->
    <div class="hero-section">
        <div class="hero-content">
            <div class="badges">
                <span class="badge vip">VIP</span>
                <span class="badge helicopter">HELICÓPTERO</span>
            </div>
            <h1 class="hero-title">Vinicunca Elite Experience</h1>
            <p class="hero-subtitle">Un día VIP en Helicóptero a la Montaña de Siete Colores</p>
            <div class="tour-meta">
                <div class="meta-item">
                    <i class="fas fa-star"></i>
                    <span>4.9/5 (127 reseñas)</span>
                </div>
                <div class="meta-item">
                    <i class="fas fa-users"></i>
                    <span>Máx. 4 personas</span>
                </div>
                <div class="meta-item">
                    <i class="fas fa-clock"></i>
                    <span>1 día completo</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="content-wrapper">
            <!-- General Section -->
            <section class="general-section">
                <h2>Detalles Generales</h2>
                <div class="general-content">
                    <div class="description">
                        <p>Lujos, paisajes andinos y cultura milenaria desde el cielo. Esta es una experiencia diseñada para los viajeros más exigentes: una travesía exclusiva que combina lujo, seguridad y una conexión profunda con la imponente belleza de los Andes peruanos.</p>
                        <p>Este programa full day en helicóptero hacia la emblemática Montaña de 7 Colores ha sido cuidadosamente diseñado para ofrecerle una experiencia inolvidable. Disfrutará de vistas panorámicas desde el cielo y, al mismo tiempo, vivirá la emoción de una caminata escénica hasta uno de los destinos naturales más espectaculares del Perú.</p>
                        <p>Una propuesta de alto nivel que une confort, paisajes únicos y un servicio personalizado de primera clase porque sabemos que los grandes viajes no solo se hacen para ver, sino para sentir.</p>
                    </div>
                    <div class="tour-details">
                        <div class="detail-item">
                            <strong>Tamaño del grupo:</strong> Máximo 4 personas
                        </div>
                        <div class="detail-item">
                            <strong>Edad mínima:</strong> 12 años
                        </div>
                        <div class="detail-item">
                            <strong>Duración:</strong> 1 día completo (8 horas)
                        </div>
                    </div>
                </div>
            </section>

            <!-- Gallery Section -->
            <section class="gallery-section">
                <h2>Galería</h2>
                <div class="image-carousel">
                    <div class="carousel-container">
                        <div class="carousel-slide active">
                            <img src="{{ asset('img/vinicunca-helicopter.jpg') }}" alt="Helicóptero sobre Vinicunca">
                        </div>
                        <div class="carousel-slide">
                            <img src="{{ asset('img/vinicunca-aerial.jpg') }}" alt="Vista aérea de la Montaña de 7 Colores">
                        </div>
                        <div class="carousel-slide">
                            <img src="{{ asset('img/helicopter-landing.jpg') }}" alt="Aterrizaje en hacienda privada">
                        </div>
                        <div class="carousel-slide">
                            <img src="{{ asset('img/vip-experience.jpg') }}" alt="Experiencia VIP">
                        </div>
                        <div class="carousel-slide">
                            <img src="{{ asset('img/andean-landscape.jpg') }}" alt="Paisajes andinos">
                        </div>
                    </div>
                    <button class="carousel-btn prev" onclick="changeSlide(-1)">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="carousel-btn next" onclick="changeSlide(1)">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                    <div class="carousel-indicators">
                        <span class="indicator active" onclick="currentSlide(1)"></span>
                        <span class="indicator" onclick="currentSlide(2)"></span>
                        <span class="indicator" onclick="currentSlide(3)"></span>
                        <span class="indicator" onclick="currentSlide(4)"></span>
                        <span class="indicator" onclick="currentSlide(5)"></span>
                    </div>
                </div>
            </section>

            <!-- Trip Summary -->
            <section class="trip-summary">
                <h2>Resumen del Viaje</h2>
                <div class="summary-content">
                    <div class="highlights">
                        <h3>Lo más destacado</h3>
                        <ul>
                            <li><i class="fas fa-helicopter"></i> Vuelo privado en helicóptero sobre los Andes</li>
                            <li><i class="fas fa-mountain"></i> Aterrizaje VIP en hacienda privada</li>
                            <li><i class="fas fa-camera"></i> Fotografía exclusiva desde el aire</li>
                        </ul>
                    </div>
                    <div class="stats">
                        <div class="stat-item">
                            <div class="stat-number">2.5</div>
                            <div class="stat-label">Horas de vuelo</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">5,200</div>
                            <div class="stat-label">Metros de altitud</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">4</div>
                            <div class="stat-label">Máx. pasajeros</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">100%</div>
                            <div class="stat-label">Exclusividad</div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Detailed Itinerary -->
            <section class="itinerary-section">
                <h2>Itinerario Detallado</h2>
                <div class="itinerary-timeline">
                    <div class="timeline-item">
                        <div class="timeline-time">08:00 AM</div>
                        <div class="timeline-content">
                            <h4>Traslado privado desde su hotel al aeropuerto de Cusco</h4>
                            <p>Nuestro chofer pasará por su alojamiento para llevarlo al aeropuerto en una unidad turística privada equipada con agua y comodidades.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-time">09:00 AM</div>
                        <div class="timeline-content">
                            <h4>Vuelo en helicóptero hacia Vinicunca</h4>
                            <p>Iniciará un espectacular sobrevuelo rumbo al sur de Cusco, apreciando desde el aire los valles andinos, el nevado Ausangate y paisajes imponentes. El aterrizaje se realiza en una hacienda privada, punto estratégico de acceso a la montaña.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-time">10:30 AM</div>
                        <div class="timeline-content">
                            <h4>Bienvenida VIP en la hacienda</h4>
                            <p>Nuestro staff y guía le recibirán con atención personalizada. Se le entregará un kit térmico andino de cortesía (bufanda, chullo y guantes de alpaca), junto a una estación de mates de coca y muña para aclimatarse adecuadamente.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-time">11:00 AM</div>
                        <div class="timeline-content">
                            <h4>Traslado escénico hacia la base de Vinicunca</h4>
                            <p>A bordo de un vehículo privado, se dirigirá hacia la zona de ingreso. Durante el trayecto podrá disfrutar de vistas panorámicas de los paisajes altoandinos y rebaños de llamas.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-time">12:00 PM</div>
                        <div class="timeline-content">
                            <h4>Cabalgata asistida o caminata hacia el mirador</h4>
                            <p>Con asistencia logística y un guía profesional, comenzará el ascenso hacia el mirador, ya sea a caballo o caminando, según su preferencia. Desde allí, se abre una vista privilegiada de Vinicunca, en todo su esplendor.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-time">01:30 PM</div>
                        <div class="timeline-content">
                            <h4>Tiempo libre en la cima</h4>
                            <p>Disfrute del impresionante paisaje, tome fotografías memorables y escuche la explicación del guía sobre este fenómeno natural y su valor cultural. Durante la experiencia se le entregará un snack bag con productos naturales, chocolates y bebidas energéticas.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-time">03:00 PM</div>
                        <div class="timeline-content">
                            <h4>Sobrevuelo de retorno y aterrizaje en Cusco</h4>
                            <p>Emprenderá el vuelo de regreso hacia Cusco, con un último vistazo aéreo a la Montaña Arcoíris, Valle Rojo y Palcoyo, así como los paisajes circundantes. El aterrizaje se realiza en el aeropuerto.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-time">04:30 PM</div>
                        <div class="timeline-content">
                            <h4>Traslado final a su hotel en Cusco</h4>
                            <p>Nuestro personal lo recibirá a su llegada para llevarlo cómodamente de regreso a su alojamiento. Fin de nuestros servicios.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Inclusions -->
            <section class="inclusions-section">
                <h2>Incluye</h2>
                <div class="inclusions-content">
                    <div class="included">
                        <h3><i class="fas fa-check-circle"></i> Incluye</h3>
                        <ul>
                            <li>Vuelo privado en helicóptero (ida y vuelta Cusco – Vinicunca)</li>
                            <li>Traslados privados hotel – aeropuerto – hotel</li>
                            <li>Entrada oficial a la Montaña de Siete Colores</li>
                            <li>Regalo andino (bufanda o chullo)</li>
                            <li>Estación de mates</li>
                            <li>Transporte privado a la montaña</li>
                            <li>Transporte a caballo</li>
                            <li>Snack bag personalizada</li>
                            <li>Guía profesional</li>
                            <li>Almuerzo</li>
                        </ul>
                    </div>
                    <div class="not-included">
                        <h3><i class="fas fa-times-circle"></i> No Incluye</h3>
                        <ul>
                            <li>Pasajes aéreos a Cusco</li>
                            <li>Seguro de viaje (es recomendado)</li>
                            <li>Propinas y consumos personales no mencionados</li>
                        </ul>
                    </div>
                </div>
                <div class="important-notes">
                    <h3><i class="fas fa-exclamation-triangle"></i> Notas Importantes</h3>
                    <ul>
                        <li>Experiencia sujeta a condiciones climáticas favorables</li>
                        <li>Se requiere un mínimo de 2 pasajeros para confirmar el vuelo</li>
                        <li>Peso máximo por pasajero: 120 kg</li>
                        <li>Se recomienda llevar ropa abrigada y protector solar</li>
                    </ul>
                </div>
            </section>

            <!-- Recommended Tours -->
            <section class="recommended-tours">
                <h2>Tours Recomendados</h2>
                <div class="tours-grid">
                    <div class="tour-card">
                        <img src="{{ asset('img/nazca-lines.jpg') }}" alt="Líneas de Nazca">
                        <div class="tour-info">
                            <h4>Líneas de Nazca</h4>
                            <p>Sobrevuelo a las misteriosas líneas</p>
                            <span class="price">Desde $180</span>
                        </div>
                    </div>
                    <div class="tour-card">
                        <img src="{{ asset('img/amazon-flight.jpg') }}" alt="Vuelo Amazónico">
                        <div class="tour-info">
                            <h4>Vuelo Amazónico</h4>
                            <p>Explora la selva desde el aire</p>
                            <span class="price">Desde $220</span>
                        </div>
                    </div>
                    <div class="tour-card">
                        <img src="{{ asset('img/coast-flight.jpg') }}" alt="Costa Peruana">
                        <div class="tour-info">
                            <h4>Costa Peruana</h4>
                            <p>Paisajes costeros únicos</p>
                            <span class="price">Desde $150</span>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Booking Sidebar -->
        <div class="booking-sidebar">
            <div class="booking-card">
                <div class="price-section">
                    <div class="price">
                        <span class="currency">USD</span>
                        <span class="amount">$1,200</span>
                        <span class="per-person">por persona</span>
                    </div>
                    <div class="rating">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span class="rating-text">4.9 (127 reseñas)</span>
                    </div>
                </div>

                <form class="booking-form" id="bookingForm">
                    <div class="form-group">
                        <label for="name">Nombre completo</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Teléfono</label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Fecha del tour</label>
                        <input type="date" id="date" name="date" required>
                    </div>
                    <div class="form-group">
                        <label for="tour">Tour seleccionado</label>
                        <input type="text" id="tour" name="tour" value="Vinicunca Elite Experience" readonly>
                    </div>
                    <div class="form-group">
                        <label for="passengers">Número de pasajeros</label>
                        <select id="passengers" name="passengers" required>
                            <option value="">Seleccionar</option>
                            <option value="1">1 pasajero</option>
                            <option value="2">2 pasajeros</option>
                            <option value="3">3 pasajeros</option>
                            <option value="4">4 pasajeros</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="requests">Solicitudes especiales</label>
                        <textarea id="requests" name="requests" rows="3" placeholder="Mencione cualquier requerimiento especial..."></textarea>
                    </div>
                    <button type="submit" class="book-btn">
                        <i class="fas fa-calendar-check"></i>
                        Reservar Ahora
                    </button>
                </form>

                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <span>+51 984 123 456</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>info@aerolineasur.com</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-clock"></i>
                        <span>Lun - Dom: 8:00 AM - 8:00 PM</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Floating Book Button -->
    <div class="floating-book-btn">
        <button onclick="scrollToBooking()">
            <i class="fas fa-calendar-plus"></i>
            Reservar
        </button>
    </div>
</div>

<script>
// Smooth scrolling
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Parallax effect for hero section
window.addEventListener('scroll', () => {
    const scrolled = window.pageYOffset;
    const parallax = document.querySelector('.hero-section');
    const speed = scrolled * 0.5;
    parallax.style.transform = `translateY(${speed}px)`;
});

// Animate elements on scroll
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

// Observe all sections
document.querySelectorAll('section').forEach(section => {
    section.style.opacity = '0';
    section.style.transform = 'translateY(30px)';
    section.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    observer.observe(section);
});

// Image carousel functionality
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

function changeSlide(direction) {
    currentSlideIndex += direction;
    if (currentSlideIndex >= slides.length) currentSlideIndex = 0;
    if (currentSlideIndex < 0) currentSlideIndex = slides.length - 1;
    showSlide(currentSlideIndex);
}

function currentSlide(index) {
    currentSlideIndex = index - 1;
    showSlide(currentSlideIndex);
}

// Auto-advance carousel
setInterval(() => {
    changeSlide(1);
}, 5000);

// Booking form functionality
function scrollToBooking() {
    document.querySelector('.booking-sidebar').scrollIntoView({
        behavior: 'smooth'
    });
}

// Form validation and submission
document.getElementById('bookingForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Get form data
    const formData = new FormData(this);
    const data = Object.fromEntries(formData);
    
    // Basic validation
    if (!data.name || !data.email || !data.phone || !data.date || !data.passengers) {
        alert('Por favor, complete todos los campos obligatorios.');
        return;
    }
    
    // Email validation
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(data.email)) {
        alert('Por favor, ingrese un email válido.');
        return;
    }
    
    // Date validation (must be future date)
    const selectedDate = new Date(data.date);
    const today = new Date();
    if (selectedDate <= today) {
        alert('Por favor, seleccione una fecha futura.');
        return;
    }
    
    // Simulate form submission
    const submitBtn = this.querySelector('.book-btn');
    const originalText = submitBtn.innerHTML;
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Procesando...';
    submitBtn.disabled = true;
    
    setTimeout(() => {
        alert('¡Gracias por su reserva! Nos pondremos en contacto con usted pronto.');
        this.reset();
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
    }, 2000);
});

// Sticky booking sidebar
window.addEventListener('scroll', () => {
    const sidebar = document.querySelector('.booking-sidebar');
    const sidebarTop = sidebar.offsetTop;
    const scrollTop = window.pageYOffset;
    
    if (scrollTop > sidebarTop - 100) {
        sidebar.style.position = 'fixed';
        sidebar.style.top = '100px';
    } else {
        sidebar.style.position = 'static';
    }
});

// Show/hide floating button based on scroll
window.addEventListener('scroll', () => {
    const floatingBtn = document.querySelector('.floating-book-btn');
    const bookingSidebar = document.querySelector('.booking-sidebar');
    const sidebarRect = bookingSidebar.getBoundingClientRect();
    
    if (sidebarRect.top > window.innerHeight) {
        floatingBtn.style.display = 'block';
    } else {
        floatingBtn.style.display = 'none';
    }
});
</script>

@endsection