//Activar el escucha
$(document).ready(function () {
    consultaUniversidades();
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

function consultaEstados_rep() {

}

$("#estados").change(function()
{

});