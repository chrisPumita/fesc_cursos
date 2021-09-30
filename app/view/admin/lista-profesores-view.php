<!doctype html>
<html lang="en">
    <?php
        //Abrir para agregar los includes
        $tittle = "Profesores";
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
                        <!--INICIA ENCABEZADO DE DETALLES-->
                        <section class="container py-3 bg-grey">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="font-weight-bold mb-0">Profesores</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div  class="col-lg-12">
                                    <div class="callout callout-second">
                                        <div class="contariner">
                                            <div class="row align-items-center justify-content-center">
                                                <div class="col-lg-9">
                                                    <h4>Crear una nueva cuenta de profesor</h4>
                                                    En este apartado puede crear cuentas de profesores y/o autorizar las cuentas generadas a partir del formulario.
                                                    Revise la información y asegurese de verificar bien los datos de las solicitudes.
                                                </div>
                                                <div class="col-lg-3">
                                                    <a href="#" data-toggle="modal" data-target="#nuevoProfesor">
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
                                        <img src="./assets/img/icons/mail4.svg" width="90px">
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
                                <div id="tbl-container" class="col-lg-12 overflow-auto table-responsive">
                                    <table class="table table-hover table-striped table-sm bg-light">                                    
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">No.</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Departamento</th>
                                                <th scope="col">Teléfono</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Registro</th>
                                                <th scope="col">Estatus</th>
                                                <th scope="col">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbl-prof">
                                            <!-- ajax-->
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
        <script language="javascript" type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.min.js"></script>
        <?php include "modal-asignaciones-profesor.php";?>
        <?php include "modal-nuevo-profesor.php";?>
        <!-- ACEPTADOS script_js -->
        <script src="./ajax_response/profesores.js"></script>
        <!-- script_js -->


        <script src="./ajax/profesor_ajax.js"></script>
        <script src="./ajax/validar-form.js"></script>
        <script src="./ajax/tools.js"></script>
        <script>
            let pagList = true;
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            })
        </script>
    </body>
</html>