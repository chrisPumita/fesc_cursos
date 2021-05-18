<!doctype html>
<html lang="en">
    <?php
    //Abrir para agregar los includes
    $tittle = "Detalle del curso";
    include("../includes/header.php");
    ?>
    <body class="body-home">
        <div class="d-flex">
            <?php include("../includes/admin-menupc.php"); ?>
            <div class="w-100">
                <?php include("../includes/admin-menutel.php"); ?>
                <div id="content">
                    <!--Inicio contenido dinamico-->
                    <div class="componet-dinamico bg-grey">
                        <!-- INICIA ENCABEZADO CON ESTADISTICAS -->
                        <section class="container py-2 bg-grey">
                            <div class="row">
                                <div class = "col-lg-12">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                            <li class="breadcrumb-item"><a href="#">Cursos</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Detalles</li>
                                        </ol>
                                    </nav>
                                </div>
                                <div class="col-lg-9 py-2">
                                    <h3 class="font-weight-bold mb-0">2658 - Iniciación al cómputo I</h3>
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
                            <div class="card bg-grey estadisticas">
                                <div class="card-body py-1">
                                    <div class="row"> <!-- DETALLE DEL CURSO CALLOUT -->
                                        <div class="col-lg-12">
                                            <div class="callout callout-second">
                                                <h4>Detalles del curso</h4>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus voluptatum illum odio quos laudantium enim ratione cupiditate accusantium officia quisquam, similique fuga ipsa consequatur? Sequi, consequuntur unde! Enim, dolor deserunt!
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
                                                            <h5><strong>Creado por: </strong>Juan Perez Sanchez</h5>
                                                            <p>15 de Mayo de 2020</p>
                                                        </div>

                                                        <div class="px-1">
                                                            <div id="accordion">
                                                                <div class="card">
                                                                    <div class="card-header" id="headingOne">
                                                                        <h5 class="mb-0">
                                                                            <button class="btn text-primary" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                            Antecedentes
                                                                            </button>
                                                                        </h5>
                                                                    </div>

                                                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                                                        <div class="card-body">
                                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. 
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card">
                                                                    <div class="card-header" id="headingTwo">
                                                                        <h5 class="mb-0">
                                                                            <button class="btn text-primary collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                            Objetivo
                                                                            </button>
                                                                        </h5>
                                                                    </div>
                                                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                                                        <div class="card-body">
                                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card">
                                                                    <div class="card-header" id="headingThree">
                                                                        <h5 class="mb-0">
                                                                            <button class="btn text-primary collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                            Detalles
                                                                            </button>
                                                                        </h5>
                                                                    </div>
                                                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                                                        <div class="card-body">
                                                                            <h6><strong>Modalidad: </strong> A distancia</h6>
                                                                            <h6><strong>Cupo: </strong>30</h6>
                                                                            <h6><strong>Sesiones: </strong> 20</h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>                                                                   
                                                        </div>                
                                                    </div>
                                                    <div class="mx-auto py-2">
                                                    <a href=""><button class="btn btn-primary btn-block" type="button">Editar información</button></a> 
                                                    <hr> 
                                                        <h6><strong>PDF del temario descargable</strong></h6>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <a href="#" class="btn btn-primary btn-block"><i class="icon ion-md-download"></i> Descargar</a>
                                                            </div>
                                                            <div class="col-md-4">
                                                            <a href="#" class="btn btn-primary btn-block"><i class="icon ion-md-cloud"></i> Subir</a>
                                                            </div>
                                                            <div class="col-md-4">
                                                            <a href="#" class="btn btn-primary btn-block"><i class="icon ion-md-eye"></i> Ver</a>
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
                                                    <img src="http://www.rrhhdigital.com/userfiles/CURSO-EXCEL-RRHHDIGITAL.jpg" class="card-img-top" alt="...">
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
                                            <div class="row">
                                                <div class="container">
                                                    <div class="">
                                                        <div class="callout callout-primary">
                                                            <h5>Detalles de Aprobación</h5>
                                                            <div class="d-flex">
                                                                <div class="m-auto">
                                                                    <img src="../../assets/img/ok.svg" width="60" alt="svg ok">
                                                                </div>
                                                                <div class="m-auto">
                                                                    <h6>Aprobado por:</h6>
                                                                    <h6><strong> Felipe Moran Suarez</strong></h6>
                                                                    <h6>Jefe de Departamento de Informática</h6>
                                                                </div>
                                                            </div>
                                                            <div class="m-auto">
                                                                <a href="#" class="btn btn-danger btn-block">Inhabilitar</a>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- FIN TARJETA BANNER -->
                                        <div class="col-sm-12 py-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="mx-auto">
                                                        <div class="row p-3">
                                                            <div class="col-lg-9">
                                                                <h5><strong>Temario</strong></h5>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <a href="#" class="btn btn-primary btn-block">Nuevo</a>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12 overflow-auto">
                                                                <table class="table table-striped bg-light table-hover">
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
                                                                            <td>  <!-- BOTON ACCIONES -->
                                                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                                                    <button type="button" class="btn btn-primary">Modificar</button>
                                                                                    <button type="button" class="btn btn-danger">Eliminar</button>
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
                                                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                                                    <button type="button" class="btn btn-primary">Modificar</button>
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
                                                        </div>   

                                                        -->            
                                                    </div>
                                                </div>
                                            </div>                    
                                        </div>
                                    </div>
                                </div>        
                            </div>
                        </section>

                        <section class="container bg-grey">
                            <div class="col-sm-12 py-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mx-auto">
                                            <div class="row p-3">
                                                <div class="col-lg-1">
                                                <i class="icon ion-md-rocket  paleta"></i>
                                                </div>
                                                <div class="col-lg-9">
                                                    <h4>Creacion de asignacion de Grupo</h4>
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
                                                    <button class="btn btn-primary w-100 aling-self-center">Envíar</button>
                                                </div>  
                                            </div>      
                                        </div>
                                    </div>
                                </div>                    
                            </div>
                            <div class="card bg-grey estadisticas">
                                <div class="card-body py-1">
                                    <div class="row"> <!-- DETALLE DEL CURSO CALLOUT -->
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
                                                                <h5><strong>Temario</strong></h5>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <a href="#" class="btn btn-primary btn-block">Nuevo</a>
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
                        <!-- FIN SECCION INFO DEL CURSO -->
                    </div>
                    <!--FIN contenido dinamico-->
                    <?php include("../includes/footer.php");?>
                </div>
            </div>
        </div>
    </body>
</html>