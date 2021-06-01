<!--INICIA SECCION DEL MODAL TABLA ASIGNACIONES-->
<div class="container">
    <div class="modal" tabindex="-1" id="asignacio-prof" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <section class="container">
                    <div class="modal-header">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-11"></div>
                                <div class="col-lg-1">
                                    <!--<button class="btn btn-danger" data-dismiss='modal'>&times;</button>-->
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="container py-2 bg-white">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 class="font-weight-bold mb-0">Editar cuenta de profesor</h3>
                                <p>Modique los datos del profesor.</p>
                            </div>
                        </div>
                        <div class="row g-3 align-items-center">
                            <div class="col-3 py-2">
                                <select class="form-control" id="abreviatura">
                                    <option>Lic.</option>
                                    <option>Mto.</option>
                                    <option>Dr.</option>
                                </select>
                            </div>
                            <div class="col-lg-9 py-2">
                                <input type="text" class="form-control" placeholder="Nombre(s)" aria-label="Nombres">
                            </div> 
                        </div>
                        <div class="row g-3 align-items-center">
                            <div class="col-lg-6 py-2">
                                <input type="text" class="form-control" placeholder="Apellido Paterno" aria-label="Primer Apellido">
                            </div>
                            <div class="col-lg-6 py-2">
                                <input type="text" class="form-control" placeholder="Apellido Materno" aria-label="Segundo Apellido">
                            </div>
                        </div>
                        <div class="row g-3 align-items-center">
                            <div class="col-lg-12 py-2">
                                <input type="text" class="form-control" placeholder="Número de Trabajador" aria-label="No. Trabajador">
                            </div>
                        </div>
                        <div class="row g-3 align-items-center">
                            <div class="col-lg-12 py-2">
                                <input type="text" class="form-control" placeholder="Teléfono" aria-label="Telefono">
                            </div>
                        </div>
                        <div class="row g-3 align-items-center">
                            <div class="col-lg-12 py-2">
                                <input type="text" class="form-control" placeholder="Correo Electrónico" aria-label="Correo">
                            </div>
                        </div>
                        <div class="row g-3 align-items-center">
                            <div class="col-12 py-2">
                                <select class="form-control" id="depto">
                                    <option>Informática</option>
                                    <option>Matemáticas</option>
                                    <option>Cómputo</option>
                                </select>
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button class="btn btn-primary w-100 aling-self-center">Actualizar Datos</button>
                            </div>
                        </div>
                        </div> -->
                    <section class="container bg-grey">
                        <div class="row">
                            <div class="col-lg-9 py-3">
                                <h3>Historial de grupos asociados a este profesor</h3>
                            </div>
                            <div class="col-lg-3 py-3">
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Todos</option>
                                    <option>Presencial</option>
                                    <option>Mixto</option>
                                    <option>Online</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 py-2 overflow-auto">
                                <table class="table table-striped bg-light">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Grupo</th>
                                            <th scope="col">Curso</th>
                                            <th scope="col">Profesor</th>
                                            <th scope="col">Cupo</th>
                                            <th scope="col">Fecha de inicio</th>
                                            <th scope="col">Tipo</th>
                                            <th scope="col">Notas</th>
                                            <th scope="col">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>5110</td>
                                            <td>Curso Diseño UIX</td>
                                            <td>Juan Perez Sanchez</td>
                                            <td>5/30</td>
                                            <td>29 de Junio del 2021</td>
                                            <td>Online</td>
                                            <td>23 solicitudes pendientes</td>
                                            <td>
                                                <!-- BOTON ACCIONES -->
                                                <div class="dropdown">
                                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Opciones
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                        <button class="dropdown-item" type="button">Ver Horario</button>
                                                        <button class="dropdown-item" type="button">Editar grupo</button>
                                                        <button class="dropdown-item" type="button">Ver solicitudes</button>
                                                        <button class="dropdown-item" type="button">Terminar grupo</button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>2603</td>
                                            <td>Curso Excel Avanzado con Macros</td>
                                            <td>Alejandro Navarrete Perez</td>
                                            <td>20/20</td>
                                            <td>27 de Noviembre del 2021</td>
                                            <td>Online</td>
                                            <td>Grupo lleno</td>
                                            <td>
                                                <!-- BOTON ACCIONES -->
                                                <div class="dropdown">
                                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Opciones
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                        <button class="dropdown-item" type="button">Ver Horario</button>
                                                        <button class="dropdown-item" type="button">Editar grupo</button>
                                                        <button class="dropdown-item" type="button">Ver solicitudes</button>
                                                        <button class="dropdown-item" type="button">Terminar grupo</button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>2603</td>
                                            <td>Iniciación al cómputo I</td>
                                            <td>Ana Gabriela Guevara Espinoza</td>
                                            <td>26/30</td>
                                            <td>11 de Julio del 2021</td>
                                            <td>Online</td>
                                            <td>Sin solicitudes pendientes</td>
                                            <!-- BOTON ACCIONES -->
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Opciones
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                        <button class="dropdown-item" type="button">Ver Horario</button>
                                                        <button class="dropdown-item" type="button">Editar grupo</button>
                                                        <button class="dropdown-item" type="button">Ver solicitudes</button>
                                                        <button class="dropdown-item" type="button">Terminar grupo</button>
                                                    </div>
                                                </div>
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
                    </section>
                    <!-- FIN SECCION HISTORIAL DE GRUPOS ASOCIADOS-->
                    <div class= "modal-footer">
                        <div class="container bg-grey">  
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<!--FIN SECCION DEL MODAL TABLA ASIGNACIONES-->