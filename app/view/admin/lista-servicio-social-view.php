<!doctype html>
<html lang="en">
    <?php
        //Abrir para agregar los includes
        $tittle = "Servicio Social";
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
                        <!--INICIA SECCIÓN DE ENCABEZADO DE DETALLES-->
                        <section class="container py-3 bg-grey">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="font-weight-bold mb-0">Panel de Cuentas de Servicio Social</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="callout callout-second">
                                        <div class="contariner">
                                            <div class="row align-items-center justify-content-center">
                                                <div class="col-lg-9">
                                                    <h4>Crear nueva cuenta de Servicio Social</h4>
                                                    En este apartado puede asignar los permisos necesarios para dar de alta a un alumno perteneciente al servicio social.
                                                </div>
                                                <div class="col-lg-3">
                                                    <a href="#" data-toggle="modal" data-target="#addAlumnoServSocial">
                                                        <button class="btn btn-primary w-100 m-3">Crear</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--FINALIZA SECCIÓN DE ENCABEZADO DE DETALLES-->
                        <!--INICIA SECCION DE TABLA-->
                        <section class="container py-2 bg-grey">
                            <div class="row">
                                <div class="col-lg-12 py-3">
                                    <h3>Listado de alumnos con cuenta de Servicio Social</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div id="tbl-container" class="col-lg-12 overflow-auto table-responsive">
                                    <table class="table table-hover table-striped table-sm bg-light">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">No. Cuenta</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Teléfono</th>
                                                <th scope="col">Correo Electrónico</th>
                                                <th scope="col">Carrera</th>
                                                <th scope="col">Fecha de Alta</th>
                                                <th scope="col">Fecha de Inicio</th>
                                                <th scope="col">Fecha de Término</th>
                                                <th scope="col">Notas</th>
                                                <th scope="col">Estatus</th>
                                                <th scope="col">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbl-servicio">
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>315497296</td>
                                                <td>Diana Martínez Flores</td>
                                                <td>5678941282</td>
                                                <td>diana@gmail.com</td>
                                                <td>Informática</td>
                                                <td>05-01-2021</td>
                                                <td>05-01-2021</td>
                                                <td>05-06-2021</td>
                                                <td></td>
                                                <td>Activo</td>
                                                <td>
                                                    <!-- BOTON ACCIONES -->
                                                    <div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Opciones
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                            <a href="./detalles-alumno">
                                                                <button class="dropdown-item" type="button">Ver Detalles</button>
                                                            </a>
                                                            <button class="dropdown-item" type="button">Terminar</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>312057793</td>
                                                <td>Armando García López</td>
                                                <td>5501258771</td>
                                                <td>armando@gmail.com</td>
                                                <td>Administración</td>
                                                <td>06-01-2021</td>
                                                <td>06-01-2021</td>
                                                <td>06-06-2021</td>
                                                <td></td>
                                                <td>Activo</td>
                                                <td>
                                                    <!-- BOTON ACCIONES -->
                                                    <div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Opciones
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                            <a href="./detalles-alumno">
                                                                <button class="dropdown-item" type="button">Ver Detalles</button>
                                                            </a>
                                                            <button class="dropdown-item" type="button">Terminar</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>417894561</td>
                                                <td>Leticia Vega Ramírez</td>
                                                <td>5678941058</td>
                                                <td>leticia@gmail.com</td>
                                                <td>Contaduría</td>
                                                <td>07-01-2021</td>
                                                <td>07-01-2021</td>
                                                <td>07-06-2021</td>
                                                <td></td>
                                                <td>Activo</td>
                                                <td>
                                                    <!-- BOTON ACCIONES -->
                                                    <div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Opciones
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                            <a href="./detalles-alumno">
                                                                <button class="dropdown-item" type="button">Ver Detalles</button>
                                                            </a>
                                                            <button class="dropdown-item" type="button">Terminar</button>
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
                        </section>
                        <!--FINALIZA SECCION DE TABLA-->
                    </div>
                    <!--FIN contenido dinamico-->
                    <?php include("./view/includes/footer.php"); ?>
                </div>
            </div>
        </div>
        <?php include "modal-asignarservsocial-alumno.php"; ?>
        <?php include "modal-verificacion-admin.php";?>
    </body>
</html>