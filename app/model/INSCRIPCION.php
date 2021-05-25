
<?php

include_once "I_INSCRIPCION.php";
include_once "CONEXION_M.php";
class INSCRIPCION extends CONEXION_M implements I_INSCRIPCION
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

    /* ASOCIACION de cla clase VALIDACION_INSCRIPCION*/
    private $VALIDACION;


    /*******************************************************************************
     * INICIAN Getters and Setters
     *******************************************************************************/

    /**
     * @return mixed
     */
    public function getVALIDACION()
    {
        return $this->VALIDACION;
    }

    /**
     * @param mixed $VALIDACION
     */
    public function setVALIDACION($VALIDACION): void
    {
        $this->VALIDACION = $VALIDACION;
    }
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

    /*******************************************************************************
     * Terminan Getters and Setters
     *******************************************************************************/

    /*******************************************************************************
     * Inician Funciones implenebtadas de la Interface
     *******************************************************************************/

    function consultaInscripciones($filtro)
    {
        $sql = "SELECT `id_inscripcion`, `id_alumno_fk`, 
               `id_asignacion_fk`, `pago_confirmado`, `autorizacion_inscripcion`, 
               `validacion_constancia`, `fecha_solicitud`, `fecha_conclusion`, `notas`, `estatus` 
                FROM `inscripcion` ". $filtro;
        //Abro conexion de consulta a BD
        $this->connect();
        $result = $this->getData();
        $this->close();
        return $result;
    }

    function registraInscripcion($id_alumno,$id_asig)
    {
        $sql = "INSERT INTO `inscripcion` (`id_inscripcion`, `id_alumno_fk`, `id_asignacion_fk`, 
                           `pago_confirmado`, `autorizacion_inscripcion`, `validacion_constancia`, `fecha_solicitud`, `fecha_conclusion`, `notas`, `estatus`) 
            VALUES ('".$this->getIdInscripcion()."', '".$id_alumno."', '".$id_asig."', '0', '0', '0',
             '".date('Y-m-d H:i:s')."', '".$this->getFechaConclusion()."', '".$this->getNotas()."', '1')";

        $this->connect();
        $result = $this->executeInstruction($sql);
        $this->close();
        return $result;
    }

    //envio true o false
    //confirmaPago(true);
    //confirmaPago(false);
    function confirmaPago($confirmacion)
    {
        $sql = "UPDATE `inscripcion` SET 
                         `pago_confirmado` = '".($confirmacion?1:0)."', 
                         `autorizacion_inscripcion` = '".($confirmacion?1:0)."', 
                         `notas`= CONCAT(notas,' ', '".$this->getNotas()."') 
                WHERE `inscripcion`.`id_inscripcion` = ". $this->getIdInscripcion();

        $this->connect();
        $result = $this->executeInstruction($sql);
        $this->close();
        return $result;
    }

    function validaAutorizacion($id_admin,$clave_confirm,$fechaPago,$monto,$desc,$notas)
    {
        // incluir el control de validacion
        //  control me autoriza inluid control_validacion
        // validarInscip (id,clve)
        //  return SI / NO


        include_once "VALIDACION_INSCRIPCION.php";
        $obj_valida = new VALIDACION_INSCRIPCION();
        $obj_valida->setFechaPago($fechaPago);
        $obj_valida->setMontoPagoRealizado($monto);
        $obj_valida->setDescripcion($desc);
        $obj_valida->setNota($notas);

        return $obj_valida->validaInscripcion($this->getIdInscripcion(),$id_admin);
    }

    function inscribeEnActa()
    {
        // TODO: Implement inscribeEnActa() method.
    }

    function modificaEstado($id_inscripcion, $estado_insc)
    {
        // TODO: Implement modificaEstado() method.
    }

    function eliminaRegistroInscripcion($id_inscripcion)
    {
        // TODO: Implement eliminaRegistroInscripcion() method.
    }


    /*******************************************************************************
     * Terminan Funciones implementadas de la Interface
     *******************************************************************************/


    /*******************************************************************************
     * Inician Otras funciones
     *******************************************************************************/

}