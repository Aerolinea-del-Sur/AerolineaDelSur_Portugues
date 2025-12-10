@extends('a_EncabezadoFooter.princi')
@section('content')
<?php
    $h1_page = 'Vuelos Privados';
    $breadcrumb = 'home/vuelos-privados';
    $h2_form = 'Reserva de Vuelo Privado';
?>

<link rel="stylesheet" href="{{ asset('/public/css/paginas/aeronaves/aeronaves.css') }}">

<header class="heli-header">
    <div class="heli-bg"></div>
    <div class="heli-dark"></div>
    <div class="heli-content">
        <div class="heli-badge">
            <i class="fas fa-plane"></i>
            <span><?= $breadcrumb ?></span>
        </div>
        <h1 class="heli-title"><?= $h1_page ?></h1>
        
        <form class="heli-form collapsed" method="post" action="{{ route('vuelos.send') }}">
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('.heli-form');
    
    // --- LÓGICA DE INTERFAZ (UI) ---

    // 1. Manejo de Tipo de Viaje (Mostrar/Ocultar Retorno)
    const radioButtons = form.querySelectorAll('input[name="tipo_viaje"]');
    const retornoField = form.querySelector('.js-retorno-field');
    const retornoInput = document.getElementById('fecha_retorno_header');

    radioButtons.forEach(radio => {
        radio.addEventListener('change', function() {
            if (this.value === 'ida_vuelta') {
                retornoField.style.display = 'block';
                retornoInput.setAttribute('required', 'required');
            } else {
                retornoField.style.display = 'none';
                retornoInput.removeAttribute('required');
                retornoInput.value = ''; // Limpiar valor
            }
        });
    });

    // 2. Manejo de Pasajeros (Dropdown y Contadores)
    const passengerInput = document.getElementById('passengerInput_header');
    const passengerDropdown = document.getElementById('passengerDropdown_header');
    const passengerDisplay = form.querySelector('.js-passenger-display');
    const confirmBtn = document.getElementById('confirmPassengers_header');
    
    // Toggle dropdown
    passengerInput.addEventListener('click', (e) => {
        e.stopPropagation();
        passengerDropdown.style.display = passengerDropdown.style.display === 'block' ? 'none' : 'block';
    });

    // Cerrar al confirmar o hacer clic fuera
    confirmBtn.addEventListener('click', () => passengerDropdown.style.display = 'none');
    document.addEventListener('click', (e) => {
        if (!passengerInput.contains(e.target) && !passengerDropdown.contains(e.target)) {
            passengerDropdown.style.display = 'none';
        }
    });

    // Lógica de botones +/-
    const counters = form.querySelectorAll('.counter');
    counters.forEach(counter => {
        const btnMinus = counter.querySelector('.btn-minus');
        const btnPlus = counter.querySelector('.btn-plus');
        const countSpan = counter.querySelector('.count');
        const type = countSpan.dataset.type; // 'adultos' o 'jovenes'

        btnPlus.addEventListener('click', () => updateCount(type, 1));
        btnMinus.addEventListener('click', () => updateCount(type, -1));
    });

    function updateCount(type, change) {
        const countSpan = form.querySelector(`.count[data-type="${type}"]`);
        const hiddenInput = form.querySelector(`.js-${type}`);
        let currentValue = parseInt(countSpan.textContent);
        let newValue = currentValue + change;

        // Validaciones (Mínimo 1 adulto, Mínimo 0 jóvenes)
        if (type === 'adultos' && newValue < 1) return;
        if (type === 'jovenes' && newValue < 0) return;

        // Actualizar UI y Hidden Inputs
        countSpan.textContent = newValue;
        hiddenInput.value = newValue;

        updateTotalPassengers();
    }

    function updateTotalPassengers() {
        const adultos = parseInt(form.querySelector('.js-adultos').value);
        const jovenes = parseInt(form.querySelector('.js-jovenes').value);
        const total = adultos + jovenes;

        // Actualizar input total y texto visible
        form.querySelector('.js-pasajeros').value = total;
        passengerDisplay.textContent = total + (total === 1 ? ' pasajero' : ' pasajeros');
    }

    // 3. Manejo de Comentarios (Checkbox)
    const checkComments = document.getElementById('show_comments_header');
    const commentsField = document.getElementById('comentarios-field_header');

    checkComments.addEventListener('change', function() {
        commentsField.style.display = this.checked ? 'block' : 'none';
    });


    // --- LÓGICA DE ENVÍO (AJAX) ---

    form.addEventListener('submit', function(e) {
        e.preventDefault();

        const submitBtn = form.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;

        // Limpiar errores previos
        document.querySelectorAll('.error-message').forEach(el => el.remove());
        document.querySelectorAll('.heli-input, .heli-select').forEach(el => el.style.borderColor = '');

        // Estado de carga
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Procesando...';
        submitBtn.disabled = true;

        const formData = new FormData(this);

        // Asegurarse de tener la URL correcta (si action="#" está vacío, usa la ruta definida en blade)
        // Puedes poner: action="{{ route('vuelos.send') }}" en el HTML o definirlo aquí:
        const url = this.action && this.action !== window.location.href ? this.action : '/enviar-vuelo'; 

        fetch(url, {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]')?.value || '{{ csrf_token() }}',
                'Accept': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Éxito: Usar SweetAlert o un alert simple
                alert(data.message); 
                form.reset();
                // Resetear contadores visuales
                document.querySelector('.count[data-type="adultos"]').textContent = '1';
                document.querySelector('.count[data-type="jovenes"]').textContent = '0';
                updateTotalPassengers();
                // Resetear visualización de retorno
                retornoField.style.display = 'block'; 
            } else {
                // Error de validación o servidor
                if (data.errors) {
                    displayValidationErrors(data.errors);
                } else {
                    alert(data.message || 'Ocurrió un error inesperado.');
                }
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Error de conexión.');
        })
        .finally(() => {
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
        });
    });

    function displayValidationErrors(errors) {
        for (const field in errors) {
            // Mapeo de campos a IDs del HTML si los nombres no coinciden exactamente
            // En tu caso los 'name' coinciden bien, pero por si acaso:
            let inputId = '';
            if (field === 'desde') inputId = 'desde_header';
            if (field === 'hacia') inputId = 'hacia_header';
            if (field === 'fecha_ida') inputId = 'fecha_ida_header';
            if (field === 'fecha_retorno') inputId = 'fecha_retorno_header';
            if (field === 'tipo_a') inputId = 'tipo_a_header';
            
            const input = document.getElementById(inputId) || document.querySelector(`[name="${field}"]`);
            
            if (input) {
                input.style.borderColor = '#dc3545';
                
                // Insertar mensaje de error
                const errorDiv = document.createElement('div');
                errorDiv.className = 'error-message';
                errorDiv.style.color = '#dc3545';
                errorDiv.style.fontSize = '0.8rem';
                errorDiv.style.marginTop = '4px';
                errorDiv.innerText = errors[field][0];
                
                // Insertar después del input o del contenedor padre si es complejo
                input.parentNode.appendChild(errorDiv);
            }
        }
    }
});
</script>


<section class="heli-fleet-section">
    <div class="heli-container">
        <h2 class="heli-section-title">Nuestras Aeronaves</h2>
        <div class="fleet-grid">
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
    const form = document.querySelector('.heli-form');
    
    if (!form) return;

    // --- 1. Manejo de Tipo de Viaje (Ida/Vuelta) ---
    const radioInputs = form.querySelectorAll('input[name="tipo_viaje"]');
    const retornoField = form.querySelector('.js-retorno-field');
    const retornoInput = document.getElementById('fecha_retorno_header');

    function toggleRetorno() {
        const isIdaVuelta = form.querySelector('input[name="tipo_viaje"]:checked').value === 'ida_vuelta';
        retornoField.style.display = isIdaVuelta ? 'block' : 'none';
        if (!isIdaVuelta) retornoInput.value = ''; // Limpiar si se oculta
    }

    radioInputs.forEach(input => input.addEventListener('change', toggleRetorno));
    toggleRetorno(); // Estado inicial

    // --- 2. Manejo de Pasajeros (Dropdown & Contadores) ---
    const passengerInput = form.querySelector('.js-passenger-input');
    const passengerDropdown = form.querySelector('.js-passenger-dropdown');
    const passengerDisplay = form.querySelector('.js-passenger-display');
    const hiddenTotal = form.querySelector('.js-pasajeros');
    const hiddenAdultos = form.querySelector('.js-adultos');
    const hiddenJovenes = form.querySelector('.js-jovenes');
    const confirmBtn = document.getElementById('confirmPassengers_header');

    // Toggle Dropdown
    passengerInput.addEventListener('click', (e) => {
        e.stopPropagation();
        passengerDropdown.classList.toggle('active');
        // Estilo visual simple para mostrar/ocultar
        passengerDropdown.style.display = passengerDropdown.classList.contains('active') ? 'block' : 'none';
    });

    // Cerrar al hacer clic fuera
    document.addEventListener('click', (e) => {
        if (!passengerInput.contains(e.target) && !passengerDropdown.contains(e.target)) {
            passengerDropdown.classList.remove('active');
            passengerDropdown.style.display = 'none';
        }
    });

    // Lógica de Contadores (+/-)
    form.querySelectorAll('.counter button').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.stopPropagation(); // Evitar cierre del dropdown
            const type = this.dataset.type;
            const isPlus = this.classList.contains('btn-plus');
            const spanCount = this.parentNode.querySelector('.count');
            let currentVal = parseInt(spanCount.textContent);

            // Reglas de límites
            if (!isPlus && currentVal === 0) return;
            if (!isPlus && type === 'adultos' && currentVal === 1) return; // Mínimo 1 adulto
            if (isPlus && getTotalPassengers() >= 8) return; // Máximo total ejemplo (ajustable)

            // Actualizar valor visual
            currentVal = isPlus ? currentVal + 1 : currentVal - 1;
            spanCount.textContent = currentVal;

            updateHiddenInputs();
        });
    });

    function getTotalPassengers() {
        const ad = parseInt(form.querySelector('.count[data-type="adultos"]').textContent);
        const jo = parseInt(form.querySelector('.count[data-type="jovenes"]').textContent);
        return ad + jo;
    }

    function updateHiddenInputs() {
        const ad = parseInt(form.querySelector('.count[data-type="adultos"]').textContent);
        const jo = parseInt(form.querySelector('.count[data-type="jovenes"]').textContent);
        const total = ad + jo;

        // Actualizar inputs ocultos para envío
        hiddenAdultos.value = ad;
        hiddenJovenes.value = jo;
        hiddenTotal.value = total;

        // Actualizar texto visible
        passengerDisplay.textContent = `${total} pasajero${total !== 1 ? 's' : ''}`;
    }

    if(confirmBtn) {
        confirmBtn.addEventListener('click', () => {
            passengerDropdown.style.display = 'none';
            passengerDropdown.classList.remove('active');
        });
    }

    // --- 3. Checkbox Comentarios ---
    const checkComments = form.querySelector('.js-show-comments');
    const commentsField = form.querySelector('.js-comentarios-field');
    
    if(checkComments && commentsField) {
        checkComments.addEventListener('change', function() {
            commentsField.style.display = this.checked ? 'block' : 'none';
        });
    }

    // --- 4. Envío AJAX del Formulario ---
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const btn = form.querySelector('button[type="submit"]');
        const originalText = btn.innerHTML;
        
        // Estado de carga
        btn.disabled = true;
        btn.innerHTML = 'Procesando...';
        
        // Limpiar errores previos (visual)
        form.querySelectorAll('.heli-input, .heli-select').forEach(el => el.style.borderColor = '');

        const formData = new FormData(this);

        fetch('/enviar-vuelo', { // Usa la ruta definida en Laravel
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content || '', // Asegúrate de tener meta tag csrf
                'Accept': 'application/json'
            }
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                alert(data.message); // O usa tu función showMessage personalizada
                form.reset();
                // Reset manual de UI de pasajeros
                form.querySelector('.count[data-type="adultos"]').textContent = '1';
                form.querySelector('.count[data-type="jovenes"]').textContent = '0';
                updateHiddenInputs();
            } else {
                alert(data.message || 'Error en la solicitud');
                // Manejo básico de errores de validación
                if (data.errors) {
                    console.table(data.errors);
                    // Aquí puedes llamar a tu función displayErrors(data.errors)
                }
            }
        })
        .catch(err => {
            console.error(err);
            alert('Error de conexión');
        })
        .finally(() => {
            btn.disabled = false;
            btn.innerHTML = originalText;
        });
    });
});
</script>
@endsection