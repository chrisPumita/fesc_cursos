<?php

interface I_ALUMNO
{
    function consultaAlumno();
    function consultaAlumnos($tipo_filtro, $valor);
    function agregaAlumno();
    function modificaAlumno();
    function modifcaPw();
    function eliminaAlumno($id_alumno);
    function editarCuenta($id_lumno,$estatus);
    function consultaCuentaServSoc();
    function crearCuentaServSoc();
    function modificarCuentaServSoc();
    function terminarServSoc();
    function cambiarClaveServSoc();
}