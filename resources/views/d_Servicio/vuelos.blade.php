@extends('a_EncabezadoFooter.princi')
@section('content')
<?php
    $h1_page = 'Vuelos Privados';
    $breadcrumb = 'home/vuelos-privados';
    $h2_form = 'Reserva de Vuelo Privado';
?>

<link rel="stylesheet" href="{{ asset('css/paginas/aeronaves/aeronaves.css') }}">

<header class="heli-header">
    <div class="heli-bg"></div>
    <div class="heli-dark"></div>
    <div class="heli-content">
        <div class="heli-badge">
            <i class="fas fa-plane"></i>
            <span><?= $breadcrumb ?></span>
        </div>
        <h1 class="heli-title"><?= $h1_page ?></h1>
        
        <form class="heli-form collapsed horizontal" method="post" action="{{ route('vuelos.send') }}">
        @csrf
            <div class="heli-form-head">
                <h2 class="heli-section-title"><?= $h2_form ?></h2>
                <div class="heli-radio-group">
                    <label class="heli-radio">
                        <input type="radio" name="tipo_viaje" value="ida_vuelta" checked>
                        <span>Ida y vuelta</span>
                    </label>
                    <label class="heli-radio">
                        <input type="radio" name="tipo_viaje" value="solo_ida">
                        <span>Solo ida</span>
                    </label>
                </div>
            </div>

            <div class="heli-form-personal">
                <div class="heli-field">
                    <input class="heli-input" type="text" id="nombres_apellidos_header" name="nombres_apellidos" placeholder="Nombres y Apellidos" required>
                </div>
                <div class="heli-field">
                    <input class="heli-input" type="email" id="correo_header" name="correo" placeholder="Correo electrónico" required>
                </div>
                <div class="heli-field">
                    <input class="heli-input" type="tel" id="telefono_header" name="telefono" placeholder="Teléfono (opcional)" pattern="^\+?[0-9\s-]{7,15}$">
                </div>
            </div>
            <div class="heli-form-personal">
                <div class="heli-field">
                    <input class="heli-input" type="text" id="desde_header" name="desde" placeholder="Desde" required>
                </div>
                <div class="heli-field">
                    <input class="heli-input" type="text" id="hacia_header" name="hacia" placeholder="Hacia" required>
                </div>
                <div class="heli-field">
                    <select class="heli-select" id="tipo_a_header" name="tipo_a" required>
                        <option value="" selected disabled>Tipo de avión</option>
                        <option value="kingair-b200">King Air B200</option>
                        <option value="kingair-b350">King Air B350</option>
                        <option value="beechcraft-1900d">Beechcraft 1900D</option>
                        <option value="honda-jet">Honda Jet</option>
                        <option value="phenom-100">Jet Phenom 100</option>
                        <option value="gulfstream-g100">Jet Gulfstream G100</option>
                    </select>
                </div>
            </div>
            <div class="heli-field collapsible">
                <label class="heli-form-label" for="fecha_ida_header">Fecha de ida</label>
                <input class="heli-input" type="datetime-local" id="fecha_ida_header" name="fecha_ida" placeholder="Fecha de ida" required step="60">
            </div>
            <div class="heli-field collapsible js-retorno-field" id="retorno-field_header">
                <label class="heli-form-label" for="fecha_retorno_header">Fecha de retorno</label>
                <input class="heli-input" type="datetime-local" id="fecha_retorno_header" name="fecha_retorno" placeholder="Fecha de retorno" step="60">
            </div>
            <div class="heli-field">
                <textarea class="heli-input" id="detalles_header" name="detalles" placeholder="Detalles, solicitudes especiales o notas" rows="3"></textarea>
            </div>

            
            <div class="heli-field passenger-field">
                <input type="hidden" class="js-pasajeros" name="pasajeros" value="1">
                <input type="hidden" class="js-adultos" name="adultos" value="1">
                <input type="hidden" class="js-jovenes" name="jovenes" value="0">
                <div class="passenger-input js-passenger-input" id="passengerInput_header" tabindex="0">
                    <span class="js-passenger-display">1 pasajero</span>
                    <span class="passenger-icon"><i class="fas fa-user"></i></span>
                </div>
                <div class="passenger-dropdown js-passenger-dropdown" id="passengerDropdown_header" aria-hidden="true">
                    <div class="passenger-row">
                        <div class="passenger-label">
                            <div class="label-title">Adultos</div>
                            <div class="label-sub">18 o más años</div>
                        </div>
                        <div class="counter">
                            <button type="button" class="btn-minus" data-type="adultos">−</button>
                            <span class="count" data-type="adultos">1</span>
                            <button type="button" class="btn-plus" data-type="adultos">+</button>
                        </div>
                    </div>
                    <div class="passenger-row">
                        <div class="passenger-label">
                            <div class="label-title">Jóvenes</div>
                            <div class="label-sub">2 a 17 años</div>
                        </div>
                        <div class="counter">
                            <button type="button" class="btn-minus" data-type="jovenes">−</button>
                            <span class="count" data-type="jovenes">0</span>
                            <button type="button" class="btn-plus" data-type="jovenes">+</button>
                        </div>
                    </div>                    
                    <button type="button" class="confirm-passengers" id="confirmPassengers_header">Confirmar</button>
                </div>
            </div>            
        <div class="heli-actions">
            <button type="submit" class="heli-btn">Reservar</button>
        </div>
        </form>
        <style>
            .heli-form.horizontal{padding:24px;border-radius:14px;background:rgba(18,18,18,0.7);gap:16px}
            .heli-form.horizontal .heli-form-personal{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:12px}
            .heli-form.horizontal .heli-form-top{display:grid;grid-template-columns:repeat(4,minmax(0,1fr));gap:12px}
            .heli-form.horizontal .heli-form-row2{display:grid;grid-template-columns:1.2fr 1fr 1fr;gap:12px;align-items:end}
            .heli-form.horizontal .route-stack{display:flex;flex-direction:column;gap:12px}
            .heli-form.horizontal .heli-actions{display:flex;justify-content:flex-end}
            .heli-form.horizontal .heli-field.collapsible{display:block}
            .heli-form.horizontal .js-retorno-field{display:block}
            .heli-form.horizontal .heli-input:disabled{opacity:.7}
            @media (max-width:1024px){
                .heli-form.horizontal .heli-form-personal{grid-template-columns:repeat(2,minmax(0,1fr))}
                .heli-form.horizontal .heli-form-top{grid-template-columns:repeat(2,minmax(0,1fr))}
                .heli-form.horizontal .heli-form-row2{grid-template-columns:1fr}
            }
            @media (max-width:640px){
                .heli-form.horizontal .heli-form-personal,.heli-form.horizontal .heli-form-top{grid-template-columns:1fr}
            }
        </style>
        <script>
          document.addEventListener('DOMContentLoaded', function(){
            const form = document.querySelector('.heli-form');
            if(!form || form.dataset.passengersInit==='true'){ return; }
            form.dataset.passengersInit='true';

            const radioButtons = form.querySelectorAll('input[name="tipo_viaje"]');
            const retornoField = form.querySelector('.js-retorno-field');
            const retornoInput = document.getElementById('fecha_retorno_header');
            radioButtons.forEach(radio => {
              radio.addEventListener('change', function(){
                if(this.value === 'ida_vuelta'){
                  retornoField.style.display = 'block';
                  retornoInput.disabled = false;
                  retornoInput.setAttribute('required','required');
                } else {
                  retornoField.style.display = 'none';
                  retornoInput.disabled = true;
                  retornoInput.removeAttribute('required');
                  retornoInput.value='';
                }
              });
            });
            
            const selectedTipo = form.querySelector('input[name="tipo_viaje"]:checked')?.value;
            retornoField.style.display = selectedTipo === 'ida_vuelta' ? 'block' : 'none';
            if(selectedTipo === 'ida_vuelta'){
              retornoInput.disabled = false;
              retornoInput.setAttribute('required','required');
            } else {
              retornoInput.disabled = true;
              retornoInput.removeAttribute('required');
              retornoInput.value='';
            }

            const desde = document.getElementById('desde_header');
            const hacia = document.getElementById('hacia_header');
            function expandIfStarted(){
              const started = (desde?.value || '').trim().length > 0 || (hacia?.value || '').trim().length > 0;
              if(started) form.classList.remove('collapsed');
            }
            ['input','change','keyup'].forEach(evt => {
              desde?.addEventListener(evt, expandIfStarted);
              hacia?.addEventListener(evt, expandIfStarted);
            });
            function expandOnIntent(){ form.classList.remove('collapsed'); }
            ['focus','click'].forEach(evt => {
              desde?.addEventListener(evt, expandOnIntent);
              hacia?.addEventListener(evt, expandOnIntent);
            });
            function collapseIfEmpty(){
              const empty = ((desde?.value || '').trim().length === 0) && ((hacia?.value || '').trim().length === 0);
              if(empty) form.classList.add('collapsed');
            }
            ['blur','input','change'].forEach(evt => {
              desde?.addEventListener(evt, collapseIfEmpty);
              hacia?.addEventListener(evt, collapseIfEmpty);
            });

            const passengerInput = document.getElementById('passengerInput_header');
            const passengerDropdown = document.getElementById('passengerDropdown_header');
            const passengerDisplay = form.querySelector('.js-passenger-display');
            const confirmBtn = document.getElementById('confirmPassengers_header');
            if(passengerInput){
              passengerInput.addEventListener('click', function(e){
                e.preventDefault(); e.stopPropagation();
                passengerDropdown.style.display = passengerDropdown.style.display === 'block' ? 'none' : 'block';
              });
            }
            if(confirmBtn){
              confirmBtn.addEventListener('click', function(e){ e.preventDefault(); passengerDropdown.style.display = 'none'; });
            }
            document.addEventListener('click', function(e){
              if (!passengerInput?.contains(e.target) && !passengerDropdown?.contains(e.target)) {
                passengerDropdown.style.display = 'none';
              }
            });

            const counters = form.querySelectorAll('.counter');
            counters.forEach(counter => {
              const btnMinus = counter.querySelector('.btn-minus');
              const btnPlus = counter.querySelector('.btn-plus');
              const countSpan = counter.querySelector('.count');
              const type = countSpan.dataset.type;
              btnPlus.addEventListener('click', function(e){ e.preventDefault(); e.stopPropagation(); updateCount(type, 1); });
              btnMinus.addEventListener('click', function(e){ e.preventDefault(); e.stopPropagation(); updateCount(type, -1); });
            });

            function updateCount(type, change){
              const countSpan = form.querySelector(`.count[data-type="${type}"]`);
              const hiddenInput = form.querySelector(`.js-${type}`);
              let currentValue = parseInt(countSpan.textContent);
              let newValue = currentValue + change;
              if (type === 'adultos' && newValue < 1) return;
              if (type === 'jovenes' && newValue < 0) return;
              countSpan.textContent = newValue;
              if(hiddenInput) hiddenInput.value = newValue;
              updateTotalPassengers();
            }

            function updateTotalPassengers(){
              const adultos = parseInt(form.querySelector('.js-adultos').value);
              const jovenes = parseInt(form.querySelector('.js-jovenes').value);
              const total = Math.max(1, adultos + jovenes);
              form.querySelector('.js-pasajeros').value = total;
              if(passengerDisplay) passengerDisplay.textContent = total + (total === 1 ? ' pasajero' : ' pasajeros');
            }

            updateTotalPassengers();
          });
        </script>
    </div>
</header>


<section class="heli-fleet-section">
    <div class="heli-container">
        <h2 class="heli-section-title">Nuestras Aeronaves</h2>
        <div class="fleet-grid">
            <a href="/aeronaves/KingAirB200" class="aircraft-card" style="text-decoration: none; color: inherit;">
                <div class="aircraft-image" style="background-image: url('{{ asset('img/aeronaves/aviones/Air-King-B200.webp') }}')">
                    <div class="aircraft-overlay">
                        <div class="aircraft-details">
                            <p>Capacidad: 8 pax</p>
                            <p>Velocidad: 870 km/h</p>
                            <p>Peso Max: 11,181 kg</p>
                        </div>
                    </div>
                </div>
                <div class="aircraft-info">
                    <h3 class="aircraft-name">King Air B200</h3>
                    <div class="aircraft-types">
                        <span class="aircraft-type transport">Transporte</span>
                    </div>
                    <div class="view-details-btn">Ver más información</div>
                </div>
            </a>

            <a href="/aeronaves/KingAirB350" class="aircraft-card" style="text-decoration: none; color: inherit;">
                <div class="aircraft-image" style="background-image: url('{{ asset('img/aeronaves/aviones/AirKingB350.webp') }}')">
                    <div class="aircraft-overlay">
                        <div class="aircraft-details">
                            <p>Capacidad: 8 pax</p>
                            <p>Velocidad: 870 km/h</p>
                            <p>Peso Max: 11,181 kg</p>
                        </div>
                    </div>
                </div>
                <div class="aircraft-info">
                    <h3 class="aircraft-name">King Air B350</h3>
                    <div class="aircraft-types">
                        <span class="aircraft-type transport">Transporte</span>
                    </div>
                    <div class="view-details-btn">Ver más información</div>
                </div>
            </a>

            <a href="/aeronaves/Beechcraft1900D" class="aircraft-card" style="text-decoration: none; color: inherit;">
                <div class="aircraft-image" style="background-image: url('{{ asset('img/aeronaves/aviones/Beechcraft1900D.webp') }}')">
                    <div class="aircraft-overlay">
                        <div class="aircraft-details">
                            <p>Capacidad: 8 pax</p>
                            <p>Velocidad: 870 km/h</p>
                            <p>Peso Max: 11,181 kg</p>
                        </div>
                    </div>
                </div>
                <div class="aircraft-info">
                    <h3 class="aircraft-name">Beechcraft 1900D</h3>
                    <div class="aircraft-types">
                        <span class="aircraft-type transport">Transporte</span>
                    </div>
                    <div class="view-details-btn">Ver más información</div>
                </div>
            </a>

            <a href="/aeronaves/HondaJet" class="aircraft-card" style="text-decoration: none; color: inherit;">
                <div class="aircraft-image" style="background-image: url('{{ asset('img/aeronaves/aviones/HondaJet.webp') }}')">
                    <div class="aircraft-overlay">
                        <div class="aircraft-details">
                            <p>Capacidad: 6 pax</p>
                            <p>Velocidad: 722 km/h</p>
                            <p>Peso Max: 4,800 kg</p>
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

            <a href="/aeronaves/Phenom100" class="aircraft-card" style="text-decoration: none; color: inherit;">
                <div class="aircraft-image" style="background-image: url('{{ asset('img/aeronaves/aviones/Phenom100.webp') }}')">
                    <div class="aircraft-overlay">
                        <div class="aircraft-details">
                            <p>Capacidad: 7 pax</p>
                            <p>Velocidad: 839 km/h</p>
                            <p>Autonomía: 3,650 km</p>
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

            <a href="/aeronaves/GulfstreamG100" class="aircraft-card" style="text-decoration: none; color: inherit;">
                <div class="aircraft-image" style="background-image: url('{{ asset('img/aeronaves/aviones/Gulfstream-G100.webp') }}')">
                    <div class="aircraft-overlay">
                        <div class="aircraft-details">
                            <p>Capacidad: 14 pax</p>
                            <p>Velocidad: 935 km/h</p>
                            <p>Peso Max: 33,838kg</p>
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
        </div>
    </div>
</section>

<section class="heli-blogs-section">
    <div class="heli-container">
        <h2 class="heli-section-title">Blog</h2>
        <div class="heli-articles-grid">
            <article class="article-card">
                <div class="article-image">
                    <img src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=600&h=400&fit=crop" alt="Consejos de viaje">
                    <div class="article-category">Consejos</div>
                </div>
                <div class="article-content">
                    <div class="article-meta">
                        <span class="article-date"><i class="fas fa-calendar"></i> 12 Enero 2024</span>
                        <span class="article-read-time"><i class="fas fa-clock"></i> 5 min</span>
                    </div>
                    <h3 class="article-title">10 consejos para viajar cómodo en vuelos largos</h3>
                    <p class="article-excerpt">Maximiza tu comodidad en vuelos de larga distancia con estos consejos probados por expertos.</p>
                    <a href="#" class="article-link">Leer más <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>

            <article class="article-card">
                <div class="article-image">
                    <img src="https://images.unsplash.com/photo-1556388158-158ea5ccacbd?w=600&h=400&fit=crop" alt="Nueva flota">
                    <div class="article-category">Noticias</div>
                </div>
                <div class="article-content">
                    <div class="article-meta">
                        <span class="article-date"><i class="fas fa-calendar"></i> 10 Enero 2024</span>
                        <span class="article-read-time"><i class="fas fa-clock"></i> 3 min</span>
                    </div>
                    <h3 class="article-title">Aerolíneas del Sur incorpora nuevos Boeing 787 Dreamliner</h3>
                    <p class="article-excerpt">Nuestra flota se moderniza con aeronaves de última generación para brindarte mayor comodidad.</p>
                    <a href="#" class="article-link">Leer más <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>

            <article class="article-card">
                <div class="article-image">
                    <img src="https://images.unsplash.com/photo-1488646953014-85cb44e25828?w=600&h=400&fit=crop" alt="Experiencia de viaje">
                    <div class="article-category">Experiencias</div>
                </div>
                <div class="article-content">
                    <div class="article-meta">
                        <span class="article-date"><i class="fas fa-calendar"></i> 8 Enero 2024</span>
                        <span class="article-read-time"><i class="fas fa-clock"></i> 6 min</span>
                    </div>
                    <h3 class="article-title">Mi experiencia en Clase Ejecutiva: Lujo en las alturas</h3>
                    <p class="article-excerpt">Descubre cómo es volar en nuestra Clase Ejecutiva a través de la experiencia de nuestros pasajeros.</p>
                    <a href="#" class="article-link">Leer más <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>
        </div>
    </div>
</section>

<?php
    $h1_7 = 'Preguntas Frecuentes';
    $p_17 = 'Encuentra respuestas a las preguntas más comunes sobre nuestros servicios';
    $h3_8 = '¿Qué destinos cubren nuestros vuelos chárter?';
    $p_18 = 'Conectamos cada rincón del Perú, desde la costa hasta la Amazonía, y las principales capitales de Sudamérica. Diseñamos vuelos chárter a medida que se adaptan a tu agenda, garantizando acceso directo a destinos exclusivos de negocios o placer.';
    $h3_9 = '¿Cómo puedo hacer una reserva?';
    $p_19 = 'Puedes hacer tu reserva a través de nuestro sitio web, llamando a nuestro centro de atención al cliente o visitando una de nuestras oficinas. También puedes enviarnos un correo a contacto@aerolineadelsur.com.pe para obtener ayuda personalizada.';
    $h3_10 = '¿Cuál es la política de equipaje?';
    $p_20 = 'Aerolinea del Sur permite un máximo de 23 kg de equipaje por pasajero. Este estándar es esencial para mantener la operatividad y eficiencia de nuestros vuelos privados.';
    $h3_11 = '¿Qué medidas de seguridad aplica Aerolínea del Sur en sus operaciones?';
    $p_21 = 'Cumplimos con todos los estándares internacionales de seguridad aérea. Nuestras aeronaves reciben mantenimiento regular certificado, nuestros pilotos tienen entrenamiento continuo, y seguimos protocolos estrictos de seguridad en tierra y vuelo.';
    $h3_12 = '¿Ofrecen programas de viajero frecuente?';
    $p_22 = 'Sí, nuestro programa Cielos del Sur ofrece beneficios exclusivos como acumulación de millas, upgrades gratuitos, acceso a salas VIP, y prioridad en check-in. Únete gratis y comienza a disfrutar de privilegios desde tu primer vuelo';
?>

<section class="heli-faq-section faq-section">
    <div class="heli-container faq-container">
        <div class="faq-header">
            <h1><?= $h1_7 ?></h1>
            <p class="p"><?= $p_17 ?></p>
        </div>

        <div class="faq-grid">
            <div class="faq-item">
                <div class="faq-question" role="button" tabindex="0" aria-expanded="false" aria-controls="faq1">
                    <span class="faq-text"><?= $h3_8 ?></span>
                    <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer" id="faq1">
                    <p class="p"><?= $p_18 ?></p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" role="button" tabindex="0" aria-expanded="false" aria-controls="faq2">
                    <span class="faq-text"><?= $h3_9 ?></span>
                    <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer" id="faq2">
                    <p class="p"><?= $p_19 ?></p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" role="button" tabindex="0" aria-expanded="false" aria-controls="faq3">
                    <span class="faq-text"><?= $h3_10 ?></span>
                    <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer" id="faq3">
                    <p class="p"><?= $p_20 ?></p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" role="button" tabindex="0" aria-expanded="false" aria-controls="faq4">
                    <span class="faq-text"><?= $h3_11 ?></span>
                    <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer" id="faq4">
                    <p class="p"><?= $p_21 ?></p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" role="button" tabindex="0" aria-expanded="false" aria-controls="faq5">
                    <span class="faq-text"><?= $h3_12 ?></span>
                    <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer" id="faq5">
                    <p class="p"><?= $p_22 ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
