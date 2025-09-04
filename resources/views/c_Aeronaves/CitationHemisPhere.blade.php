@extends('a_EncabezadoFooter.princi')
@section('content')
    <link rel="stylesheet" href="{{ asset('public/css/paginas/aeronaves/FlotaAvion.css') }}">
    <script>
        // Configurar clase body para imagen de portada específica
        document.addEventListener('DOMContentLoaded', function() {
            document.body.classList.add('CitationHemisPhere');
        });
    </script>
    <div class="page-wrapper">
<!-- Encabezado Tradicional Elegante -->
        <!-- Citation Hemisphere -->
<div class="page-wrapper">
        <!-- Encabezado Tradicional Elegante -->
        <header class="traditional-header">
            <div class="header-overlay"></div>
            <div class="decorative-border-top"></div>
            <div class="header-content">
                <div class="header-left-panel">
                    <div class="aircraft-title-section-enhanced">
                        <div class="title-prefix">Conoce el</div>
                        <h1 class="aircraft-model-enhanced">
                            <span class="model-number">Citation Hemisphere</span>
                            <span class="model-variant">Proyecto Suspendido</span>
                        </h1>
                        <div class="title-ornament-enhanced">
                            <span class="ornament-center">
                                <span class="ornament-line"></span>
                                <span class="ornament-diamond">◆</span>
                                <span class="ornament-line"></span>
                            </span>
                        </div>
                        <p class="aircraft-description-enhanced">El Jet Más Ambicioso de Citation</p>
                        <div class="subtitle-ornament">
                            <span class="subtitle-text">Aerolinea del Sur</span>
                        </div>
                    </div>
                    
                    <div class="aircraft-credentials-enhanced">
                        <div class="credentials-frame">
                            <div class="credential-item-enhanced">
                                <div class="credential-icon"><i class="fas fa-certificate"></i></div>
                                <div class="credential-content">
                                    <span class="credential-label">Velocidad Max</span>
                                    <span class="credential-value">1,050 km/h</span>
                                </div>
                            </div>
                            <div class="credential-divider"></div>
                            <div class="credential-item-enhanced">
                                <div class="credential-icon"><i class="fas fa-calendar-alt"></i></div>
                                <div class="credential-content">
                                    <span class="credential-label">Peso Max</span>
                                    <span class="credential-value">18,000-19,000 kg</span>
                                </div>
                            </div>
                            <div class="credential-divider"></div>
                            <div class="credential-item-enhanced">
                                <div class="credential-icon"><i class="fas fa-id-card"></i></div>
                                <div class="credential-content">
                                    <span class="credential-label">Pasajeros</span>
                                    <span class="credential-value">hasta 19 pax</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-right-panel">
                    <!-- Espacio para el fondo y el avión -->
                </div>
            </div>
            <div class="decorative-border-bottom"></div>
        </header>
    </div>

    <!-- Main Content -->
    <div class="main-wrapper">
        <!-- Content Area -->
        <main class="aircraft-content">
            <div class="container">
                <!-- Descripción -->
                <section class="aircraft-description">
                    <h2 class="section-title">Descripción del Avión</h2>
                    <p class="description-text">
                        El Citation Hemisphere fue concebido como el jet más grande de la familia Citation, en la categoría de largo alcance. Diseñado para ofrecer comodidad superior en vuelos intercontinentales, incluiría una cabina amplia y tecnología de última generación, con alcance cercano a 8 300 km.
                    </p>
                    <p class="description-text">
                        <strong>Autonomía Máxima:</strong> ~8 300 km (4 500 nm)
                    </p>
                    <div class="project-status-notice">
                        <div class="status-icon"><i class="fas fa-exclamation-triangle"></i></div>
                        <div class="status-content">
                            <h4>Estado del Proyecto</h4>
                            <p>Este proyecto fue suspendido indefinidamente en 2019 debido a retrasos en el desarrollo de los motores Safran Silvercrest.</p>
                        </div>
                    </div>
                </section>

                <!-- Nueva Galería de Imágenes -->
                <section class="aircraft-gallery">
                    <h2 class="section-title">Galería de Imágenes Conceptuales</h2>
                    <div class="new-carousel-wrapper">
                        <div class="new-carousel-container">
                            <div class="new-carousel-track">
                                <div class="new-carousel-slide current-slide">
                                    <img src="{{ asset('public/img/aeronaves/aviones/CitationHemisPhere-1.webp') }}" alt="Citation Hemisphere Concepto Exterior" class="carousel-image">
                                </div>
                                <div class="new-carousel-slide">
                                    <img src="{{ asset('public/img/aeronaves/aviones/CitationHemisPhere-2.webp') }}" alt="Citation Hemisphere Cabina Conceptual" class="carousel-image">
                                </div>
                                <div class="new-carousel-slide">
                                    <img src="{{ asset('public/img/aeronaves/aviones/CitationHemisPhere-3.webp') }}" alt="Citation Hemisphere Diseño Interior" class="carousel-image">
                                </div>
                                <div class="new-carousel-slide">
                                    <img src="{{ asset('public/img/aeronaves/aviones/CitationHemisPhere-4.webp') }}" alt="Citation Hemisphere Prototipo" class="carousel-image">
                                </div>
                            </div>
                        </div>
                        
                        <!-- Controles de navegación -->
                        <button class="new-carousel-btn new-carousel-btn--left" id="prevBtn">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="new-carousel-btn new-carousel-btn--right" id="nextBtn">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                        
                        <!-- Indicadores -->
                        <div class="new-carousel-nav">
                            <button class="new-carousel-indicator current-indicator" data-slide="0"></button>
                            <button class="new-carousel-indicator" data-slide="1"></button>
                            <button class="new-carousel-indicator" data-slide="2"></button>
                            <button class="new-carousel-indicator" data-slide="3"></button>
                        </div>
                    </div>
                </section>

                <!-- Descripción General -->
                <section class="aircraft-overview">
                    <h2 class="section-title">Descripción General</h2>
                    <div class="description-paragraphs">
                        <p class="description-text">
                            El Cessna Citation Hemisphere fue presentado en 2015 por Textron Aviation como el proyecto más ambicioso de la serie Citation, apuntando al segmento de jets ejecutivos de gran cabina y largo alcance. La aeronave estaba diseñada para competir con modelos como el Gulfstream G500 y Dassault Falcon 5X, ofreciendo un diseño de cabina de hasta 3 metros de ancho y gran autonomía.
                        </p>
                        <p class="description-text">
                            Impulsado por motores Safran Silvercrest y con aviónica avanzada Honeywell Primus Epic, el Hemisphere prometía un rendimiento de alta eficiencia y confort de clase superior. Sin embargo, debido a retrasos en el desarrollo de los motores, el programa fue suspendido indefinidamente en 2019, por lo que nunca llegó a entrar en producción.
                        </p>
                    </div>
                    
                    <div class="overview-grid">
                        <div class="overview-item">
                            <i class="fas fa-plane"></i>
                            <h3>Modelo</h3>
                            <p>Cessna Citation Hemisphere</p>
                        </div>
                        <div class="overview-item">
                            <i class="fas fa-calendar-alt"></i>
                            <h3>Año de Diseño</h3>
                            <p>Presentado en 2015, suspendido en 2019</p>
                        </div>
                        <div class="overview-item">
                            <i class="fas fa-cogs"></i>
                            <h3>Fabricante</h3>
                            <p>Cessna Aircraft Company (Textron Aviation, EE.UU.)</p>
                        </div>
                    </div>
                </section>

                <!-- Datos Técnicos -->
                <section class="aircraft-performance">
                    <h2 class="section-title">Datos Técnicos (Diseño Proyectado)</h2>
                    <div class="performance-grid">
                        <div class="performance-item">
                            <div class="performance-icon">
                                <i class="fas fa-tachometer-alt"></i>
                            </div>
                            <div class="performance-info">
                                <h3>Velocidad Máxima</h3>
                                <p>~1,050 km/h (Mach 0.9)</p>
                            </div>
                        </div>
                        <div class="performance-item">
                            <div class="performance-icon">
                                <i class="fas fa-route"></i>
                            </div>
                            <div class="performance-info">
                                <h3>Alcance Máximo</h3>
                                <p>~8,300 km (4,500 nm)</p>
                            </div>
                        </div>
                        <div class="performance-item">
                            <div class="performance-icon">
                                <i class="fas fa-mountain"></i>
                            </div>
                            <div class="performance-info">
                                <h3>Altitud de Crucero</h3>
                                <p>~13,700 m (45,000 ft)</p>
                            </div>
                        </div>
                        <div class="performance-item">
                            <div class="performance-icon">
                                <i class="fas fa-gas-pump"></i>
                            </div>
                            <div class="performance-info">
                                <h3>Consumo de Combustible</h3>
                                <p>No disponible (programa cancelado)</p>
                            </div>
                        </div>
                        <div class="performance-item">
                            <div class="performance-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="performance-info">
                                <h3>Rango de Alcance</h3>
                                <p>~8–9 horas</p>
                            </div>
                        </div>
                        <div class="performance-item">
                            <div class="performance-icon">
                                <i class="fas fa-ruler"></i>
                            </div>
                            <div class="performance-info">
                                <h3>Longitud del Avión</h3>
                                <p>~23–24 m (estimada)</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Capacidad -->
                <section class="aircraft-capacity">
                    <h2 class="section-title">Capacidad (Diseño Proyectado)</h2>
                    <div class="capacity-layout">
                        <div class="capacity-info">
                            <div class="capacity-item">
                                <i class="fas fa-users"></i>
                                <div>
                                    <h3>Capacidad</h3>
                                    <p>2 tripulantes + hasta 19 pasajeros (típicamente 12–15)</p>
                                </div>
                            </div>
                            <div class="capacity-item">
                                <i class="fas fa-cog"></i>
                                <div>
                                    <h3>Pasajeros Máximo</h3>
                                    <p>Hasta 19 pasajeros</p>
                                </div>
                            </div>
                            <div class="capacity-item">
                                <i class="fas fa-suitcase"></i>
                                <div>
                                    <h3>Capacidad de Carga</h3>
                                    <p>No especificada públicamente</p>
                                </div>
                            </div>
                            <div class="capacity-item">
                                <i class="fas fa-weight"></i>
                                <div>
                                    <h3>Peso Máximo (MTOW)</h3>
                                    <p>18,000 – 19,000 kg (estimado)</p>
                                </div>
                            </div>
                        </div>
                        <div class="seating-diagram">
                            <img src="{{ asset('public/img/aeronaves/aviones/CitationHemisPhere.webp') }}" alt="Citation Hemisphere Concepto" style="width: 100%; height: 100%; border-radius: 10px; object-fit: cover;">
                        </div>
                    </div>
                </section>

                <!-- Información del Proyecto -->
                <section class="aircraft-operations">
                    <h2 class="section-title">Historia del Proyecto</h2>
                    <div class="operations-content">
                        <div class="operations-text">
                            <p>El Citation Hemisphere representaba la visión más ambiciosa de Cessna para competir en el segmento de jets ejecutivos de largo alcance, pero enfrentó desafíos técnicos que llevaron a su suspensión.</p>
                        </div>
                        <div class="routes-grid">
                            <div class="route-item">
                                <i class="fas fa-calendar-check"></i>
                                <h3>Cronología del Proyecto</h3>
                                <ul>
                                    <li>2015: Presentación oficial</li>
                                    <li>2016-2018: Desarrollo y pruebas</li>
                                    <li>2019: Suspensión indefinida</li>
                                    <li>Motivo: Retrasos en motores Safran</li>
                                </ul>
                            </div>
                            <div class="route-item">
                                <i class="fas fa-trophy"></i>
                                <h3>Características Proyectadas</h3>
                                <ul>
                                    <li>Cabina de hasta 3 metros de ancho</li>
                                    <li>Competidor del Gulfstream G500</li>
                                    <li>Aviónica Honeywell Primus Epic</li>
                                    <li>Motores Safran Silvercrest</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>

        <!-- Formulario Sticky -->
        <aside class="sticky-form">
            <div class="form-container">
                <h3>Información del Proyecto</h3>
                <div class="project-info-card">
                    <div class="info-item">
                        <i class="fas fa-info-circle"></i>
                        <div>
                            <h4>Estado Actual</h4>
                            <p>Proyecto suspendido indefinidamente desde 2019</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-calendar-times"></i>
                        <div>
                            <h4>Motivo de Suspensión</h4>
                            <p>Retrasos en el desarrollo de los motores Safran Silvercrest</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-lightbulb"></i>
                        <div>
                            <h4>Legado</h4>
                            <p>Representó la visión más ambiciosa de la familia Citation</p>
                        </div>
                    </div>
                </div>
                
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <span>+51 944 055 408</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>contacto@aerolineadelsur.com.pe</span>
                    </div>
                </div>
            </div>
        </aside>
    </div>
    
    <style>
    .project-status-notice {
        background: linear-gradient(135deg, #f39c12, #e67e22);
        border-radius: 12px;
        padding: 20px;
        margin: 20px 0;
        display: flex;
        align-items: center;
        gap: 15px;
        color: white;
        box-shadow: 0 4px 15px rgba(243, 156, 18, 0.3);
    }
    
    .status-icon {
        font-size: 2rem;
        opacity: 0.9;
    }
    
    .status-content h4 {
        margin: 0 0 8px 0;
        font-size: 1.2rem;
        font-weight: 600;
    }
    
    .status-content p {
        margin: 0;
        opacity: 0.95;
        line-height: 1.4;
    }
    
    .project-info-card {
        background: rgba(255, 255, 255, 0.1);
        border-radius: 12px;
        padding: 20px;
        margin-bottom: 20px;
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }
    
    .info-item {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        margin-bottom: 15px;
        padding-bottom: 15px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .info-item:last-child {
        margin-bottom: 0;
        padding-bottom: 0;
        border-bottom: none;
    }
    
    .info-item i {
        color: #f39c12;
        font-size: 1.2rem;
        margin-top: 2px;
    }
    
    .info-item h4 {
        margin: 0 0 5px 0;
        color: #fff;
        font-size: 1rem;
        font-weight: 600;
    }
    
    .info-item p {
        margin: 0;
        color: rgba(255, 255, 255, 0.8);
        font-size: 0.9rem;
        line-height: 1.4;
    }
    </style>
    </div>
    </div>
    </div>
@endsection