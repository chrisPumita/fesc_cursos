// RCGS
$(document).ready(function () {
        listaProfesores();
});
///Devuielve una lista de profesores de la base de datos
function listaProfesores() {
    $.ajax({
        url: "./webhook-admin/lista_profesores.php",
        data: {
            tipo: 0,
            estatus: 0
        },
        type: "POST",
        success: function (response) {
            //Convertir a JSNON el response que viene del servidor
            let obj_result = JSON.parse(response);
            if (obj_result.length>0)
            {
                let template = getTemplateTblProfesores(obj_result);
                //asignó a mi obj de html
                $("#tbl-prof").html(template);
            }
            else{
                $("#tbl-container").empty();
                template =  `<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Lo sentimos,</strong> por el momento no hay registros de profesores, por favor registre uno.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>`;
                $("#tbl-container").html(template);
            }
        }
    });
}

////////////////////// TEMPLATES DE PAGINA //////////////////////

function getTemplateTblProfesores(profesores) {
    var cont = 0;
    let template = "";
    profesores.forEach((profe=>{
        cont++;
        let estatus;
        let img;
        let edoCta;
        let colorBool;
        if(profe.estatus_profesor==1){
            estatus="Inhabilitar";
            img="prof_activo.png";
            edoCta="Activa";
            colorBool = "green";
        }else{
            estatus="Habilitar";
            img="prof_inactivo.png";
            edoCta="Inactiva";
            colorBool = "red";
        }
        $estado_admin= profe.admin>0? "<span class='badge badge-success'>admin</span>":"";
        template += `<tr id_profesor =${"'"+profe.id_profesor+"' "}>
                        <th scope="row">${cont}</th>
                        <td>${profe.no_trabajador}</td>
                        <td>${profe.app+" "+profe.apm+" "+profe.nombre+" "+$estado_admin} </td>
                        <td>${profe.depto_name}</td>
                        <td>${profe.telefono}</td>
                        <td>${profe.email}</td>
                        <td>${profe.fecha_registro}</td>
                        <td><a href="" data-toggle="tooltip" data-placement="left" title="Cuenta ${edoCta}">
                            <img src="./assets/img/${img}" class="rounded float-left" alt="..." width="60"></a>
                            <div class="blob ${colorBool}"></div>
                        </td>
                        <td>
                            <div class="dropdown" value_estatus="${profe.estatus_profesor}">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Opciones
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                   
                                        <button class="dropdown-item detalle-profesor" type="button">Ver Detalles</button>
                                  
                                    <button class="dropdown-item prof-estatus" type="button">${estatus}</button>
                                </div>
                            </div>
                        </td>
                    </tr>`;
    }));
    return template;
}