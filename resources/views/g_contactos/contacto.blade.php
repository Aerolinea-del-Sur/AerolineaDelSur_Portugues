@extends('a_EncabezadoFooter.princi')
@section('content')
<?php
    // Variables de contenido
    $h1_1_1 = 'Estamos aquí';
    $h1_1_2 = 'para ';
    $h1_1_3 = 'ayudarte';
    $p_1 = 'Tu experiencia de viaje es nuestra prioridad. Contáctanos para reservas, consultas o cualquier asistencia que necesites.';

    $h2_1 = 'Envíanos un mensaje';
    $p_2 = 'Completa el formulario y te responderemos en menos de 24 horas';

    $h2_2 = 'Información de Contacto';
    $p_3 = 'Múltiples formas de comunicarte con nosotros';

    $h3_1 = 'Teléfono';
    $p_4 = '+51 1 234-5678';

    $h3_2 = 'Email';
    $p_5 = 'contacto@aerolineasdelsur.com';

    $h3_3 = 'Oficina Principal';
    $p_6 = 'Av. José Larco 1234<br>Miraflores, Lima - Perú';

    $h3_4 = 'WhatsApp';
    $p_7 = '+51 987 654 321';
    
    $h2_3 = 'Horarios de Atención';
    $p_8 = 'Estamos disponibles cuando nos necesites';

    $h3_5 = 'Atención Telefónica';
    $h3_6 = 'Oficina Principal';
    $h3_7 = 'WhatsApp';
    $h3_8 = 'Correo Electrónico';

    $h2_4 = 'Nuestra Ubicación';
    $p_9 = 'Visítanos en nuestra oficina principal en Lima';

    $h3_9 = 'Oficina Principal';
?>

<link rel="stylesheet" href="{{ asset('public/css/paginas/contacto.css') }}">

<!-- Elementos flotantes decorativos -->
<div class="floating-elements">
    <div class="floating-circle floating-circle-1"></div>
    <div class="floating-circle floating-circle-2"></div>
    <div class="floating-circle floating-circle-3"></div>
</div>

<!-- Sección Hero Asimétrica -->
<section class="hero-section">
    <div class="hero-container">
        <div class="hero-content">
            <div class="hero-left">
                <div class="hero-badge">
                    <i class="fas fa-paper-plane"></i>
                    <span>Conectamos Destinos</span>
                </div>
                <h1 class="hero-title">
                    <span class="title-line-1"><?= $h1_1_1 ?></span>
                    <span class="title-line-2"><?= $h1_1_2 ?><span class="highlight"><?= $h1_1_3 ?></span></span>
                </h1>
                <p class="hero-description"><?= $p_1 ?></p>
                <div class="hero-stats">
                    <div class="stat-item">
                        <span class="stat-number">24/7</span>
                        <span class="stat-label">Atención</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">+50</span>
                        <span class="stat-label">Destinos</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">15min</span>
                        <span class="stat-label">Respuesta</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-overlay"></div>
</section>

<!-- Sección Principal de Contacto -->
<section class="contact-main">
    <div class="contact-container">
        <div class="contact-grid">
            <!-- Formulario de Contacto -->
            <div class="contact-form-section">
                <div class="form-header">
                    <h2><?= $h2_1 ?></h2>
                    <p><?= $p_2 ?></p>
                </div>
                
                <!-- Contenedor de alertas -->
                <div id="alertContainer"></div>
                
                <form class="contact-form" id="contactForm" method="POST" action="{{ route('contact.send') }}">
                    @csrf
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="firstName">Nombre</label>
                            <input type="text" id="firstName" name="firstName" required>
                            <span class="form-error" id="firstNameError"></span>
                        </div>
                        <div class="form-group">
                            <label for="lastName">Apellido</label>
                            <input type="text" id="lastName" name="lastName" required>
                            <span class="form-error" id="lastNameError"></span>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">Correo Electrónico</label>
                            <input type="email" id="email" name="email" required>
                            <span class="form-error" id="emailError"></span>
                        </div>
                        <div class="form-group">
                            <label for="phone">Teléfono</label>
                            <input type="tel" id="phone" name="phone">
                            <span class="form-error" id="phoneError"></span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="subject">Asunto</label>
                        <select id="subject" name="subject" required>
                            <option value="">Selecciona un asunto</option>
                            <option value="reserva">Nueva Reserva</option>
                            <option value="modificacion">Modificar Reserva</option>
                            <option value="cancelacion">Cancelación</option>
                            <option value="equipaje">Consulta de Equipaje</option>
                            <option value="reembolso">Reembolso</option>
                            <option value="otro">Otro</option>
                        </select> 
                        <span class="form-error" id="subjectError"></span>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Mensaje</label>
                        <textarea id="message" name="message" rows="5" placeholder="Describe tu consulta o solicitud..." required></textarea>
                        <span class="form-error" id="messageError"></span>
                    </div>
                    
                    <button type="submit" class="btn-submit">
                        <span class="btn-text">Enviar Mensaje</span>
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
            </div>
            
            <!-- Información de Contacto -->
            <div class="contact-info-section">
                <div class="info-header">
                    <h2><?= $h2_2 ?></h2>
                    <p><?= $p_3 ?></p>
                </div>
                
                <div class="contact-cards">
                    <div class="contact-card">
                        <div class="card-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="card-content">
                            <h3><?= $h3_1 ?></h3>
                            <p><?= $p_4 ?></p>
                            <span class="card-note">Lun - Dom: 24 horas</span>
                        </div>
                    </div>
                    
                    <div class="contact-card">
                        <div class="card-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="card-content">
                            <h3><?= $h3_2 ?></h3>
                            <p><?= $p_5 ?></p>
                            <span class="card-note">Respuesta en 24h</span>
                        </div>
                    </div>
                    
                    <div class="contact-card">
                        <div class="card-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="card-content">
                            <h3><?= $h3_3 ?></h3>
                            <p><?= $p_6 ?></p>
                            <span class="card-note">Lun - Vie: 8:00 - 18:00</span>
                        </div>
                    </div>
                    
                    <div class="contact-card">
                        <div class="card-icon">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <div class="card-content">
                            <h3><?= $h3_4 ?></h3>
                            <p><?= $p_7 ?></p>
                            <span class="card-note">Respuesta inmediata</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección de Horarios -->
<section class="schedule-section">
    <div class="schedule-container">
        <div class="schedule-header">
            <h2><?= $h2_3 ?></h2>
            <p><?= $p_8 ?></p>
        </div>
        
        <div class="schedule-grid">
            <div class="schedule-card">
                <div class="schedule-icon">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <h3><?= $h3_5 ?></h3>
                <div class="schedule-times">
                    <div class="time-item">
                        <span class="day">Lunes - Viernes</span>
                        <span class="time">09:00 - 18:00</span>
                    </div>
                    <div class="time-item">
                        <span class="day">Sábados</span>
                        <span class="time">09:00 - 13:00</span>
                    </div>
                </div>
                <span class="schedule-note">Línea directa siempre disponible</span>
            </div>
            
            <div class="schedule-card">
                <div class="schedule-icon">
                    <i class="fas fa-building"></i>
                </div>
                <h3><?= $h3_6 ?></h3>
                <div class="schedule-times">
                    <div class="time-item">
                        <span class="day">Lunes - Viernes</span>
                        <span class="time">09:00 - 18:00</span>
                    </div>
                    <div class="time-item">
                        <span class="day">Sábados</span>
                        <span class="time">9:00 - 14:00</span>
                    </div>
                </div>
            </div>
            
            <div class="schedule-card">
                <div class="schedule-icon">
                    <i class="fab fa-whatsapp"></i>
                </div>
                <h3><?= $h3_7 ?></h3>
                <div class="schedule-times">
                    <div class="time-item">
                        <span class="day">Lunes - Viernes</span>
                        <span class="time">09:00 - 18:00</span>
                    </div>
                </div>
                <span class="schedule-note">Respuesta inmediata</span>
            </div>
            
            <div class="schedule-card">
                <div class="schedule-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <h3><?= $h3_8 ?></h3>
                <div class="schedule-times">
                    <div class="time-item">
                        <span class="day">Lunes - Domingo</span>
                        <span class="time">24 horas</span>
                    </div>
                </div>
                <span class="schedule-note">Respuesta en máximo 24h</span>
            </div>
        </div>
    </div>
</section>

<!-- Sección del Mapa -->
<section class="map-section">
    <div class="map-container">
        <div class="map-header">
            <h2><?= $h2_4 ?></h2>
            <p><?= $p_9 ?></p>
        </div>
        
        <div class="map-wrapper">
            <div class="map-info">
                <div class="location-card">
                    <h3><?= $h3_9 ?></h3>
                    <div class="location-details">
                        <div class="detail">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Av. José Larco 1234, Miraflores, Lima</span>
                        </div>
                        <div class="detail">
                            <i class="fas fa-subway"></i>
                            <span>Estación Metropolitano: Ricardo Palma</span>
                        </div>
                        <div class="detail">
                            <i class="fas fa-parking"></i>
                            <span>Estacionamiento disponible</span>
                        </div>
                    </div>
                    <a href="https://maps.google.com/?q=Av.+José+Larco+1234,+Miraflores,+Lima" target="_blank" class="btn-directions">
                        <i class="fas fa-directions"></i>
                        Cómo llegar
                    </a>
                </div>
            </div>
            
            <div class="map-embed">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.8!2d-77.0282!3d-12.1196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTLCsDA3JzEwLjYiUyA3N8KwMDEnNDEuNSJX!5e0!3m2!1ses!2spe!4v1234567890"
                    width="100%" 
                    height="400" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</section>


<script>

<script>

document.addEventListener('DOMContentLoaded', function() {
    console.log('🚀 Inicializando formulario de contacto...');
    
    const form = document.getElementById('contactForm');
    const submitBtn = form.querySelector('.btn-submit');
    const btnText = submitBtn.querySelector('.btn-text');
    const originalBtnText = btnText.textContent;
    const alertContainer = document.getElementById('alertContainer');

    // ===== MANEJO DEL FORMULARIO =====
    form.addEventListener('submit', async function(e) {
        e.preventDefault();
        console.log('📝 Formulario enviado');

        clearErrors();
        clearAlerts();

        submitBtn.disabled = true;
        btnText.textContent = 'Enviando';
        submitBtn.classList.add('loading');

        try {
            const formData = new FormData(form);
            
            console.log('📤 Enviando datos a:', form.action);

            const response = await fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json'
                }
            });

            console.log('📥 Respuesta recibida, status:', response.status);
            console.log('📋 Content-Type:', response.headers.get('content-type'));
            
            // ✅ VERIFICAR SI LA RESPUESTA ES JSON
            const contentType = response.headers.get('content-type');
            if (!contentType || !contentType.includes('application/json')) {
                console.error('❌ Respuesta no es JSON');
                const textResponse = await response.text();
                console.error('Respuesta recibida:', textResponse.substring(0, 500));
                throw new Error('El servidor no devolvió una respuesta JSON válida');
            }
            
            const result = await response.json();
            console.log('📦 Resultado:', result);

            if (response.ok && result.success) {
                console.log('✅ Éxito');
                showSuccessAlert(result.message || '¡Mensaje enviado correctamente!');
                form.reset();
                alertContainer.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            } else {
                console.log('❌ Error');
                if (result.errors) {
                    showValidationErrors(result.errors);
                } else {
                    showErrorAlert(result.message || 'Ocurrió un error al enviar el mensaje');
                }
            }

        } catch (error) {
            console.error('💥 Error de conexión:', error);
            showErrorAlert('Error de conexión. Por favor, intenta nuevamente.');
        } finally {
            submitBtn.disabled = false;
            btnText.textContent = originalBtnText;
            submitBtn.classList.remove('loading');
        }
    });

    // ===== FUNCIONES AUXILIARES =====
    function clearErrors() {
        form.querySelectorAll('.form-error').forEach(el => {
            el.textContent = '';
            el.style.display = 'none';
        });
        form.querySelectorAll('.form-group').forEach(group => {
            group.classList.remove('error');
        });
    }

    function clearAlerts() {
        alertContainer.innerHTML = '';
    }

    function showValidationErrors(errors) {
        Object.keys(errors).forEach(field => {
            const errorElement = document.getElementById(`${field}Error`);
            const inputElement = document.getElementById(field);
            
            if (errorElement && inputElement) {
                errorElement.textContent = errors[field][0];
                errorElement.style.display = 'block';
                inputElement.closest('.form-group').classList.add('error');
            }
        });

        const firstError = form.querySelector('.form-group.error');
        if (firstError) {
            firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
    }

    function showSuccessAlert(message) {
        const alert = createAlert('success', message, 'fa-check-circle');
        alertContainer.appendChild(alert);
        setTimeout(() => alert.remove(), 5000);
    }

    function showErrorAlert(message) {
        const alert = createAlert('error', message, 'fa-exclamation-circle');
        alertContainer.appendChild(alert);
        setTimeout(() => alert.remove(), 5000);
    }

    function createAlert(type, message, icon) {
        const alert = document.createElement('div');
        alert.className = `alert alert-${type}`;
        alert.style.cssText = `
            padding: 15px 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
            animation: slideDown 0.3s ease-out;
            background: ${type === 'success' ? '#c6f6d5' : '#fed7d7'};
            color: ${type === 'success' ? '#22543d' : '#742a2a'};
            border-left: 4px solid ${type === 'success' ? '#38a169' : '#e53e3e'};
        `;
        alert.innerHTML = `
            <i class="fas ${icon}"></i>
            <span>${message}</span>
        `;
        return alert;
    }

    console.log('✅ Formulario inicializado correctamente');
});
</script>
@endsection
