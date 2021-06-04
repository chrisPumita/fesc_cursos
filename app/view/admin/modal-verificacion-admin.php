<!--INICIA SECCION DEL MODAL DE CLAVE DE VERIFICACIÓN
<section class="container">
    <div class="modal" id="mod-verif-admin" data-backdrop="static" data-keyboard="false" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-grey">
                <div class="modal-header">
                    <h6><strong>Escriba su clave de verificación para concluir con el procedimiento:</strong></h6>
                </div>
                <div class="modal-body">
                    INICIA FORMULARIO
                    <form class="user needs-validation" id="frm-clave-verif" role="form" autocomplete="off" novalidate>
                        <div class="form-group row">
                            <div class="col-sm-5 mb-3 mb-sm-0">
                                <label class="col-form-label">Clave de verificación:</label>
                            </div>
                            <div class="col-sm-7 mb-3 mb-sm-0">
                                <input type="text" class="form-control" placeholder="" aria-label="Clave_Verif">
                            </div>
                        </div>
                    </form>
                    FINALIZA FORMULARIO
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger btn-sm" type="button" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary btn-sm" type="button">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
</section>
FINALIZA SECCIÓN DEL MODAL DE CLAVE DE VERIFICACIÓN-->

<div class="modal fade" id="verAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title"><strong>Verificación</strong></h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!--INICIA FORMULARIO-->
      <form class="user needs-validation" id="frm-clave-verif" role="form" autocomplete="off" novalidate>
            <div class="form-group row">
                <div class="col-sm-12">
                <h5>Escriba su clave de verificación para concluir con el procedimiento.</h5>
                </div>
                <div class="col-sm-5 mb-3 mb-sm-0">                    
                    <label class="col-form-label">Clave de verificación:</label>
                </div>
                <div class="col-sm-7 mb-3 mb-sm-0">
                    <input type="text" class="form-control" placeholder="" aria-label="Clave_Verif">
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