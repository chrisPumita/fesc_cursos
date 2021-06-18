
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h2>Registrate</h2>
                <p>Registrate para poder inscribirte a los cursos que ofrece las FES-Cuautitlán. Es facil y
                    rápido.
                </p>
                <hr>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-3">
                            <!-- Inicia el formulario-->
                            <form class="user needs-validation" id="frm-add-alumno" role="form" autocomplete="off" novalidate>
                                <div class="form-group row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user"  name="nombreAlumno" id="nombreAlumno" required="" placeholder="Nombre">
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <input type="text" class="form-control form-control-user" name="appAlumno"  id="appAlumno" required="" placeholder="Primer Apellido">
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <input type="text" class="form-control form-control-user" name="apmAlumno"  id="apmAlumno" required="" placeholder="Segundo Apellido">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="tel" class="form-control form-control-user" name="telAlumno"  id="telAlumno" required="" placeholder="Teléfono">
                                    </div>
                                    <div class="col-sm-6 row mb-3">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="rbnHombre" name="sexo" class="custom-control-input" value="0" checked>
                                            <label class="custom-control-label" for="rbnHombre">Hombre</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="rbnMujer" name="sexo" class="custom-control-input"  value="1">
                                            <label class="custom-control-label" for="rbnMujer">Mujer</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user"  name="correoAlumno" id="correoAlumno" required="" placeholder="Correo Electrónico">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" name="contrasena"  id="contrasena" required="" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" name="contrasenaconfirmar" id="contrasenaconfirmar" required="" placeholder="Repeat Password">
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <label for="exampleFormControlSelect2">Estado</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <select class="form-control" name="estados"  id="estados">
                                            <!--AJAX result DB -->
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <label for="exampleFormControlSelect2">Municipio</label>
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
                                        <label for="exampleFormControlSelect2">Procedencia</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <select class="form-control" name="procedencia"  id="procedencia">
                                            <!--AJAX result DB -->
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <label for="exampleFormControlSelect2">Universidad</label>
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
                                        <input type="text" class="form-control form-control-user d-block" name="nombreUni"  id="nombreUni" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="carrera"  id="carrera" required="" placeholder="Carrera/Profesion actual">

                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="matricula"  id="matricula" required="" placeholder="No de Cuenta/Matricula">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="hidden" class="form-control form-control-user" name="catpcha"  id="catpcha" required="" placeholder="No de Cuenta/Matricula">
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <div class="col-sm-8 mb-3 mb-sm-0">
                                        <p>Al hacer clic en "Registrarme", aceptas nuestras Condiciones,
                                            la Política de datos y la Política de cookies.</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="submit" id="btnEnviar" name="btnEnviar" value="Registrarme" class="btn btn-primary btn-user btn-block">
                                    </div>
                                </div>
                                <div id="formError" class="alert alert-danger d-none" role="alert">
                                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                    <span id="Mensaje">Error: </span>
                                </div>
                                <div id="summary"></div><!--Espacio donde se colocara un mensaje general para el usuario-->

                            </form>
                            <!-- Inicia el formulario-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
