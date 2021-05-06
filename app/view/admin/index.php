<!doctype html>
<html lang="en">

<?php
//Abrir para agregar los includes
$tittle = "Bienvenido al panel de administrador";
include("../includes/header.php");
?>
<body class="body-home">
<div class="d-flex">
    <?php include("../includes/admin-menupc.php"); ?>
    <div class="w-100">
        <?php include("../includes/admin-menutel.php"); ?>

        <div id="content">
            <!--Inicio contenido dinamico-->
            <div class="componet-dinamico bg-grey">
                <?php include ("admin-principal-view.php")?>
            </div>
            <!--FIN contenido dinamico-->
            <?php include("../includes/footer.php");?>
        </div>
    </div>
</div>
<!-- script_js -->
</body>
</html>