<?php
 include("PERSONA.php");
class ADMIN extends PERSONA
{
    private $id_profesor_admin_fk;
    private $cargo;
    private $permisos;
    private $clave_confirmacion;
    private $estatus_admin;

    /**
     * @return mixed
     */
    public function getIdProfesorAdminFk()
    {
        return $this->id_profesor_admin_fk;
    }

    /**
     * @param mixed $id_profesor_admin_fk
     */
    public function setIdProfesorAdminFk($id_profesor_admin_fk)
    {
        $this->id_profesor_admin_fk = $id_profesor_admin_fk;
    }

    /**
     * @return mixed
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * @param mixed $cargo
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;
    }

    /**
     * @return mixed
     */
    public function getPermisos()
    {
        return $this->permisos;
    }

    /**
     * @param mixed $permisos
     */
    public function setPermisos($permisos)
    {
        $this->permisos = $permisos;
    }

    /**
     * @return mixed
     */
    public function getClaveConfirmacion()
    {
        return $this->clave_confirmacion;
    }

    /**
     * @param mixed $clave_confirmacion
     */
    public function setClaveConfirmacion($clave_confirmacion)
    {
        $this->clave_confirmacion = $clave_confirmacion;
    }

    /**
     * @return mixed
     */
    public function getEstatusAdmin()
    {
        return $this->estatus_admin;
    }

    /**
     * @param mixed $estatus_admin
     */
    public function setEstatusAdmin($estatus_admin)
    {
        $this->estatus_admin = $estatus_admin;
    }


}