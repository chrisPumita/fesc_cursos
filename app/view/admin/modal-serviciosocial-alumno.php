<!--INICIA MODAL: CREACIÓN DE CUENTA DE SERVICIO SOCIAL-->
<div class="modal fade" id="altaServicioSocial" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close mt-3" data-dismiss='modal' aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="font-weight-bold mb-1 mt-3">Crear cuenta de Servicio Social</h3>
                <p>Al crear una cuenta, le llegará una notificación por correo electrónico al alumno.</p>
                <hr>
                <!--INICIA EL FORMULARIO-->
                <form class="user needs-validation" id="frm-add-profesor" role="form" autocomplete="off" novalidate>
                    <div class="form-group row">
                        <div class="col-sm-12 mb-3 mb-sm-0">
                            <label class="col-form-label font-weight-bold">Ingrese los siguientes datos: </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-5 mb-3 mb-sm-0">
                            <label class="col-form-label" for="termino">Fecha de Término del Servicio:</label>
                        </div>
                        <div class="col-sm-7 mb-3 mb-sm-0">
                            <input type="date" name="fin" max="3000-12-31" min="1000-01-01" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-5 mb-3 mb-sm-0">
                            <label class="col-form-label" for="permisos">Nivel de Permisos:</label>
                        </div>
                        <div class="col-sm-7 mb-3 mb-sm-0">
                            <select class="form-control" id="permisos" name="permisos">
                                <option>Bajo</option>
                                <option>Medio</option>
                                <option>Alto</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3 mb-3 mb-sm-0">
                            <label class="col-form-label" for="txtnotas">Notas:</label>
                        </div>
                        <div class="col-sm-9 mb-3 mb-sm-0">
                            <textarea class="form-control" id="txtnotas" rows="3" name="notas"></textarea>
                        </div>
                    </div>
                </form>
                <!-- FINALIZA EL FORMULARIO-->
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
                <button class="btn btn-primary" type="button">Aceptar</button>
            </div>
        </div>
    </div>
</div>
<!--FINALIZA MODAL: CREACIÓN DE CUENTA DE SERVICIO SOCIAL-->