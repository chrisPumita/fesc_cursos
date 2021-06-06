<!-- MODAL PARA EDITAR DETALLES DEL TEMA EN TEMARIO DEL CURSO -->
<div class="modal fade" id="editTema" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title"><strong>Editar/Nuevo tema</strong></h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="col-lg-12">
                <div class="form-group row">
                    <label class="label" for="grupo">Indice:</label>
                    <div class="row">
                        <div class="col-md-4 d-flex">
                            <input class="form-control" type="number" value="1" id="example-number-input"> <p>.</p>
                        </div>
                        <div class="col-md-4 d-flex">
                            <input class="form-control" type="number" value="0" id="example-number-input"> <p>.</p>
                        </div>
                        <div class="col-md-4">
                            <input class="form-control" type="number" value="0" id="example-number-input">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="label" for="grupo">Tema: </label>
                    <input class="form-control" id="txtTema" type="text">
                </div> 
                <div class="form-group row">
                    <label class="label" for="grupo">Descripción:</label>
                    <textarea class="form-control" id="txtDesc" rows="3"></textarea>
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