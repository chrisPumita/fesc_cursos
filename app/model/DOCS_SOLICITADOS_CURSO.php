<?php
include("DOCUMENTO.php");
include_once "I_DOCS_SOLICITADOS.php";
class DOCS_SOLICITADOS_CURSO extends  DOCUMENTO implements I_DOCS_SOLICITADOS
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


    function consultarListaDocumentos($id_curso)
    {
        $filtro = $id_curso > 0 ? " WHERE `docs_solicitados_curso`.`id_curso_fk`=" . $id_curso : "";
        $this->connect();
        $datos = $this-> getData("SELECT `documento`.*, `docs_solicitados_curso`.`obligatorio` 
                                        FROM `documento`, `docs_solicitados_curso`".$filtro);
        $this->close();
        return $datos;
    }


}