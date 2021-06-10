<?php


interface I_PROFESOR
{
    public function getListaProfesores();

    public function getListaProfesoresActivos();

    function updateEstatusProf($id_profesor, $estatus);

    function consultaProfesor($id_profesor);

    function agregaProfesor();

    function modificaProfesor();

    function modifcaPw($id_profesor,$pw);

    function eliminaProfesor($id_profesor);

    function creaFirmaDigital();

    function cargaFirmaImagen();
}