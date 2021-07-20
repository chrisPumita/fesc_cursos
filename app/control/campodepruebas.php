<?php

//include_once "inscripciones_control.php";
//echo acreditarPagoInscripcion("1","0000","987654321","100","SOLO PAGO","2021-05-27");

include_once "./profesores_control.php";
echo listaprofesores(0);
echo ("***********************************************************
******************************************************************
******************************************************************");
echo consultaListaProfesoresActivos();

?>
<!--
MODEL - VIEW - CONTROL
<form action="archivo_add(prueba).php" method="post" enctype="multipart/form-data">
    <br>
    <b>Enviar un nuevo archivo: </b>
    <br>
    <input name="archivo" type="file">
    <br>
    <input type="submit" value="Enviar">
</form>

INSERT INTO `validacion_inscripcion` (`id_inscripcion_fk`, `id_profesor_admin_fk`,
`fecha_validacion`, `fecha_pago`, `monto_pago_realizado`, `descripcion`, `notas`)
VALUES ('123456789', '1', '2021-05-27 00:00:00', '2021-05-26 00:00:00', '200', 'HSBC Ref 4515',
 '<Se realizo el registro del pago por $200 como prueba atraves de la BD')
-->

