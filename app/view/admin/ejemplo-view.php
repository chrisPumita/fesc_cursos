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
               <h1>SOY UN EJEMPLo5</h1>
            </div>
            <!--FIN contenido dinamico-->
            <?php include("./view/includes/footer.php");?>
        </div>
    </div>
</div>
<!-- script_js -->
</body>
</html>