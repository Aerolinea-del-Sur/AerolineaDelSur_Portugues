@extends('a_EncabezadoFooter.princi')
@section('content')
<link rel="stylesheet" href="{{ asset('public/css/Servicio.css') }}">
    <div class="services-container">
        <header class="services-header">
            <h1>Nuestros Servicios</h1>
            <p>Ofrecemos una amplia gama de servicios de aviación para satisfacer todas sus necesidades</p>
        </header>
        <div class="services-list">
            <!-- Servicio 1: CONTENIDO | IMAGEN -->
            <div class="service-row">
                <div class="service-content">
                    <div class="service-icon">
                        <i class="fa fa-plane" style="font-size: 40px; color: #FFFFFF;"></i>
                    </div>
                    <h3>Vuelos Chárter</h3>
                    <p>Vuelos privados adaptados a las necesidades de tiempo, destino y protocolo. Ideales para negocios, deportes, giras, instituciones y también para familias o particulares que buscan una alternativa a las aerolíneas comerciales.</p>
                    <ul>
                        <li>Horarios flexibles</li>
                        <li>Máxima privacidad</li>
                        <li>Servicio personalizado</li>
                    </ul>
                </div>
                <div class="service-image">
                    <img src="https://images.unsplash.com/photo-1540962351504-03099e0a754b?w=600&h=400&fit=crop&crop=center" alt="Avión privado en vuelo" style="width: 100%; height: 100%; object-fit: cover; border-radius: 15px;">
                </div>
            </div>
            <!-- Servicio 2: IMAGEN | CONTENIDO -->
            <div class="service-row reverse">
                <div class="service-image">
                    <img src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=600&h=400&fit=crop&crop=center" alt="Sobrevuelo panorámico" style="width: 100%; height: 100%; object-fit: cover; border-radius: 15px;">
                </div>
                <div class="service-content">
                    <div class="service-icon">
                        <i class="fa fa-rocket" style="font-size: 40px; color: #FFFFFF;"></i>
                    </div>
                    <h3>Sobrevuelos</h3>
                    <p>Reservas rápidas a precios competitivos. Aeronaves exclusivas con atención personalizada, catering a medida y embarque en menos de 30 minutos.</p>
                    <ul>
                        <li>Vistas panorámicas</li>
                        <li>Rutas escénicas</li>
                        <li>Experiencia inolvidable</li>
                    </ul>
                </div>
            </div>
            <!-- Servicio 3: CONTENIDO | IMAGEN -->
            <div class="service-row">
                <div class="service-content">
                    <div class="service-icon">
                        <i class="fa fa-helicopter" style="font-size: 40px; color: #FFFFFF;"></i>
                    </div>
                    <h3>Helicóptero</h3>
                    <p>Medio de transporte rápido, flexible y elegante para grupos pequeños o cargas valiosas. Ideal en rutas urbanas e interurbanas, con nuestros servicios especializados de helicóptero para transporte rápido, rescate y acceso a zonas de difícil alcance.</p>
                    <ul>
                        <li>Acceso a zonas remotas</li>
                        <li>Transporte rápido</li>
                        <li>Operaciones especiales</li>
                    </ul>
                </div>
                <div class="service-image">
                    <img src="https://images.pexels.com/photos/10146868/pexels-photo-10146868.jpeg" alt="Helicóptero en vuelo" style="width: 100%; height: 100%; object-fit: cover; border-radius: 15px;">
                </div>
            </div>
            <!-- Servicio 4: IMAGEN | CONTENIDO -->
            <div class="service-row reverse">
                <div class="service-image">
                    <img src="https://images.unsplash.com/photo-1640338392055-509a812a494e?q=80&w=2070" alt="Ambulancia aérea médica" style="width: 100%; height: 100%; object-fit: cover; border-radius: 15px;">
                </div>
                <div class="service-content">
                    <div class="service-icon">
                        <i class="fa fa-ambulance" style="font-size: 40px; color: #FFFFFF;"></i>
                    </div>
                    <h3>Ambulancia Médica</h3>
                    <p>Transporte especializado para pacientes en estado crítico o no, evacuaciones médicas y traslado de órganos. Aeronaves equipadas con tecnología avanzada y personal médico calificado.</p>
                    <ul>
                        <li>Emergencias médicas</li>
                        <li>Equipamiento especializado</li>
                        <li>Personal médico calificado</li>
                    </ul>
                </div>
            </div>
            <!-- Servicio 5: CONTENIDO | IMAGEN -->
            <div class="service-row">
                <div class="service-content">
                    <div class="service-icon">
                        <i class="fa fa-archive" style="font-size: 40px; color: #FFFFFF;"></i>
                    </div>
                    <h3>Carga</h3>
                    <p>Servicio de vuelos chárter de carga con diferentes tipos de aeronaves, desde jets pequeños hasta aviones de gran capacidad. Garantiza entregas urgentes y de grandes volúmenes en tiempo récord.</p>
                    <ul>
                        <li>Carga especializada</li>
                        <li>Máxima seguridad</li>
                        <li>Entrega eficiente</li>
                    </ul>
                </div>
                <div class="service-image">
                    <img src="https://images.pexels.com/photos/28147188/pexels-photo-28147188.jpeg" alt="Avión de carga" style="width: 100%; height: 100%; object-fit: cover; border-radius: 15px;">
                </div>
            </div>
        </div>
        
        <!-- Sección de Contacto -->
        <div class="services-contact-section">
            <h2>¿Listo para volar?</h2>
            <p>Contáctanos ahora y descubre cómo podemos hacer realidad tu próximo vuelo</p>
            <a href="contacto" class="services-contact-btn">Contactar Ahora</a>
        </div>
    </div>
@endsection