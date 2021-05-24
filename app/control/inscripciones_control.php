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

function registraPago($id_profesor_admin, $clave, $id_incripcion, $monto, $desc, $notas, $fecha_pago){
    //Para poder registrar un pago, requiero nivel de acceso 3
    include_once "verificacion_control.php";
    if (verificaAdministrador($id_profesor_admin,$clave,NVL_REG_PGO)){
        if(confirmarPago($id_incripcion,$monto,$desc,$notas,$fecha_pago)){
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


function confirmarPago($id_incripcion, $monto, $desc, $notas, $fecha_pago)
{
    //recuperar la informacion del pago
    //verifico las credenciales del admin
    //verificar el costo del curso
    //verificar si no existen otros pago, si si, sumarlos y determinar su se cubre el monto
    //  del curso para marcarlo como pago_confirmado _true;
    // true - actualizo inscripcion ( en el caso de monto cuebierto) y creo validacion
    //regreso true/false
    //cuanto debe pagar?

    include_once "../model/INSCRIPCION.php";
    include_once "asignacion_grupos_control.php";

    //INSCRIPCION
    $obj_inscripcion = new INSCRIPCION();
    $detalles_insc = $obj_inscripcion -> consultaInscripciones("1",$id_incripcion);

    $id_asignacion = $detalles_insc[0]['id_asignacion_fk'];
    $id_alumno = $detalles_insc[0]['id_alumno_fk'];
    $alumno_procedencia = $detalles_insc[0]['tipo_procedencia'];


    ////ASIGNACION
    $array_detalles_pago = detallesAsignacion_pago($id_asignacion);

    $costo_real = $array_detalles_pago[0]['costo_real'];
    $descuento = $array_detalles_pago[0]['descuento'];
    $nivel_apli =  $array_detalles_pago[0]['nivel_aplicacion_desc'];

    //1 - FESC UNAM  ------- C1 y C4
    //2 - COMUNIDAD UNAM -.---Fac Ing. Fac Med (otra facultad/esc)
    //3 - EX-ALUMNOS --- Titulado UNAM CUALSEA
    //4 - EXTERNO -- TODOS LOS DEMAS
    //5 - OTRO / TODOS
    if ($alumno_procedencia<=$nivel_apli){
        echo "aplicar el descuiento";
    }
    else{
        echo "cobrar completo";
    }



        include_once "asignacion_grupos_control.php";
     //   $asig = consultaAsignaciones($id_asig);


}