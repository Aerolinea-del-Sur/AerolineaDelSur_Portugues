@extends('a_EncabezadoFooter.princi')
@section('content')
    <link rel="stylesheet" href="{{ asset('public/css/nosotros.css') }}">
    <!-- Encabezado de la página -->
    <header class="about-header">
        <div class="container">
            <h1 class="about-title">Nosotros</h1>
            <p class="about-subtitle">Conozca nuestra historia y valores</p>
        </div>
    </header>

    <!-- Sección de Misión -->
    <section class="about-section mission-section">
        <div class="container">
            <div class="section-content">
                <div class="text-content">
                    <h2 class="section-title">Nuestra Misión</h2>
                    <p class="section-description">
                        Nuestra misión es proporcionar productos y servicios excepcionales que superen las expectativas de nuestros clientes. 
                        Nos esforzamos por innovar constantemente, manteniendo los más altos estándares de calidad y excelencia en todo lo que hacemos.
                    </p>
                    <p class="section-description">
                        Estamos comprometidos con la creación de valor para nuestros clientes, empleados y comunidades donde operamos, 
                        mientras mantenemos un enfoque sostenible y responsable en nuestras operaciones.
                    </p>
                </div>
                <div class="image-container">
                    <div class="about-image mission-image">
                        <div class="image-overlay"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Visión -->
    <section class="about-section vision-section">
        <div class="container">
            <div class="section-content reverse">
                <div class="image-container">
                    <div class="about-image vision-image">
                        <div class="image-overlay"></div>
                    </div>
                </div>
                <div class="text-content">
                    <h2 class="section-title">Nuestra Visión</h2>
                    <p class="section-description">
                        Inspirar y conectar a las personas a través de experiencias aéreas únicas, brindando servicios con los más altos estándares de seguridad, calidad e innovación. Nuestro compromiso es superar las expectativas de cada cliente, mostrando lo mejor del Perú y Sudamérica desde el cielo, con hospitalidad, excelencia y un enfoque responsable con las comunidades y el entorno.
                    </p>
                    <p class="section-description">
                        Ser la aerolínea líder del Perú y Latinoamérica, reconocida a nivel nacional e internacional por ofrecer experiencias aéreas exclusivas y personalizadas que permitan a nuestros pasajeros descubrir los destinos más espectaculares, con seguridad, confort e innovación.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Propósito -->
    <section class="about-section purpose-section">
        <div class="container">
            <div class="section-content">
                <div class="text-content">
                    <h2 class="section-title">Nuestro Propósito</h2>
                    <p class="section-description">
                        Ser la aerolínea líder del Perú y Latinoamérica, reconocida a nivel nacional e internacional por ofrecer experiencias aéreas 
                        exclusivas y personalizadas que permitan a nuestros pasajeros descubrir los destinos más espectaculares, con seguridad, confort e innovación.
                    </p>
                    <p class="section-description">
                        Existimos para transformar la manera en que las personas viajan, 
                        haciendo que cada experiencia sea memorable, significativa y valiosa.
                    </p>
                    <div class="purpose-values">
                        <div class="value-item">
                            <i class="fas fa-gem"></i>
                            <h3>Excelencia – ofrecer un servicio de calidad superior en cada experiencia.</h3>
                        </div>
                        <div class="value-item">
                            <i class="fas fa-handshake"></i>
                            <h3>Integridad – actuar con honestidad y transpariencia</h3>
                        </div>
                        <div class="value-item">
                            <i class="fas fa-lightbulb"></i>
                            <h3>Seguridad</h3>
                        </div>
                    </div>
                    
                </div>
                <div class="image-container">
                    <div class="about-image purpose-image">
                        <div class="image-overlay"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Historia -->
    <section class="about-section history-section">
        <div class="container">
            <h2 class="section-title centered">Nuestra Historia</h2>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h3>2024</h3>
                        <h4>Fundación con visión peruana</h4>
                        <p>Nace Aerolínea del Sur con capital 100% peruano. Un equipo de pilotos y profesionales de la aviación se une para mostrar la grandeza del Perú desde el cielo, priorizando la seguridad, la exclusividad y el servicio personalizado.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h3>2025</h3>
                        <h4>Primeras rutas exclusivas</h4>
                        <p>Se inauguran los primeros vuelos turísticos y charter sobre el Valle Sagrado de los Incas y Cusco, ofreciendo experiencias memorables que conectan a los viajeros con el patrimonio natural y cultural del país desde una perspectiva única.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h3>Hoy</h3>
                        <h4>Mirando al futuro</h4>
                        <p>Continuamos brindando un servicio de calidad y expandiendo nuestro alcance con nuevos aviones y servicios tursticos.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de equipo -->
    <section class="about-section team-section">
        <div class="container">
            <h2 class="section-title centered">Nuestro Equipo</h2>
            <p class="section-description centered">Contamos con profesionales apasionados y dedicados que trabajan juntos para alcanzar nuestra visión.</p>
            <div class="team-grid">
                <div class="team-member">
                    <div class="member-image"></div>
                    <h3>Ana Rodríguez</h3>
                    <p>CEO & Fundadora</p>
                </div>
                <div class="team-member">
                    <div class="member-image"></div>
                    <h3>Carlos Méndez</h3>
                    <p>Director de Operaciones</p>
                </div>
                <div class="team-member">
                    <div class="member-image"></div>
                    <h3>Elena Torres</h3>
                    <p>Directora de Innovación</p>
                </div>
                <div class="team-member">
                    <div class="member-image"></div>
                    <h3>Miguel Sánchez</h3>
                    <p>Director Financiero</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de contacto -->
    <section class="about-section contact-section">
        <div class="container">
            <div class="contact-content">
                <h2 class="section-title">¿Quieres saber más?</h2>
                <p class="section-description">Estamos aquí para responder a todas tus preguntas y ayudarte a conocer más sobre nuestra empresa.</p>
                <a href="#" class="btn-primary"><span>Contáctanos</span></a>
            </div>
        </div>
    </section>
@endsection