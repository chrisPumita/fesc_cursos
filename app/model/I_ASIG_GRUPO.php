<?php


interface I_ASIG_GRUPO
{
    /*Para consultar los horarios*/
    function consultaHorarioVirtual($id_asig);
    function consultaHorarioPresencial($id_asig);
    public function consultaInscripciones($id_asig);

}