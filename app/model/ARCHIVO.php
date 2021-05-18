<?php
INCLUDE ("DOCS_SOLICITADOS_CURSO.php");
include_once "I_ARCHIVO.php";
class ARCHIVO extends DOCS_SOLICITADOS_CURSO implements I_ARCHIVO
{
    private $id_archivo;
    private $id_doc_sol_fk;
    private $id_inscripcion_fk;
    private $codigo_doc;
    private $name_archivo;
    private $name_file_md5;
    private $path;
    private $fecha_creacion;
    private $notas;
    private $estado_revision;
    private $estado;

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
    public function getIdDocSolFk()
    {
        return $this->id_doc_sol_fk;
    }

    /**
     * @param mixed $id_doc_sol_fk
     */
    public function setIdDocSolFk($id_doc_sol_fk): void
    {
        $this->id_doc_sol_fk = $id_doc_sol_fk;
    }

    /**
     * @return mixed
     */
    public function getIdInscripcionFk()
    {
        return $this->id_inscripcion_fk;
    }

    /**
     * @param mixed $id_inscripcion_fk
     */
    public function setIdInscripcionFk($id_inscripcion_fk): void
    {
        $this->id_inscripcion_fk = $id_inscripcion_fk;
    }

    /**
     * @return mixed
     */
    public function getCodigoDoc()
    {
        return $this->codigo_doc;
    }

    /**
     * @param mixed $codigo_doc
     */
    public function setCodigoDoc($codigo_doc): void
    {
        $this->codigo_doc = $codigo_doc;
    }

    /**
     * @return mixed
     */
    public function getNameArchivo()
    {
        return $this->name_archivo;
    }

    /**
     * @param mixed $name_archivo
     */
    public function setNameArchivo($name_archivo): void
    {
        $this->name_archivo = $name_archivo;
    }

    /**
     * @return mixed
     */
    public function getNameFileMd5()
    {
        return $this->name_file_md5;
    }

    /**
     * @param mixed $name_file_md5
     */
    public function setNameFileMd5($name_file_md5): void
    {
        $this->name_file_md5 = $name_file_md5;
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param mixed $path
     */
    public function setPath($path): void
    {
        $this->path = $path;
    }

    /**
     * @return mixed
     */
    public function getFechaCreacion()
    {
        return $this->fecha_creacion;
    }

    /**
     * @param mixed $fecha_creacion
     */
    public function setFechaCreacion($fecha_creacion): void
    {
        $this->fecha_creacion = $fecha_creacion;
    }

    /**
     * @return mixed
     */
    public function getNotas()
    {
        return $this->notas;
    }

    /**
     * @param mixed $notas
     */
    public function setNotas($notas): void
    {
        $this->notas = $notas;
    }

    /**
     * @return mixed
     */
    public function getEstadoRevision()
    {
        return $this->estado_revision;
    }

    /**
     * @param mixed $estado_revision
     */
    public function setEstadoRevision($estado_revision): void
    {
        $this->estado_revision = $estado_revision;
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
        $query="SELECT 
                    archivo.id_inscripcion_fk,
                    documento.nombre_doc as documento_solicitado,
                    documento.formato_admitido,
                    documento.peso_max_mb,
                    docs_solicitados_curso.obligatorio,
                    archivo.codigo_doc,
                    archivo.name_archivo as documento_subido,
                    archivo.fecha_creacion,
                    archivo.notas,
                    archivo.estado_revision,
                    archivo.estado
                        FROM archivo , docs_solicitados_curso ,documento 
                            WHERE archivo.id_doc_sol_fk=docs_solicitados_curso.id_doc_sol
                                AND docs_solicitados_curso.id_documento_fk =documento.id_documento
                                AND archivo.id_inscripcion_fk=".$id_inscripcion;
       $this->connect();
        $datos = $this-> executeInstruction($query);
        $this->close();
        return $datos;
    }


    function modificaArchivo()
    {
        $datos= $this->getCodigoDoc() != NULL ? "codigo_doc='".$this->getCodigoDoc()." '," : "";
        $datos= $this->getNameArchivo() != NULL ? "name_archivo='".$this->getNameArchivo()." '," : "";
        $datos= $this->getNameFileMd5() != NULL ? "name_file_md5='".$this->getNameFileMd5()." '," : "";
        $datos= $this->getPath() != NULL ? "path='".$this->getPath()." '," : "";
        $datos= $this->getFechaCreacion() != NULL ? "fecha_creacion='".$this->getFechaCreacion()." '," : "";
        $datos= $this->getNotas() != NULL ? "notas='".$this->getNotas()." '," : "";
        $datos= $this->getEstado() != NULL ? "estado='".$this->getEstado()." '," : "";
        $this->connect();
        $datos = $this-> getData("UPDATE `archivo` SET ".$datos." WHERE id_archivo=".$this->getIdArchivo());
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

    function crearArchivo()
    {
        $query="INSERT INTO `archivo`(`id_archivo`, `id_doc_sol_fk`, `id_inscripcion_fk`, `codigo_doc`, `name_archivo`, `name_file_md5`, `path`, `fecha_creacion`, `notas`, `estado_revision`, `estado`) 
                                      VALUES (NULL,'".$this->getIdDocSolFk()."','".$this->getIdInscripcionFk()."','".$this->getCodigoDoc()."','".$this->getNameArchivo()."','".$this->getNameFileMd5().
                                      "','".$this->getPath()."','".$this->getFechaCreacion()."','".$this->getNotas()."','".$this->getEstadoRevision()."','".$this->getEstado()."')";
        $this->connect();
        $datos = $this-> executeInstruction($query);
        $this->close();
        return $datos;
    }

    function crearArchivoPath($archivo)
    {
        $ruta_destino_archivo = "archivos/{$archivo['name']}";
        $archivo_ok = move_uploaded_file($archivo['tmp_name'], $ruta_destino_archivo);
    return $archivo_ok;
    }
}