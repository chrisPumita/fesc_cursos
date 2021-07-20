<?php
if(isset($_POST['id_persona'])&&isset($_POST['id_prof']) && isset($_POST['nombre_prof'])&& isset($_POST['app'])&&isset($_POST['apm'])
    &&isset($_POST['n_trabajador']) && isset($_POST['telefono'])  &&isset($_POST['correo'])  &&isset($_POST['sexo'])
    && isset($_POST['abre']) && isset($_POST['depro'])){
    $id_persona=$_POST['id_persona'];
    $id_prof=$_POST['id_prof'];
    $nombre_prof=$_POST['nombre_prof'];
    $app=$_POST['app'];
    $apm=$_POST['apm'];
    $n_trabajador=$_POST['n_trabajador'];
    $telefono=$_POST['telefono'];
    $correo=$_POST['correo'];
    $sexo=$_POST['sexo'];
    $abre=$_POST['abre'];
    $depro=$_POST['depro'];
    include_once "profesores_control.php";
    echo modificarProfesor($id_persona,$id_prof,$nombre_prof,$app,$apm,$n_trabajador,$telefono,$correo,$sexo,$abre,$depro);
}



