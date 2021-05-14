//Activar el escucha
$(document).ready(function () {
    consultaUniversidades();
    consultaEstadosRep();
    consultaMunicipios();
    /*Llenar la lista de municipios de acuerdo al estado seleccionado
    * De momento solo llena con el ***id_estado_fk = 1 (Aguascalientes)***
    * en el query
    * */

    //LLenar lista de estados
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
function consultaMunicipios() {
    $.ajax(
        {
            url: "./app/control/list_municipios.php",
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
            }
        }
    );
}

$("#estados").change(function()
{/*
    var municipio = $("#municipios");
    var estado_sel = $(this);
    if ($(this).val() != '')
    {
        $.ajax(
            {
                data: { id : estado_sel.val()},
                url: "./app/control/list_municipios.php",
                type: "POST",
                beforeSend: function ()
                {
                    municipio.prop('disabled',false);
                },
                success: function (response)
                {
                    //municipio.prop('disabled', false);
                    //municipio.find('option').remove();
                    let obj_result =  JSON.parse(response);
                    let template = "";
                    obj_result.forEach(
                        (obj_result)=>
                        {
                            template += `<option value="${obj_result.id_municipio}">${obj_result.municipio}</option>`;
                        }
                    );
                    console.log(template);
                    //template += `<option value="${obj_result.id_municipio}">${obj_result.municipio}</option>`;
                    $("municipios").html(template);
                    municipio.prop('disabled',false);
                },
                error: function ()
                {
                    alert('Ocurrio un error en el servidor...');
                    municipio.prop('disabled',false);
                }
            }
        );
    }
    else
    {
        alert("No selecciono ningun elemento");
        municipio.find('option').remove();
        //municipio.prop('disabled',true);
    }**/
});