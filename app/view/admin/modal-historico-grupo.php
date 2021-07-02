<!-- MODAL HISTORICO DEL CURSOS -->
<div class="modal fade" id="histGrupo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title"><strong>Histórico de Grupos</strong></h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-lg-4">
                            <label>Seleccione un curso:</label>
                        </div>
                        <div class="col-lg-8">
                            <div class="form-group">
                                <select class="form-control" id="curso">
                                    <option>Iniciación al Cómputo I</option>
                                    <option>Iniciación al Cómputo II</option>
                                    <option>Excel Básico</option>
                                    <option>Arduino</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- TARJETA DE INFO DEL CURSO -->
                        <div class="col-sm-12 py-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mx-auto">
                                        <div class="row p-3">
                                            <div class="col-lg-9">
                                                <h3>Histórico de Asignaciones de este Curso</h3>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <select class="form-control" id="sel1">
                                                        <option>Todos</option>
                                                        <option>Finalizados</option>
                                                        <option>Activos</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 overflow-auto">
                                                <table class="table table-striped bg-light table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Grupo</th>
                                                            <th scope="col">Generación</th>
                                                            <th scope="col">Profesor</th>
                                                            <th scope="col">Semestre</th>
                                                            <th scope="col">Cupo</th>
                                                            <th scope="col">Fecha de Inicio</th>
                                                            <th scope="col">Fecha de Término</th>
                                                            <th scope="col">Campo</th>
                                                            <th scope="col">Modalidad</th>
                                                            <th scope="col">Estado</th>
                                                            <th scope="col">Acciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>24265</td>
                                                            <td>5°</td>
                                                            <td>Juan Pérez Sánchez</td>
                                                            <td>2021-I</td>
                                                            <td>29/30</td>
                                                            <td>08 de Agosto de 2020</td>
                                                            <td>14 de Diciembre de 2020</td>
                                                            <td>4</td>
                                                            <td>Presencial</td>
                                                            <td>Finalizado</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                                                                
                                                                    </button>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                                        <a href="./detalles-asignacion">
                                                                            <button class="dropdown-item" type="button">Ver detalles</button>
                                                                        </a>
                                                                        <a href="./nueva-asignacion">
                                                                            <button class="dropdown-item" type="button">Modificar</button>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>24268</td>
                                                            <td>6°</td>
                                                            <td>Juana Peralta Suarez</td>
                                                            <td>2021-II</td>
                                                            <td>30/30</td>
                                                            <td>18 de Enero de 2021</td>
                                                            <td>18 de Junio de 2021</td>
                                                            <td>1</td>
                                                            <td>Online</td>
                                                            <td>Activo</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    </button>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                                        <a href="./detalles-asignacion">
                                                                            <button class="dropdown-item" type="button">Ver detalles</button>
                                                                        </a>
                                                                        <a href="./nueva-asignacion">
                                                                            <button class="dropdown-item" type="button">Modificar</button>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="button" data-dismiss="modal">Aceptar</button>
            </div>
        </div>
    </div>
</div>
<!-- MODAL HISTORICO DEL CURSOS -->