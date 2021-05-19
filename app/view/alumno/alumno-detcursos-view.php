<!doctype html>
<html lang="en">
    <?php
    //Abrir para agregar los includes
    $tittle = "Detalle del curso";
    include("../includes/header.php");
    ?>
    <body class="body-home">
        <div class="d-flex">
            <?php include("../includes/alumno-menupc.php"); ?>
            <div class="w-100">
                <?php include("../includes/alumno-menutel.php"); ?>
                <div id="content">
                    <!--Inicio contenido dinamico-->
                    <div class="componet-dinamico">
                        <?php include ("alumno-detcursospanel-view.php")?>
                    </div>
                    <!--FIN contenido dinamico-->
                    <?php include("../includes/footer.php");?>
                </div>
            </div>
        </div>
    </body>
</html>