<!doctype html>
<html lang="en">
    <?php
        //Abrir para agregar los includes
        $tittle = "Asignación";
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
                        <!-- INICIA SECCION ENCABEZADO Y ESTA -->
                        <section class="container py-2 bg-grey">
                            <div class="row">
                                <div class="col-lg-12">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                            <li class="breadcrumb-item"><a href="#">Cursos</a></li>
                                            <li class="breadcrumb-item"><a href="#">Iniciación al Cópmputo I</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Grupo 2605</li>
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
                                                        <h6 class="text-muted"><strong>Solicitudes</strong></h6>
                                                        <h3 class="font-weight-bold">3</h3>
                                                        <h6 class="text-warning">Pendientes por revisar</h6>
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
                                                        <h3 class="font-weight-bold">26</h3>
                                                        <h6 class="text-warning">Pendientes</h6>
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
                                                        <h6 class="text-success">Acreditadas</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="mx-auto">
                                                        <i class="icon ion-md-contacts mr-1 position-absolute paleta"></i>
                                                        <h6 class="text-muted"><strong>Estatus</strong></h6>
                                                        <h6 class="text-success">ACTIVO</h6>
                                                        <h6 class="text-success">Este curso esta activo</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- FIN ESTADISTICAS-->
                        </section>
                        <!-- FIN SECCION ENCABEZADO Y ESTA -->
                        <section>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-12 text-center">
                                    <div class="img" style="background-image: url(../deposit-img/banner1.jpg); ">
                                        <div class="overlay"></div>
                                        <h4 class="text-light text-left"><strong> Grupo 2210 Paginas Web Sem. 2021-1 Gen 15</strong></h4>
                                        <h5 class="text-secondary text-left">Profesor: <strong> Martha Areyano Felix</strong></h5>
                                        <h5 class="text-secondary text-left">Departemento de Cómputo</h5>
                                        <h5 class="text-secondary text-left">Inicio:<strong> 5 de Mayo de 2021</strong></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </section>
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
                                                                            <button class="btn text-primary collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                                            Detalles
                                                                            </button>
                                                                        </h5>
                                                                    </div>
                                                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                                                        <div class="card-body">
                                                                        <h6><strong>Dirigido a: </strong> Estudiantes</h6>
                                                                            <h6><strong>Modalidad: </strong> A distancia</h6>
                                                                            <h6><strong>Cupo: </strong>30</h6>
                                                                            <h6><strong>Sesiones: </strong> 20</h6>
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
                                                                            Antecedentes
                                                                            </button>
                                                                        </h5>
                                                                    </div>
                                                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                                                        <div class="card-body">
                                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
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
                                            <!-- INICIO TARJETA DETALLES APROBACION -->
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
                                            <!-- FIN TARJETA DETALLES APROBACION -->
                                        </div>
                                    </div>
                                </div>        
                            </div>
                        </section>
                    </div>
                    <!--FIN contenido dinamico-->
                    <?php include("./view/includes/footer.php");?>
                </div>
            </div>
        </div>
        <!-- script_js -->
    </body>
</html>