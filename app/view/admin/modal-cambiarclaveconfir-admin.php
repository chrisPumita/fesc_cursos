<!--INICIA MODAL DE CAMBIO DE CLAVE DE CONFIRMACIÓN-->
<div class="modal fade" id="cambioclaveconfirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title"><strong>Cambiar clave de confirmación</strong></h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!--INICIA FORMULARIO-->
                <form class="user needs-validation" id="frm-cambio-claveconfirm" role="form" autocomplete="off" novalidate>
                    <div class="form-group row">
                        <div class="col-sm-5 mb-3 mb-sm-0">                    
                            <label class="col-form-label">Clave actual:</label>
                        </div>
                        <div class="col-sm-7 mb-3 mb-sm-0">
                            <input type="password" class="form-control" id="claveactual" name="claveactual" required="" placeholder="Clave Actual" aria-label="claveactual">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-5 mb-3 mb-sm-0">                    
                            <label class="col-form-label">Nueva clave:</label>
                        </div>
                        <div class="col-sm-7 mb-3 mb-sm-0">
                            <input type="password" class="form-control" id="nuevaclave" name="nuevaclave" required="" placeholder="Nueva Clave" aria-label="clavenueva">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-5 mb-3 mb-sm-0">                    
                            <label class="col-form-label">Repita la nueva clave:</label>
                        </div>
                        <div class="col-sm-7 mb-3 mb-sm-0">
                            <input type="password" class="form-control" id="claverepetida" name="claverepedita" required="" placeholder="Repita nueva clave" aria-label="claverepetida">
                        </div>
                    </div>
                </form>
                <!--FINALIZA FORMULARIO-->
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger btn-sm" type="button" data-dismiss="modal">Cancelar</button>
                <button class="btn btn-primary btn-sm" type="button">Aceptar</button>
            </div>
        </div>
    </div>
</div>
<!--FINALIZA MODAL DE CAMBIO DE CLAVE DE CONFIRMACIÓN-->