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
    public function getIdPersonaFk()
    {
        return $this->id_persona_fk;
    }

    /**
     * @param mixed $id_persona_fk
     */
    public function setIdPersonaFk($id_persona_fk): void
    {
        $this->id_persona_fk = $id_persona_fk;
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


    public function getListaProfesores($filtro)
    {
        $this->connect();
        $datos = $this-> getData("SELECT `profesor`.`id_profesor`,`persona`.`*`,`departamentos`.`nombre` as departamento 
                                               FROM `persona`,`departamentos`,`profesor`
                                                    WHERE  `persona`.`id_persona` in (SELECT `profesor`.`id_persona_fk` FROM `profesor` )
                                                    AND `profesor`.`id_depto_fk`=`departamentos`.`id_depto`
                                                    AND `profesor`.`id_persona_fk`=`persona`.`id_persona` ".$filtro);
        $this->close();
        return $datos;
    }

    function updateEstatusProf($id_profesor, $estatus)
    {
        $filtro = $id_profesor > 0 ? " WHERE `profesor`.`id_profesor`=" . $id_profesor : "";
        $this->connect();
        $datos = $this-> getData("UPDATE `profesor` SET `profesor`.`estatus`= '$estatus' ".$filtro);
        $this->close();
        return $datos;
    }

    function consultaProfesor($id_profesor)
    {
        // TODO: Implement consultaProfesor() method.
    }

    function agregaProfesor()
    {
        $query = "";
    }

    function modificaProfesor()
    {
        // TODO: Implement modificaProfesor() method.
    }

    function modifcaPw()
    {
        // TODO: Implement modifcaPw() method.
    }

    function eliminaProfesor($id_profesor)
    {
        // TODO: Implement eliminaProfesor() method.
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