<!--INICIA SECCION DEL MODAL DE ASIGNACIÓN A NUEVO ADMIN-->
<div class="modal fade" id="nuevoAdmin" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                <h2><strong>Asignación de un nuevo Administrador</strong></h2>
                <p>Al asignar a un nuevo administrador, le llegará una notificación por correo electrónico con su clave de confirmación.</p>
                <hr>
                <!--INICIA FORMULARIO-->
                <form class="user needs-validation" id="frm-add-admin" role="form" autocomplete="off">
                    <div class="form-group row">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <label class="col-form-label font-weight-bold">Seleccione a un profesor: </label>
                        </div>
                        <div class="col-sm-8 mb-3 mb-sm-0">
                            <select class="form-control" name="profesor"  id="profesor">
                                <!--ajax response-->

                            </select>
                        </div>
                    </div>
                    <div class="collapse" data-toggle="collapse" data-target="collapseExample" id="collapseExample">
                        <hr>
                        <h5><strong>Datos del profesor:</strong></h5>
                        <div class="row">
                            <div class="col-sm-3 mt-2 mb-sm-0">
                                <img src="https://widgetwhats.com/app/uploads/2019/11/free-profile-photo-whatsapp-4.png" alt="" class="rounded-circle" id="profile-img" width="150px">                                
                            </div>
                            <div class="col-sm-9 mt-2 mb-sm-0">
                                <div class="form-group row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <label class="col-form-label">Nombre:</label>
                                    </div>
                                    <div class="col-sm-8 mb-3 mb-sm-0">
                                        <div id="nombre"><strong></strong><!-- Ajax Data --></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <label class="col-form-label">Número de Trabajador:</label>
                                    </div>
                                    <div class="col-sm-8 mb-3 mb-sm-0">
                                        <div id="notrabajador"><!-- Ajax Data --></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <label class="col-form-label">Correo Electrónico:</label>
                                    </div>
                                    <div class="col-sm-8 mb-3 mb-sm-0">
                                        <div id="email"><!-- Ajax Data --></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <label class="col-form-label">Departamento:</label>
                                    </div>
                                    <div class="col-sm-8 mb-3 mb-sm-0">
                                        <div id="depto"><!-- Ajax Data --></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <label class="col-form-label">Fecha de Registro:</label>
                                    </div>
                                    <div class="col-sm-8 mb-3 mb-sm-0">
                                        <div id="fecharegis"><!-- Ajax Data --></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-12 mb-3 mb-sm-0">
                                <p class="font-weight-bold">Ingrese y seleccione los siguientes datos, al finalizar dé clic en el botón "Asignar":</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2 mb-sm-0">
                                <label class="col-form-label">Cargo:</label>
                            </div>
                            <div class="col-sm-4 mb-sm-0">
                                <input type="input" class="form-control" placeholder="" id="txtcargo" aria-label="Cargo">
                            </div>
                            <div class="col-sm-3 mb-sm-0">
                                <label class="col-form-label">Nivel de Permisos:</label>
                            </div>
                            <div class="col-sm-3 mb-sm-0">
                                <select class="form-control" name="permisos" id="permisos">
                                    <option value="1">Bajo</option>
                                    <option value="2">Medio</option>
                                    <option value="3">Alto</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
                <!--FINALIZA FORMULARIO-->
            </div>
            <div class="collapse" data-toggle="collapse" id="collapsebutton">
                <div class="modal-footer">
                    <div class="row">
                        <a href="#" data-toggle="modal" data-target="#verAdmin">
                            <button type="button" class="btn btn-primary mr-4">Asignar</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--FINALIZA SECCIÓN DEL MODAL DE ASIGNACIÓN A NUEVO ADMIN-->