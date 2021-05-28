//Activar el escucha
$(document).ready(function () {
    consultaUniversidades();
    consultaEstadosRep();
    consultaMunicipios(15);
    consultaProcedencia();
});

function consultaUniversidades() {
    $.ajax(
        {
            url: "./app/control/list_uni.php",
            success: function (response)
            {
                //Convertir a JSNON el response que viene del servidor
                let obj_result = JSON.parse(response);
                let template = "";
                obj_result.forEach(
                    (obj_result)=>
                    {
                        template += `<option value="${obj_result.id_universidad}">${obj_result.nombre} (${obj_result.siglas})</option>`;
                    }
                );
                template += `<option value = "0">OTRO</option>`;
                $("#universidades").html(template);
            }
        }
    );
}

function consultaEstadosRep() {
    $.ajax(
        {
            url: "./app/control/list_estados.php",
            success: function (response)
            {
                let obj_result = JSON.parse(response);
                let template = "";
                obj_result.forEach(
                    (obj_result)=>
                    {
                        template += `<option value="${obj_result.id_estado}">${obj_result.estado}</option>`;
                    }
                );
                $("#estados").html(template);
            }
        }
    );
}

function consultaProcedencia() {
    $.ajax(
        {
            url: "./app/control/list_procedencia.php",
            success: function (response)
            {
                let obj_result = JSON.parse(response);
                let template = "";
                obj_result.forEach(
                    (obj_result)=>
                    {
                        template += `<option value="${obj_result.id_tipo_procedencia}">${obj_result.tipo_procedencia}</option>`;
                    }
                );
                $("#procedencia").html(template);
            }
        }
    );
}

function consultaMunicipios(id_estado) {
    //Obj que voy a modificar
    var municipio = $("#municipios");
    $.ajax(
        {
            url: "./app/control/list_municipios.php",
            data: { id : id_estado },
            type: "POST",
            beforeSend: function ()
            {
                municipio.prop('disabled',false);
            },
            success: function (response)
            {
                let obj_result = JSON.parse(response);
                let template = "";
                obj_result.forEach(
                    (obj_result)=>
                    {
                        template += `<option value ="${obj_result.id_estado_fk }">${obj_result.municipio}</option>`;
                    }
                );
                $("#municipios").html(template);
                municipio.prop('disabled',false);
            },
            error: function ()
            {
                alert('Ocurrio un error en el servidor...');
                municipio.prop('disabled',true);
            }
        }
    );
}


/*Escuchas que se ejecuntan cuando hay una accion (clic)*/


$("#estados").change(function ()
{
    //obj que tienes cambios
    var estado_sel = $(this);
    var id = estado_sel.val();
    if (id != '')
    {
        consultaMunicipios(id);
    }
    else
    {
        var municipio = $("#municipios");
        alert("No selecciono ningun elemento");
        municipio.find('option').remove();
    }
});

//Inciacia envio de formulario
$(function() {
    jQuery("#frm-add-alumno").validate({ //inicamos la validación del formulario
        //Cada cosa que configures la debes de terminar con una coma ,
        onfocusout: false,  //Si un objeto no cumple con la validación, tomara el foco
        rules: { //iniciamos sección de reglas
            nombreAlumno: { //estas seras las reglas para el objeto que en su propiedad name tenga nameO
                required: true, //indicamos que es requerido que contenga un valor
                minlength: 3, //indicamos que debe de tener por lo menos 4 caracteres
                maxlength: 20 //indicamos que debe de tener maximo 20 caracteres
            },
            correoAlumno: {
                required: true,
                email: true //indicamos que debe de cumplir con la estructura de un email
            },
            contrasena: {
                required:true,
                minlength:6,
                maxlength:50
            },
            contrasenaconfirmar:
                {
                    required:true,
                    equalTo:"#contrasena"
                }
        },
        messages: {//estos seran los mensaje que aparezcan segun el objeto y la reque que espeficiquemos en la sección de reglas
            nombreAlumno: {
                required: "Porfavor indicanos tu nombre",
                minlength: $.format("Necesitamos por lo menos {0} caracteres"),
                maxlength: $.format("{0} caracteres son demasiados!")
            },
            correoAlumno: {
                required: "Hey vamos, por favor, d&aacute;nos tu email",
                email: "No cumple con la estructura de un email."
            },
            contrasena: "Son demaciados caracteres",
            contrasenaconfirmar: "Las contraseñas no coinciden."
        },
        submitHandler: function(form){ //si todos los controles cumplen con las validaciones, se ejecuta este codigo
            $("#formError").addClass("hidden"); //para ocultar el mensaje, le agregamos la clase de Bootstrap 3
            var btnEnviar = $("#btnEnviar");
            var formulario = $('#frm-add-alumno');
            // start ajax
            $.ajax({
                url: "./app/control/alumnos_add.php",
                type: "POST",
                dataType: 'html', //tipo de respuesta del servidor
                data:{
                    nombre:     $('#nombreAlumno').val(),
                    app:        $('#appAlumno').val(),
                    apm:        $('#apmAlumno').val(),
                    telefono:   $('#telAlumno').val(),
                    sexo:       $('input:radio[name=sexo]:checked').val(),
                    email:      $('#correoAlumno').val(),
                    pw1:        $('#contrasena').val(),
                    id_mun:     $('#municipios').val(),
                    id_uni:     $('#universidades').val(),
                    nombre_uni: $('#nombreUni').val(),
                    carrera:    $('#carrera').val(),
                    matricula:  $('#matricula').val(),
                    idProcedencia:  $('#procedencia').val()
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
                    btnEnviar.val("Registrarme");
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

/*
$.validator.addMethod("passwordcheck", function(value) {
        return /^[a-zA-Z0-9!@#$%^&()=[]{};':"\|,.<>\/?+-]+$/.test(value)
            && /[a-z]/.test(value) // has a lowercase letter
            && /\d/.test(value)//has a digit
            && /[!@#$%^&()=[]{};':"\|,.<>\/?+-]/.test(value)// has a special character
    },"La contraseña debe contener de 8 a 15 carácteres alfanuméricos (a-z A-Z), contener mínimo un dígito (0-9) y un carácter especial (_-=)."
);
*/

