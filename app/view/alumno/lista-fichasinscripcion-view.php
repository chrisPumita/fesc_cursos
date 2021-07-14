<!doctype html>
<html lang="en">
    <?php
        //Abrir para agregar los includes
        $tittle = "Mis Constancias";
        include("./view/includes/header.php");
    ?>
    <body class="body-home">
        <div class="d-flex">
            <div class="w-100">
                <?php include("./view/includes/alumno-navbar.php"); ?>
                <div id="content">
                    <!--Inicio contenido dinamico-->
                    <div class="componet-dinamico bg-grey">
                        <!--INICIA ENCABEZADO-->
                        <section class="container py-3 bg-grey">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="font-weight-bold mb-0">Mis Inscripciones</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="callout callout-second">
                                        <div class="container">
                                            <div class="row align-items-center justify-content-center">
                                                <div class="col-lg-2">
                                                    <img src="./assets/img/icons/profile-user2.svg" alt="">
                                                </div>
                                                <div class="col-lg-10">
                                                    <h4><strong>Ficha de Inscripción</strong></h4>
                                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus voluptatum illum odio quos laudantium enim ratione cupiditate accusantium officia quisquam, similique fuga ipsa consequatur? Sequi, consequuntur unde! Enim, dolor deserunt!</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section> 
                        <!-- FINALIZA ENCABEZADO -->
                        <!--INICIA SECCIÓN DEL LISTADO DE CONSTANCIAS -->
                        <section class="container bg-grey">
                            <div class="row">
                                <div class="col-sm-12 mt-2 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="mx-auto">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <h3 class="mb-3">Fichas de Inscripción</h3>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div id="tbl-containerFichas" class="col-lg-12 overflow-auto table-responsive-lg">
                                                        <table class="table table-hover table-striped table-sm bg-light">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Grupo</th>
                                                                    <th scope="col">Curso</th>
                                                                    <th scope="col">Profesor</th>
                                                                    <th scope="col">Modalidad</th>
                                                                    <th scope="col">Calificación</th>
                                                                    <th scope="col">Opciones</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="tbl-fichas">
                                                                <tr>
                                                                    <th scope="row">1</th>
                                                                    <td>5110</td>
                                                                    <td>Curso Diseño UIX</td>
                                                                    <td>Juan Perez Sanchez</td>
                                                                    <td>Online</td>
                                                                    <td>10</td>
                                                                    <td>
                                                                        <!-- BOTON VER -->
                                                                        <div class="dropdown">
                                                                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            Ver
                                                                            </button>
                                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                                                <a href="#">
                                                                                    <button class="dropdown-item" type="button">Ficha de Incripción</button>
                                                                                </a>
                                                                                <a href="#">
                                                                                    <button class="dropdown-item" type="button">Detalles del curso</button>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">2</th>
                                                                    <td>5112</td>
                                                                    <td>Curso Excel Avanzado con Macros</td>
                                                                    <td>Alejandro Navarrete Perez</td>
                                                                    <td>Presencial</td>
                                                                    <td>8</td>
                                                                    <td>
                                                                        <!-- BOTON VER -->
                                                                        <div class="dropdown">
                                                                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            Ver    
                                                                            </button>
                                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                                                <a href="#">
                                                                                    <button class="dropdown-item" type="button">Ficha de Incripción</button>
                                                                                </a>
                                                                                <a href="#">
                                                                                    <button class="dropdown-item" type="button">Detalles del curso</button>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">3</th>
                                                                    <td>5114</td>
                                                                    <td>Iniciación al Cómputo I</td>
                                                                    <td>Ana Gabriela Guevara Espinoza</td>
                                                                    <td>Mixto</td>
                                                                    <td>7</td>
                                                                    <td>
                                                                        <!-- BOTON VER -->
                                                                        <div class="dropdown">
                                                                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            Ver    
                                                                            </button>
                                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                                                <a href="#">
                                                                                    <button class="dropdown-item" type="button">Ficha de Incripción</button>
                                                                                </a>
                                                                                <a href="#">
                                                                                    <button class="dropdown-item" type="button">Detalles del curso</button>
                                                                                </a>
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
                                                    <div class="col-lg-12" id="tbl-container2Fichas">
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
                        <!--FINALIZA SECCIÓN DEL LISTADO DE CONSTANCIAS-->
                    </div>
                    <!--FIN contenido dinamico-->
                    <?php include("./view/includes/footer.php");?>
                </div>
            </div>
        </div>
        <!-- script_js -->
    </body>
</html>