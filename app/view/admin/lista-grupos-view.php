<!doctype html>
<html lang="en">
    <?php
        //Abrir para agregar los includes
        $tittle = "Grupos";
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
                        <!--INICIA SECCION GRUPOS ACTUALES-->
                        <section class="container py-3 bg-grey">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2><strong>Grupos Activos Actualmente</strong></h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="callout callout-second">
                                        <div class="contariner">
                                            <div class="row align-items-center justify-content-center">
                                                <div class="col-lg-9">
                                                    <h4>Crear nuevo grupo</h4>
                                                    Para crear un nuevo grupo debe ir primero a la sección de cursos, desde ese apartado puede crearlo.
                                                </div>
                                                <div class="col-lg-3">
                                                    <a href="./lista-cursos">
                                                        <button class="btn btn-primary w-100 m-3">Ver Cursos</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div id="tbl-containerGrupos" class="col-lg-12 overflow-auto table-responsive">
                                    <table class="table table-hover table-striped table-sm bg-light">
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
                                        <tbody id="tbl-grupos">
                                        <!-- AJAX -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- PAGINADOR DE TABLA -->
                            <div class="row">
                                <div class="col-lg-12 my-2" id="tbl-container2Grupos">
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
        <?php include "modal-ver-solicitudes.php";?>
        <?php include "modal-ver-horario.php";?>
        <!-- script_js -->
    </body>
</html>