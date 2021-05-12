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

    function modificaDocumento($documento)
    {
        /* recibe un array del documento a modificar
        */
        $this->connect();
        $filtro="";
        $filtro = $documento[2]!= NULL ? $filtro." `formato_admitido`='" . $documento[2]."'," : "";
        $filtro = $documento[3]!= NULL ? $filtro." `tipo`=" . $documento[3]."," : "";
        $filtro = $documento[4]!= NULL ? $filtro." `peso_max_mb`=" . $documento[4]."," : "";
        $filtro = $documento[5]!= NULL ? $filtro." `estatus`=" . $documento[5] : "";
        $filtro=$filtro."WHERE `id_documento`=".$documento[0];
        $datos = $this-> getData("UPDATE `documento` SET  ".$filtro);
        $this->close();
        return $datos;
    }

    function crearDocumento($documento)
    {
        $this->connect();
        $valores="NULL";
        for($i=0;$i=4;$i++){
            $valores=$valores.",'".$documento[$i+1]."'";
        }

        $datos = $this-> getData("INSERT INTO `documento`(`id_documento`,`nombre_doc`,`formato_admitido`,`tipo`,`peso_max_mb`,`estatus`) VALUES ( ".$valores.");");
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