<!doctype html>
<html lang="en">
    <?php
        //Abrir para agregar los includes
        $tittle = "Cuentas";
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
                                    <h2 class="font-weight-bold mb-0">Panel de Cuentas de Administradores</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="callout callout-second">
                                        <div class="contariner">
                                            <div class="row align-items-center justify-content-center">
                                                <div class="col-lg-9">
                                                    <h4>Asignar un nuevo Administrador</h4>
                                                    En este apartado puede asignar los permisos necesarios para un nuevo administrador.
                                                </div>
                                                <div class="col-lg-3">
                                                    <a href="#" data-toggle="modal" data-target="#mod-new-admin">
                                                        <button class="btn btn-primary w-100 m-3">Nuevo</button>
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
                                    <h3>Listado de Administradores del Sistema</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 overflow-auto">
                                    <table class="table table-striped bg-light">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">No. Trabajador</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Cargo</th>
                                                <th scope="col">Departamento</th>
                                                <th scope="col">Correo Electrónico</th>
                                                <th scope="col">Fecha de Registro</th>
                                                <th scope="col">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>213541849</td>
                                                <td>Claudia Cruz Sánchez</td>
                                                <td>Jefa del Departamento de Cómputo</td>
                                                <td>Cómputo</td>
                                                <td>ccs@gmail.com</td>
                                                <td>02-01-2021</td>
                                                <td>
                                                    <!-- BOTON ACCIONES -->
                                                    <div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Opciones
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                            <button class="dropdown-item" type="button">Ver Detalles</button>
                                                            <button class="dropdown-item" type="button">Inhabilitar</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>213879471</td>
                                                <td>Juan Martínez Valdez</td>
                                                <td>Docente</td>
                                                <td>Informática</td>
                                                <td>jmv@gmail.com</td>
                                                <td>12-02-2021</td>
                                                <td>
                                                    <!-- BOTON ACCIONES -->
                                                    <div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Opciones
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                            <button class="dropdown-item" type="button">Ver Detalles</button>
                                                            <button class="dropdown-item" type="button">Inhabilitar</button>
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
                    <?php include("./view/includes/footer.php");?>
                </div>
            </div>
        </div>
        <!-- script_js -->
    </body>
</html>