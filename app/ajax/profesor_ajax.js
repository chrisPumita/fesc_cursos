//Activar el escucha
$(document).ready(function () {
    consultaListaProfesoresA();
});

function consultaListaProfesoresA(){
    $.ajax({
        url: "./control/list_profesores.php",
        success: function (response) {
            //Convertir a JSNON el response que viene del servidor
            let obj_result = JSON.parse(response);
            let template = "";
            if (obj_result.length>0)
            {
                var cont = 0;
                obj_result.forEach((obj_result=>{
                    cont++;
                    let estatus = obj_result.estatus_profesor == 1 ? `Inhabilitar`:`Habilitar`;
                    let classEnabled = obj_result.estatus_profesor == 1 ? "":"class='table-warning'";
                    template += `<tr id_profesor =${"'"+obj_result.id_profesor+"' "+classEnabled}>
                                <th scope="row">${cont}</th>
                                <td>${obj_result.no_trabajador}</td>
                                <td>${obj_result.app+" "+obj_result.apm+" "+obj_result.nombre}</td>
                                <td>${obj_result.depto_name}</td>
                                <td>${obj_result.telefono}</td>
                                <td>${obj_result.email}</td>
                                <td>${obj_result.fecha_registro}</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Opciones
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                            <a href="detalles-profesor?id-profesor=${obj_result.id_profesor}">
                                                <button class="dropdown-item" type="button">Ver Detalles</button>
                                            </a>
                                            <button class="dropdown-item" type="button">${estatus}</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>`;
                }));
                //asigno a mi obj de html
                $("#tbl-prof").html(template);
            }
            else{
                $("#tbl-container").empty();
                template = `<div class="alert alert-warning alert-dismissible fade show" role="alert">
                              <strong>Lo sentimos</strong> No hay registro de administradores aun, porfavor registra uno.
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>`;
                $("#tbl-container").html(template);
            }
        }
    });
}

/* FRM  AGREGA CUENTA DE PROFESOR */

//Inciacia envio de formulario
$(function() {
    jQuery("#frm-add-profesor").validate({ //inicamos la validación del formulario
        //Cada cosa que configures la debes de terminar con una coma ,
        onfocusout: false,  //Si un objeto no cumple con la validación, tomara el foco
        rules: { //iniciamos sección de reglas
            nombre_profesor: { //estas seras las reglas para el objeto que en su propiedad name tenga nameO
                required: true, //indicamos que es requerido que contenga un valor
                minlength: 3, //indicamos que debe de tener por lo menos 4 caracteres
                maxlength: 20 //indicamos que debe de tener maximo 20 caracteres
            }
        },
        messages: {//estos seran los mensaje que aparezcan segun el objeto y la reque que espeficiquemos en la sección de reglas
            nombre_profesor: {
                required: "Porfavor indicanos tu nombre",
                minlength: $.format("Necesitamos por lo menos {0} caracteres"),
                maxlength: $.format("{0} caracteres son demasiados!")
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
                    btnEnviar.val("Registrando");
                    btnEnviar.removeAttr("disabled");

                    $('#staticBackdrop').modal('hide');
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
                    consultaListaProfesoresA();
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
