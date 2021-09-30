// RCGS
window.onload=function() {
    id_profesor = $("#id_prof").val();
    consultaProfesoresActivos(id_profesor);
    listas_desplegables();
    procedenciasList();
    const fecha = new Date();
    $("#fecha-creacion").val(fecha.toLocaleDateString());
}

function procedenciasList(){
    $.ajax({
        url:"./control/list_procedencias.php",
        success: function (response) {
            let obj_result = JSON.parse(response);
            let template = "";
            let controles="";
            if (obj_result.length>0) {
                var cont = 0;
                template += ``;
                obj_result.forEach(
                    (obj_result=>{
                        cont++;
                        template +=`
                    <tr id_procedencia="${obj_result.id_tipo_procedencia}">
                        <td>
                            <div class= "form-check" >
                                <input type= "checkbox"  class= "form-check-input habilitar_procedencia" id="${obj_result.id_tipo_procedencia}" >
                            </div>
                        </td>
                        <td>${obj_result.tipo_procedencia}</td>
                        <td>
                                <input class="form-control" type="number" disabled value="0" id="num${obj_result.id_tipo_procedencia}">
                        </td>
                    </tr>`;
                    })
                );
                $("#procedencias").html(template);
            }
        }
    });
}

// habilita y deshabilita los campos para los descuentos
$(document).on("click",".habilitar_procedencia",function () {
    //Accedo al tr y el tr tiene un atributo de id
    let element = $(this)[0];

    let id=$(element).attr("id");
    id="#num"+id;
    if ($(this).is(':checked') ) {
        $(id).prop("disabled", false);
    }else{
        $(id).prop("disabled", true);
    }
})

function consultaProfesoresActivos(id_profesor) {
    $.ajax({
        url: "./control/list_profesores.php",
        data: {
            // tipo 1 activos no administradores
            // 2 detalles profesor
            // 3 activos admin  no admin activos o no activos
            // 0 todos
            tipo: 3,
            // para opcion 3:  1 activo 2 inactivo
            estatus: 1
        },
        type: "POST",
        success: function (response) {
            let obj_result = JSON.parse(response);
            let template = "";
            if (obj_result.length>0) {
                var cont = 0;
                template += `<option >Seleccione...</option>`;
                obj_result.forEach(
                    (obj_result=>{
                        cont++;
                        template += `<option value="${obj_result.id_profesor}" ${obj_result.id_profesor==id_profesor? "selected":""}>${obj_result.app+" "+obj_result.apm+" "+obj_result.nombre}</option>`;
                    })
                );
                $("#profesorAsig").html(template);
            }
        }
    });
}


function listas_desplegables(){
    var fecha = new Date();
    var ano1 = fecha.getFullYear();
    var ano = fecha.getFullYear();
    var mes = fecha.getMonth() + 1;
    let template = "";
    let template2 = "";
    for ($i=0;$i<4;$i++){
        template += `<option value="${ano}" >${ano}</option>`;
        if($i<2){
            if(ano1 == ano){
                if (mes<6){
                    msg=ano+'-1';
                    template2 += `<option value="${msg}" >${msg}</option>`;
                    msg=ano+'-2';
                    template2 += `<option value="${msg}" >${msg}</option>`;
                }else{
                    msg=ano+'-2';
                    template2 += `<option value="${msg}" >${msg}</option>`;
                }
            }else {
                msg1 = ano + '-1';
                msg2 = ano + '-2';
                template2 += `<option value="${msg1}" >${msg1}</option>`;
                template2 += `<option value="${msg2}" >${msg2}</option>`;
            }
        }
        ano++
    }
    $("#generacion").html(template);
    $("#semestre").html(template2);
}