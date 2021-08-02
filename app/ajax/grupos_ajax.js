
$(document).ready(function () {
    if(pagList){
        ListaGruposActivos(0);
    }

});


function ListaGruposActivos(id){
    $.ajax({
        url:"./control/list_grupos.php",
        data: {idPr:id},
        type: "POST",
        success: function (response){
            let obj_result=JSON.parse(response);
            let template="";
            if(obj_result.length>0) {
                var cont = 0;
                obj_result.forEach((obj_result => {
                        cont++;
                        template += `<tr id_grupo="${obj_result.id_grupo}">
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
                                                        <button class="dropdown-item terminar-Gp" estatus="${obj_result.estatus_grupo}" type="button">${obj_result.estatus_grupo==1? "Terminar Grupo":"Activar Grupo"}</button>
                                                    </div>
                                                </div>
                                    </td>
                               </tr>`;
                }));
                //se asigna al cuerpo de la tabla
                    $("#tbl-grupos").html(template);
            }else{
                    $("#tbl-containerGrupos").empty();
                    template = `<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Lo sentimos</strong> No hay grupos registrados para este profesor.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>`;
                    $("#tbl-containerGrupos").html(template);
            }
        }
    });
}

$(document).on("click",".terminar-Gp",function (){

        let estatus=$(this)[0];
        let element=$(this)[0].parentElement.parentElement.parentElement.parentElement;
        let id=$(element).attr("id_grupo");
        let estatus_ap=$(estatus).attr("estatus");
        estatus_ap=estatus_ap==1? 0 : 1 ;
        $.post(
            "./control/update-estatus-grupos.php",
            {id,estatus_ap},
            function (responsive){
                console.log(responsive);
                ListaGruposActivos(0);
            })
        });