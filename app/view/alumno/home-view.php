<!doctype html>
<html lang="en">
    <?php
        //Abrir para agregar los includes
        $tittle = "Mis Cursos";
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
                                    <h2 class="font-weight-bold mb-0">Mis Cursos</h2>
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
                                                <div class="col-lg-7">
                                                    <h4>Inscribirse a un nuevo curso</h4>
                                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus voluptatum illum odio quos laudantium enim ratione cupiditate accusantium officia quisquam, similique fuga ipsa consequatur? Sequi, consequuntur unde! Enim, dolor deserunt!</p>
                                                </div>
                                                <div class="col-lg-3">
                                                    <a href="#">
                                                        <button class="btn btn-primary w-100 aling-self-center m-3">Ver Cursos</button>
                                                    </a>                            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section> 
                        <!-- FINALIZA ENCABEZADO -->
                        <!-- INICIA CURSOS ACTIVOS -->
                        <section class="container py-3 bg-grey">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3><strong>Activos</strong></h3>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-lg-4">
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="./assets/img/reposit-img/curso-excel.jpg" alt="">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="callout callout-success">
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
                                                                <button class="btn btn-primary btn-sm mt-2">Ver Inscripción</button>
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
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-12">
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
                                                                <button class="btn btn-primary btn-sm mt-2">Ver Inscripción</button>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <button class="btn btn-success btn-sm mt-2">Ver Constancia</button>
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
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-12">
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
                                                                <button class="btn btn-primary btn-sm mt-2">Ver Inscripción</button>
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
                        <!-- FINALIZA CURSOS ACTIVOS -->
                        <!-- INICIA CURSOS FINALIZADOS -->
                        <section class="container py-3 bg-grey">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3><strong>Finalizados</strong></h3>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-lg-4">
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="./assets/img/reposit-img/curso-excel.jpg" alt="">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="callout callout-gray">
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
                                                                <button class="btn btn-primary btn-sm mt-2">Ver Inscripción</button>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <button class="btn btn-success btn-sm mt-2">Ver Constancia</button>
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
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="callout callout-gray">
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
                                                                <button class="btn btn-primary btn-sm mt-2">Ver Inscripción</button>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <button class="btn btn-success btn-sm mt-2">Ver Constancia</button>
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
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="callout callout-gray">
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
                                                                <button class="btn btn-primary btn-sm mt-2">Ver Inscripción</button>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <button class="btn btn-success btn-sm mt-2">Ver Constancia</button>
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
                        <!-- FINALIZA CURSOS FINALIZADOS -->
                        <!-- INICIA CURSOS SOLICITUDOS -->
                        <section class="container py-3 bg-grey">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3><strong>Solicitados</strong></h3>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-lg-4">
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="./assets/img/reposit-img/curso-excel.jpg" alt="">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="callout callout-orange">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <h3><strong>Macros en Excel</strong></h3>
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
                                                                <button class="btn btn-primary btn-sm mt-2">Ver Inscripción</button>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <button class="btn btn-success btn-sm mt-2" disabled>Ver Constancia</button>
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
                        <!-- FINALIZA CURSOS SOLICITADOS -->
                        <!-- INICIA ACCESOS RÁPIDOS -->
                        <section class="container bg-grey py-3">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3><strong>Accesos Rápidos</strong></h3>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-6">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <h5 class="card-title font-weight-bold">Nuevo Curso</h5>
                                            <p class="card-text text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                            <a href="#">
                                                <button class="btn btn-primary w-100 aling-self-center">Ver Cursos Ofertados</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <h5 class="card-title font-weight-bold">Mis Documentos</h5>
                                            <p class="card-text text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            <a href="#">
                                                <button class="btn btn-primary w-100 aling-self-center">Ir a Documentos</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- FINALIZA ACCESOS RÁPIDOS -->
                    </div>
                    <!--FIN contenido dinamico-->
                    <?php include("./view/includes/footer.php");?>
                </div>
            </div>
        </div>
        <!-- script_js -->
        <script type="text/javascript">
            window.onload = function() {
                Particles.init({
                    selector: '.background',
                    color: ['#196398', '#CDAC12', '#efefef'],
                    connectParticles: true,
                    responsive: [{
                        breakpoint: 800,
                        options: {
                            color: '#196398',
                            maxParticles: 80,
                            connectParticles: false
                        }
                    }]
                });
            };
        </script>
        <script src="./assets/js/jquery.min.js"></script>
        <script src="./assets/js/jquery-migrate-3.0.1.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
        <script src="./assets/js/jquery.easing.1.3.js"></script>
        <script src="./assets/js/jquery.waypoints.min.js"></script>
        <script src="./assets/js/jquery.stellar.min.js"></script>
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/jquery.magnific-popup.min.js"></script>
        <script src="./assets/js/jquery.animateNumber.min.js"></script>
        <script src="./assets/js/bootstrap-datepicker.js"></script>
        <script src="./assets/js/scrollax.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
        <script src="./assets/js/google-map.js"></script>
        <script src="./assets/js/main.js"></script>
    </body>
</html>