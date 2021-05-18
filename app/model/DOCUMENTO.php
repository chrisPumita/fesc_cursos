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

    function modificaDocumento()
    {
        /* recibe un array del documento a modificar
        */
        $this->connect();
        $filtro="";
        $filtro = $this->getFormatoAdmitido() != NULL ? $filtro." `formato_admitido`='" .$this->getFormatoAdmitido()."'," : "";
        $filtro = $this->getTipo() != NULL ? $filtro." `tipo`=" .$this->getTipo()."," : "";
        $filtro = $this->getPesoMaxMb() != NULL ? $filtro." `peso_max_mb`=" .$this->getPesoMaxMb()."," : "";
        $filtro = $this->getEstatus() != NULL ? $filtro." `estatus`=".$this->getEstatus().","  : "";
        $filtro=$filtro."WHERE `id_documento`=".$this->getIdDocumento();
        $datos = $this-> getData("UPDATE `documento` SET  ".$filtro);
        $this->close();
        return $datos;
    }

    function crearDocumento()
    {
        $this->connect();
        $datos = $this-> getData("INSERT INTO `documento`(`id_documento`,`nombre_doc`,`formato_admitido`,`tipo`,`peso_max_mb`,`estatus`)
                                      VALUES (NULL,'".$this->getNombreDoc()."','".$this->getFormatoAdmitido()."','".$this->getTipo()."','".$this->getPesoMaxMb()."','".$this->getEstatus()."');");
        $this->close();
        return $datos;
    }

    function borrarDocumento($idDocumento,$estatus)
    {
        $this->connect();
        $datos = $this-> getData("UPDATE `documento` SET `estatus`=".$estatus."WHERE `id_documento`=".$idDocumento);
        $this->close();
        return $datos;
    }
}