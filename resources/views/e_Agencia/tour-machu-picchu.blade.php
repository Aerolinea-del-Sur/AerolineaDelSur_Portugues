@extends('a_EncabezadoFooter.princi')
@section('content')

<?php
    $h1_1 = 'Vuelo Panorámico sobre Machu Picchu';
    $p_1 = 'Descubre la majestuosidad de la ciudadela inca desde una perspectiva única en el aire';

        $h2_1 = 'Detalles del Tour';
        $p_2 = 'Embárcate en una aventura aérea inolvidable sobre una de las Siete Maravillas del Mundo Moderno. Nuestro vuelo panorámico te llevará a través de los cielos del Valle Sagrado, ofreciéndote vistas espectaculares de Machu Picchu, el río Urubamba y los imponentes picos andinos.';
        $p_3 = 'Durante este tour exclusivo, volarás en una aeronave moderna y segura, acompañado por pilotos experimentados que conocen cada rincón de esta región mágica. Captura fotografías únicas y crea recuerdos que durarán toda la vida.';

                $h4_1 = 'Aeronave Moderna';
                $p_4 = 'Cessna 206 con ventanas panorámicas';

                $h4_2 = 'Piloto Certificado';
                $p_5 = 'Más de 10 años de experiencia';

                $h4_3 = 'Fotografía Aérea';
                $p_6 = 'Oportunidades únicas de captura';

            $h3_1 = 'Galería de Imágenes';

        $h2_2 = 'Resumen del Viaje';

            $h3_2 = 'Highlights Principales';

                $h4_4 = 'Vista de Machu Picchu';
                $p_7 = 'Perspectiva aérea única de la ciudadela inca';

                $h4_5 = 'Valle Sagrado';
                $p_8 = 'Sobrevuela el místico valle de los incas';

                $h4_6 = 'Fotografía Profesional';
                $p_9 = 'Capturas aéreas espectaculares';

                $h4_7 = 'Historia Viva';
                $p_10 = 'Narración histórica durante el vuelo';                

            $h3_3 = 'Estadísticas del Tour';
        
        $h2_3 = 'Itinerario Detallado';

                $h4_8 = 'Recogida en Hotel';
                $p_11 = 'Transporte desde tu hotel en Cusco hacia el aeropuerto de Chinchero';

                $h4_9 = 'Briefing de Seguridad';
                $p_12 = 'Instrucciones de seguridad y presentación del equipo de vuelo';

                $h4_10 = 'Despegue';
                $p_13 = 'Inicio del vuelo panorámico hacia el Valle Sagrado';

                $h4_11 = 'Sobrevuelo de Machu Picchu';
                $p_14 = 'Vista aérea espectacular de la ciudadela inca y tiempo para fotografías';

                $h4_12 = 'Valle Sagrado';
                $p_15 = 'Recorrido aéreo por el valle con vistas del río Urubamba';

                $h4_13 = 'Regreso y Aterrizaje';
                $p_16 = 'Vuelta al aeropuerto y traslado de regreso a tu hotel';


        $h2_4 = 'Inclusiones del Tour';

            $h3_4 = 'Incluido';
            $h3_5 = 'No Incluido';

                $h4_14 = 'Notas Importantes';

        $h2_5 = 'Otros Tours Recomendados';

                $h4_15 = 'Líneas de Nazca';
                $p_19 = 'Descubre los misteriosos geoglifos desde el aire en este tour de día completo.';

                $h4_16 = 'Vuelo Amazónico';
                $p_20 = 'Explora la selva peruana desde las alturas y observa la biodiversidad única.';

                $h4_17 = 'Costa Peruana';
                $p_21 = 'Sobrevuela la hermosa costa del Pacífico y las islas Ballestas.';

            $h3_6 = 'Reserva tu Tour';

            $p_21 = '* Campos obligatorios. Te contactaremos en 24 horas para confirmar tu reserva.';
?>

    <link rel="stylesheet" href="{{ asset('public/css/paginas/agencia/1_TourGeneral.css') }}">
    <!-- Sección Hero -->
    <section class="tour-hero">
        <div class="hero-background">
            <img src="https://images.unsplash.com/photo-1587595431973-160d0d94add1?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" alt="Machu Picchu desde el aire">
            <div class="hero-overlay"></div>
        </div>
        <div class="hero-content">
            <div class="tour-badges">
                <span class="badge popular">POPULAR</span>
                <span class="badge exclusive">EXCLUSIVO</span>
            </div>
            <h1 class="tour-title"><?= $h1_1 ?></h1>
            <p class="tour-subtitle"><?= $p_1 ?></p>
            <div class="tour-meta">
                <div class="meta-item">
                    <i class="fas fa-clock"></i>
                    <span>2.5 horas</span>
                </div>
                <div class="meta-item">
                    <i class="fas fa-users"></i>
                    <span>Hasta 6 personas</span>
                </div>
                <div class="meta-item">
                    <i class="fas fa-tag"></i>
                    <span>Desde $450 USD</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Detalles Generales -->
    <section class="tour-details">
        <div class="container">
            <div class="details-grid">
                <div class="details-content">
                    <h2 class="section-title"><?= $h2_1 ?></h2>
                    <p class="tour-description"><?= $p_2 ?>
                    </p>
                    <p class="tour-description"><?= $p_3 ?></p>
                    <div class="detail-items">
                        <div class="detail-item">
                            <i class="fas fa-plane"></i>
                            <div>
                                <h4><?= $h4_1 ?></h4>
                                <p><?= $p_4 ?></p>
                            </div>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-user-tie"></i>
                            <div>
                                <h4><?= $h4_2 ?></h4>
                                <p><?= $p_5 ?></p>
                            </div>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-camera"></i>
                            <div>
                                <h4><?= $h4_3 ?></h4>
                                <p><?= $p_6 ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gallery-section">
                    <h3><?= $h3_1 ?></h3>
                    <div class="image-carousel">
                        <div class="carousel-container" id="carouselContainer">
                            <div class="carousel-slide active">
                                <img src="https://images.unsplash.com/photo-1587595431973-160d0d94add1?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Vista aérea de Machu Picchu">
                            </div>
                            <div class="carousel-slide">
                                <img src="https://images.unsplash.com/photo-1526392060635-9d6019884377?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Valle Sagrado desde el aire">
                            </div>
                            <div class="carousel-slide">
                                <img src="https://images.unsplash.com/photo-1531065208531-4036c0dba3ca?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Montañas andinas">
                            </div>
                            <div class="carousel-slide">
                                <img src="https://images.unsplash.com/photo-1539650116574-75c0c6d73f6e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Río Urubamba">
                            </div>
                        </div>
                        <button class="carousel-btn prev" onclick="moveSlide(-1)">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="carousel-btn next" onclick="moveSlide(1)">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                        <div class="carousel-indicators">
                            <span class="indicator active" onclick="currentSlide(1)"></span>
                            <span class="indicator" onclick="currentSlide(2)"></span>
                            <span class="indicator" onclick="currentSlide(3)"></span>
                            <span class="indicator" onclick="currentSlide(4)"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Resumen del Viaje -->
    <section class="trip-summary">
        <div class="container">
            <h2 class="section-title"><?= $h2_2 ?></h2>
            <div class="summary-grid">
                <div class="highlights">
                    <h3><?= $h3_2 ?></h3>
                    <div class="highlight-items">
                        <div class="highlight-item">
                            <i class="fas fa-mountain"></i>
                            <h4><?= $h4_4 ?></h4>
                            <p><?= $p_7 ?></p>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-water"></i>
                            <h4><?= $h4_5 ?></h4>
                            <p><?= $p_8 ?></p>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-camera-retro"></i>
                            <h4><?= $h4_6 ?></h4>
                            <p><?= $p_9 ?></p>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-history"></i>
                            <h4><?= $h4_7 ?></h4>
                            <p><?= $p_10 ?></p>
                        </div>
                    </div>
                </div>
                <div class="statistics">
                    <h3><?= $h3_3 ?></h3>
                    <div class="stats-grid">
                        <div class="stat-item">
                            <div class="stat-number">2.5</div>
                            <div class="stat-label">Horas de vuelo</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">3,400</div>
                            <div class="stat-label">Metros de altitud</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">150</div>
                            <div class="stat-label">Km recorridos</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">98%</div>
                            <div class="stat-label">Satisfacción</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Itinerario Detallado -->
    <section class="detailed-itinerary">
        <div class="container">
            <h2 class="section-title"><?= $h2_3 ?></h2>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h4><?= $h4_8 ?></h4>
                        <p><?= $p_11 ?></p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h4><?= $h4_9 ?></h4>
                        <p><?= $p_12 ?></p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h4><?= $h4_10 ?></h4>
                        <p><?= $p_13 ?></p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h4><?= $h4_11 ?></h4>
                        <p><?= $p_14 ?></p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h4><?= $h4_12 ?></h4>
                        <p><?= $p_15 ?></p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h4><?= $h4_13 ?></h4>
                        <p><?= $p_16 ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Inclusiones -->
    <section class="inclusions">
        <div class="container">
            <h2 class="section-title"><?= $h2_4 ?></h2>
            <div class="inclusions-grid">
                <div class="included">
                    <h3><i class="fas fa-check-circle"></i><?= $h3_4 ?></h3>
                    <ul>
                        <li><i class="fas fa-check"></i> Vuelo panorámico de 2.5 horas</li>
                        <li><i class="fas fa-check"></i> Transporte hotel-aeropuerto-hotel</li>
                        <li><i class="fas fa-check"></i> Piloto certificado y experimentado</li>
                        <li><i class="fas fa-check"></i> Briefing de seguridad completo</li>
                        <li><i class="fas fa-check"></i> Seguro de vuelo incluido</li>
                        <li><i class="fas fa-check"></i> Certificado de participación</li>
                        <li><i class="fas fa-check"></i> Fotografías digitales del vuelo</li>
                    </ul>
                </div>
                <div class="not-included">
                    <h3><i class="fas fa-times-circle"></i><?= $h3_5 ?></h3>
                    <ul>
                        <li><i class="fas fa-times"></i> Propinas para el piloto</li>
                        <li><i class="fas fa-times"></i> Gastos personales</li>
                        <li><i class="fas fa-times"></i> Seguro de viaje personal</li>
                        <li><i class="fas fa-times"></i> Actividades adicionales</li>
                        <li><i class="fas fa-times"></i> Comidas y bebidas</li>
                        <li><i class="fas fa-times"></i> Entrada a Machu Picchu terrestre</li>
                    </ul>
                </div>
            </div>
            <div class="important-notes">
                <h4><i class="fas fa-exclamation-triangle"></i><?= $h4_14 ?></h4>
                <ul>
                    <li>Peso máximo por pasajero: 100 kg</li>
                    <li>Edad mínima: 8 años (menores acompañados)</li>
                    <li>Condiciones climáticas pueden afectar el vuelo</li>
                    <li>Se requiere documento de identidad válido</li>
                    <li>Cancelación gratuita hasta 24 horas antes</li>
                    <li>Vuelo sujeto a condiciones meteorológicas</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Tours Recomendados -->
    <section class="recommended-tours">
        <div class="container">
            <h2 class="section-title"><?= $h2_5 ?></h2>
            <div class="tours-grid">
                <div class="tour-card">
                    <div class="tour-image">
                        <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Líneas de Nazca">
                        <div class="tour-badge">POPULAR</div>
                    </div>
                    <div class="tour-content">
                        <h4><?= $h4_15 ?></h4>
                        <p><?= $p_19 ?></p>
                        <div class="tour-details">
                            <span><i class="fas fa-clock"></i> 1.5 horas</span>
                            <span><i class="fas fa-users"></i> 4 personas</span>
                        </div>
                        <div class="tour-footer">
                            <span class="tour-more">Conoce más >></span>
                        </div>
                    </div>
                </div>
                <div class="tour-card">
                    <div class="tour-image">
                        <img src="https://images.unsplash.com/photo-1583416750470-965b2707b355?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Vuelo Amazónico">
                        <div class="tour-badge">NUEVO</div>
                    </div>
                    <div class="tour-content">
                        <h4><?= $h4_16 ?></h4>
                        <p><?= $p_20 ?></p>
                        <div class="tour-details">
                            <span><i class="fas fa-clock"></i> 3 horas</span>
                            <span><i class="fas fa-users"></i> 6 personas</span>
                        </div>
                        <div class="tour-footer">
                            <span class="tour-more">Conoce más >></span>
                        </div>
                    </div>
                </div>
                <div class="tour-card">
                    <div class="tour-image">
                        <img src="https://images.unsplash.com/photo-1469474968028-56623f02e42e?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Costa Peruana">
                        <div class="tour-badge">EXCLUSIVO</div>
                    </div>
                    <div class="tour-content">
                        <h4><?= $h4_17 ?></h4>
                        <p><?= $p_21 ?></p>
                        <div class="tour-details">
                            <span><i class="fas fa-clock"></i> 2.5 horas</span>
                            <span><i class="fas fa-users"></i> 5 personas</span>
                        </div>
                        <div class="tour-footer">
                            <span class="tour-more">Conoce más >></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Formulario de Reserva Lateral -->
    <div class="booking-sidebar" id="bookingSidebar">
        <div class="booking-form-container">
            <div class="booking-header">
                <h3><?= $h3_6 ?></h3>
                <button class="close-form" onclick="toggleBookingForm()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <form class="booking-form" id="bookingForm" method="POST" action="{{ route('turismo.send') }}">
                @csrf
                <div class="form-group">
                    <label for="fullName">Nombre Completo *</label>
                    <input type="text" id="fullName" name="fullName" required>
                </div>
                <div class="form-group">
                    <label for="email">Correo Electrónico *</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Teléfono *</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="tourDate">Fecha del Tour *</label>
                    <input type="date" id="tourDate" name="tourDate" required>
                </div>
                <div class="form-group">
                    <label for="tourName">Nombre del Tour *</label>
                    <input type="text" id="tourName" name="tourName" value="Vuelo Panorámico sobre Machu Picchu" required readonly>
                </div>
                <div class="form-group">
                    <label for="passengers">Número de Pasajeros *</label>
                    <select id="passengers" name="passengers" required>
                        <option value="">Seleccionar...</option>
                        <option value="1">1 Pasajero</option>
                        <option value="2">2 Pasajeros</option>
                        <option value="3">3 Pasajeros</option>
                        <option value="4">4 Pasajeros</option>
                        <option value="5">5 Pasajeros</option>
                        <option value="6">6 Pasajeros</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="specialRequests">Solicitudes Especiales</label>
                    <textarea id="specialRequests" name="specialRequests" rows="3" placeholder="Alergias, necesidades especiales, etc."></textarea>
                </div>
                <button type="submit" class="submit-btn">
                    <i class="fas fa-paper-plane"></i>
                    Enviar Solicitud
                </button>
                <p class="form-note"><?= $p_21 ?></p>
            </form>
        </div>
    </div>

    <!-- Botón de Reserva Flotante -->
    <div class="floating-booking">
        <button class="booking-btn" onclick="toggleBookingForm()">
            <i class="fas fa-calendar-check"></i>
            Reservar Tour
        </button>
    </div>




<script>
document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('bookingForm');

    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        // 🔹 Recolectar datos del formulario
        const datos = {
            fullName: document.getElementById('fullName').value.trim(),
            email: document.getElementById('email').value.trim(),
            phone: document.getElementById('phone').value.trim(),
            tourDate: document.getElementById('tourDate').value,
            tourName: document.getElementById('tourName').value,
            passengers: document.getElementById('passengers').value,
            specialRequests: document.getElementById('specialRequests').value.trim(),
        };

        console.log("📤 Enviando datos de turismo:", datos);

        try {
            // 🔹 Mostrar mensaje de carga
            const submitButton = document.querySelector('.submit-btn');
            const originalText = submitButton.innerHTML;
            submitButton.disabled = true;
            submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Enviando...';

            // 🔹 Enviar al backend Laravel
            const response = await fetch("{{ route('turismo.send') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}",
                    "X-Requested-With": "XMLHttpRequest",
                    "Accept": "application/json"
                },
                body: JSON.stringify(datos)
            });

            // 🔹 Verificar si la respuesta es JSON
            const contentType = response.headers.get("content-type");
            if (!contentType || !contentType.includes("application/json")) {
                console.error("❌ Respuesta no es JSON");
                const textResponse = await response.text();
                console.error("Respuesta recibida:", textResponse.substring(0, 300));
                throw new Error("El servidor no devolvió una respuesta JSON válida");
            }

            const resultado = await response.json();
            console.log("📥 Respuesta del servidor:", resultado);

            // 🔹 Mostrar mensaje al usuario
            if (resultado.success) {
                showMessage(resultado.message, 'success');
                form.reset();
            } else {
                if (resultado.errors) {
                    // Mostrar errores de validación
                    displayErrors(resultado.errors);
                } else {
                    showMessage(resultado.message || "⚠️ Ocurrió un error al enviar la solicitud", 'error');
                }
            }

        } catch (error) {
            console.error("❌ Error en el envío:", error);
            showMessage("❌ Error de conexión. Por favor, intenta nuevamente.", 'error');
        } finally {
            // 🔹 Restaurar botón
            const submitButton = document.querySelector('.submit-btn');
            submitButton.disabled = false;
            submitButton.innerHTML = '<i class="fas fa-paper-plane"></i> Enviar Solicitud';
        }
    });

    // 🔹 FUNCIÓN PARA MOSTRAR MENSAJES
    function showMessage(message, type) {
        // Limpiar mensajes anteriores
        hideMessage();
        
        const messageDiv = document.createElement('div');
        messageDiv.className = `alert alert-${type}`;
        messageDiv.innerHTML = message;
        messageDiv.style.cssText = `
            padding: 12px 16px;
            margin-bottom: 20px;
            border-radius: 8px;
            font-weight: 500;
            ${type === 'success' ? 
                'background-color: #d4edda; border: 1px solid #c3e6cb; color: #155724;' : 
                'background-color: #f8d7da; border: 1px solid #f5c6cb; color: #721c24;'
            }
        `;
        
        // Insertar antes del formulario
        form.parentNode.insertBefore(messageDiv, form);
        
        // Auto-ocultar después de 5 segundos (solo éxito)
        if (type === 'success') {
            setTimeout(() => {
                messageDiv.remove();
            }, 5000);
        }
    }

    // 🔹 FUNCIÓN PARA OCULTAR MENSAJES
    function hideMessage() {
        const existingAlerts = document.querySelectorAll('.alert');
        existingAlerts.forEach(alert => alert.remove());
    }

    // 🔹 FUNCIÓN PARA MOSTRAR ERRORES DE VALIDACIÓN
    function displayErrors(errors) {
        // Limpiar errores anteriores
        clearErrors();
        
        for (const field in errors) {
            const errorElement = document.getElementById(field + 'Error');
            const inputElement = document.getElementById(field);
            
            if (errorElement) {
                errorElement.textContent = errors[field][0];
                errorElement.style.cssText = `
                    color: #dc3545;
                    font-size: 0.875em;
                    display: block;
                    margin-top: 5px;
                `;
            }
            
            if (inputElement) {
                inputElement.style.borderColor = '#dc3545';
                
                // Remover el estilo de error cuando el usuario empiece a escribir
                inputElement.addEventListener('input', function() {
                    this.style.borderColor = '';
                    const errorEl = document.getElementById(field + 'Error');
                    if (errorEl) errorEl.textContent = '';
                });
            }
        }
    }

    // 🔹 FUNCIÓN PARA LIMPIAR ERRORES
    function clearErrors() {
        const errorElements = document.querySelectorAll('[id$="Error"]');
        errorElements.forEach(element => {
            element.textContent = '';
        });
        
        // Restaurar bordes de inputs
        const inputs = form.querySelectorAll('input, select, textarea');
        inputs.forEach(input => {
            input.style.borderColor = '';
        });
    }

    // 🔹 ESTABLECER FECHA MÍNIMA COMO HOY
    const tourDateInput = document.getElementById('tourDate');
    if (tourDateInput) {
        const today = new Date().toISOString().split('T')[0];
        tourDateInput.min = today;
        
        // Prevenir fechas pasadas
        tourDateInput.addEventListener('change', function() {
            const selectedDate = new Date(this.value);
            const today = new Date();
            today.setHours(0, 0, 0, 0);
            
            if (selectedDate < today) {
                showMessage("❌ No puedes seleccionar una fecha pasada", 'error');
                this.value = '';
            }
        });
    }

    // 🔹 VALIDACIÓN EN TIEMPO REAL
    const emailInput = document.getElementById('email');
    if (emailInput) {
        emailInput.addEventListener('blur', function() {
            const email = this.value.trim();
            if (email && !isValidEmail(email)) {
                showMessage("❌ Por favor, ingresa un email válido", 'error');
                this.style.borderColor = '#dc3545';
            }
        });
    }

    // 🔹 FUNCIÓN PARA VALIDAR EMAIL
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    // 🔹 CONFIRMACIÓN ANTES DE ENVIAR (OPCIONAL)
    form.addEventListener('submit', function(e) {
        const passengers = document.getElementById('passengers').value;
        const tourDate = document.getElementById('tourDate').value;
        
        if (!passengers || !tourDate) {
            showMessage("❌ Por favor, completa todos los campos requeridos", 'error');
            return;
        }
        
        console.log("✅ Formulario validado, procediendo con envío...");
    });
});
</script>
    <script>
        // Smooth scrolling para enlaces internos
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

        // Efecto parallax en hero
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const hero = document.querySelector('.tour-hero');
            if (hero) {
                const heroBackground = hero.querySelector('.hero-background img');
                if (heroBackground) {
                    heroBackground.style.transform = `translateY(${scrolled * 0.5}px)`;
                }
            }
        });

        // Animación de aparición para elementos
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observar elementos para animación
        document.querySelectorAll('.detail-item, .highlight-item, .timeline-item, .tour-card').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });

        // Funcionalidad del carrusel
        let currentSlideIndex = 0;
        const slides = document.querySelectorAll('.carousel-slide');
        const indicators = document.querySelectorAll('.indicator');
        const totalSlides = slides.length;

        function showSlide(index) {
            const container = document.getElementById('carouselContainer');
            const slideWidth = slides[0].offsetWidth;
            container.style.transform = `translateX(-${index * slideWidth}px)`;
            
            // Actualizar indicadores
            indicators.forEach((indicator, i) => {
                indicator.classList.toggle('active', i === index);
            });
        }

        function moveSlide(direction) {
            currentSlideIndex += direction;
            
            if (currentSlideIndex >= totalSlides) {
                currentSlideIndex = 0;
            } else if (currentSlideIndex < 0) {
                currentSlideIndex = totalSlides - 1;
            }
            
            showSlide(currentSlideIndex);
        }

        function currentSlide(index) {
            currentSlideIndex = index - 1;
            showSlide(currentSlideIndex);
        }

        // Auto-play del carrusel
        setInterval(() => {
            moveSlide(1);
        }, 5000);

        // Ajustar carrusel en redimensionamiento de ventana
        window.addEventListener('resize', () => {
            showSlide(currentSlideIndex);
        });

        // ===== FUNCIONALIDAD DEL FORMULARIO DE RESERVA =====
        function toggleBookingForm() {
            const bookingSidebar = document.getElementById('bookingSidebar');
            bookingSidebar.classList.toggle('active');
            
            if (bookingSidebar.classList.contains('active')) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = 'auto';
            }
        }

        // Cerrar formulario con tecla Escape
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                const bookingSidebar = document.getElementById('bookingSidebar');
                if (bookingSidebar.classList.contains('active')) {
                    toggleBookingForm();
                }
            }
        });

        // Manejar envío del formulario
        const bookingForm = document.getElementById('bookingForm');
        if (bookingForm) {
            bookingForm.addEventListener('submit', (e) => {
                e.preventDefault();
                
                // Validar campos requeridos
                const requiredFields = bookingForm.querySelectorAll('[required]');
                let isValid = true;
                
                requiredFields.forEach(field => {
                    if (!field.value.trim()) {
                        isValid = false;
                        field.style.borderColor = '#e74c3c';
                    } else {
                        field.style.borderColor = '#ddd';
                    }
                });
                
                if (isValid) {
                    alert('¡Gracias por tu solicitud! Te contactaremos en las próximas 24 horas para confirmar tu reserva.');
                    toggleBookingForm();
                    bookingForm.reset();
                } else {
                    alert('Por favor, completa todos los campos obligatorios.');
                }
            });
        }

        // Establecer fecha mínima como hoy
        const tourDateInput = document.getElementById('tourDate');
        if (tourDateInput) {
            const today = new Date().toISOString().split('T')[0];
            tourDateInput.min = today;
        }
    </script>
@endsection