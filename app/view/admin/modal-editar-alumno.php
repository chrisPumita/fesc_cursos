<!--INICIA SECCION DEL MODAL DE DATOS DEL ALUMNO-->
<section class="container">
    <div class="modal fade" id="mod-edit-alum" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    <h2>Editar datos del alumno</h2>
                    <p>Puede modificar los datos del alumno, sin embargo, esta acción también la puede realizar el alumno desde su perfil.</p>
                    <hr>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-3">
                                <!-- INICIA FORMULARIO-->
                                <form class="user needs-validation" id="frm-edit-alumno" role="form" autocomplete="off" novalidate>
                                    <div class="form-group row">
                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user"  name="nombreAlumno" id="nombreAlumno" required="" placeholder="Nombre(s)">
                                        </div>
                                        <div class="col-sm-4 mb-3">
                                            <input type="text" class="form-control form-control-user" name="appAlumno"  id="appAlumno" required="" placeholder="Apellido Paterno">
                                        </div>
                                        <div class="col-sm-4 mb-3">
                                            <input type="text" class="form-control form-control-user" name="apmAlumno"  id="apmAlumno" required="" placeholder="Apellido Materno">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user"  name="correoAlumno" id="correoAlumno" required="" placeholder="Correo Electrónico">
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12 mb-3 mb-sm-0">
                                            <input type="tel" class="form-control form-control-user" name="telAlumno"  id="telAlumno" required="" placeholder="Teléfono de Contacto">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                            <label for="exampleFormControlSelect2">Estado:</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="estados"  id="estados">
                                                <!--AJAX result DB -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                            <label for="exampleFormControlSelect2">Municipio:</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="municipios"  id="municipios">
                                                <!--AJAX result DB -->
                                            </select>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                            <label for="exampleFormControlSelect2">Procedencia:</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="procedencia"  id="procedencia">
                                                <option value="1">Comunidad FESC</option>
                                                <option value="2">Comunidad UNAM</option>
                                                <option value="3">Ex-Alumno</option>
                                                <option value="4">Comunidad Externa</option>
                                                <option value="0">Otro</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                            <label for="exampleFormControlSelect2">Universidad/Escuela:</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="universidades"  id="universidades">
                                                <!--AJAX result DB -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control form-control-user d-none" name="nombreUni"  id="nombreUni" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" name="carrera"  id="carrera" required="" placeholder="Carrera / Profesión Actual">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" name="matricula"  id="matricula" required="" placeholder="No. de Cuenta / Matrícula/ No. Empleado">
                                        </div>
                                        <div class="col-sm-12 mb-3 mb-sm-0">
                                            <input type="hidden" class="form-control form-control-user" name="catpcha"  id="catpcha" required="" placeholder="No. de Cuenta / Matrícula/ No. Empleado">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <div class="col-sm-4 py-1">
                                            <button class="btn btn-success w-100 aling-self-center font-weight-bold">Activar Cuenta</button>
                                        </div>
                                        <div class="col-sm-4 py-1">
                                            <button class="btn btn-danger w-100 aling-self-center font-weight-bold">Desactivar Cuenta</button>
                                        </div>
                                        <div class="col-sm-4 py-1">
                                            <button class="btn btn-primary w-100 aling-self-center font-weight-bold">Actualizar Datos</button>
                                        </div>
                                    </div>
                                    <!--<div id="formError" class="alert alert-danger d-none" role="alert">
                                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                        <span id="Mensaje">Error: </span>
                                        </div>
                                        <div id="summary"></div>Espacio donde se colocara un mensaje general para el usuario-->
                                </form>
                                <!-- FINALIZA FORMULARIO-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--FINALIZA SECCION DEL MODAL DE DATOS DEL ALUMNO-->