@extends('a_EncabezadoFooter.princi')
@section('content')
<?php
    $h1_page = 'Carga';
    $breadcrumb = 'home/Carga';
    $h2_form = 'Reserva de aeronave';
?>

<link rel="stylesheet" href="{{ asset('css/paginas/aeronaves/aeronaves.css') }}">

<header class="heli-header">
    <div class="heli-bg" style="background:url('{{ asset('img/service/servicio-carga.webp') }}') center/cover no-repeat fixed"></div>
    <div class="heli-dark"></div>
    <div class="heli-content">
        <div class="heli-badge">
            <i class="fas fa-helicopter"></i>
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
                <textarea class="heli-input" id="comentarios_header" name="comentarios" placeholder="Detalles, solicitudes especiales o notas" rows="3"></textarea>
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
            const idaInput = document.getElementById('fecha_ida_header');
            function nowMin(){
              const d = new Date();
              const pad = n => String(n).padStart(2,'0');
              return `${d.getFullYear()}-${pad(d.getMonth()+1)}-${pad(d.getDate())}T${pad(d.getHours())}:${pad(d.getMinutes())}`;
            }
            idaInput?.setAttribute('min', nowMin());
            function syncRetornoMin(){
              const m = idaInput?.value || idaInput?.getAttribute('min') || nowMin();
              retornoInput?.setAttribute('min', m);
            }
            syncRetornoMin();
            idaInput?.addEventListener('change', syncRetornoMin);
            function updateRetornoHighlight(){
              if(!retornoInput) return;
              if(retornoInput.value){
                retornoInput.classList.remove('retorno-gold');
              } else {
                retornoInput.classList.add('retorno-gold');
              }
            }
            updateRetornoHighlight();
            retornoInput?.addEventListener('change', updateRetornoHighlight);
            radioButtons.forEach(radio => {
              radio.addEventListener('change', function(){
                if(this.value === 'ida_vuelta'){
                  retornoField.style.display = 'block';
                  retornoInput.disabled = false;
                  retornoInput.setAttribute('required','required');
                  updateRetornoHighlight();
                } else {
                  retornoField.style.display = 'none';
                  retornoInput.disabled = true;
                  retornoInput.removeAttribute('required');
                  retornoInput.value='';
                  updateRetornoHighlight();
                }
              });
            });
            
            const selectedTipo = form.querySelector('input[name="tipo_viaje"]:checked')?.value;
            retornoField.style.display = selectedTipo === 'ida_vuelta' ? 'block' : 'none';
            if(selectedTipo === 'ida_vuelta'){
              retornoInput.disabled = false;
              retornoInput.setAttribute('required','required');
              updateRetornoHighlight();
            } else {
              retornoInput.disabled = true;
              retornoInput.removeAttribute('required');
              retornoInput.value='';
              updateRetornoHighlight();
            }

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



<style>
    .cargo-section { padding: 60px 0; background: #0f0f0f; }
    .cargo-container { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 20px; }
    .cargo-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 24px; }
    .cargo-card { position: relative; border-radius: 16px; overflow: hidden; min-height: 380px; color: #fff; }
    .cargo-card .bg { position: absolute; inset: 0; background-size: cover; background-position: center; filter: brightness(0.65) contrast(1.05); }
    .cargo-card .overlay { position: absolute; inset: 0; background: linear-gradient(180deg, rgba(0,0,0,0.35), rgba(0,0,0,0.65)); }
    .cargo-card .content { position: relative; z-index: 2; padding: 28px; display: flex; flex-direction: column; gap: 16px; }
    .cargo-title { font-size: 26px; font-weight: 800; color: var(--accent); text-transform: uppercase; letter-spacing: .06em; }
    .cargo-desc { font-size: 15px; line-height: 1.6; color: var(--pearl); }
    .cargo-variants { display: grid; grid-template-columns: repeat(2, 1fr); gap: 12px; }
    .cargo-variant { background: rgba(255,255,255,0.06); border: 1px solid rgba(212,175,55,0.35); border-radius: 12px; padding: 12px 14px; }
    .cargo-variant h4 { margin: 0 0 6px; font-size: 14px; color: var(--accent); }
    .cargo-variant p { margin: 0; font-size: 13px; color: #ddd; }
    .cargo-meta { display: flex; gap: 10px; flex-wrap: wrap; margin-top: 6px; }
    .chip { font-size: 12px; background: rgba(201,162,39,0.12); color: var(--accent); border: 1px solid rgba(201,162,39,0.35); padding: 6px 10px; border-radius: 999px; }
    @media (max-width: 992px) { .cargo-grid { grid-template-columns: 1fr; } .cargo-card { min-height: 320px; } }
</style>

<section class="cargo-section">
    <div class="cargo-container">
        <h2 class="heli-section-title">Servicios de Carga Especializada</h2>
        <p class="cargo-desc" style="margin-bottom: 22px;">
            Operamos carga aérea con procedimientos de seguridad certificados, trazabilidad completa y equipos especializados. 
            Gestionamos desde envíos internos de alta prioridad hasta operaciones externas internacionales con coordinación aduanera.
        </p>
        <div class="cargo-grid">
            <div class="cargo-card">
                <div class="bg" style="background-image:url('{{ asset('img/service/servicio-carga.webp') }}')"></div>
                <div class="overlay"></div>
                <div class="content">
                    <div class="cargo-title">Carga Interna</div>
                    <p class="cargo-desc">Movilización dentro del territorio nacional con rutas optimizadas y tiempos garantizados. Ideal para empresas, instituciones y operaciones críticas.</p>
                    <div class="cargo-variants">
                        <div class="cargo-variant">
                            <h4>Urgente</h4>
                            <p>Respuesta rápida 24/7, priorización de pista y cadena directa sin transbordos.</p>
                            <div class="cargo-meta">
                                <span class="chip">SLA garantizado</span>
                                <span class="chip">Seguimiento en tiempo real</span>
                            </div>
                        </div>
                        <div class="cargo-variant">
                            <h4>Pesada</h4>
                            <p>Equipos industriales y carga sobredimensionada con aeronaves de mayor capacidad y grúas de apoyo.</p>
                            <div class="cargo-meta">
                                <span class="chip">Estiba reforzada</span>
                                <span class="chip">Plan de seguridad</span>
                            </div>
                        </div>
                        <div class="cargo-variant">
                            <h4>Perecible</h4>
                            <p>Cadena de frío y tiempos de exposición mínimos. Procedimientos de embarque acelerados.</p>
                            <div class="cargo-meta">
                                <span class="chip">Control de temperatura</span>
                                <span class="chip">Rutas directas</span>
                            </div>
                        </div>
                        <div class="cargo-variant">
                            <h4>Valiosa</h4>
                            <p>Custodia especializada y protocolos de acceso restringido con monitoreo continuo.</p>
                            <div class="cargo-meta">
                                <span class="chip">Custodia</span>
                                <span class="chip">Monitoreo 24/7</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cargo-card">
                <div class="bg" style="background-image:url('{{ asset('img/service/servicio-carga-helicoptero.webp') }}')"></div>
                <div class="overlay"></div>
                <div class="content">
                    <div class="cargo-title">Carga Externa</div>
                    <p class="cargo-desc">Operaciones internacionales con coordinación aduanera y normativa ICAO/IATA. Ideal para exportaciones, proyectos y ayuda humanitaria.</p>
                    <div class="cargo-variants">
                        <div class="cargo-variant">
                            <h4>Peligrosa (DGR)</h4>
                            <p>Manejo conforme IATA DGR con embalaje homologado y documentación específica.</p>
                            <div class="cargo-meta">
                                <span class="chip">Clasificación UN</span>
                                <span class="chip">Embalaje certificado</span>
                            </div>
                        </div>
                        <div class="cargo-variant">
                            <h4>Proyecto</h4>
                            <p>Logística integral para obras y energía. Coordinación multimodal y ventanas de obra.</p>
                            <div class="cargo-meta">
                                <span class="chip">Multimodal</span>
                                <span class="chip">Ventanas programadas</span>
                            </div>
                        </div>
                        <div class="cargo-variant">
                            <h4>Humanitaria</h4>
                            <p>Respuesta rápida para desastres y emergencias. Priorización de carga crítica.</p>
                            <div class="cargo-meta">
                                <span class="chip">Fast-track</span>
                                <span class="chip">Coordinación autoridades</span>
                            </div>
                        </div>
                        <div class="cargo-variant">
                            <h4>Estandar Internacional</h4>
                            <p>Exportación e importación con asistencia documental y trazabilidad puerta a puerta.</p>
                            <div class="cargo-meta">
                                <span class="chip">Aduanas</span>
                                <span class="chip">Puerta a puerta</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>

<style>
  .cargo-gallery { padding: 30px 0 60px; background: #0f0f0f; }
  .cargo-gallery .cargo-container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }
  .cargo-gallery-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; }
  .gallery-item { border-radius: 12px; overflow: hidden; background: #121212; border: 1px solid rgba(212,175,55,0.25); }
  .gallery-item img { width: 100%; height: 210px; object-fit: cover; display: block; filter: contrast(1.03) saturate(1.05); }
  .gallery-caption { padding: 12px 14px; color: #ddd; font-size: 13px; }
  .gallery-caption strong { color: var(--accent); font-weight: 700; }
  @media (max-width: 992px) { .cargo-gallery-grid { grid-template-columns: 1fr 1fr; } }
  @media (max-width: 640px) { .cargo-gallery-grid { grid-template-columns: 1fr; } }
</style>
<section class="cargo-gallery">
  <div class="cargo-container">
    <h2 class="heli-section-title">Galería Operativa</h2>
    <div class="cargo-gallery-grid">
      <figure class="gallery-item">
        <img loading="lazy" src="{{ asset('img/servicios/Servicios-1.webp') }}" alt="Carga urgente puerta a puerta">
        <figcaption class="gallery-caption"><strong>Carga Urgente</strong> — tiempos garantizados y seguimiento en tiempo real.</figcaption>
      </figure>
      <figure class="gallery-item">
        <img loading="lazy" src="{{ asset('img/service/servicio-carga-helicoptero.webp') }}" alt="Operación de carga en helicóptero">
        <figcaption class="gallery-caption"><strong>Helicóptero</strong> — acceso a zonas remotas y respuesta rápida.</figcaption>
      </figure>
      <figure class="gallery-item">
        <img loading="lazy" src="{{ asset('img/servicios/Servicios-2.webp') }}" alt="Cadena de frío para carga perecible">
        <figcaption class="gallery-caption"><strong>Perecible</strong> — cadena de frío y rutas directas.</figcaption>
      </figure>
      <figure class="gallery-item">
        <img loading="lazy" src="{{ asset('img/servicios/Servicios-3.webp') }}" alt="Carga de proyecto sobredimensionada">
        <figcaption class="gallery-caption"><strong>Proyecto</strong> — carga sobredimensionada y coordinación multimodal.</figcaption>
      </figure>
      <figure class="gallery-item">
        <img loading="lazy" src="{{ asset('img/servicios/Servicios-4.webp') }}" alt="Custodia de carga valiosa">
        <figcaption class="gallery-caption"><strong>Valiosa</strong> — custodia especializada y acceso restringido.</figcaption>
      </figure>
      <figure class="gallery-item">
        <img loading="lazy" src="{{ asset('img/servicios/Servicios-5.webp') }}" alt="Exportación e importación con asistencia documental">
        <figcaption class="gallery-caption"><strong>Internacional</strong> — aduanas y trazabilidad puerta a puerta.</figcaption>
      </figure>
    </div>
  </div>
</section>
<section class="heli-fleet-section">
    <div class="heli-container">
        <h2 class="heli-section-title">Nuestras Aeronaves</h2>
        <div class="fleet-grid">
            <a href="/aeronaves/Mi8-mtv1" class="aircraft-card" style="text-decoration: none; color: inherit;">
                <div class="aircraft-image" style="background-image: url('{{ asset('img/aeronaves/aviones/Mi8-mtv1.webp') }}')">
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
                <div class="aircraft-image" style="background-image: url('{{ asset('img/aeronaves/aviones/Ecureuil-b3.webp') }}')">
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
