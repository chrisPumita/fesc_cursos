<?php


class ESTADO_REP
{
	private $id_estado;
	private $clave;
	private $estado;

	private $list_MUNICIPIO;

    /**
     * @return mixed
     */
    public function getListMUNICIPIO()
    {
        return $this->list_MUNICIPIO;
    }

    /**
     * @param mixed $list_MUNICIPIO
     */
    public function setListMUNICIPIO($list_MUNICIPIO): void
    {
        $this->list_MUNICIPIO = $list_MUNICIPIO;
    }

    /**
     * @return mixed
     */
    public function getIdEstado()
    {
        return $this->id_estado;
    }

    /**
     * @param mixed $id_estado
     */
    public function setIdEstado($id_estado): void
    {
        $this->id_estado = $id_estado;
    }

    /**
     * @return mixed
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * @param mixed $clave
     */
    public function setClave($clave): void
    {
        $this->clave = $clave;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param mixed $estado
     */
    public function setEstado($estado): void
    {
        $this->estado = $estado;
    }

    /**
     * @return mixed
     */
    public function getAbrev()
    {
        return $this->abrev;
    }

    /**
     * @param mixed $abrev
     */
    public function setAbrev($abrev): void
    {
        $this->abrev = $abrev;
    }
	private $abrev;
}