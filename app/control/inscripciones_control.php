<?php
//COntrolar el flujo de inscripciones
//global variable
//alto  3
//medio 2
//bajo  1
//todos 0
//para registrar un pago, necesito un nivel de acceso 3 (alto)
define('NVL_REG_PGO', 3);
define('NVL_REG_CONST',2);

function acreditarPagoInscripcion($id_profesor_admin, $clave, $id_incripcion, $monto, $desc, $fecha_pago){
    //Para poder registrar un pago, requiero nivel de acceso 3
    include_once "verificacion_control.php";
    if (verificaAdministrador($id_profesor_admin,$clave,NVL_REG_PGO))
    {
        $arrayPago = confirmarPago($id_incripcion,$monto);
        $pagoPorRegistrar = $arrayPago['pago'];
        $mje = "";
        if($pagoPorRegistrar>0)
        {
            include_once "../model/INSCRIPCION.php";
            $obj_insc = new INSCRIPCION();
            $obj_insc ->setIdInscripcion($id_incripcion);

            $notas = "Este pago se registro el dia ".date('Y-m-d H:i:s')."<br>";

            if($obj_insc->validaAutorizacion($id_profesor_admin,$fecha_pago,$pagoPorRegistrar,$desc,$notas)){
                if ($arrayPago['liquido']){
                    $obj_insc->confirmaPago(true);
                    $mje = "TU PAGO SEW RETGISTRO Y TU INSCRIPCION SE LIQUIDO";
                }
                else
                {
                    $mje=  "SE REGISTRO TU PAGO DE FORMA EXITOSA";
                }
            }
            echo $mje;
        }
        else{
            switch ($pagoPorRegistrar>0){
                case 0:
                    $mje= "No puede registrar un monto de $0.00";
                    break;
                case -1:
                    $mje= "La procedencia no permite inscribir a este alumno";
                    break;
                case -100:
                    $mje= "Ya no se permiten mas pagos a esta inscripcion";
                    break;
            }
            return $mje;
        }
    }
    else{
        return "No tiene los permisos para registrar pagos.";
    }
}

function confirmarPago($id_incripcion, $monto)
{
    $ficha_Inscripcion = consultaFichaInscripcion($id_incripcion);
    $id_asignacion = $ficha_Inscripcion[0]['id_asignacion_fk'];
    $alumno_procedencia = $ficha_Inscripcion[0]['id_tipo_procedencia_fk'];
    $pagoConfirmado = $ficha_Inscripcion[0]['pago_confirmado']== "1" ? true:false;

    if (!$pagoConfirmado)
    {
        if ($monto>0)
        {
            ////LISTA DE PROCEDENCIAS QUE PUEDEN TOMAR EL CURSO (ASIGNACION)
            $listaProcedenciasAceptadas=consultaListaProcedenciaAdmitida($id_asignacion);
            //defino que la aplicacion no es valida, verifico despues
            $aplicaInscripcion = false;
            //defino my procedencia como nula, porque en el for obtendre los datos, si es que coincide la procedencia
            //  para aplicarle descuento
            $myProcedencia = NULL;

            foreach ($listaProcedenciasAceptadas as $procedencia){
                $procedenciaAdmintida = $procedencia['id_tipo_procedencia'];
                //verifico los IDs
                if ($procedenciaAdmintida == $alumno_procedencia){
                    //obtengo el array de datos de la procedencia que contiene la info del desc.
                    $myProcedencia = $procedencia;
                    //modifico que si hay coincidencia
                    $aplicaInscripcion = true;
                    //rompo el bucle para continuar
                    break;
                }
            }
            //Si, sí aplica la procedencia y myprocedencia esta instanciada (diferente de NULL)
            if ($aplicaInscripcion && isset($myProcedencia))
            {
                $costoFinal = $myProcedencia["costo_final"];

                //200 y $150 = 350 Resta 400. y tu pago de 250...   // 700-> $400
                //Consultar todos los pagos que ha realizo el alumno
                $pagosRealizados = consultaPagosRealidos($id_incripcion);

                $sumaPagoRealizados = 0;
                foreach ($pagosRealizados as $pago)
                    $sumaPagoRealizados += $pago['monto_pago_realizado'];

                //obtengo el saldo actual
                $pagoSaldo = $costoFinal - $sumaPagoRealizados;
                $pagoPorRegistrar = $monto > $pagoSaldo ? $pagoSaldo:$monto;

                $liquido = $pagoPorRegistrar == $pagoSaldo ? true:false;

                return array("pago" => $pagoPorRegistrar, "liquido" => $liquido);
            }
            else
            {
                return array("pago" =>-1, "liquido" => false); // no aplicable el pago por la procedencia
            }
        }
        else{
            return array("pago" =>0, "liquido" => false); //el monto fue de 0
        }
    }
    else{
        return array("pago" =>-100, "liquido" => false); //ya no se permiten mas pago, porque la inscripcion ya fue acreditada
    }
}

function consultaFichaInscripcion($filtro,$id_inscripcion){
    include_once "../model/INSCRIPCION.php";
    //INSCRIPCION
    $obj_inscripcion = new INSCRIPCION();
    $result = $obj_inscripcion -> consultaInscripciones($filtro,$id_inscripcion);
    $detalles_insc=json_encode($result);
    return $detalles_insc;
}

function consultaListaProcedenciaAdmitida($id_asig){
    include_once "asignacion_grupos_control.php";
    return detallesAsignacion_pago($id_asig);
}

function consultaPagosRealidos($idInscripcion){
    include_once "../model/INSCRIPCION.php";
    $obj_insc = new INSCRIPCION();
    $obj_insc->setIdInscripcion($idInscripcion);
    return $obj_insc->consultaValidacionesInscripciones();
}

function consultarPagos(){
    include_once "../model/INSCRIPCION.php";
    $obj_insc= new INSCRIPCION();
    $result=$obj_insc->consultaPagosRealizados();
    $detalles=json_encode($result);
    return $detalles;
}
function conteosHome(){
    include_once "../model/INSCRIPCION.php";
    $obj_insc= new INSCRIPCION();
    $result=$obj_insc->contarHome();
    $detalles=json_encode($result);
    return $detalles;
}
