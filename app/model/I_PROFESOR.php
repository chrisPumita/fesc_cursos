<?php


interface I_PROFESOR
{
    public function getListaProfesores($filtro);

    function updateEstatusProf($id_profesor, $estatus);

    function consultaProfesor($id_profesor);

    function agregaProfesor();

    function modificaProfesor($id_profesor,$profesor);

    function modifcaPw($id_profesor,$pw);

    function eliminaProfesor($id_profesor);

    function creaFirmaDigital();

    function cargaFirmaImagen();
}