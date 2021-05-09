<?php
include_once "CONEXION_M.php";

class AULAS extends CONEXION_M
{
	private $id_aula;
	private $edificio;
	private $aula;
	private $campus;

    /**
     * @return mixed
     */
    public function getIdAula()
    {
        return $this->id_aula;
    }

    /**
     * @param mixed $id_aula
     */
    public function setIdAula($id_aula): void
    {
        $this->id_aula = $id_aula;
    }

    /**
     * @return mixed
     */
    public function getEdificio()
    {
        return $this->edificio;
    }

    /**
     * @param mixed $edificio
     */
    public function setEdificio($edificio): void
    {
        $this->edificio = $edificio;
    }

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
    public function getCampus()
    {
        return $this->campus;
    }

    /**
     * @param mixed $campus
     */
    public function setCampus($campus): void
    {
        $this->campus = $campus;
    }

    /**
     * @return mixed
     */
    public function getCupo()
    {
        return $this->cupo;
    }

    /**
     * @param mixed $cupo
     */
    public function setCupo($cupo): void
    {
        $this->cupo = $cupo;
    }

    /**
     * @return mixed
     */
    public function getEstad()
    {
        return $this->estad;
    }

    /**
     * @param mixed $estad
     */
    public function setEstad($estad): void
    {
        $this->estad = $estad;
    }
	private $cupo;
	private $estad;
}