<?php
//Comprobaciones de que el dato esta entrando
 if (isset($_POST['id'])){
     include_once "../model/CONEXION_M.php";
     //include_once "../../login.php";

     $conn = new  CONEXION_M();
     $estado_seleccionado = $_POST['id'];

     $query = "SELECT `id_municipio`, 
                `id_estado_fk`, 
                `clave`, 
                `municipio` 
                FROM `municipios`
                WHERE `id_estado_fk` = $estado_seleccionado
                ORDER BY `municipio` ASC";

     $conn->connect();
     $result = $conn->getData($query);
     $conn->close();

     $json_data = json_encode($result);
     echo $json_data;
 }
 else{
     echo "NO hay datos";
 }

?>
