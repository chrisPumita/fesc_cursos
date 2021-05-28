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
    private $id_procedencia;
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
    public function getIdProcedencia()
    {
        return $this->id_procedencia;
    }

    /**
     * @param mixed $id_procedencia
     */
    public function setIdProcedencia($id_procedencia): void
    {
        $this->id_procedencia = $id_procedencia;
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


    function consultaAlumnos($tipo_filtro, $valor)
    {
        //Defiunir Control de filtro
        //`al`.`carrera_especialidad`
        $filtro = "";
        switch ($tipo_filtro){
            case "1":
                //Filtro por sexo
                $filtro = " AND p.sexo = ".$valor;
                break;
            case "2":
                //Filtro por municipio
                $filtro = " AND al.id_municipio = ".$valor;
                break;
            case "3":
                //Filtro por por estatus de la cuenta (activa/inactva)
                $filtro = " AND p.estatus = ".$valor;
                break;
            case "4":
                //Filtro por por Id de iniversidad
                $filtro = " AND al.id_universidad = ".$valor;
                break;
            case "5":
                //Filtro por tipo de procedenceia
                $filtro = " AND al.tipo_procedencia = ".$valor;
                break;
            case "6":
                //Filtro por carrera
                $filtro = " AND al.carrera_especialidad = ".$valor;
                break;
            default:
                $filtro = "";
                break;
        }
        $query = "SELECT 
           al.id_alumno, 
           p.nombre, 
           p.app, 
           p.apm, 
           p.telefono, 
           p.sexo, 
           p.estatus AS estatus_p, 
           al.id_municipio, 
           al.id_universidad, 
           al.id_persona, 
           al.matricula, 
           al.nombre_uni, 
           al.carrera_especialidad, 
           al.email, 
           al.fecha_registro, 
           al.perfil_image, 
           al.estatus AS estatus_al ,
           tp.id_tipo_procedencia,
           tp.tipo_procedencia
        FROM alumno al,persona p , tipo_procedencia tp
        WHERE al.id_persona = p.id_persona AND al.id_tipo_procedencia_fk = tp.id_tipo_procedencia
        AND p.estatus = 1  ".$filtro." ORDER BY `p`.`nombre` ASC";

        $this->connect();
        $result = $this->getData($query);
        $this->close();
        return $result;

    }

    function agregaAlumno()
    {
        $query ="INSERT INTO `alumno` (
                      `id_alumno`, 
                      `id_municipio`, 
                      `id_universidad`, 
                      `id_persona`, 
                      `id_tipo_procedencia_fk`, 
                      `matricula`, 
                      `nombre_uni`, 
                      `carrera_especialidad`, 
                      `email`, 
                      `pw`, 
                      `fecha_registro`, 
                      `perfil_image`, 
                      `estatus`) 
                      VALUES (NULL, '".$this->getIdMunicipio()."', '".$this->id_universidad."',
                       '".$this->getIdPersona()."', '".$this->getIdProcedencia()."', '".$this->getMatricula()."', '".$this->getNombreUni()."',
                        '".$this->getCarreraEspecialidad()."',
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

    function editarCuenta($id_lumno, $estatus)
    {
        // TODO: Implement editarCuenta() method.
    }
}