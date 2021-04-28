<?php

class PERSONA
{
    private $id_persona;
    private $nombre;
    private $app;
    private $apm;
    private $telefono;
    private $sexo;
    private $estatus;

    /**
     * PERSONA constructor.
     * @param $id_persona
     * @param $nombre
     * @param $app
     * @param $apm
     * @param $telefono
     * @param $sexo
     * @param $estatus
     */
    public function __construct($id_persona, $nombre, $app, $apm, $telefono, $sexo, $estatus)
    {
        $this->id_persona = $id_persona;
        $this->nombre = $nombre;
        $this->app = $app;
        $this->apm = $apm;
        $this->telefono = $telefono;
        $this->sexo = $sexo;
        $this->estatus = $estatus;
    }

    /**
     * @return mixed
     */
    public function getIdPersona()
    {
        return $this->id_persona;
    }

    /**
     * @param mixed $id_persona
     */
    public function setIdPersona($id_persona)
    {
        $this->id_persona = $id_persona;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getApp()
    {
        return $this->app;
    }

    /**
     * @param mixed $app
     */
    public function setApp($app)
    {
        $this->app = $app;
    }

    /**
     * @return mixed
     */
    public function getApm()
    {
        return $this->apm;
    }

    /**
     * @param mixed $apm
     */
    public function setApm($apm)
    {
        $this->apm = $apm;
    }

    /**
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * @param mixed $telefono
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    /**
     * @return mixed
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * @param mixed $sexo
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    /**
     * @return mixed
     */
    public function getEstatus()
    {
        return $this->estatus;
    }

    /**
     * @param mixed $estatus
     */
    public function setEstatus($estatus)
    {
        $this->estatus = $estatus;
    }
}