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
                    <div class="componet-dinamico bg-grey">
                        <h1>PRUEBA DE MODALES </h1>
                        <div class="col-lg-3">
                            <a href="#" data-toggle="modal" data-target="#histCursos">
                            <button class="btn btn-primary w-100 m-3">MODAL</button>
                            </a>
                        </div>
                    </div>
                    <!--FIN contenido dinamico-->
                    <?php include("./view/includes/footer.php");?>
                </div>
            </div>
        </div>
        <?php include "modal-historial-cursos.php";?>
        <!-- script_js -->
    </body>
</html>