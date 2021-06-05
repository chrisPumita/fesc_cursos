//Activar el escucha
$(document).ready(function () {
    if (pagList) {
        consultaListaAlumnos();
    }else {
        consultaUniversidades();
        consultaEstadosRep();
        consultaMunicipios(15);
        consultaProcedencia();
    }
});
try {
    function consultaListaAlumnos() {
        $.ajax({
            url: "./control/list_alumnos.php",
            success: function (response) {
                let obj_result = JSON.parse(response);
                let template = "";
                if (obj_result.length>0) {
                    var cont = 0;
                    obj_result.forEach((obj_result => {
                        cont++;
                        let estatus;
                        let img;
                        let edoCta;
                        let colorBool;
                        let edoCta1;
                        if(obj_result.estatus_alumno == 1){
                            estatus = "Inhabilitar";
                            img = "alumno_activo2.png";
                            edoCta = "Verificada";
                            edoCta1 = 1;
                            colorBool = "green";
                        }else{
                            estatus = "Habilitar";
                            img = "alumno_inactivo.png";
                            edoCta = "Por verificar";
                            edoCta1 = 0;
                            colorBool = "red";
                        }
                        template += `<tr id_alumno =${"'" + obj_result.id_alumno + "' "}>
                                    <th scope="row">${cont}</th>
                                    <td>${obj_result.matricula}</td>
                                    <td>${obj_result.app + " " + obj_result.apm + " " + obj_result.nombre}</td>
                                    <td>${obj_result.telefono}</td>
                                    <td>${obj_result.email}</td>
                                    <td>${obj_result.nameproc}</td>
                                    <td>${obj_result.carrera_especialidad}</td>
                                    <td>${obj_result.estatus_alumno = edoCta}</td>
                                    <td><a href="" data-toggle="tooltip" data-placement="left" title="Cuenta ${edoCta}">
                                        <img src="./assets/img/${img}" class="rounded float-left" alt="..." width="60"></a>
                                        <div class="blob ${colorBool}"></div>
                                    </td>
                                    <td>
                                        <div class="dropdown" value_estatus="${edoCta1}">
                                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Opciones
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                <a href="detalles-alumno?id-alumno=${obj_result.id_alumno}">
                                                    <button class="dropdown-item" type="button">Ver Detalles</button>
                                                </a>
                                                <button class="dropdown-item alumn-estatus" type="button">${estatus}</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>`;
                    }));
                    $("#tbl-alum").html(template);
                } else {
                    $("#tbl-container").empty();
                    template = `<div class="alert alert-warning alert-dismissible fade show" role="alert">
                              <strong>Lo sentimos</strong> No hay registro de alumnos aun, porfavor registra uno.
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>`;
                    $("#tbl-container").html(template);
                }
            }
        });
    }
} catch (e) {

}

$(document).on("click",".alumn-estatus",function () {
    if (confirm("¿Esta seguro que desea cambiar el estado de la cuenta?")){
        //Obtengo los elmentos html que contiene la informacion que requiero para actualizar
        let element = $(this)[0].parentElement.parentElement.parentElement.parentElement;
        let element_estatus = $(this)[0].parentElement.parentElement;
        /*console.log(element);
        console.log(element_estatus);*/
        //obtengo el valor del atributo del elemento seleccionado
        let id = $(element).attr("id_alumno");
        let status = $(element_estatus).attr("value_estatus");
        /*console.log(id);
        console.log(status);*/
        // 1 = alumno; 2 = profesor; 3 = admin
        let type = 1;
        $.post(
            "./control/update-estatus.php",
            {id,status,type},
            function (response) {
                //actulizo la tabla de registros
                consultaListaAlumnos();
            }
        )
    }
})

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

try {
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
}catch (e) {
    
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

//Incia envio de formulario
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



