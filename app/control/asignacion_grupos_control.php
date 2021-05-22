<?php
/* ------------------HORARIOS_PRE FUNCIONES----------------------- */
      //   CONSULTA TODAS LAS AULAS
function consultaAulas($filtro)
{
    include_once "../model/AULAS.php";
    $obj_horarioP = new AULAS();
    $result=$obj_horarioP->ConsultaAulas($filtro);
    $json_data=json_encode($result);
    return $json_data;
}
       // CONSULTA SOLO 1 AULA
function consultaAula($id_aula){
    include_once "../model/AULAS.php";
    $obj_horarioP = new AULAS();
    $result=$obj_horarioP->ConsultarAula($id_aula);
    $json_data=json_encode($result);
    return $json_data;
}

function creaAula($edificio,$aula,$campus,$cupo,$estadoAula){
    include_once "../model/AULAS.php";
    $obj_aula=new AULAS();
    //`id_aula`, `edificio`, `aula`, `campus`, `cupo`, `estado`
    $obj_aula->setEdificio($edificio);
    $obj_aula->setAula($aula);
    $obj_aula->setCampus($campus);
    $obj_aula->setCupo($cupo);
    $obj_aula->setEstadoAula($estadoAula);
    return $obj_aula->crearNuevaAula() ? "Se creó una nueva Aula" :"Error al crear una nueva Aula";

}

function editaAula($id_aula,$edificio,$aula,$campus,$cupo,$estadoAula){
    include_once "../model/AULAS.php";
    $obj_aula=new AULAS();
    //`id_aula`, `edificio`, `aula`, `campus`, `cupo`, `estado`
    $obj_aula->setIdAula($id_aula);
    $obj_aula->setEdificio($edificio);
    $obj_aula->setAula($aula);
    $obj_aula->setCampus($campus);
    $obj_aula->setCupo($cupo);
    $obj_aula->setEstadoAula($estadoAula);
    return $obj_aula->editaAula() ? "Se modificó una Aula" :"Error al modificar una  Aula";
}


function eliminaAula($id_aula){
    include_once "../model/AULAS.php";
    $obj_aula=new AULAS();
    return $obj_aula->eliminarAula($id_aula) ? "Se elimino una Aula" :"Error al eliminar una  Aula";
}

function creaHorarioPre($idAsignacion,$idAula,$diasSem,$HoraInicio,$Duracion){
    include_once "../model/HORARIO_CLASE_P.php";
    //  `id_horario_pres`, `id_asignacion_fk`, `id_aula_fk`, `dia_semana`, `hora_inicio`, `duracion`
    $obj_Horario = new HORARIO_CLASE_P();
    $obj_Horario->setIdAsignacionFk($idAsignacion);
    $obj_Horario->setIdAula($idAula);
    $obj_Horario->setDiaSemana($diasSem);
    $obj_Horario->setHoraInicio($HoraInicio);
    $obj_Horario->setDuracion($Duracion);
    return $obj_Horario->CrearHorario() ? "Se creó un horario presencial": "No pudimos crear el horario";
}

function actualizaHorarioPre($idHorario,$idAsignacion,$idAula,$diasSem,$HoraInicio,$Duracion){
    include_once "../model/HORARIO_CLASE_P.php";
    //  `id_horario_pres`, `id_asignacion_fk`, `id_aula_fk`, `dia_semana`, `hora_inicio`, `duracion`
    $obj_Horario = new HORARIO_CLASE_P();
    $obj_Horario->setIdHorarioPres($idHorario);
    $obj_Horario->setIdAsignacionFk($idAsignacion);
    $obj_Horario->setIdAula($idAula);
    $obj_Horario->setDiaSemana($diasSem);
    $obj_Horario->setHoraInicio($HoraInicio);
    $obj_Horario->setDuracion($Duracion);
    return $obj_Horario->updateHorario() ? "Se actualizó un horario presencial": "No pudimos actualizar el horario";
}

function eliminaHorario($id_horario){
    include_once "../model/HORARIO_CLASE_P.php";
    $obj_horario= new HORARIO_CLASE_P();
    return $obj_horario->eliminarhorario($id_horario) ? "Se eliminó el Horario ":"Error al eliminar el Horario";
}

/* ------------------HORARIOS_VIRTUAL FUNCIONES----------------------- */

function creaHorarioVir($idAsignacion,$diasSem,$HoraInicio,$Duracion,$reunion,$plataforma,$url_reunion,$url_plataforma){
    include_once "../model/HORARIO_CLASE_V.php";
    //`id_horario_virtual`, `id_asignacion_fk`, `dia_semana`, `hora_inicio`, `duracion`, `reunion`, `plataforma`, `url_reunion`, `url_plataforma`
    $obj_Horario = new HORARIO_CLASE_V();
    $obj_Horario->setIdAsignacionFk($idAsignacion);
    $obj_Horario->setDiaSemana($diasSem);
    $obj_Horario->setHoraInicio($HoraInicio);
    $obj_Horario->setDuracion($Duracion);
    $obj_Horario->setReunion($reunion);
    $obj_Horario->setPlataforma($plataforma);
    $obj_Horario->setUrlReunion($url_reunion);
    $obj_Horario->setUrlPlataforma($url_plataforma);
    return $obj_Horario->CrearHorarioV() ? "Se creó un horario virtual": "No pudimos crear el horario";
}

function editarHorarioVir($id_horario,$idAsignacion,$diasSem,$HoraInicio,$Duracion,$reunion,$plataforma,$url_reunion,$url_plataforma){
    include_once "../model/HORARIO_CLASE_V.php";
    //`id_horario_virtual`, `id_asignacion_fk`, `dia_semana`, `hora_inicio`, `duracion`, `reunion`, `plataforma`, `url_reunion`, `url_plataforma`
    $obj_Horario = new HORARIO_CLASE_V();
    $obj_Horario->setIdHorarioVirtual($id_horario);
    $obj_Horario->setIdAsignacionFk($idAsignacion);
    $obj_Horario->setDiaSemana($diasSem);
    $obj_Horario->setHoraInicio($HoraInicio);
    $obj_Horario->setDuracion($Duracion);
    $obj_Horario->setReunion($reunion);
    $obj_Horario->setPlataforma($plataforma);
    $obj_Horario->setUrlReunion($url_reunion);
    $obj_Horario->setUrlPlataforma($url_plataforma);
    return $obj_Horario->updateHorarioV() ? "Se editó un horario virtual": "No pudimos editar el horario";
}

function eliminaHorarioV($id_horarioV){
    include_once "../model/HORARIO_CLASE_V.php";
    $obj_horariov = new HORARIO_CLASE_V();
    return $obj_horariov->eliminarHorarioV($id_horarioV) ? "Se eliminó el horario virtual ":"Error al eliminar el horario virtual";
}

/* ------------------ASIGNACION_GRUPO FUNCIONES----------------------- */

function VerHorarioVirtual($id_asignacion){
    include_once "../model/ASIGNACION_GRUPO.php";
    $obj_asignacion = new ASIGNACION_GRUPO();
    $result=$obj_asignacion->consultaHorarioVirtual($id_asignacion);
    $json_data=json_encode($result);
    return $json_data;
}

function VerHorarioPresencial($id_asignacion){
    include_once "../model/ASIGNACION_GRUPO.php";
    $obj_asignacion = new ASIGNACION_GRUPO();
    $result=$obj_asignacion->consultaHorarioPresencial($id_asignacion);
    $json_data=json_encode($result);
    return $json_data;
}
function consultaAsignaciones()
{
    include_once "../model/ASIGNACION_GRUPO.php";
    $obj_asignacion = new ASIGNACION_GRUPO();
    $result = $obj_asignacion->consultaAsignaciones();
    $json_data = json_encode($result);
    return $json_data;
}

function consultaAsignacion($id_grupo)
{
    include_once "../model/ASIGNACION_GRUPO.php";
    $obj_asignacion = new ASIGNACION_GRUPO();
    $result=$obj_asignacion->consultaAsignacion($id_grupo);
    $json_data=json_encode($result);
    return $json_data;
}

function creaAsignacion($id_grupo,$id_prof,$generacion,$semestre,$cede,$fInicio,$fFin,$fLimiteI,$fInicioActas,$fFinActas,$cupo,$costo,$descuento,$nivelDesc,$notas,$modalidad){
    include_once "../model/ASIGNACION_GRUPO.php";
    //`id_asignacion`, `id_grupo_fk`, `id_profesor_fk`, `generacion`, `semestre`, `campus_cede`, `fecha_creacion`, `fecha_inicio`, `fecha_fin`, `fecha_lim_inscripcion`, `fecha_inicio_actas`,
    // `fecha_fin_actas`, `cupo`, `costo_real`, `descuento`, `nivel_aplicacion_desc`, `notas`, `modalidad`
    $obj_asignacion = new ASIGNACION_GRUPO();
    $obj_asignacion->setIdGrupoFk($id_grupo);
    $obj_asignacion->setIdProfesorFk($id_prof);
    $obj_asignacion->setGeneracion($generacion);
    $obj_asignacion->setSemestre($semestre);
    $obj_asignacion->setCampusCede($cede);
    $obj_asignacion->setFechaInicio($fInicio);
    $obj_asignacion->setFechaFin($fFin);
    $obj_asignacion->setFechaLimInscripcion($fLimiteI);
    $obj_asignacion->setFechaInicioActas($fInicioActas);
    $obj_asignacion->setFechaFinActas($fFinActas);
    $obj_asignacion->setCupo($cupo);
    $obj_asignacion->setCostoReal($costo);
    $obj_asignacion->setDescuento($descuento);
    $obj_asignacion->setNivelAplicacionDesc($nivelDesc);
    $obj_asignacion->setNotas($notas);
    $obj_asignacion->setModalidad($modalidad);
    return $obj_asignacion->crearasignacion() ? "Se asignó un grupo": "No pudimos asignar un grupo";

}

function editaAsignacion($id_asignacion,$id_grupo,$id_prof,$generacion,$semestre,$cede,$fInicio,$fFin,$fLimiteI,$fInicioActas,$fFinActas,$cupo,$costo,$descuento,$nivelDesc,$notas,$modalidad){
    include_once "../model/ASIGNACION_GRUPO.php";
    //`id_asignacion`, `id_grupo_fk`, `id_profesor_fk`, `generacion`, `semestre`, `campus_cede`, `fecha_creacion`, `fecha_inicio`, `fecha_fin`, `fecha_lim_inscripcion`, `fecha_inicio_actas`,
    // `fecha_fin_actas`, `cupo`, `costo_real`, `descuento`, `nivel_aplicacion_desc`, `notas`, `modalidad`
    $obj_asignacion = new ASIGNACION_GRUPO();
    $obj_asignacion->setIdAsignacion($id_asignacion);
    $obj_asignacion->setIdGrupoFk($id_grupo);
    $obj_asignacion->setIdProfesorFk($id_prof);
    $obj_asignacion->setGeneracion($generacion);
    $obj_asignacion->setSemestre($semestre);
    $obj_asignacion->setCampusCede($cede);
    $obj_asignacion->setFechaInicio($fInicio);
    $obj_asignacion->setFechaFin($fFin);
    $obj_asignacion->setFechaLimInscripcion($fLimiteI);
    $obj_asignacion->setFechaInicioActas($fInicioActas);
    $obj_asignacion->setFechaFinActas($fFinActas);
    $obj_asignacion->setCupo($cupo);
    $obj_asignacion->setCostoReal($costo);
    $obj_asignacion->setDescuento($descuento);
    $obj_asignacion->setNivelAplicacionDesc($nivelDesc);
    $obj_asignacion->setNotas($notas);
    $obj_asignacion->setModalidad($modalidad);
    return $obj_asignacion->modificarasignacion() ? "Se editó la asignacion de un grupo": "No pudimos editar la asignacion de un grupo";

}

function eliminaAsignacion($id_asignacion){
    include_once "../model/ASIGNACION_GRUPO.php";
    $obj_asignacion= new ASIGNACION_GRUPO();
    return $obj_asignacion->eliminarasignacion($id_asignacion) ? "Se eliminó la asignacion de un grupo": "No pudimos eliminar la asignacion de un grupo";

}



