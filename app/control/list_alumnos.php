<?php
if (isset($_POST['estado_filtro']) && isset($_POST['idAlumno'])) {
    $edoFiltro = $_POST['estado_filtro'];
    $idAlumno = $_POST['idAlumno'];
    include_once "alumno_control.php";
    echo consultaListaAlumnos($edoFiltro,$idAlumno);
}
