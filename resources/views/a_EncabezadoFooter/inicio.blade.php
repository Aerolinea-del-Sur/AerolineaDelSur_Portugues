@extends('a_EncabezadoFooter.princi')
@section('content')
    <link rel="stylesheet" href="{{ asset('public/css/paginas/inicio.css') }}">
    <section class="hero-section">
        <!-- Slider de imágenes de fondo -->
        <div class="hero-slider">
            <!-- PERSONALIZAR: Cambiar las URLs por las imágenes de tu empresa -->
            <div class="hero-slide active" style="background-image: url('public/img/aeronaves/aviones/Air-King-B200.webp');">
            </div>
        </div>

        <div class="hero-content">
            <h1 class="hero-title">VUELA A TU <span class="highlight">MANERA</span></h1>
            <p class="hero-subtitle">
                <!-- PERSONALIZAR: Subtítulo descriptivo -->
                Tu eliges el destino, nosotros nos encargamos de la logistica
            </p>
        </div>
    </section>

<style>
    /* ===== ESTILOS ESPECÍFICOS DE LA LANDING PAGE ===== */
        .hero-section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 80px 20px;
            position: relative;
            overflow: hidden;
        }

        /* Slider de fondo */
        .hero-slider {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
        }

        .hero-slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            transform: scale(1.1);
            transition: transform 0.1s ease-out, opacity 2s ease-in-out; /* Agregado para el movimiento */
        }

        .hero-slide.active {
            opacity: 1;
        }

        .hero-slide::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                135deg,
                rgba(28, 28, 28, 0.7) 0%,
                rgba(0, 0, 0, 0.6) 50%,
                rgba(28, 28, 28, 0.8) 100%
            );
            z-index: 1;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 2;
        }
         /* Indicadores del slider */
        .hero-indicators {
            position: absolute;
            bottom: 40px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 15px;
            z-index: 4;
        }

        .hero-indicator {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.4);
            border: 2px solid rgba(201, 162, 39, 0.6);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .hero-indicator.active {
            background: var(--accent);
            border-color: var(--accent-light);
            box-shadow: 0 0 15px rgba(201, 162, 39, 0.6);
        }

        .hero-indicator:hover {
            background: rgba(201, 162, 39, 0.7);
            transform: scale(1.2);
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 3;
            animation: fadeInUp 1s ease-out;
        }

        .hero-title {
            font-size: clamp(3rem, 8vw, 5rem);
            font-weight: 700;
            margin-bottom: 20px;
            background: linear-gradient(135deg, var(--accent) 0%, var(--accent-light) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            line-height: 1.2;
        }
        
        .hero-title .highlight {
            background: linear-gradient(135deg, var(--accent-light) 0%, var(--accent) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 800;
            text-shadow: 0 0 30px rgba(201, 162, 39, 0.5);
        }
        /* Estilos del Acordeón Diagonal */
        .destinos-accordion-section {
            width: 100%;
            height: 30em;
            background: #111;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .accordion-container {
            display: flex;
            width: 100vw;
            height: 30em;
            position: relative;
        }

        .accordion-sidebar {
            width: 450px;
            background: #222;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0 150px 0 50px;
            position: relative;
            z-index: 0;
            clip-path: polygon(0 0, 100% 0, 65% 120%, 1 125%);
        }

        .accordion-sidebar h2 {
            font-size: 28px;
            text-align: center;
            color: #fff;
        }

        .accordion-wrapper {
            flex: 1;
            position: relative;
            height: 100%;
            overflow: hidden;
            z-index: 1;
            margin-left: -250px;
            padding-left: 180px;
        }

        .accordion-skewed {
            width: 100%;
            height: 100%;
        }

        .accordion-skewed ul {
            list-style: none;
            width: 100%;
            height: 100%;
            display: flex;
            margin: 0;
            padding: 0;
        }

        .accordion-skewed li {
            flex: 1;
            height: 100%;
            transform: skew(-15deg);
            transition: all 0.6s ease;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: flex-end;
            justify-content: center;
        }

        .accordion-skewed li:nth-child(4) {
            transform: skew(0deg);
            overflow: visible;
        }

        .accordion-skewed li::before {
            content: "";
            position: absolute;
            top: 0;
            left: -25%;
            width: 160%;
            height: 100%;
            background-size: cover;
            background-position: center;
            transform: skew(360deg);
            transition: transform 0.6s ease;
            filter: brightness(0.7);
        }

        .accordion-skewed li:nth-child(1)::before {
            background-image: url('public/img/aeronaves/aviones/service/carga.png');
        }

        .accordion-skewed li:nth-child(2)::before {
            background-image: url('public/img/aeronaves/aviones/service/pjet.png');
        }

        .accordion-skewed li:nth-child(3)::before {
            background-image: url('https://images.pexels.com/photos/10146868/pexels-photo-10146868.jpeg');
        }

        .accordion-skewed li:nth-child(4)::before {
            background-image: url('https://images.unsplash.com/photo-1640338392055-509a812a494e?q=80&w=2070');
        }

        .accordion-skewed li:nth-child(3) {
            z-index: 1;
        }

        .accordion-content {
            position: relative;
            z-index: 10;
            text-align: center;
            padding: 20px;
            width: 100%;
            transform: skew(15deg) translateY(20px);
            transition: all 0.6s ease;
            opacity: 0;
        }

        .accordion-skewed li:nth-child(4) .accordion-content {
            transform: skew(0deg) translateY(20px);
        }

        .accordion-content h3 {
            font-size: 1.3rem;
            margin-bottom: 8px;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.8);
        }

        .accordion-content p {
            font-size: 0.9rem;
            color: #e0e0e0;
            line-height: 1.4;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.8);
        }

        /* Efectos Hover */
        .accordion-skewed li:hover {
            flex: 1.8;
        }

        .accordion-skewed li:hover::before {
            filter: brightness(1);
            transform: skew(360deg) scale(1.05);
        }

        .accordion-skewed li:hover .accordion-content {
            opacity: 1;
            transform: skew(15deg) translateY(0);
        }

        .accordion-skewed li:nth-child(4):hover .accordion-content {
            transform: skew(0deg) translateY(0);
        }
    </style>
    
    <!-- Tours Section -->
    <section class="tours-section">
        <div class="tours-container">
            <div class="tours-header">
                <h1>Descubre Nuestros Servicios</h1>
                <p>Embárcate en una aventura inolvidable con nuestros servicios cuidadosamente diseñados</p>
            </div>
            <!-- Sección Acordeón Diagonal de Destinos -->
    <section class="destinos-accordion-section">
        <div class="accordion-container">
            <!-- Columna fija -->
            <div class="accordion-sidebar">
                <h2>Nuestros Destinos Destacados</h2>
            </div>

            <!-- Acordeón -->
            <div class="accordion-wrapper">
                <div class="accordion-skewed">
                    <ul>
                        <li>
                            <div class="accordion-content">
                                <h3>Vuelos Chárter</h3>
                                <p>Vuelos privados personalizados, ideales para negocios, instituciones, deportes o familias que buscan flexibilidad y exclusividad.</p>
                            </div>
                        </li>
                        <li>
                            <div class="accordion-content">
                                <h3>Helicóptero</h3>
                                <p>Transporte en helicóptero rápido, flexible y seguro, ideal para personas, cargas valiosas, rescates y acceso a zonas de difícil alcance.</p>
                            </div>
                        </li>
                        <li>
                            <div class="accordion-content">
                                <h3>Ambulancia Médica</h3>
                                <p>Transporte aéreo médico especializado para pacientes, evacuaciones y traslado de órganos, con aeronaves equipadas y personal médico calificado.</p>
                            </div>
                        </li>
                        <li>
                            <div class="accordion-content">
                                <h3>Carga</h3>
                                <p>Vuelos chárter de carga, desde jets ligeros hasta aviones de gran capacidad, garantizando entregas urgentes y de gran volumen en tiempo récord.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

        </div>
    </section>
    
    <!-- Por qué elegirnos Section -->
    <section class="por-que-section">
        <div class="por-que-container">
            <div class="por-que-header">
                <h1>¿Por qué elegirnos?</h1>
                <p>Vuelos privados personalizados, ideales para negocios, instituciones, deportes o familias que buscan flexibilidad y exclusividad.</p>
                <div class="linea"></div>
            </div>
            
            <div class="por-que-grid">
                <div class="por-que-card">
                    <div class="por-que-icon">
                        <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="40" cy="40" r="35" stroke="#c9a227" stroke-width="3" fill="none"/>
                            <path d="M25 40L35 50L55 30" stroke="#c9a227" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                            <circle cx="40" cy="40" r="8" fill="#c9a227" opacity="0.3"/>
                        </svg>
                    </div>
                    <div class="por-que-content">
                        <h3>Seguridad Garantizada</h3>
                        <p>Contamos con los más altos estándares de seguridad internacional y una flota moderna con mantenimiento riguroso. Tu tranquilidad es nuestra prioridad número uno.</p>
                        <div class="por-que-features">
                            <span class="feature-tag">✓ Certificación IATA</span>
                            <span class="feature-tag">✓ Flota renovada</span>
                            <span class="feature-tag">✓ Pilotos certificados</span>
                        </div>
                    </div>
                </div>
                
                <div class="por-que-card">
                    <div class="por-que-icon">
                        <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="40" cy="40" r="35" stroke="#c9a227" stroke-width="3" fill="none"/>
                            <path d="M30 25H50C52.5 25 55 27.5 55 30V50C55 52.5 52.5 55 50 55H30C27.5 55 25 52.5 25 50V30C25 27.5 27.5 25 30 25Z" stroke="#c9a227" stroke-width="3" fill="none"/>
                            <path d="M35 35H45M35 40H45M35 45H40" stroke="#c9a227" stroke-width="2" stroke-linecap="round"/>
                            <circle cx="40" cy="40" r="12" fill="#c9a227" opacity="0.1"/>
                        </svg>
                    </div>
                    <div class="por-que-content">
                        <h3>Experiencia Personalizada</h3>
                        <p>Ofrecemos un servicio personalizado que se adapta a tus necesidades específicas. Desde la reserva hasta el destino, cada detalle está pensado para ti.</p>
                        <div class="por-que-features">
                            <span class="feature-tag">✓ Atención 24/7</span>
                            <span class="feature-tag">✓ Servicio premium</span>
                            <span class="feature-tag">✓ Flexibilidad total</span>
                        </div>
                    </div>
                </div>
                
                <div class="por-que-card">
                    <div class="por-que-icon">
                        <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="40" cy="40" r="35" stroke="#c9a227" stroke-width="3" fill="none"/>
                            <path d="M25 45C25 35 32 25 40 25C48 25 55 35 55 45" stroke="#c9a227" stroke-width="3" fill="none"/>
                            <path d="M30 50C30 47 32 45 35 45H45C48 45 50 47 50 50V55H30V50Z" stroke="#c9a227" stroke-width="3" fill="none"/>
                            <circle cx="40" cy="35" r="6" stroke="#c9a227" stroke-width="2" fill="none"/>
                            <circle cx="40" cy="40" r="15" fill="#c9a227" opacity="0.1"/>
                        </svg>
                    </div>
                    <div class="por-que-content">
                        <h3>Tradición y Confianza</h3>
                        <p>Con más de 25 años de experiencia conectando América del Sur, somos la aerolínea de confianza que ha llevado a miles de pasajeros a sus destinos soñados.</p>
                        <div class="por-que-features">
                            <span class="feature-tag">✓ 25+ años experiencia</span>
                            <span class="feature-tag">✓ Miles de vuelos</span>
                            <span class="feature-tag">✓ Reconocimiento internacional</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonios Section -->
    <section class="testimonios-section">
        <div class="testimonios-container">
            <div class="testimonios-header">
                <h1>Lo que dicen nuestros pasajeros</h1>
                <p>Experiencias reales de viajeros que han confiado en nosotros para sus aventuras por los cielos del sur.</p>
                <div class="linea"></div>
            </div>

            <div class="testimonios-grid">
                <div class="testimonio-card">
                    <div class="testimonio-rating">
                        <span class="star">★</span
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                    </div>
                    <p class="testimonio-text">"Una experiencia increíble desde el primer momento. El servicio fue excepcional y la atención al detalle impresionante. Definitivamente volaré con ellos nuevamente."</p>
                    <div class="testimonio-author">
                        <div class="author-avatar">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='60' height='60' viewBox='0 0 60 60'%3E%3Ccircle cx='30' cy='30' r='30' fill='%23c9a227'/%3E%3Ctext x='30' y='38' text-anchor='middle' fill='white' font-size='24' font-weight='bold'%3EMA%3C/text%3E%3C/svg%3E" alt="María Alejandra">
                        </div>
                        <div class="author-info">
                            <h4>María Alejandra González</h4>
                            <span>Empresaria - Lima, Perú</span>
                        </div>
                    </div>
                </div>

                <div class="testimonio-card">
                    <div class="testimonio-rating">
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                    </div>
                    <p class="testimonio-text">"Profesionalismo y seguridad en cada vuelo. La puntualidad y comodidad superaron mis expectativas. Recomiendo totalmente sus servicios."</p>
                    <div class="testimonio-author">
                        <div class="author-avatar">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='60' height='60' viewBox='0 0 60 60'%3E%3Ccircle cx='30' cy='30' r='30' fill='%23800020'/%3E%3Ctext x='30' y='38' text-anchor='middle' fill='white' font-size='24' font-weight='bold'%3ECR%3C/text%3E%3C/svg%3E" alt="Carlos Rodríguez">
                        </div>
                        <div class="author-info">
                            <h4>Carlos Rodríguez</h4>
                            <span>Arquitecto - Bogotá, Colombia</span>
                        </div>
                    </div>
                </div>

                <div class="testimonio-card">
                    <div class="testimonio-rating">
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                    </div>
                    <p class="testimonio-text">"El mejor servicio de aviación que he experimentado. Desde la reserva hasta el aterrizaje, todo fue perfecto. Un equipo verdaderamente profesional."</p>
                    <div class="testimonio-author">
                        <div class="author-avatar">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='60' height='60' viewBox='0 0 60 60'%3E%3Ccircle cx='30' cy='30' r='30' fill='%23c9a227'/%3E%3Ctext x='30' y='38' text-anchor='middle' fill='white' font-size='24' font-weight='bold'%3EAM%3C/text%3E%3C/svg%3E" alt="Ana Martínez">
                        </div>
                        <div class="author-info">
                            <h4>Ana Martínez</h4>
                            <span>Doctora - Quito, Ecuador</span>
                        </div>
                    </div>
                </div>

                <div class="testimonio-card">
                    <div class="testimonio-rating">
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                    </div>
                    <p class="testimonio-text">"Excelente atención y vuelos cómodos. La tripulación siempre amable y dispuesta a ayudar. Una experiencia de lujo a precio justo."</p>
                    <div class="testimonio-author">
                        <div class="author-avatar">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='60' height='60' viewBox='0 0 60 60'%3E%3Ccircle cx='30' cy='30' r='30' fill='%23800020'/%3E%3Ctext x='30' y='38' text-anchor='middle' fill='white' font-size='24' font-weight='bold'%3EJL%3C/text%3E%3C/svg%3E" alt="Jorge López">
                        </div>
                        <div class="author-info">
                            <h4>Jorge López</h4>
                            <span>Ingeniero - Santiago, Chile</span>
                        </div>
                    </div>
                </div>

                <div class="testimonio-card">
                    <div class="testimonio-rating">
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                    </div>
                    <p class="testimonio-text">"Seguridad y confianza en cada vuelo. Me siento tranquila sabiendo que estoy en buenas manos. El servicio personalizado hace la diferencia."</p>
                    <div class="testimonio-author">
                        <div class="author-avatar">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='60' height='60' viewBox='0 0 60 60'%3E%3Ccircle cx='30' cy='30' r='30' fill='%23c9a227'/%3E%3Ctext x='30' y='38' text-anchor='middle' fill='white' font-size='24' font-weight='bold'%3ELS%3C/text%3E%3C/svg%3E" alt="Lucía Silva">
                        </div>
                        <div class="author-info">
                            <h4>Lucía Silva</h4>
                            <span>Abogada - Caracas, Venezuela</span>
                        </div>
                    </div>
                </div>

                <div class="testimonio-card">
                    <div class="testimonio-rating">
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                    </div>
                    <p class="testimonio-text">"Una aerolínea que realmente se preocupa por sus pasajeros. Vuelos puntuales, servicio excepcional y precios competitivos. Altamente recomendado."</p>
                    <div class="testimonio-author">
                        <div class="author-avatar">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='60' height='60' viewBox='0 0 60 60'%3E%3Ccircle cx='30' cy='30' r='30' fill='%23800020'/%3E%3Ctext x='30' y='38' text-anchor='middle' fill='white' font-size='24' font-weight='bold'%3ERH%3C/text%3E%3C/svg%3E" alt="Roberto Herrera">
                        </div>
                        <div class="author-info">
                            <h4>Roberto Herrera</h4>
                            <span>Consultor - Buenos Aires, Argentina</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="testimonios-stats">
                <div class="stat-item">
                    <div class="stat-number">4.9</div>
                    <div class="stat-label">Calificación promedio</div>
                    <div class="stat-stars">
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                    </div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">2,847</div>
                    <div class="stat-label">Reseñas verificadas</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">98%</div>
                    <div class="stat-label">Clientes satisfechos</div>
                </div>
            </div>
        </div>
    </section>
    <!-- Certificaciones Section -->
    <section class="certificaciones-section">
        <div class="certificaciones-container">
            <div class="certificaciones-header">
                <h1>Certificaciones Premium</h1>
                <p>Excelencia certificada en cada vuelo. Nuestros estándares de calidad y seguridad están respaldados por las más prestigiosas organizaciones internacionales de aviación.</p>
                <div class="linea"></div>
            </div>

            <div class="certificaciones-slider">
                <div class="certificaciones-viewport">
                    <div class="certificaciones-track" id="cert-track">
                        <!-- Certificación 1 - IATA -->
                        <div class="certification-item" data-cert="iata">
                            <img src="public/img/certificados/Gercetur.webp" alt="Certificación Gercetur" title="Certificación Gercetur" data-original-src="public/img/Gercetur.webp">
                        </div>
                        <!-- Certificación 2 - ICAO -->
                        <div class="certification-item" data-cert="icao">
                            <img src="public/img/certificados/Mtc.webp" alt="Certificación Mtc" title="Certificación MTC" data-original-src="public/img/Mtc.webp">
                        </div>
                        <!-- Certificación 3 - ISO 9001 -->
                        <div class="certification-item" data-cert="iso9001">
                            <img src="public/img/certificados/Dgac.webp" alt="Certificación Dgac" title="Certificación DGAC" data-original-src="public/img/Dgac.webp">
                        </div>
                        <!-- Certificación 4 - IOSA -->
                        <div class="certification-item" data-cert="iosa">
                            <img src="public/img/certificados/Imh.webp" alt="Certificación Imh" title="Certificación Imh" data-original-src="public/img/Imh.webp">
                        </div>
                    </div>
                </div>
            </div>

            <div class="cert-pagination" id="cert-pagination">
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
    </section>
    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="faq-container">
            <div class="faq-header">
                <h1>Preguntas Frecuentes</h1>
                <p>Encuentra respuestas a las preguntas más comunes sobre nuestros servicios</p>
            </div>
            
            <div class="faq-grid">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>¿Qué servicios de aerolínea ofrecen?</h3>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Ofrecemos vuelos nacionales e internacionales con la más alta calidad de servicio. Nuestras rutas cubren las principales ciudades del país y destinos internacionales selectos, con opciones de clase económica, ejecutiva y primera clase.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>¿Cómo puedo hacer una reserva?</h3>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Puedes hacer tu reserva a través de nuestro sitio web, llamando a nuestro centro de atención al cliente, o visitando una de nuestras oficinas. También ofrecemos una aplicación móvil para reservas rápidas y gestión de vuelos.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>¿Cuál es la política de equipaje?</h3>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Permitimos equipaje de mano de hasta 8kg y equipaje facturado de hasta 23kg en clase económica. Las clases superiores tienen límites más generosos. Consulta nuestra página de políticas para detalles específicos sobre dimensiones y restricciones.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>¿Puedo cambiar o cancelar mi vuelo?</h3>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Sí, ofrecemos opciones flexibles para cambios y cancelaciones. Las políticas varían según el tipo de tarifa adquirida. Los cambios pueden estar sujetos a diferencias tarifarias y cargos administrativos según las condiciones de tu boleto.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>¿Qué medidas de seguridad implementan?</h3>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Cumplimos con todos los estándares internacionales de seguridad aérea. Nuestras aeronaves reciben mantenimiento regular certificado, nuestros pilotos tienen entrenamiento continuo, y seguimos protocolos estrictos de seguridad en tierra y vuelo.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>¿Ofrecen programas de viajero frecuente?</h3>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Sí, nuestro programa "Cielos del Sur" ofrece beneficios exclusivos como acumulación de millas, upgrades gratuitos, acceso a salas VIP, y prioridad en check-in. Únete gratis y comienza a disfrutar de privilegios desde tu primer vuelo.</p>
                    </div>
                </div>
            </div>

            <div class="contact-section">
                <h2>¿No encontraste lo que buscabas?</h2>
                <p>Nuestro equipo está aquí para ayudarte</p>
                <div class="contact-buttons">
                    <a href="tel:+1234567890" class="contact-btn call-btn">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                        Llamar Ahora
                    </a>
                </div>
            </div>
        </div>
    </section>
    <script>
    function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobileMenu');
            const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
            
            mobileMenu.classList.toggle('active');
            mobileMenuBtn.classList.toggle('active');
        }

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            const mobileMenu = document.getElementById('mobileMenu');
            const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
            
            if (!mobileMenu.contains(event.target) && !mobileMenuBtn.contains(event.target)) {
                mobileMenu.classList.remove('active');
                mobileMenuBtn.classList.remove('active');
            }
        });

        // Efecto de scroll en el encabezado
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.header');
            const scrolled = window.pageYOffset;
            
            if (scrolled > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Close mobile menu on window resize
        window.addEventListener('resize', function() {
            if (window.innerWidth > 768) {
                const mobileMenu = document.getElementById('mobileMenu');
                const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
                mobileMenu.classList.remove('active');
                mobileMenuBtn.classList.remove('active');
            }
        });

        // Footer accordion for mobile devices
        document.addEventListener('DOMContentLoaded', function() {
            const footerTitles = document.querySelectorAll('.footer-title');
            
            footerTitles.forEach(title => {
                title.addEventListener('click', function() {
                    // Solo activar en dispositivos móviles
                    if (window.innerWidth <= 480) {
                        const column = this.parentElement;
                        column.classList.toggle('active');
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

        // FAQ functionality
        document.addEventListener('DOMContentLoaded', function() {
            const faqItems = document.querySelectorAll('.faq-item');
            
            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question');
                
                question.addEventListener('click', function() {
                    const isActive = item.classList.contains('active');
                    
                    // Close all other FAQ items
                    faqItems.forEach(otherItem => {
                        if (otherItem !== item) {
                            otherItem.classList.remove('active');
                        }
                    });
                    
                    // Toggle current item
                    if (isActive) {
                        item.classList.remove('active');
                    } else {
                        item.classList.add('active');
                    }
                });
            });

            // Handle hash navigation for FAQ items
            function handleHashNavigation() {
                const hash = window.location.hash;
                if (hash && hash.startsWith('#faq-')) {
                    const faqIndex = parseInt(hash.replace('#faq-', '')) - 1;
                    if (faqIndex >= 0 && faqIndex < faqItems.length) {
                        faqItems[faqIndex].classList.add('active');
                        faqItems[faqIndex].scrollIntoView({ behavior: 'smooth', block: 'center' });
                    }
                }
            }

            // Handle hash navigation on page load and hash change
            handleHashNavigation();
            window.addEventListener('hashchange', handleHashNavigation);

            // Contact button analytics (optional)
            const contactButtons = document.querySelectorAll('.contact-btn');
            contactButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    const buttonType = this.classList.contains('whatsapp-btn') ? 'WhatsApp' : 'Phone';
                    // Add analytics tracking here if needed
                });
            });

            // Smooth scroll animation for FAQ section
            const faqSection = document.querySelector('.faq-section');
            if (faqSection) {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.style.opacity = '1';
                            entry.target.style.transform = 'translateY(0)';
                        }
                    });
                }, { threshold: 0.1 });

                faqSection.style.opacity = '0';
                faqSection.style.transform = 'translateY(20px)';
                faqSection.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(faqSection);
            }
            
            // Efecto de seguimiento del mouse en todas las imágenes del slider
            document.addEventListener('mousemove', function(e) {
                const mouseX = e.clientX;
                const mouseY = e.clientY;
                const windowWidth = window.innerWidth;
                const windowHeight = window.innerHeight;
                
                // Calcular el porcentaje de movimiento (0-100)
                const xPercent = (mouseX / windowWidth) * 100;
                const yPercent = (mouseY / windowHeight) * 100;
                
                // Aplicar el movimiento a todas las imágenes del slider
                const moveX = (xPercent - 50) * 0.6;
                const moveY = (yPercent - 50) * 0.6;
                
                // Aplicar transformación a todas las slides
                const slides = document.querySelectorAll('.hero-slide');
                slides.forEach(slide => {
                    slide.style.transform = `translate(${moveX}px, ${moveY}px) scale(1.1)`;
                });
            });
            
            // Resetear posición cuando el mouse sale de la ventana
            document.addEventListener('mouseleave', function() {
                const slides = document.querySelectorAll('.hero-slide');
                slides.forEach(slide => {
                    slide.style.transform = 'translate(0px, 0px) scale(1.1)';
                });
            });
        });
</script>

<script>
    // Slider de Certificaciones - Versión Simple
    class CertificationSlider {
        constructor() {
            this.currentSlide = 0;
            this.totalSlides = document.querySelectorAll('.certification-item').length;
            this.slidesToShow = this.getSlidesToShow();
            this.maxSlide = Math.max((0, this.totalSlides - this.slidesToShow)-1);
            this.isTransitioning = false;
            this.init();
        }

        getSlidesToShow() {
            const width = window.innerWidth;
            if (width <= 480) return 2;
            if (width <= 768) return 3;
            if (width <= 1024) return 4;
            return 5;
        }

        init() {
            this.createPagination();
            this.updateSlider();
            this.bindEvents();
        }

        createPagination() {
            const pagination = document.querySelector('.cert-pagination');
            if (!pagination) return;
            
            pagination.innerHTML = '';
            const totalPages = this.maxSlide + 1;
            
            for (let i = 0; i <= this.maxSlide; i++) {
                const dot = document.createElement('div');
                dot.className = 'dot';
                if (i === this.currentSlide) {
                    dot.classList.add('active');
                }
                dot.addEventListener('click', () => this.goToSlide(i));
                pagination.appendChild(dot);
            }
        }

        updateSlider() {
            const track = document.querySelector('.certificaciones-track');
            if (!track) return;
            
            const itemWidth = 210; // 160px + 50px margin
            const translateX = -this.currentSlide * itemWidth;
            track.style.transform = `translateX(${translateX}px)`;
            
            // Update pagination
            const dots = document.querySelectorAll('.cert-pagination .dot');
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === this.currentSlide);
            });
        }

        goToSlide(slideIndex) {
            if (this.isTransitioning) return;
            
            this.currentSlide = Math.max(0, Math.min(slideIndex, this.maxSlide));
            this.updateSlider();
        }

        nextSlide() {
            if (this.isTransitioning) return;
            
            this.isTransitioning = true;
            this.currentSlide = Math.min(this.currentSlide + 1, this.maxSlide);
            this.updateSlider();
            
            setTimeout(() => {
                this.isTransitioning = false;
            }, 400);
        }

        prevSlide() {
            if (this.isTransitioning) return;
            
            this.isTransitioning = true;
            this.currentSlide = Math.max(this.currentSlide - 1, 0);
            this.updateSlider();
            
            setTimeout(() => {
                this.isTransitioning = false;
            }, 400);
        }

        bindEvents() {
            // Handle window resize
            window.addEventListener('resize', () => {
                this.slidesToShow = this.getSlidesToShow();
                this.maxSlide = Math.max(0, this.totalSlides - this.slidesToShow);
                this.currentSlide = Math.min(this.currentSlide, this.maxSlide);
                this.createPagination();
                this.updateSlider();
            });
        }
    }

    // Slider de Tours - Versión Simple
    class ToursSlider {
        constructor() {
            this.slider = document.getElementById('tours-slider');
            this.pagination = document.getElementById('tours-pagination');
            this.cards = this.slider ? this.slider.children : [];
            this.totalCards = this.cards.length;
            this.currentIndex = 0;
            this.slidesToShow = this.getSlidesToShow();
            this.maxIndex = Math.max(0, this.totalCards - this.slidesToShow);
            this.isTransitioning = false;
            
            if (this.slider && this.totalCards > 0) {
                this.init();
            }
        }
        
        getSlidesToShow() {
            const width = window.innerWidth;
            if (width <= 480) return 1;
            if (width <= 768) return 1;
            if (width <= 1024) return 2;
            return 3;
        }
        
        init() {
            this.createPagination();
            this.updateSlider();
            this.bindEvents();
        }
        
        createPagination() {
            if (!this.pagination) return;
            
            this.pagination.innerHTML = '';
            
            for (let i = 0; i <= this.maxIndex; i++) {
                const dot = document.createElement('span');
                dot.classList.add('dot');
                if (i === this.currentIndex) {
                    dot.classList.add('active');
                }
                dot.addEventListener('click', () => this.goToSlide(i));
                this.pagination.appendChild(dot);
            }
        }
        
        updateSlider() {
            if (!this.slider || this.isTransitioning) return;
            
            // Responsive card width calculation
            const width = window.innerWidth;
            let cardWidth, margin;
            
            if (width <= 360) {
                cardWidth = 220;
                margin = 20;
            } else if (width <= 480) {
                cardWidth = 250;
                margin = 24;
            } else if (width <= 768) {
                cardWidth = 280;
                margin = 30;
            } else if (width <= 1024) {
                cardWidth = 320;
                margin = 36;
            } else if (width <= 1200) {
                cardWidth = 340;
                margin = 40;
            } else {
                cardWidth = 370;
                margin = 50;
            }
            
            const totalCardWidth = cardWidth + margin;
            const translateX = -this.currentIndex * totalCardWidth;
            this.slider.style.transform = `translateX(${translateX}px)`;
            
            // Update pagination
            const dots = this.pagination ? this.pagination.querySelectorAll('.dot') : [];
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === this.currentIndex);
            });
        }
        
        goToSlide(slideIndex) {
            if (this.isTransitioning) return;
            
            this.currentIndex = Math.max(0, Math.min(slideIndex, this.maxIndex));
            this.updateSlider();
        }
        
        nextSlide() {
            if (this.isTransitioning) return;
            
            this.isTransitioning = true;
            this.currentIndex = Math.min(this.currentIndex + 1, this.maxIndex);
            this.updateSlider();
            
            setTimeout(() => {
                this.isTransitioning = false;
            }, 600);
        }
        
        prevSlide() {
            if (this.isTransitioning) return;
            
            this.isTransitioning = true;
            this.currentIndex = Math.max(this.currentIndex - 1, 0);
            this.updateSlider();
            
            setTimeout(() => {
                this.isTransitioning = false;
            }, 600);
        }
        
        bindEvents() {
            // Handle window resize
            window.addEventListener('resize', () => {
                this.slidesToShow = this.getSlidesToShow();
                this.maxIndex = Math.max(0, this.totalCards - this.slidesToShow);
                this.currentIndex = Math.min(this.currentIndex, this.maxIndex);
                this.createPagination();
                this.updateSlider();
            });
        }
    }

    // Función para actualizar las imágenes de certificaciones
    function updateCertificationImages(imageMap) {
        Object.keys(imageMap).forEach(certKey => {
            const certItem = document.querySelector(`[data-cert="${certKey}"]`);
            if (certItem) {
                const img = certItem.querySelector('img');
                if (img && imageMap[certKey]) {
                    img.src = imageMap[certKey];
                    img.removeAttribute('data-original-src');
                }
            }
        });
    }

    // Inicializar sliders cuando el DOM esté listo
    document.addEventListener('DOMContentLoaded', function() {
        new CertificationSlider();
        new ToursSlider();
    });
        // Función para toggle de FAQ
        function toggleFAQ(button) {
            const answer = button.nextElementSibling;
            const icon = button.querySelector('.faq-icon');
            
            // Cerrar otras FAQs abiertas
            document.querySelectorAll('.faq-question').forEach(q => {
                if (q !== button) {
                    q.classList.remove('active');
                    q.nextElementSibling.classList.remove('active');
                    q.querySelector('.faq-icon').style.transform = 'rotate(0deg)';
                }
            });
            
            // Toggle FAQ actual
            button.classList.toggle('active');
            answer.classList.toggle('active');
            
            if (button.classList.contains('active')) {
                icon.style.transform = 'rotate(45deg)';
            } else {
                icon.style.transform = 'rotate(0deg)';
            }
        }

        // Animaciones al hacer scroll
        function animateOnScroll() {
            const elements = document.querySelectorAll('.animate-on-scroll');
            
            elements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const elementVisible = 150;
                
                if (elementTop < window.innerHeight - elementVisible) {
                    element.classList.add('animate');
                }
            });
        }

        // Event listeners
        window.addEventListener('scroll', animateOnScroll);
        window.addEventListener('load', animateOnScroll);

        // Smooth scroll para enlaces internos
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

        // Efecto parallax suave para el hero
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const heroSlider = document.querySelector('.hero-slider');
            if (heroSlider) {
                heroSlider.style.transform = `translateY(${scrolled * 0.3}px)`;
            }
        });
</script>
@endsection