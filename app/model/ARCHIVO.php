<?php
INCLUDE ("DOCS_SOLICITADOS_CURSO.php");

class ARCHIVO extends DOCS_SOLICITADOS_CURSO
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


}