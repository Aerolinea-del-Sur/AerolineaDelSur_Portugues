@extends('a_EncabezadoFooter.princi')
@section('content')
    <link rel="stylesheet" href="{{ asset('public/css/paginas/aeronaves/Flota.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/paginas/aeronaves/DetalleFlota.css') }}">

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
                <!-- Gulfstream G100 -->
                <div class="aircraft-card">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/Gulfstream-G100.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p>Capacidad: 8 pax</p>
                                <p>Velocidad: 870 km/h</p>
                                <p>Peso Max: 11,181 kg</p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name">Jet Gulfstream G100</h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                    </div>
                </div>
                <!-- Gulfstream GIV -->
                <div class="aircraft-card">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/GulfstreamGiv.webp')">

                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p>Capacidad: 14 pax</p>
                                <p>Velocidad: 935 km/h</p>
                                <p>Peso Max: 33,838kg</p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name">Jet Gulfstream GIV</h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                    </div>
                </div>
                <!-- Honda Jet -->
                <div class="aircraft-card">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/HondaJet.webp')">

                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p>Capacidad: 6 pax</p>
                                <p>Velocidad: 782 km/h</p>
                                <p>Peso Max: 4,853 kg</p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name">Honda Jet</h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                    </div>
                </div>
                <!-- Jet Phenom 100 -->
                <div class="aircraft-card">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/Phenom100.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p>Capacidad: 6 pax</p>
                                <p>Velocidad: 722 km/h</p>
                                <p>Peso Max: 4,800 kg</p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name">Jet Phenom 100</h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                    </div>
                </div>
                <!-- Jet Phenom 300 -->
                <div class="aircraft-card">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/Phenom300.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p>Capacidad: 7 pax</p>
                                <p>Velocidad: 839 km/h</p>
                                <p>Peso Max: 8,150 kg</p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name">Jet Phenom 300</h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                    </div>
                </div>
                <!-- Jet privado Challenger 300 -->
                <div class="aircraft-card">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/Challenger300.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p>Capacidad: 10 pax</p>
                                <p>Velocidad: 870 km/h</p>
                                <p>Peso Max: 17,622 kg</p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name">Jet Challenger 300</h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                    </div>
                </div>
                <!-- Jet privado Challenger 350 -->
                <div class="aircraft-card">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/Challenger350.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p>Capacidad: 10 pax</p>
                                <p>Velocidad: 870 km/h</p>
                                <p>Peso Max: 18,416 kg</p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name">Jet Challenger 350</h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                    </div>
                </div>
                <!-- Jet privado Challenger 601 12 Seats -->
                <div class="aircraft-card">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/Challenger601.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p>Capacidad: 12 pax</p>
                                <p>Velocidad: 850 km/h</p>
                                <p>Peso Max: 20,865 kg</p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name">Jet Challenger 601</h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                    </div>
                </div>
                <!-- Jet privado Challenger 604 -->
                <div class="aircraft-card">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/Challenger604.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p>Capacidad: 12 pax</p>
                                <p>Velocidad: 850 km/h</p>
                                <p>Peso Max: 21,863 kg</p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name">Jet Challenger 604</h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                    </div>
                </div>
                <!-- Jet privado Challenger 605 -->
                <div class="aircraft-card">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/Challenger605.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p>Capacidad: 12 pax</p>
                                <p>Velocidad: 870 km/h</p>
                                <p>Peso Max: 21,863 kg</p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name">Jet Challenger 605</h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                    </div>
                </div>
                <!-- Jet privado Challenger 650 -->
                <div class="aircraft-card">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/Challenger650.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p>Capacidad: 12 pax</p>
                                <p>Velocidad: 870 km/h</p>
                                <p>Peso Max: 21,863 kg</p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name">Jet Challenger 650</h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                    </div>
                </div>
                <!-- Jet privado Challenger 850 -->
                <div class="aircraft-card">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/Challenger850.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p>Capacidad: 16 pax</p>
                                <p>Velocidad: 850 km/h</p>
                                <p>Peso Max: 24,041 kg</p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name">Jet Challenger 850</h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                    </div>
                </div>
                <!-- Jet privado Citation 550 Bravo -->
                <div class="aircraft-card">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/Citation550-Bravo.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p>Capacidad: 7 pax</p>
                                <p>Velocidad: 740 km/h</p>
                                <p>Peso Max: 6,350 kg</p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name">Jet Citation 550 Bravo</h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                    </div>
                </div>
                <!-- Jet privado Citation Cj4 -->
                <div class="aircraft-card">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/CitationCj4.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p>Capacidad: 9 pax</p>
                                <p>Velocidad: 450 km/h</p>
                                <p>Peso Max: 7,761 kg</p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name">Jet Citation Cj4</h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                    </div>
                </div>
                <!-- Jet privado Citation Encore -->
                <div class="aircraft-card">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/CitationEncore.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p>Capacidad: 8 pax</p>
                                <p>Velocidad: 796 km/h</p>
                                <p>Peso Max: 7,167 kg</p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name">Jet Citation Encore</h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                    </div>
                </div>
                <!-- Jet privado Citation XLS -->
                <div class="aircraft-card">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/CitationXLS.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p>Capacidad: 9 pax</p>
                                <p>Velocidad: 815 km/h</p>
                                <p>Peso Max: 9,163 kg</p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name">Jet Citation XLS</h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                    </div>
                </div>
                <!-- Jet privado Citation HemisPhere -->
                <div class="aircraft-card">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/CitationHemisPhere.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p>Capacidad: 19 pax</p>
                                <p>Velocidad: 1050 km/h</p>
                                <p>Peso Max: 18,000 kg</p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name">Jet Citation HemisPhere</h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                    </div>
                </div>
                <!-- Jet privado Citation Latitude -->
                <div class="aircraft-card">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/CitationLatitude.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p>Capacidad: 9 pax</p>
                                <p>Velocidad: 826 km/h</p>
                                <p>Peso Max: 13,971 kg</p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name">Jet Citation Latitude</h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
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
    'Jet Gulfstream G100': {
        image: 'public/img/aeronaves/aviones/Gulfstream-G100.webp',
        types: ['transport'],
        description: 'El Gulfstream G100 (antes Astra SPX) es un jet de negocios bimotor de tamaño medio, con cabina confortable para hasta 8 pasajeros, destacado por su alta velocidad y alcance transcontinental, ideal para vuelos rápidos y eficientes.',
        specs: {
            'Capacidad': '8 pax',
            'Velocidad': '870 km/h',
            'Peso': '11,181 kg',
            'Autonomía': '5,167 km'
        },
        infoUrl: 'https://tb4.d81.mytemp.website/micosina.online/GulfstreamG100'
    },
    'Jet Gulfstream GIV': {
        image: 'public/img/aeronaves/aviones/GulfstreamGiv.webp',
        types: ['transport'],
        description: 'El Gulfstream GIV es un jet ejecutivo de larga distancia, de cabina espaciosa y triple zona en configuraciones típicas, con motores Rolls-Royce TAY que ofrecen alta velocidad y alcance intercontinental eficiente. La cabina ofrece comodidad y flexibilidad para misiones de negocio sofisticadas. ',
        specs: {
            'Capacidad': '14 pax',
            'Velocidad': '935 km/h',
            'Peso': '33, 838 km',
            'Autonomía': '7,000 km'
        },
        infoUrl: 'https://tb4.d81.mytemp.website/micosina.online/GulfstreamGIV'
    },
    'Honda Jet': {
        image: 'public/img/aeronaves/aviones/HondaJet.webp',
        types: ['transport'],
        description: 'El Honda Jet es un jet ligero innovador, conocido por su diseño con motores montados sobre el ala (OTWEM), lo que le otorga mayor eficiencia, menor ruido y más espacio interior. Ideal para vuelos ejecutivos de corto a mediano alcance, combina tecnología avanzada y estilo distintivo.',
        specs: {
            'Capacidad': '6 pax',
            'Velocidad': '782 km/h',
            'Peso': '4,853 kg',
            'Autonomía': '2,265 km' 
        },
        infoUrl: 'https://tb4.d81.mytemp.website/micosina.online/HondaJet'
    },
    'Jet Phenom 100': {
        image: 'public/img/aeronaves/aviones/Phenom100.webp',
        types: ['transport'],
        description: 'El Phenom 100 es un jet muy ligero (VLJ) diseñado para la aviación ejecutiva. Combina eficiencia y rendimiento con una cabina moderna para hasta 6 ocupantes. Confiable y ágil, es ideal para vuelos regionales cortos, destacando por su bajo consumo y aviónica avanzada Garmin.',
        specs: {
            'Capacidad': '6 pax',
            'Velocidad': '722 km/h',
            'Peso': '4,800 kg',
            'Autonomía': '2,182 km'
        },
        infoUrl: 'https://tb4.d81.mytemp.website/micosina.online/Phenom100'
    },
    'Jet Phenom 300': {
        image: 'public/img/aeronaves/aviones/Phenom300.webp',
        types: ['transport'],
        description: 'El Phenom 300 es un jet ejecutivo ligero que combina velocidad, eficiencia y comodidad. Con capacidad para hasta 7-8 pasajeros, ofrece gran autonomía y aviónica avanzada, siendo uno de los jets más vendidos de su categoría, ideal para vuelos regionales y transcontinentales cortos.',
        specs: {
            'Capacidad': '7 pax',
            'Velocidad': '839 km/h',
            'Peso': '8,150 kg',
            'Autonomía': '3,650 km'
        },
        infoUrl: 'Enlace'
    },
    'Jet Challenger 300': {
        image: 'public/img/aeronaves/aviones/Challenger300.webp',
        types: ['transport'],
        description: 'El Challenger 300 es un jet ejecutivo supermediano de Bombardier, reconocido por su rendimiento intercontinental, comodidad y fiabilidad. Con espacio para hasta 9 pasajeros, ofrece cabina espaciosa, gran autonomía y aviónica avanzada, ideal para vuelos de negocios de largo alcance.',
        specs: {
            'Capacidad': '10 pax',
            'Velocidad': '870 km/h',
            'Peso': '17,622 kg',
            'Autonomía': '5,741 km'
        },
        infoUrl: 'Enlace'
    },
    'Jet Challenger 350': {
        image: 'public/img/aeronaves/aviones/Challenger350.webp',
        types: ['transport'],
        description: 'El Challenger 350 es un jet ejecutivo supermediano de Bombardier, evolución directa del exitoso Challenger 300. Ofrece más alcance, cabina modernizada y aviónica de última generación. Con capacidad para hasta 10 pasajeros, combina lujo, rendimiento y eficiencia en vuelos transcontinentales.',
        specs: {
            'Capacidad': '10 pax',
            'Velocidad': '870 km/h',
            'Peso': '18,416 kg',
            'Autonomía': '6,297 km'
        },
        infoUrl: 'Enlace'
    },
    'Jet Challenger 601': {
        image: 'public/img/aeronaves/aviones/Challenger601.webp',
        types: ['transport'],
        description: 'El Challenger 601 es un jet ejecutivo de cabina ancha, desarrollado por Canadair (posteriormente Bombardier). Con espacio para hasta 12 pasajeros, ofrece gran confort en vuelos de largo alcance, destacando por su robustez, autonomía intercontinental y prestaciones de un jet de negocios de categoría superior.',
        specs: {
            'Capacidad': '12 pax',
            'Velocidad': '850 km/h',
            'Peso': '20,865 kg',
            'Autonomía': '6,100 km'
        },
        infoUrl: 'Enlace'
    },
    'Jet Challenger 604': {
        image: 'public/img/aeronaves/aviones/Challenger604.webp',
        types: ['transport'],
        description: 'El Challenger 604 es un jet ejecutivo de cabina ancha fabricado por Bombardier, evolución del exitoso 601. Con capacidad para hasta 12 pasajeros, destaca por su autonomía intercontinental, comodidad de cabina y sistemas avanzados, consolidándose como uno de los jets de negocios más confiables de su categoría.',
        specs: {
            'Capacidad': '12 pax',
            'Velocidad': '850 km/h',
            'Peso': '20,863 kg',
            'Autonomía': '7,620 km'
        },
        infoUrl: 'Enlace'
    },
    'Jet Challenger 605': {
        image: 'public/img/aeronaves/aviones/Challenger605.webp',
        types: ['transport'],
        description: 'El Challenger 605 es un jet ejecutivo de cabina ancha presentado por Bombardier en 2006 como evolución del 604. Con capacidad para hasta 12 pasajeros, ofrece mayor confort interior, aviónica avanzada y un alcance intercontinental, ideal para vuelos de largo recorrido con máxima eficiencia.',
        specs: {
            'Capacidad': '12 pax',
            'Velocidad': '870 km/h',
            'Peso': '21,863 kg',
            'Autonomía': '7,991 km'
        },
        infoUrl: 'Enlace'
    },
    'Jet Challenger 650': {
        image: 'public/img/aeronaves/aviones/Challenger650.webp',
        types: ['transport'],
        description: 'El Challenger 650, introducido en 2015, es la versión más reciente de la reconocida serie Challenger de Bombardier. Ofrece cabina rediseñada, motores mejorados y aviónica avanzada. Con capacidad para hasta 12 pasajeros, combina lujo, rendimiento y autonomía intercontinental.',
        specs: {
            'Capacidad': '12 pax',
            'Velocidad': '870 km/h',
            'Peso': '21,863 kg',
            'Autonomía': '7,408 km'
        },
        infoUrl: 'Enlace'
    },
    'Jet Challenger 850': {
        image: 'public/img/aeronaves/aviones/Challenger850.webp',
        types: ['transport'],
        description: 'El Challenger 850 es el jet ejecutivo más grande de la serie Challenger, basado en el avión regional CRJ200. Ofrece cabina espaciosa para hasta 16 pasajeros, con confort de nivel corporativo y un alcance intercontinental, combinando lujo, eficiencia y gran capacidad de transporte.',
        specs: {
            'Capacidad': '16 pax',
            'Velocidad': '850 km/h',
            'Peso': '24,041 kg',
            'Autonomía': '5,206 km'
        },
        infoUrl: 'Enlace'
    },
    'Jet Citation 550 Bravo': {
        image: 'public/img/aeronaves/aviones/Citation550-Bravo.webp',
        types: ['transport'],
        description: 'El Citation 550 Bravo es una evolución del Citation II, introducido en 1997. Este jet ligero ofrece eficiencia, confiabilidad y bajos costos operativos, con capacidad para hasta 7 pasajeros. Su aviónica mejorada y motores Pratt & Whitney lo convierten en un avión versátil para vuelos regionales.',
        specs: {
            'Capacidad': '7 pax',
            'Velocidad': '740 km/h',
            'Peso': '6,350 kg',
            'Autonomía': '3,520 km'
        },
        infoUrl: 'Enlace'
    },
    'Jet Citation Cj4': {
        image: 'public/img/aeronaves/aviones/CitationCj4.webp',
        types: ['transport'],
        description: 'El Citation CJ4, tope de la serie CitationJet, combina gran autonomía, velocidad y una cabina espaciosa para hasta 9 pasajeros. Destaca por su eficiencia y aviónica de última generación, siendo ideal para vuelos corporativos de mediano alcance con excelente rendimiento.',
        specs: {
            'Capacidad': '9 pax',
            'Velocidad': '835 km/h',
            'Peso': '7,761 kg',
            'Autonomía': '4,010 km'
        },
        infoUrl: 'Enlace'
    },
    'Jet Citation Encore': {
        image: 'public/img/aeronaves/aviones/CitationEncore.webp',
        types: ['transport'],
        description: 'El Citation Encore es una evolución del Citation Ultra, introducido en 2000. Ofrece mejoras en alcance, carga útil y rendimiento gracias a los motores Pratt & Whitney PW535A. Con capacidad para 7 pasajeros, es un jet ligero confiable y eficiente para vuelos corporativos regionales y de medio alcance.',
        specs: {
            'Capacidad': '8 pax',
            'Velocidad': '796 km/h',
            'Peso': '7,167 kg',
            'Autonomía': '3,441 km'
        },
        infoUrl: 'Enlace'
    },
    'Jet Citation XLS': {
        image: 'public/img/aeronaves/aviones/CitationXLS.webp',
        types: ['transport'],
        description: 'El Citation XLS es un jet ejecutivo de tamaño mediano lanzado en 1998, que combina la cabina espaciosa del Citation X con la versatilidad de los jets ligeros. Con capacidad para 8 pasajeros, es ideal para vuelos corporativos de medio alcance, ofreciendo comodidad, confiabilidad y costos operativos competitivos.',
        specs: {
            'Capacidad': '9 pax',
            'Velocidad': '815 km/h',
            'Peso': '9,163 kg',
            'Autonomía': '3,890 km'
        },
        infoUrl: 'Enlace'
    },
    'Jet Citation HemisPhere': {
        image: 'public/img/aeronaves/aviones/CitationHemisPhere.webp',
        types: ['transport'],
        description: 'El Citation Hemisphere fue concebido como el jet más grande de la familia Citation, en la categoría de largo alcance. Diseñado para ofrecer comodidad superior en vuelos intercontinentales, incluiría una cabina amplia y tecnología de última generación, con alcance cercano a 8 300 km.',
        specs: {
            'Capacidad': '19 pax',
            'Velocidad': '1050 km/h',
            'Peso': '19,000 kg',
            'Autonomía': '8,300 km'
        },
        infoUrl: 'Enlace'
    },
    'Jet Citation Latitude': {
        image: 'public/img/aeronaves/aviones/CitationLatitude.webp',
        types: ['transport'],
        description: 'El Citation Latitude, presentado en 2015, es un jet ejecutivo de cabina mediana con diseño moderno y amplio espacio interior. Combina eficiencia operativa, alcance de más de 5 000 km y aviónica avanzada Garmin G5000, ofreciendo comodidad premium para vuelos corporativos y regionales.',
        specs: {
            'Capacidad': '9 pax',
            'Velocidad': '826 km/h',
            'Peso': '13,971 kg',
            'Autonomía': '5,278 km'
        },
        infoUrl: 'Enlace'
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