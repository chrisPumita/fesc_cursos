<!doctype html>
<html lang="en">
    <?php
    //Abrir para agregar los includes
    $tittle = "Detalles del Curso";
    include("./view/includes/header.php");
    ?>
    <body class="body-home">
        <div class="d-flex">
            <div class="w-100">
                <?php include("./view/includes/alumno-navbar.php"); ?>
                <div id="content">
                    <!--Inicio contenido dinamico-->
                    <div class="componet-dinamico bg-grey">
                        <!-- INICIA SECCIÓN DEL ENCABEZADO -->
                        <section class="container py-3 bg-grey">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="font-weight-bold mb-0">Iniciación al Cómputo I - Grupo 2601</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="callout callout-second">
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus voluptatum illum odio quos laudantium enim ratione cupiditate accusantium officia quisquam, similique fuga ipsa consequatur? Sequi, consequuntur unde! Enim, dolor deserunt!</p>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- FINALIZA SECCIÓN DEL ENCABEZADO -->

                        <!-- INICIA SECCIÓN DEL CONTENIDO PRINCIPAL -->
                        <section class="container py-3 bg-grey">
                            <div class="row">
                                <!-- INICIAN TARJETAS -->
                                <div class="col-lg-4">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card" style="width: 18rem;">
                                                <img class="card-img-top" src="./assets/img/reposit-img/curso-excel.jpg" alt="">
                                                <div class="card-body mb-3" style="padding-left: 15px; padding-top: 0; padding-bottom: 0;">
                                                    <div class="row">
                                                        <div class="col-lg-12 mt-3">
                                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel quas quidem obcaecati voluptatum aperiam aut fugit reiciendis necessitatibus velit mollitia officia cupiditate pariatur, id, illo corporis vero, consectetur ratione amet?</p>
                                                        </div>
                                                        <div class="col-lg-6">
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <button class="btn btn-primary w-100">Solicitar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card mt-3" style="width: 18rem; border-radius: 20px">
                                                <div class="card-body img_bg_cards" style="background-image: url(./assets/img/icons/money4.svg);">
                                                    <h6 class="card-title"><strong>Costo</strong></h6>
                                                    <h2 class="card-subtitle mb-2"><strong>$1500</strong></h2>
                                                    <p class="card-text text-muted"><small>70% de descuento a la Comunidad FESC</small></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card mt-3" style="width: 18rem; border-radius: 20px">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <img src="./assets/img/icons/calendar3.svg" alt="" width="85px" class="mr-5 mt-3">
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <h6 class="card-title"><strong>Duración</strong></h6>
                                                            <p class="card-text mb-0">Iniciará el día: <span class="font-weight-bold">5 de mayo de 2021</span></p>
                                                            <p class="card-text">Finalizará el día: <span class="font-weight-bold">15 de junio de 2021</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- FINALIZAN TARJETAS -->
                                <!-- INICIA NAV-TAB -->
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card" style="width: 18rem; min-height: 759px">
                                                <div class="card-body">
                                                    <nav>
                                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                            <a class="nav-item nav-link active" id="nav-detalles-tab" data-toggle="tab" href="#nav-detalles" role="tab" aria-controls="nav-detalles" aria-selected="true">Detalles</a>
                                                            <a class="nav-item nav-link" id="nav-horario-tab" data-toggle="tab" href="#nav-horario" role="tab" aria-controls="nav-horario" aria-selected="false">Horario</a>
                                                            <a class="nav-item nav-link" id="nav-temario-tab" data-toggle="tab" href="#nav-temario" role="tab" aria-controls="nav-temario" aria-selected="false">Temario</a>
                                                        </div>
                                                    </nav>
                                                    <!-- INICIA NAV DETALLES -->
                                                    <div class="tab-content" id="nav-tabContent">
                                                        <div class="tab-pane fade show active" id="nav-detalles" role="tabpanel" aria-labelledby="nav-detalles-tab">
                                                            <div class="row mt-3">
                                                                <div class="col-lg-12">
                                                                    <label class="font-weight-bold">Objetivo:</label>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui nemo, placeat impedit deserunt molestiae, vitae blanditiis optio officiis rerum sapiente maxime, pariatur at officia minus voluptas? Doloremque debitis nisi reiciendis.</p>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-lg-12">
                                                                    <label class="font-weight-bold">Antecedentes:</label>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui nemo, placeat impedit deserunt molestiae, vitae blanditiis optio officiis rerum sapiente maxime, pariatur at officia minus voluptas? Doloremque debitis nisi reiciendis.</p>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-lg-12">
                                                                    <label class="font-weight-bold">Dirigido a:</label>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui nemo, placeat impedit deserunt molestiae, vitae blanditiis optio officiis rerum sapiente maxime, pariatur at officia minus voluptas? Doloremque debitis nisi reiciendis.</p>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-lg-4">
                                                                    <p><span class="font-weight-bold">Tipo de Modalidad: </span>Presencial</p>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <p><span class="font-weight-bold">Cupo: </span>32 lugares</p>
                                                                </div>
                                                                <div class="col-lg-5">
                                                                    <p><span class="font-weight-bold">Sesiones: </span>24 sesiones, 2 por semana</p>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-lg-12">
                                                                    <p><img src="./assets/img/icons/timer3.svg" width="40px" alt="">Límite de Inscripciones: <span class="font-weight-bold">15 de Julio de 2021</span></p>                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- FINALIZA NAV DE DETALLES -->
                                                        <!-- INICIA NAV DE HORARIOS -->
                                                        <div class="tab-pane fade" id="nav-horario" role="tabpanel" aria-labelledby="nav-horario-tab">
                                                            <div class="row mt-4">
                                                                <div class="col-lg-9">
                                                                    <div class="row">
                                                                        <div class="col-lg-4">
                                                                            <p>Grupo: <span class="font-weight-bold">2608</span></p>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <p>Profesor: <span class="font-weight-bold">Juan Pérez Rodríguez</span>
                                                                                <a href="#">
                                                                                    <img src="./assets/img/icons/help2.svg" alt="" width="24px">
                                                                                </a>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <button class="btn btn-primary w-100">Solicitar</button>
                                                                </div>
                                                            </div>
                                                            <!-- INICIA TABLA HORARIO PRESENCIAL -->
                                                            <div class="row mt-4">
                                                                <div class="col-lg-12">
                                                                    <h5 class="text-center"><strong>Presencial</strong></h5>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-2">
                                                                <div class="col-lg-12 overflow-auto table-responsive">
                                                                    <table class="table table-hover table-striped table-bordered table-sm bg-light text-center">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col" class="col-hora">Hora</th>
                                                                                <th scope="col" class="col-dia">Lunes</th>
                                                                                <th scope="col" class="col-dia">Martes</th>
                                                                                <th scope="col" class="col-dia">Miercoles</th>
                                                                                <th scope="col" class="col-dia">Jueves</th>
                                                                                <th scope="col" class="col-dia">Viernes</th>
                                                                                <th scope="col" class="col-dia">Sábado</th>
                                                                                <th scope="col" class="col-dia">Domingo</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>08:00 - 10:00</td>
                                                                                <td>A21</td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td>A21</td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>09:00 - 11:00</td>
                                                                                <td></td>
                                                                                <td>B-32</td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td>B-32</td>
                                                                                <td></td>
                                                                                <td></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <!-- FINALIZA TABLA HORARIO PRESENCIAL -->
                                                            <!-- INICIA TABLA HORARIO VIRTUAL -->
                                                            <div class="row mt-4">
                                                                <div class="col-lg-12">
                                                                    <h5 class="text-center"><strong>Virtual</strong></h5>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-2">
                                                                <div class="col-lg-12 overflow-auto table-responsive">
                                                                    <table class="table table-hover table-striped table-bordered table-sm bg-light text-center">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col" class="col-hora">Hora</th>
                                                                                <th scope="col" class="col-dia">Lunes</th>
                                                                                <th scope="col" class="col-dia">Martes</th>
                                                                                <th scope="col" class="col-dia">Miercoles</th>
                                                                                <th scope="col" class="col-dia">Jueves</th>
                                                                                <th scope="col" class="col-dia">Viernes</th>
                                                                                <th scope="col" class="col-dia">Sábado</th>
                                                                                <th scope="col" class="col-dia">Domingo</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>08:00 - 10:00</td>
                                                                                <td>A21</td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td>A21</td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>09:00 - 11:00</td>
                                                                                <td></td>
                                                                                <td>B-32</td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td>B-32</td>
                                                                                <td></td>
                                                                                <td></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <!-- FINALIZA TABLA HORARIO VIRTUAL -->                                                        
                                                        </div>
                                                        <!-- FINALIZA NAV DE HORARIOS -->
                                                        <!-- INICIA NAV DEL TEMARIO -->
                                                        <div class="tab-pane fade" id="nav-temario" role="tabpanel" aria-labelledby="nav-temario-tab">                                                        
                                                            <div class="row">
                                                                <div class="col-lg-10"></div>
                                                                <div class="col-lg-2">
                                                                    <a href="#"><img src="./assets/img/icons/download2.svg" class="aling-self-center" width="70px" alt="">Descargar</a>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <ol>
                                                                    <li class="font-weight-bold">Antecedentes</li>
                                                                        <ul>
                                                                            <li>1.1 Historia de Internet</li>
                                                                            <li>1.2 Web 1.0</li>
                                                                            <li>1.3 Web 2.0</li>
                                                                            <li>1.4 Actualidad de la Web</li>
                                                                        </ul>
                                                                    <li class="font-weight-bold">HTML</li>
                                                                        <ul>
                                                                            <li>2.1 El origen de HTML</li>
                                                                            <li>2.2 Versiones</li>
                                                                            <li>2.3 Otros lenguajes de mercado</li>
                                                                        </ul>
                                                                    <li class="font-weight-bold">Hojas de Estilo en Cascada</li>
                                                                        <ol>
                                                                            <li>Historia de CSS</li>
                                                                            <li>Selectores</li>
                                                                            <li>Versión de CSS</li>
                                                                            <li>Propiedades CSS</li>
                                                                        </ol>
                                                                    <li class="font-weight-bold">Java Script</li>
                                                                        <ol>
                                                                            <li>Sintaxis</li>
                                                                            <li>Variables y tipos de dato</li>
                                                                            <li>Operadores</li>
                                                                        </ol>
                                                                </ol>
                                                            </div>
                                                        </div>
                                                        <!-- FINALIZA NAV DEL TEMARIO -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- FINALIZA NAV-TAB -->
                            </div>
                        </section>
                        <!--FINALIZA SECCIÓN DEL CONTENIDO PRINCIPAL -->

                        <!--INICIA SECCIÓN CURSOS SIMILARES -->
                        <section class="container py-3 bg-grey">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3><strong>Similares</strong></h3>
                                </div>
                            </div>
                            <div class="row mt-2 mb-4">
                                <div class="col-lg-4">
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="./assets/img/reposit-img/curso-excel.jpg" alt="">
                                        <div class="card-body" style="padding-left: 15px; padding-top: 0; padding-bottom: 0;">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="callout callout-success ">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <h3><strong>Excel para contadores</strong></h3>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <p>Profesor: <span>Juan Perez Sanchez</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <p class="mt-2 mb-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis voluptatibus esse soluta sunt ab itaque sed, harum ipsum accusantium.</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <p>Grupo: <span>2001</span></p>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <p>Estado: <span>Activo</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <button class="btn btn-primary btn-sm mt-2 w-100">Más detalles</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="./assets/img/reposit-img/curso-excel.jpg" alt="">
                                        <div class="card-body" style="padding-left: 15px; padding-top: 0; padding-bottom: 0;">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="callout callout-success">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <h3><strong>Macros en Excel</strong></h3>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <p>Profesor: <span>Pedro Villegas</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <p class="mt-2 mb-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis voluptatibus esse soluta sunt ab itaque sed, harum ipsum accusantium.</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <p>Grupo: <span>2603</span></p>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <p>Estado: <span>Activo</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <button class="btn btn-primary btn-sm mt-2 w-100">Más detalles</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="./assets/img/reposit-img/curso-excel.jpg" alt="">
                                        <div class="card-body" style="padding-left: 15px; padding-top: 0; padding-bottom: 0;">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="callout callout-success">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <h3><strong>Excel para contadores</strong></h3>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <p>Profesor: <span>Fernando García</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <p class="mt-2 mb-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis voluptatibus esse soluta sunt ab itaque sed, harum ipsum accusantium.</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <p>Grupo: <span>2002</span></p>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <p>Estado: <span>Activo</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <button class="btn btn-primary btn-sm mt-2 w-100">Más detalles</button>
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
                        <!-- FINALIZA SECCIÓN CURSOS SIMILARES -->
                    </div>
                    <!--FIN contenido dinamico-->
                    <?php include("./view/includes/footer.php"); ?>
                </div>
            </div>
        </div>
        <!-- script_js -->
    </body>
</html>