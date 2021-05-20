<?php
#include_once "../model/CURSO.php";
#include_once "../model/I_CURSO.php";
#include_once "./curso_control.php";
#include_once "../model/TEMAS.php";

#echo agregaDocumentoAlCurso("2","1","1");

#echo consultaDumentacion("2");
 #echo quitarDocumentoCurso("3");
#echo cambiaObligacion("1","0");

#include_once "asignacion_grupos_control.php";
$datehoy = date('Y-m-d H:i:s');


#echo editaAsignacion("2",1,2,16,2020-1,1,$datehoy,$datehoy,$datehoy,$datehoy,$datehoy,10,100,10,0,"no hay",2);