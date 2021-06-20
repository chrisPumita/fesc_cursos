<?php
if (isset($_POST['estado_filtro']) && isset($_POST['idCurso'])){
    $edoFiltro = $_POST['estado_filtro'];
    $id_Curso = $_POST['idCurso'];
    include_once "curso_control.php";
    echo consultaListaCursos($edoFiltro,$id_Curso);
}
