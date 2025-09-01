@extends('a_EncabezadoFooter.princi')
@section('content')
<link rel="stylesheet" href="{{ asset('public/css/general.css') }}">
<link rel="stylesheet" href="{{ asset('public/css/footer/terminos.css') }}">
<!-- Header -->
    <header class="header">
        <div class="container">
            <div class="header-content">
                <h1><i class="fas fa-file-contract"></i> Términos y Condiciones</h1>
                <p>Conoce nuestras políticas de reserva y condiciones de servicio</p>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <div class="terms-card">
            <!-- Introduction -->
            <div class="terms-intro">
                <p>Aerolínea del Sur declara estar firmemente comprometida con la privacidad de sus usuarios. La información personal que recopilamos de nuestros clientes se utiliza exclusivamente con el propósito de establecer contacto, gestionar reservas y mejorar la experiencia del usuario en nuestros servicios.</p>
            </div>
            
            <!-- Terms Content -->
            <div class="terms-content">
                <!-- Section 1: Pagos y Reservas -->
                <div class="terms-section">
                    <h2 class="section-title">
                        <span class="section-number">1</span>
                        <i class="fas fa-credit-card"></i>
                        PAGOS Y RESERVAS
                    </h2>
                    <div class="subsection">
                        <div class="subsection-label">a)</div>
                        <div class="subsection-content">Las reservaciones pueden ser efectuadas mediante Web, Email y/o Teléfono.</div>
                    </div>
                    <div class="subsection">
                        <div class="subsection-label">b)</div>
                        <div class="subsection-content">Para la reserva se solicita un depósito del 50% aproximado (se le indicará el monto necesario y los medios de pago), para la compra y/o servicios necesarios para la realización del tour.</div>
                    </div>
                    <div class="subsection">
                        <div class="subsection-label">c)</div>
                        <div class="subsection-content">Una vez que haya confirmado el usuario con su depósito acordado, se procederá a separar los servicios o espacios disponibles y se enviará el formato de reserva vía E-MAIL para que el usuario llene con los datos que se le pide.</div>
                    </div>
                    <div class="subsection">
                        <div class="subsection-label">d)</div>
                        <div class="subsection-content">Se realizará el cobro del saldo restante en las oficinas de la agencia, el pago podrá realizarse en efectivo o con tarjeta.</div>
                    </div>
                </div>

                <!-- Section 2: Cancelaciones -->
                <div class="terms-section">
                    <h2 class="section-title">
                        <span class="section-number">2</span>
                        <i class="fas fa-times-circle"></i>
                        CANCELACIONES
                    </h2>
                    <div class="subsection">
                        <div class="subsection-label">a)</div>
                        <div class="subsection-content">En caso de desistimiento de operaciones no tendrán reembolso los importes abonados en concepto de informe, gastos administrativos, sellados e intereses, sin embargo en caso de que el visitante no pueda viajar, su reserva quedará con fecha abierta para que pueda reprogramar su viaje.</div>
                    </div>
                    <div class="subsection">
                        <div class="subsection-label">b)</div>
                        <div class="subsection-content">Cuando se trate de desistimiento que afecte a servicios contratados en firme por la agencia, el reembolso de los mismos estará sujeto a las condiciones contractuales bajo las cuales presten sus servicios las empresas respectivas. En todos los casos de reintegros, la agencia podrá retener el precio de los gastos incurridos más la comisión del diez por ciento de los servicios contratados con terceros.</div>
                    </div>
                    <div class="subsection">
                        <div class="subsection-label">c)</div>
                        <div class="subsection-content">Se considera NO SHOW al visitante que no se presente a su servicio y se cobrará el 100% de la tarifa sin derecho a reclamo ni reembolso alguno.</div>
                    </div>
                </div>

                <!-- Section 3: Los Precios Incluyen -->
                <div class="terms-section">
                    <h2 class="section-title">
                        <span class="section-number">3</span>
                        <i class="fas fa-check-circle"></i>
                        LOS PRECIOS INCLUYEN
                    </h2>
                    <div class="subsection">
                        <div class="subsection-label">a)</div>
                        <div class="subsection-content">Alojamiento en los hoteles mencionados en los itinerarios u otros de igual o mayor categoría, ocupando habitaciones simples, dobles, triples, etc. Según tarifa elegida, con baño privado e impuestos.</div>
                    </div>
                    <div class="subsection">
                        <div class="subsection-label">b)</div>
                        <div class="subsection-content">Boletos de ingreso (Total o parcial según el tipo de tour), boletos de Bus (cuando sea necesario), Boleto de Tren turístico ida y retorno (según lo pactado).</div>
                    </div>
                    <div class="subsection">
                        <div class="subsection-label">c)</div>
                        <div class="subsection-content">Régimen de comidas según se indique en cada oportunidad.</div>
                    </div>
                    <div class="subsection">
                        <div class="subsection-label">d)</div>
                        <div class="subsection-content">Visitas y excursiones que se mencionen. Traslados hasta y desde aeropuertos, terminales y hoteles, cuando se indique.</div>
                    </div>
                    <div class="subsection">
                        <div class="subsection-label">e)</div>
                        <div class="subsection-content">Guía de viaje bilingüe (inglés, español) en cada tour.</div>
                    </div>
                </div>

                <!-- Section 4: Servicios No Incluidos -->
                <div class="terms-section">
                    <h2 class="section-title">
                        <span class="section-number">4</span>
                        <i class="fas fa-minus-circle"></i>
                        SERVICIOS O RUBROS NO INCLUIDOS
                    </h2>
                    <div class="subsection">
                        <div class="subsection-label">a)</div>
                        <div class="subsection-content">Extras, bebidas, lavado de ropa, propinas, tasas de embarque, tasas sobre servicios, IVA y otros impuestos, actuales y/o futuros, ni ningún servicio que no se encuentre expresamente indicado en la orden de servicio emitida por el agente de viajes.</div>
                    </div>
                    <div class="subsection">
                        <div class="subsection-label">b)</div>
                        <div class="subsection-content">Estadas, comidas y/o gastos adicionales o perjuicios producidos por cancelaciones, demoras en las salidas o llegadas de los medios de transporte, o por razones imprevistas ajenas a la empresa.</div>
                    </div>
                    <div class="subsection">
                        <div class="subsection-label">c)</div>
                        <div class="subsection-content">Alimentación en ruta, excepto aquellas que estuviesen expresamente incluidas en los programas.</div>
                    </div>
                    <div class="subsection">
                        <div class="subsection-label">d)</div>
                        <div class="subsection-content">Los gastos e intereses en las operaciones a crédito.</div>
                    </div>
                </div>

                <!-- Section 5: Responsabilidad -->
                <div class="terms-section">
                    <h2 class="section-title">
                        <span class="section-number">5</span>
                        <i class="fas fa-shield-alt"></i>
                        RESPONSABILIDAD
                    </h2>
                    <div class="subsection">
                        <div class="subsection-label">a)</div>
                        <div class="subsection-content">La empresa declara expresamente que actúa en el carácter de intermediaria en la reserva o contratación de los distintos servicios vinculados e incluidos en el respectivo tour o reservación de servicios: hoteles, medios de transportes u otros prestadores.</div>
                    </div>
                    <div class="subsection">
                        <div class="subsection-label">b)</div>
                        <div class="subsection-content">La empresa no se responsabiliza por los hechos que se produzcan por caso fortuito o fuerza mayor, fenómenos climáticos o hechos de la naturaleza que acontezcan antes o durante el desarrollo del tour que impidan, demoren o de cualquier modo obstaculicen la ejecución total o parcial de las prestaciones comprometidas por la empresa.</div>
                    </div>
                    <div class="subsection">
                        <div class="subsection-label">c)</div>
                        <div class="subsection-content">El Visitante, contratado el servicio debe presentarse y utilizar los servicios pactados; caso contrario, el prestador podrá exigirle al usuario el pago de la totalidad del precio o tarifa establecida.</div>
                    </div>
                    <div class="subsection">
                        <div class="subsection-label">d)</div>
                        <div class="subsection-content">El Visitante declara que conoce y acepta en su integridad estas condiciones, las cuales constituyen el acuerdo único, total y excluyente de cualquier pacto o disposición legal en contrario, acerca de los términos, condiciones y restricciones de los servicios contratados.</div>
                    </div>
                </div>

                <!-- Section 6: Alteraciones o Modificaciones -->
                <div class="terms-section">
                    <h2 class="section-title">
                        <span class="section-number">6</span>
                        <i class="fas fa-edit"></i>
                        ALTERACIONES O MODIFICACIONES
                    </h2>
                    <div class="subsection">
                        <div class="subsection-label">a)</div>
                        <div class="subsection-content">La empresa se reserva el derecho, por razones técnicas u operativas, de alterar total o parcialmente el ordenamiento diario y/o de servicios que componen el tour, antes o durante la ejecución del mismo.</div>
                    </div>
                    <div class="subsection">
                        <div class="subsection-label">b)</div>
                        <div class="subsection-content">Salvo condición expresa en contrario, los hoteles estipulados podrán ser cambiados por otro de igual o mayor categoría dentro del mismo núcleo urbano sin cargo alguno para el pasajero. Respecto de estas variaciones el pasajero no tendrá derecho a indemnización alguna.</div>
                    </div>
                    <div class="subsection">
                        <div class="subsection-label">c)</div>
                        <div class="subsection-content">Una vez comenzado el viaje, la suspensión, modificación o interrupción de los servicios por parte del pasajero por razones personales de cualquier índole, no dará lugar a reclamo alguno, reembolso o devolución alguna.</div>
                    </div>
                </div>

                <!-- Section 7: Limitaciones al Derecho de Permanencia -->
                <div class="terms-section">
                    <h2 class="section-title">
                        <span class="section-number">7</span>
                        <i class="fas fa-exclamation-triangle"></i>
                        LIMITACIONES AL DERECHO DE PERMANENCIA
                    </h2>
                    <div class="subsection">
                        <div class="subsection-content">La empresa se reserva el derecho de hacer que abandone el tour en cualquier punto del mismo todo pasajero cuya conducta, modo de obrar, estado de salud u otras razones graves a juicio de la empresa provoque peligro o cause molestias a los restantes viajeros o pueda malograr el éxito de la excursión o el normal desarrollo de la misma.</div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; {{ date('Y') }} Aerolínea del Sur. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <button class="scroll-top" id="scrollTop" aria-label="Volver arriba">
        <i class="fas fa-chevron-up"></i>
    </button>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script>
        // Scroll to Top Functionality
        const scrollTopBtn = document.getElementById('scrollTop');
        
        // Show/hide scroll to top button
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                scrollTopBtn.classList.add('visible');
            } else {
                scrollTopBtn.classList.remove('visible');
            }
        });
        
        // Scroll to top when button is clicked
        scrollTopBtn.addEventListener('click', function() {
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
        
        // Add loading animation
        window.addEventListener('load', function() {
            document.body.style.opacity = '0';
            document.body.style.transition = 'opacity 0.3s ease';
            setTimeout(() => {
                document.body.style.opacity = '1';
            }, 100);
        });
        
        // Enhanced accessibility
        document.addEventListener('keydown', function(e) {
            // ESC key to close any modals or return to top
            if (e.key === 'Escape') {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }
        });
        
        // Print functionality
        function printTerms() {
            window.print();
        }
        
        // Add print styles
        const printStyles = `
            @media print {
                .scroll-top, .header::before {
                    display: none !important;
                }
                .header {
                    background: var(--primary-black) !important;
                    -webkit-print-color-adjust: exact;
                }
                .terms-section {
                    break-inside: avoid;
                    page-break-inside: avoid;
                }
            }
        `;
        
        const styleSheet = document.createElement('style');
        styleSheet.textContent = printStyles;
        document.head.appendChild(styleSheet);
    </script>
@endsection