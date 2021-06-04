<!-- MODAL VER HOPRARIO DEL CURSO -->
<div class="modal fade" id="verHorario" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title"><strong>Horarios del curso</strong></h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- INICIO TABLA HORARIO PRESENCIAL -->
                <section class="container py-3 bg-grey">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3>Horario Presencial</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 overflow-auto">
                            <table class="table table-striped bg-light">
                                <thead>
                                    <tr>
                                        <th scope="col" class="col-hora">Hora</th>
                                        <th scope="col" class="col-dia">Lunes</th>
                                        <th scope="col" class="col-dia">Martes</th>
                                        <th scope="col" class="col-dia">Miercoles</th>
                                        <th scope="col" class="col-dia">Jueves</th>
                                        <th scope="col" class="col-dia">Viernes</th>
                                        <th scope="col" class="col-dia">Sábado</th>
                                        <th scope="col" class="col-dia">Domingo</th>
                                        <th scope="col col-accion" class="col-accion"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>9:00</td>
                                        <td>A21</td>
                                        <td></td>
                                        <td></td>
                                        <td>A21</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <!-- BOTON ACCIONES -->
                                            <button class="btn btn-primary" type="button">Modificar</button>
                                            <button class="btn btn-outline-danger border-2" type="button">Eliminar</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>13:00</td>
                                        <td></td>
                                        <td>B-32</td>
                                        <td></td>
                                        <td></td>
                                        <td>B-32</td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <!-- BOTON ACCIONES -->
                                            <button class="btn btn-primary" type="button">Modificar</button>
                                            <button class="btn btn-outline-danger" type="button">Eliminar</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- PAGINADOR DE TABLA -->
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
                    <!-- FIN PAGINADOR -->
                </section>
                <!-- FIN TABLA HORARIO PRESENCIAL -->

                <!-- INICIO TABLA HORARIO VIRTUAL -->
                <section class="container bg-grey">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3>Horario Virtual</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 overflow-auto">
                            <table class="table table-striped bg-light">
                                <thead>
                                    <tr>
                                        <th scope="col" class="col-hora">Hora</th>
                                        <th scope="col" class="col-dia">Lunes</th>
                                        <th scope="col" class="col-dia">Martes</th>
                                        <th scope="col" class="col-dia">Miercoles</th>
                                        <th scope="col" class="col-dia">Jueves</th>
                                        <th scope="col" class="col-dia">Viernes</th>
                                        <th scope="col" class="col-dia">Sábado</th>
                                        <th scope="col" class="col-dia">Domingo</th>
                                        <th scope="col col-accion" class="col-accion"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>9:00</td>
                                        <td>ZOOM</td>
                                        <td></td>
                                        <td></td>
                                        <td>ZOOM</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <!-- BOTON ACCIONES -->
                                            <button class="btn btn-primary" type="button">Modificar</button>
                                            <button class="btn btn-outline-danger" type="button">Eliminar</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>13:00</td>
                                        <td></td>
                                        <td>CLASSROOM</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>CLASSROOM</td>
                                        <td></td>
                                        <td>
                                            <!-- BOTON ACCIONES -->
                                            <button class="btn btn-primary" type="button">Modificar</button>
                                            <button class="btn btn-outline-danger" type="button">Eliminar</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- PAGINADOR DE TABLA -->
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
                    <!-- FIN PAGINADOR -->
                </section>
                <!-- FIN TABLA HORARIO VIRTUAL -->
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="button" data-dismiss="modal">Aceptar</button>
            </div>
        </div>
    </div>
</div>
<!-- MODAL VER HOPRARIO DEL CURSO -->