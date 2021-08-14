<!doctype html>
<html lang="en">
    <?php
    //Abrir para agregar los includes
    $tittle = "Configuración";
    include("./view/includes/header.php");
    ?>
    <style>
        a {
            color: #196398 !important;
        }
        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #CDAC12 !important;
            background-color: #fff !important;
        }
    </style>
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
                                    <h2 class="font-weight-bold mb-0">Configuración</h2>
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
                                                    <h4>Jennifer Morales Rosas</h4>
                                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus voluptatum illum odio quos laudantium enim ratione cupiditate accusantium officia quisquam, similique fuga ipsa consequatur? Sequi, consequuntur unde! Enim, dolor deserunt!</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- FINALIZA ENCABEZADO -->
                        <!-- INICIA SECCIÓN DEL CONTENIDO PRINCIPAL -->
                        <section class="container mt-3 mb-3 bg-grey">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="container bg-light" style="min-height: 370px; max-height: 584px;">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="nav flex-column nav-pills mt-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                    <a class="nav-link active" id="v-pills-info-tab" data-toggle="pill" href="#v-pills-info" role="tab" aria-controls="v-pills-info" aria-selected="true"><span class="font-weight-bold">Información Básica</span></a>
                                                    <a class="nav-link" id="v-pills-pass-tab" data-toggle="pill" href="#v-pills-pass" role="tab" aria-controls="v-pills-pass" aria-selected="false"><span class="font-weight-bold">Contraseña</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="container bg-light" style="min-height: 370px;">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="tab-content mt-3" id="v-pills-tabContent">
                                                    <div class="tab-pane fade show active" id="v-pills-info" role="tabpanel" aria-labelledby="v-pills-info-tab">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <h6><strong>Información Básica</strong></h6>
                                                                    <hr>
                                                                    <form class="" id="frm-info" role="form" autocomplete="off" novalidate>
                                                                        <div class="form-group row">
                                                                            <div class="col-lg-3">
                                                                                <label class="col-form-label">Nombre Completo:</label>
                                                                            </div>
                                                                            <div class="col-lg-3">
                                                                                <input type="text" id="nombre" class="form-control" required placeholder="Nombre(s)">
                                                                            </div>
                                                                            <div class="col-lg-3">
                                                                                <input type="text" id="primer_ap" class="form-control" required placeholder="Primer Apellido">
                                                                            </div>
                                                                            <div class="col-lg-3">
                                                                                <input type="text" id="segundo_ap" class="form-control" required placeholder="Segundo Apellido">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-lg-3">
                                                                                <label class="col-form-label">Municipio:</label>
                                                                            </div>
                                                                            <div class="col-lg-3">
                                                                                <select name="municipio" id="municipio" class="form-control">
                                                                                    <option>Cuautitlán</option>
                                                                                    <option>Teoloyucan</option>
                                                                                    <option>Coyotepec</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-lg-3">
                                                                                <label class="col-form-label">Universidad:</label>
                                                                            </div>
                                                                            <div class="col-lg-3">
                                                                                <select name="universidad" id="universidad" class="form-control">
                                                                                    <option>UNAM</option>
                                                                                    <option>IPN</option>
                                                                                    <option>UAM</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-lg-3">
                                                                                <label class="col-form-label">Carrera:</label>
                                                                            </div>
                                                                            <div class="col-lg-3">
                                                                                <select name="carrera" id="carrera" class="form-control">
                                                                                    <option>Administración</option>
                                                                                    <option>Contaduría</option>
                                                                                    <option>Informática</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-lg-3">
                                                                                <label class="col-form-label">Matricula:</label>
                                                                            </div>
                                                                            <div class="col-lg-3">
                                                                                <input type="text" id="matricula" class="form-control" required placeholder="Matrícula">
                                                                            </div>
                                                                        </div>
                                                                        <h6><strong>Contacto</strong></h6>
                                                                        <hr>
                                                                        <div class="form-group row">
                                                                            <div class="col-lg-3">
                                                                                <label class="col-form-label">Teléfono:</label>
                                                                            </div>
                                                                            <div class="col-lg-4">
                                                                                <input type="text" id="telefono" class="form-control" required placeholder="Teléfono">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-lg-3">
                                                                                <label class="col-form-label">Correo:</label>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <input type="email" id="correo" class="form-control" required placeholder="Correo">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-lg-9"></div>
                                                                            <div class="col-lg-3">
                                                                                <button class="btn btn-primary w-100">Aceptar</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="v-pills-pass" role="tabpanel" aria-labelledby="v-pills-pass-tab">
                                                    <div class="container">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <h6><strong>Contraseña</strong></h6>
                                                                    <hr>
                                                                    <form class="" id="frm-info" role="form" autocomplete="off" novalidate>
                                                                        <div class="form-group row">
                                                                            <div class="col-lg-4">
                                                                                <label class="col-form-label">Contraseña Actual:</label>
                                                                            </div>
                                                                            <div class="col-lg-4">
                                                                                <input type="password" id="contrasenia-actual" class="form-control" required placeholder="Contraseña Actual">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-lg-4">
                                                                                <label class="col-form-label">Constraseña Nueva:</label>
                                                                            </div>
                                                                            <div class="col-lg-4">
                                                                                <input type="password" id="contrasenia-nueva" class="form-control" required placeholder="Contraseña Nueva">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-lg-4">
                                                                                <label class="col-form-label">Confirmar Contraseña:</label>
                                                                            </div>
                                                                            <div class="col-lg-4">
                                                                                <input type="password" id="confirm-nueva" class="form-control" required placeholder="Confirmar Contraseña">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-lg-4">
                                                                                <button class="btn btn-primary w-100">Aceptar</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
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
                        <!-- FINALIZA SECCIÓN DEL CONTENIDO PRINCIPAL -->
                    </div>
                    <!--FIN contenido dinamico-->
                <?php include("./view/includes/footer.php"); ?>
                </div>
            </div>
        </div>
        <!-- script_js -->
    </body>
</html>