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
    if (verificaAdministrador($id_profesor_admin,$clave,NVL_REG_PGO)){
        if(confirmarPago($id_incripcion,$monto,$desc,$fecha_pago)){
            return "Se ha registrado el pago correctamente";
        }
        else{
            return "No se proceso el pago, porque este no es correcto.";
        }
    }
    else{
        return "No tiene los permisos para registrar pagos.";
    }
}


function confirmarPago($id_incripcion, $monto, $desc, $fecha_pago)
{
    //NOTAS
    //recuperar la informacion del pago
    //verifico las credenciales del admin
    //verificar el costo del curso
    //verificar si no existen otros pago, si si, sumarlos y determinar su se cubre el monto
    //  del curso para marcarlo como pago_confirmado _true;
    // true - actualizo inscripcion ( en el caso de monto cuebierto) y creo validacion
    //regreso true/false
    //cuanto debe pagar?
    //include_once "asignacion_grupos_control.php";

    //detalles de la ficha de inscripcion
    $ficha_Inscripcion = consultaFichaInscripcion($id_incripcion);
    $id_asignacion = $ficha_Inscripcion[0]['id_asignacion_fk'];
    $id_alumno = $ficha_Inscripcion[0]['id_alumno_fk'];
    $alumno_procedencia = $ficha_Inscripcion[0]['tipo_procedencia'];
    $pagoConfirmado = $ficha_Inscripcion[0]['pago_confirmado']== "1" ? true:false;

    if (!$pagoConfirmado){
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
        if ($aplicaInscripcion && isset($myProcedencia)){
            $costoFinal = $myProcedencia["costo_final"];

            //200 y $150 = 350 Resta 400. y tu pago de 250...   // 700-> $400
            //Consultar todos los pagos que ha realizo el alumno
            $pagosRealizados = consultaPagosRealidos($id_incripcion);

            $sumaPagoRealizados = 0;
            foreach ($pagosRealizados as $pago){
                $sumaPagoRealizados += $pago['monto_pago_realizado'];
            }

            $pagoSaldo = $costoFinal - $sumaPagoRealizados;
            echo "<br>Has pagado: $".$sumaPagoRealizados;
            echo "<br>Te falta pagar: $".$pagoSaldo;
            echo "<br>Me eestas pagando: $".$monto;

            echo "<br><br>";
            var_dump($myProcedencia);
            echo "<br><br>";
            echo "SI PODEMOS PROCESDAR TU PAGO";
            // verificar cuantos pagos ha realizado el alumno

            //contarlos, sumarlos, y en funcion del totoal del curso determinar cuanto es su saldo, verificarlo con el monto,
            //  y procedemos a crear el pago, y verificar si pago confirmado lo paso a true

            //determinar si el pago del alumno es el mismo que el del costo total

            //descuento verifica, aplico, inscribo
            // Verificacion del costo final en funcion del desc aplicado para
        }
        else{
            echo "NO te puedes inscribir";
        }

        //

        /*
        if ($alumno_procedencia<=$nivel_apli){
            echo "aplicar el descuiento";
        }
        else{
            echo "cobrar completo";
        }

    */

        //  include_once "asignacion_grupos_control.php";
        //   $asig = consultaAsignaciones($id_asig);


    }

    else{
        echo "El total del pago ya ha sido cubierto";
    }
}

function consultaFichaInscripcion($id_inscripcion){
    include_once "../model/INSCRIPCION.php";
    //INSCRIPCION
    $obj_inscripcion = new INSCRIPCION();
    $detalles_insc = $obj_inscripcion -> consultaInscripciones("1",$id_inscripcion);
    $id_asignacion = $detalles_insc[0]['id_asignacion_fk'];
    $id_alumno = $detalles_insc[0]['id_alumno_fk'];
    $alumno_procedencia = $detalles_insc[0]['tipo_procedencia'];
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