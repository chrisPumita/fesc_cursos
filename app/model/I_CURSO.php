<?php


interface I_CURSO
{
    public function consultaGrupo($id_curso);
    public function consultaTemas($id_curso);
    public function consultaGroupKeys($id_curso);
    public function consultaDocsSolicitados($id_curso);
}