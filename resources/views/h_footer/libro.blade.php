@extends('a_EncabezadoFooter.princi')
@section('content')
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
            <p>Puede imprimir esta página como comprobante.</p>
            <button type="button" class="btn btn-print" onclick="window.print()">Imprimir Comprobante</button>
            
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
            
            // En un caso real, aquí iría el envío AJAX o el formulario se enviaría normalmente
            console.log('Formulario enviado');
        });
        
        fileInput.addEventListener('change', validateFiles);
        
        // Inicialización
        updateProgressBar();
    </script>

    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --accent-color: #e74c3c;
            --success-color: #27ae60;
            --light-gray: #ecf0f1;
            --medium-gray: #bdc3c7;
            --dark-gray: #7f8c8d;
            --black: #333333;
            --white: #ffffff;
            --error-color: #ffdddd;
        }
        
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: var(--black);
            background-color: #f5f7fa;
            padding: 10px;
        }
        
        .reclamacion-container {
            width: 100%;
            max-width: 1200px;
            margin: 10px auto;
            background: var(--white);
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        
        /* Barra de progreso */
        .progress-bar {
            display: flex;
            background-color: var(--light-gray);
            margin-bottom: 20px;
            flex-wrap: wrap;
        }
        
        .progress-step {
            flex: 1;
            min-width: 120px;
            text-align: center;
            padding: 12px 5px;
            position: relative;
            font-weight: bold;
            color: var(--dark-gray);
            font-size: 14px;
        }
        
        .progress-step.active {
            color: var(--primary-color);
            background-color: rgba(52, 152, 219, 0.1);
        }
        
        .progress-step.completed {
            color: var(--white);
            background-color: var(--secondary-color);
        }
        
        .progress-step:not(:last-child):after {
            content: '';
            position: absolute;
            right: -12px;
            top: 0;
            width: 0;
            height: 0;
            border-top: 25px solid transparent;
            border-bottom: 25px solid transparent;
            border-left: 12px solid var(--light-gray);
            z-index: 1;
        }
        
        .progress-step.completed:not(:last-child):after {
            border-left-color: var(--secondary-color);
        }
        
        /* Secciones del formulario */
        .form-section {
            padding: 0 15px 20px;
            display: none;
        }
        
        .form-section.active {
            display: block;
        }
        
        h2 {
            color: var(--primary-color);
            border-bottom: 2px solid var(--secondary-color);
            padding-bottom: 8px;
            margin-top: 0;
            margin-bottom: 15px;
            font-size: 18px;
        }
        
        h3 {
            color: var(--primary-color);
            margin: 15px 0 10px;
            font-size: 16px;
        }
        
        /* Formulario */
        .form-group {
            margin-bottom: 15px;
        }
        
        .form-row {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }
        
        .form-col {
            flex: 1;
            min-width: 200px;
        }
        
        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            color: var(--primary-color);
            font-size: 14px;
        }
        
        .required:after {
            content: " *";
            color: var(--accent-color);
        }
        
        input, select, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid var(--medium-gray);
            border-radius: 6px;
            font-size: 14px;
            transition: all 0.3s;
        }
        
        input.error, select.error, textarea.error {
            border-color: var(--accent-color);
            background-color: var(--error-color);
        }
        
        input:focus, select:focus, textarea:focus {
            border-color: var(--secondary-color);
            outline: none;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
        }
        
        textarea {
            min-height: 100px;
            resize: vertical;
        }
        
        /* Checkbox */
        .checkbox-container {
            display: flex;
            align-items: flex-start;
            margin-bottom: 10px;
        }
        
        .checkbox-container input[type="checkbox"] {
            width: auto;
            margin-right: 10px;
            margin-top: 3px;
        }
        
        .checkbox-container label {
            font-weight: normal;
            margin-bottom: 0;
        }
        
        /* Botones */
        .btn-group {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
            flex-wrap: wrap;
            gap: 10px;
        }
        
        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            flex: 1;
            min-width: 120px;
        }
        
        .btn-next {
            background-color: var(--secondary-color);
            color: var(--white);
        }
        
        .btn-prev {
            background-color: var(--dark-gray);
            color: var(--white);
        }
        
        .btn-submit {
            background-color: var(--accent-color);
            color: var(--white);
        }
        
        .btn-print {
            background-color: var(--primary-color);
            color: var(--white);
            margin-top: 15px;
        }
        
        .btn:hover {
            opacity: 0.9;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        
        .btn:disabled {
            background-color: var(--medium-gray);
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }
        
        /* Confirmación */
        .confirmation {
            text-align: center;
            padding: 30px 15px;
            display: none;
        }
        
        .confirmation.active {
            display: block;
        }
        
        .confirmation-icon {
            font-size: 60px;
            color: var(--success-color);
            margin-bottom: 15px;
        }
        
        .confirmation-code {
            font-size: 20px;
            font-weight: bold;
            color: var(--primary-color);
            margin: 10px 0;
        }
        
        /* Información de la empresa */
        .company-info {
            background-color: var(--light-gray);
            padding: 15px;
            margin-top: 20px;
            border-radius: 6px;
            font-size: 14px;
        }
        
        .company-info h3 {
            margin-top: 0;
        }
        
        /* Mejoras para móviles */
        @media (max-width: 768px) {
            .progress-step {
                flex: 1 0 100%;
                padding: 10px 5px;
            }
            
            .progress-step:not(:last-child):after {
                display: none;
            }
            
            .form-col {
                min-width: 100%;
            }
            
            .btn {
                width: 100%;
            }
            
            .confirmation-icon {
                font-size: 50px;
            }
            
            .confirmation-code {
                font-size: 18px;
            }
        }
        
        @media print {
            .btn, .progress-bar, .form-section:not(.active) {
                display: none !important;
            }
            
            .confirmation.active {
                display: block !important;
            }
        }
    </style>
@endsection