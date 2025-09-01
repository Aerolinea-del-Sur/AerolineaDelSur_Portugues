@extends('a_EncabezadoFooter.princi')
@section('content')
<link rel="stylesheet" href="{{ asset('public/css/footer/privaty.css') }}">
<!-- Header -->
<header class="header">
    <div class="header-container">
        <a href="{{ url('/') }}" class="logo">Aerolíneas del Sur</a>
        <a href="{{ url()->previous() }}" class="back-btn">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M19 12H5"></path>
                <path d="M12 19l-7-7 7-7"></path>
            </svg>
            Volver
        </a>
    </div>
</header>

<!-- Main Content -->
<main class="main-content">
    <div class="privacy-container">
        <!-- Header -->
        <div class="privacy-header">
            <h1 class="privacy-title">Políticas de Privacidad</h1>
            <p class="privacy-subtitle">
                Es importante que lea cuidadosamente los términos, condiciones y políticas de reserva. 
                Con la información suministrada cumplimos con dar conocimiento a nuestros clientes sobre el servicio que brindamos.
            </p>
        </div>

        <!-- Section 1 -->
        <div class="privacy-section">
            <h2 class="section-title">
                <span class="section-number">1</span>
                Uso de la Información Personal
            </h2>
            <div class="section-content">
                <p><span class="highlight">Aerolíneas del Sur</span> no recopila información personal con fines distintos a los aquí mencionados, ni vende, intercambia o alquila dicha información a ninguna organización o tercero no autorizado.</p>
                
                <p>Utilizamos sus datos personales —como nombre completo, número de teléfono y dirección de correo electrónico— únicamente para:</p>
                
                <ul>
                    <li>Procesar, confirmar y gestionar las reservas de vuelos u otros servicios solicitados.</li>
                    <li>Enviarle información relevante sobre su itinerario, alertas de viaje, promociones, encuestas o noticias relacionadas con nuestra empresa.</li>
                    <li>Brindar asistencia al cliente en caso de cambios, cancelaciones o reprogramaciones.</li>
                </ul>
                
                <p>Usted podrá optar por no recibir más comunicaciones promocionales en cualquier momento mediante el enlace de cancelación de suscripción incluido en cada correo o escribiéndonos a nuestro correo de contacto.</p>
            </div>
        </div>

        <!-- Section 2 -->
        <div class="privacy-section">
            <h2 class="section-title">
                <span class="section-number">2</span>
                Enlaces a Sitios Externos
            </h2>
            <div class="section-content">
                <p>El sitio web de <span class="highlight">Aerolíneas del Sur</span> puede contener enlaces a otros sitios de Internet que operan bajo diferentes nombres de dominio o URL. Estos enlaces se proporcionan únicamente para la comodidad del usuario y no están bajo el control de nuestra empresa.</p>
                
                <p>Aerolíneas del Sur no garantiza ni representa, de manera expresa o implícita, el contenido, precisión o veracidad de dichos sitios externos. La inclusión de estos enlaces no implica respaldo, patrocinio, asociación ni afiliación alguna con Aerolíneas del Sur, salvo que se indique expresamente lo contrario.</p>
            </div>
        </div>

        <!-- Section 3 -->
        <div class="privacy-section">
            <h2 class="section-title">
                <span class="section-number">3</span>
                Consentimiento del Usuario
            </h2>
            <div class="section-content">
                <p>Al proporcionar sus datos personales a través de nuestros formularios o plataformas digitales, usted otorga su <span class="highlight">consentimiento expreso e informado</span> para el tratamiento de los mismos conforme a lo establecido en esta Política de Privacidad.</p>
            </div>
        </div>

        <!-- Section 4 -->
        <div class="privacy-section">
            <h2 class="section-title">
                <span class="section-number">4</span>
                Seguridad de los Datos
            </h2>
            <div class="section-content">
                <p>Aerolíneas del Sur implementa <span class="highlight">medidas técnicas, administrativas y organizativas</span> adecuadas para proteger la confidencialidad e integridad de los datos personales proporcionados, evitando accesos no autorizados, usos indebidos, pérdidas o alteraciones.</p>
                
                <p>Nuestros sistemas cumplen con estándares de seguridad aplicables, incluyendo cifrado de información sensible, firewalls y controles de acceso internos.</p>
            </div>
        </div>

        <!-- Section 5 -->
        <div class="privacy-section">
            <h2 class="section-title">
                <span class="section-number">5</span>
                Derechos del Usuario
            </h2>
            <div class="section-content">
                <p>Usted tiene derecho a:</p>
                
                <ul>
                    <li>Acceder a sus datos personales.</li>
                    <li>Solicitar la rectificación de información incorrecta o desactualizada.</li>
                    <li>Solicitar la cancelación de sus datos.</li>
                    <li>Oponerse al tratamiento de sus datos para fines específicos.</li>
                </ul>
                
                <div class="contact-info">
                    <p>Para ejercer cualquiera de estos derechos, puede contactarnos a través de nuestro correo electrónico oficial:</p>
                    <a href="mailto:contacto@aerolineadelsur.com.pe" class="contact-email">contacto@aerolineadelsur.com.pe</a>
                </div>
            </div>
        </div>

        <!-- Section 6 -->
        <div class="privacy-section">
            <h2 class="section-title">
                <span class="section-number">6</span>
                Modificaciones a esta Política de Privacidad
            </h2>
            <div class="section-content">
                <p>Aerolíneas del Sur se reserva el derecho de <span class="highlight">modificar esta política</span> en cualquier momento. Cualquier cambio sustancial será notificado oportunamente a través de nuestro sitio web.</p>
                
                <p>Se recomienda revisar esta página periódicamente para mantenerse informado sobre cómo protegemos su información.</p>
            </div>
        </div>

        <!-- Last Updated -->
        <div class="last-updated">
            <p>Última actualización: {{ date('d/m/Y') }}</p>
        </div>
    </div>
</main>

<!-- Scroll to Top Button -->
<button class="scroll-top" id="scrollTop">
    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <path d="M18 15l-6-6-6 6"></path>
    </svg>
</button>

<script>
    // Scroll to top functionality
    const scrollTopBtn = document.getElementById('scrollTop');
    
    window.addEventListener('scroll', () => {
        if (window.pageYOffset > 300) {
            scrollTopBtn.classList.add('visible');
        } else {
            scrollTopBtn.classList.remove('visible');
        }
    });
    
    scrollTopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
    
    // Smooth scrolling for anchor links
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
</script>
@endsection