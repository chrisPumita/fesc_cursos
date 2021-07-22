<!doctype html>
<html lang="en">
    <?php
        //Abrir para agregar los includes
        $tittle = "Documentación Pendiente";
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
                                    <h2><strong>Mis Solicitudes</strong></h2>
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
                                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus voluptatum illum odio quos laudantium enim ratione cupiditate accusantium officia quisquam, similique fuga ipsa consequatur? Sequi, consequuntur unde! Enim, dolor deserunt!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section> 
                        <!-- FINALIZA ENCABEZADO -->
                        <!--INICIA SECCIÓN DEL CONTENIDO PRINCIPAL -->
                        <section class="container bg-grey">
                            <div class="row">
                                <div class="col-sm-12 mt-2 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="mx-auto">
                                                <div id="accordion">
                                                    <div class="card">
                                                        <div class="card-header" id="headingOne">
                                                            <h5 class="mb-0">
                                                                <button class="btn text-primary" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                    Iniciación al Cómputo II
                                                                </button>
                                                            </h5>
                                                        </div>
                                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div id="tbl-containerDocumentos" class="col-lg-12 overflow-auto table-responsive-lg">
                                                                        <table class="table table-hover table-sm bg-light">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th scope="col">#</th>
                                                                                    <th scope="col">Documento</th>
                                                                                    <th scope="col">Detalles</th>
                                                                                    <th scope="col">Estado</th>
                                                                                    <th scope="col">Comentarios</th>
                                                                                    <th scope="col">Subir</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody id="tbl-documentos">
                                                                                <tr>
                                                                                    <th scope="row">1</th>
                                                                                    <td>Ficha de Inscripción</td>
                                                                                    <td>Archivo PDF tamaño máximo 3 MB</td>
                                                                                    <td><img src="./assets/img/icons/help2.svg" alt="" width="30px">Pendiente de subida</td>
                                                                                    <td>-----</td>
                                                                                    <td><a href="./ficha-inscripcion"><img src="./assets/img/icons/subir1.svg" alt="" width="36px"></a></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row">2</th>
                                                                                    <td>Ficha de Inscripción</td>
                                                                                    <td>Archivo PDF tamaño máximo 3 MB</td>
                                                                                    <td><img src="./assets/img/icons/help2.svg" alt="" width="30px">Pendiente</td>
                                                                                    <td>-----</td>
                                                                                    <td><a href="./ficha-inscripcion"><img src="./assets/img/icons/subir1.svg" alt="" width="36px"></a></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="accordion2" class="mt-3">
                                                    <div class="card">
                                                        <div class="card-header" id="headingOne">
                                                            <h5 class="mb-0">
                                                                <button class="btn text-primary" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                                                    Excel para contadores
                                                                </button>
                                                            </h5>
                                                        </div>
                                                        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion2">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div id="tbl-containerDocumentos" class="col-lg-12 overflow-auto table-responsive-lg">
                                                                        <table class="table table-hover table-sm bg-light">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th scope="col">#</th>
                                                                                    <th scope="col">Documento</th>
                                                                                    <th scope="col">Detalles</th>
                                                                                    <th scope="col">Estado</th>
                                                                                    <th scope="col">Comentarios</th>
                                                                                    <th scope="col">Subir</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody id="tbl-documentos">
                                                                                <tr>
                                                                                    <th scope="row">1</th>
                                                                                    <td>Ficha de Inscripción</td>
                                                                                    <td>Archivo PDF tamaño máximo 3 MB</td>
                                                                                    <td><img src="./assets/img/icons/help2.svg" alt="" width="30px">Pendiente de subida</td>
                                                                                    <td>-----</td>
                                                                                    <td><a href="./ficha-inscripcion"><img src="./assets/img/icons/subir1.svg" alt="" width="36px"></a></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row">2</th>
                                                                                    <td>Ficha de Inscripción</td>
                                                                                    <td>Archivo PDF tamaño máximo 3 MB</td>
                                                                                    <td><img src="./assets/img/icons/cancel.svg" alt="" width="30px">Rechazado</td>
                                                                                    <td>-----</td>
                                                                                    <td><a href="./ficha-inscripcion"><img src="./assets/img/icons/subir1.svg" alt="" width="36px"></a></td>
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
                            </div>
                        </section>
                        <!--FINALIZA SECCIÓN DEL CONTENIDO PRINCIPAL-->
                    </div>
                    <!--FIN contenido dinamico-->
                    <?php include("./view/includes/footer.php");?>
                </div>
            </div>
        </div>
        <!-- script_js -->
    </body>
</html>