<?php
include("DOCUMENTO.php");

class DOCS_SOLICITADOS_CURSO extends  DOCUMENTO
{
    private $id_doc_sol;
    private $id_documento_fk;
    private $id_curso_fk;
    private $obligatorio;


    /**
     * @return mixed
     */
    public function getIdDocSol()
    {
        return $this->id_doc_sol;
    }

    /**
     * @param mixed $id_doc_sol
     */
    public function setIdDocSol($id_doc_sol): void
    {
        $this->id_doc_sol = $id_doc_sol;
    }

    /**
     * @return mixed
     */
    public function getIdDocumentoFk()
    {
        return $this->id_documento_fk;
    }

    /**
     * @param mixed $id_documento_fk
     */
    public function setIdDocumentoFk($id_documento_fk): void
    {
        $this->id_documento_fk = $id_documento_fk;
    }

    /**
     * @return mixed
     */
    public function getIdCursoFk()
    {
        return $this->id_curso_fk;
    }

    /**
     * @param mixed $id_curso_fk
     */
    public function setIdCursoFk($id_curso_fk): void
    {
        $this->id_curso_fk = $id_curso_fk;
    }

    /**
     * @return mixed
     */
    public function getObligatorio()
    {
        return $this->obligatorio;
    }

    /**
     * @param mixed $obligatorio
     */
    public function setObligatorio($obligatorio): void
    {
        $this->obligatorio = $obligatorio;
    }


}