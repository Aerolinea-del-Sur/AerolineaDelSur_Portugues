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
                <a href="https://micosina.online/GulfstreamG100" class="aircraft-card" target="_blank" style="text-decoration: none; color: inherit;">
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
                        <div class="view-details-btn">Ver más información</div>
                    </div>
                </a>
                <!-- Gulfstream GIV -->
                <a href="https://micosina.online/GulfstreamGIV" class="aircraft-card" target="_blank" style="text-decoration: none; color: inherit;">
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
                        <div class="view-details-btn">Ver más información</div>
                    </div>
                </a>
                <!-- Honda Jet -->
                <a href="https://micosina.online/HondaJet" class="aircraft-card" target="_blank" style="text-decoration: none; color: inherit;">
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
                        <div class="view-details-btn">Ver más información</div>
                    </div>
                </a>
                <!-- Jet Phenom 100 -->
                <a href="https://micosina.online/Phenom100" class="aircraft-card" target="_blank" style="text-decoration: none; color: inherit;">
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
                        <div class="view-details-btn">Ver más información</div>
                    </div>
                </a>
                <!-- Jet Phenom 300 -->
                <a href="https://micosina.online/Phenom300" class="aircraft-card" target="_blank" style="text-decoration: none; color: inherit;">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/Phenom300.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <h3>Jet Phenom 300</h3>
                                <p>Capacidad: 7 pax</p>
                                <p>Velocidad: 839 km/h</p>
                                <p>Autonomía: 3,650 km</p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name">Jet Phenom 300</h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                        <div class="view-details-btn">Ver más información</div>
                    </div>
                </a>
                
                <!-- Fila 2 -->
                <!-- Challenger 300 -->
                <a href="https://micosina.online/Challenger300" class="aircraft-card" target="_blank" style="text-decoration: none; color: inherit;">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/Challenger300.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <h3>Jet Challenger 300</h3>
                                <p>Capacidad: 10 pax</p>
                                <p>Velocidad: 870 km/h</p>
                                <p>Autonomía: 5,741 km</p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name">Jet Challenger 300</h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                        <div class="view-details-btn">Ver más información</div>
                    </div>
                </a>
                
                <!-- Challenger 350 -->
                <a href="https://micosina.online/Challenger350" class="aircraft-card" target="_blank" style="text-decoration: none; color: inherit;">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/Challenger350.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <h3>Jet Challenger 350</h3>
                                <p>Capacidad: 10 pax</p>
                                <p>Velocidad: 870 km/h</p>
                                <p>Autonomía: 6,297 km</p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name">Jet Challenger 350</h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                        <div class="view-details-btn">Ver más información</div>
                    </div>
                </a>
                
                <!-- Challenger 601 -->
                <a href="https://micosina.online/Challenger601" class="aircraft-card" target="_blank" style="text-decoration: none; color: inherit;">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/Challenger601.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <h3>Jet Challenger 601</h3>
                                <p>Capacidad: 12 pax</p>
                                <p>Velocidad: 850 km/h</p>
                                <p>Autonomía: 6,100 km</p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name">Jet Challenger 601</h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                        <div class="view-details-btn">Ver más información</div>
                    </div>
                </a>
                
                <!-- Fila 3 -->
                <!-- Challenger 604 -->
                <a href="https://micosina.online/Challenger604" class="aircraft-card" target="_blank" style="text-decoration: none; color: inherit;">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/Challenger604.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <h3>Jet Challenger 604</h3>
                                <p>Capacidad: 12 pax</p>
                                <p>Velocidad: 850 km/h</p>
                                <p>Autonomía: 7,620 km</p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name">Jet Challenger 604</h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                        <div class="view-details-btn">Ver más información</div>
                    </div>
                </a>
                
                <!-- Challenger 605 -->
                <a href="https://micosina.online/Challenger605" class="aircraft-card" target="_blank" style="text-decoration: none; color: inherit;">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/Challenger605.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <h3>Jet Challenger 605</h3>
                                <p>Capacidad: 12 pax</p>
                                <p>Velocidad: 870 km/h</p>
                                <p>Autonomía: 7,991 km</p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name">Jet Challenger 605</h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                        <div class="view-details-btn">Ver más información</div>
                    </div>
                </a>
                
                <!-- Challenger 650 -->
                <a href="https://micosina.online/Challenger650" class="aircraft-card" target="_blank" style="text-decoration: none; color: inherit;">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/Challenger650.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <h3>Jet Challenger 650</h3>
                                <p>Capacidad: 12 pax</p>
                                <p>Velocidad: 870 km/h</p>
                                <p>Autonomía: 7,408 km</p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name">Jet Challenger 650</h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                        <div class="view-details-btn">Ver más información</div>
                    </div>
                </a>
                
                <!-- Fila 4 -->
                <!-- Challenger 850 -->
                <a href="https://micosina.online/Challenger850" class="aircraft-card" target="_blank" style="text-decoration: none; color: inherit;">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/Challenger850.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <h3>Jet Challenger 850</h3>
                                <p>Capacidad: 16 pax</p>
                                <p>Velocidad: 850 km/h</p>
                                <p>Autonomía: 5,206 km</p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name">Jet Challenger 850</h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                        <div class="view-details-btn">Ver más información</div>
                    </div>
                </a>
                
                <!-- Citation 550 Bravo -->
                <a href="https://micosina.online/Citation550Bravo" class="aircraft-card" target="_blank" style="text-decoration: none; color: inherit;">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/Citation550-Bravo.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <h3>Jet Citation 550 Bravo</h3>
                                <p>Capacidad: 7 pax</p>
                                <p>Velocidad: 740 km/h</p>
                                <p>Autonomía: 3,520 km</p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name">Jet Citation 550 Bravo</h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                        <div class="view-details-btn">Ver más información</div>
                    </div>
                </a>
                
                <!-- Citation CJ4 -->
                <a href="https://micosina.online/CitationCj4" class="aircraft-card" target="_blank" style="text-decoration: none; color: inherit;">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/CitationCj4.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <h3>Jet Citation Cj4</h3>
                                <p>Capacidad: 9 pax</p>
                                <p>Velocidad: 835 km/h</p>
                                <p>Autonomía: 4,010 km</p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name">Jet Citation Cj4</h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                        <div class="view-details-btn">Ver más información</div>
                    </div>
                </a>
                
                <!-- Fila 5 -->
                <!-- Citation Encore -->
                <a href="https://micosina.online/CitationEncore" class="aircraft-card" target="_blank" style="text-decoration: none; color: inherit;">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/CitationEncore.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <h3>Jet Citation Encore</h3>
                                <p>Capacidad: 8 pax</p>
                                <p>Velocidad: 796 km/h</p>
                                <p>Autonomía: 3,441 km</p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name">Jet Citation Encore</h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                        <div class="view-details-btn">Ver más información</div>
                    </div>
                </a>
                
                <!-- Citation XLS -->
                <a href="https://micosina.online/CitationXLS" class="aircraft-card" target="_blank" style="text-decoration: none; color: inherit;">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/CitationXLS.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <h3>Jet Citation XLS</h3>
                                <p>Capacidad: 9 pax</p>
                                <p>Velocidad: 815 km/h</p>
                                <p>Autonomía: 3,890 km</p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name">Jet Citation XLS</h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                        <div class="view-details-btn">Ver más información</div>
                    </div>
                </a>
                
                <!-- Citation Hemisphere -->
                <a href="https://micosina.online/CitationHemisPhere" class="aircraft-card" target="_blank" style="text-decoration: none; color: inherit;">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/CitationHemisPhere.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <h3>Jet Citation HemisPhere</h3>
                                <p>Capacidad: 19 pax</p>
                                <p>Velocidad: 1050 km/h</p>
                                <p>Autonomía: 8,300 km</p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name">Jet Citation HemisPhere</h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                        <div class="view-details-btn">Ver más información</div>
                    </div>
                </a>
                
                <!-- Fila 6 -->
                <!-- Citation Latitude -->
                <a href="https://micosina.online/CitationLatitude" class="aircraft-card" target="_blank" style="text-decoration: none; color: inherit;">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/CitationLatitude.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <h3>Jet Citation Latitude</h3>
                                <p>Capacidad: 9 pax</p>
                                <p>Velocidad: 826 km/h</p>
                                <p>Autonomía: 5,278 km</p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name">Jet Citation Latitude</h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                        <div class="view-details-btn">Ver más información</div>
                    </div>
                </a>
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


    <script>
         // JavaScript para la página de Flota Aérea
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const aircraftCards = document.querySelectorAll('.aircraft-card');
    
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