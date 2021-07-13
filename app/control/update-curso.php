<?php
//LLega la informacion por POST
if (isset($_POST['id_curso'])
    && isset($_POST['nombre_curso'])
    && isset($_POST['descripcion'])
    && isset($_POST['objetivo'])
    && isset($_POST['dirigido'])
    && isset($_POST['antecedentes'])
    && isset($_POST['modalidad'])
    && isset($_POST['no_sesiones'])
    && isset($_POST['costo']))
{
    //ya confirme los datos que si estan con valor
    $idCurso        = $_POST['id_curso'];
    $nombreCurso    = $_POST['nombre_curso'];
    $descripcion    = $_POST['descripcion'];
    $objetivo       = $_POST['objetivo'];
    $dirigido       = $_POST['dirigido'];
    $antecedentes   = $_POST['antecedentes'];
    $modalidad      = $_POST['modalidad'];
    $no_sesiones    = $_POST['no_sesiones'];
    $costo          = $_POST['costo'];

    // Lipio el valor del costo
    $costoLimpio = str_replace(array("$", ","), '', $costo);
    //traer el archivo del control  para enviar datos

    include_once "./curso_control.php";
    echo actualizaCurso($idCurso,$nombreCurso,$dirigido,$objetivo,$descripcion,$no_sesiones,$antecedentes,$costoLimpio,$modalidad);
}
else{
    echo "No hemos actualizado, porque faltan datos";
}

