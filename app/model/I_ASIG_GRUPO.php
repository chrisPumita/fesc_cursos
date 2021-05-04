<?php


interface I_ASIG_GRUPO
{
    public function consultaGrupo($id_asig);
    /*Para consultar los horarios*/
    function consultaHorarioVirtual($id_asig);
    function consultaHorarioPresencial($id_asig);
    public function consultaInscripciones($id_asig);

}