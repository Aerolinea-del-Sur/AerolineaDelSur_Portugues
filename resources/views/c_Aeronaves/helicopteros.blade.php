@extends('a_EncabezadoFooter.princi')
@section('content')
<?php
    $h1_page = 'Helicopteros';
    $breadcrumb = 'home/helicopteros';

    $h2_form = 'Reserva de Helicóptero';
?>

<link rel="stylesheet" href="{{ asset('public/css/paginas/aeronaves/aeronaves.css') }}">

<header class="heli-header">
    <div class="heli-bg"></div>
    <div class="heli-dark"></div>
    <div class="heli-container">
        <h1 class="heli-title"><?= $h1_page ?></h1>
        <div class="heli-breadcrumb"><?= $breadcrumb ?></div>
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
                    <label class="heli-form-label" for="desde">Desde</label>
                    <input class="heli-input" type="text" id="desde" name="desde" placeholder="Ciudad / Helipuerto" required>
                </div>
                <div class="heli-field">
                    <label class="heli-form-label" for="hacia">Hacia</label>
                    <input class="heli-input" type="text" id="hacia" name="hacia" placeholder="Ciudad / Helipuerto" required>
                </div>
            </div>
            <div class="heli-form-extra">
                <div class="heli-form-grid">
                    <div class="heli-field">
                        <label class="heli-form-label" for="fecha_ida">Fecha de ida + hora</label>
                        <input class="heli-input" type="datetime-local" id="fecha_ida" name="fecha_ida" required>
                    </div>
                    <div class="heli-field" id="retorno-field">
                        <label class="heli-form-label" for="fecha_retorno">Fecha de retorno + hora</label>
                        <input class="heli-input" type="datetime-local" id="fecha_retorno" name="fecha_retorno">
                    </div>
                    <div class="heli-field">
                        <label class="heli-form-label" for="tipo_h">Tipo de helicóptero</label>
                        <select class="heli-select" id="tipo_h" name="tipo_h" required>
                            <option value="">Selecciona una opción</option>
                            <option value="mi8-mtv1">MI 8 MTV 1</option>
                            <option value="ecureuil-b3">Ecureuil B3</option>
                            <option value="kingair-b200">King Air B200</option>
                            <option value="kingair-b350">King Air B350</option>
                        </select>
                    </div>
                    <div class="heli-field">
                        <label class="heli-form-label" for="pasajeros">Número de pasajeros</label>
                        <input class="heli-input" type="number" id="pasajeros" name="pasajeros" min="1" max="16" value="1" required>
                    </div>
                </div>
                <div class="heli-field">
                    <label class="heli-form-label" for="comentarios">Comentarios adicionales</label>
                    <textarea class="heli-textarea" id="comentarios" name="comentarios" rows="4" placeholder="Especifica requerimientos especiales, equipaje, tiempos, etc."></textarea>
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
                <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/Mi8-mtv1.webp')">
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
                <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/Ecureuil-b3.webp')">
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
                <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/Air-King-B200.webp')">
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
                <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/AirKingB350.webp')">
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
                <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/Beechcraft1900D.webp')">
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
                <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/HondaJet.webp')">
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
                <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/Phenom100.webp')">
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
                <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/Gulfstream-G100.webp')">
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
                <button class="faq-question" aria-expanded="false" aria-controls="faq1">
                    <span class="faq-text"><?= $h3_8 ?></span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer" id="faq1">
                    <p class="p"><?= $p_18 ?></p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" aria-expanded="false" aria-controls="faq2">
                    <span class="faq-text"><?= $h3_9 ?></span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer" id="faq2">
                    <p class="p"><?= $p_19 ?></p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" aria-expanded="false" aria-controls="faq3">
                    <span class="faq-text"><?= $h3_10 ?></span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer" id="faq3">
                    <p class="p"><?= $p_20 ?></p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" aria-expanded="false" aria-controls="faq4">
                    <span class="faq-text"><?= $h3_11 ?></span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer" id="faq4">
                    <p class="p"><?= $p_21 ?></p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" aria-expanded="false" aria-controls="faq5">
                    <span class="faq-text"><?= $h3_12 ?></span>
                    <span class="faq-icon">+</span>
                </button>
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
});
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('.heli-form');
    const header = document.querySelector('.heli-header');
    const idaVuelta = form.querySelector('input[name="tipo_viaje"][value="ida_vuelta"]');
    const soloIda = form.querySelector('input[name="tipo_viaje"][value="solo_ida"]');
    const retornoField = document.getElementById('retorno-field');
    function updateRetorno() {
        const show = idaVuelta.checked;
        retornoField.style.display = show ? '' : 'none';
        form.querySelector('#fecha_retorno').required = show;
    }
    updateRetorno();
    idaVuelta.addEventListener('change', updateRetorno);
    soloIda.addEventListener('change', updateRetorno);
    function expand() {
        if (form.classList.contains('collapsed')) {
            form.classList.remove('collapsed');
            form.classList.add('expanded');
            header.classList.add('heli-blur');
        }
    }
    const triggers = form.querySelectorAll('.heli-form-top .heli-input, .heli-form-top .heli-radio input');
    triggers.forEach(el => {
        el.addEventListener('focus', expand);
        el.addEventListener('change', expand);
        el.addEventListener('click', expand);
    });
});
</script>
@endsection
