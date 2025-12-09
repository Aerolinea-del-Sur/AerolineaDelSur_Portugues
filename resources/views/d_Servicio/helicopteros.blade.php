@extends('a_EncabezadoFooter.princi')
@section('content')
<?php
    $h1_page = 'Helicopteros';
    $breadcrumb = 'home/helicopteros';
    $h2_form = 'Reserva de Helicóptero';
?>

<link rel="stylesheet" href="{{ asset('/public/css/paginas/aeronaves/aeronaves.css') }}">

<header class="heli-header">
    <div class="heli-bg"></div>
    <div class="heli-dark"></div>
    <div class="heli-content">
        <div class="heli-badge">
            <i class="fas fa-helicopter"></i>
            <span><?= $breadcrumb ?></span>
        </div>
        <h1 class="heli-title"><?= $h1_page ?></h1>
        
        <form class="heli-form collapsed" action="#" method="post">
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

            <div class="heli-form-top">
                <div class="heli-field">
                    <input class="heli-input" type="text" id="desde_header" name="desde" placeholder="Desde" required>
                </div>
                <div class="heli-field">
                    <input class="heli-input" type="text" id="hacia_header" name="hacia" placeholder="Hacia" required>
                </div>
                <div class="heli-field collapsible">
                    <label class="heli-form-label" for="fecha_ida_header">Fecha de ida</label>
                    <input class="heli-input" type="datetime-local" id="fecha_ida_header" name="fecha_ida" placeholder="Fecha de ida" required>
                </div>
                <div class="heli-field collapsible js-retorno-field" id="retorno-field_header">
                    <label class="heli-form-label" for="fecha_retorno_header">Fecha de retorno</label>
                    <input class="heli-input" type="datetime-local" id="fecha_retorno_header" name="fecha_retorno" placeholder="Fecha de retorno">
                </div>
            </div>

            <div class="heli-form-extra">
                <div class="heli-form-row2">
                    <div class="heli-field">
                        <select class="heli-select" id="tipo_h_header" name="tipo_h" required>
                            <option value="" selected disabled>Tipo de helicóptero</option>
                            <option value="mi8-mtv1">MI 8 MTV 1</option>
                            <option value="ecureuil-b3">Ecureuil B3</option>
                            <option value="kingair-b200">King Air B200</option>
                            <option value="kingair-b350">King Air B350</option>
                        </select>
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
                    <div class="heli-field">
                        <div class="checkbox-group">
                            <input class="form-checkbox js-show-comments" type="checkbox" id="show_comments_header">
                            <label class="checkbox-label" for="show_comments_header">Añadir comentarios</label>
                        </div>
                    </div>
                </div>
                <div class="heli-field js-comentarios-field" id="comentarios-field_header" style="display:none;">
                    <textarea class="heli-textarea js-comentarios" id="comentarios_header" name="comentarios" rows="4" placeholder="Especifica requerimientos especiales, equipaje, tiempos, etc."></textarea>
                </div>
                <div class="heli-actions">
                    <button type="submit" class="heli-btn">Reservar</button>
                </div>
            </div>
        </form>
    </div>
</header>



<section class="heli-fleet-section">
    <div class="heli-container">
        <h2 class="heli-section-title">Nuestras Aeronaves</h2>
        <div class="fleet-grid">
            <a href="/aeronaves/Mi8-mtv1" class="aircraft-card" style="text-decoration: none; color: inherit;">
                <div class="aircraft-image" style="background-image: url('{{ asset('public/img/aeronaves/aviones/Mi8-mtv1.webp') }}')">
                    <div class="aircraft-overlay">
                        <div class="aircraft-details">
                            <p>Capacidad: 5 pax</p>
                            <p>Velocidad: 287 km/h</p>
                            <p>Autonomía: 650 km</p>
                        </div>
                    </div>
                </div>
                <div class="aircraft-info">
                    <h3 class="aircraft-name">MI 8 MTV 1</h3>
                    <div class="aircraft-types">
                        <span class="aircraft-type transport">Transporte</span>
                    </div>
                    <div class="view-details-btn">Ver más información</div>
                </div>
            </a>

            <a href="/aeronaves/Ecureuil-b3" class="aircraft-card" style="text-decoration: none; color: inherit;">
                <div class="aircraft-image" style="background-image: url('{{ asset('public/img/aeronaves/aviones/Ecureuil-b3.webp') }}')">
                    <div class="aircraft-overlay">
                        <div class="aircraft-details">
                            <p>Capacidad: 5 pax</p>
                            <p>Velocidad: 287 km/h</p>
                            <p>Autonomía: 650 km</p>
                        </div>
                    </div>
                </div>
                <div class="aircraft-info">
                    <h3 class="aircraft-name">Ecureuil B3</h3>
                    <div class="aircraft-types">
                        <span class="aircraft-type transport">Transporte</span>
                    </div>
                    <div class="view-details-btn">Ver más información</div>
                </div>
            </a>

            <a href="/aeronaves/KingAirB200" class="aircraft-card" style="text-decoration: none; color: inherit;">
                <div class="aircraft-image" style="background-image: url('{{ asset('public/img/aeronaves/aviones/Air-King-B200.webp') }}')">
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
                <div class="aircraft-image" style="background-image: url('{{ asset('public/img/aeronaves/aviones/AirKingB350.webp') }}')">
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
                <div class="aircraft-image" style="background-image: url('{{ asset('public/img/aeronaves/aviones/Beechcraft1900D.webp') }}')">
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
                <div class="aircraft-image" style="background-image: url('{{ asset('public/img/aeronaves/aviones/HondaJet.webp') }}')">
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
                <div class="aircraft-image" style="background-image: url('{{ asset('public/img/aeronaves/aviones/Phenom100.webp') }}')">
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
                <div class="aircraft-image" style="background-image: url('{{ asset('public/img/aeronaves/aviones/Gulfstream-G100.webp') }}')">
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        question.addEventListener('click', function() {
            const isActive = item.classList.contains('active');
            faqItems.forEach(other => { if (other !== item) other.classList.remove('active'); });
            if (isActive) item.classList.remove('active'); else item.classList.add('active');
        });
    });

    const forms = document.querySelectorAll('.heli-form');
    forms.forEach(form => {
        const formSection = form.closest('.heli-form-section');
        const idaVuelta = form.querySelector('input[type="radio"][value="ida_vuelta"]');
        const soloIda = form.querySelector('input[type="radio"][value="solo_ida"]');
        
        const retornoField = form.querySelector('.js-retorno-field');
        const showComments = form.querySelector('.js-show-comments');
        const comentariosField = form.querySelector('.js-comentarios-field');
        const fechaRetornoInput = form.querySelector('input[name="fecha_retorno"]');
        const comentariosInput = form.querySelector('.js-comentarios');

        function updateRetorno() {
            if (!idaVuelta) return;
            const show = idaVuelta.checked;
            if (retornoField) retornoField.style.display = show ? '' : 'none';
            if (fechaRetornoInput) fechaRetornoInput.required = show;
        }

        function updateComments() {
            const show = showComments && showComments.checked;
            if (comentariosField) comentariosField.style.display = show ? '' : 'none';
            if (comentariosInput) comentariosInput.required = show;
        }

        function expand() {
            if (form.classList.contains('collapsed')) {
                form.classList.remove('collapsed');
                form.classList.add('expanded');
                if (formSection) formSection.classList.add('heli-blur');
            }
        }

        updateRetorno();
        updateComments();

        if (idaVuelta) idaVuelta.addEventListener('change', updateRetorno);
        if (soloIda) soloIda.addEventListener('change', updateRetorno);
        if (showComments) showComments.addEventListener('change', updateComments);

        const triggers = form.querySelectorAll('.heli-form-top .heli-input, .heli-form-top .heli-radio input');
        triggers.forEach(el => {
            el.addEventListener('focus', expand);
            el.addEventListener('change', expand);
            el.addEventListener('click', expand);
        });

        const passengerInput = form.querySelector('.js-passenger-input');
        const passengerDropdown = form.querySelector('.js-passenger-dropdown');
        const displayEl = form.querySelector('.js-passenger-display');
        const hiddenTotal = form.querySelector('.js-pasajeros');
        const hiddenAdultos = form.querySelector('.js-adultos');
        const hiddenJovenes = form.querySelector('.js-jovenes');
        const confirmBtn = form.querySelector('.confirm-passengers');
        
        const maxTotal = 16;

        function updateDisplay() {
            if (!hiddenAdultos || !hiddenJovenes || !displayEl) return;
            const adultos = parseInt(hiddenAdultos.value, 10) || 0;
            const jovenes = parseInt(hiddenJovenes.value, 10) || 0;
            const total = adultos + jovenes;
            if (hiddenTotal) hiddenTotal.value = total;
            displayEl.textContent = total + (total === 1 ? ' pasajero' : ' pasajeros');
        }

        function setCount(type, delta) {
            const currentEl = passengerDropdown.querySelector('.count[data-type="'+type+'"]');
            if (!currentEl) return;
            
            let current = parseInt(currentEl.textContent, 10);
            let adultos = parseInt(hiddenAdultos.value, 10) || 0;
            let jovenes = parseInt(hiddenJovenes.value, 10) || 0;
            const totalBefore = adultos + jovenes;

            if (delta > 0 && totalBefore >= maxTotal) return;

            current += delta;
            if (type === 'adultos') { if (current < 1) current = 1; }
            else { if (current < 0) current = 0; }

            currentEl.textContent = current;
            if (type === 'adultos') hiddenAdultos.value = current;
            if (type === 'jovenes') hiddenJovenes.value = current;
            updateDisplay();
        }

        if (passengerInput) {
            passengerInput.addEventListener('click', function(){
                if (passengerDropdown) passengerDropdown.style.display = 'block';
                expand();
            });
        }

        if (passengerDropdown) {
            passengerDropdown.addEventListener('click', function(e){
                const minus = e.target.closest('.btn-minus');
                const plus = e.target.closest('.btn-plus');
                if (minus) setCount(minus.dataset.type, -1);
                if (plus) setCount(plus.dataset.type, 1);
            });
        }

        if (confirmBtn) {
            confirmBtn.addEventListener('click', function(){
                if (passengerDropdown) passengerDropdown.style.display = 'none';
            });
        }

        document.addEventListener('click', function(e){
            if (passengerDropdown && passengerInput) {
                if (!passengerDropdown.contains(e.target) && !passengerInput.contains(e.target)) {
                    passengerDropdown.style.display = 'none';
                }
            }
            if (!form.contains(e.target)) {
                form.classList.remove('expanded');
                form.classList.add('collapsed');
                if (formSection) formSection.classList.remove('heli-blur');
            }
        });
        
        updateDisplay();
    });
});
</script>
@endsection
