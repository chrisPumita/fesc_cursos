<?php

include("PERSONA.php");

class ALUMNO extends  PERSONA
{
    private $id_alumno;
    private $id_municipio;
    private $id_universidad;
    private $matricula;
    private $nombre_uni;
    private $tipo_procedencia;
    private $carrera_especialidad;
    private $email;
    private $pw;
    private $fecha_registro;
    private $perfil_image;
    private $estatus_alumno;

    /**
     * @return mixed
     */
    public function getIdAlumno()
    {
        return $this->id_alumno;
    }

    /**
     * @param mixed $id_alumno
     */
    public function setIdAlumno($id_alumno): void
    {
        $this->id_alumno = $id_alumno;
    }

    /**
     * @return mixed
     */
    public function getIdMunicipio()
    {
        return $this->id_municipio;
    }

    /**
     * @param mixed $id_municipio
     */
    public function setIdMunicipio($id_municipio): void
    {
        $this->id_municipio = $id_municipio;
    }

    /**
     * @return mixed
     */
    public function getIdUniversidad()
    {
        return $this->id_universidad;
    }

    /**
     * @param mixed $id_universidad
     */
    public function setIdUniversidad($id_universidad): void
    {
        $this->id_universidad = $id_universidad;
    }

    /**
     * @return mixed
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * @param mixed $matricula
     */
    public function setMatricula($matricula): void
    {
        $this->matricula = $matricula;
    }

    /**
     * @return mixed
     */
    public function getNombreUni()
    {
        return $this->nombre_uni;
    }

    /**
     * @param mixed $nombre_uni
     */
    public function setNombreUni($nombre_uni): void
    {
        $this->nombre_uni = $nombre_uni;
    }

    /**
     * @return mixed
     */
    public function getTipoProcedencia()
    {
        return $this->tipo_procedencia;
    }

    /**
     * @param mixed $tipo_procedencia
     */
    public function setTipoProcedencia($tipo_procedencia): void
    {
        $this->tipo_procedencia = $tipo_procedencia;
    }

    /**
     * @return mixed
     */
    public function getCarreraEspecialidad()
    {
        return $this->carrera_especialidad;
    }

    /**
     * @param mixed $carrera_especialidad
     */
    public function setCarreraEspecialidad($carrera_especialidad): void
    {
        $this->carrera_especialidad = $carrera_especialidad;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPw()
    {
        return $this->pw;
    }

    /**
     * @param mixed $pw
     */
    public function setPw($pw): void
    {
        $this->pw = $pw;
    }

    /**
     * @return mixed
     */
    public function getFechaRegistro()
    {
        return $this->fecha_registro;
    }

    /**
     * @param mixed $fecha_registro
     */
    public function setFechaRegistro($fecha_registro): void
    {
        $this->fecha_registro = $fecha_registro;
    }

    /**
     * @return mixed
     */
    public function getPerfilImage()
    {
        return $this->perfil_image;
    }

    /**
     * @param mixed $perfil_image
     */
    public function setPerfilImage($perfil_image): void
    {
        $this->perfil_image = $perfil_image;
    }

    /**
     * @return mixed
     */
    public function getEstatusAlumno()
    {
        return $this->estatus_alumno;
    }

    /**
     * @param mixed $estatus_alumno
     */
    public function setEstatusAlumno($estatus_alumno): void
    {
        $this->estatus_alumno = $estatus_alumno;
    }


}