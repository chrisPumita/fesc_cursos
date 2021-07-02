<!--INICIA MODAL: CAMBIAR FOTO DE PERFIL-->
<div class="modal fade" id="cambiofotoperfil" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close mt-3" data-dismiss='modal' aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="font-weight-bold mb-1 mt-3">Foto de Perfil</h3>
                <hr>
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample38.jpg" class="card-img-top img-thumbnail img-preview" alt="img de perfil" id="preview">
                <div class="card-body">
                    <h6 class="card-title"><strong>Cambiar Foto de Perfil</strong></h6>
                    <p class="card-text py-1">Debe tener una resolución de 140px por 140px</p>
                    <div class="row">
                        <div class="col-md-9">
                            <input type="file" class="custom-file-input" id="preview" accept="image/*">
                            <label class="custom-file-label" for="preview" data-browse="Elegir">Seleccione una imagen</label>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><button type="button" class="btn btn-warning btn-sec btn-block">Quitar</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
                <button class="btn btn-primary" type="button">Aceptar</button>
            </div>
        </div>
    </div>
</div>
<!--FINALIZA MODAL: CAMBIAR FOTO DE PERFIL-->