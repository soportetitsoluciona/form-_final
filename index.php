<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="stylesheet" href="estilos.css">
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
    <title>Slider Nav</title>
</head>

<body>
    <div class="geneal">
        <div class="hero" id="hero">
            <h1>Ingrese su DNI: </h1>
            <div class="btn-group">
                <input type="text" id="documento" class="form-control">
                <a type="button" class="btn btn-primary" id="buscar" href="#1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>
                </a>
            </div>
        </div>

        <nav id="menu">
            <a href="#1">Sección 1</a>
            <a href="#2">Sección 2</a>
            <a href="#3">Sección 3</a>
            <a href="#4">Sección 4</a>
            <span class="indicador" id="indicador"></span>
        </nav>
        
        <form action="" class="formulario" id="formulario">
            <div class="secciones">


                <div class="seccion" id="1">
                
                    <div class="card">
                        <center>
                            <h1>Bienvenido + Nombre. + Apellido.</h1>
                        </center>
                        
                        <h1>Ficha de datos</h1>
                        <p class="parrafo">El presente formulario tiene como finalidad tener registrado la información del candidato así como la del puesto y jornada laboral a la que está postulando. Todos los datos expresados en esta ficha constituyen una declaración jurada
                            para poder considerarlo en el proceso de selección. </p>

                        <div class="group-itens">
                            <!-- Grupo: Correo Electronico -->
                            <div class="formulario__grupo" id="grupo__correo">
                                <label for="correo" class="formulario__label">Correo Electrónico</label>
                                <div class="formulario__grupo-input">
                                    <input type="email" class="formulario__input" name="correo" id="correo" placeholder="ejemplo@gmail.com">
                                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                </div>
                                <p class="formulario__input-error">Ingrese un correo valido.</p>
                            </div>
                            <!-- Grupo: Teléfono -->
                            <div class="formulario__grupo" id="grupo__telefono">
                                <label for="telefono" class="formulario__label">Teléfono</label>
                                <div class="formulario__grupo-input">
                                    <input type="text" class="formulario__input" name="telefono" id="telefono" placeholder="000 000 000">
                                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                </div>
                                <p class="formulario__input-error">Ingrese un Teléfono valido.</p>
                            </div>

                            <!-- Grupo: Nacionalidad -->
                            <div class="formulario__grupo" id="grupo__nacionalidad">
                                <label for="nacionalidad" class="formulario__label">Nacionalidad</label>
                                <div class="formulario__grupo-input">
                                    <input type="text" class="formulario__input" name="nacionalidad" id="nacionalidad" placeholder="Peruano">
                                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                </div>
                                <p class="formulario__input-error">Ingrese una Nacionalidad valida.</p>
                            </div>

                            <!-- Grupo: Departamento -->
                            <div class="formulario__grupo" id="grupo__departamento">
                                <label for="departamento" class="formulario__label">Departamento</label>
                                <div class="formulario__grupo-input">
                                    <input type="text" class="formulario__input" name="departamento" id="departamento" placeholder="Peruano">
                                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                </div>
                                <p class="formulario__input-error">Ingrese una Departamento valida.</p>
                            </div>
                            

                            <!-- Grupo: Distrito -->
                            <div class="formulario__grupo" id="grupo__distrito">
                                <label for="distrito" class="formulario__label">Distrito</label>
                                <div class="formulario__grupo-input">
                                    <input type="text" class="formulario__input" name="distrito" id="distrito" placeholder="">
                                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                </div>
                                <p class="formulario__input-error">Ingrese un Distrito valido.</p>
                            </div>
                            
                            <!-- Grupo: Provincia -->
                            <div class="formulario__grupo" id="grupo__provincia">
                                <label for="provincia" class="formulario__label">Provincia</label>
                                <div class="formulario__grupo-input">
                                    <input type="text" class="formulario__input" name="provincia" id="provincia" placeholder="">
                                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                </div>
                                <p class="formulario__input-error">Ingrese una Provincia valida.</p>
                            </div>
                         
                        </div>
                    </div>
                </div>



                <div class="seccion" id="2">
                    
                    <div class="card">
                        
                        <h1>Ficha de Salud</h1>
                        <p class="parrafo">Declaro bajo juramento que la información aquí consignada es veraz y, por tanto, exonero a T-SOLUCIONA S.A.C. de cualquier responsabilidad que se derive de cualquier antecedente médico omitido y/o consignado errónea y/o parcialmente.
                        </p>
                        <div class="group-itens">
                            <!-- Pregunta N° 01 -->
                            <div class="formulario__grupo" id="grupo__pre01">
                                <label for="pre01" class="formulario__label">¿Toma alguna medicina diariamente o periódicamente?</label>
                                <div class="formulario__grupo-input" >
                                    <select class="formulario__input"name="pre01" id="pre01" >
									<option disabled selected>Seleccionar</option>
									<option>Si</option>
									<option>No</option>
								</select>
                                </div>
                                <p class="formulario__input-error">Seleccionar una respuesta.</p>
                            </div>

                            <!-- Pregunta N° 02 -->
                            <div class="formulario__grupo" id="grupo__pre02">
                                <label for="pre02" class="formulario__label">¿Padece de problemas respiratorios? (Asma, bronquitis, alergias, etc.)</label>
                                <div class="formulario__grupo-input">
                                <select class="formulario__input"name="pre02" id="pre02" >
									<option disabled selected>Seleccionar</option>
									<option>Si</option>
									<option>No</option>
								</select>
                                </div>
                                <p class="formulario__input-error">Seleccionar una respuesta.</p>
                            </div>

                            <!-- Pregunta N° 03 -->
                            <div class="formulario__grupo" id="grupo__pre03">
                                <label for="pre03" class="formulario__label">¿Presenta problemas en la piel?</label>
                                <div class="formulario__grupo-input">
                                <select class="formulario__input"name="pre03" id="pre03" >
									<option disabled selected>Seleccionar</option>
									<option>Si</option>
									<option>No</option>
								</select>
                                </div>
                                <p class="formulario__input-error">Seleccionar una respuesta.</p>
                            </div>

                            <!-- Pregunta N° 04 -->
                            <div class="formulario__grupo" id="grupo__pre04">
                                <label for="pre04" class="formulario__label">¿Ud. ha sido operado recientemente?</label>
                                <div class="formulario__grupo-input">
                                <select class="formulario__input"name="pre04" id="pre04" >
									<option disabled selected>Seleccionar</option>
									<option>Si</option>
									<option>No</option>
								</select>
                                </div>
                                <p class="formulario__input-error">Seleccionar una respuesta.</p>
                            </div>

                            <!-- Pregunta N° 05 -->

                            <div class="formulario__grupo" id="grupo__pre05">
                                <label for="pre05" class="formulario__label">Padece o ha padecido alguna enfermedad, dolencia o problema de salud.</label>
                                <div class="formulario__grupo-input">
                                <select class="formulario__input"name="pre05" id="pre05" >
									<option disabled selected>Seleccionar</option>
									<option>Si</option>
									<option>No</option>
								</select>
                                </div>
                                <p class="formulario__input-error">Seleccionar una respuesta.</p>
                            </div>
                            
                            <!-- Pregunta N° 06 -->
                            <div class="formulario__grupo" id="grupo__pre06">
                                <label for="pre06" class="formulario__label">¿Tiene alguna enfermedad crónica? (Diabetes, Hipertensión Arterial, Insuficiencia Renal)</label>
                                    <div class="formulario__grupo-input">
                                    <select class="formulario__input"name="pre01" id="pre06" >
                                        <option disabled selected>Seleccionar</option>
                                        <option>Si</option>
                                        <option>No</option>
                                        </select>
                                    </div>
                                    <p class="formulario__input-error">Seleccionar una respuesta.</p>
                            </div>
                            <!-- Pregunta N° 07 -->
                            <div class="formulario__grupo" id="grupo__pre07">
                                <label for="pre07" class="formulario__label">¿Tiene o ha tenido alguna enfermedad del corazón? Infarto, arritmia, insuficiencia cardiaca, uso de marcapaso, etc./label>
                                <div class="formulario__grupo-input">
                                <select class="formulario__input"name="pre07" id="pre07" >
                                        <option disabled selected>Seleccionar</option>
                                        <option>Si</option>
                                        <option>No</option>
                                    </select>														
							    </div>
							    <p class="formulario__input-error">Seleccionar una respuesta.</p>
						    </div>
                            <!-- Pregunta N° 08 -->
                            <div class="formulario__grupo" id="grupo__pre08">
                                <label for="pre08" class="formulario__label">¿Tiene alguna enfermedad neurológica o psiquiátrica? (Convulsiones, Epilepsia, Desmayos, Ansiedad, Depresión, Esquizofrenia, etc</label>
                                <div class="formulario__grupo-input">
                                <select class="formulario__input"name="pre08" id="pre08" >
									<option disabled selected>Seleccionar</option>
									<option>Si</option>
									<option>No</option>
								</select>
                                </div>
                                <p class="formulario__input-error">Seleccionar una respuesta.</p>
                            </div>
                            <!-- Pregunta N° 09 -->
                            <div class="formulario__grupo" id="grupo__pre09">
                                <label for="pre09" class="formulario__label">¿Ud. ¿Ha tenido algún accidente que le haya producido secuelas como limitación física o mental?</label>
                                <div class="formulario__grupo-input">
                                <select class="formulario__input"name="pre09" id="pre09" >
									<option disabled selected>Seleccionar</option>
									<option>Si</option>
									<option>No</option>
								</select>
                                </div>
                                <p class="formulario__input-error">Seleccionar una respuesta.</p>
                            </div>
                            <!-- Pregunta N° 10 -->
                            <div class="formulario__grupo" id="grupo__pre10">
                                <label for="pre10" class="formulario__label">¿Cuándo fue la última vez que visitaste al doctor?</label>
                                <div class="formulario__grupo-input">
                                <select class="formulario__input"name="pre10" id="pre10" >
										<option disabled selected>Seleccionar</option>
										<option>Hace 1 semana</option>
										<option>Hace 3 semanas</option>
                                        <option>Hace 1 mes</option>
										<option>Hace 3 meses</option>
                                        <option>Hace 1 año</option>
										<option>Mas de 3 años</option>
									</select>
                                </div>
                                <p class="formulario__input-error">Seleccionar una respuesta.</p>
                            </div>
                            
                        </div>
                    </div>
                </div>


                <div class="seccion" id="3">
                    <div class="card">
                        <h1>Ficha de Trabajo</h1>
                        <p class="parrafo"> Declaro bajo juramento que estoy conforme con mi postulación y que la empresa T-Soluciona SAC me ha explicado lo siguiente:<br>
                         1. Sueldo mínimo vital :S/.1025.00 <br> 
                        2. Asignación Familiar : 102.50 ( si tengo derechohabientes)<br>                            
                        3. Beneficios sociales: Vacaciones, Cts y Gratificaciones </p>
                        <div class="group-itens">
                            
                            <!-- Grupo: Peso -->
                            <div class="formulario__grupo" id="grupo__peso">
                                <label for="peso" class="formulario__label">Peso (Kg)</label>
                                <div class="formulario__grupo-input">
                                    <input type="text" class="formulario__input" name="peso" id="peso" placeholder="Ejem: 65.50">
                                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                </div>
                                <p class="formulario__input-error">Ingrese un Peso valido.</p>
                            </div>
                            <!-- Grupo: Estatura -->
                            <div class="formulario__grupo" id="grupo__estatura">
                                <label for="estatura" class="formulario__label">Estatura (M)</label>
                                <div class="formulario__grupo-input">
                                    <input type="text" class="formulario__input" name="estatura" id="estatura" placeholder="Ejem: 1.68">
                                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                </div>
                                <p class="formulario__input-error">Ingrese una Estatura valida.</p>
                            </div>                         
                            
                            <!-- Grupo: IMC - SE GENERA SOLO -- CAMPO BLOQUEADO -->
                            <div class="formulario__grupo" id="grupo__imc">
                                <label for="imc" class="formulario__label">IMC</label>
                                <div class="formulario__grupo-input">
                                    <input type="text" class="formulario__input" name="imc" id="imc" placeholder="" disabled>
                                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                </div>
                                <p class="formulario__input-error"></p>
                            </div>
                            <!-- Grupo: IMC Estad   - SE GENERA SOLO -- CAMPO BLOQUEADO -->
                            <div class="formulario__grupo" id="grupo__detalleIMC">
                                <label for="detalleIMC" class="formulario__label">IMC Estado</label>
                                <div class="formulario__grupo-input">
                                    <input type="text" class="formulario__input" name="detalleIMC" id="detalleIMC" placeholder="" disabled>
                                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                </div>
                                <p class="formulario__input-error"></p>
                            </div>
                            <!-- Grupo: Zapatos -->
                            <div class="formulario__grupo" id="grupo__tallazapatos">
                                <label for="tallazapatos" class="formulario__label">Talla de Zapatos</label>
                                <div class="formulario__grupo-input">
                                    <input type="text" class="formulario__input" name="tallazapatos" id="tallazapatos" placeholder="38">
                                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                </div>
                                <p class="formulario__input-error">Ingrese una Talla valida.</p>
                            </div>


                            <!-- Grupo: Uniforme  -->
                            <div class="formulario__grupo" id="grupo__tallauniforme">
                                <label for="tallauniforme" class="formulario__label">Talla de Uniforme</label>
                                <div class="formulario__grupo-input">
                                <select class="formulario__input"name="tallauniforme" id="tallauniforme" >
										<option disabled selected>Seleccionar</option>
										<option>S</option>
										<option>M</option>
										<option>XL</option>
										<option>XXL</option>
									</select>
                                </div>
                                <p class="formulario__input-error">Seleccionar una respuesta.</p>
                            </div>

                            <!-- Pregunta N° 11 --> 
                            <div class="formulario__grupo" id="grupo__pre11">
                                <label for="pre11" class="formulario__label">¿Tienes alguna dificultad para trabajar 8 horas de pie?</label>
                                <div class="formulario__grupo-input">
                                <select class="formulario__input"name="pre11" id="pre11" >
										<option disabled selected>Seleccionar</option>
										<option>Si</option>
										<option>No</option>
   
									</select>
                                </div>
                                <p class="formulario__input-error">Seleccionar una respuesta.</p>
                            </div>

                            <!-- Pregunta N° 12 -->
                            <div class="formulario__grupo" id="grupo__pre12">
                                <label for="pre12" class="formulario__label">¿Estás estudiando o llevando algún curso actualmente?</label>
                                <div class="formulario__grupo-input">
                                <select class="formulario__input"name="pre12" id="pre12" >
										<option disabled selected>Seleccionar</option>
										<option>Estudiante Universitario</option>
										<option>Curso de preferencia</option>
                                        <option>Capacitación</option>
                                        <option>Otro</option>
									</select>
                                </div>
                                <p class="formulario__input-error">Seleccionar una respuesta.</p>
                            </div>

                            <!-- Pregunta N° 13 -->   
                            <div class="formulario__grupo" id="grupo__pre13">
                                <label for="pre13" class="formulario__label">¿Te genera algún problema o tiene alguna dificultad el olor a gasolina?</label>
                                <div class="formulario__grupo-input">
                                <select class="formulario__input"name="pre13" id="pre13" >
										<option disabled selected>Seleccionar</option>
										<option>Si</option>
										<option>No</option>

									</select>
                                </div>
                                <p class="formulario__input-error">Seleccionar una respuesta.</p>
                            </div>
                                       
                            <!-- Pregunta N° 14 -->
                            <div class="formulario__grupo" id="grupo__pre14">
                                <label for="pre14" class="formulario__label">¿Anteriormente ha laborado para Primax - Coesti?</label>
                                <div class="formulario__grupo-input">
                                <select class="formulario__input"name="pre14" id="pre14" >
										<option disabled selected>Seleccionar</option>
										<option>Si</option>
										<option>No</option>

									</select>
                                </div>
                                <p class="formulario__input-error">Seleccionar una respuesta.</p>
                            </div>

                            <!-- Pregunta N° 15 -->
                            <div class="formulario__grupo" id="grupo__pre15">
                                <label for="pre15" class="formulario__label">¿Tiene hijos menores de edad?</label>
                                <div class="formulario__grupo-input">
                                <select class="formulario__input"name="pre15" id="pre15" >
										<option disabled selected>Seleccionar</option>
										<option>Si</option>
										<option>No</option>
									</select>
                                </div>
                                <p class="formulario__input-error">Seleccionar una respuesta.</p>
                            </div>
                            
                            <!-- Pregunta N° 16 -->                           
                            <div class="formulario__grupo" id="grupo__pre16">
                                <label for="pre16" class="formulario__label">¿Con cuantas dosis cuentas?</label>
                                <div class="formulario__grupo-input">
                                <select class="formulario__input"name="pre16" id="pre16" >
										<option disabled selected>Seleccionar</option>
										<option>1 Dosis</option>
										<option>2 Dosis</option>
                                        <option>3 Dosis</option>
                                        <option>4 Dosis</option>
									</select>
                                </div>
                                <p class="formulario__input-error">Seleccionar una respuesta.</p>
                            </div>

                            <!-- Pregunta N° 17 -->  
                            <div class="formulario__grupo" id="grupo__pre17">
                                <label for="pre17" class="formulario__label">¿Tienes disponibilidad de cubrir horarios rotativos (mañana, tarde,noche, madrugada)?</label>
                                <div class="formulario__grupo-input">
                                    <select class="formulario__input"  name="pre17" id="pre17">
										<option disabled selected>Seleccionar</option>
										<option>Si</option>
										<option>No</option>
									</select>
                                </div>
                                <p class="formulario__input-error">Seleccionar una respuesta.</p>
                            </div>    
                        </div>
                    </div>
                </div>

                <div class="seccion" id="4">
                    <div class="card">
                        <h1 class="sub-titulo">CONSENTIMIENTO PARA EL TRATAMIENTO DE DATOS <br> PERSONALES - POSTULANTE</h1>

                        <p class="parrafo">
                            De conformidad con la Ley N° 29733 - Ley de Protección de Datos Personales y su Reglamento aprobado mediante D.S. N° 003-2013-JUS, el POSTULANTE brinda su consentimiento previo, expreso, inequívoco y libre a la empresa T-SOLUCIONA S.A.C. para que acceda,
                            registre, conserve, modifique, utilice o procese de cualquier otra forma prevista por la Ley, sus datos personales. Dichos datos personales serán incorporados en el Banco de Datos Personales POSTULANTES y serán tratados bajo
                            los controles de seguridad establecidos por ley siendo almacenada bajo estricta confidencialidad. T-SOLUCIONA S.A.C. utilizarán los datos personales del POSTULANTE para fines que establezca el proceso de reclutamiento y selección
                            de Recursos Humanos y para fines estadísticos. Asimismo, los datos personales serán solo transferidos a organizaciones o personas directamente relacionadas con la organización y/o con sus clientes que requieran el servicio
                            de reclutamiento y selección de personal. El POSTULANTE autoriza a que T-SOLUCIONA S.A.C. verifique los datos entregados en el proceso de reclutamiento y selección, tales como: Datos personales, referencias profesionales, Información
                            relativa a la salud física o mental, antecedentes laborales, policiales, penales, judiciales y/o crediticios, dependiendo el cargo al cual postula, y de ser el caso, ponga de conocimiento esta información a sus clientes que
                            hayan requerido el servicio de reclutamiento y selección de personal. El POSTULANTE autoriza a T-SOLUCIONA S.A.C. a mantener sus datos personales en el banco antes referido incluso luego de finalizado el proceso de reclutamiento
                            y selección, en tanto sean útiles para la finalidad y usos antes mencionados, así como para el cumplimiento de las obligaciones legales pertinentes. El POSTULANTE podrá ejercer su Derecho de Acceso, Rectificación, Cancelación
                            u Oposición de sus datos personales - Derechos ARCO, mediante solicitud escrita vía email a opietro@t-soluciona.com.pe o de forma presencial en la Oficina Principal, Av. Antenor Orrego Mz. W3 Lt. 18 Dpt. 201- Urb. El cortijo,
                            la libertad - Trujillo. En cualquier caso deberá adjuntar una copia del DNI.<br><br> Estoy de acuerdo con lo descrito en el Consentimiento para el Tratamiento de Datos Personales - Postulante.
                        </p>
                        <div class="formulario__grupo" id="grupo__terminos">
                            <label class="formulario__label">
								<input class="formulario__checkbox" type="checkbox" name="terminos" id="terminos">
								Acepto los Terminos y Condiciones
							</label>
                        </div>
                        <p class="parrafo"><br> Mediante mi firma doy conformidad de la información registrada. Asimismo, con la información brindada, autorizo la generación de los siguientes registros: Ficha Actualizada del Trabajador, Declaración de Beneficiarios para
                            seguro de Vida Obligatorio para personal, Declaración de 5ta categoría, Declaración Jurada de Domicilio y Consentimiento de Tratamiento de Datos Personales - Postulante.<br><br> Mediante mi firma doy conformidad que, todos
                            los documentos enviados al equipo de Reclutamiento y Selección de la compañía T-SOLUCIONA mediante: correo electrónico, WhatsApp o algún otro medio de transferencia documentaria, son copia fiel del original; en consecuencia,
                            si se acreditara su invalidez, me someto a las disposiciones internas y/o legales que se dispongan en mi contra.<br>
                        </p>
                        <div class="firma-digital">
                            <div class="signature mb-2" style="width: 100%; height: 200px;">
                                <canvas id="signature-canvas" style="border: 1px dashed red; width: 100%; height: 200px;"></canvas>
                            </div>
                        </div>
                        <div class="formulario__mensaje" id="formulario__mensaje">
                            <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
                        </div>

                        <div class="formulario__grupo formulario__grupo-btn-enviar">
                            <button type="submit" class="formulario__btn">Enviar</button>
                            <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
                        </div>
                    </div>

                </div>
            </div>
        </form>

    </div>
    <script src="app.js"></script>
    <script src="formulario.js"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>

</html>