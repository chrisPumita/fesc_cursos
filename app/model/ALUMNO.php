<?php

include_once "PERSONA.php";
include_once "I_ALUMNO.php";
class ALUMNO extends  PERSONA implements I_ALUMNO
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

        //Asociacion
    private $cuenta_SERVICIO_SOCIAL;

    /**
     * @return mixed
     */
    public function getCuentaSERVICIOSOCIAL()
    {
        return $this->cuenta_SERVICIO_SOCIAL;
    }

    /**
     * @param mixed $cuenta_SERVICIO_SOCIAL
     */
    public function setCuentaSERVICIOSOCIAL($cuenta_SERVICIO_SOCIAL): void
    {
        $this->cuenta_SERVICIO_SOCIAL = $cuenta_SERVICIO_SOCIAL;
    }
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


    /////Implementacion de metodos de la interfaz

    function consultaAlumno()
    {
        // TODO: Implement consultaAlumno() method.
    }

    function consultaAlumnos($filtro)
    {
        // TODO: Implement consultaAlumnos() method.
    }

    function agregaAlumno()
    {
        $query ="INSERT INTO `alumno` (
                      `id_alumno`, 
                      `id_municipio`, 
                      `id_universidad`, 
                      `id_persona`, 
                      `matricula`, 
                      `nombre_uni`, 
                      `tipo_procedencia`, 
                      `carrera_especialidad`, 
                      `email`, 
                      `pw`, 
                      `fecha_registro`, 
                      `perfil_image`, 
                      `estatus`) 
                      VALUES (NULL, '".$this->getIdMunicipio()."', '".$this->id_universidad."',
                       '".$this->getIdPersona()."', '".$this->getMatricula()."', '".$this->getNombreUni()."',
                        '".$this->getTipoProcedencia()."', '".$this->getCarreraEspecialidad()."',
                         '".$this->getEmail()."', '".$this->getPw()."', '".date('Y-m-d H:i:s')."', '', '".$this->getEstatusAlumno()."')";
        $this->connect();
        $result = $this->executeInstruction($query);
        $this->close();
        return $result;
    }

    function modificaAlumno()
    {
        // TODO: Implement modificaAlumno() method.
    }

    function modifcaPw()
    {
        // TODO: Implement modifcaPw() method.
    }

    function eliminaAlumno($id_alumno)
    {
        // TODO: Implement eliminaAlumno() method.
    }

    function consultaCuentaServSoc()
    {
        // TODO: Implement consultaCuentaServSoc() method.
    }

    function crearCuentaServSoc()
    {
        // TODO: Implement crearCuentaServSoc() method.
    }

    function modificarCuentaServSoc()
    {
        // TODO: Implement modificarCuentaServSoc() method.
    }

    function terminarServSoc()
    {
        // TODO: Implement terminarServSoc() method.
    }

    function cambiarClaveServSoc()
    {
        // TODO: Implement cambiarClaveServSoc() method.
    }
}