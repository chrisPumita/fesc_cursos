// Activamos escucha
$(document).ready(function () {
    ListaGruposActivos();
    ListaCursosRegistrados(1);
    ListaDocumentosPendientes();
    ListaPagosRecientes();
    Conteos();
    consultadepartamentos();
});

function ListaGruposActivos(){
    $.ajax({
        url:"./control/list_grupos.php",
        success: function (response){
            let obj_result=JSON.parse(response);
            let template="";

            if(obj_result.length>0) {

                    var cont = 0;
                    obj_result.forEach((obj_result => {
                        if (obj_result.estatus == 1) {
                            cont++;
                            template += `<tr>
                                <th scope="row">${cont}</th>
                                    <td>${obj_result.grupo}</td>
                                    <td>${obj_result.nombre_curso}</td>
                                    <td>${obj_result.nombre + " " + obj_result.app + " " + obj_result.apm}</td>
                                    <td>${obj_result.cupo}</td>
                                    <td>${obj_result.fecha_inicio}</td>
                                    <td>${getModalidad(obj_result.tipo_curso)}</td>
                                    <td>${obj_result.notas}</td>
                                    <!-- BOTON ACCIONES -->
                                    <td>
                                         <div class="dropdown">
                                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Opciones
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                        <a href="#" data-toggle="modal" data-target="#verHorario">
                                                            <button class="dropdown-item" type="button">Ver Horario</button>
                                                        </a>
                                                        <button class="dropdown-item" type="button">Editar grupo</button>
                                                        <a href="#" data-toggle="modal" data-target="#verSolicitudes">
                                                            <button class="dropdown-item" type="button">Ver solicitudes</button>
                                                        </a>
                                                        <button class="dropdown-item" type="button">Terminar grupo</button>
                                                    </div>
                                                </div>
                                    </td>
                               </tr>`;
                        }
                    }));
                    //se asigna al cuerpo de la tabla
                    if(cont>0){
                        $("#tbl-grupos").html(template);
                    }else{
                        $("#tbl-containerGrupos").empty();
                        $("#tbl-container2Grupos").empty();
                        template = `<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Lo sentimos</strong> No hay grupos activos aun, porfavor Active uno.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>`;
                        $("#tbl-containerGrupos").html(template);
                    }

                } else {
                    $("#tbl-containerGrupos").empty();
                    $("#tbl-container2Grupos").empty();
                    template = `<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Lo sentimos</strong> No hay grupos activos aun, porfavor Active uno.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>`;
                    $("#tbl-containerGrupos").html(template);
                }
            }
    })

}




function ListaDocumentosPendientes(){
    $.ajax({
        url:"./control/list_documentos.php",
        success: function (response){
            let obj_result=JSON.parse(response);
            let template="";
            if(obj_result.length>0){
                var cont=0;
                obj_result.forEach((obj_result=>{
                    if(obj_result.estado_revision==0) {
                        cont++;

                        template += `<tr id_doc=${"'"+obj_result.id_archivo+"'"}>
                                    <th scope="row">${cont}</th>
                                    <td>${obj_result.nombre_doc}</td>
                                    <td>${obj_result.nombre + " " + obj_result.app + " " + obj_result.apm}</td>
                                    <td>${obj_result.id_inscripcion}</td>
                                    <td>${obj_result.grupo}</td>
                                    <!-- BOTON ACCIONES -->
                                    <td>
                                   <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                      <button type="button" class="btn btn-success aceptar_doc" value_apro="1">Acreditar</button>
                                      <button type="button" class="btn btn-danger rechazar_doc" value_recha="2">Rechazar</button>
                                      <button type="button" class="btn btn-primary">Ver Documento</button>
                                      <button type="button" class="btn btn-primary">Ver Ficha</button>
                                     
                                   </div>
                                        
                                    </td>
                               </tr>`;
                    }
                }));
                //se asigna al cuerpo de la tabla
                if(cont>0){
                    $("#tbl-docs").html(template);
                }else{
                    $("#tbl-containerDocs").empty();
                    $("#tbl-container2Docs").empty();
                    template=`<div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>¡Excelente!</strong> ya no hay documentos pendientes por revisar.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>`;
                    $("#tbl-containerDocs").html(template);
                }

            }else{
                $("#tbl-containerDocs").empty();
                $("#tbl-container2Docs").empty();
                template=`<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>¡Excelente!</strong> ya no hay documentos pendientes por revisar.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>`;
                $("#tbl-containerDocs").html(template);
            }
        }
    })
}

$(document).on("click",".aceptar_doc",function (){
    if(confirm("¿Esta seguro que desea aceptar este documento?")){
        let estatus=$(this)[0]
        let element=$(this)[0].parentElement.parentElement.parentElement
        let id=$(element).attr("id_doc");
        let estatus_ap=$(estatus).attr("value_apro");
       /*console.log(estatus);
        console.log(element);*/
        $.post(
            "./control/update-estatus-doc.php",
            {id,estatus_ap},
            function (responsive){
                console.log(responsive);
               ListaDocumentosPendientes();
            }
        )
    }
})
$(document).on("click",".rechazar_doc",function (){
    if(confirm("¿Esta seguro que desea rechazár este documento?")){
        let estatus=$(this)[0]
        let element=$(this)[0].parentElement.parentElement.parentElement
        let id=$(element).attr("id_doc");
        let estatus_ap=$(estatus).attr("value_recha");
         $.post(
            "./control/update-estatus-doc.php",
            {id,estatus_ap},
            function (responsive){
                console.log(responsive);
                ListaDocumentosPendientes();
            }
        )
    }
})
function ListaPagosRecientes(){

$.ajax({
    url:"./control/list_pagos.php",
    success: function (response){
        let obj_result=JSON.parse(response);
        let template="";
        if(obj_result.length>0){
            var cont=0;
            obj_result.forEach((obj_result=>{
                    cont++;
                    if(cont<10) {
                        template += `<!--Pagos-->
                    <div class="d-flex border-bottom py-2">
                        <div class="d-flex mr-3">
                            <h2 class="align-self-center mb-0"><i class="icon ion-md-pricetag"></i></h2>
                        </div>
                        <div class="align-self-center">
                            <h6 class="d-inline-block mb-0">Inscripcion No ${obj_result.id_inscripcion_fk}</h6>
                            <span class="badge badge-success ml-2">${"$ " + obj_result.monto_pago_realizado}</span>
                            <small class="d-block text-muted">${obj_result.fecha_pago}</small>
                        </div>
                    </div>`;
                    }
        }));
            //se asigna al cuerpo del div
           $("#pagosrecientes").html(template);
            ListaDocumentosPendientes();
        }else{
            $("#pagosrecientes").empty();
            template=`<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Lo sentimos</strong> Aun no existen pagos realizados.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>`;
            $("#pagosrecientes").html(template);
        }
    }
})

}
function Conteos(){
    $.ajax({
        url:"./control/conteo_home.php",
        success: function (response){
            let conteo = JSON.parse(response);
            var Cursos;
            var alumnos;
            var constancias;
            var inscripciones;
            Cursos=conteo[0]['cursos'];
            alumnos=conteo[0]['alumno'];
            constancias=conteo[0]['constancias'];
            inscripciones=conteo[0]['inscripcion'];

            if (Cursos>0){
                $("#countCursos").html(Cursos);
            }else{
                $("#countCursos").html(0);
            }
            if (alumnos>0){
                $("#countAlumnos").html(alumnos);
            }else{
                $("#countAlumnos").html(0);
            }
            if (constancias>0){
                $("#countConstancias").html(constancias);
            }else{
                $("#countConstancias").html(0);
            }
            if(inscripciones>0){
                $("#countInscripciones").html(inscripciones);
            }else{
                $("#countInscripciones").html(0);
            }
        }
    })
}

function consultadepartamentos() {
    $.ajax(
        {
            url: "./control/list_depto.php",
            success: function (response)
            {
                let obj_result = JSON.parse(response);
                let template = "";
                obj_result.forEach(
                    (obj_result)=>
                    {
                        template += `<option value="${obj_result.id_depto}">${obj_result.nombre}</option>`;
                    }
                );

                $("#depto").html(template);
            }
        }
    );
}

//Inciacia envio de formulario
$(function() {
    jQuery("#frm-add-profesor").validate({
        onfocusout: false,  //Si un objeto no cumple con la validación, tomara el foco
        rules: { //iniciamos sección de reglas
            nombre_profesor: { //estas seras las reglas para el objeto que en su propiedad name tenga nameO
                required: true, //indicamos que es requerido que contenga un valor
                minlength: 3, //indicamos que debe de tener por lo menos 4 caracteres
                maxlength: 20 //indicamos que debe de tener maximo 20 caracteres
            },
            app: {
                required: true,
                minlength:3,
                maxlength:25
            },
            apm: {
                required: true,
                minlength:3,
                maxlength:25
            },
            correo_prof:{
                required: true,
                email: true
            },
            notrabajador:{
                required: true

            }
        },
        messages: {//estos seran los mensaje que aparezcan segun el objeto y la reque que espeficiquemos en la sección de reglas
            nombre_profesor: {
                required: "Porfavor indicanos tu nombre",
                minlength: $.format("Necesitamos por lo menos {0} caracteres"),
                maxlength: $.format("{0} caracteres son demasiados!")
            },
            app: {
                required: "Porfavor indicanos tu apellido paterno",
                minlength: $.format("Necesitamos por lo menos {0} caracteres"),
                maxlength: $.format("{0} caracteres son demasiados!")
            },
            apm: {
                required: "Porfavor indicanos tu apellido materno",
                minlength: $.format("Necesitamos por lo menos {0} caracteres"),
                maxlength: $.format("{0} caracteres son demasiados!")
            },
            correo_prof:{
                required: "Hey vamos, por favor, d&aacute;nos tu email",
                email: "La estructura del correo es incorrecta"
            },
            notrabajador:{
                required:"Por favor ingrese su numero de trabajador"
            }

        },
        submitHandler: function(form){ //si todos los controles cumplen con las validaciones, se ejecuta este codigo
            $("#formError").addClass("hidden"); //para ocultar el mensaje, le agregamos la clase de Bootstrap 3
            var btnEnviar = $("#btnEnviar");
            var formulario = $('#frm-add-profesor');
            // start ajax
            $.ajax({
                /*
                    // variables Profesor
                    $id_depto = $_POST['id_depto'];
                    $no_trabajador = $_POST['no_trabajador'];
                    $prefijo= $_POST['prefijo'];
                * */
                url: "./control/profesor_add.php",
                type: "POST",
                dataType: 'html', //tipo de respuesta del servidor
                data:{
                    nombre:     $('#nombre_profesor').val(),
                    app:        $('#app').val(),
                    apm:        $('#apm').val(),
                    telefono:   $('#telefono').val(),
                    sexo:       $('#sexo').val(),
                    email:      $('#correo').val(),
                    no_trabajador: $('#notrabajador').val(),
                    id_depto:    $('#depto').val(),
                    prefijo:    $('#prefijo').val()
                }, //parametros (valores) en formato llaver:valor, que se enviaran con la solicitud
                beforeSend: function(){
                    /** Esta función se ejecuta durante el envió de la petición al
                     * servidor.* */
                    formulario.css("opacity",".5");
                    btnEnviar.val("Enviando..."); // Para input de tipo button
                    btnEnviar.attr("disabled","disabled");
                },
                complete: function(xhr, textStatus) {
                    //se llama cuando se recibe la respuesta (no importa si es error o exito)
                    btnEnviar.val("Crear Cuenta");
                    btnEnviar.removeAttr("disabled");

                    $('#nuevoProfesor').modal('hide');
                    formulario.trigger("reset");
                    formulario.css("opacity","");
                    btnEnviar.removeAttr("disabled");
                },
                success: function(msg) {
                    $('.statusMsg').html('');
                    var toast = `
                        <div id="toast" class="toast" role="alert" aria-live="assertive" aria-atomic="true"  data-autohide="false">
                            <div class="toast-header">
                                <img src="./app/assets/img/icon_logo.png" class="rounded mr-2" alt="logo" width="30">
                                <strong class="mr-auto">SICEP</strong>
                                <small class="text-muted">Mensaje</small>
                                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="toast-body">
                                `+msg+`
                            </div>
                        </div>`;

                    $("#toast").html(toast);
                    $('.toast').toast('show');
                    ListaGruposActivos();
                    ListaCursosRegistradosACT();
                    ListaDocumentosPendientes();
                    ListaPagosRecientes();
                    CursosRecientes();
                    Conteos();
                    consultadepartamentos();
                },
                error: function(xhr, textStatus, errorThrown) {
                    //called when there is an error
                    alert("La respuesta fue con error");
                }
            }); //end ajax
        },
        invalidHandler: function(event, validator) { //si por lo menos uno control no cumplen con las validaciones, se ejecuta este codigo
            var errors = validator.numberOfInvalids(); // número de errores encontrados al validar el formulario
            if (errors) { //si errors = 0 no se ejecuta el if, de ser mayor que cero se ejecuta
                //la linea de abajo es un if ternario
                var message = errors == 1 ? ' Error: Te perdiste 1 campo. Ha sido destacado' : ' Error: Te perdiste '+ errors +' campos. Se han destacado';
                $("div#formError span#Mensaje").html(message); //agregamos el valor de message a objeto seleccionado
                $("div#formError").removeClass("hidden"); //para que se muestre el mensaje, le quitamos la clase que lo oculta
            }
        },
        highlight: function(element, errorClass) {//los objetos que no cumplan con la validación parpadearan
            $(element).fadeOut(function() {
                $(element).fadeIn();
            });
        },
        errorElement: "div", //indicamos en qué tipo de objeto DOM se agregarán las alertas. El valor por default es "label"
        errorClass: "alert alert-danger", //indicamos la clase que se agregara a las alertas. El valor por default es "error"
    });
});