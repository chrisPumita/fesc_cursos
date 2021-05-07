<?php


interface I_PROFESOR
{
    public function getListaProfesores($filtro);

    function updateEstatusProf($id_profesor, $estatus);

    function consultaProfesor($id_profesor);

    function agregaProfesor();

    function modificaProfesor();

    function modifcaPw();

    function eliminaProfesor($id_profesor);

    function creaFirmaDigital();

    function cargaFirmaImagen();
}