<?php

include_once "DOCS_SOLICITADOS_CURSO.php";

class CURSO extends CONEXION_M implements I_CURSO
{
    private $id_curso;
    private $id_profesor_admin_acredita;
    private $id_profesor_autor;
    private $codigo;
    private $nombre_curso;
    private $dirigido_a;
    private $objetivo;
    private $descripcion;
    private $no_sesiones;
    private $antecedentes;
    private $aprobado;
    private $costo_sugerido;
    private $link_temario_pdf;
    private $fecha_creacion;
    private $fecha_acreditacion;
    private $banner_img;
    private $tipo_curso;
    /*Composiciones*/
    private $lista_temas;
    private $lista_grupos;
    private $lista_docs_solicitados;
    private $lista_group_keys;
    private $obj_profesor_autor;
    private $obj_profesor_admin_acredita;

    /**
     * @return mixed
     */
    public function getIdCurso()
    {
        return $this->id_curso;
    }

    /**
     * @param mixed $id_curso
     */
    public function setIdCurso($id_curso): void
    {
        $this->id_curso = $id_curso;
    }

    /**
     * @return mixed
     */
    public function getIdProfesorAdminAcredita()
    {
        return $this->id_profesor_admin_acredita;
    }

    /**
     * @param mixed $id_profesor_admin_acredita
     */
    public function setIdProfesorAdminAcredita($id_profesor_admin_acredita): void
    {
        $this->id_profesor_admin_acredita = $id_profesor_admin_acredita;
    }

    /**
     * @return mixed
     */
    public function getIdProfesorAutor()
    {
        return $this->id_profesor_autor;
    }

    /**
     * @param mixed $id_profesor_autor
     */
    public function setIdProfesorAutor($id_profesor_autor): void
    {
        $this->id_profesor_autor = $id_profesor_autor;
    }

    /**
     * @return mixed
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * @param mixed $codigo
     */
    public function setCodigo($codigo): void
    {
        $this->codigo = $codigo;
    }

    /**
     * @return mixed
     */
    public function getNombreCurso()
    {
        return $this->nombre_curso;
    }

    /**
     * @param mixed $nombre_curso
     */
    public function setNombreCurso($nombre_curso): void
    {
        $this->nombre_curso = $nombre_curso;
    }

    /**
     * @return mixed
     */
    public function getDirigidoA()
    {
        return $this->dirigido_a;
    }

    /**
     * @param mixed $dirigido_a
     */
    public function setDirigidoA($dirigido_a): void
    {
        $this->dirigido_a = $dirigido_a;
    }

    /**
     * @return mixed
     */
    public function getObjetivo()
    {
        return $this->objetivo;
    }

    /**
     * @param mixed $objetivo
     */
    public function setObjetivo($objetivo): void
    {
        $this->objetivo = $objetivo;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param mixed $descripcion
     */
    public function setDescripcion($descripcion): void
    {
        $this->descripcion = $descripcion;
    }

    /**
     * @return mixed
     */
    public function getNoSesiones()
    {
        return $this->no_sesiones;
    }

    /**
     * @param mixed $no_sesiones
     */
    public function setNoSesiones($no_sesiones): void
    {
        $this->no_sesiones = $no_sesiones;
    }

    /**
     * @return mixed
     */
    public function getAntecedentes()
    {
        return $this->antecedentes;
    }

    /**
     * @param mixed $antecedentes
     */
    public function setAntecedentes($antecedentes): void
    {
        $this->antecedentes = $antecedentes;
    }

    /**
     * @return mixed
     */
    public function getAprobado()
    {
        return $this->aprobado;
    }

    /**
     * @param mixed $aprobado
     */
    public function setAprobado($aprobado): void
    {
        $this->aprobado = $aprobado;
    }

    /**
     * @return mixed
     */
    public function getCostoSugerido()
    {
        return $this->costo_sugerido;
    }

    /**
     * @param mixed $costo_sugerido
     */
    public function setCostoSugerido($costo_sugerido): void
    {
        $this->costo_sugerido = $costo_sugerido;
    }

    /**
     * @return mixed
     */
    public function getLinkTemarioPdf()
    {
        return $this->link_temario_pdf;
    }

    /**
     * @param mixed $link_temario_pdf
     */
    public function setLinkTemarioPdf($link_temario_pdf): void
    {
        $this->link_temario_pdf = $link_temario_pdf;
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
    public function getFechaAcreditacion()
    {
        return $this->fecha_acreditacion;
    }

    /**
     * @param mixed $fecha_acreditacion
     */
    public function setFechaAcreditacion($fecha_acreditacion): void
    {
        $this->fecha_acreditacion = $fecha_acreditacion;
    }

    /**
     * @return mixed
     */
    public function getBannerImg()
    {
        return $this->banner_img;
    }

    /**
     * @param mixed $banner_img
     */
    public function setBannerImg($banner_img): void
    {
        $this->banner_img = $banner_img;
    }

    /**
     * @return mixed
     */
    public function getTipoCurso()
    {
        return $this->tipo_curso;
    }

    /**
     * @param mixed $tipo_curso
     */
    public function setTipoCurso($tipo_curso): void
    {
        $this->tipo_curso = $tipo_curso;
    }

    /**
     * @return mixed
     */
    public function getListaTemas()
    {
        return $this->consultaTemas($this->getIdCurso());
        //return $this->lista_temas;
    }

    /**
     * @param mixed $lista_temas
     */
    public function setListaTemas($lista_temas): void
    {
        $this->lista_temas = $lista_temas;
    }

    /**
     * @return mixed
     */
    public function getListaGrupos()
    {
        return $this->consultaGrupo($this->getIdCurso());
        //return $this->lista_grupos;
    }

    /**
     * @param mixed $lista_grupos
     */
    public function setListaGrupos($lista_grupos): void
    {
        $this->lista_grupos = $lista_grupos;
    }

    /**
     * @return mixed
     */
    public function getListaDocsSolicitados()
    {
        return $this->consultaDocsSolicitados($this->getIdCurso());
        //return $this->lista_docs_solicitados;
    }

    /**
     * @param mixed $lista_docs_solicitados
     */
    public function setListaDocsSolicitados($lista_docs_solicitados): void
    {
        $this->lista_docs_solicitados = $lista_docs_solicitados;
    }

    /**
     * @return mixed
     */
    public function getListaGroupKeys()
    {
        return $this->consultaGroupKeys($this->getIdCurso());
        //return $this->lista_group_keys;
    }

    /**
     * @param mixed $lista_group_keys
     */
    public function setListaGroupKeys($lista_group_keys): void
    {
        $this->lista_group_keys = $lista_group_keys;
    }

    /**
     * @return mixed
     */
    public function getObjProfesorAutor()
    {
        return $this->obj_profesor_autor;
    }

    /**
     * @param mixed $obj_profesor_autor
     */
    public function setObjProfesorAutor($obj_profesor_autor): void
    {
        $this->obj_profesor_autor = $obj_profesor_autor;
    }

    /**
     * @return mixed
     */
    public function getObjProfesorAdminAcredita()
    {
        return $this->obj_profesor_admin_acredita;
    }

    /**
     * @param mixed $obj_profesor_admin_acredita
     */
    public function setObjProfesorAdminAcredita($obj_profesor_admin_acredita): void
    {
        $this->obj_profesor_admin_acredita = $obj_profesor_admin_acredita;
    }

    public function consultaTemas($id_curso)
    {
        $this->connect();
        $temas = $this-> getData("SELECT * FROM `temas` WHERE `id_curso_fk` = ".$id_curso." ORDER BY `temas`.`id_tema` ASC ");
        $this->close();
        return $temas;
        // TODO: Implement consultaTemas() method.
    }
    public function consultaGroupKeys($id_curso)
    {
        $this->connect();
        $temas = $this-> getData("SELECT * FROM `group_key` WHERE `id_curso_fk` = ".$id_curso." ORDER BY `group_key`.`id_curso_fk` ASC ");
        $this->close();
        return $temas;
        // TODO: Implement consultaGroupKeys() method.
    }

    public function consultaDocsSolicitados($id_curso)
    {
        $docs = new DOCS_SOLICITADOS_CURSO();
        return $docs -> consultarListaDocumentos($id_curso);
    }

    public function consultaGrupos($id_curso)
    {
        // TODO: Implement consultaGrupos() method.
    }

    function registraCurso($curso)
    {
        // TODO: Implement registraCurso() method.
    }

    function actualizaCurso($curso)
    {
        // TODO: Implement actualizaCurso() method.
    }

    function agregaTema($tema)
    {
        // TODO: Implement agregaTema() method.
    }

    function quitarTema($idTema)
    {
        // TODO: Implement quitarTema() method.
    }

    function actualizaTema($tema)
    {
        // TODO: Implement actualizaTema() method.
    }

    function agregaKeywordGrupo($keyword)
    {
        // TODO: Implement agregaKeywordGrupo() method.
    }

    function quitarKerword($id_key, $id_curso)
    {
        // TODO: Implement quitarKerword() method.
    }

    function agregaDocumentoSolicitado($documentoSolicitado)
    {
        // TODO: Implement agregaDocumentoSolicitado() method.
    }

    function quitarDocumetoSolicitado($id_doc_solicitado, $id_curso)
    {
        // TODO: Implement quitarDocumetoSolicitado() method.
    }
}