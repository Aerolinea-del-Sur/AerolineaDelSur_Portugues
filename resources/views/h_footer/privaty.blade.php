@extends('a_EncabezadoFooter.princi')
@section('content')
<link rel="stylesheet" href="{{ asset('public/css/general.css') }}">
    
    <style>
        :root {
            --primary-black: #1c1c1c;
            --charcoal: #2b2b2b;
            --charcoal-alt: #3a3a3a;
            --pearl: #f5f5f5;
            --white: #ffffff;
            --accent: #c9a227;
            --accent-light: #ffd700;
            --burgundy: #800020;
            --forest-green: #0b3d2e;
            --glass-bg: rgba(28, 28, 28, 0.9);
            --glass-bg-solid: rgba(28, 28, 28, 0.95);
            --shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            --shadow-lg: 0 16px 64px rgba(0, 0, 0, 0.4);
            --shadow-gold: 0 8px 32px rgba(201, 162, 39, 0.3);
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            --header-height: 80px;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Space Grotesk', sans-serif;
            background: linear-gradient(135deg, var(--primary-black) 0%, var(--charcoal) 50%, var(--primary-black) 100%);
            color: var(--pearl);
            line-height: 1.6;
            min-height: 100vh;
        }
        
        /* Header Styles */
        .header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: var(--header-height);
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(201, 162, 39, 0.2);
            z-index: 1000;
            transition: var(--transition);
        }
        
        .header-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .logo {
            font-size: 24px;
            font-weight: 700;
            color: var(--accent);
            text-decoration: none;
        }
        
        .back-btn {
            display: flex;
            align-items: center;
            gap: 8px;
            color: var(--pearl);
            text-decoration: none;
            padding: 12px 20px;
            border-radius: 12px;
            background: rgba(201, 162, 39, 0.1);
            border: 1px solid var(--accent);
            transition: var(--transition);
            font-weight: 500;
        }
        
        .back-btn:hover {
            background: var(--accent);
            color: var(--primary-black);
            transform: translateY(-2px);
            box-shadow: var(--shadow-gold);
        }
        
        .back-btn svg {
            width: 16px;
            height: 16px;
        }
        
        /* Main Content */
        .main-content {
            margin-top: var(--header-height);
            padding: 60px 20px;
            max-width: 900px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .privacy-container {
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(201, 162, 39, 0.2);
            border-radius: 24px;
            padding: 40px;
            box-shadow: var(--shadow-lg);
        }
        
        .privacy-header {
            text-align: center;
            margin-bottom: 40px;
            padding-bottom: 30px;
            border-bottom: 2px solid var(--accent);
        }
        
        .privacy-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--accent);
            margin-bottom: 16px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }
        
        .privacy-subtitle {
            font-size: 1.1rem;
            color: var(--pearl);
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }
        
        .privacy-section {
            margin-bottom: 40px;
        }
        
        .section-title {
            font-size: 1.4rem;
            font-weight: 600;
            color: var(--accent-light);
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .section-number {
            background: var(--accent);
            color: var(--primary-black);
            width: 32px;
            height: 32px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 0.9rem;
        }
        
        .section-content {
            color: var(--pearl);
            font-size: 1rem;
            line-height: 1.7;
            margin-left: 44px;
        }
        
        .section-content p {
            margin-bottom: 16px;
        }
        
        .section-content ul {
            margin: 16px 0;
            padding-left: 20px;
        }
        
        .section-content li {
            margin-bottom: 8px;
            position: relative;
        }
        
        .section-content li::marker {
            color: var(--accent);
        }
        
        .highlight {
            background: rgba(201, 162, 39, 0.2);
            padding: 2px 6px;
            border-radius: 4px;
            color: var(--accent-light);
            font-weight: 500;
        }
        
        .contact-info {
            background: rgba(201, 162, 39, 0.1);
            border: 1px solid var(--accent);
            border-radius: 12px;
            padding: 20px;
            margin: 20px 0;
            text-align: center;
        }
        
        .contact-email {
            color: var(--accent-light);
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
        }
        
        .contact-email:hover {
            color: var(--accent);
            text-decoration: underline;
        }
        
        .last-updated {
            text-align: center;
            margin-top: 40px;
            padding-top: 30px;
            border-top: 1px solid rgba(201, 162, 39, 0.3);
            color: var(--pearl);
            font-size: 0.9rem;
            opacity: 0.8;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .privacy-container {
                padding: 24px;
                margin: 20px;
            }
            
            .privacy-title {
                font-size: 2rem;
            }
            
            .section-content {
                margin-left: 0;
            }
            
            .section-title {
                flex-direction: column;
                align-items: flex-start;
                gap: 8px;
            }
        }
        
        /* Scroll to top button */
        .scroll-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background: var(--accent);
            color: var(--primary-black);
            border: none;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            visibility: hidden;
            transition: var(--transition);
            box-shadow: var(--shadow-gold);
        }
        
        .scroll-top.visible {
            opacity: 1;
            visibility: visible;
        }
        
        .scroll-top:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 40px rgba(201, 162, 39, 0.4);
        }
    </style>
</head>
<body>
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