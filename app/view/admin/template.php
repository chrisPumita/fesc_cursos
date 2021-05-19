<!doctype html>
<html lang="en">

<?php
//Abrir para agregar los includes
$tittle = "Template";
include("./view/includes/header.php");
?>
<body class="body-home">
<div class="d-flex">
    <?php include("../includes/admin-menupc.php"); ?>
    <div class="w-100">
        <?php include("../includes/admin-menutel.php"); ?>

        <div id="content">
            <!--Inicio contenido dinamico-->
            <div class="componet-dinamico bg-grey">
               <h1>COLOCAR AQUI EL NUEVO CODIGO HTML5</h1>
            </div>
            <!--FIN contenido dinamico-->
            <?php include("../includes/footer.php");?>
        </div>
    </div>
</div>
<!-- script_js -->
</body>
</html>