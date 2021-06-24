<?php
if (isset($_POST['idCurso'])){
    $idCurso = $_POST['idCurso'];
    include_once "curso_control.php";
    echo consultaAcredita($idCurso);
}

else{
    echo "no recibí datos";
}
