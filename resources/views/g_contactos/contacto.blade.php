@extends('a_EncabezadoFooter.princi')
@section('content')
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
                        <span class="title-line-1">Estamos aquí</span>
                        <span class="title-line-2">para <span class="highlight">ayudarte</span></span>
                    </h1>
                    <p class="hero-description">
                        Tu experiencia de viaje es nuestra prioridad. Contáctanos para reservas, 
                        consultas o cualquier asistencia que necesites.
                    </p>
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
                        <h2>Envíanos un mensaje</h2>
                        <p>Completa el formulario y te responderemos en menos de 24 horas</p>
                    </div>
                    
                    <form class="contact-form" id="contactForm">
                        @csrf
                        <div class="form-row">
                            <div class="form-group">
<<<<<<< HEAD
                                <label for="firstName">Nombre</label> {{ $data['firstName'] }}
=======
                                <label for="firstName">Nombre</label>
>>>>>>> parent of 971e223 (Validacion de Formularios NEW V2)
                                <input type="text" id="firstName" name="firstName" required>
                                <span class="form-error" id="firstNameError"></span>
                            </div>
                            <div class="form-group">
<<<<<<< HEAD
                                <label for="lastName">Apellido</label> {{ $data['lastName'] }}
=======
                                <label for="lastName">Apellido</label>
>>>>>>> parent of 971e223 (Validacion de Formularios NEW V2)
                                <input type="text" id="lastName" name="lastName" required>
                                <span class="form-error" id="lastNameError"></span>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="email">Correo Electrónico</label> {{ $data['email'] }}
                                <input type="email" id="email" name="email" required>
                                <span class="form-error" id="emailError"></span>
                            </div>
                            <div class="form-group">
                                <label for="phone">Teléfono</label> {{ $data['phone'] }}
                                <input type="tel" id="phone" name="phone">
                                <span class="form-error" id="phoneError"></span>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="subject">Asunto</label> {{ $data['subject'] }}
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
                            <label for="message">Mensaje</label> {{ $data['message'] }}
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
                        <h2>Información de Contacto</h2>
                        <p>Múltiples formas de comunicarte con nosotros</p>
                    </div>
                    
                    <div class="contact-cards">
                        <div class="contact-card">
                            <div class="card-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="card-content">
                                <h3>Teléfono</h3>
                                <p>+51 1 234-5678</p>
                                <span class="card-note">Lun - Dom: 24 horas</span>
                            </div>
                        </div>
                        
                        <div class="contact-card">
                            <div class="card-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="card-content">
                                <h3>Email</h3>
                                <p>contacto@aerolineasdelsur.com</p>
                                <span class="card-note">Respuesta en 24h</span>
                            </div>
                        </div>
                        
                        <div class="contact-card">
                            <div class="card-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="card-content">
                                <h3>Oficina Principal</h3>
                                <p>Av. José Larco 1234<br>Miraflores, Lima - Perú</p>
                                <span class="card-note">Lun - Vie: 8:00 - 18:00</span>
                            </div>
                        </div>
                        
                        <div class="contact-card">
                            <div class="card-icon">
                                <i class="fab fa-whatsapp"></i>
                            </div>
                            <div class="card-content">
                                <h3>WhatsApp</h3>
                                <p>+51 987 654 321</p>
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
                <h2>Horarios de Atención</h2>
                <p>Estamos disponibles cuando nos necesites</p>
            </div>
            
            <div class="schedule-grid">
                <div class="schedule-card">
                    <div class="schedule-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <h3>Atención Telefónica</h3>
                    <div class="schedule-times">
                        <div class="time-item">
                            <span class="day">Lunes - Viernes</span>
                            <span class="time">09:00 - 18:00</span>
                        </div>
                    </div>
                    <div class="schedule-times">
                        <div class="time-item">
                            <span class="day">Sabados</span>
                            <span class="time">09:00 - 13:00</span>
                        </div>
                    </div>
                    <span class="schedule-note">Línea directa siempre disponible</span>
                </div>
                
                <div class="schedule-card">
                    <div class="schedule-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3>Oficina Principal</h3>
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
                    <h3>WhatsApp</h3>
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
                    <h3>Correo Electrónico</h3>
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
                <h2>Nuestra Ubicación</h2>
                <p>Visítanos en nuestra oficina principal en Lima</p>
            </div>
            
            <div class="map-wrapper">
                <div class="map-info">
                    <div class="location-card">
                        <h3>Oficina Principal</h3>
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
    <!-- Mensajes de Estado -->
    <div id="successMessage" class="status-message success-message">
        <i class="fas fa-check-circle"></i>
        <span>¡Mensaje enviado exitosamente! Te responderemos pronto.</span>
    </div>
    
    <div id="errorMessage" class="status-message error-message">
        <i class="fas fa-exclamation-circle"></i>
        <span>Error al enviar el mensaje. Por favor, inténtalo nuevamente.</span>
    </div>
<script>
    // ===== CONFIGURACIÓN Y VARIABLES GLOBALES =====
const CONFIG = {
    emailRegex: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
    phoneRegex: /^[+]?[0-9]{8,15}$/,
    nameRegex: /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{2,30}$/,
    messageTimeout: 5000
};

const VALIDATION_MESSAGES = {
    firstName: {
        required: 'El nombre es obligatorio',
        invalid: 'El nombre debe tener entre 2 y 30 caracteres y solo contener letras'
    },
    lastName: {
        required: 'El apellido es obligatorio',
        invalid: 'El apellido debe tener entre 2 y 30 caracteres y solo contener letras'
    },
    email: {
        required: 'El correo electrónico es obligatorio',
        invalid: 'Por favor, ingresa un correo electrónico válido'
    },
    phone: {
        invalid: 'El teléfono debe tener entre 8 y 15 dígitos'
    },
    subject: {
        required: 'Por favor, selecciona un asunto'
    },
    message: {
        required: 'El mensaje es obligatorio',
        minLength: 'El mensaje debe tener al menos 10 caracteres'
    }
};

// ===== CLASE PRINCIPAL DE CONTACTO =====
class ContactManager {
    constructor() {
        this.form = document.getElementById('contactForm');
        this.fields = {
            firstName: document.getElementById('firstName'),
            lastName: document.getElementById('lastName'),
            email: document.getElementById('email'),
            phone: document.getElementById('phone'),
            subject: document.getElementById('subject'),
            message: document.getElementById('message')
        };
        this.errors = {
            firstName: document.getElementById('firstNameError'),
            lastName: document.getElementById('lastNameError'),
            email: document.getElementById('emailError'),
            phone: document.getElementById('phoneError'),
            subject: document.getElementById('subjectError'),
            message: document.getElementById('messageError')
        };
        this.isSubmitting = false;
        this.init();
    }

    init() {
        this.setupEventListeners();
    }

    // ===== CONFIGURACIÓN DE EVENT LISTENERS =====
    setupEventListeners() {
        // Validación en tiempo real
        Object.keys(this.fields).forEach(fieldName => {
            const field = this.fields[fieldName];
            if (field) {
                field.addEventListener('blur', () => this.validateField(fieldName));
                field.addEventListener('input', () => this.clearError(fieldName));
            }
        });

        // Envío del formulario
        if (this.form) {
            this.form.addEventListener('submit', (e) => this.handleSubmit(e));
        }
    }

    // ===== VALIDACIÓN DE CAMPOS =====
    validateField(fieldName) {
        const field = this.fields[fieldName];
        const value = field.value.trim();
        let isValid = true;
        let errorMessage = '';

        switch (fieldName) {
            case 'firstName':
            case 'lastName':
                if (!value) {
                    isValid = false;
                    errorMessage = VALIDATION_MESSAGES[fieldName].required;
                } else if (!CONFIG.nameRegex.test(value)) {
                    isValid = false;
                    errorMessage = VALIDATION_MESSAGES[fieldName].invalid;
                }
                break;

            case 'email':
                if (!value) {
                    isValid = false;
                    errorMessage = VALIDATION_MESSAGES.email.required;
                } else if (!CONFIG.emailRegex.test(value)) {
                    isValid = false;
                    errorMessage = VALIDATION_MESSAGES.email.invalid;
                }
                break;

            case 'phone':
                if (value && !CONFIG.phoneRegex.test(value.replace(/\s/g, ''))) {
                    isValid = false;
                    errorMessage = VALIDATION_MESSAGES.phone.invalid;
                }
                break;

            case 'subject':
                if (!value) {
                    isValid = false;
                    errorMessage = VALIDATION_MESSAGES.subject.required;
                }
                break;

            case 'message':
                if (!value) {
                    isValid = false;
                    errorMessage = VALIDATION_MESSAGES.message.required;
                } else if (value.length < 10) {
                    isValid = false;
                    errorMessage = VALIDATION_MESSAGES.message.minLength;
                }
                break;
        }

        this.showError(fieldName, errorMessage, !isValid);
        this.updateFieldState(field, isValid);
        return isValid;
    }

    validateAllFields() {
        let isFormValid = true;
        Object.keys(this.fields).forEach(fieldName => {
            if (!this.validateField(fieldName)) {
                isFormValid = false;
            }
        });
        return isFormValid;
    }

    showError(fieldName, message, show) {
        const errorElement = this.errors[fieldName];
        if (errorElement) {
            errorElement.textContent = message;
            errorElement.classList.toggle('show', show);
        }
    }

    clearError(fieldName) {
        this.showError(fieldName, '', false);
        const field = this.fields[fieldName];
        if (field) {
            field.classList.remove('error');
        }
    }

    updateFieldState(field, isValid) {
        field.classList.toggle('error', !isValid);
        field.classList.toggle('valid', isValid && field.value.trim());
    }

    // ===== MANEJO DEL ENVÍO DEL FORMULARIO =====
    async handleSubmit(e) {
        e.preventDefault();
        
        if (this.isSubmitting) return;
        
        // Validar todos los campos
        if (!this.validateAllFields()) {
            this.showStatusMessage('Por favor, corrige los errores en el formulario.', 'error');
            return;
        }
        
        this.isSubmitting = true;
        const submitBtn = this.form.querySelector('.btn-submit');
        const originalText = submitBtn.innerHTML;
        
        // Mostrar estado de carga
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Enviando...';
        submitBtn.disabled = true;
        
        try {
            // Obtener los datos del formulario
            const formData = new FormData(this.form);
            const data = {};
            formData.forEach((value, key) => {
                data[key] = value;
            });
            
            // Enviar datos al backend usando fetch
            const response = await fetch('/contact/send', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify(data)
            });
            
            const result = await response.json();
            
            if (result.success) {
                // Mostrar mensaje de éxito
                this.showStatusMessage(result.message || '¡Mensaje enviado exitosamente! Te responderemos pronto.', 'success');
                
                // Limpiar formulario
                this.resetForm();
            } else {
                // Mostrar mensaje de error
                this.showStatusMessage(result.message || 'Error al enviar el mensaje. Por favor, inténtalo nuevamente.', 'error');
            }
            
        } catch (error) {
            console.error('Error al enviar el formulario:', error);
            this.showStatusMessage('Error al enviar el mensaje. Por favor, inténtalo nuevamente.', 'error');
        } finally {
            // Restaurar botón
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
            this.isSubmitting = false;
        }
    }
    
    // ===== UTILIDADES =====
    showStatusMessage(message, type) {
        const messageElement = document.getElementById(type === 'success' ? 'successMessage' : 'errorMessage');
        if (messageElement) {
            messageElement.querySelector('span').textContent = message;
            messageElement.classList.add('show');
            
            setTimeout(() => {
                messageElement.classList.remove('show');
            }, CONFIG.messageTimeout);
        }
    }

    resetForm() {
        this.form.reset();
        Object.keys(this.fields).forEach(fieldName => {
            this.clearError(fieldName);
            const field = this.fields[fieldName];
            if (field) {
                field.classList.remove('valid', 'error');
            }
        });
    }
}

// ===== INICIALIZACIÓN =====
document.addEventListener('DOMContentLoaded', () => {
    // Inicializar gestor de contacto
    new ContactManager();
    
    // Smooth scroll para enlaces internos
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
    
    console.log('🚀 Contacto Manager inicializado correctamente');
});

// ===== MANEJO DE ERRORES GLOBALES =====
window.addEventListener('error', (e) => {
    console.error('Error en la página de contacto:', e.error);
});

// ===== OPTIMIZACIÓN DE RENDIMIENTO =====
// Lazy loading para el mapa
const mapObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const iframe = entry.target.querySelector('iframe');
            if (iframe && !iframe.src) {
                iframe.src = iframe.dataset.src;
            }
            mapObserver.unobserve(entry.target);
        }
    });
});

const mapSection = document.querySelector('.map-section');
if (mapSection) {
    mapObserver.observe(mapSection);
}
</script>
@endsection
