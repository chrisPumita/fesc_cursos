<!--INICIA MODAL DE CAMBIO DE CONTRASEÑA-->
<div class="modal fade" id="cambiopassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title"><strong>Cambiar contraseña</strong></h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!--INICIA FORMULARIO-->
                <form class="user needs-validation" id="frm-cambio-password" role="form" autocomplete="off" novalidate>
                    <div class="form-group row">
                        <div class="col-sm-5 mb-3 mb-sm-0">                    
                            <label class="col-form-label">Contraseña actual:</label>
                        </div>
                        <div class="col-sm-7 mb-3 mb-sm-0">
                            <input type="password" class="form-control" id="pass-actual" name="pass-actual" required="" placeholder="Contraseña Actual" aria-label="passactual">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-5 mb-3 mb-sm-0">                    
                            <label class="col-form-label">Nueva contraseña:</label>
                        </div>
                        <div class="col-sm-7 mb-3 mb-sm-0">
                            <input type="password" class="form-control" id="pass-nueva" name="pass-nueva" required="" placeholder="Nueva Contraseña" aria-label="passanueva">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-5 mb-3 mb-sm-0">                    
                            <label class="col-form-label">Confirmar nueva contraseña:</label>
                        </div>
                        <div class="col-sm-7 mb-3 mb-sm-0">
                            <input type="password" class="form-control" id="pass-nuevaconfirm" name="pass-nuevaconfirm" required="" placeholder="Confirmar Contraseña" aria-label="passnuevaconfirm">
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
<!--FINALIZA MODAL DE CAMBIO DE CONTRASEÑA-->