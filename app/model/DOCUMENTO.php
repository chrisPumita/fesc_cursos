<?php
include ("CONEXION_M.php");
include_once "I_DOCUMENTOS.php";

class DOCUMENTO extends CONEXION_M implements I_DOCUMENTOS
{
    private $id_documento;
    private $nombre_doc;
    private $formato_admitido;
    private $tipo;
    private $peso_max_mb;
    private $estatus;
    /**
     * @return mixed
     */
    public function getIdDocumento()
    {
        return $this->id_documento;
    }

    /**
     * @param mixed $id_documento
     */
    public function setIdDocumento($id_documento): void
    {
        $this->id_documento = $id_documento;
    }

    /**
     * @return mixed
     */
    public function getNombreDoc()
    {
        return $this->nombre_doc;
    }

    /**
     * @param mixed $nombre_doc
     */
    public function setNombreDoc($nombre_doc): void
    {
        $this->nombre_doc = $nombre_doc;
    }

    /**
     * @return mixed
     */
    public function getFormatoAdmitido()
    {
        return $this->formato_admitido;
    }

    /**
     * @param mixed $formato_admitido
     */
    public function setFormatoAdmitido($formato_admitido): void
    {
        $this->formato_admitido = $formato_admitido;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo): void
    {
        $this->tipo = $tipo;
    }

    /**
     * @return mixed
     */
    public function getPesoMaxMb()
    {
        return $this->peso_max_mb;
    }

    /**
     * @param mixed $peso_max_mb
     */
    public function setPesoMaxMb($peso_max_mb): void
    {
        $this->peso_max_mb = $peso_max_mb;
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
    public function setEstatus($estatus): void
    {
        $this->estatus = $estatus;
    }


    function consultaDocumentos()
    {
        $this->connect();
        $datos = $this-> getData("SELECT * FROM `documento` ");
        $this->close();
        return $datos;
    }
}