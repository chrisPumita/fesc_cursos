<!--INICIA MODAL HORARIO VIRTUAL-->
<div class="modal fade" id="horarioVirtual" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h2><strong>Horario Virtual</strong></h2>
                <p>Agregue el horario a la clase que se realizará de forma virtual</p>
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
                        <div class="col-sm-4">
                            <label class="col-form-label">Plataforma de trabajo:</label>
                        </div>
                        <div class="col-sm-8">
                            <select class="form-control" name="plataforma" id="plataforma">
                                <option>Moodle</option>
                                <option>Classroom</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <label class="col-form-label">Link de la Plataforma:</label>
                        </div>
                        <div class="col-sm-8 mb-3 mb-sm-0">
                            <input type="text" id="link" name="link" placeholder="Ingrese aquí el enlace de la plataforma">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <label class="col-form-label">Aplicaciones de reuniones:</label>
                        </div>
                        <div class="col-sm-8 mb-3 mb-sm-0">
                            <select class="form-control" name="reuniones" id="reuniones">
                                <option>Zoom</option>
                                <option>Meet</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <label class="col-form-label">Link de la Reunión:</label>
                        </div>
                        <div class="col-sm-8 mb-3 mb-sm-0">
                            <input type="text" id="link" name="link" placeholder="Ingrese aquí el enlace de la plataforma">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <p class="text-muted">Si no escribe el link de plataforma o de la reunión, se entederá que no existe o los enlaces son dinámicos.</p>
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
<!--FINALIZA MODAL HORARIO VIRTUAL-->