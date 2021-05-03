<?php


class CONSTANCIA_ALUM
{
	private $id_constancia_alumno;
	private $id_profesor_admin_firma_fk;
	private $id_inscripcion_acta_fk;
	private $sello_digital;
	private $verificada;
	private $fecha_creacion;
	private $estatus;

    /**
     * @return mixed
     */
    public function getIdConstanciaAlumno()
    {
        return $this->id_constancia_alumno;
    }

    /**
     * @param mixed $id_constancia_alumno
     */
    public function setIdConstanciaAlumno($id_constancia_alumno): void
    {
        $this->id_constancia_alumno = $id_constancia_alumno;
    }

    /**
     * @return mixed
     */
    public function getIdProfesorAdminFirmaFk()
    {
        return $this->id_profesor_admin_firma_fk;
    }

    /**
     * @param mixed $id_profesor_admin_firma_fk
     */
    public function setIdProfesorAdminFirmaFk($id_profesor_admin_firma_fk): void
    {
        $this->id_profesor_admin_firma_fk = $id_profesor_admin_firma_fk;
    }

    /**
     * @return mixed
     */
    public function getIdInscripcionActaFk()
    {
        return $this->id_inscripcion_acta_fk;
    }

    /**
     * @param mixed $id_inscripcion_acta_fk
     */
    public function setIdInscripcionActaFk($id_inscripcion_acta_fk): void
    {
        $this->id_inscripcion_acta_fk = $id_inscripcion_acta_fk;
    }

    /**
     * @return mixed
     */
    public function getSelloDigital()
    {
        return $this->sello_digital;
    }

    /**
     * @param mixed $sello_digital
     */
    public function setSelloDigital($sello_digital): void
    {
        $this->sello_digital = $sello_digital;
    }

    /**
     * @return mixed
     */
    public function getVerificada()
    {
        return $this->verificada;
    }

    /**
     * @param mixed $verificada
     */
    public function setVerificada($verificada): void
    {
        $this->verificada = $verificada;
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
}