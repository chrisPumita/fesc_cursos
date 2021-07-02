<!--INICIA MODAL FIRMA DIGITAL-->
<div class="modal fade" id="firmadigital" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title"><strong>Cambiar Firma Digital</strong></h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!--INICIA FORMULARIO-->
                <form class="user needs-validation" id="frm-clave-verif" role="form" autocomplete="off" novalidate>
                    <div class="row">
                        <div class="col-sm-12 mb-sm-0">
                            <p>Seleccione la imagen de su firma digital</p>
                        </div>
                    </div>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/6/67/Firma_de_Joaqu%C3%ADn_Baranda.png" class="card-img-top img-thumbnail img-preview" alt="" id="preview">
                    <div class="card-body">
                        <h6 class="card-title"><strong>Subir imagen de la firma digital</strong></h6>
                        <p class="card-text">Debe tener una resolución de 140px por 140px</p>
                        <div class="form-group row">
                            <div class="col-sm-9 mb-sm-0">
                                <input type="file" class="custom-file-input" id="preview" accept="image/*">
                                <label class="custom-file-label" for="preview" data-browse="Elegir">Seleccione una imagen</label>
                            </div>
                            <div class="col-sm-3 mb-sm-0">
                                <a href="#"><button type="button" class="btn btn-warning btn-sec btn-block">Quitar</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-5 mb-3 mb-sm-0">
                            <label class="col-form-label font-weight-bold">Firma digital:</label>
                        </div>
                        <div class="col-sm-7 mb-3 mb-sm-0">
                            <input type="password" class="form-control" id="firmadigital" name="firma" aria-label="firmadigital">
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
<!--FINALIZA MODAL FIRMA DIGITAL-->