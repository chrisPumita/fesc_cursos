<!doctype html>
<html lang="en">
    <?php
        //Abrir para agregar los includes
        $tittle = "Asignaciones de Grupos";
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
                        <!--INICIA SECCION DE ENCABEZADO-->
                        <section class="container py-3 bg-grey">
                            <div class="row">
                                <div class="col-lg-12">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                            <li class="breadcrumb-item"><a href="#">Cursos</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Asignaciones de Grupos</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2><strong>Panel del Historial de Asignaciones de Grupos</strong></h2>
                                </div>
                            </div>
                        </section>
                        <!--FINALIZA SECCION DE ENCABEZADO-->
                        <!--INICIA SECCION DE TABLA-->
                        <section class="container py-2 bg-grey">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card mt-2">
                                        <div class="card-body">
                                            <div class="mx-auto">
                                                <div class="row p-3">
                                                    <div class="col-lg-9">
                                                        <h5><strong>Listado de Asignaciones de Grupos</strong></h5>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <select class="form-control" id="sel1">
                                                                <option>Todos</option>
                                                                <option>Acivos</option>
                                                                <option>Concluidos</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 overflow-auto">
                                                        <table class="table table-striped bg-light table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Grupo</th>
                                                                    <th scope="col">Profesor</th>
                                                                    <th scope="col">Generación</th>
                                                                    <th scope="col">Semestre</th>
                                                                    <th scope="col">Campo</th>
                                                                    <th scope="col">Fecha de Inicio</th>
                                                                    <th scope="col">Fecha de Termino</th>
                                                                    <th scope="col">Cupo</th>
                                                                    <th scope="col">Costo</th>
                                                                    <th scope="col">Descuento</th>
                                                                    <th scope="col">Modalidad</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">1</th>
                                                                    <td>2158</td>
                                                                    <td>Juan Pérez Sánchez</td>
                                                                    <td>5°</td>
                                                                    <td>2021-II</td>
                                                                    <td>1</td>
                                                                    <td>31-01-2021</td>
                                                                    <td>20-06-2021</td>
                                                                    <td>30</td>
                                                                    <td>$950</td>
                                                                    <td>$500</td>
                                                                    <td>Mixto</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">2</th>
                                                                    <td>2159</td>
                                                                    <td>Juana Peralta Suárez</td>
                                                                    <td>7°</td>
                                                                    <td>2021-II</td>
                                                                    <td>4</td>
                                                                    <td>31-01-2021</td>
                                                                    <td>20-06-2021</td>
                                                                    <td>40</td>
                                                                    <td>$950</td>
                                                                    <td>$500</td>
                                                                    <td>Online</td>
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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