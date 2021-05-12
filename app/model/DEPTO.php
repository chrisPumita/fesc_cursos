<?php


class DEPTO
{
    private $id_depto;
    private $nombre_depto;

    /**
     * @return mixed
     */
    public function getIdDepto()
    {
        return $this->id_depto;
    }

    /**
     * @param mixed $id_depto
     */
    public function setIdDepto($id_depto): void
    {
        $this->id_depto = $id_depto;
    }

    /**
     * @return mixed
     */
    public function getNombreDepto()
    {
        return $this->nombre_depto;
    }

    /**
     * @param mixed $nombre_depto
     */
    public function setNombreDepto($nombre_depto): void
    {
        $this->nombre_depto = $nombre_depto;
    }
}