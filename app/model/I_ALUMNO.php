<?php

interface I_ALUMNO
{
    function consultaAlumno();
    function consultaAlumnos($filtro);
    function agregaAlumno();
    function modificaAlumno();
    function modifcaPw();
    function eliminaAlumno($id_alumno);

    function consultaCuentaServSoc();
    function crearCuentaServSoc();
    function modificarCuentaServSoc();
    function terminarServSoc();
    function cambiarClaveServSoc();
}