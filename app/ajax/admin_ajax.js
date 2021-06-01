// lo que sejecuta primero
$(document).ready(function () {
    consultaListaAdmins();
});

function consultaListaAdmins() {
    //abrir ajax
    $.ajax({
       url: "./control/list_admin.php",
        success: function (response) {
            //Convertir a JSNON el response que viene del servidor
           let obj_result = JSON.parse(response);
           let template = "";
           if (obj_result.length>0)
           {
               var cont = 0;
               obj_result.forEach((obj_result=>{
                   cont++;
                   let estatus = obj_result.estatus_admin == 1 ? `Inhabilitar`:`Habilitar`;
                   let classEnabled = obj_result.estatus_admin == 1 ? "":"class='table-warning'";
                   template += `<tr id_admin =${"'"+obj_result.id_profesor+"' "+classEnabled}>
                                <th scope="row">${cont}</th>
                                <td>${obj_result.no_trabajador}</td>
                                <td>${obj_result.app+" "+obj_result.apm+" "+obj_result.nombre}</td>
                                <td>${obj_result.cargo}</td>
                                <td>${obj_result.depto_name}</td>
                                <td>${obj_result.email}</td>
                                <td>${obj_result.fecha_registro}</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Opciones
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                            <button class="dropdown-item" type="button">Ver Detalles</button>
                                            <button class="dropdown-item" type="button">${estatus}</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>`;
               }));
               //asigno a mi obj de html
               $("#tbl-admin").html(template);
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