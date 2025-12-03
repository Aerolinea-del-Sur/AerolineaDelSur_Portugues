@extends('a_EncabezadoFooter.princi')
@section('content')
    <link rel="stylesheet" href="{{ asset('public/css/footer/libro.css') }}">
<!-- Agregar jsPDF desde CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<!-- Agregar html2canvas para generar PDF desde la confirmación -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <div class="libro-header">
        <div class="libro-header__title">Libro de Reclamaciones</div>
        <div class="libro-header__subtitle">Registre su queja o reclamo de forma clara y segura</div>
    </div>
    <div class="reclamacion-container">
        <!-- Barra de progreso -->
        <div class="progress-bar">
            <div class="progress-step active" id="step1"><span class="step-number">1</span> I. DATOS PERSONALES</div>
            <div class="progress-step" id="step2"><span class="step-number">2</span> II. IDENTIFICACIÓN DEL ADMINISTRADO</div>
            <div class="progress-step" id="step3"><span class="step-number">3</span> III. Confirmación</div>
        </div>
         

        <form id="reclamacion-form">
            @csrf
            <!-- Sección 1: Datos Personales -->
            <div class="form-section active" id="section1">
                <h2>I. IDENTIFICACIÓN DE LA PERSONA QUE PRESENTA LA QUEJA O SUGERENCIA</h2>
                
                <div class="form-row">
                    <div class="form-col">
                        <div class="form-group">
                            <label for="tipo-documento-reclamante" class="required">Tipo de Documento</label>
                            <select id="tipo-documento-reclamante" name="tipo_documento_reclamante" required>
                                <option value="">Seleccione...</option>
                                <option value="ruc">Registro Único del Contribuyente - RUC</option>
                                <option value="dni">Documento Nacional de Identidad - DNI</option>
                                <option value="ce">Carné de Extranjería</option>
                                <option value="pasaporte">Pasaporte</option>
                                <option value="ced">CED Diplomática de Identidad</option>
                                <option value="otro">Otro</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-col">
                        <div class="form-group">
                            <label for="numero-documento-reclamante" class="required">Número de Documento</label>
                            <input type="text" id="numero-documento-reclamante" name="numero_documento_reclamante" required
                                   pattern="[0-9]{8,11}" title="Ingrese un número de documento válido (8-11 dígitos)">
                        </div>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-col">
                        <div class="form-group">
                            <label for="nombres-reclamante" class="required">Nombres</label>
                            <input type="text" id="nombres-reclamante" name="nombres_reclamante" required
                                   pattern="[A-Za-záéíóúñÁÉÍÓÚÑ\s]+" title="Solo letras y espacios">
                        </div>
                    </div>
                    
                    <div class="form-col">
                        <div class="form-group">
                            <label for="apellido-paterno-reclamante" class="required">Apellido Paterno</label>
                            <input type="text" id="apellido-paterno-reclamante" name="apellido_paterno_reclamante" required
                                   pattern="[A-Za-záéíóúñÁÉÍÓÚÑ\s]+" title="Solo letras y espacios">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-col">
                        <div class="form-group">
                            <label for="apellido-materno-reclamante" class="required">Apellido Materno</label>
                            <input type="text" id="apellido-materno-reclamante" name="apellido_materno_reclamante" required
                                   pattern="[A-Za-záéíóúñÁÉÍÓÚÑ\s]+" title="Solo letras y espacios">
                        </div>
                    </div>
                    
                    <div class="form-col">
                        <div class="form-group">
                            <label for="fecha-nacimiento-reclamante" class="required">Fecha de Nacimiento</label>
                            <input type="date" id="fecha-nacimiento-reclamante" name="fecha_nacimiento_reclamante" required
                                   max="{{ date('Y-m-d') }}">
                        </div>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-col">
                        <div class="form-group">
                            <label for="email-reclamante" class="required">Correo Electrónico</label>
                            <input type="email" id="email-reclamante" name="email_reclamante" required>
                        </div>
                    </div>
                    
                    <div class="form-col">
                        <div class="form-group">
                            <label for="telefono-reclamante">Teléfono/Celular</label>
                            <input type="tel" id="telefono-reclamante" name="telefono_reclamante"
                                   pattern="[0-9]{7,9}" title="Ingrese un número de teléfono válido (7-9 dígitos)">
                        </div>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-col">
                        <div class="form-group">
                            <label for="domicilio-reclamante">Domicilio</label>
                            <input type="text" id="domicilio-reclamante" name="domicilio_reclamante">
                        </div>
                    </div>
                </div>
                
                <div class="btn-group">
                    <button type="button" class="btn btn-prev" disabled>Anterior</button>
                    <button type="button" class="btn btn-next" id="next1">Siguiente</button>
                </div>
            </div>
            
            <!-- Sección 2: Detalle de Reclamación -->
            <div class="form-section" id="section2">
                <h2>II. IDENTIFICACIÓN DEL ADMINISTRADO</h2>
                <div class="form-row">
                    <div class="form-col">
                        <div class="form-group">
                            <label for="tipo-documento-administrado" class="required">Tipo de Documento</label>
                            <select id="tipo-documento-administrado" name="tipo_documento_administrado" required>
                                <option value="">Seleccione...</option>
                                <option value="ruc">Registro Único del Contribuyente - RUC</option>
                                <option value="dni">Documento Nacional de Identidad - DNI</option>
                                <option value="ce">Carné de Extranjería</option>
                                <option value="pasaporte">Pasaporte</option>
                                <option value="ced">CED Diplomática de Identidad</option>
                                <option value="otro">Otro</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-col">
                        <div class="form-group">
                            <label for="numero-documento-administrado" class="required">Número de Documento</label>
                            <input type="text" id="numero-documento-administrado" name="numero_documento_administrado" required
                                   pattern="[0-9]{8,11}" title="Ingrese un número de documento válido (8-11 dígitos)">
                        </div>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-col">
                        <div class="form-group">
                            <label for="nombres-administrado" class="required">Nombres</label>
                            <input type="text" id="nombres-administrado" name="nombres_administrado" required
                                   pattern="[A-Za-záéíóúñÁÉÍÓÚÑ\s]+" title="Solo letras y espacios">
                        </div>
                    </div>
                    
                    <div class="form-col">
                        <div class="form-group">
                            <label for="apellido-paterno-administrado" class="required">Apellido Paterno</label>
                            <input type="text" id="apellido-paterno-administrado" name="apellido_paterno_administrado" required
                                   pattern="[A-Za-záéíóúñÁÉÍÓÚÑ\s]+" title="Solo letras y espacios">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-col">
                        <div class="form-group">
                            <label for="apellido-materno-administrado" class="required">Apellido Materno</label>
                            <input type="text" id="apellido-materno-administrado" name="apellido_materno_administrado" required
                                   pattern="[A-Za-záéíóúñÁÉÍÓÚÑ\s]+" title="Solo letras y espacios">
                        </div>
                    </div>
                    
                    <div class="form-col">
                        <div class="form-group">
                            <label for="fecha-nacimiento-administrado" class="required">Fecha de Nacimiento</label>
                            <input type="date" id="fecha-nacimiento-administrado" name="fecha_nacimiento_administrado" required
                                   max="{{ date('Y-m-d') }}">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-col">
                        <div class="form-group">
                            <label for="domicilio-fiscal" class="required">Domicilio Fiscal</label>
                            <input type="text" id="domicilio-fiscal" name="domicilio_fiscal" required>
                        </div>
                    </div>
                    
                    <div class="form-col">
                        <div class="form-group">
                            <label for="referencia" class="required">Referencia</label>
                            <input type="text" id="referencia" name="referencia" required>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-col">
                        <div class="form-group">
                            <label for="distrito">Distrito</label>
                            <input type="text" id="distrito" name="distrito">
                        </div>
                    </div>

                    <div class="form-col">
                        <div class="form-group">
                            <label for="provincia">Provincia</label>
                            <input type="text" id="provincia" name="provincia">
                        </div>
                    </div>

                    <div class="form-col">
                        <div class="form-group">
                            <label for="departamento">Departamento</label>
                            <input type="text" id="departamento" name="departamento">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-col">
                        <div class="form-group">
                            <label for="fecha-incidente" class="required">Fecha del Incidente</label>
                            <input type="date" id="fecha-incidente" name="fecha_incidente" required
                                   max="{{ date('Y-m-d') }}">
                        </div>
                    </div>
                    
                    <div class="form-col">
                        <div class="form-group">
                            <label for="tipo-reclamacion" class="required">Tipo de Reclamación</label>
                            <select id="tipo-reclamacion" name="tipo_reclamacion" required>
                                <option value="">Seleccione...</option>
                                <option value="vuelo-cancelado">Vuelo Cancelado</option>
                                <option value="vuelo-retrasado">Vuelo Retrasado</option>
                                <option value="equipaje">Problemas con Equipaje</option>
                                <option value="atencion-cliente">Atención al Cliente</option>
                                <option value="servicios-abordo">Servicios a Bordo</option>
                                <option value="reservas">Problemas con Reservas</option>
                                <option value="reembolso">Solicitud de Reembolso</option>
                                <option value="otro">Otro</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="detalle" class="required">Descripción detallada del problema</label>
                    <textarea id="detalle" name="detalle" required 
                              placeholder="Describa con precisión lo sucedido, incluyendo fechas, nombres de personas involucradas, productos/servicios afectados, etc."
                              minlength="20"></textarea>
                </div>
                
                <div class="form-group">
                    <label for="pedido" class="required">¿Qué solución espera obtener?</label>
                    <textarea id="pedido" name="pedido" required 
                              placeholder="Indique claramente qué espera que la empresa haga para resolver su problema (ej: reembolso, cambio de producto, disculpas, etc.)"
                              minlength="10"></textarea>
                </div>
                
                <div class="form-group">
                    <label for="archivos">Adjuntar documentos (opcional)</label>
                    <input type="file" id="archivos" name="archivos[]" multiple accept=".pdf,.jpg,.jpeg,.png,.doc,.docx">
                    <small>Puede adjuntar fotos, facturas, contratos u otros documentos relevantes (Máx. 5MB por archivo, 10MB en total)</small>
                </div>
                
                <div class="company-info">
                    <h3>Información de la Empresa</h3>
                    <p><strong>Razón Social:</strong> AEROLÍNEA DEL SUR S.A.C.</p>
                    <p><strong>RUC:</strong> 20123456789</p>
                    <p><strong>Dirección:</strong> Av. Principal 123, Lima, Perú</p>
                    <p><strong>Teléfono:</strong> +51 1 234-5678</p>
                    <p><strong>Correo:</strong> reclamos@aerolineadelsur.com</p>
                </div>
                
                <div class="btn-group">
                    <button type="button" class="btn btn-prev" id="prev2">Anterior</button>
                    <button type="button" class="btn btn-next" id="next2">Siguiente</button>
                </div>
            </div>
            
            <!-- Sección 3: Confirmación -->
            <div class="form-section" id="section3">
                <h2>Revise su Reclamación</h2>
                
                <div class="form-group">
                    <h3>Datos Personales</h3>
                    <div id="review-personal"></div>
                </div>
                
                <div class="form-group">
                    <h3>Detalle de la Reclamación</h3>
                    <div id="review-reclamo"></div>
                </div>
                
                <div class="form-group">
                    <h3>Documentos Adjuntos</h3>
                    <div id="review-archivos"></div>
                </div>
                
                <div class="form-group">
                    <div class="checkbox-container">
                        <input type="checkbox" id="acepto" name="acepto" required>
                        <label for="acepto" class="required">Acepto que los datos proporcionados serán tratados de acuerdo a la Ley de Protección de Datos Personales (Ley N° 29733) y autorizo a la empresa para que se comunique conmigo para dar seguimiento a mi reclamo.</label>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="checkbox-container">
                        <input type="checkbox" id="declaracion" name="declaracion" required>
                        <label for="declaracion" class="required">Declaro bajo juramento que la información proporcionada es veraz y exacta.</label>
                    </div>
                </div>
                
                <div class="btn-group">
                    <button type="button" class="btn btn-prev" id="prev3">Anterior</button>
                    <button type="submit" class="btn btn-submit" id="submit-btn">Enviar Reclamación</button>
                </div>
            </div>
        </form>
        
        <!-- Confirmación Final -->
        <div class="confirmation" id="confirmation">
            <div class="confirmation-icon" aria-hidden="true">✓</div>
            <h2>¡Reclamación Enviada con Éxito!</h2>
            <p>Hemos recibido su reclamación correctamente.</p>
            <p class="confirmation-code" id="codigo-reclamo"></p>
            <p>Nos pondremos en contacto con usted en un plazo máximo de 15 días hábiles.</p>
            <p>Puede imprimir esta página como comprobante o descargar el PDF.</p>
            
            <div class="btn-group" style="margin: 20px 0; display: flex; gap: 15px; justify-content: center;">
                <button type="button" class="btn btn-print" onclick="window.print()">Imprimir Comprobante</button>
                <button type="button" class="btn btn-download" onclick="downloadConfirmationPDF()">Descargar PDF</button>
            </div>
            
            <div class="company-info" style="margin-top: 20px;">
                <h3>Información de Contacto</h3>
                <p>Si necesita comunicarse con nosotros:</p>
                <p><strong>Teléfono:</strong> +51 1 234-5678</p>
                <p><strong>Correo:</strong> reclamos@aerolineadelsur.com</p>
                <p><strong>Horario de Atención:</strong> Lunes a Viernes de 8:00 am a 6:00 pm</p>
            </div>
        </div>
    </div>

    <script>
        // Variables globales
        let currentSection = 1;
        const totalSections = 3;
        const maxFileSize = 5 * 1024 * 1024; // 5MB
        const maxTotalSize = 10 * 1024 * 1024; // 10MB

        // Función para descargar PDF
        function downloadPDF() {
            const { jsPDF } = window.jspdf;
            const doc = new jsPDF();
            
            // Configuración del documento
            const pageWidth = doc.internal.pageSize.width;
            const margin = 20;
            let yPosition = 30;
            
            // Encabezado
            doc.setFontSize(20);
            doc.setTextColor(184, 134, 11); // Color dorado
            doc.text('AEROLÍNEA DEL SUR', pageWidth / 2, yPosition, { align: 'center' });
            
            yPosition += 10;
            doc.setFontSize(16);
            doc.setTextColor(0, 0, 0);
            doc.text('Comprobante de Reclamación', pageWidth / 2, yPosition, { align: 'center' });
            
            yPosition += 20;
            
            // Código de seguimiento
            const codigoElement = document.getElementById('codigo-reclamo');
            if (codigoElement && codigoElement.textContent) {
                doc.setFontSize(12);
                doc.setTextColor(184, 134, 11);
                doc.text(codigoElement.textContent, pageWidth / 2, yPosition, { align: 'center' });
                yPosition += 15;
            }
            
            // Fecha de generación
            doc.setFontSize(10);
            doc.setTextColor(100, 100, 100);
            doc.text(`Fecha de generación: ${new Date().toLocaleDateString('es-ES')}`, pageWidth / 2, yPosition, { align: 'center' });
            yPosition += 20;
            
            // Datos Personales
            doc.setFontSize(14);
            doc.setTextColor(0, 0, 0);
            doc.text('I. DATOS PERSONALES', margin, yPosition);
            yPosition += 10;
            
            doc.setFontSize(10);
            const tipoDoc = document.getElementById('tipo-documento-reclamante')?.value || '';
            const numDoc = document.getElementById('numero-documento-reclamante')?.value || '';
            const nombres = document.getElementById('nombres-reclamante')?.value || '';
            const apellidoPaterno = document.getElementById('apellido-paterno-reclamante')?.value || '';
            const apellidoMaterno = document.getElementById('apellido-materno-reclamante')?.value || '';
            const email = document.getElementById('email-reclamante')?.value || '';
            const telefono = document.getElementById('telefono-reclamante')?.value || '';
            
            doc.text(`Tipo de Documento: ${tipoDoc}`, margin, yPosition);
            yPosition += 6;
            doc.text(`Número de Documento: ${numDoc}`, margin, yPosition);
            yPosition += 6;
            doc.text(`Nombres: ${nombres}`, margin, yPosition);
            yPosition += 6;
            doc.text(`Apellidos: ${apellidoPaterno} ${apellidoMaterno}`, margin, yPosition);
            yPosition += 6;
            doc.text(`Email: ${email}`, margin, yPosition);
            yPosition += 6;
            doc.text(`Teléfono: ${telefono}`, margin, yPosition);
            yPosition += 15;
            
            // Identificación del Administrado
            doc.setFontSize(14);
            doc.text('II. IDENTIFICACIÓN DEL ADMINISTRADO', margin, yPosition);
            yPosition += 10;
            
            doc.setFontSize(10);
            const tipoDocAdmin = document.getElementById('tipo-documento-administrado')?.value || '';
            const numDocAdmin = document.getElementById('numero-documento-administrado')?.value || '';
            const nombresAdmin = document.getElementById('nombres-administrado')?.value || '';
            const apellidoPaternoAdmin = document.getElementById('apellido-paterno-administrado')?.value || '';
            const apellidoMaternoAdmin = document.getElementById('apellido-materno-administrado')?.value || '';
            
            doc.text(`Tipo de Documento: ${tipoDocAdmin}`, margin, yPosition);
            yPosition += 6;
            doc.text(`Número de Documento: ${numDocAdmin}`, margin, yPosition);
            yPosition += 6;
            doc.text(`Nombres: ${nombresAdmin}`, margin, yPosition);
            yPosition += 6;
            doc.text(`Apellidos: ${apellidoPaternoAdmin} ${apellidoMaternoAdmin}`, margin, yPosition);
            yPosition += 15;
            
            // Detalles de la Reclamación
            doc.setFontSize(14);
            doc.text('III. DETALLES DE LA RECLAMACIÓN', margin, yPosition);
            yPosition += 10;
            
            doc.setFontSize(10);
            const fechaIncidente = document.getElementById('fecha-incidente')?.value || '';
            const tipoReclamo = document.getElementById('tipo-reclamacion')?.value || '';
            const descripcion = document.getElementById('detalle')?.value || '';
            const solucion = document.getElementById('pedido')?.value || '';
            
            doc.text(`Fecha del Incidente: ${fechaIncidente}`, margin, yPosition);
            yPosition += 6;
            doc.text(`Tipo de Reclamo: ${tipoReclamo}`, margin, yPosition);
            yPosition += 10;
            
            // Descripción del problema (con salto de línea si es muy largo)
            doc.text('Descripción del Problema:', margin, yPosition);
            yPosition += 6;
            const descripcionLines = doc.splitTextToSize(descripcion, pageWidth - 2 * margin);
            doc.text(descripcionLines, margin, yPosition);
            yPosition += descripcionLines.length * 5 + 5;
            
            // Solución solicitada
            doc.text('Solución Solicitada:', margin, yPosition);
            yPosition += 6;
            const solucionLines = doc.splitTextToSize(solucion, pageWidth - 2 * margin);
            doc.text(solucionLines, margin, yPosition);
            yPosition += solucionLines.length * 5 + 15;
            
            // Información de contacto
            if (yPosition > 250) {
                doc.addPage();
                yPosition = 30;
            }
            
            doc.setFontSize(12);
            doc.setTextColor(184, 134, 11);
            doc.text('INFORMACIÓN DE CONTACTO', margin, yPosition);
            yPosition += 10;
            
            doc.setFontSize(10);
            doc.setTextColor(0, 0, 0);
            doc.text('Teléfono: +51 1 234-5678', margin, yPosition);
            yPosition += 6;
            doc.text('Correo: reclamos@aerolineadelsur.com', margin, yPosition);
            yPosition += 6;
            doc.text('Horario de Atención: Lunes a Viernes de 8:00 am a 6:00 pm', margin, yPosition);
            
            // Generar nombre del archivo
            const fecha = new Date().toISOString().split('T')[0];
            const codigo = codigoElement?.textContent.replace('Código de Seguimiento: ', '') || 'RECLAMO';
            const filename = `Reclamo_${codigo}_${fecha}.pdf`;
            
            // Descargar el PDF
            doc.save(filename);
        }
        
        // Elementos del DOM
        const form = document.getElementById('reclamacion-form');
        const progressSteps = document.querySelectorAll('.progress-step');
        const formSections = document.querySelectorAll('.form-section');
        const nextButtons = document.querySelectorAll('.btn-next');
        const prevButtons = document.querySelectorAll('.btn-prev');
        const submitButton = document.getElementById('submit-btn');
        const confirmationSection = document.getElementById('confirmation');
        const fileInput = document.getElementById('archivos');
        
        // Funciones
        function updateProgressBar() {
            progressSteps.forEach((step, index) => {
                step.classList.remove('active', 'completed');
                if (index + 1 < currentSection) {
                    step.classList.add('completed');
                } else if (index + 1 === currentSection) {
                    step.classList.add('active');
                }
            });
        }
        
        function showSection(sectionNumber) {
            formSections.forEach(section => {
                section.classList.remove('active');
            });
            document.getElementById(`section${sectionNumber}`).classList.add('active');
            updateProgressBar();
        }
        
        function validateSection(sectionNumber) {
            let isValid = true;
            const currentSection = document.getElementById(`section${sectionNumber}`);
            const requiredFields = currentSection.querySelectorAll('[required]');
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.classList.add('error');
                } else {
                    field.classList.remove('error');
                }
                
                // Validación especial para email
                if (field.type === 'email' && field.value.trim() && !/^\S+@\S+\.\S+$/.test(field.value)) {
                    isValid = false;
                    field.classList.add('error');
                    showError('Por favor ingrese un correo electrónico válido.');
                }
                
                // Validación para fechas (no pueden ser futuras)
                if (field.type === 'date' && field.value) {
                    const fecha = new Date(field.value);
                    const hoy = new Date();
                    if (fecha > hoy) {
                        isValid = false;
                        field.classList.add('error');
                        showError('La fecha no puede ser futura.');
                    }
                }
                
                // Validación para patrones
                if (field.pattern && !new RegExp(field.pattern).test(field.value)) {
                    isValid = false;
                    field.classList.add('error');
                    showError(field.title || 'El formato no es válido');
                }
            });
            
            return isValid;
        }
        
        function showError(message) {
            // Implementar un sistema de notificación más elegante
            alert(message);
        }
        
        function updateReview() {
            // Mapeos para mostrar texto en lugar de valores
            const tipoDocMap = {
                'ruc': 'RUC',
                'dni': 'DNI',
                'ce': 'Carné de Extranjería',
                'pasaporte': 'Pasaporte',
                'ced': 'CED Diplomática',
                'otro': 'Otro'
            };
            
            const tipoReclamoMap = {
                'vuelo-cancelado': 'Vuelo Cancelado',
                'vuelo-retrasado': 'Vuelo Retrasado',
                'equipaje': 'Problemas con Equipaje',
                'atencion-cliente': 'Atención al Cliente',
                'servicios-abordo': 'Servicios a Bordo',
                'reservas': 'Problemas con Reservas',
                'reembolso': 'Solicitud de Reembolso',
                'otro': 'Otro'
            };
            
            // Función para formatear fechas
            const formatDate = (dateString) => {
                if (!dateString) return 'No especificada';
                const options = { year: 'numeric', month: 'long', day: 'numeric' };
                return new Date(dateString).toLocaleDateString('es-PE', options);
            };
            
            // Datos personales
            const personalData = `
                <p><strong>Tipo de Documento:</strong> ${tipoDocMap[document.getElementById('tipo-documento-reclamante').value] || 'No especificado'}</p>
                <p><strong>Número de Documento:</strong> ${document.getElementById('numero-documento-reclamante').value}</p>
                <p><strong>Nombres:</strong> ${document.getElementById('nombres-reclamante').value}</p>
                <p><strong>Apellido Paterno:</strong> ${document.getElementById('apellido-paterno-reclamante').value}</p>
                <p><strong>Apellido Materno:</strong> ${document.getElementById('apellido-materno-reclamante').value}</p>
                <p><strong>Fecha de Nacimiento:</strong> ${formatDate(document.getElementById('fecha-nacimiento-reclamante').value)}</p>
                <p><strong>Correo Electrónico:</strong> ${document.getElementById('email-reclamante').value}</p>
                <p><strong>Teléfono:</strong> ${document.getElementById('telefono-reclamante').value || 'No proporcionado'}</p>
                <p><strong>Domicilio:</strong> ${document.getElementById('domicilio-reclamante').value || 'No proporcionado'}</p>
            `;
            document.getElementById('review-personal').innerHTML = personalData;
            
            // Datos del administrado
            const adminData = `
                <p><strong>Tipo de Documento:</strong> ${tipoDocMap[document.getElementById('tipo-documento-administrado').value] || 'No especificado'}</p>
                <p><strong>Número de Documento:</strong> ${document.getElementById('numero-documento-administrado').value}</p>
                <p><strong>Nombres:</strong> ${document.getElementById('nombres-administrado').value}</p>
                <p><strong>Apellido Paterno:</strong> ${document.getElementById('apellido-paterno-administrado').value}</p>
                <p><strong>Apellido Materno:</strong> ${document.getElementById('apellido-materno-administrado').value}</p>
                <p><strong>Fecha de Nacimiento:</strong> ${formatDate(document.getElementById('fecha-nacimiento-administrado').value)}</p>
                <p><strong>Domicilio Fiscal:</strong> ${document.getElementById('domicilio-fiscal').value || 'No proporcionado'}</p>
                <p><strong>Referencia:</strong> ${document.getElementById('referencia').value || 'No proporcionado'}</p>
                <p><strong>Distrito:</strong> ${document.getElementById('distrito').value || 'No proporcionado'}</p>
                <p><strong>Provincia:</strong> ${document.getElementById('provincia').value || 'No proporcionado'}</p>
                <p><strong>Departamento:</strong> ${document.getElementById('departamento').value || 'No proporcionado'}</p>
            `;
            
            // Detalle de reclamación
            const reclamoData = `
                ${adminData}
                <p><strong>Fecha del Incidente:</strong> ${formatDate(document.getElementById('fecha-incidente').value)}</p>
                <p><strong>Tipo de Reclamación:</strong> ${tipoReclamoMap[document.getElementById('tipo-reclamacion').value] || 'No especificado'}</p>
                <p><strong>Descripción:</strong><br>${document.getElementById('detalle').value}</p>
                <p><strong>Solución Esperada:</strong><br>${document.getElementById('pedido').value}</p>
            `;
            document.getElementById('review-reclamo').innerHTML = reclamoData;
            
            // Archivos adjuntos
            const files = fileInput.files;
            let filesHtml = '<p>No se adjuntaron documentos</p>';
            
            if (files.length > 0) {
                filesHtml = '<ul>';
                for (let i = 0; i < files.length; i++) {
                    filesHtml += `<li>${files[i].name} (${formatFileSize(files[i].size)})</li>`;
                }
                filesHtml += '</ul>';
            }
            
            document.getElementById('review-archivos').innerHTML = filesHtml;
        }
        
        function updateCompleteSummary() {
            const tipoDocMap = {
                'ruc': 'RUC',
                'dni': 'DNI',
                'ce': 'Carné de Extranjería',
                'pasaporte': 'Pasaporte',
                'ced': 'CED Diplomática',
                'otro': 'Otro'
            };

            const formatDate = (dateString) => {
                if (!dateString) return 'No especificada';
                const options = { year: 'numeric', month: 'long', day: 'numeric' };
                return new Date(dateString).toLocaleDateString('es-PE', options);
            };

            const personalHtml = `
                <div class="summary-block">
                    <h4>Datos Personales</h4>
                    <div class="data-row"><div class="label">Tipo de Documento</div><div class="value">${tipoDocMap[document.getElementById('tipo-documento-reclamante').value] || 'No especificado'}</div></div>
                    <div class="data-row"><div class="label">Número de Documento</div><div class="value">${document.getElementById('numero-documento-reclamante').value}</div></div>
                    <div class="data-row"><div class="label">Nombres</div><div class="value">${document.getElementById('nombres-reclamante').value}</div></div>
                    <div class="data-row"><div class="label">Apellidos</div><div class="value">${document.getElementById('apellido-paterno-reclamante').value} ${document.getElementById('apellido-materno-reclamante').value}</div></div>
                    <div class="data-row"><div class="label">Fecha de Nacimiento</div><div class="value">${formatDate(document.getElementById('fecha-nacimiento-reclamante').value)}</div></div>
                    <div class="data-row"><div class="label">Correo Electrónico</div><div class="value">${document.getElementById('email-reclamante').value}</div></div>
                    <div class="data-row"><div class="label">Teléfono</div><div class="value">${document.getElementById('telefono-reclamante').value || 'No proporcionado'}</div></div>
                    <div class="data-row"><div class="label">Domicilio</div><div class="value">${document.getElementById('domicilio-reclamante').value || 'No proporcionado'}</div></div>
                </div>`;

            const adminHtml = `
                <div class="summary-block">
                    <h4>Identificación del Administrado</h4>
                    <div class="data-row"><div class="label">Tipo de Documento</div><div class="value">${tipoDocMap[document.getElementById('tipo-documento-administrado').value] || 'No especificado'}</div></div>
                    <div class="data-row"><div class="label">Número de Documento</div><div class="value">${document.getElementById('numero-documento-administrado').value}</div></div>
                    <div class="data-row"><div class="label">Nombres</div><div class="value">${document.getElementById('nombres-administrado').value}</div></div>
                    <div class="data-row"><div class="label">Apellidos</div><div class="value">${document.getElementById('apellido-paterno-administrado').value} ${document.getElementById('apellido-materno-administrado').value}</div></div>
                    <div class="data-row"><div class="label">Fecha de Nacimiento</div><div class="value">${formatDate(document.getElementById('fecha-nacimiento-administrado').value)}</div></div>
                    <div class="data-row"><div class="label">Domicilio Fiscal</div><div class="value">${document.getElementById('domicilio-fiscal').value || 'No proporcionado'}</div></div>
                    <div class="data-row"><div class="label">Referencia</div><div class="value">${document.getElementById('referencia').value || 'No proporcionado'}</div></div>
                    <div class="data-row"><div class="label">Distrito</div><div class="value">${document.getElementById('distrito').value || 'No proporcionado'}</div></div>
                    <div class="data-row"><div class="label">Provincia</div><div class="value">${document.getElementById('provincia').value || 'No proporcionado'}</div></div>
                    <div class="data-row"><div class="label">Departamento</div><div class="value">${document.getElementById('departamento').value || 'No proporcionado'}</div></div>
                </div>`;

            const reclamoHtml = `
                <div class="summary-block">
                    <h4>Detalle de la Reclamación</h4>
                    <div class="data-row"><div class="label">Fecha del Incidente</div><div class="value">${formatDate(document.getElementById('fecha-incidente').value)}</div></div>
                    <div class="data-row"><div class="label">Tipo de Reclamación</div><div class="value">${tipoReclamoMap[document.getElementById('tipo-reclamacion').value] || 'No especificado'}</div></div>
                    <div class="data-row full-width"><div class="label">Descripción</div><div class="value description">${document.getElementById('detalle').value}</div></div>
                    <div class="data-row full-width"><div class="label">Solución Esperada</div><div class="value description">${document.getElementById('pedido').value}</div></div>
                </div>`;

            const files = document.getElementById('archivos').files;
            let filesHtml = '<p>No se adjuntaron documentos</p>';
            if (files.length > 0) {
                filesHtml = '<ul>';
                for (let i = 0; i < files.length; i++) {
                    filesHtml += `<li>${files[i].name}</li>`;
                }
                filesHtml += '</ul>';
            }

            const resumenHtml = `
                <div class="summary-section">
                    <h3>Resumen de su Reclamación</h3>
                    ${personalHtml}
                    ${adminHtml}
                    ${reclamoHtml}
                    <div class="summary-block">
                        <h4>Documentos Adjuntos</h4>
                        ${filesHtml}
                    </div>
                </div>`;

            const confirmation = document.getElementById('confirmation');
            const existingSummary = confirmation.querySelector('.summary-section');
            if (existingSummary) {
                existingSummary.remove();
            }
            confirmation.insertAdjacentHTML('beforeend', resumenHtml);
        }
        
        function formatFileSize(bytes) {
            if (bytes === 0) return '0 Bytes';
            const k = 1024;
            const sizes = ['Bytes', 'KB', 'MB', 'GB'];
            const i = Math.floor(Math.log(bytes) / Math.log(k));
            return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
        }
        
        function generateTrackingNumber() {
            const letters = 'ABCDEFGHJKLMNPQRSTUVWXYZ';
            const numbers = '0123456789';
            let result = 'REC-';
            
            for (let i = 0; i < 3; i++) {
                result += letters.charAt(Math.floor(Math.random() * letters.length));
            }
            
            result += '-';
            
            for (let i = 0; i < 4; i++) {
                result += numbers.charAt(Math.floor(Math.random() * numbers.length));
            }
            
            return result;
        }
        
        function validateFiles() {
            const files = fileInput.files;
            let totalSize = 0;
            
            for (let i = 0; i < files.length; i++) {
                totalSize += files[i].size;
                
                if (files[i].size > maxFileSize) {
                    showError(`El archivo ${files[i].name} supera el tamaño máximo permitido de 5MB.`);
                    fileInput.value = '';
                    return false;
                }
            }
            
            if (totalSize > maxTotalSize) {
                showError('El tamaño total de los archivos supera el límite de 10MB.');
                fileInput.value = '';
                return false;
            }
            
            return true;
        }
        
        // Event Listeners
        nextButtons.forEach(button => {
            button.addEventListener('click', function() {
                const sectionNumber = parseInt(this.id.replace('next', ''));
                
                if (validateSection(sectionNumber)) {
                    currentSection = sectionNumber + 1;
                    
                    if (currentSection === totalSections + 1) {
                        // Mostrar confirmación final
                        confirmationSection.classList.add('active');
                        document.getElementById('codigo-reclamo').textContent = generateTrackingNumber();
                        
                        // Actualizar resumen completo
                        updateCompleteSummary();
                        
                        // Aquí se enviaría el formulario realmente
                        // form.submit();
                    } else {
                        if (currentSection === totalSections) {
                            updateReview();
                        }
                        showSection(currentSection);
                    }
                }
            });
        });
        
        prevButtons.forEach(button => {
            button.addEventListener('click', function() {
                const sectionNumber = parseInt(this.id.replace('prev', ''));
                currentSection = sectionNumber - 1;
                showSection(currentSection);
            });
        });
        
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            if (!document.getElementById('acepto').checked || !document.getElementById('declaracion').checked) {
                showError('Debe aceptar ambas declaraciones para enviar la reclamación.');
                return;
            }
            
            if (fileInput.files.length > 0 && !validateFiles()) {
                return;
            }
            
            // Simular envío exitoso
            currentSection = totalSections + 1;
            confirmationSection.classList.add('active');
            document.getElementById('codigo-reclamo').textContent = generateTrackingNumber();
            
            // Actualizar resumen completo
            updateCompleteSummary();
            
            // En un caso real, aquí iría el envío AJAX o el formulario se enviaría normalmente
            console.log('Formulario enviado');
        });
        
        fileInput.addEventListener('change', validateFiles);
        
        // Inicialización
        updateProgressBar();
        
        // Regenerar resumen justo antes de imprimir en papel
        let _printPrevActive = false;
        window.addEventListener('beforeprint', () => {
            try { updateCompleteSummary(); } catch (e) { console.warn('No se pudo actualizar el resumen antes de imprimir', e); }
            const confirmation = document.getElementById('confirmation');
            if (confirmation && !confirmation.classList.contains('active')) {
                _printPrevActive = true;
                confirmation.classList.add('active');
            }
        });
        window.addEventListener('afterprint', () => {
            const confirmation = document.getElementById('confirmation');
            if (confirmation && _printPrevActive) {
                confirmation.classList.remove('active');
                _printPrevActive = false;
            }
        });

        // Generar PDF a partir de la sección de confirmación (todo el contenido)
        async function downloadConfirmationPDF() {
            const confirmation = document.getElementById('confirmation');
            if (!confirmation || !confirmation.classList.contains('active')) {
                showError('Primero genere la confirmación para descargar el PDF.');
                return;
            }

            const { jsPDF } = window.jspdf;
            const pdf = new jsPDF('p', 'pt', 'a4');
            const pdfWidth = pdf.internal.pageSize.getWidth();
            const pdfHeight = pdf.internal.pageSize.getHeight();

            // Asegurar fondo claro y alto contraste para render
            const originalBg = confirmation.style.backgroundColor;
            document.body.classList.add('pdf-export-mode');
            try { updateCompleteSummary(); } catch (e) {}
            confirmation.style.backgroundColor = '#ffffff';

            try {
                const canvas = await html2canvas(confirmation, {
                    scale: 2,
                    useCORS: true,
                    backgroundColor: '#ffffff',
                    windowWidth: confirmation.scrollWidth,
                    windowHeight: confirmation.scrollHeight
                });

                const imgData = canvas.toDataURL('image/png');
                const imgWidth = pdfWidth;
                const imgHeight = canvas.height * imgWidth / canvas.width;
                let heightLeft = imgHeight;
                let position = 0;

                pdf.addImage(imgData, 'PNG', 0, position, imgWidth, imgHeight);
                heightLeft -= pdfHeight;

                while (heightLeft > 0) {
                    position = heightLeft - imgHeight; // negativo para mostrar parte restante
                    pdf.addPage();
                    pdf.addImage(imgData, 'PNG', 0, position, imgWidth, imgHeight);
                    heightLeft -= pdfHeight;
                }

                const fecha = new Date().toISOString().split('T')[0];
                const codigo = document.getElementById('codigo-reclamo')?.textContent?.replace('Código de Seguimiento: ', '') || 'RECLAMO';
                const filename = `Reclamo_Confirmacion_${codigo}_${fecha}.pdf`;
                pdf.save(filename);
            } catch (e) {
                console.error(e);
                showError('No se pudo generar el PDF de la confirmación.');
            } finally {
                confirmation.style.backgroundColor = originalBg || '';
                document.body.classList.remove('pdf-export-mode');
            }
        }
    </script>
@endsection
