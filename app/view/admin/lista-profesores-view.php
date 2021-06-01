<!doctype html>
<html lang="en">
    <?php
        //Abrir para agregar los includes
        $tittle = "Profesores";
        include("./view/includes/header.php");
        ?>
    <body class="body-home">
    <?php include_once ("./admin/modal-asignaciones-profesor.php");?>
    <?php include_once "./modal-nuevo-profesor.php";?>
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
                                    <h2 class="font-weight-bold mb-0">Profesores</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="callout callout-second">
                                        <div class="contariner">
                                            <div class="row align-items-center justify-content-center">
                                                <div class="col-lg-9">
                                                    <h4>Crear una nueva cuenta de profesor</h4>
                                                    En este apartado puede crear cuentas de profesores y/o autorizar las cuentas generadas a partir del formulario.
                                                    Revise la información y asegurese de verificar bien los datos de las solicitudes.
                                                </div>
                                                <div class="col-lg-3">
                                                    <a href="#" data-toggle="modal" data-target="#nuevo-prof">
                                                    <button class="btn btn-primary w-100 m-3">Nuevo</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container bg-white">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-lg-1">
                                        <i class="icon ion-md-mail paleta ml-2"></i>
                                    </div>
                                    <div class="col-lg-5">
                                        <h4 class="mt-3">Envíar invitación de registro</h4>
                                        <p>Envíe la invitación al profesor, para que éste pueda registrarse en el sistema.</p>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" placeholder="ejemplo@dominio.com" aria-label="Correo">
                                    </div>
                                    <div class="col-lg-2">
                                        <button class="btn btn-primary w-100 mr-3 mt-3 mb-3">Envíar</button>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- FIN ENCABEZADO DE DETALLES-->
                        <!--INICIA SECCION DE LISTA PROFESORES-->
                        <section class="container py-2 bg-grey">
                            <div class="row">
                                <div class="col-lg-12 py-3">
                                    <h3>Listado de profesores registrados en el sistema</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 overflow-auto">
                                    <table class="table table-striped bg-light">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">No.</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Departamento</th>
                                                <th scope="col">Teléfono</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Registro</th>
                                                <th scope="col">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>123</td>
                                                <td>Juan Pérez Sánchez</td>
                                                <td>Informática</td>
                                                <td>5563258917</td>
                                                <td>juan@gmail.com</td>
                                                <td>--------</td>
                                                <td>
                                                    <!-- BOTON ACCIONES -->
                                                    <div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Opciones
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                            <button class="dropdown-item" type="button" data-toggle='modal' data-target='#modal2'>Ver Asignaciones</button>                                       
                                                            <a href="./detalles-profesor">
                                                            <button class="dropdown-item" type="button">Ver Detalles</button>
                                                            </a>
                                                            <button class="dropdown-item" type="button">Reestablecer contraseña</button>
                                                            <button class="dropdown-item" type="button">Inhabilitar</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>456</td>
                                                <td>Roberto Gomez Ramírez</td>
                                                <td>Matemáticas</td>
                                                <td>5589367405</td>
                                                <td>roberto@gmail.com</td>
                                                <td>--------</td>
                                                <!-- BOTON ACCIONES -->
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Opciones
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                            <a href="#" data-toggle="modal" data-target="#mod-asig-prof">
                                                            <button class="dropdown-item" type="button">Ver Asignaciones</button>                               
                                                            </a>
                                                            <a href="./detalles-profesor">
                                                            <button class="dropdown-item" type="button">Ver Detalles</button>
                                                            </a>
                                                            <button class="dropdown-item" type="button">Reestablecer contraseña</button>
                                                            <button class="dropdown-item" type="button">Inhabilitar</button>
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
                        <!-- FIN SECCION LISTA PROFESORES-->
                    </div>
                    <!--FIN contenido dinamico-->
                    <?php include("./view/includes/footer.php");?>
                </div>
            </div>
        </div>
        <!-- script_js -->
    </body>
</html>