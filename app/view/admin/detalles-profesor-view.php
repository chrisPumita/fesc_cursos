<!doctype html>
<html lang="en">
    <?php
        //Abrir para agregar los includes
        $tittle = "Datos de Profesor";
        include("./view/includes/header.php");
        ?>
    <body class="body-home">
        <div class="d-flex">
            <?php include("./view/includes/admin-menupc.php"); ?>
            <div class="w-100">
                <?php include("./view/includes/admin-menutel.php"); ?>
                <div id="content">
                    <!--Inicio contenido dinamico-->
                    <div class="componet-dinamico bg-grey">
                        <!--INICIA ENCABEZADO DETALLES USUARIO BIENVENIDA-->
                        <section class="container bg-grey">                            
                            <div class="row">
                                <div class = "col-lg-12">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                            <li class="breadcrumb-item"><a href="#">Profesores</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Detalles del Profesor</li>
                                        </ol>
                                    </nav>
                                    <h2 class="font-weight-bold mb-0">Detalles del Profesor</h2>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-lg-12">
                                    <div class="callout callout-second">
                                        <div class="contariner">
                                            <div class="row">
                                                <div class="col-lg-9">
                                                    <h4 class="font-weight-bold">Editar los datos del profesor</h4>
                                                    Verifique su información, ya que ésta se utilizará para fines de Constancias y Enlace con los alumnos inscritos en los grupos que le sean asignados.
                                                </div>
                                                <div class="col-lg-3 text-align-right">
                                                    <button class="btn btn-danger w-100 aling-self-center mt-3 ml-5">DESACTIVAR CUENTA</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- FIN ENCABEZADO DETALLES USUARIO BIENVENIDA -->

                        <!--INICIA FORMULARIO EDICION-->
                        <section class="container py-2 bg-grey">
                            <div class="container py-2 bg-white">
                                <form class="user needs-validation" id="frm-det-profesor" role="form" autocomplete="off" novalidate>
                                    <div class="form-group row">
                                        <div class="col-lg-3 mt-3 mb-1">
                                            <label class="col-form-label font-weight-bold">Abreviación: </label>
                                        </div>
                                        <div class="col-lg-9 mt-3 mb-1">
                                            <select class="form-control" id="abreviatura">
                                                <option>Lic.</option>
                                                <option>Mto.</option>
                                                <option>Dr.</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 mb-1">
                                            <label class="col-form-label font-weight-bold">Nombre(s): </label>  
                                        </div>
                                        <div class="col-lg-9 mb-1">
                                            <input type="text" class="form-control" placeholder="Nombre(s)" aria-label="Nombres">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 mb-1">
                                            <label class="col-form-label font-weight-bold">Apellido Paterno: </label>  
                                        </div>
                                        <div class="col-lg-9 mb-1">
                                            <input type="text" class="form-control" placeholder="Apellido Paterno" aria-label="Primer Apellido">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 mb-1">
                                            <label class="col-form-label font-weight-bold">Apellido Materno: </label>  
                                        </div>
                                        <div class="col-lg-9 mb-1">
                                            <input type="text" class="form-control" placeholder="Apellido Materno" aria-label="Segundo Apellido">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 mb-1">
                                            <label class="col-form-label font-weight-bold">No. de Trabajador: </label>  
                                        </div>
                                        <div class="col-lg-9 mb-1">
                                            <input type="text" class="form-control" placeholder="Número de Trabajador" aria-label="No. Trabajador">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 mb-1">
                                            <label class="col-form-label font-weight-bold">Teléfono: </label>  
                                        </div>
                                        <div class="col-lg-9 mb-1">
                                            <input type="text" class="form-control" placeholder="5555555555" aria-label="Telefono">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 mb-1">
                                            <label class="col-form-label font-weight-bold">Correo Electrónico: </label>  
                                        </div>
                                        <div class="col-lg-9 mb-1">
                                            <input type="text" class="form-control" placeholder="ejemplo@dominio.com" aria-label="Correo">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 mb-1">
                                            <label class="col-form-label font-weight-bold">Departamento: </label>
                                        </div>
                                        <div class="col-lg-9 mb-1">
                                            <select class="form-control" id="depto">
                                                <option>Informática</option>
                                                <option>Matemáticas</option>
                                                <option>Cómputo</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-9"></div>
                                        <div class="col-lg-3 text-align-right">
                                            <button class="btn btn-primary w-100 aling-self-center mt-2 mb-3 ml-5">Actualizar</button>
                                        </div>
                                    </div>
                                </form>    
                            </div>
                        </section>
                        <!-- FIN FORMULARIO EDICION-->
                        
                        <!-- SECCION DE ACCESOS RAPIDOS -->
                        <section class="container bg-grey">
                            <div class="row">
                                <div class="col-lg-12 py-3">
                                    <h3>Accesos Rápidos</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title font-weight-bold">Reestablecer contraseña</h5>
                                            <p class="card-text text-muted">Se reestablecerá la contraseña eliminando la actual. Tenga en cuenta que esta opción es sólo en caso de que el profesor no tenga acceso al correo con el que se registró y que tenga problemas para recuperarla él mismo.</p>
                                            <button type="button" class="btn btn-primary w-100 text-align-right">Reestablecer</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title font-weight-bold">Asignar grupo</h5>
                                            <p class="card-text text-muted">Crear y asignar un grupo nuevo a este profesor.</p>
                                            <select class="form-control" id="curso">
                                                <option>2422 Curso Páginas Web</option>
                                                <option>2523 Iniciación al Cómputo </option>
                                                <option>2624 Excel Financiero</option>
                                            </select>
                                            <a href="./nueva-asignacion">
                                            <button type="button" class="btn btn-primary w-100 mt-4 mb-2 text-align-right">Crear</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- FIN DE SECCION ACCESOS RAPIDOS -->

                        <!--INICIA SECCION HISTORIAL DE GRUPOS ASOCIADOS-->
                        <section class="container bg-grey">
                            <div class="row">
                                <div class="col-sm-12 py-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="mx-auto">
                                                <div class="row">
                                                    <div class="col-lg-9">
                                                        <h3>Historial de grupos asociados a este profesor</h3>
                                                    </div>
                                                    <div class="col-lg-3">
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
                                                    <div class="col-lg-12">
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- FIN SECCION HISTORIAL DE GRUPOS ASOCIADOS-->
                    </div>
                    <!--FIN contenido dinamico-->
                    <?php include("./view/includes/footer.php");?>
                </div>
            </div>
        </div>
        <!-- script_js -->
    </body>
</html>