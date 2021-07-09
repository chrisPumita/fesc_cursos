<?php
    if (!isset($_POST['id_curso'])){
        header('Location: ./lista-cursos');
    }
    $id_curso = $_POST['id_curso'];
?>
<!doctype html>
<html lang="en">
    <?php
        //Abrir para agregar los includes
        $tittle = "Detalle del curso";
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
                        <!-- INICIA ENCABEZADO CON ESTADISTICAS -->
                        <section class="container py-2 bg-grey">
                            <div class="row">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb bg-grey">
                                        <li class="breadcrumb-item"><a href="./home">Inicio</a></li>
                                        <li class="breadcrumb-item"><a href="./lista-cursos">Cursos</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Detalles</li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="row">
                                <div class="col-lg-9 py-2">
                                    <!-- id a cargar -->
                                    <input type="hidden" id="id_curso" value="<?php echo $id_curso?>">
                                    <span id="nombreCursoTitulo"></span>
                                </div>
                            </div>
                            <!--INICIA ESTADISTICAS-->
                            <div class="card bg-grey estadisticas">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="mx-auto">
                                                        <i class="icon ion-md-rocket mr-1 position-absolute paleta"></i>
                                                        <h6 class="text-muted"></i><STrong>Grupos</STrong></h6>
                                                        <h3 class="font-weight-bold">3</h3>
                                                        <h6 class="text-warning">Activos</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="mx-auto">
                                                        <i class="icon ion-md-checkmark mr-1 position-absolute paleta"></i>
                                                        <h6 class="text-muted"><strong>Constancias</strong></h6>
                                                        <h3 class="font-weight-bold">45</h3>
                                                        <h6 class="text-warning">Revisadas</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="mx-auto">
                                                        <i class="icon ion-md-stats mr-1 position-absolute paleta"></i>
                                                        <h6 class="text-muted"><strong>Inscripciones</strong></h6>
                                                        <h3 class="font-weight-bold">17</h3>
                                                        <h6 class="text-warning">Activas</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="mx-auto">
                                                        <i class="icon ion-md-contacts mr-1 position-absolute paleta"></i>
                                                        <h6 class="text-muted"><strong>Alumnos</strong></h6>
                                                        <h3 class="font-weight-bold">8</h3>
                                                        <h6 class="text-success">Inscritos en este curso</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- FIN ESTADISTICAS-->
                        </section>
                        <!-- FIN ENCABEZADO CON ESTADISTICAS -->
                        
                        <!-- INICIA SECCION INFO DEL CURSO -->
                        <section class="container bg-grey">
                            <div class="row">
                                <div class="card bg-grey estadisticas">
                                    <div class="card-body py-1">
                                        <div class="row">
                                            <!-- DETALLE DEL CURSO CALLOUT -->
                                            <div class="col-lg-12">
                                                <div class="callout callout-second">
                                                    <h4>Descripcion del curso</h4>
                                                    <span id="detallesCurso"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <!-- TARJETA DE INFO DEL CURSO -->
                                            <div class="col-sm-6 py-2">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="mx-auto">
                                                            <div>
                                                                <h6><strong>Creado por: </strong></h6>
                                                                <p><strong><span id="nombreAutor"></strong></span></p>
                                                                <h6><strong>Registrado desde: </strong><span id="fechaCreacion"></span></h6>
                                                                <p></p>
                                                            </div>
                                                            <div class="px-1">
                                                                <div id="accordion">
                                                                    <div class="card">
                                                                        <div class="card-header collapsed" id="headingOne"  data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                                            <h5 class="mb-0">
                                                                                <button class="btn text-primary ">
                                                                                    Detalles
                                                                                </button>
                                                                            </h5>
                                                                        </div>
                                                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                                                            <div class="card-body">
                                                                                <h6><strong>Dirigido a: </strong> <span id="dirigido_a"></span></h6>
                                                                                <h6><strong>Tipo: </strong> <span id="modalidad"></span></h6>
                                                                                <h6><strong>Cupo: </strong>30</h6>
                                                                                <h6><strong>Sesiones: </strong> 20</h6>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card">
                                                                        <div class="card-header collapsed" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                            <h5 class="mb-0">
                                                                                <button class="btn text-primary" >
                                                                                Objetivo
                                                                                </button>
                                                                            </h5>
                                                                        </div>
                                                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                                                            <div class="card-body">
                                                                                <span id="objetivo"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card">
                                                                        <div class="card-header collapsed" id="headingThree"  data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                            <h5 class="mb-0">
                                                                                <button class="btn text-primary">
                                                                                Antecedentes
                                                                                </button>
                                                                            </h5>
                                                                        </div>
                                                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                                                            <div class="card-body">
                                                                                <span id="antecedentes"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mx-auto py-2">
                                                            <!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalUpdateInfroCurso">
                                                                Editar información
                                                            </button>
                                                            <hr>
                                                            <h6><strong>PDF del temario descargable</strong></h6>
                                                            <div class="row">
                                                                <div class="col-md-4" id="filePDF">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <a href="#" class="btn btn-primary btn-block"><i class="icon ion-md-cloud"></i> Subir</a>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modalPDF"><i class="icon ion-md-eye"></i> Ver</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- TARJETA DE BANNER -->
                                            <div class="col-sm-6 py-2">
                                                <div class="">
                                                    <div class="card">
                                                        <span id="imgContainer"></span>
                                                        <div class="card-body">
                                                            <h6 class="card-title"><strong>Imagen del Banner</strong></h6>
                                                            <p class="card-text py-1">Debe tener una resolución de 600px por 300px</p>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <a href="#" class="btn btn-primary btn-block"><i class="icon ion-md-refresh"></i> Cambiar</a>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <a href="#"><button type="button" class="btn btn-warning btn-sec btn-block">Quitar</button></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- INICIO TARJETA DETALLES APROBACION -->
                                                <div class="row">
                                                    <div class="container">
                                                        <div class="">
                                                            <div class="callout callout-primary">
                                                                <div id="detallesAprobacionCurso">
                                                                <!-- ajax response -->
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- FIN TARJETA DETALLES APROBACION -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- INICIA TABLA DE TEMARIO -->
                        <section class="container bg-grey">
                            <div class="row">
                                <div class="col-sm-12 py-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="mx-auto">
                                                <div class="row p-3">
                                                    <div class="col-lg-9">
                                                        <h3>Temario General del Curso</h3>
                                                    </div>
                                                    <div class="col-lg-3">
                                                    <a href="#" data-toggle="modal" data-target="#editTema">
                                                        <button type="button" class="btn btn-primary btn-block">Nuevo</button>
                                                    </a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 overflow-auto">
                                                        <table class="table table-striped bg-light table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Índice</th>
                                                                    <th scope="col">Tema</th>
                                                                    <th scope="col">Descripción</th>
                                                                    <th scope="col">Acciones</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">1</th>
                                                                    <td>1.1</td>
                                                                    <td>Programación Orientada a Objetos</td>
                                                                    <td>--------------------------</td>
                                                                    <td>
                                                                        <!-- BOTON ACCIONES -->
                                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                                            <a href="#" data-toggle="modal" data-target="#editTema">
                                                                                <button type="button" class="btn btn-primary">Modificar</button>
                                                                            </a>                                                                            
                                                                            <button type="button" class="btn btn-danger">Eliminar</button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">2</th>
                                                                    <td>1.2</td>
                                                                    <td>Introducción al lenguaje de programación Python</td>
                                                                    <td>----------------------------</td>
                                                                    <!-- BOTON ACCIONES -->
                                                                    <td>
                                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                                            <a href="#" data-toggle="modal" data-target="#editTema">
                                                                                <button type="button" class="btn btn-primary">Modificar</button>
                                                                            </a> 
                                                                            <button type="button" class="btn btn-danger">Eliminar</button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <!-- para agregar en los horarios
                                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content" id="pills-tabContent">
                                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                                            <h1>HOLA</h1>
                                                        </div>
                                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                                            <h2>2</h2>
                                                        </div>
                                                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                                            <h3>3</h3>
                                                        </div>
                                                    </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- FIN TABLA TEMARIO -->

                        <!-- INICIA INFO DE GRUPOS -->
                        <section class="container bg-grey">
                            <!-- INICIA TARJETA ASIG GRUPO -->
                            <div class="row">
                                <div class="col-sm-12 py-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="mx-auto">
                                                <div class="row p-3">
                                                    <div class="col-lg-1">
                                                        <i class="icon ion-md-rocket  paleta"></i>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <h3>Creacion de asignacion de Grupo</h3>
                                                        <div class="form-group">
                                                            <label for="sel1">Crear y Asignar un grupo de este curso, seleccione el profesor asignado:</label>
                                                            <select class="form-control" id="sel1">
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <a href="./nueva-asignacion">
                                                        <button class="btn btn-primary w-100 aling-self-center">Crear</button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- FIN TARJETA ASIG GRUPO -->
                            <div class="row">
                                <div class="card bg-grey estadisticas pb-3">
                                    <div class="card-body py-1">
                                        <div class="row">
                                            <!-- DETALLE DEL CURSO CALLOUT -->
                                            <div class="col-lg-12">
                                                <div class="row align-items-center justify-content-center">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <!-- TARJETA DE INFO DEL CURSO -->
                                            <div class="col-sm-12 py-4">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="mx-auto">
                                                            <div class="row p-3">
                                                                <div class="col-lg-9">
                                                                    <h3>Historico de Grupos Derivados de este Curso</h3>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="form-group">
                                                                        <select class="form-control" id="sel1">
                                                                            <option>Todos</option>
                                                                            <option>Finalizados</option>
                                                                            <option>Activos</option>
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
                                                                                <th scope="col">Curso</th>
                                                                                <th scope="col">Profesor</th>
                                                                                <th scope="col">Ocupación</th>
                                                                                <th scope="col">Fecha de Inicio</th>
                                                                                <th scope="col">Tipo</th>
                                                                                <th scope="col">Notas</th>
                                                                                <th scope="col">Estado</th>
                                                                                <th scope="col">Acciones</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th scope="row">1</th>
                                                                                <td>24265</td>
                                                                                <td>Iniciacion al Computo I</td>
                                                                                <td>Juan Pérez Sánchez</td>
                                                                                <td>29/30</td>
                                                                                <td>08 de Agosto, 2020</td>
                                                                                <td>Presencial</td>
                                                                                <td>--------</td>
                                                                                <td>Finalizado</td>
                                                                                <td>
                                                                                    <div class="dropdown">
                                                                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        Acciones
                                                                                        </button>
                                                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                                                            <a href="./nueva-asignacion">
                                                                                                <button class="dropdown-item" type="button">Modificar</button>
                                                                                            </a>
                                                                                            <a href="./detalles-asignacion">
                                                                                                <button class="dropdown-item" type="button">Ver detalles</button>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">1</th>
                                                                                <td>24265</td>
                                                                                <td>Iniciacion al Computo I</td>
                                                                                <td>Juana Peralta Suarez</td>
                                                                                <td>30/30</td>
                                                                                <td>18 de Mayo, 2021</td>
                                                                                <td>Online</td>
                                                                                <td>--------</td>
                                                                                <td>Activo</td>
                                                                                <td>
                                                                                    <div class="dropdown">
                                                                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        Acciones
                                                                                        </button>
                                                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                                                            <a href="./nueva-asignacion">
                                                                                                <button class="dropdown-item" type="button">Modificar</button>
                                                                                            </a>
                                                                                            <a href="./detalles-asignacion">
                                                                                                <button class="dropdown-item" type="button">Ver detalles</button>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- FIN INFO DE GRUPOS -->
                    </div>
                    <!--FIN contenido dinamico-->
                    <?php include("./view/includes/footer.php"); ?>
                </div>
            </div>
            <?php include "modal-editar-tema.php";?>
        </div>
        <?php include_once "modal-detalles-curso-pdf.php"; ?>
        <?php include_once "modal-editar-detalles-curso.php";?>

    </body>
    <!-- script_js -->
    <script>
        var pagList = false;
        var filtro_curso = -1;
    </script>

    <script src="./ajax/tools.js"></script>
    <script src="./ajax/cursos_ajax.js"></script>
    <!-- end script_js -->
</html>