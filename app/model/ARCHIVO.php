<?php
INCLUDE ("DOCS_SOLICITADOS_CURSO.php");
include_once "I_ARCHIVO.php";
class ARCHIVO extends DOCS_SOLICITADOS_CURSO implements I_ARCHIVO
{
    private $id_archivoid_doc_sol_fk;
    private $id_archivoid_inscripcion_fk;
    private $id_archivocodigo_doc;
    private $id_archivoname_archivo;
    private $id_archivoname_file_md5;
    private $id_archivopath;
    private $id_archivofecha_creacion;
    private $id_archivonotas;
    private $id_archivoestado_revision;
    private $estado;

    private $id_archivo;

    /**
     * @return mixed
     */
    public function getIdArchivo()
    {
        return $this->id_archivo;
    }

    /**
     * @param mixed $id_archivo
     */
    public function setIdArchivo($id_archivo): void
    {
        $this->id_archivo = $id_archivo;
    }

    /**
     * @return mixed
     */
    public function getIdArchivoidDocSolFk()
    {
        return $this->id_archivoid_doc_sol_fk;
    }

    /**
     * @param mixed $id_archivoid_doc_sol_fk
     */
    public function setIdArchivoidDocSolFk($id_archivoid_doc_sol_fk): void
    {
        $this->id_archivoid_doc_sol_fk = $id_archivoid_doc_sol_fk;
    }

    /**
     * @return mixed
     */
    public function getIdArchivoidInscripcionFk()
    {
        return $this->id_archivoid_inscripcion_fk;
    }

    /**
     * @param mixed $id_archivoid_inscripcion_fk
     */
    public function setIdArchivoidInscripcionFk($id_archivoid_inscripcion_fk): void
    {
        $this->id_archivoid_inscripcion_fk = $id_archivoid_inscripcion_fk;
    }

    /**
     * @return mixed
     */
    public function getIdArchivocodigoDoc()
    {
        return $this->id_archivocodigo_doc;
    }

    /**
     * @param mixed $id_archivocodigo_doc
     */
    public function setIdArchivocodigoDoc($id_archivocodigo_doc): void
    {
        $this->id_archivocodigo_doc = $id_archivocodigo_doc;
    }

    /**
     * @return mixed
     */
    public function getIdArchivonameArchivo()
    {
        return $this->id_archivoname_archivo;
    }

    /**
     * @param mixed $id_archivoname_archivo
     */
    public function setIdArchivonameArchivo($id_archivoname_archivo): void
    {
        $this->id_archivoname_archivo = $id_archivoname_archivo;
    }

    /**
     * @return mixed
     */
    public function getIdArchivonameFileMd5()
    {
        return $this->id_archivoname_file_md5;
    }

    /**
     * @param mixed $id_archivoname_file_md5
     */
    public function setIdArchivonameFileMd5($id_archivoname_file_md5): void
    {
        $this->id_archivoname_file_md5 = $id_archivoname_file_md5;
    }

    /**
     * @return mixed
     */
    public function getIdArchivopath()
    {
        return $this->id_archivopath;
    }

    /**
     * @param mixed $id_archivopath
     */
    public function setIdArchivopath($id_archivopath): void
    {
        $this->id_archivopath = $id_archivopath;
    }

    /**
     * @return mixed
     */
    public function getIdArchivofechaCreacion()
    {
        return $this->id_archivofecha_creacion;
    }

    /**
     * @param mixed $id_archivofecha_creacion
     */
    public function setIdArchivofechaCreacion($id_archivofecha_creacion): void
    {
        $this->id_archivofecha_creacion = $id_archivofecha_creacion;
    }

    /**
     * @return mixed
     */
    public function getIdArchivonotas()
    {
        return $this->id_archivonotas;
    }

    /**
     * @param mixed $id_archivonotas
     */
    public function setIdArchivonotas($id_archivonotas): void
    {
        $this->id_archivonotas = $id_archivonotas;
    }

    /**
     * @return mixed
     */
    public function getIdArchivoestadoRevision()
    {
        return $this->id_archivoestado_revision;
    }

    /**
     * @param mixed $id_archivoestado_revision
     */
    public function setIdArchivoestadoRevision($id_archivoestado_revision): void
    {
        $this->id_archivoestado_revision = $id_archivoestado_revision;
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


    function consultaArchivos($id_inscripcion)
    {
        $filtro = $id_inscripcion > 0 ? " WHERE `archivo`.`id_inscripcion_fk` =" . $id_inscripcion : "";
        $this->connect();
        $datos = $this-> getData("SELECT `archivo`.* 
                                        FROM `archivo`".$filtro);
        $this->close();
        return $datos;
    }


    function modificaArchivo($archivo)
    {
        /* recibe un array del documento a modificar
       */
        $this->connect();
        $filtro="";
        $filtro = archivo[1]!= NULL ? $filtro." `name_archivo`='" . archivo[1]."'," : "";
        $filtro = archivo[2]!= NULL ? $filtro." `path`=" . archivo[2]."," : "";
        $filtro = archivo[3]!= NULL ? $filtro." `fecha_creacion`=" . archivo[3]."," : "";
        $filtro = archivo[4]!= NULL ? $filtro." `estado_revision`=" . $archivo[4] : "";
        $filtro = archivo[5]!= NULL ? $filtro." `estado`=" . archivo[5] : "";
        $filtro=$filtro."WHERE `id_archivo`=".archivo[0];
        $datos = $this-> getData("UPDATE `archivo` SET  ".$filtro);
        $this->close();
        return $datos;
    }
 

    function eliminarArchivo($id_archivo)
    {

        $this->connect();
        $datos = $this-> getData("DELETE FROM `archivo` WHERE `id_archivo`=".$id_archivo);
        $this->close();
        return $datos;
    }

    function eliminaArchivoPath($path)
    {
        unlink($path);
    }

    function crearArchivo($archivo)
    {
        $this->connect();
        $datos = $this-> getData("INSERT INTO `archivo`(`id_archivo`, `id_doc_sol_fk`, `id_inscripcion_fk`, `codigo_doc`, `name_archivo`, `name_file_md5`, `path`, `fecha_creacion`, `notas`, `estado_revision`, `estado`) 
                                      VALUES (NULL,'$archivo[0]','$archivo[1]','$archivo[2]','$archivo[3]','$archivo[4]','$archivo[5]','$archivo[6]','$archivo[7]','$archivo[8]','$archivo[9]') ");
        $this->close();
        return $datos;
    }

    function crearArchivoPath($archivo)
    {
        $ruta_destino_archivo = "archivos/{$archivo['name']}";
        $archivo_ok = move_uploaded_file($archivo['tmp_name'], $ruta_destino_archivo);
    }
}