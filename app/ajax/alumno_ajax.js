//Activar el escucha
$(document).ready(function () {
    consultaUniversidades();
    consultaEstadosRep();
    consultaMunicipios(15);
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

//solo cargar cuando se ha cargado el modal
try{
    $("frm-add-alumno").validate({
        // ----- JQuery Validacion
        event:"blur",
        rules:{
            //indicar que obj son obligatorios
            nombreAlumno : "required",
            appAlumno: "required",
            apmAlumno: "required"
        },
        messages:{
            nombreAlumno : "Escribe tu nombre",
            appAlumno: "Escribe tu primer apellido",
            apmAlumno: "Escribe tu segundo apellido"
        },
        debug: true,
        errorElement: "label",
        submitHandler: function (form) {
            $("$alerta").show();
            $("$alerta").html(
            "<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">\n" +
                "<strong>Registro exitoso</strong> Hemos registrado tu cuenta\n" +
                "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">\n" +
                "<span aria-hidden=\"true\">&times;</span>\n" +
                "</button>\n" +
                "</div>"
            );
            setTimeout(function () {
                $("#alerta").fadeOut("slow");
            }, 5000);
            // ----- AJAX send php response
            $.ajax({
                url: "./app/control/alumnos_add.php",
                type: "POST",
                data:{
                    matricula:  $('#matricula').val(),
                    procedencia:$('#procedencia').val(),
                    carrera:    $('#carrera').val(),
                    email:      $('#correoAlumno').val(),
                    pw:         $('#pwAlumno').val(),
                    nombre:     $('#nombreAlumno').val(),
                    app:        $('#appAlumno').val(),
                    apm:        $('#apmAlumno').val(),
                    id_mun:     $('#municipios').val(),
                    id_uni:     $('#universidades').val(),
                    nombre_uni: $('#nombreUni').val(),
                    telefono:   $('#telAlumno').val(),
                    sexo:       $('#radioHombreAlumno').val() === '0' ? "0":"1"
                },
                success: function (msg)
                {
                    $("#alerta").html(msg);
                    setTimeout(function () {
                        $("#alerta").fadeOut("slow");
                    }, 3000);
                }
            });
            $("#frm-add-alumno").trigger("reset");
        }
    })
}
catch (e) {

}
