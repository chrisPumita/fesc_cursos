<?php

interface I_ALUMNO
{
    public function consultaListaAlumnos();
    function consultaAlumno();
    public function filtrarListaAlumnos($tipo_filtro, $valor);
    function agregaAlumno();
    function modificaAlumno();
    function modifcaPw();
    function eliminaAlumno($id_alumno);
    function updateEstatusAlumno($id_alumno,$estatus);
    function consultaCuentaServSoc();
    function crearCuentaServSoc();
    function modificarCuentaServSoc();
    function terminarServSoc();
    function cambiarClaveServSoc();
}