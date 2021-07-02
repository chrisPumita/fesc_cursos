<!--INICIA MODAL HORARIO PRESENCIAL-->
<div class="modal fade" id="horarioPresencial" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h2><strong>Horario Presencial</strong></h2>
                <p>Agregue el horario a la clase que se realizará de forma presencial</p>
                <hr>
                <!--INICIA FORMULARIO-->
                <form class="user needs-validation" id="frm-add-alumno" role="form" autocomplete="off">
                    <div class="row">
                        <div class="col-sm-12 mb-3 mb-sm-0">
                            <label class="font-weight-bold">Seleccione los siguientes datos:</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <label class="col-form-label">Día:</label>
                        </div>
                        <div class="col-sm-8 mb-3 mb-sm-0">
                            <select class="form-control" name="dia" id="sel-dia">
                                <option value="0">Lunes</option>
                                <option value="1">Martes</option>
                                <option value="2">Miercoles</option>
                                <option value="3">Jueves</option>
                                <option value="4">Viernes</option>
                                <option value="5">Sábado</option>
                                <option value="6">Domingo</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <label class="col-form-label">Hora de Inicio:</label>
                        </div>
                        <div class="col-sm-3 mb-3 mb-sm-0">
                            <input type="number" name="hora" id="hora" min="1" max="24" placeholder="12">
                        </div>
                        <div class="col-sm-1 mb-3 mb-sm-0">
                            <label class="col-form-label">Hrs.</label>
                        </div>
                        <div class="col-sm-3 mb-3 mb-sm-0">
                            <input type="text" name="minutos" id="minutos" placeholder="00">
                        </div>
                        <div class="col-sm-1 mb-3 mb-sm-0">
                            <label class="col-form-label">Min.</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <label class="col-form-label">Duración:</label>
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="number" name="duracion" id="duracion" min="1" placeholder="60">
                        </div>
                        <div class="col-sm-2 mb-3 mb-sm-0">
                            <label class="col-form-label">Min.</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <label class="col-form-label">Edificio:</label>
                        </div>
                        <div class="col-sm-7 mb-3 mb-sm-0">
                            <select class="form-control" name="edificio" id="edificio">
                                <option>A1</option>
                                <option>A2</option>
                                <option>A7</option>
                            </select>
                        </div>
                        <div class="col-sm-1">
                            <a href="./general">
                                <img class="image mx-2 aling-center" src="./assets/img/icons/plus2.svg" width="30" height="30">
                            </a>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <label class="col-form-label">Aula:</label>
                        </div>
                        <div class="col-sm-7 mb-3 mb-sm-0">
                            <select class="form-control" name="edificio" id="edificio">
                                <option>1023</option>
                                <option>1520</option>
                                <option>1202</option>
                            </select>
                        </div>
                        <div class="col-sm-1">
                            <a href="./general">
                                <img class="image mx-2 aling-center" src="./assets/img/icons/plus2.svg" width="30" height="30">
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <p class="text-muted">Esta aula sólo permite una asitencia de 30 personas</p>
                        </div>
                    </div>
                </form>
                <!--FINALIZA FORMULARIO-->
            </div>
            <div class="modal-footer">
                <div class="row">
                    <a href="#" data-toggle="modal" data-target="#verAdmin">
                        <button type="button" class="btn btn-primary mr-4">Agregar</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--FINALIZA MODAL HORARIO PRESENCIAL-->