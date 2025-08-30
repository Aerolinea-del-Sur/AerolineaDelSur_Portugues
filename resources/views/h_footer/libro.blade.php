@extends('a_EncabezadoFooter.princi')
@section('content')
    <link rel="stylesheet" href="{{ asset('public/css/general.css') }}">
    <div class="reclamacion-container">
        <!-- Barra de progreso -->
        <div class="progress-bar">
            <div class="progress-step active" id="step1">I. DATOS PERSONALES</div>
            <div class="progress-step" id="step2">II. IDENTIFICACIÓN DEL ADMINISTRADO</div>
            <div class="progress-step" id="step3">III. Confirmación</div>
        </div>
        

        <form>
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
            
            <!-- Nueva sección de resumen completo -->
            <div class="summary-section" id="summary-section">
                <h3>Resumen Completo de la Reclamación</h3>
                
                <div class="summary-block">
                    <h4>I. DATOS PERSONALES DEL RECLAMANTE</h4>
                    <div id="summary-personal-complete"></div>
                </div>
                
                <div class="summary-block">
                    <h4>II. DATOS DEL ADMINISTRADO</h4>
                    <div id="summary-administrado-complete"></div>
                </div>
                
                <div class="summary-block">
                    <h4>III. DETALLE DE LA RECLAMACIÓN</h4>
                    <div id="summary-reclamo-complete"></div>
                </div>
                
                <div class="summary-block">
                    <h4>IV. DOCUMENTOS ADJUNTOS</h4>
                    <div id="summary-archivos-complete"></div>
                </div>
            </div>
            
            <div class="action-buttons">
                <button type="button" class="btn btn-print" onclick="window.print()">Imprimir Comprobante</button>
                <button type="button" class="btn btn-download" onclick="downloadPDF()">Descargar PDF</button>
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

    <!-- Agregar la librería jsPDF -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script>
        // Variables globales
        let currentSection = 1;
        const totalSections = 3;
        const maxFileSize = 5 * 1024 * 1024; // 5MB
        const maxTotalSize = 10 * 1024 * 1024; // 10MB
        
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
                'producto': 'Producto Defectuoso',
                'servicio': 'Servicio Deficiente',
                'atencion': 'Mala Atención',
                'publicidad': 'Publicidad Engañosa',
                'garantia': 'Problema con Garantía',
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
    </script>

    <style>
        /* Importar variables del tema general */
        :root {
            /* Paleta de colores de lujo */
            --primary-black: #000000;
            --primary-gold: #C9A227;
            --primary-gold-alt: #FFD700;
            --secondary-white: #FFFFFF;
            --secondary-charcoal: #1C1C1C;
            --secondary-charcoal-alt: #2B2B2B;
            --secondary-pearl: #E6E6E6;
            --secondary-burgundy: #800020;
            --secondary-bottle-green: #0B3D2E;
            
            /* Variables principales */
            --primary: var(--primary-black);
            --accent: var(--primary-gold);
            --accent-light: var(--primary-gold-alt);
            --white: var(--secondary-white);
            --charcoal: var(--secondary-charcoal);
            --charcoal-alt: var(--secondary-charcoal-alt);
            --pearl: var(--secondary-pearl);
            --burgundy: var(--secondary-burgundy);
            --bottle-green: var(--secondary-bottle-green);
            
            /* Fondos de cristal con elegancia */
            --glass-bg: rgba(28, 28, 28, 0.9);
            --glass-bg-solid: rgba(0, 0, 0, 0.95);
            --glass-bg-light: rgba(230, 230, 230, 0.9);
            
            /* Sombras elegantes */
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.3), 0 2px 4px -1px rgba(0, 0, 0, 0.2);
            --shadow-lg: 0 20px 25px -5px rgba(0, 0, 0, 0.4), 0 10px 10px -5px rgba(0, 0, 0, 0.2);
            --shadow-gold: 0 8px 25px rgba(201, 162, 39, 0.4);
            
            --transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            /* Paleta de colores de lujo */
            --primary-black: #000000;
            --primary-gold: #C9A227;
            --primary-gold-alt: #FFD700;
            --secondary-white: #FFFFFF;
            --secondary-charcoal: #1C1C1C;
            --secondary-charcoal-alt: #2B2B2B;
            --secondary-pearl: #E6E6E6;
            --secondary-burgundy: #800020;
            --secondary-bottle-green: #0B3D2E;
            
            /* Variables principales */
            --primary: var(--primary-black);
            --accent: var(--primary-gold);
            --accent-light: var(--primary-gold-alt);
            --white: var(--secondary-white);
            --charcoal: var(--secondary-charcoal);
            --charcoal-alt: var(--secondary-charcoal-alt);
            --pearl: var(--secondary-pearl);
            --burgundy: var(--secondary-burgundy);
            --bottle-green: var(--secondary-bottle-green);
            
            /* Fondos de cristal con elegancia */
            --glass-bg: rgba(28, 28, 28, 0.9);
            --glass-bg-solid: rgba(0, 0, 0, 0.95);
            --glass-bg-light: rgba(230, 230, 230, 0.9);
            
            /* Sombras elegantes */
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.3), 0 2px 4px -1px rgba(0, 0, 0, 0.2);
            --shadow-lg: 0 20px 25px -5px rgba(0, 0, 0, 0.4), 0 10px 10px -5px rgba(0, 0, 0, 0.2);
            --shadow-gold: 0 8px 25px rgba(201, 162, 39, 0.4);
            
            --transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Contenedor principal */
        .reclamacion-container {
            max-width: 900px;
            margin: 0 auto;
            padding: 40px 20px;
            background: linear-gradient(135deg, #1D1D1D, var(--charcoal) 50%, var(--charcoal-alt) 100%);
            min-height: 100vh;
            font-family: 'Space Grotesk', sans-serif;
        }
        
        /* Barra de progreso */
        .progress-bar {
            display: flex;
            justify-content: space-between;
            margin-bottom: 40px;
            background: var(--glass-bg);
            padding: 20px;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(201, 162, 39, 0.2);
        }
        
        .progress-step {
            flex: 1;
            text-align: center;
            padding: 15px 10px;
            font-weight: 600;
            font-size: 14px;
            color: var(--pearl);
            position: relative;
            transition: var(--transition);
        }
        
        .progress-step:not(:last-child):after {
            content: '';
            position: absolute;
            top: 50%;
            right: -50%;
            width: 100%;
            height: 2px;
            background: rgba(201, 162, 39, 0.3);
            transform: translateY(-50%);
        }
        
        .progress-step.active {
            color: var(--accent);
            background: rgba(201, 162, 39, 0.1);
            border-radius: 10px;
        }
        
        .progress-step.completed {
            color: var(--accent-light);
        }
        
        .progress-step.completed:after {
            background: var(--accent);
        }
        
        /* Secciones del formulario */
        .form-section {
            display: none;
            background: var(--glass-bg);
            padding: 40px;
            border-radius: 15px;
            margin-bottom: 30px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(201, 162, 39, 0.2);
            box-shadow: var(--shadow-lg);
        }
        
        .form-section.active {
            display: block;
        }
        
        .form-section h2 {
            color: var(--accent);
            margin-bottom: 30px;
            font-size: 24px;
            font-weight: 700;
            text-align: center;
        }
        
        /* Filas y columnas del formulario */
        .form-row {
            display: flex;
            gap: 20px;
            margin-bottom: 25px;
            flex-wrap: wrap;
        }
        
        .form-col {
            flex: 1;
            min-width: 250px;
        }
        
        /* Grupos de formulario */
        .form-group {
            margin-bottom: 25px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--white);
            font-size: 14px;
        }
        
        .form-group label.required:after {
            content: ' *';
            color: var(--burgundy);
        }
        
        /* Inputs y selects */
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid rgba(201, 162, 39, 0.3);
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.05);
            color: var(--white);
            font-size: 14px;
            transition: var(--transition);
            backdrop-filter: blur(5px);
        }
        
        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--accent);
            background: rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 0 3px rgba(201, 162, 39, 0.2);
        }
        
        .form-group textarea {
            min-height: 120px;
            resize: vertical;
        }
        
        .form-group input.error,
        .form-group select.error,
        .form-group textarea.error {
            border-color: var(--burgundy);
            background: rgba(128, 0, 32, 0.1);
        }
        
        /* Placeholder styling */
        .form-group input::placeholder,
        .form-group textarea::placeholder {
            color: var(--pearl);
            opacity: 0.7;
        }
        
        /* Botones */
        .btn {
            padding: 12px 30px;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            transition: var(--transition);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .btn-next, .btn-submit {
            background: linear-gradient(135deg, var(--accent), var(--accent-light));
            color: var(--primary);
            box-shadow: var(--shadow-gold);
        }
        
        .btn-next:hover, .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 30px rgba(201, 162, 39, 0.5);
        }
        
        .btn-prev {
            background: rgba(255, 255, 255, 0.1);
            color: var(--white);
            border: 2px solid rgba(201, 162, 39, 0.3);
        }
        
        .btn-prev:hover {
            background: rgba(201, 162, 39, 0.1);
            border-color: var(--accent);
        }
        
        .btn-print, .btn-download {
            background: linear-gradient(135deg, var(--accent), var(--accent-light));
            color: var(--primary);
            margin: 10px;
            box-shadow: var(--shadow-gold);
        }
        
        .btn-print:hover, .btn-download:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 30px rgba(201, 162, 39, 0.5);
        }
        
        .btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
            transform: none;
        }
        
        /* Grupo de botones */
        .btn-group {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            margin-top: 30px;
        }
        
        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 20px 0;
        }
        
        /* Confirmación */
        .confirmation {
            display: none;
            text-align: center;
            background: var(--glass-bg);
            padding: 40px;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(201, 162, 39, 0.2);
            box-shadow: var(--shadow-lg);
        }
        
        .confirmation.active {
            display: block;
        }
        
        .confirmation-icon {
            font-size: 60px;
            color: var(--accent);
            margin-bottom: 20px;
        }
        
        .confirmation h2 {
            color: var(--accent);
            margin-bottom: 20px;
        }
        
        .confirmation p {
            color: var(--pearl);
            margin-bottom: 15px;
        }
        
        .confirmation-code {
            font-size: 24px;
            font-weight: bold;
            color: var(--accent-light);
            margin: 15px 0;
        }
        
        /* Estilos para el resumen completo */
        .summary-section {
            background: rgba(201, 162, 39, 0.05);
            border: 2px solid rgba(201, 162, 39, 0.2);
            border-radius: 15px;
            padding: 30px;
            margin: 30px 0;
            text-align: left;
        }
        
        .summary-section h3 {
            color: var(--accent);
            text-align: center;
            margin-bottom: 25px;
            font-size: 20px;
        }
        
        .summary-block {
            background: rgba(0, 0, 0, 0.3);
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            border-left: 4px solid var(--accent);
        }
        
        .summary-block h4 {
            color: var(--accent-light);
            margin-bottom: 15px;
            font-size: 16px;
            border-bottom: 1px solid rgba(201, 162, 39, 0.3);
            padding-bottom: 8px;
        }
        
        .data-row {
            display: flex;
            margin-bottom: 10px;
            align-items: flex-start;
        }
        
        .data-row.full-width {
            flex-direction: column;
        }
        
        .data-row .label {
            font-weight: 600;
            color: var(--accent);
            min-width: 180px;
            margin-right: 15px;
        }
        
        .data-row .value {
            color: var(--white);
            flex: 1;
        }
        
        .data-row .value.description {
            background: rgba(255, 255, 255, 0.05);
            padding: 10px;
            border-radius: 5px;
            margin-top: 5px;
            border-left: 3px solid var(--accent);
        }
        
        /* Información de la empresa */
        .company-info {
            background: rgba(201, 162, 39, 0.1);
            padding: 20px;
            margin-top: 25px;
            border-radius: 10px;
            font-size: 14px;
            border: 1px solid rgba(201, 162, 39, 0.3);
        }
        
        .company-info h3 {
            margin-top: 0;
            color: var(--accent);
            margin-bottom: 15px;
        }
        
        .company-info p {
            margin-bottom: 8px;
            color: var(--pearl);
        }
        
        .company-info strong {
            color: var(--white);
        }
        
        /* Mejoras para móviles */
        @media (max-width: 768px) {
            .reclamacion-container {
                padding: 20px 15px;
            }
            
            .progress-bar {
                flex-direction: column;
                gap: 10px;
            }
            
            .progress-step {
                padding: 10px;
            }
            
            .progress-step:not(:last-child):after {
                display: none;
            }
            
            .form-section {
                padding: 25px 20px;
            }
            
            .form-col {
                min-width: 100%;
            }
            
            .btn-group {
                flex-direction: column;
            }
            
            .btn {
                width: 100%;
            }
            
            .action-buttons {
                flex-direction: column;
            }
            
            .confirmation-icon {
                font-size: 50px;
            }
            
            .confirmation-code {
                font-size: 18px;
            }
            
            .data-row {
                flex-direction: column;
            }
            
            .data-row .label {
                min-width: auto;
                margin-right: 0;
                margin-bottom: 5px;
            }
        }
        
        @media print {
            .btn, .progress-bar, .form-section:not(.active) {
                display: none !important;
            }
            
            .confirmation.active {
                display: block !important;
            }
            
            .reclamacion-container {
                background: white;
                color: black;
            }
            
            .summary-section, .summary-block {
                background: white !important;
                color: black !important;
            }
            
            .data-row .label, .data-row .value {
                color: black !important;
            }
        }
    </style>
@endsection