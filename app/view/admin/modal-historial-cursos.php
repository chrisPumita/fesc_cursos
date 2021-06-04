<!--INICIA MODAL HISTORIAL CURSOS-->    
<div class="modal fade" id="histCursos" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title"><strong>Historial de cursos</strong></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- <div class="row">
                    <div class="col-lg-12">
                        <div class="card mt-3 mb-3">
                            <div class="card-body"> -->
                <div class="mx-auto">
                    <div class="row p-3">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <select class="form-control">
                                    <option>Todos</option>
                                    <option>Inscritos</option>
                                    <option>Pendientes de Pago</option>
                                    <option>Rechazados</option>
                                    <option>Constancia Acreditada</option>
                                    <option>Constancias Pendiente</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 overflow-auto">
                            <table class="table table-striped bg-light table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Curso</th>
                                        <th scope="col">Profesor</th>
                                        <th scope="col">Estado del Pago</th>
                                        <th scope="col">Constancia</th>
                                        <th scope="col">Inscripción</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col">Calificación</th>
                                        <th scope="col">Notas</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2143</td>
                                        <td>Diseño Web</td>
                                        <td>Juan Álvarez Romo</td>
                                        <td>Pendiente</td>
                                        <td>Pendiente</td>
                                        <td>Pendiente</td>
                                        <td>Activa</td>
                                        <td></td>
                                        <td>Registro realizado el 22 de Febrero de 2021</td>
                                        <td>
                                            <!-- BOTON ACCIONES -->
                                            <div class="dropdown">
                                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                    <button class="dropdown-item" type="button">Ficha de Inscripción</button>
                                                    <button class="dropdown-item" type="button">Generar Constancia</button>
                                                    <button class="dropdown-item" type="button">Revisar Documentos</button>
                                                    <button class="dropdown-item" type="button">Cancelar Inscripción</button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2144</td>
                                        <td>Iniciación al Cómputo I</td>
                                        <td>Alberto Mendez García</td>
                                        <td>Acreditado el 23 de Febrero de 2021</td>
                                        <td>02156</td>
                                        <td>Pendiente</td>
                                        <td>Acreditado</td>
                                        <td>Aceptado</td>
                                        <td></td>
                                        <td>
                                            <!-- BOTON ACCIONES -->
                                            <div class="dropdown">
                                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                    <button class="dropdown-item" type="button">Ficha de Inscripción</button>
                                                    <button class="dropdown-item" type="button">Generar Constancia</button>
                                                    <button class="dropdown-item" type="button">Revisar Documentos</button>
                                                    <button class="dropdown-item" type="button">Cancelar Inscripción</button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2653</td>
                                        <td>Iniciación al Cómputo II</td>
                                        <td>Ana María Rosas Nuñez</td>
                                        <td>No realizado</td>
                                        <td>Rechazado</td>
                                        <td>Sin Documentos</td>
                                        <td>Cancelado</td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <!-- BOTON ACCIONES -->
                                            <div class="dropdown">
                                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                    <button class="dropdown-item" type="button">Ficha de Inscripción</button>
                                                    <button class="dropdown-item" type="button">Generar Constancia</button>
                                                    <button class="dropdown-item" type="button">Revisar Documentos</button>
                                                    <button class="dropdown-item" type="button">Cancelar Inscripción</button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- INICIA PAGINADOR DE TABLA -->
                    <div class="row">
                        <div class="col-lg-12 my-2">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Anterior</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Siguiente</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- FINALIZA PAGINADOR DE TABLA -->
                </div>
                <!-- </div>
                    </div>
                    </div>
                    </div> -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!--FIN MODAL HISTORIAL CURSOS-->