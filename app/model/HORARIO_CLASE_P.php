<?php
include ("AULAS.php");
include_once ("I_HORARIO_CLASE_P.php");

class HORARIO_CLASE_P extends AULAS implements I_HORARIO_CLASE_P
{
    private $id_horario_pres;
    private $id_asignacion_fk;
    private $id_aula_fk;
    private $dia_semana;
    private $hora_inicio;
    private $duracion;
    /*Composicion*/
    private $aula;

    /**
     * @return mixed
     */
    public function getAula()
    {
        return $this->aula;
    }

    /**
     * @param mixed $aula
     */
    public function setAula($aula): void
    {
        $this->aula = $aula;
    }

    /**
     * @return mixed
     */
    public function getIdHorarioPres()
    {
        return $this->id_horario_pres;
    }

    /**
     * @param mixed $id_horario_pres
     */
    public function setIdHorarioPres($id_horario_pres): void
    {
        $this->id_horario_pres = $id_horario_pres;
    }

    /**
     * @return mixed
     */
    public function getIdAsignacionFk()
    {
        return $this->id_asignacion_fk;
    }

    /**
     * @param mixed $id_asignacion_fk
     */
    public function setIdAsignacionFk($id_asignacion_fk): void
    {
        $this->id_asignacion_fk = $id_asignacion_fk;
    }

    /**
     * @return mixed
     */
    public function getIdAulaFk()
    {
        return $this->id_aula_fk;
    }

    /**
     * @param mixed $id_aula_fk
     */
    public function setIdAulaFk($id_aula_fk): void
    {
        $this->id_aula_fk = $id_aula_fk;
    }

    /**
     * @return mixed
     */
    public function getDiaSemana()
    {
        return $this->dia_semana;
    }

    /**
     * @param mixed $dia_semana
     */
    public function setDiaSemana($dia_semana): void
    {
        $this->dia_semana = $dia_semana;
    }

    /**
     * @return mixed
     */
    public function getHoraInicio()
    {
        return $this->hora_inicio;
    }

    /**
     * @param mixed $hora_inicio
     */
    public function setHoraInicio($hora_inicio): void
    {
        $this->hora_inicio = $hora_inicio;
    }

    /**
     * @return mixed
     */
    public function getDuracion()
    {
        return $this->duracion;
    }

    /**
     * @param mixed $duracion
     */
    public function setDuracion($duracion): void
    {
        $this->duracion = $duracion;
    }

    function ConsultaAulas()
    {
        $this->connect();
        $datos = $this-> getData("SELECT * FROM `horario_clase_presencial`");
        $this->close();
        return $datos;
    }

    function CrearHorario($horario)
    {
        $query="INSERT INTO `horario_clase_presencial`(`id_horario_pres`, `id_asignacion_fk`, `id_aula_fk`, `dia_semana`, `hora_inicio`, `duracion`) 
                VALUES ('NULL','$horario[0]','$horario[1]','$horario[2]','$horario[3]','$horario[4]');";
        $this->connect();
        $datos = $this-> getData($query);
        $this->close();
        return $datos;
    }

    function updateHorario($id_Asignatura, $horario)
    {

        $filtro = $horario[0]!= NULL ? "`id_aula_fk`=$horario[0] ," : "";
        $filtro = $horario[1]!= NULL ? "`dia_semana`=$horario[1]," : "";
        $filtro = $horario[2]!= NULL ? "`hora_inicio`=$horario[2]," : "";
        $filtro = $horario[3]!= NULL ? "`duracion`=$horario[3]" : "";

        $query="UPDATE `horario_clase_presencial` SET".$filtro." WHERE `id_asignacion_fk`=".$id_Asignatura;
        $this->connect();
        $datos = $this-> getData($query);
        $this->close();
        return $datos;
    }

    function eliminarhorario($id_Asignatura)
    {
        $this->connect();
        $datos = $this-> getData("DELETE FROM `horario_clase_presencial` WHERE `id_horario_pres`=".$id_Asignatura);
        $this->close();
        return $datos;
    }
}
