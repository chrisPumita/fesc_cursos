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
                                                    <a href="#" data-toggle="modal" data-target="#nuevoAdmin">
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
                                <div id="tbl-container" class="col-lg-12 overflow-auto table-responsive">
                                    <table class="table table-hover table-striped table-sm bg-light">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">No. Trabajador</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Cargo</th>
                                                <th scope="col">Departamento</th>
                                                <th scope="col">Correo Electrónico</th>
                                                <th scope="col">Fecha de Registro</th>
                                                <th scope="col">Estatus</th>
                                                <th scope="col">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbl-admin">
                                            <!-- ajax response -->
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
        <?php include "modal-nuevo-admin.php";?>
        <?php include "modal-verificacion-admin.php";?>
        <!-- script_js
            ../../ =====>1
            ./     =====>2
        -->
        <script src="./ajax/admin_ajax.js"></script>
        <script>
            let pagList = true;
        </script>
    </body>
</html>