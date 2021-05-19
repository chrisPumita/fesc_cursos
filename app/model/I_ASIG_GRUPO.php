<?php


interface I_ASIG_GRUPO
{
    /*Para consultar los horarios*/
    function consultaHorarioVirtual($id_asig);
    function consultaHorarioPresencial($id_asig);
    public function consultaAsignaciones();
    function crearasignacion();
    function eliminarasignacion($id_asignacion);
    function modificarasignacion();

}