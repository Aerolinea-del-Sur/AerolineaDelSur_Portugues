@extends('a_EncabezadoFooter.princi')
@section('content')
    <link rel="stylesheet" href="{{ asset('public/css/Flota.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/DetalleFlota.css') }}">

    <!-- Encabezado de la página -->
    <header class="fleet-header">
        <div class="container">
            <h1 class="fleet-title">Aeronaves</h1>
            <p class="fleet-subtitle">Conozca nuestra moderna flota de aeronaves</p>
        </div>
    </header>
    
    <!-- Sección de Flota Aérea -->
    <section class="fleet-section">
        <div class="container">
            <div class="fleet-filter">
                <h2 class="filter-title">Nuestras Aeronaves</h2>
                <div class="filter-buttons">
                    <button class="filter-btn active" data-filter="all">Todos</button>
                    <button class="filter-btn" data-filter="transport">Transporte</button>
                    <button class="filter-btn" data-filter="cargo">Carga</button>
                    <button class="filter-btn" data-filter="medical">Emergencia Médica</button>
                </div>
            </div>
            
            <div class="fleet-grid">
                <!-- Fila 1 -->
                <div class="aircraft-card">
                    <div class="aircraft-image" style="background-image: url('public/img/King-Air-B200.webp')">

                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p>Capacidad: 10 pax</p>
                                <p>Velocidad: 545 km/h</p>
                                <p>Peso Max: 5,670 kg</p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name">King Air B200</h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                    </div>
                </div>
                
                <div class="aircraft-card">
                    <div class="aircraft-image" style="background-image: url('public/img//Beechcraft-1900D.webp')">

                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p>Capacidad: 19 pax</p>
                                <p>Velocidad: 519 km/h</p>
                                <p>Peso Max: 2,776 kg</p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name">Beechcraft 1900D</h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                    </div>
                </div>
                
                <div class="aircraft-card">
                    <div class="aircraft-image" style="background-image: url('public/img//Cessna-Citation.webp')">

                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p>Capacidad: 8 pax</p>
                                <p>Velocidad: 1,127 km/h</p>
                                <p>Peso Max: 16,602 kg</p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name">Cessna Citation</h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                    </div>
                </div>
                
                <div class="aircraft-card">
                    <div class="aircraft-image" style="background-image: url('public/img//Antonov-AN32.webp')">

                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p>Capacidad: 50 pax</p>
                                <p>Velocidad: 530 km/h</p>
                                <p>Peso Max: 27,029 kg</p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name">Antonov AN-32</h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                    </div>
                </div>
                
                <!-- Fila 2 -->
                <div class="aircraft-card">
                    <div class="aircraft-image" style="background-image: url('https://via.placeholder.com/300x200/1C1C1C/C9A227?text=Boeing+747')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p>Capacidad de carga: 132 toneladas</p>
                                <p>Velocidad: 920 km/h</p>
                                <p>Alcance: 8,130 km</p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name">Boeing 747-8F</h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type cargo">Carga</span>
                        </div>
                    </div>
                </div>
                
                <div class="aircraft-card">
                    <div class="aircraft-image" style="background-image: url('https://via.placeholder.com/300x200/1C1C1C/C9A227?text=Airbus+A330')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p>Capacidad de carga: 70 toneladas</p>
                                <p>Velocidad: 871 km/h</p>
                                <p>Alcance: 7,400 km</p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name">Airbus A330-200F</h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type cargo">Carga</span>
                        </div>
                    </div>
                </div>
                
                <div class="aircraft-card">
                    <div class="aircraft-image" style="background-image: url('https://via.placeholder.com/300x200/1C1C1C/C9A227?text=MD-11F')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p>Capacidad de carga: 91.5 toneladas</p>
                                <p>Velocidad: 876 km/h</p>
                                <p>Alcance: 7,242 km</p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name">McDonnell Douglas MD-11F</h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type cargo">Carga</span>
                        </div>
                    </div>
                </div>
                
                <div class="aircraft-card">
                    <div class="aircraft-image" style="background-image: url('https://via.placeholder.com/300x200/1C1C1C/C9A227?text=Boeing+767')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p>Capacidad: 24 pax</p>
                                <p>Velocidad: 850 km/h</p>
                                <p>Alcance: 6,025 km</p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name">Boeing 767-300ER</h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                            <span class="aircraft-type cargo">Carga</span>
                        </div>
                    </div>
                </div>
                
                <!-- Fila 3 -->
                <div class="aircraft-card">
                    <div class="aircraft-image" style="background-image: url('https://via.placeholder.com/300x200/1C1C1C/C9A227?text=Cessna+Citation')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p>Capacidad: 8 pax</p>
                                <p>Velocidad: 972 km/h</p>
                                <p>Alcance: 5,686 km</p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name">Cessna Citation X</h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                            <span class="aircraft-type medical">Emergencia Médica</span>
                        </div>
                    </div>
                </div>
                
                <div class="aircraft-card">
                    <div class="aircraft-image" style="background-image: url('https://via.placeholder.com/300x200/1C1C1C/C9A227?text=Learjet+45')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p>Capacidad: 9 pax</p>
                                <p>Velocidad: 860 km/h</p>
                                <p>Alcance: 3,700 km</p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name">Learjet 45</h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type medical">Emergencia Médica</span>
                        </div>
                    </div>
                </div>
                
                <div class="aircraft-card">
                    <div class="aircraft-image" style="background-image: url('https://via.placeholder.com/300x200/1C1C1C/C9A227?text=Bell+429')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p>Capacidad: 7 pax</p>
                                <p>Velocidad: 278 km/h</p>
                                <p>Alcance: 761 km</p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name">Bell 429 GlobalRanger</h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type medical">Emergencia Médica</span>
                        </div>
                    </div>
                </div>
                
                <div class="aircraft-card">
                    <div class="aircraft-image" style="background-image: url('https://via.placeholder.com/300x200/1C1C1C/C9A227?text=Airbus+H145')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p>Capacidad: 9 pax</p>
                                <p>Velocidad: 240 km/h</p>
                                <p>Alcance: 680 km</p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name">Airbus H145</h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type medical">Emergencia Médica</span>
                        </div>
                    </div>
                </div>
                
                <!-- Fila 4 -->
                <div class="aircraft-card">
                    <div class="aircraft-image" style="background-image: url('https://via.placeholder.com/300x200/1C1C1C/C9A227?text=Embraer+E190')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p>Capacidad: 14 pax</p>
                                <p>Velocidad: 870 km/h</p>
                                <p>Alcance: 4,500 km</p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name">Embraer E190-E2</h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                    </div>
                </div>
                
                <div class="aircraft-card">
                    <div class="aircraft-image" style="background-image: url('https://via.placeholder.com/300x200/1C1C1C/C9A227?text=ATR+72')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p>Capacidad: 17 pax</p>
                                <p>Velocidad: 510 km/h</p>
                                <p>Alcance: 1,528 km</p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name">ATR 72-600</h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                            <span class="aircraft-type cargo">Carga</span>
                        </div>
                    </div>
                </div>
                
                <div class="aircraft-card">
                    <div class="aircraft-image" style="background-image: url('https://via.placeholder.com/300x200/1C1C1C/C9A227?text=Antonov+An-124')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p>Capacidad de carga: 150 toneladas</p>
                                <p>Velocidad: 800 km/h</p>
                                <p>Alcance: 5,400 km</p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name">Antonov An-124</h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type cargo">Carga</span>
                        </div>
                    </div>
                </div>
                
                <div class="aircraft-card">
                    <div class="aircraft-image" style="background-image: url('https://via.placeholder.com/300x200/1C1C1C/C9A227?text=Sikorsky+S-92')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p>Capacidad: 19 pax</p>
                                <p>Velocidad: 306 km/h</p>
                                <p>Alcance: 1,260 km</p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name">Sikorsky S-92</h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                            <span class="aircraft-type medical">Emergencia Médica</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Paginación -->
            <div class="pagination">
                <a href="#" class="page-link active">1</a>
                <a href="#" class="page-link">2</a>
                <a href="#" class="page-link">3</a>
                <a href="#" class="page-link">4</a>
                <a href="#" class="page-link">5</a>
            </div>
        </div>
    </section>

    <!-- Modal de Detalle de Avión -->
    <div class="modal-overlay" id="aircraftModal">
        <div class="modal-container">
            <button class="modal-close" id="modalClose">
                <i class="fas fa-times"></i>
            </button>
            <div class="modal-content">
                <div class="aircraft-details-left">
                    <div class="aircraft-modal-image" id="modalImage"></div>
                    <h2 class="aircraft-modal-title" id="modalTitle">Boeing 737-800</h2>
                    <div class="aircraft-modal-types" id="modalTypes">
                        <span class="aircraft-modal-type transport">Transporte</span>
                    </div>
                    <p class="aircraft-description" id="modalDescription">
                        El Boeing 737-800 es una aeronave comercial de fuselaje estrecho, parte de la familia Boeing 737 Next Generation. 
                        Diseñado para rutas de corto a medio alcance, ofrece una excelente eficiencia de combustible y confiabilidad operacional.
                    </p>
                    <div class="aircraft-specs">
                        <h3 class="specs-title">
                            <div class="aircraft-icon">
                                <i class="fas fa-cogs"></i>
                            </div>
                            Especificaciones Técnicas
                        </h3>
                        <div class="specs-grid" id="modalSpecs">
                            <div class="spec-item">
                                <span class="spec-label">Capacidad</span>
                                <span class="spec-value">18 pax</span>
                            </div>
                            <div class="spec-item">
                                <span class="spec-label">Velocidad</span>
                                <span class="spec-value">850 km/h</span>
                            </div>
                            <div class="spec-item">
                                <span class="spec-label">Alcance</span>
                                <span class="spec-value">5,700 km</span>
                            </div>
                            <div class="spec-item">
                                <span class="spec-label">Altitud</span>
                                <span class="spec-value">12,500 m</span>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="more-info-btn" id="moreInfoBtn">Más información</a>
                </div>
                <div class="aircraft-contact-form">
                    <h3 class="form-title">Solicita tu cotización</h3>
                    <form id="aircraftContactForm">
                        <div class="form-group">
                            <input type="text" class="form-input" id="fullName" name="fullName" placeholder="Nombre Completo" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" id="email" name="email" placeholder="Correo Electrónico" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-input" id="phone" name="phone" placeholder="Número de Teléfono" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" id="aircraftInterest" name="aircraftInterest" placeholder="Nombre del Avión (No se modifica)" readonly>
                        </div>
                        <div class="form-group">
                            <select class="form-select" id="country" name="country" required>
                                <option value="">País</option>
                                <option value="argentina">Argentina</option>
                                <option value="bolivia">Bolivia</option>
                                <option value="brasil">Brasil</option>
                                <option value="chile">Chile</option>
                                <option value="colombia">Colombia</option>
                                <option value="ecuador">Ecuador</option>
                                <option value="paraguay">Paraguay</option>
                                <option value="peru">Perú</option>
                                <option value="uruguay">Uruguay</option>
                                <option value="venezuela">Venezuela</option>
                                <option value="otro">Otro</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="departureDate" class="form-label">Fecha de ida</label>
                            <input type="date" class="form-input" id="departureDate" name="departureDate" placeholder="Fecha de ida" required>
                        </div>
                        <div class="form-group">
                            <div class="checkbox-group">
                                <input type="checkbox" id="enableReturnDate" name="enableReturnDate" class="form-checkbox">
                                <label for="enableReturnDate" class="checkbox-label">Incluir fecha de retorno</label>
                            </div>
                        </div>
                        <div class="form-group" id="returnDateGroup" style="display: none;">
                            <label for="returnDate" class="form-label">Fecha de retorno</label>
                            <input type="date" class="form-input" id="returnDate" name="returnDate" placeholder="Fecha de retorno">
                        </div>
                        <div class="form-group">
                            <textarea class="form-textarea" id="message" name="message" placeholder="¿Tienes alguna consulta? (Opcional)"></textarea>
                        </div>
                        <button type="submit" class="form-submit">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        // JavaScript para la página de Flota Aérea

// Datos de los aviones
const aircraftData = {
    'King Air B200': {
        image: 'public/img/King-Air-B200.webp',
        types: ['transport'],
        description: 'El King Air B200 es una aeronave comercial reconocido mundialmente por su versatilidad, fiabilidad y capacidad de operar en pistas cortas y no preparadas, lo que lo convierte en un favorito tanto para aviación ejecutiva, aerolíneas regionales, transporte médico (ambulancia aérea) y operaciones militares.',
        specs: {
            'Capacidad': '10 pax',
            'Velocidad': '545 km/h',
            'Peso': '5,670 km',
            'Atonomía': '3,440 km'
        },
        infoUrl: 'KingAir200.blade.html'
    },
    'Beechcraft 1900D': {
        image: 'public/img/Beechcraft-1900D.webp',
        types: ['transport'],
        description: 'El Beechcraft 1900D es una aeronave comercial, su estructura robusta, excelente capacidad de ascenso y eficiencia operativa la convierten en una opción ideal para vuelos chárter o traslados ejecutivos en zonas de difícil acceso, como la selva o la sierra peruana.',
        specs: {
            'Capacidad': '19 pax',
            'Velocidad': '519 km/h',
            'Peso': '7,766 km',
            'Atonomía': '2,776 km'
        },
        infoUrl: 'https://tb4.d81.mytemp.website/beechcraft1900d'
    },
    'Cessna Citation': {
        image: 'public/img/Cessna-Citation.webp',
        types: ['transport'],
        description: 'El Citation combina prestaciones de velocidad, alcance y lujo, con una cabina amplia para 8 pasajeros, interiores de alta gama y tecnología avanzada de navegación y seguridad.',
        specs: {
            'Capacidad': '8 pax',
            'Velocidad': '1,127 km/h',
            'Peso': '16,602 kg',
            'Atonomía': '6,386 km'
        },
        infoUrl: 'https://tb4.d81.mytemp.website/cessna-citation'
    },
    'Antonov AN-32': {
        image: 'public/img/Antonov-AN32.webp',
        types: ['transport'],
        description: 'El Antonov AN-32 es un avión de transporte táctico, bimotor y de alta gama, diseñado para operar en condiciones exigentes, como altas temperaturas y altitudes elevadas, lo que lo hace ideal para regiones montañosas.',
        specs: {
            'Capacidad': '50 pax',
            'Velocidad': '530 km/h',
            'Peso': '27,029 km',
            'Atonomía': '2,000 km'
        },
        infoUrl: 'https://tb4.d81.mytemp.website/antonov-an32'
    },
    'Boeing 747-8F': {
        image: 'https://via.placeholder.com/300x200/1C1C1C/C9A227?text=Boeing+747',
        types: ['cargo'],
        description: 'El Boeing 747-8F es la versión carguera del icónico Boeing 747, diseñada específicamente para el transporte de carga. Ofrece la mayor capacidad de carga de su clase y eficiencia operacional excepcional.',
        specs: {
            'Carga': '29 ton',
            'Velocidad': '920 km/h',
            'Alcance': '8,130 km',
            'Altitud': '13,100 m'
        },
        infoUrl: 'https://tb4.d81.mytemp.website/boeing-747-8f'
    },
    'Airbus A330-200F': {
        image: 'https://via.placeholder.com/300x200/1C1C1C/C9A227?text=Airbus+A330',
        types: ['cargo'],
        description: 'El Airbus A330-200F es una aeronave carguera de fuselaje ancho, optimizada para el transporte eficiente de mercancías en rutas de medio y largo alcance.',
        specs: {
            'Carga': '70 ton',
            'Velocidad': '871 km/h',
            'Alcance': '7,400 km',
            'Altitud': '12,500 m'
        },
        infoUrl: 'https://tb4.d81.mytemp.website/airbus-a330-200f'
    },
    'McDonnell Douglas MD-11F': {
        image: 'https://via.placeholder.com/300x200/1C1C1C/C9A227?text=MD-11F',
        types: ['cargo'],
        description: 'El McDonnell Douglas MD-11F es una aeronave carguera de largo alcance, conocida por su eficiencia en el transporte de mercancías pesadas.',
        specs: {
            'Carga': '91.5 ton',
            'Velocidad': '876 km/h',
            'Alcance': '7,242 km',
            'Altitud': '12,500 m'
        },
        infoUrl: 'https://tb4.d81.mytemp.website/md-11f'
    },
    'Boeing 767-300ER': {
        image: 'https://via.placeholder.com/300x200/1C1C1C/C9A227?text=Boeing+767',
        types: ['transport'],
        description: 'El Boeing 767-300ER es una aeronave de fuselaje ancho ideal para rutas de medio y largo alcance con excelente eficiencia de combustible.',
        specs: {
            'Capacidad': '269 pax',
            'Velocidad': '851 km/h',
            'Alcance': '11,070 km',
            'Altitud': '13,100 m'
        },
        infoUrl: 'https://tb4.d81.mytemp.website/boeing-767-300er'
    },
    'Cessna Citation X': {
        image: 'https://via.placeholder.com/300x200/1C1C1C/C9A227?text=Citation+X',
        types: ['transport'],
        description: 'El Cessna Citation X es uno de los jets ejecutivos más rápidos del mundo, diseñado para vuelos de alta velocidad y largo alcance.',
        specs: {
            'Capacidad': '12 pax',
            'Velocidad': '972 km/h',
            'Alcance': '6,019 km',
            'Altitud': '15,545 m'
        },
        infoUrl: 'https://tb4.d81.mytemp.website/cessna-citation-x'
    },
    'Learjet 45': {
        image: 'https://via.placeholder.com/300x200/1C1C1C/C9A227?text=Learjet+45',
        types: ['transport'],
        description: 'El Learjet 45 es un jet ejecutivo de tamaño medio, conocido por su velocidad, alcance y cabina espaciosa.',
        specs: {
            'Capacidad': '9 pax',
            'Velocidad': '859 km/h',
            'Alcance': '3,706 km',
            'Altitud': '15,545 m'
        },
        infoUrl: 'https://tb4.d81.mytemp.website/learjet-45'
    },
    'Bell 429 GlobalRanger': {
        image: 'https://via.placeholder.com/300x200/1C1C1C/C9A227?text=Bell+429',
        types: ['medical'],
        description: 'El Bell 429 GlobalRanger es un helicóptero multiuso ideal para servicios médicos de emergencia y transporte ejecutivo.',
        specs: {
            'Capacidad': '7 pax',
            'Velocidad': '278 km/h',
            'Alcance': '761 km',
            'Altitud': '6,096 m'
        },
        infoUrl: 'https://tb4.d81.mytemp.website/bell-429'
    },
    'Airbus H145': {
        image: 'https://via.placeholder.com/300x200/1C1C1C/C9A227?text=Airbus+H145',
        types: ['medical'],
        description: 'El Airbus H145 es un helicóptero bimotor versátil, ideal para misiones médicas de emergencia y transporte VIP.',
        specs: {
            'Capacidad': '9 pax',
            'Velocidad': '240 km/h',
            'Alcance': '680 km',
            'Altitud': '6,000 m'
        },
        infoUrl: 'https://tb4.d81.mytemp.website/airbus-h145'
    },
    'Embraer E190-E2': {
        image: 'https://via.placeholder.com/300x200/1C1C1C/C9A227?text=Embraer+E190',
        types: ['transport'],
        description: 'El Embraer E190-E2 es una aeronave comercial regional de nueva generación con tecnología avanzada y eficiencia excepcional.',
        specs: {
            'Capacidad': '114 pax',
            'Velocidad': '870 km/h',
            'Alcance': '4,500 km',
            'Altitud': '12,500 m'
        },
        infoUrl: 'https://tb4.d81.mytemp.website/embraer-e190-e2'
    },
    'ATR 72-600': {
        image: 'https://via.placeholder.com/300x200/1C1C1C/C9A227?text=ATR+72',
        types: ['transport', 'cargo'],
        description: 'El ATR 72-600 es una aeronave turbohélice regional eficiente, ideal para rutas cortas y medianas con excelente economía operacional.',
        specs: {
            'Capacidad': '78 pax',
            'Velocidad': '510 km/h',
            'Alcance': '1,528 km',
            'Altitud': '7,620 m'
        },
        infoUrl: 'https://tb4.d81.mytemp.website/atr-72-600'
    },
    'Antonov An-124': {
        image: 'https://via.placeholder.com/300x200/1C1C1C/C9A227?text=Antonov+An-124',
        types: ['cargo'],
        description: 'El Antonov An-124 es una de las aeronaves de carga más grandes del mundo, capaz de transportar cargas excepcionales.',
        specs: {
            'Carga': '150 ton',
            'Velocidad': '800 km/h',
            'Alcance': '5,400 km',
            'Altitud': '12,000 m'
        },
        infoUrl: 'https://tb4.d81.mytemp.website/antonov-an-124'
    },
    'Sikorsky S-92': {
        image: 'https://via.placeholder.com/300x200/1C1C1C/C9A227?text=Sikorsky+S-92',
        types: ['transport', 'medical'],
        description: 'El Sikorsky S-92 es un helicóptero de transporte pesado, ideal para operaciones offshore y servicios médicos de emergencia.',
        specs: {
            'Capacidad': '19 pax',
            'Velocidad': '306 km/h',
            'Alcance': '1,260 km',
            'Altitud': '4,572 m'
        },
        infoUrl: 'https://tb4.d81.mytemp.website/sikorsky-s-92'
    }
};

document.addEventListener('DOMContentLoaded', function() {
    // Obtener elementos del DOM
    const filterButtons = document.querySelectorAll('.filter-btn');
    const aircraftCards = document.querySelectorAll('.aircraft-card');
    const modal = document.getElementById('aircraftModal');
    const modalClose = document.getElementById('modalClose');
    const modalImage = document.getElementById('modalImage');
    const modalTitle = document.getElementById('modalTitle');
    const modalTypes = document.getElementById('modalTypes');
    const modalDescription = document.getElementById('modalDescription');
    const modalSpecs = document.getElementById('modalSpecs');
    const aircraftInterestInput = document.getElementById('aircraftInterest');
    
    // Añadir evento click a cada botón de filtro
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remover clase active de todos los botones
            filterButtons.forEach(btn => btn.classList.remove('active'));
            
            // Añadir clase active al botón clickeado
            this.classList.add('active');
            
            // Obtener el valor del filtro
            const filterValue = this.getAttribute('data-filter');
            
            // Filtrar las tarjetas de aeronaves
            aircraftCards.forEach(card => {
                if (filterValue === 'all') {
                    card.style.display = 'flex';
                } else {
                    // Verificar si la tarjeta tiene el tipo seleccionado
                    const hasType = card.querySelector(`.aircraft-type.${filterValue}`);
                    
                    if (hasType) {
                        card.style.display = 'flex';
                    } else {
                        card.style.display = 'none';
                    }
                }
            });
            
            // Aplicar animación a las tarjetas visibles
            const visibleCards = document.querySelectorAll('.aircraft-card[style="display: flex;"]');
            visibleCards.forEach((card, index) => {
                card.style.animation = `fadeInUp 0.3s ease forwards ${index * 0.05}s`;
            });
        });
    });
    
    // Añadir evento click a cada tarjeta de avión
    aircraftCards.forEach(card => {
        card.addEventListener('click', function() {
            const aircraftName = this.querySelector('.aircraft-name').textContent;
            const aircraftInfo = aircraftData[aircraftName];
            
            if (aircraftInfo) {
                // Actualizar imagen del modal
                modalImage.style.backgroundImage = `url('${aircraftInfo.image}')`;
                
                // Actualizar título
                modalTitle.textContent = aircraftName;
                
                // Actualizar tipos
                modalTypes.innerHTML = '';
                aircraftInfo.types.forEach(type => {
                    const typeSpan = document.createElement('span');
                    typeSpan.className = `aircraft-modal-type ${type}`;
                    typeSpan.textContent = type === 'transport' ? 'Transporte' : 
                                          type === 'cargo' ? 'Carga' : 
                                          type === 'medical' ? 'Médico' : type;
                    modalTypes.appendChild(typeSpan);
                });
                
                // Actualizar descripción
                modalDescription.textContent = aircraftInfo.description;
                
                // Actualizar especificaciones
                modalSpecs.innerHTML = '';
                Object.entries(aircraftInfo.specs).forEach(([label, value]) => {
                    const specItem = document.createElement('div');
                    specItem.className = 'spec-item';
                    specItem.innerHTML = `
                        <span class="spec-label">${label}</span>
                        <span class="spec-value">${value}</span>
                    `;
                    modalSpecs.appendChild(specItem);
                });
                
                // Actualizar campo del formulario
                aircraftInterestInput.value = aircraftName;
                
                // Actualizar enlace de información
                const moreInfoBtn = document.getElementById('moreInfoBtn');
                if (moreInfoBtn && aircraftInfo.infoUrl) {
                    moreInfoBtn.href = aircraftInfo.infoUrl;
                }
                
                // Mostrar modal
                modal.classList.add('active');
                document.body.style.overflow = 'hidden';
            }
        });
    });
    
    // Cerrar modal
    function closeModal() {
        modal.classList.remove('active');
        document.body.style.overflow = 'auto';
    }
    
    modalClose.addEventListener('click', closeModal);
    
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            closeModal();
        }
    });
    
    // Cerrar modal con tecla Escape
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && modal.classList.contains('active')) {
            closeModal();
        }
    });
    
    // Manejar checkbox de fecha de retorno
    const enableReturnDateCheckbox = document.getElementById('enableReturnDate');
    const returnDateGroup = document.getElementById('returnDateGroup');
    const returnDateInput = document.getElementById('returnDate');
    
    if (enableReturnDateCheckbox && returnDateGroup && returnDateInput) {
        enableReturnDateCheckbox.addEventListener('change', function() {
            if (this.checked) {
                returnDateGroup.style.display = 'block';
                returnDateInput.required = true;
            } else {
                returnDateGroup.style.display = 'none';
                returnDateInput.required = false;
                returnDateInput.value = '';
            }
        });
    }
    
    // Manejar envío del formulario
    const contactForm = document.getElementById('aircraftContactForm');
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Aquí puedes añadir la lógica para enviar el formulario
        alert('Formulario enviado correctamente. Nos pondremos en contacto contigo pronto.');
        
        // Resetear formulario
        contactForm.reset();
        
        // Resetear estado del checkbox y campo de retorno
        if (enableReturnDateCheckbox && returnDateGroup) {
            enableReturnDateCheckbox.checked = false;
            returnDateGroup.style.display = 'none';
            returnDateInput.required = false;
        }
        
        // Cerrar modal
        closeModal();
    });
    
    // Añadir animación inicial a las tarjetas
    aircraftCards.forEach((card, index) => {
        card.style.animation = `fadeInUp 0.3s ease forwards ${index * 0.05}s`;
    });
});

// Definir la animación de fadeInUp
document.head.insertAdjacentHTML('beforeend', `
    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .aircraft-card {
            opacity: 0;
        }
    </style>
`);
    </script>
@endsection