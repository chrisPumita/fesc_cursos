<!doctype html>
<html lang="en">
    <?php
    //Abrir para agregar los includes
    $tittle = "Cursos registrados";
    include("./view/includes/header.php");
    ?>
    <body class="body-home">
        <div class="d-flex">
            <?php include("./view/includes/admin-menupc.php"); ?>
            <div class="w-100">
                <?php include("./view/includes/admin-menutel.php"); ?>
                <div id="content">
                    <!--Inicio contenido dinamico home
                    -->
                    <div class="componet-dinamico bg-grey">
                        <!--INICIA ENCABEZADO DE DETALLES-->
                        <section class="container py-3 bg-grey">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="font-weight-bold mb-0">Cursos</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="callout callout-second">
                                        <div class="container">
                                            <div class="row align-items-center justify-content-center">
                                                <div class="col-lg-9">
                                                    <h4>Crear Nuevo curso</h4>
                                                    En este panel puede crear un nuevo curso para que posteriormente pueda ser asignado a un profesor.
                                                </div>
                                                <div class="col-lg-3">
                                                    <a href="./nuevo-curso">
                                                        <button class="btn btn-primary w-100 m-3">Nuevo</button>
                                                    </a>
                                                </div>
                                                <!-- <div class="btn btn-primary w-100 col-lg-3 text-center">
                                                    <a href="./nuevo-curso">Nuevo</a>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- FIN ENCABEZADO DE DETALLES-->

                        <!--INICIA SECCION DE HISTORIAL DE CURSOS EN EL SISTEMA-->
                        <section class="container py-3 bg-grey">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3>Historial de Cursos en el sistema</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 overflow-auto table-responsive">
                                    <table class="table table-hover table-striped table-sm bg-light">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Clave</th>
                                            <th scope="col">Descripción</th>
                                            <th scope="col">Autor</th>
                                            <th scope="col">Sesiones</th>
                                            <th scope="col">Modalidad</th>
                                            <th scope="col">Temario</th>
                                            <th scope="col">Acciones</th>
                                        </tr>
                                        </thead>
                                        <tbody id="tbl-cursos">
                                        <!-- AJAX-->
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
        <script>
            var pagList= true;
            var filtro_curso = -1
        </script>
        <script src="./ajax/cursos_ajax.js"></script>
        <script src="./ajax/tools.js"></script>
        <!-- end script_js -->
    </body>
</html>