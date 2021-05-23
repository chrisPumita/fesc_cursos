<?php
    include("PROFESOR.php");
    include "I_admin.php";

class ADMIN extends PROFESOR implements I_admin
{

    private $cargo;
    private $permisos;
    private $clave_confirmacion;
    private $estatus_admin;

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


///+++++++++++++ FUNCIONES PROPIAS DE LA CLASE ADMINISTRADOR ++++++++++++++++++///
    public function getListaAdministradores($estatus_admin)
    {
        //CASE TODO
        $filtro = $estatus_admin > 0 ? " AND `administrador`.`estatus`=" . $estatus_admin : "";
        $this->connect();
        $datos = $this-> getData("SELECT `profesor`.`id_profesor`,`persona`.`nombre`,
                                              `persona`.`app`,`persona`.`apm`,`departamentos`.`nombre` as departamento 
                                               FROM `administrador`,`profesor`,`persona`,`departamentos` 
                                                    WHERE `administrador`.`id_profesor_admin_fk`=`profesor`.`id_profesor` 
                                                    AND `profesor`.`id_persona_fk`=`persona`.`id_persona` 
                                                    AND `profesor`.`id_depto_fk`=`departamentos`.`id_depto`".$filtro);
        $this->close();
        return $datos;
    }

    public function updateAdmin($admin,$estatus)
    {
        $filtro = $admin > 0 ? " WHERE `administrador`.`id_profesor_admin_fk`=" . $admin : "";
        $this->connect();
        $datos = $this-> getData("UPDATE `administrador` SET `administrador`.`estatus`= '$estatus' ".$filtro);
        $this->close();
        return $datos;
    }

    public function deleteAdmin($admin)
    {
        $filtro = $admin > 0 ? " WHERE `administrador`.`id_profesor_admin_fk`=" . $admin : "";
        $this->connect();
        $datos = $this-> getData("DELETE * FROM `administrador`".$filtro);
        $this->close();
        return $datos;
    }
//Busca una cuenta de un profesor que sea administrador
    public function buscaCuentaAdmin($id_profesor_admin)
    {
        $sql = "SELECT `id_profesor_admin_fk`, `cargo`, `permisos`, `clave_confirmacion`, `estatus` 
                FROM `administrador` WHERE `id_profesor_admin_fk` = '".$id_profesor_admin."' ";

        $this->connect();
        $datos = $this-> getData($sql);
        $this->close();
        return $datos;
    }
}