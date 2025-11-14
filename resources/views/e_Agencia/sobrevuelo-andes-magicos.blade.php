@extends('a_EncabezadoFooter.princi')
@section('content')
<?php
    $h1_1 = 'Tour Aéreo de Lujo<br>Andes Mágicos';
    $p_1 = 'Descubre lo mejor del sur andino peruano desde una perspectiva privilegiada';

        $h2_1 = 'Detalles del Tour';
        $p_2 = 'Prepárate para vivir una experiencia inolvidable: un tour aéreo diseñado para quienes desean ver lo mejor del sur andino peruano desde una perspectiva privilegiada. Sobrevuela montañas sagradas, valles milenarios y joyas arqueológicas que han desafiado el tiempo, todo en un servicio de alto nivel, operado con aeronaves pequeñas o helicópteros privados.';

                $h4_1 = 'Aeronave Moderna';
                $p_3 = 'Cessna 206 con ventanas panorámicas';

                $h4_2 = 'Piloto Certificado';
                $p_4 = 'Más de 10 años de experiencia';

                $h4_3 = 'Fotografía Aérea';
                $p_5 = 'Oportunidades únicas de captura';

            $h3_1 = 'Galería de Imágenes';

        $h2_2 = 'Resumen del Viaje';

            $h3_2 = 'Aspectos Destacados';

                $h4_4 = 'Vista Aerea';
                $p_6 = 'Contempla los distintos destinos del Cusco desde los cielos';

                $h4_5 = 'Fotografía Profesional';
                $p_7 = 'Capturas aéreas espectaculares de los destinos del Cusco';

                $h4_6 = 'Historia Viva';
                $p_8 = 'Narración histórica durante el vuelo';

            $h3_3 = 'Estadísticas del Tour';
        
        $h2_3 = 'Lugares a Conocer';

                $h4_7 = 'Montaña de Siete Colores';
                $p_9 = 'Un espectáculo natural que solo desde el aire revela la magnitud de sus franjas minerales multicolores. Un ícono de los Andes como nunca lo habías visto.';

                $h4_8 = 'Nevado Ausangate';
                $p_10 = 'Sobrevuelo sobre el apu más sagrado del Cusco. Sus cumbres nevadas y lagunas glaciares conforman uno de los paisajes más místicos y majestuosos del Perú.';

                $h4_9 = 'Valle Rojo';
                $p_11 = 'Un lugar de belleza surreal, donde las tierras rojizas crean un paisaje de otro planeta. Una joya escondida de los Andes que solo los vuelos de altura pueden captar en su totalidad.';

                $h4_10 = 'Complejos Arqueológicos del Cusco';
                $p_12 = 'Una vista privilegiada de Tambomachay, Qenqo y Puca Pucara restos arqueológicos del Cusco imperial.';

                $h4_11 = 'Pisac y el Valle Sagrado';
                $p_13 = 'Vista panorámica del legendario valle agrícola, cuna de civilización y vida incaica. Las terrazas, los pueblos vivos y las ruinas de Pisac se despliegan a tus pies.';

                $h4_12 = 'Salineras de Maras';
                $p_14 = 'Se observará los miles de pozas de sal formando un mosaico blanco impresionante, que desciende por la montaña como un río congelado en el tiempo.';

        $h2_4 = 'Inclusiones del Tour';

            $h3_4 = 'Incluido';
            $h3_5 = 'No Incluido';

                $h4_13 = 'Notas Importantes';
                $p_15 = 'Salida desde Cusco';
                $p_16 = 'Regreso a Cusco';

        $h2_5 = 'Otros Tours Recomendados';

                $h4_14 = 'Líneas de Nazca';
                $p_17 = 'Descubre los misteriosos geoglifos desde el aire en este tour de día completo.';

                $h4_15 = 'Vuelo Amazónico';
                $p_18 = 'Explora la selva peruana desde las alturas y observa la biodiversidad única.';

                $h4_16 = 'Costa Peruana';
                $p_19 = 'Sobrevuela la hermosa costa del Pacífico y las islas Ballestas.';

            $h3_6 = 'Reserva tu Tour';

            $p_20 = '* Campos obligatorios. Te contactaremos en 24 horas para confirmar tu reserva.';
?>

    <link rel="stylesheet" href="{{ asset('public/css/paginas/agencia/1_TourGeneral.css') }}">
    <!-- Sección Hero con CTA integrado -->
<section class="tour-hero">
    <div class="hero-background">
        <img src="https://images.unsplash.com/photo-1532364158125-02d75a0f7fb9?q=80&w=1974" alt="Machu Picchu desde el aire">
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
                <span>1 hora</span>
            </div>
            <div class="meta-item">
                <i class="fas fa-users"></i>
                <span>Hasta 6 personas</span>
            </div>
            <div class="meta-item">
                <i class="fas fa-star"></i>
                <span>4.9/5</span>
            </div>
        </div>
        <!-- CTA en Hero -->
        <div class="hero-cta">
            <button class="cta-btn primary" onclick="toggleBookingForm()">
                <i class="fas fa-calendar-check"></i>
                Reservar Ahora
            </button>
            <button class="cta-btn secondary" onclick="scrollToForm()">
                <i class="fas fa-info-circle"></i>
                Más Información
            </button>
        </div>
    </div>
</section>

<!-- Sección de Precios y Reserva Rápida -->
<section class="pricing-section">
    <div class="container">
        <div class="pricing-grid">
            <div class="pricing-card">
                <div class="pricing-header">
                    <h3>Tour Privado</h3>
                    <div class="price">$450<span>/persona</span></div>
                </div>
                <ul class="pricing-features">
                    <li><i class="fas fa-check"></i> Vuelo privado exclusivo</li>
                    <li><i class="fas fa-check"></i> Guía bilingüe personal</li>
                    <li><i class="fas fa-check"></i> Fotografía profesional</li>
                    <li><i class="fas fa-check"></i> Certificado de vuelo</li>
                </ul>
                <button class="pricing-btn" onclick="toggleBookingForm()">
                    Reservar Privado
                </button>
            </div>
            
            <div class="pricing-card featured">
                <div class="pricing-badge">MÁS POPULAR</div>
                <div class="pricing-header">
                    <h3>Tour Grupal</h3>
                    <div class="price">$280<span>/persona</span></div>
                </div>
                <ul class="pricing-features">
                    <li><i class="fas fa-check"></i> Vuelo compartido (max 6)</li>
                    <li><i class="fas fa-check"></i> Guía en español/inglés</li>
                    <li><i class="fas fa-check"></i> Traslados incluidos</li>
                    <li><i class="fas fa-check"></i> Snack a bordo</li>
                </ul>
                <button class="pricing-btn primary" onclick="toggleBookingForm()">
                    Reservar Grupal
                </button>
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
                <p class="tour-description"><?= $p_2 ?></p>
                <div class="detail-items">
                    <div class="detail-item">
                        <i class="fas fa-plane"></i>
                        <div>
                            <h4><?= $h4_1 ?></h4>
                            <p><?= $p_3 ?></p>
                        </div>
                    </div>
                    <div class="detail-item">
                        <i class="fas fa-user-tie"></i>
                        <div>
                            <h4><?= $h4_2 ?></h4>
                            <p><?= $p_4 ?></p>
                        </div>
                    </div>
                    <div class="detail-item">
                        <i class="fas fa-camera"></i>
                        <div>
                            <h4><?= $h4_3 ?></h4>
                            <p><?= $p_5 ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gallery-section">
                <h3><?= $h3_1 ?></h3>
                <div class="image-carousel">
                    <!-- ... (tu carrusel existente) -->
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
            <!-- ... (tu contenido existente) -->
        </div>
    </div>
</section>

<!-- Itinerario Detallado -->
<section class="detailed-itinerary">
    <div class="container">
        <h2 class="section-title"><?= $h2_3 ?></h2>
        <div class="timeline">
            <!-- ... (tu contenido existente) -->
        </div>
    </div>
</section>

<!-- Inclusiones -->
<section class="inclusions">
    <div class="container">
        <h2 class="section-title"><?= $h2_4 ?></h2>
        <!-- ... (tu contenido existente) -->
    </div>
</section>

<!-- Formulario Integrado en el Flujo -->
<section class="integrated-form-section" id="integratedForm">
    <div class="container">
        <div class="form-grid">
            <div class="form-content">
                <h2>¿Listo para vivir esta experiencia única?</h2>
                <p>Completa el formulario y nuestro equipo se contactará contigo en menos de 24 horas para confirmar todos los detalles de tu aventura aérea.</p>
                
                <div class="benefits-list">
                    <div class="benefit-item">
                        <i class="fas fa-shield-alt"></i>
                        <div>
                            <h4>Reserva Segura</h4>
                            <p>Confirmación inmediata y soporte 24/7</p>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <i class="fas fa-clock"></i>
                        <div>
                            <h4>Respuesta Rápida</h4>
                            <p>Te contactamos en menos de 24 horas</p>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <i class="fas fa-dollar-sign"></i>
                        <div>
                            <h4>Mejor Precio</h4>
                            <p>Garantizado sin costos ocultos</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="form-container">
                <div class="form-header">
                    <h3><i class="fas fa-paper-plane"></i> Solicitar Reserva</h3>
                    <p>Complete sus datos y preferencias</p>
                </div>
                
                <form class="booking-form" id="integratedBookingForm" method="POST" action="{{ route('tour.booking') }}">
                    @csrf
                    <input type="hidden" name="tour_type" value="Tour Aéreo de Lujo Andes Mágicos">
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="integrated_fullName">Nombre Completo *</label>
                            <input type="text" id="integrated_fullName" name="fullName" required>
                        </div>
                        <div class="form-group">
                            <label for="integrated_email">Correo Electrónico *</label>
                            <input type="email" id="integrated_email" name="email" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="integrated_phone">Teléfono *</label>
                            <input type="tel" id="integrated_phone" name="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="integrated_country">País *</label>
                            <select id="integrated_country" name="country" required>
                                <option value="">Seleccionar...</option>
                                <option value="peru">Perú</option>
                                <option value="usa">Estados Unidos</option>
                                <option value="mexico">México</option>
                                <option value="other">Otro</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="integrated_tourDate">Fecha Preferida *</label>
                            <input type="date" id="integrated_tourDate" name="tourDate" required min="{{ date('Y-m-d') }}">
                        </div>
                        <div class="form-group">
                            <label for="integrated_passengers">Número de Pasajeros *</label>
                            <select id="integrated_passengers" name="passengers" required>
                                <option value="">Seleccionar...</option>
                                <option value="1">1 Pasajero</option>
                                <option value="2">2 Pasajeros</option>
                                <option value="3">3 Pasajeros</option>
                                <option value="4">4 Pasajeros</option>
                                <option value="5">5 Pasajeros</option>
                                <option value="6">6 Pasajeros</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="integrated_tourType">Tipo de Tour *</label>
                        <select id="integrated_tourType" name="tourType" required>
                            <option value="">Seleccionar tipo...</option>
                            <option value="private">Tour Privado ($450/pp)</option>
                            <option value="group">Tour Grupal ($280/pp)</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="integrated_specialRequests">Solicitudes Especiales</label>
                        <textarea id="integrated_specialRequests" name="specialRequests" rows="3" placeholder="Alergias, necesidades especiales, preferencias horarias..."></textarea>
                    </div>
                    
                    <div class="form-group checkbox-group">
                        <input type="checkbox" id="integrated_terms" name="terms" required>
                        <label for="integrated_terms">Acepto los términos y condiciones *</label>
                    </div>
                    
                    <button type="submit" class="submit-btn full-width">
                        <i class="fas fa-paper-plane"></i>
                        Enviar Solicitud de Reserva
                    </button>
                    
                    <p class="form-note"><?= $p_20 ?></p>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Tours Recomendados -->
<section class="recommended-tours">
    <div class="container">
        <h2 class="section-title"><?= $h2_5 ?></h2>
        <!-- ... (tu contenido existente) -->
    </div>
</section>

<!-- Formulario Modal Mejorado -->
<div class="booking-modal" id="bookingModal">
    <div class="modal-overlay" onclick="toggleBookingForm()"></div>
    <div class="modal-content">
        <div class="modal-header">
            <h3><i class="fas fa-calendar-check"></i> Reservar Tour</h3>
            <button class="close-modal" onclick="toggleBookingForm()">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="modal-body">
            <!-- El mismo formulario integrado pero en modal -->
            <form class="booking-form" id="modalBookingForm">
                <!-- ... (misma estructura que el formulario integrado) -->
            </form>
        </div>
    </div>
</div>

<!-- Botón Flotante Mejorado -->
<div class="floating-buttons">
    <button class="floating-btn primary" onclick="toggleBookingForm()">
        <i class="fas fa-calendar-check"></i>
        <span>Reservar</span>
    </button>
    <button class="floating-btn secondary" onclick="scrollToForm()">
        <i class="fas fa-info"></i>
        <span>Info</span>
    </button>
    <button class="floating-btn whatsapp" onclick="openWhatsApp()">
        <i class="fab fa-whatsapp"></i>
        <span>WhatsApp</span>
    </button>
</div>

<script>
    // Funcionalidades mejoradas
    function toggleBookingForm() {
        const modal = document.getElementById('bookingModal');
        modal.classList.toggle('active');
        document.body.style.overflow = modal.classList.contains('active') ? 'hidden' : 'auto';
    }

    function scrollToForm() {
        document.getElementById('integratedForm').scrollIntoView({
            behavior: 'smooth'
        });
    }

    function openWhatsApp() {
        const message = "Hola, estoy interesado en el Tour Aéreo de Lujo Andes Mágicos. ¿Podrían darme más información?";
        const phone = "51944055408";
        window.open(`https://wa.me/${phone}?text=${encodeURIComponent(message)}`, '_blank');
    }

    // Establecer fecha mínima en todos los date inputs
    document.querySelectorAll('input[type="date"]').forEach(input => {
        input.min = new Date().toISOString().split('T')[0];
    });

    // Manejo de envío de formularios
    document.querySelectorAll('.booking-form').forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            if (validateForm(this)) {
                // Simular envío exitoso
                showSuccessMessage();
                this.reset();
                if (this.id === 'modalBookingForm') {
                    toggleBookingForm();
                }
            }
        });
    });

    function validateForm(form) {
        let isValid = true;
        const required = form.querySelectorAll('[required]');
        
        required.forEach(field => {
            if (!field.value.trim()) {
                isValid = false;
                field.style.borderColor = '#e74c3c';
            } else {
                field.style.borderColor = '';
            }
        });
        
        if (!isValid) {
            alert('Por favor, complete todos los campos obligatorios.');
        }
        
        return isValid;
    }

    function showSuccessMessage() {
        alert('¡Gracias por tu solicitud! Te contactaremos en las próximas 24 horas para confirmar tu reserva.');
    }

    // Efectos visuales mejorados
    document.addEventListener('DOMContentLoaded', function() {
        // Animación para elementos del formulario
        const formElements = document.querySelectorAll('.form-group, .pricing-card, .benefit-item');
        
        const formObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, { threshold: 0.1 });

        formElements.forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            formObserver.observe(el);
        });
    });
</script>

<style>
    /* Estilos adicionales para la integración mejorada */
    .hero-cta {
        margin-top: 2rem;
        display: flex;
        gap: 1rem;
        flex-wrap: wrap;
        justify-content: center;
    }
    
    .cta-btn {
        padding: 12px 24px;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    
    .cta-btn.primary {
        background: linear-gradient(135deg, #e74c3c, #c0392b);
        color: white;
    }
    
    .cta-btn.secondary {
        background: rgba(255,255,255,0.2);
        color: white;
        border: 2px solid white;
    }
    
    .pricing-section {
        background: #f8f9fa;
        padding: 4rem 0;
    }
    
    .pricing-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
        max-width: 800px;
        margin: 0 auto;
    }
    
    .integrated-form-section {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 4rem 0;
    }
    
    .form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 3rem;
        align-items: start;
    }
    
    .floating-buttons {
        position: fixed;
        bottom: 2rem;
        right: 2rem;
        display: flex;
        flex-direction: column;
        gap: 1rem;
        z-index: 1000;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .form-grid {
            grid-template-columns: 1fr;
        }
        
        .hero-cta {
            flex-direction: column;
        }
        
        .floating-buttons {
            bottom: 1rem;
            right: 1rem;
        }
    }
</style>
@endsection