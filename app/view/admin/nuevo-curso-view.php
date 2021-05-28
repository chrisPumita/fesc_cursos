<!doctype html>
<html lang="en">
<?php
//Abrir para agregar los includes
$tittle = "Template";
include("./view/includes/header.php");
?>
<body class="body-home">
    <div class="d-flex">
        <?php include("./view/includes/admin-menupc.php"); ?>
        <div class="w-100">
            <?php include("./view/includes/admin-menutel.php"); ?>
            <div id="content">
                <!--Inicio contenido dinamico-->
                <section class="container py-3 bg-grey">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="font-weight-bold mb-0">Envío de solicitud de curso</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="callout callout-second">
                                <h4>Atencion</h4>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti doloribus ipsam repudiandae unde. Animi aperiam architecto beatae corporis eaque est iusto, nostrum obcaecati, porro quam quo, soluta tempore unde velit!
                            </div>
                        </div>
                    </div>
                </section>

                <section class="container py-3 bg-grey">
                    <?php include "frm-nuevo-curso.php";?>
                </section>


                <!--FIN contenido dinamico-->
                <!--FIN contenido dinamico-->
                <?php include("./view/includes/footer.php");?>
            </div> <!-- end conytainer-->
        </div>
    </div>
<!-- script_js -->
</body>
</html>