<?php

if (isset($_POST['estado_filtro'])){
    $edoFiltro = $_POST['estado_filtro'];
    include_once "curso_control.php";
    echo consultaListaCursos($edoFiltro);
}
