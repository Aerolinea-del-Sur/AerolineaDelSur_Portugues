@extends('a_EncabezadoFooter.princi')
@section('content')
<!-- Header -->
<header class="header">
    <div class="header-content">
        <h1>MÉTODOS DE PAGO</h1>
        <p class="header-subtitle">Opciones seguras y accesibles para tu comodidad</p>
    </div>
</header>

<!-- Main Content -->
<main class="main-content">
    <div class="content-card">
        <!-- Introduction -->
        <div class="intro-text fade-in">
            En Aerolínea del Sur, agencia de viajes y operador turístico, ofrecemos nuestros servicios tanto a clientes finales como a agencias de viajes mayoristas nacionales e internacionales. Conscientes de la diversidad de necesidades de nuestros clientes, ponemos a su disposición diferentes métodos de pago seguros y accesibles.
        </div>

        <!-- Payment Methods -->
        <div class="payment-methods">
            <!-- Cash Payment -->
            <article class="payment-method fade-in">
                <div class="method-header">
                    <div class="method-icon">
                        <i class="fas fa-money-bill-wave"></i>
                    </div>
                    <h2 class="method-title">1. Pago en efectivo</h2>
                </div>
                <div class="method-content">
                    <p>Los pagos en efectivo pueden realizarse de manera presencial en nuestra oficina comercial, en moneda nacional (soles – S/) o en dólares estadounidenses (US$), de acuerdo con la tarifa establecida del servicio contratado.</p>
                    <p><strong>Importante:</strong> No se aceptan billetes o monedas falsificadas. En caso de detectarse alguno, se procederá conforme a lo establecido por la ley.</p>
                </div>
            </article>

            <!-- Bank Transfers -->
            <article class="payment-method fade-in">
                <div class="method-header">
                    <div class="method-icon">
                        <i class="fas fa-university"></i>
                    </div>
                    <h2 class="method-title">2. Transferencias y depósitos bancarios</h2>
                </div>
                <div class="method-content">
                    <p>Los pagos realizados mediante transferencia bancaria o depósito serán válidos únicamente una vez que el cliente envíe el comprobante de la operación a las cuentas bancarias designadas por Aerolínea del Sur.</p>
                </div>
            </article>

            <!-- Online Payment Links -->
            <article class="payment-method fade-in">
                <div class="method-header">
                    <div class="method-icon">
                        <i class="fas fa-link"></i>
                    </div>
                    <h2 class="method-title">3. Pago mediante enlace de pago (Niubiz e Izipay)</h2>
                </div>
                <div class="method-content">
                    <p>El cliente deberá solicitar a su asesor de ventas la tarifa correspondiente para pagos con tarjeta y el enlace de pago.</p>
                    <p>Posteriormente, deberá completar sus datos personales, ingresar la información de su tarjeta y proceder con el pago.</p>
                    <p>Una vez finalizado el proceso, la confirmación del pago será enviada al correo electrónico registrado por Aerolínea del Sur.</p>
                    <div class="cards-accepted">
                        <strong>Tarjetas aceptadas:</strong>
                        VISA, MASTERCARD, AMERICAN EXPRESS, DINERS CLUB.
                    </div>
                </div>
            </article>

            <!-- POS Payment -->
            <article class="payment-method fade-in">
                <div class="method-header">
                    <div class="method-icon">
                        <i class="fas fa-credit-card"></i>
                    </div>
                    <h2 class="method-title">4. Pago con tarjeta en oficina (POS – Izipay)</h2>
                </div>
                <div class="method-content">
                    <p>El cliente debe solicitar el servicio de pago con tarjeta y presentar su tarjeta en el terminal POS en nuestra oficina. Se procederá con el ingreso del PIN y/o firma, según el tipo de tarjeta.</p>
                    <p>El comprobante será enviado por mensaje de texto al número de teléfono móvil del cliente.</p>
                    <div class="cards-accepted">
                        <strong>Tarjetas aceptadas:</strong>
                        VISA, MASTERCARD, AMERICAN EXPRESS, DINERS CLUB.
                    </div>
                </div>
            </article>
        </div>

        <!-- Validation Section -->
        <section class="validation-section fade-in">
            <div class="validation-content">
                <div class="validation-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h2 class="validation-title">Validación de pagos</h2>
                <p class="validation-text">
                    Todos los pagos realizados por cualquiera de los medios mencionados deberán ser validados por Aerolínea del Sur para garantizar la correcta ejecución de la transacción y la entrega de los servicios contratados.
                </p>
            </div>
        </section>
    </div>
</main>

<!-- Scroll to Top Button -->
<button class="scroll-top" id="scrollTop" aria-label="Volver arriba">
    <i class="fas fa-chevron-up"></i>
</button>

<script>
    // Scroll to Top Functionality
    const scrollTopBtn = document.getElementById('scrollTop');
    
    window.addEventListener('scroll', () => {
        if (window.pageYOffset > 300) {
            scrollTopBtn.classList.add('show');
        } else {
            scrollTopBtn.classList.remove('show');
        }
    });
    
    scrollTopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // Smooth Scrolling for Internal Links
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

    // Loading Animation
    window.addEventListener('load', () => {
        const elements = document.querySelectorAll('.fade-in');
        elements.forEach((element, index) => {
            setTimeout(() => {
                element.style.animationDelay = `${index * 0.1}s`;
            }, index * 100);
        });
    });

    // Accessibility: Keyboard Navigation
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && scrollTopBtn.classList.contains('show')) {
            scrollTopBtn.focus();
        }
    });

    // Enhanced Hover Effects
    const paymentMethods = document.querySelectorAll('.payment-method');
    paymentMethods.forEach(method => {
        method.addEventListener('mouseenter', () => {
            method.style.transform = 'translateY(-5px) scale(1.02)';
        });
        
        method.addEventListener('mouseleave', () => {
            method.style.transform = 'translateY(0) scale(1)';
        });
    });

    // Print Functionality
    function printPage() {
        window.print();
    }

    // Add print button if needed
    document.addEventListener('keydown', (e) => {
        if (e.ctrlKey && e.key === 'p') {
            e.preventDefault();
            printPage();
        }
    });
</script>
@endsection