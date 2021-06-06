<!doctype html>
<html lang="en">

<?php
//Abrir para agregar los includes
$tittle = "Bienvenido al panel del Alumno";
include("../includes/header.php");
?>
<body class="body-home">
<div class="d-flex">
    <?php include("../includes/alumno-menupc.php"); ?>
    
    <div class="w-100">
        <?php include("../includes/alumno-menutel.php"); ?>
        
        <div id="content">
            <!--Inicio contenido dinamico-->
            <div class="componet-dinamico bg-grey">
                <?php include ("alumno-inicio-view.php")?>
            </div>
            <!--FIN contenido dinamico-->
            <?php include("../includes/footer.php");?>
        </div>
    </div>
</div>
<!-- script_js -->
</body>
</html>