<!doctype html>
<html lang="en">

<?php
//Abrir para agregar los includes
$tittle = "Bienvenido al panel de administrador";
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
               <!--INICIA ENCABEZADO DETALLES USUARIO BIENVENIDA-->
                <section class="container py-3 bg-grey">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="font-weight-bold mb-0">Panel de Administración</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="callout callout-second">
                                <div class="contariner">
                                    <div class="row align-items-center justify-content-center">
                                        <div class="col-lg-9">
                                            <h4>Bienvenido Nombre Admin</h4>
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus voluptatum illum odio quos laudantium enim ratione cupiditate accusantium officia quisquam, similique fuga ipsa consequatur? Sequi, consequuntur unde! Enim, dolor deserunt!
                                        </div>
                                        <div class="col-lg-3">
                                            <a href="./lista-cursos">
                                                <button class="btn btn-primary w-100 aling-self-center m-3">Ver Cursos</button>
                                            </a>                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> 
                <!-- FIN ENCABEZADO DETALLES USUARIO BIENVENIDA -->

                <!--INICIA ESTADISTICAS-->
                <section class="container bg-grey">
                <div class="card bg-grey estadisticas">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="card">
                                    <div class="card-body img_bg_cards" style="background-image: url(./assets/img/icons/grado4.svg);">
                                        <div class="mx-auto">
                                            <h6 class="text-muted"></i><STrong>Cursos</STrong></h6>
                                            <!-- esto se trae con AJAX-->
                                            <h3 class="font-weight-bold" id="countCursos"></h3>
                                            <h6 class="text-success">Cursos activos</h6>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card">
                                    <div class="card-body img_bg_cards" style="background-image: url(./assets/img/icons/constancia4.svg);">
                                        <div class="mx-auto">

                                            <h6 class="text-muted"><strong>Constancias</strong></h6>
                                            <!-- esto se trae con AJAX-->
                                            <h3 class="font-weight-bold" id="countConstancias"></h3>
                                            <h6 class="text-warning">Por revisar y acreditar</h6>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card">
                                    <div class="card-body img_bg_cards" style="background-image: url(./assets/img/icons/inscripciones4.svg);">
                                        <div class="mx-auto">
                                            <h6 class="text-muted"><strong>Inscripciones</strong></h6>
                                            <!-- esto se trae con AJAX-->
                                            <h3 class="font-weight-bold" id="countInscripciones"></h3>
                                            <h6 class="text-warning">Pendientes de revisión</h6>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card">
                                    <div class="card-body img_bg_cards" style="background-image: url(./assets/img/icons/comunidad4.svg);">
                                        <div class="mx-auto">
                                            <h6 class="text-muted"><strong>Alumnos</strong></h6>
                                            <!-- esto se trae con AJAX-->
                                            <h3 class="font-weight-bold" id="countAlumnos"></h3>
                                            <h6 class="text-success">Registrados</h6>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- FIN SECCION  ESTADISTICAS-->

                <!--INICIA SECCION CURSOS ACTUALES-->
                    <section class="container bg-grey">
                            <div class="row">
                                <div class="col-lg-12 py-3">
                                    <h3>Grupos actuales</h3>
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
                                            <th scope="col">Estatus</th>
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

                <!--SECCION CURSOS REGISTRADOS ACTIVOS-->
                    <section class="container bg-grey">
                            <div class="row">
                                <div class="col-lg-12 py-3">
                                    <h3>Cursos Acreditados</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div id="tbl-containerCursos" class="col-lg-12 overflow-auto table-responsive">
                                    <table class="table table-hover table-striped table-sm bg-light">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Clave</th>
                                            <th scope="col">Descripción</th>
                                            <th scope="col">Autor</th>
                                            <th scope="col">Sesiones</th>
                                            <th scope="col">Modalidad</th>
                                            <th scope="col">Costo</th>
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
                                <div id="tbl-container2Cursos" class="col-lg-12 my-2">
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
                <!-- FIN SECCION CURSOS REGISTRADOS ACTIVOS -->

                <!-- INICIA SECCION DOCS PENDIENTES DE REVISION -->
                <section class="container bg-grey">
                            <div class="row">
                                <div class="col-lg-12 py-3">
                                    <h3>Documentos pendientes de revisión</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div id="tbl-containerDocs" class="col-lg-12 overflow-auto table-responsive">
                                    <table class="table table-hover table-striped table-sm bg-light">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Documento</th>
                                            <th scope="col">Alumno</th>
                                            <th scope="col">Inscripción</th>
                                            <th scope="col">Grupo</th>
                                            <th scope="col">Acciones</th>
                                        </tr>
                                        </thead>
                                        <tbody id="tbl-docs">
                                        <!-- AJAX-->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- PAGINADOR DE TABLA -->
                            <div class="row">
                                <div class="col-lg-12 my-2" id="tbl-container2Docs" >
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
                <!-- FIN SECCION DOC PENDIENTES DE REVISION -->

                <!-- SECCION DE ACCESOS RAPIDOS -->
                <section class="container bg-grey">
                        <div class="row">
                            <div class="col-lg-12 py-3">
                                <h3>Accesos Rápidos</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 my-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title font-weight-bold">Profesores</h5>
                                        <p class="card-text text-muted">En este apartado se pueden realizar distintas acciones de gestion para las cuentas de profesores.</p>
                                        <a href="#" data-toggle="modal" data-target="#nuevoProfesor">
                                            <button type="button" class="btn btn-primary btn-sm">Crear cuenta</button>  
                                        </a>                                                                              
                                        <a href="./lista-profesores">
                                            <button type="button" class="btn btn-primary btn-sm">Gestión de cuentas</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 my-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title font-weight-bold">Cuentas Administrativas</h5>
                                        <p class="card-text text-muted">Crear nueva cuenta administrativa para entrar al sistema de Administración.</p>
                                        <a href="./lista-cuentas">
                                            <button type="button" class="btn btn-primary btn-sm">Ir</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 my-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title font-weight-bold">Servicio Social</h5>
                                        <p class="card-text text-muted">Cree o gestiones cuentas de alumno de servicio social.</p>
                                        <button type="button" class="btn btn-primary btn-sm">Crear cuenta</button>
                                        <a href="#" data-toggle="modal" data-target="#listaServicio">
                                            <button type="button" class="btn btn-primary btn-sm">Ver Alumnos</button>
                                        </a>                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 my-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title font-weight-bold">Alumnos</h5>
                                        <p class="card-text text-muted">Buscar alumno para ver su situacion actual dentro del sistema de inscripción de cursos. Ingresar numero de cuenta registrado por el alumno.</p>
                                        <form class="form-inline position-relative my-2 d-inline-block w-100">
                                            <input class="form-control mr-sm-2" type="search" placeholder="Buscar alumno" aria-label="Search">
                                            <button class="btn btn-search position-relative posicion-btn" type="submit"><img src="./assets/img/icons/buscar1.svg" width="24px"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
                <!-- FIN DE SECCION ACCESOS RAPIDOS -->

                <section class="container bg-grey">
                        <div class="row">
                            <div class="col-lg-8 my-3">
                                <div class="card text-left">
                                    <!-- INICIO PRESENTACION IMAGENES SLIDER -->
                                    <div class="card-body" id="carusel_img">
                                        <h4 class="card-title">Cursos Recientes</h4>
                                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators" id="indicadores">
                                                <!--<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>-->
                                            </ol>
                                            <div class="carousel-inner" id="carruceles">
                                                <!--<div class="carousel-item active" >
                                                    <img src="https://www.diwebacademy.com/wp-content/uploads/2020/05/curso-online-de-excel-principiante-a-avanzado-diweb-academy.png" class="d-block w-100" alt="...">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h5>Excel Básico para contadores</h5>
                                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="https://i.ytimg.com/vi/a44MbhzNhOY/maxresdefault.jpg"  class="d-block w-100" alt="...">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h5>Principios basicos de MVC</h5>
                                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="https://kmmx.mx/wp-content/uploads/2020/04/Curso-de-Prototipado-y-UX-UI-Design-con-Adobe-XD.png"  alt="..." class="d-block w-100" alt="...">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h5>Introduccion a Adobe XD</h5>
                                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                                    </div>
                                                </div>-->
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Anterior</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Siguiente</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- FIN PRESENTACION IMAGENES SLIDER -->
                                </div>
                            </div>

                            <!-- INICIO SECCION PAGOS RECIENTES -->
                            <div class="col-lg-4 my-3">
                                <div class="card rounded-0">
                                    <div class="card-header bg-ligth">
                                        <h6 class="font-weight-bold mb-0">Pagos recientes</h6>
                                    </div>

                                    <div class="card-body py-2" id="pagosrecientes">
                                        <!-- AJAX -->
                                    </div>
                                </div>
                            </div>
                            <!-- FIN SECCION PAGOS RECIENTES  -->
                        </div>
                </section>
            </div>
            <!--FIN contenido dinamico-->
            <?php include("./view/includes/footer.php");?>
        </div>
    </div>
</div>
<script language="javascript" type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.min.js"></script>
<script>
    var pagList = true;
    var filtro_curso = 1;
</script>
<script src="./ajax/cursos_ajax.js"></script>
<script src="./ajax/grupos_ajax.js"></script>
<script src="./ajax/home_ajax.js"></script>
<script src="./ajax/tools.js"></script>
<?php include "modal-nuevo-profesor.php";?>
<?php include "modal-lista-servicio.php";?>
<?php include "modal-historico-curso.php";?>
<?php include "modal-nuevo-grupo.php";?>
<?php include "modal-ver-horario.php";?>
<?php include "modal-ver-solicitudes.php";?>
<!-- script_js -->
</body>
</html>