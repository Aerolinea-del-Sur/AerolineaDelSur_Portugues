@extends('a_EncabezadoFooter.princi')

<?php
    $h1_1_1 = 'Mi 8';
    $h1_1_2 = 'MTV';

    $p_1 = 'Excelencia en Aviación Comercial';

    
        $h2_1 = 'Descripción del Avión';
        $p_2 = 'El Mi 8 MTV es una versión modernizada y mejorada del clásico helicóptero soviético Mi-8, creado para operar en las condiciones más exigentes: mayores altitudes, temperaturas extremas y terrenos montañosos como los del Cáucaso, Asia Central o los Andes.';
        $p_3 = 'Gracias a su gran capacidad de carga interna y externa, su amplia cabina y su autonomía operativa, el Mi-8 MTV es utilizado para una enorme variedad de misiones, tanto militares como civiles. Su diseño es robusto y sencillo de mantener, lo que le ha dado una reputación de confiabilidad en zonas remotas, desérticas, selváticas o montañosas.';

        $h2_2 = 'Galería de Imágenes';

        $h2_3 = 'Visión General';

            $h3_1 = 'Modelo';
            $p_4 = 'Mi 8 MTV';

            $h3_2 = 'Año de Fabricación';
            $p_5 = '1990';

            $h3_3 = 'Fabricante';
            $p_6 = 'Mil Moscow Helicopter Plant';
        
        $h2_4 = 'Rendimiento';

            $h3_4 = 'Velocidad Máxima';
            $p_7 = '250 km/h';

            $h3_5 = 'Alcance Máximo';
            $p_8 = '800 km';

            $h3_6 = 'Altitud de Crucero';
            $p_9 = '3000 metros';

            $h3_7 = 'Consumo de Combustible';
            $p_10 = '600 kg/h';

        $h2_5 = 'Capacidad';

            $h3_8 = 'Pasajeros Máximo';
            $p_11 = '24 pasajeros';

            $h3_9 = 'Autonomía';
            $p_12 = '800 km';

            $h3_10 = 'Capacidad de Carga';
            $p_13 = '4000 kg';

            $h3_11 = 'Longitud';
            $p_14 = '18,46 metros';

        $h2_6 = 'Lugares de Operación';
        $p_15 = 'El Mi-8 MTV opera en las principales rutas nacionales, conectando destinos estratégicos en Peru.';
        
            $h3_12 = 'Rutas Nacionales';

            $h3_13 = 'Otros Servicios';

            $h3_14 = 'Solicitar Información';            
?>

@section('content')
    <link rel="stylesheet" href="{{ asset('public/css/paginas/aeronaves/FlotaAvion.css') }}">
    <script>
        // Configurar clase body para imagen de portada específica
        document.addEventListener('DOMContentLoaded', function() {
            document.body.classList.add('mi8-mtv');
        });
    </script>
    <div class="page-wrapper">
<!-- Encabezado Tradicional Elegante -->
        <!-- King Air B200 -->
<div class="page-wrapper">
        <!-- Encabezado Tradicional Elegante -->
        <header class="traditional-header">
            <div class="header-overlay"></div>
            <div class="decorative-border-top"></div>
            <div class="header-content">
                <div class="header-left-panel">
                    <div class="aircraft-title-section-enhanced">
                        <div class="title-prefix">Conoce el</div>
                        <h1 class="aircraft-model-enhanced">
                            <span class="model-number"><?= $h1_1_1 ?></span>
                            <span class="model-variant"><?= $h1_1_2 ?></span>
                        </h1>
                        <div class="title-ornament-enhanced">
                            <span class="ornament-center">
                                <span class="ornament-line"></span>
                                <span class="ornament-diamond">◆</span>
                                <span class="ornament-line"></span>
                            </span>
                        </div>
                        <p class="aircraft-description-enhanced"><?= $p_1 ?></p>
                        <div class="subtitle-ornament">
                            <span class="subtitle-text">Aerolinea del Sur</span>
                        </div>
                    </div>
                    
                    <div class="aircraft-credentials-enhanced">
                        <div class="credentials-frame">
                            <div class="credential-item-enhanced">
                                <div class="credential-icon"><i class="fas fa-certificate"></i></div>
                                <div class="credential-content">
                                    <span class="credential-label">Velocidad Max</span>
                                    <span class="credential-value">250 km/h</span>
                                </div>
                            </div>
                            <div class="credential-divider"></div>
                            <div class="credential-item-enhanced">
                                <div class="credential-icon"><i class="fas fa-calendar-alt"></i></div>
                                <div class="credential-content">
                                    <span class="credential-label">Peso Max</span>
                                    <span class="credential-value">13000 kg</span>
                                </div>
                            </div>
                            <div class="credential-divider"></div>
                            <div class="credential-item-enhanced">
                                <div class="credential-icon"><i class="fas fa-id-card"></i></div>
                                <div class="credential-content">
                                    <span class="credential-label">Pasajeros</span>
                                    <span class="credential-value">24 pax</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-right-panel">
                    <!-- Espacio para el fondo y el avión -->
                </div>
            </div>
            <div class="decorative-border-bottom"></div>
        </header>
    </div>

    <!-- Main Content -->
    <div class="main-wrapper">
        <!-- Content Area -->
        <main class="aircraft-content">
            <div class="container">
                <!-- Descripción -->
                <section class="aircraft-description">
                    <h2 class="section-title"><?= $h2_1 ?></h2>
                    <p class="description-text"><?= $p_2 ?></p>
                    <p class="description-text"><?= $p_3 ?></p>
                </section>

                <!-- Nueva Galería de Imágenes -->
                <section class="aircraft-gallery">
                    <h2 class="section-title"><?= $h2_2 ?></h2>
                    <div class="new-carousel-wrapper">
                        <div class="new-carousel-container">
                            <div class="new-carousel-track">
                                <div class="new-carousel-slide current-slide">
                                    <img src="public/aviones/Air-King-B200-1.webp" alt="" class="carousel-image">
                                </div>
                                <div class="new-carousel-slide">
                                    <img src="public/aviones/Air-King-B200-2.webp" alt="" class="carousel-image">
                                </div>
                                <div class="new-carousel-slide">
                                    <img src="public/aviones/Air-King-B200-3.webp" alt="" class="carousel-image">
                                </div>
                                <div class="new-carousel-slide">
                                    <img src="public/aviones/Air-King-B200-4.webp" alt="" class="carousel-image">
                                </div>
                            </div>
                        </div>
                        
                        <!-- Controles de navegación -->
                        <button class="new-carousel-btn new-carousel-btn--left" id="prevBtn">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="new-carousel-btn new-carousel-btn--right" id="nextBtn">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                        
                        <!-- Indicadores -->
                        <div class="new-carousel-nav">
                            <button class="new-carousel-indicator current-indicator" data-slide="0"></button>
                            <button class="new-carousel-indicator" data-slide="1"></button>
                            <button class="new-carousel-indicator" data-slide="2"></button>
                            <button class="new-carousel-indicator" data-slide="3"></button>
                        </div>
                    </div>
                </section>

                <!-- Visión General -->
                <section class="aircraft-overview">
                    <h2 class="section-title"><?= $h2_3 ?></h2>
                    <div class="overview-grid">
                        <div class="overview-item">
                            <i class="fas fa-plane"></i>
                            <h3><?= $h3_1 ?></h3>
                            <p><?= $p_4 ?></p>
                        </div>
                        <div class="overview-item">
                            <i class="fas fa-calendar-alt"></i>
                            <h3><?= $h3_2 ?></h3>
                            <p><?= $p_5 ?></p>
                        </div>
                        <div class="overview-item">
                            <i class="fas fa-cogs"></i>
                            <h3><?= $h3_3 ?></h3>
                            <p><?= $p_6 ?></p>
                        </div>
                    </div>
                </section>

                <!-- Rendimiento -->
                <section class="aircraft-performance">
                    <h2 class="section-title"><?= $h2_4 ?></h2>
                    <div class="performance-grid">
                        <div class="performance-item">
                            <div class="performance-icon">
                                <i class="fas fa-tachometer-alt"></i>
                            </div>
                            <div class="performance-info">
                                <h3><?= $h3_4 ?></h3>
                                <p><?= $p_7 ?></p>
                            </div>
                        </div>
                        <div class="performance-item">
                            <div class="performance-icon">
                                <i class="fas fa-route"></i>
                            </div>
                            <div class="performance-info">
                                <h3><?= $h3_5 ?></h3>
                                <p><?= $p_8 ?></p>
                            </div>
                        </div>
                        <div class="performance-item">
                            <div class="performance-icon">
                                <i class="fas fa-mountain"></i>
                            </div>
                            <div class="performance-info">
                                <h3><?= $h3_6 ?></h3>
                                <p><?= $p_9 ?></p>
                            </div>
                        </div>
                        <div class="performance-item">
                            <div class="performance-icon">
                                <i class="fas fa-gas-pump"></i>
                            </div>
                            <div class="performance-info">
                                <h3><?= $h3_7 ?></h3>
                                <p><?= $p_10 ?></p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Capacidad -->
                <section class="aircraft-capacity">
                    <h2 class="section-title"><?= $h2_5 ?></h2>
                    <div class="capacity-layout">
                        <div class="capacity-info">
                            <div class="capacity-item">
                                <i class="fas fa-users"></i>
                                <div>
                                    <h3><?= $h3_8 ?></h3>
                                    <p><?= $p_11 ?></p>
                                </div>
                            </div>
                            <div class="capacity-item">
                                <i class="fas fa-cog"></i>
                                <div>
                                    <h3><?= $h3_9 ?></h3>
                                    <p><?= $p_12 ?></p>
                                </div>
                            </div>
                            <div class="capacity-item">
                                <i class="fas fa-suitcase"></i>
                                <div>
                                    <h3><?= $h3_10 ?></h3>
                                    <p><?= $p_13 ?></p>
                                </div>
                            </div>
                            <div class="capacity-item">
                                <i class="fas fa-ruler"></i>
                                <div>
                                    <h3><?= $h3_11 ?></h3>
                                    <p><? $p_14 ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="seating-diagram">
                            <img src="public/aviones/Air-King-B200.webp"Imagen de avión" style="width: 100%; height: 100%; border-radius: 10px; object-fit: cover;">

                        </div>
                    </div>
                </section>

                <!-- Lugares de Operación -->
                <section class="aircraft-operations">
                    <h2 class="section-title"><?= $h2_6 ?></h2>
                    <div class="operations-content">
                        <div class="operations-text">
                            <p><?= $p_15 ?></p>
                        </div>
                        <div class="routes-grid">
                            <div class="route-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <h3><?= $h3_12 ?></h3>
                                <ul>
                                    <li>Puno</li>
                                    <li>Cusco</li>
                                    <li>Lima</li>
                                    <li>Otras Regiones</li>
                                </ul>
                            </div>
                            <div class="route-item">
                                <i class="fas fa-plane-departure"></i>
                                <h3><?= $h3_13 ?></h3>
                                <ul>
                                    <li>Vuelos Charter</li>
                                    <li>Servicios Ejecutivos</li>
                                    <li>Rutas Estacionales</li>
                                    <li>Conexiones Regionales</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>

        <!-- Formulario Sticky -->
        <aside class="sticky-form">
            <div class="form-container">
                <h3><?= $h3_14 ?></h3>
                <form class="contact-form" id="aircraftForm">
                    <div class="form-group">
                        <input type="text" id="name" name="name" placeholder="Nombre Completo" required>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" name="email" placeholder="Correo Electrónico" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" id="phone" name="phone" placeholder="Número de Teléfono" required>
                    </div>
                    <div class="form-group">
                        <input type="text" id="aircraft" name="aircraft" placeholder="Nombre del Avión" required>
                    </div>
                    <div class="form-group">
                        <select id="country" name="country" required>
                            <option value="">Seleccionar País</option>
                            <option value="mexico">México</option>
                            <option value="usa">Estados Unidos</option>
                            <option value="canada">Canadá</option>
                            <option value="guatemala">Guatemala</option>
                            <option value="belize">Belice</option>
                            <option value="honduras">Honduras</option>
                            <option value="el-salvador">El Salvador</option>
                            <option value="nicaragua">Nicaragua</option>
                            <option value="costa-rica">Costa Rica</option>
                            <option value="panama">Panamá</option>
                            <option value="colombia">Colombia</option>
                            <option value="venezuela">Venezuela</option>
                            <option value="brazil">Brasil</option>
                            <option value="argentina">Argentina</option>
                            <option value="chile">Chile</option>
                            <option value="peru">Perú</option>
                            <option value="ecuador">Ecuador</option>
                            <option value="bolivia">Bolivia</option>
                            <option value="paraguay">Paraguay</option>
                            <option value="uruguay">Uruguay</option>
                            <option value="otro">Otro</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="date" id="date" name="date" required>
                    </div>
                    <div class="form-group">
                        <textarea id="message" name="message" placeholder="Mensaje Adicional" rows="4"></textarea>
                    </div>
                    <button type="submit" class="submit-btn">
                        <i class="fas fa-paper-plane"></i>
                        Enviar Solicitud
                    </button>
                </form>
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <span>+51 944 055 408</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>contacto@aerolineadelsur.com.pe</span>
                    </div>
                </div>
            </div>
        </aside>
    </div>
    <script>
        // ===== FUNCIONALIDAD CARRUSEL DE IMÁGENES =====
document.addEventListener('DOMContentLoaded', function() {
    let currentSlideIndex = 0;
    const slides = document.querySelectorAll('.carousel-slide');
    const indicators = document.querySelectorAll('.indicator');
    const totalSlides = slides.length;
    
    // Verificar que existen elementos del carrusel
    if (slides.length === 0 || indicators.length === 0) {
        console.log('No se encontraron elementos del carrusel');
        return;
    }
    
    // Función para mostrar slide específico
    function showSlide(index) {
        // Remover clase active de todos los slides e indicadores
        slides.forEach(slide => slide.classList.remove('active'));
        indicators.forEach(indicator => indicator.classList.remove('active'));
        
        // Mostrar slide actual
        if (slides[index] && indicators[index]) {
            slides[index].classList.add('active');
            indicators[index].classList.add('active');
        }
    }
    
    // Función para cambiar slide (navegación con botones)
    function changeSlide(direction) {
        currentSlideIndex += direction;
        
        // Ciclo infinito
        if (currentSlideIndex >= totalSlides) {
            currentSlideIndex = 0;
        } else if (currentSlideIndex < 0) {
            currentSlideIndex = totalSlides - 1;
        }
        
        showSlide(currentSlideIndex);
    }
    
    // Función para ir a slide específico (indicadores)
    function currentSlide(index) {
        currentSlideIndex = index - 1; // Los indicadores empiezan en 1
        showSlide(currentSlideIndex);
    }
    
    // Auto-play del carrusel
    function autoPlayCarousel() {
        currentSlideIndex++;
        if (currentSlideIndex >= totalSlides) {
            currentSlideIndex = 0;
        }
        showSlide(currentSlideIndex);
    }
    
    // Iniciar auto-play cada 8 segundos (más lento)
    let autoPlayInterval = setInterval(autoPlayCarousel, 8000);
    
    // Pausar auto-play cuando el usuario interactúa
    function pauseAutoPlay() {
        clearInterval(autoPlayInterval);
        // Reiniciar auto-play después de 12 segundos de inactividad
        setTimeout(() => {
            autoPlayInterval = setInterval(autoPlayCarousel, 8000);
        }, 12000);
    }
    
    // Botones de navegación
    const prevBtn = document.querySelector('.carousel-btn.prev');
    const nextBtn = document.querySelector('.carousel-btn.next');
    
    if (prevBtn && nextBtn) {
        prevBtn.addEventListener('click', () => {
            changeSlide(-1);
            pauseAutoPlay();
        });
        
        nextBtn.addEventListener('click', () => {
            changeSlide(1);
            pauseAutoPlay();
        });
    }
    
    // Indicadores
    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            currentSlide(index + 1);
            pauseAutoPlay();
        });
    });
    
    // Navegación con teclado
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') {
            changeSlide(-1);
            pauseAutoPlay();
        } else if (e.key === 'ArrowRight') {
            changeSlide(1);
            pauseAutoPlay();
        }
    });
    
    // Inicializar el primer slide
    showSlide(0);
    
    // Hacer las funciones globales para compatibilidad con onclick en HTML
    window.changeSlide = changeSlide;
    window.currentSlide = currentSlide;
});

// ===== FUNCIONALIDAD DEL FORMULARIO =====
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('aircraftForm');
    const inputs = form.querySelectorAll('input, select, textarea');
    
    // Validación en tiempo real
    inputs.forEach(input => {
        input.addEventListener('blur', validateField);
        input.addEventListener('input', clearErrors);
    });
     
     // Funcionalidad del checkbox de fecha de retorno
     const includeReturnCheckbox = document.getElementById('includeReturn');
     const returnDateGroup = document.getElementById('returnDateGroup');
     const returnDateInput = document.getElementById('returnDate');
     
     if (includeReturnCheckbox && returnDateGroup && returnDateInput) {
         includeReturnCheckbox.addEventListener('change', function() {
             if (this.checked) {
                 returnDateGroup.style.display = 'block';
                 returnDateInput.setAttribute('required', 'required');
             } else {
                 returnDateGroup.style.display = 'none';
                 returnDateInput.removeAttribute('required');
                 returnDateInput.value = '';
                 clearFieldError(returnDateInput);
             }
         });
     }
     
     // Función para validar campo individual
    function validateField(e) {
        const field = e.target;
        const value = field.value.trim();
        
        // Remover errores previos
        clearFieldError(field);
        
        // Validaciones específicas
        switch(field.type) {
            case 'email':
                if (value && !isValidEmail(value)) {
                    showFieldError(field, 'Por favor ingrese un email válido');
                }
                break;
            case 'tel':
                if (value && !isValidPhone(value)) {
                    showFieldError(field, 'Por favor ingrese un teléfono válido');
                }
                break;
            case 'date':
                if (value && !isValidDate(value)) {
                    showFieldError(field, 'Por favor seleccione una fecha válida');
                }
                break;
        }
        
        // Validaciones específicas por ID
        if (field.id === 'aircraft' && value && value.length < 2) {
            showFieldError(field, 'El nombre del avión debe tener al menos 2 caracteres');
        }
        
        // Validación de campos requeridos
        if (field.hasAttribute('required') && !value) {
            showFieldError(field, 'Este campo es requerido');
        }
    }
    
    // Función para limpiar errores
    function clearErrors(e) {
        clearFieldError(e.target);
    }
    
    // Función para mostrar error en campo
    function showFieldError(field, message) {
        field.style.borderColor = '#e74c3c';
        
        // Crear mensaje de error si no existe
        let errorMsg = field.parentNode.querySelector('.error-message');
        if (!errorMsg) {
            errorMsg = document.createElement('div');
            errorMsg.className = 'error-message';
            errorMsg.style.color = '#e74c3c';
            errorMsg.style.fontSize = '0.8rem';
            errorMsg.style.marginTop = '5px';
            field.parentNode.appendChild(errorMsg);
        }
        errorMsg.textContent = message;
    }
    
    // Función para limpiar error de campo
    function clearFieldError(field) {
        field.style.borderColor = 'rgba(255, 255, 255, 0.2)';
        const errorMsg = field.parentNode.querySelector('.error-message');
        if (errorMsg) {
            errorMsg.remove();
        }
    }
    
    // Validación de email
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
    
    // Validación de teléfono
    function isValidPhone(phone) {
        const phoneRegex = /^[\+]?[1-9][\d]{0,3}[\s\-]?[\(]?[\d]{1,3}[\)]?[\s\-]?[\d]{3,4}[\s\-]?[\d]{4}$/;
        return phoneRegex.test(phone);
    }
    
    // Validación de fecha
    function isValidDate(dateString) {
        const date = new Date(dateString);
        const today = new Date();
        today.setHours(0, 0, 0, 0);
        
        // Verificar que la fecha sea válida y no sea anterior a hoy
        return date instanceof Date && !isNaN(date) && date >= today;
    }
    
    // Envío del formulario
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Validar todos los campos
        let isValid = true;
        inputs.forEach(input => {
            validateField({ target: input });
            if (input.parentNode.querySelector('.error-message')) {
                isValid = false;
            }
        });
        
        if (isValid) {
            // Simular envío del formulario
            const submitBtn = form.querySelector('.submit-btn');
            const originalText = submitBtn.innerHTML;
            
            // Mostrar estado de carga
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Enviando...';
            submitBtn.disabled = true;
            
            // Simular delay de envío
            setTimeout(() => {
                // Mostrar mensaje de éxito
                showNotification('¡Solicitud enviada exitosamente! Nos pondremos en contacto contigo pronto.', 'success');
                
                // Resetear formulario
                form.reset();
                
                // Restaurar botón
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            }, 2000);
        } else {
            showNotification('Por favor corrige los errores en el formulario.', 'error');
        }
    });
    
    // Función para mostrar notificaciones
    function showNotification(message, type) {
        // Crear elemento de notificación
        const notification = document.createElement('div');
        notification.className = `notification ${type}`;
        notification.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 15px 20px;
            border-radius: 8px;
            color: white;
            font-weight: 500;
            z-index: 1000;
            transform: translateX(100%);
            transition: transform 0.3s ease;
            max-width: 300px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        `;
        
        if (type === 'success') {
            notification.style.background = 'linear-gradient(135deg, #27ae60, #2ecc71)';
        } else {
            notification.style.background = 'linear-gradient(135deg, #e74c3c, #c0392b)';
        }
        
        notification.innerHTML = `
            <div style="display: flex; align-items: center; gap: 10px;">
                <i class="fas ${type === 'success' ? 'fa-check-circle' : 'fa-exclamation-circle'}"></i>
                <span>${message}</span>
            </div>
        `;
        
        document.body.appendChild(notification);
        
        // Animar entrada
        setTimeout(() => {
            notification.style.transform = 'translateX(0)';
        }, 100);
        
        // Remover después de 5 segundos
        setTimeout(() => {
            notification.style.transform = 'translateX(100%)';
            setTimeout(() => {
                if (notification.parentNode) {
                    notification.parentNode.removeChild(notification);
                }
            }, 300);
        }, 5000);
    }
});

// ===== SMOOTH SCROLLING PARA ENLACES INTERNOS =====
document.addEventListener('DOMContentLoaded', function() {
    // Agregar smooth scrolling a todos los enlaces internos
    const links = document.querySelectorAll('a[href^="#"]');
    
    links.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // ===== NUEVO CARRUSEL DE IMÁGENES =====
    const newCarouselTrack = document.querySelector('.new-carousel-track');
    const newCarouselSlides = document.querySelectorAll('.new-carousel-slide');
    const newCarouselIndicators = document.querySelectorAll('.new-carousel-indicator');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    
    if (newCarouselTrack && newCarouselSlides.length > 0) {
        let currentSlideIndex = 0;
        const totalSlides = newCarouselSlides.length;
        let autoPlayInterval;
        let isUserInteracting = false;
        
        // Función para mostrar slide específico
        function showNewSlide(index) {
            // Asegurar que el índice esté en rango
            if (index >= totalSlides) {
                currentSlideIndex = 0;
            } else if (index < 0) {
                currentSlideIndex = totalSlides - 1;
            } else {
                currentSlideIndex = index;
            }
            
            // Mover el track
            const translateX = -currentSlideIndex * 25; // 25% por slide
            newCarouselTrack.style.transform = `translateX(${translateX}%)`;
            
            // Actualizar indicadores
            newCarouselIndicators.forEach((indicator, i) => {
                indicator.classList.toggle('current-indicator', i === currentSlideIndex);
            });
        }
        
        // Función para ir al siguiente slide
        function nextSlide() {
            showNewSlide(currentSlideIndex + 1);
        }
        
        // Función para ir al slide anterior
        function prevSlide() {
            showNewSlide(currentSlideIndex - 1);
        }
        
        // Auto-play del carrusel
        function startAutoPlay() {
            autoPlayInterval = setInterval(() => {
                if (!isUserInteracting) {
                    nextSlide();
                }
            }, 6000); // Cambiar cada 6 segundos
        }
        
        function stopAutoPlay() {
            clearInterval(autoPlayInterval);
        }
        
        function resetAutoPlay() {
            stopAutoPlay();
            isUserInteracting = true;
            setTimeout(() => {
                isUserInteracting = false;
                startAutoPlay();
            }, 8000); // Reanudar después de 8 segundos de inactividad
        }
        
        // Event listeners para botones de navegación
        if (prevBtn) {
            prevBtn.addEventListener('click', () => {
                prevSlide();
                resetAutoPlay();
            });
        }
        
        if (nextBtn) {
            nextBtn.addEventListener('click', () => {
                nextSlide();
                resetAutoPlay();
            });
        }
        
        // Event listeners para indicadores
        newCarouselIndicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => {
                showNewSlide(index);
                resetAutoPlay();
            });
        });
        
        // Navegación con teclado
        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft') {
                prevSlide();
                resetAutoPlay();
            } else if (e.key === 'ArrowRight') {
                nextSlide();
                resetAutoPlay();
            }
        });
        
        // Pausar auto-play cuando el mouse está sobre el carrusel
        const carouselWrapper = document.querySelector('.new-carousel-wrapper');
        if (carouselWrapper) {
            carouselWrapper.addEventListener('mouseenter', () => {
                isUserInteracting = true;
            });
            
            carouselWrapper.addEventListener('mouseleave', () => {
                isUserInteracting = false;
            });
        }
        
        // Soporte para gestos táctiles (básico)
        let touchStartX = 0;
        let touchEndX = 0;
        
        if (newCarouselTrack) {
            newCarouselTrack.addEventListener('touchstart', (e) => {
                touchStartX = e.changedTouches[0].screenX;
            });
            
            newCarouselTrack.addEventListener('touchend', (e) => {
                touchEndX = e.changedTouches[0].screenX;
                handleSwipe();
            });
        }
        
        function handleSwipe() {
            const swipeThreshold = 50;
            const diff = touchStartX - touchEndX;
            
            if (Math.abs(diff) > swipeThreshold) {
                if (diff > 0) {
                    // Swipe izquierda - siguiente slide
                    nextSlide();
                } else {
                    // Swipe derecha - slide anterior
                    prevSlide();
                }
                resetAutoPlay();
            }
        }
        
        // Inicializar carrusel
        showNewSlide(0);
        startAutoPlay();
    }
});

// ===== EFECTOS DE SCROLL =====
document.addEventListener('DOMContentLoaded', function() {
    // Observador de intersección para animaciones al hacer scroll
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
    
    // Observar elementos que deben animarse
    const animatedElements = document.querySelectorAll('section, .overview-item, .performance-item, .route-item');
    
    animatedElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });
});
    </script>
@endsection