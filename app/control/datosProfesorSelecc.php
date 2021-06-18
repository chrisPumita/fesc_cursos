<?php
if (isset($_POST['id'])) {
    include_once "../model/CONEXION_M.php";
    $conn = new CONEXION_M();
    $profesor_seleccionado = $_POST['id'];
    $query="SELECT per.`id_persona`, 
        per.`nombre`, per.`app`, per.`apm`, 
        per.`telefono`, per.`sexo`, 
        per.`estatus` AS estatus_persona, 
        prof.`id_profesor`, prof.`no_trabajador`, 
        prof.`prefijo`, prof.`email`, prof.`key_hash`, 
        prof.`fecha_registro`, prof.`firma_digital`, 
        prof.`firma_digital_img`, 
        prof.`estatus` AS estatus_profesor, 
        depto.`id_depto`, depto.`nombre` AS depto_name 
        FROM `profesor` prof, `persona` per,`departamentos` depto 
        WHERE prof.`id_persona_fk`=per.`id_persona` 
        AND per.`estatus` = 1
        AND prof.`id_depto_fk`= depto.`id_depto` 
        AND prof.id_profesor =".$profesor_seleccionado." 
        ORDER BY `per`.`app`,`per`.`apm`,`per`.`nombre` ASC";
    $conn->connect();
    $result = $conn->getData($query);
    $conn->close();

    $json_data = json_encode($result);
    echo $json_data;

} else {
    echo "No hay datos";
}
