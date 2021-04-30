<?php


class INSCRIPCION
{
    private $id_inscripcion;
    private $id_alumno_fk;
    private $id_asignacion_fk;
    private $pago_confirmado;
    private $autorizacion_inscripcion;
    private $validacion_constancia;
    private $fecha_solicitud;
    private $fecha_conclusion;
    private $notas;
    private $estatus;
    /*Composiciones*/
    private $lista_archivos;

    /**
     * @return mixed
     */
    public function getIdInscripcion()
    {
        return $this->id_inscripcion;
    }

    /**
     * @param mixed $id_inscripcion
     */
    public function setIdInscripcion($id_inscripcion): void
    {
        $this->id_inscripcion = $id_inscripcion;
    }

    /**
     * @return mixed
     */
    public function getIdAlumnoFk()
    {
        return $this->id_alumno_fk;
    }

    /**
     * @param mixed $id_alumno_fk
     */
    public function setIdAlumnoFk($id_alumno_fk): void
    {
        $this->id_alumno_fk = $id_alumno_fk;
    }

    /**
     * @return mixed
     */
    public function getIdAsignacionFk()
    {
        return $this->id_asignacion_fk;
    }

    /**
     * @param mixed $id_asignacion_fk
     */
    public function setIdAsignacionFk($id_asignacion_fk): void
    {
        $this->id_asignacion_fk = $id_asignacion_fk;
    }

    /**
     * @return mixed
     */
    public function getPagoConfirmado()
    {
        return $this->pago_confirmado;
    }

    /**
     * @param mixed $pago_confirmado
     */
    public function setPagoConfirmado($pago_confirmado): void
    {
        $this->pago_confirmado = $pago_confirmado;
    }

    /**
     * @return mixed
     */
    public function getAutorizacionInscripcion()
    {
        return $this->autorizacion_inscripcion;
    }

    /**
     * @param mixed $autorizacion_inscripcion
     */
    public function setAutorizacionInscripcion($autorizacion_inscripcion): void
    {
        $this->autorizacion_inscripcion = $autorizacion_inscripcion;
    }

    /**
     * @return mixed
     */
    public function getValidacionConstancia()
    {
        return $this->validacion_constancia;
    }

    /**
     * @param mixed $validacion_constancia
     */
    public function setValidacionConstancia($validacion_constancia): void
    {
        $this->validacion_constancia = $validacion_constancia;
    }

    /**
     * @return mixed
     */
    public function getFechaSolicitud()
    {
        return $this->fecha_solicitud;
    }

    /**
     * @param mixed $fecha_solicitud
     */
    public function setFechaSolicitud($fecha_solicitud): void
    {
        $this->fecha_solicitud = $fecha_solicitud;
    }

    /**
     * @return mixed
     */
    public function getFechaConclusion()
    {
        return $this->fecha_conclusion;
    }

    /**
     * @param mixed $fecha_conclusion
     */
    public function setFechaConclusion($fecha_conclusion): void
    {
        $this->fecha_conclusion = $fecha_conclusion;
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

    /**
     * @return mixed
     */
    public function getListaArchivos()
    {
        return $this->lista_archivos;
    }

    /**
     * @param mixed $lista_archivos
     */
    public function setListaArchivos($lista_archivos): void
    {
        $this->lista_archivos = $lista_archivos;
    }


}