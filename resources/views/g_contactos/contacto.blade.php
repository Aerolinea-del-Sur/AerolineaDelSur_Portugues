@extends('a_EncabezadoFooter.princi')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/paginas/contacto.css') }}">
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
                                <label for="name">Nombre</label>
                                <input type="text" id="name" name="name" required>
                                <span class="form-error" id="nameError"></span>
                            </div>
                            <div class="form-group">
                                <label for="lastname">Apellido</label>
                                <input type="text" id="lastname" name="lastname" required>
                                <span class="form-error" id="lastnameError"></span>
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
                        
                        <div class="form-actions">
                            <button type="submit" class="btn-submit">Enviar Mensaje</button>
                        </div>
                        
                        <!-- Mensajes de estado -->
                        <div class="status-message success" id="successMessage">
                            <i class="fas fa-check-circle"></i>
                            <span>¡Mensaje enviado exitosamente! Te responderemos pronto.</span>
                        </div>
                        <div class="status-message error" id="errorMessage">
                            <i class="fas fa-exclamation-circle"></i>
                            <span>Error al enviar el mensaje. Por favor, inténtalo nuevamente.</span>
                        </div>
                    </form>
                </div>
                
                <!-- Información de Contacto -->
                <div class="contact-info-section">
                    <div class="info-header">
                        <h2>Información de Contacto</h2>
                        <p>Estamos disponibles para ayudarte en todo momento</p>
                    </div>
                    
                    <div class="info-items">
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="info-content">
                                <h3>Teléfono</h3>
                                <p>+51 987 654 321</p>
                                <p>+51 123 456 789</p>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="info-content">
                                <h3>Email</h3>
                                <p>info@aerolinea.com</p>
                                <p>reservas@aerolinea.com</p>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="info-content">
                                <h3>Oficina Principal</h3>
                                <p>Av. Principal 123, Lima</p>
                                <p>Perú</p>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fab fa-whatsapp"></i>
                            </div>
                            <div class="info-content">
                                <h3>WhatsApp</h3>
                                <p>+51 987 654 321</p>
                                <a href="https://wa.me/51987654321" class="whatsapp-link">Enviar mensaje <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="business-hours">
                        <h3>Horarios de Atención</h3>
                        <div class="hours-grid">
                            <div class="hours-day">
                                <span>Lunes - Viernes:</span>
                                <span>8:00 AM - 8:00 PM</span>
                            </div>
                            <div class="hours-day">
                                <span>Sábados:</span>
                                <span>9:00 AM - 6:00 PM</span>
                            </div>
                            <div class="hours-day">
                                <span>Domingos:</span>
                                <span>10:00 AM - 4:00 PM</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Script para el formulario de contacto -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const contactForm = new ContactForm('contactForm');
    });

    class ContactForm {
        constructor(formId) {
            this.form = document.getElementById(formId);
            if (!this.form) return;
            
            this.isSubmitting = false;
            
            // Configuración
            this.CONFIG = {
                messageTimeout: 5000, // 5 segundos
                validationDelay: 300 // 300ms
            };
            
            // Campos del formulario
            this.fields = {
                name: this.form.querySelector('#name'),
                lastname: this.form.querySelector('#lastname'),
                email: this.form.querySelector('#email'),
                phone: this.form.querySelector('#phone'),
                subject: this.form.querySelector('#subject'),
                message: this.form.querySelector('#message')
            };
            
            // Elementos de error
            this.errors = {
                name: this.form.querySelector('#nameError'),
                lastname: this.form.querySelector('#lastnameError'),
                email: this.form.querySelector('#emailError'),
                phone: this.form.querySelector('#phoneError'),
                subject: this.form.querySelector('#subjectError'),
                message: this.form.querySelector('#messageError')
            };
            
            // Inicializar eventos
            this.initEvents();
        }
        
        initEvents() {
            // Evento de envío del formulario
            this.form.addEventListener('submit', this.handleSubmit.bind(this));
            
            // Eventos de validación en tiempo real
            Object.keys(this.fields).forEach(fieldName => {
                const field = this.fields[fieldName];
                if (field) {
                    field.addEventListener('input', this.handleFieldInput.bind(this, fieldName));
                    field.addEventListener('blur', this.handleFieldBlur.bind(this, fieldName));
                }
            });
        }
        
        // ===== VALIDACIÓN DE CAMPOS =====
        handleFieldInput(fieldName) {
            this.clearError(fieldName);
        }
        
        handleFieldBlur(fieldName) {
            this.validateField(fieldName);
        }
        
        validateField(fieldName) {
            const field = this.fields[fieldName];
            if (!field) return true;
            
            const value = field.value.trim();
            let isValid = true;
            let errorMessage = '';
            
            switch (fieldName) {
                case 'name':
                case 'lastname':
                    if (!value) {
                        isValid = false;
                        errorMessage = 'Este campo es obligatorio';
                    } else if (value.length < 2) {
                        isValid = false;
                        errorMessage = 'Debe tener al menos 2 caracteres';
                    }
                    break;
                    
                case 'email':
                    if (!value) {
                        isValid = false;
                        errorMessage = 'El correo electrónico es obligatorio';
                    } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)) {
                        isValid = false;
                        errorMessage = 'Ingresa un correo electrónico válido';
                    }
                    break;
                    
                case 'phone':
                    if (value && !/^[0-9+\s()-]{7,15}$/.test(value)) {
                        isValid = false;
                        errorMessage = 'Ingresa un número de teléfono válido';
                    }
                    break;
                    
                case 'subject':
                    if (!value) {
                        isValid = false;
                        errorMessage = 'Selecciona un asunto';
                    }
                    break;
                    
                case 'message':
                    if (!value) {
                        isValid = false;
                        errorMessage = 'El mensaje es obligatorio';
                    } else if (value.length < 10) {
                        isValid = false;
                        errorMessage = 'El mensaje debe tener al menos 10 caracteres';
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
                const isFieldValid = this.validateField(fieldName);
                if (!isFieldValid) {
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
                }, this.CONFIG.messageTimeout);
            }
        }

        resetForm() {
            this.form.reset();
            
            // Limpiar estados de los campos
            Object.keys(this.fields).forEach(fieldName => {
                const field = this.fields[fieldName];
                if (field) {
                    field.classList.remove('valid', 'error');
                }
                this.clearError(fieldName);
            });
        }
    }
    </script>
@endsection
