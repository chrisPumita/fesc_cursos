<?php


interface I_HORARIO_CLASE_P
{
        function ConsultaAulas();
        function CrearHorario($horario);
        function updateHorario($id_Asignatura,$horario);
        function eliminarhorario($id_Asignatura);

}