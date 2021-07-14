<!doctype html>
<html lang="en">
    <?php
        //Abrir para agregar los includes
        $tittle = "Solicitud de Inscripción";
        include("./view/includes/header.php");
    ?>
    <body class="body-home">
        <div class="d-flex">
            <div class="w-100">
                <?php include("./view/includes/alumno-navbar.php"); ?>
                <div id="content">
                    <!--Inicio contenido dinamico-->
                    <div class="componet-dinamico bg-grey">
                        <!-- INICIA SECCIÓN DE ENCABEZADO -->
                        <section class="container py-3 bg-grey">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2><strong>Envío de Solicitud de Inscripción</strong></h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="callout callout-second">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti doloribus ipsam repudiandae unde. Animi aperiam architecto beatae corporis eaque est iusto, nostrum obcaecati, porro quam quo, soluta tempore unde velit!</p>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- FINALIZA SECCIÓN DE ENCABEZADO -->
                        <!-- INICIA SECCIÓN DEL FORMULARIO -->
                            <section class="container py-3 bg-grey">
                                <?php include "frm-solicitud-inscripcion.php";?>
                            </section>
                        <!-- INICIA SECCIÓN DEL FORMULARIO -->
                    </div>
                    <!--FIN contenido dinamico-->
                    <?php include("./view/includes/footer.php");?>
                </div>
            </div>
        </div>
        <!-- script_js -->
    </body>
</html>