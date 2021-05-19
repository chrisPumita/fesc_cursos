<?php

include_once "PERSONA.php";
include_once "I_PROFESOR.php";
class PROFESOR extends PERSONA implements I_PROFESOR
{
    private $id_profesor;
    private $id_persona_fk;
    private $id_depto_fk;
    private $nombre_departamento;
    private $no_trabajador;
    private $prefijo;
    private $email;
    private $pw;
    private $key_hash;
    private $fecha_registro;
    private $firma_digital;
    private $firma_digital_img;
    private $estatus_profesor;

    /**
     * @return mixed
     */
    public function getIdProfesor()
    {
        return $this->id_profesor;
    }

    /**
     * @param mixed $id_profesor
     */
    public function setIdProfesor($id_profesor): void
    {
        $this->id_profesor = $id_profesor;
    }

    /**
     * @return mixed
     */
    public function getIdDeptoFk()
    {
        return $this->id_depto_fk;
    }

    /**
     * @param mixed $id_depto_fk
     */
    public function setIdDeptoFk($id_depto_fk): void
    {
        $this->id_depto_fk = $id_depto_fk;
    }

    /**
     * @return mixed
     */
    public function getNombreDepartamento()
    {
        return $this->nombre_departamento;
    }

    /**
     * @param mixed $nombre_departamento
     */
    public function setNombreDepartamento($nombre_departamento): void
    {
        $this->nombre_departamento = $nombre_departamento;
    }

    /**
     * @return mixed
     */
    public function getNoTrabajador()
    {
        return $this->no_trabajador;
    }

    /**
     * @param mixed $no_trabajador
     */
    public function setNoTrabajador($no_trabajador): void
    {
        $this->no_trabajador = $no_trabajador;
    }

    /**
     * @return mixed
     */
    public function getPrefijo()
    {
        return $this->prefijo;
    }

    /**
     * @param mixed $prefijo
     */
    public function setPrefijo($prefijo): void
    {
        $this->prefijo = $prefijo;
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
    public function getKeyHash()
    {
        return $this->key_hash;
    }

    /**
     * @param mixed $key_hash
     */
    public function setKeyHash($key_hash): void
    {
        $this->key_hash = $key_hash;
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
    public function getFirmaDigital()
    {
        return $this->firma_digital;
    }

    /**
     * @param mixed $firma_digital
     */
    public function setFirmaDigital($firma_digital): void
    {
        $this->firma_digital = $firma_digital;
    }

    /**
     * @return mixed
     */
    public function getFirmaDigitalImg()
    {
        return $this->firma_digital_img;
    }

    /**
     * @param mixed $firma_digital_img
     */
    public function setFirmaDigitalImg($firma_digital_img): void
    {
        $this->firma_digital_img = $firma_digital_img;
    }

    /**
     * @return mixed
     */
    public function getEstatusProfesor()
    {
        return $this->estatus_profesor;
    }

    /**
     * @param mixed $estatus_profesor
     */
    public function setEstatusProfesor($estatus_profesor): void
    {
        $this->estatus_profesor = $estatus_profesor;
    }
///+++++++++++++ FUNCIONES PROPIAS DE LA CLASE PROFESOR ++++++++++++++++++///


    public function getListaProfesores($tipo_filtro, $valor)
    {
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
           pf.id_profesor, 
           p.nombre, 
           p.app, 
           p.apm, 
           p.telefono, 
           p.sexo, 
           p.estatus AS estatus_p, 
           pf.email
           pf.pw
           pf.firma_digital
           dp.nombre as Departamento
        FROM profesor pf,persona p,departamentos dp 
        WHERE pf.id_persona = p.id_persona
          AND pf.id_depto_fk = dp.id_depto
          AND p.estatus = 1  ".$filtro." ORDER BY `p`.`nombre` ASC";
        $this->connect();
        $datos = $this-> getData($query);
        $this->close();
        return $datos;
    }

    function updateEstatusProf($id_profesor, $estatus)
    {
        $filtro = $id_profesor > 0 ? " WHERE `profesor`.`id_profesor`=" . $id_profesor : "";
        $this->connect();
        $datos = $this-> executeInstruction("UPDATE `profesor` SET `profesor`.`estatus`= '$estatus' ".$filtro);
        $this->close();
        return $datos;
    }

    function consultaProfesor($id_profesor)
    {
        // TODO: Implement consultaProfesor() method.
        $query="SELECT
                ps.nombre,
                ps.app,
                ps.apm,
                ps.telefono,
                pf.email,
                dp.nombre as Departamento
            FROM
                persona ps,
                profesor pf,
                departamentos dp
            WHERE
                 ps.id_persona = pf.id_persona_fk AND pf.id_depto_fk = dp.id_depto AND pf.id_profesor =".$id_profesor;
        $this->connect();
        $datos = $this-> getData($query);
        $this->close();
        return $datos;
    }

    function agregaProfesor()
    {
        $query = "INSERT INTO `profesor`(`id_profesor`, `id_persona_fk`, `id_depto_fk`, `no_trabajador`, `prefijo`, `email`, `pw`, `key_hash`, `fecha_registro`, `firma_digital`, `firma_digital_img`, `estatus`) 
                  VALUES (NULL,'".$this->getIdPersona()."','".$this->getIdDeptoFk()."','".$this->getNoTrabajador()."','".$this->getPrefijo()."','".$this->getEmail()."','".$this->getPw()."','".$this->getKeyHash()."','".$this->getFechaRegistro()."','".$this->getFirmaDigital()."','".$this->getFirmaDigitalImg()."','".$this->getEstatus()."')";
        $this->connect();
        $datos = $this-> executeInstruction($query);
        $this->close();
        return $datos;
    }

    function modificaProfesor()
    {
        // TODO: Implement modificaProfesor() method.
        $query="UPDATE `profesor` SET `id_persona_fk`='".$this->getIdPersona()."',`id_depto_fk`='".$this->getIdDeptoFk()."',`no_trabajador`='".$this->getNoTrabajador()."',`prefijo`='".$this->getPrefijo()."',
                    `email`='".$this->getEmail()."',`pw`='".$this->getPw()."',`key_hash`='".$this->getKeyHash()."',`fecha_registro`='".$this->getFechaRegistro()."',`firma_digital`='".$this->getFirmaDigital()."'],
                    `firma_dital_img`='".$this->getFirmaDigitalImg()."',`estatus`='".$this->getEstatusProfesor()."' WHERE `id_profesor`=".$this->getIdProfesor();
        $this->connect();
        $datos = $this-> executeInstruction($query);
        $this->close();
        return $datos;

    }

    function modifcaPw($id_profesor,$pw)
    {
        // TODO: Implement modifcaPw() method.
        $query="UPDATE `profesor` SET `pw`='".$pw."' WHERE `id_profesor`=".$id_profesor;
        $this->connect();
        $datos = $this-> executeInstruction($query);
        $this->close();
        return $datos;
    }

    function eliminaProfesor($id_profesor)
    {
        // TODO: Implement eliminaProfesor() method.
        $query="UPDATE profesor SET profesor.estatus=0 WHERE profesor.id_profesor=".$id_profesor;
        $this->connect();
        $datos = $this-> executeInstruction($query);
        $this->close();
        return $datos;
    }

    function creaFirmaDigital()
    {
        // TODO: Implement creaFirmaDigital() method.
    }

    function cargaFirmaImagen()
    {
        // TODO: Implement cargaFirmaImagen() method.
    }
}