<!doctype html>
<html lang="en">

<?php
//Abrir para agregar los includes
$tittle = "Cursos registrados";
include("../includes/header.php");
?>
<body class="body-home">
<div class="d-flex">
    <?php include("../includes/admin-menupc.php"); ?>
    <div class="w-100">
        <?php include("../includes/admin-menutel.php"); ?>

        <div id="content">
            <!--Inicio contenido dinamico-->
            <div class="componet-dinamico">
                <h2>Hola</h2>
                <h3>hola de Mostrando cursos</h3>
            </div>
            <!--FIN contenido dinamico-->
            <?php include("../includes/footer.php");?>
        </div>


    </div>
</div>
<!-- script_js -->
</body>
</html>