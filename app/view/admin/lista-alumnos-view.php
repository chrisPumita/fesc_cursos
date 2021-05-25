<!doctype html>
<html lang="en">
    <?php
    //Abrir para agregar los includes
    $tittle = "Cursos registrados";
    include("./view/includes/header.php");
    ?>
    <body class="body-home">
    <!-- Cargando modal de historial cursos -->
    <!-- <?php include_once "./modal-historial-cursos";?> -->
        <div class="d-flex">
            <?php include("./view/includes/admin-menupc.php"); ?>
            <div class="w-100">
                <?php include("./view/includes/admin-menutel.php"); ?>
                <div id="content">
                    <!--Inicio contenido dinamico-->
                    <div class="componet-dinamico bg-grey">
                        <!--INICIA ENCABEZADO DE DETALLES-->
                        <section class="container py-3 bg-grey">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="font-weight-bold mb-0">Alumnos Registrados</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="callout callout-second">
                                        <h4>Administrar Alumnos</h4>
                                        En este panel se puede ver una lista de todos los alumnos registrados en el sistema.
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- FIN ENCABEZADO DE DETALLES-->

                        <!--INICIA SECCION DE HISTORIAL DE CURSOS EN EL SISTEMA-->
                        <section class="container py-3 bg-grey">
                            <div class="row">
                                <div class="col-lg-12 overflow-auto">
                                    <table class="table table-striped bg-light">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Matricula</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Teléfono</th>
                                                <th scope="col">Correo</th>
                                                <th scope="col">Procedencia</th>
                                                <th scope="col">Carrera</th>
                                                <th scope="col">Cuenta</th>
                                                <th scope="col">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>316344483</td>
                                                <td>Jennifer Morales Rosas</td>
                                                <td>5510801569</td>
                                                <td>jeni@correo.com</td>
                                                <td>Comunidad FESC</td>
                                                <td>Contabilidad</td>
                                                <td>Verificada</td>
                                                <td> <!-- BOTON ACCIONES -->
                                                    <div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                            <a href="./detalles-alumno">
                                                            <button class="dropdown-item" type="button">Ver Detalles</button>
                                                            </a>                                     
                                                            <a href="">
                                                                <button class="dropdown-item" type="button" data-toggle='modal' data-target='modal-historial-cursos.php'>Ver Historial</button>
                                                            </a>
                                                            <button class="dropdown-item" type="button">Editar datos</button>
                                                            <button class="dropdown-item" type="button">Acreditar Cuenta</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>316344543</td>
                                                <td>Javier Mora Perez</td>
                                                <td>5513245690</td>
                                                <td>morape@correo.com</td>
                                                <td>Comunidad Externo - IPN</td>
                                                <td>Aeronaútica</td>
                                                <td>N/A</td>
                                                <td> <!-- BOTON ACCIONES -->
                                                    <div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                            <a href="./detalles-alumno">
                                                            <button class="dropdown-item" type="button">Ver Detalles</button>
                                                            </a>                                     
                                                            <a href="">
                                                                <button class="dropdown-item" type="button" data-toggle='modal' data-target='modal-historial-cursos.php'>Ver Historial</button>
                                                            </a>
                                                            <button class="dropdown-item" type="button">Editar datos</button>
                                                            <button class="dropdown-item" type="button">Acreditar Cuenta</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>316344483</td>
                                                <td>Edwin Fernandez Bodet</td>
                                                <td>5529408786</td>
                                                <td>eddBod@correo.com</td>
                                                <td>Comunidad FESC</td>
                                                <td>Informática</td>
                                                <td>Verificada</td>
                                                <td> <!-- BOTON ACCIONES -->
                                                    <div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                            <a href="./detalles-alumno">
                                                            <button class="dropdown-item" type="button">Ver Detalles</button>
                                                            </a>                                     
                                                            <a href="">
                                                                <button class="dropdown-item" type="button" data-toggle='modal' data-target='modal-historial-cursos.php'>Ver Historial</button>
                                                            </a>
                                                            <button class="dropdown-item" type="button">Editar datos</button>
                                                            <button class="dropdown-item" type="button">Acreditar Cuenta</button>
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
                        <!-- FIN SECCION CURSOS ACTUALES -->

                    </div>
                    <!--FIN contenido dinamico-->
                    <?php include("./view/includes/footer.php");?>
                </div>
            </div>
        </div>
        <!-- script_js -->
    </body>
</html>