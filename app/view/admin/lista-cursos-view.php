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
                                                <th scope="col">No. Curso</th>
                                                <th scope="col">Descripción</th>
                                                <th scope="col">Autor</th>
                                                <th scope="col">Sesiones</th>
                                                <th scope="col">Cupo</th>
                                                <th scope="col">Costo</th>
                                                <th scope="col">Fecha de creación</th>
                                                <th scope="col">Estado</th>
                                                <th scope="col">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>123</td>
                                                <td>Desarrollo Arduino</td>
                                                <td>Prof. Juan Pérez Sánchez</td>
                                                <td>15</td>
                                                <td>20</td>
                                                <td>$1300</td>
                                                <td>5 de Mayo del 2019</td>
                                                <td>Acreditado</td>
                                                <td> <!-- BOTON ACCIONES -->
                                                    <div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Opciones
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                            <a href="./detalles-curso">
                                                                <button class="dropdown-item" type="button">Ver Detalles</button>
                                                            </a>                                        
                                                            <button class="dropdown-item" type="button">Editar</button>
                                                            <button class="dropdown-item" type="button">Acreditar Curso</button>
                                                            <a href="./nueva-asignacion">
                                                                <button class="dropdown-item" type="button">Nuevo Grupo</button> 
                                                            </a>                                                                                                                       
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>155</td>
                                                <td>Publicidad en Redes Sociales</td>
                                                <td>Lic. Roberto Gomez Ramírez</td>
                                                <td>15</td>
                                                <td>20</td>
                                                <td>$980</td>
                                                <td>03 de Febrero de 2018</td>
                                                <td>Por acreditar</td>
                                                <td> <!-- BOTON ACCIONES -->
                                                    <div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Opciones
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                            <a href="./detalles-curso">
                                                                <button class="dropdown-item" type="button">Ver Detalles</button>
                                                            </a>                                        
                                                            <button class="dropdown-item" type="button">Editar</button>
                                                            <button class="dropdown-item" type="button">Acreditar Curso</button>
                                                            <a href="./nueva-asignacion">
                                                                <button class="dropdown-item" type="button">Nuevo Grupo</button> 
                                                            </a> 
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>4032</td>
                                                <td>Finanzas con Excel</td>
                                                <td>Mauricio Álvarez Beltrán</td>
                                                <td>15</td>
                                                <td>20</td>
                                                <td>$1200</td>
                                                <td>01 Enero de 2021</td>
                                                <td>Inhabilitado</td>
                                                <!-- BOTON ACCIONES -->
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Opciones
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                            <a href="./detalles-curso">
                                                                <button class="dropdown-item" type="button">Ver Detalles</button>
                                                            </a>
                                                            <button class="dropdown-item" type="button">Editar</button>
                                                            <button class="dropdown-item" type="button">Acreditar Curso</button>
                                                            <a href="./nueva-asignacion">
                                                                <button class="dropdown-item" type="button">Nuevo Grupo</button> 
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