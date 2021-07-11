<!-- Modal  INFO EDITAR  -->
<div class="modal fade" id="modalUpdateInfroCurso" tabindex="-1" role="dialog" aria-labelledby="modalUpdateInfroCurso" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Editar informaciòn</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="frm-update-curso"  class="submit">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="editarNombreCurso">Nombre del curso</label>
                        <input type="text" class="form-control" name="idCurso" id="idCurso">
                        <input type="text" class="form-control" name="editarNombreCurso" id="editarNombreCurso" placeholder="Nombre del curso">
                    </div>
                    <div class="form-group">
                        <label for="editarDescripcion">Descripciòn</label>
                        <textarea class="form-control" rows="3" name="editarDescripcion" id="editarDescripcion" required="" placeholder="Escriba una breve descripcion del curso"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="editarObjetivo">Objetivo</label>
                        <textarea class="form-control" rows="3" name="editarObjetivo" id="editarObjetivo" required="" placeholder="Escriba una breve descripcion del curso"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="editarDirigido">Dirigido a</label>
                        <textarea class="form-control" rows="3" name="editarDirigido" id="editarDirigido" required="" placeholder="Escriba para quien va dirigido este curso en general"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="editarAntecedentes">Antecedentes</label>
                        <textarea class="form-control" rows="3" name="editarAntecedentes" id="editarAntecedentes" required="" placeholder="Escriba que antecedentes se necesita para cursar este curso"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="editarModalidad">Modalidad</label>
                        <select class="form-control" id="editarModalidad" name="editarModalidad">
                            <option value="0">Curso</option>
                            <option value="1">Diplomado</option>
                            <option value="2">Seminario</option>
                            <option value="3">Taller</option>
                            <option value="4">Otro</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="editarSesiones">Numero de Sesiones</label>
                        <input class="form-control" type="number" value="1" id="editarSesiones" name="editarSesiones" required>
                    </div>
                    <div class="form-group">
                        <label for="editarCosto">Costo sugerido</label>
                        <input class="form-control"  id="editarCosto" name="editarCosto" onchange="MASK(this,this.value,'-$##,###,##0.00',1)" requere>
                    </div>
                </div>
                <div class="modal-footer">
                    <!-- button envio ajax-->
                    <input type="submit" class="btn btn-primary" id="btnEnviar" value="Guardar Cambios">
                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                        <div id="alerta"></div>
                </div>
            </form>
        </div>
    </div>
</div>
<!--
MODAL INFO EDITAR  -->
