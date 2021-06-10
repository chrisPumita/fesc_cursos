// lo que sejecuta primero
$(document).ready(function () {
    consultaProfesoresActivos();
    if (pagList) {
        consultaListaAdmins();
    }else {
        consultaProfesoresActivos();
    }
});

function consultaListaAdmins() {
    //abrir ajax
    $.ajax({
        url: "./control/list_admin.php",
        success: function (response) {
            echo("vvvvvvvv");
            console.log(response);
            //Convertir a JSNON el response que viene del servidor
           let obj_result = JSON.parse(response);
           let template = "";
           if (obj_result.length>0)
           {
               var cont = 0;
               obj_result.forEach((obj_result=>{
                   cont++;
                   let estatus;
                   let img;
                   let toolStatus = "Cuenta ";
                   let colorBool;
                   if (obj_result.estatus_admin == 1){
                       estatus = `Inhabilitar`;
                       img = "prof_activo.png";
                       toolStatus += " ACTIVA";
                       colorBool = "green";
                   }
                   else{
                       estatus = `Habilitar`;
                       img = "prof_inactivo.png";
                       toolStatus += " INACTIVA";
                       colorBool = "red";
                   }
                   template += `<tr id_admin =${"'"+obj_result.id_profesor+"' "}>
                                <th scope="row">${cont}</th>
                                <td>${obj_result.no_trabajador}</td>
                                <td>${obj_result.app+" "+obj_result.apm+" "+obj_result.nombre}</td>
                                <td>${obj_result.cargo}</td>
                                <td>${obj_result.depto_name}</td>
                                <td>${obj_result.email}</td>
                                <td>${obj_result.fecha_registro}</td>
                                <td><a href="" data-toggle="tooltip" data-placement="left" title="${toolStatus}">
                                    <img src="./assets/img/${img}" class="rounded float-left" alt="..." width="60">
                                    </a>
                                    <div class="blob ${colorBool}"></div>
                                </td>
                                <td>
                                    <div class="dropdown" value_estatus="${obj_result.estatus_admin}">
                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Opciones
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                            <button class="dropdown-item" type="button">Ver Detalles</button>
                                            <button class="dropdown-item admin-estatus" type="button">${estatus}</button>
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
               template =   `<div class="alert alert-warning alert-dismissible fade show" role="alert">
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

$(document).on("click",".admin-estatus",function () {
    if (confirm("¿Esta seguro que desea cambiar el estado de la cuenta?")){
        //Obtengo los elmeentos html que contiene la informacion que requiero para actualizar
        let element = $(this)[0].parentElement.parentElement.parentElement.parentElement;
        let element_estatus = $(this)[0].parentElement.parentElement;

        //obtengo el valor del atributo del elemento seleccionado
        let id = $(element).attr("id_admin");
        let status = $(element_estatus).attr("value_estatus");
        // 0 = alumno; 2 = profesor; 3 = admin
        let type = 3;
        $.post(
            "./control/update-estatus.php",
            {id,status,type},
            function (response) {
                //actulizo la tabla de registros
                consultaListaAdmins();
            }
        )
    }
})
function consultaProfesoresActivos() {
    $.ajax({
        url:"./control/list_profesores_activos.php",
        success: function (response) {
            echo("vvvvvvvv");
            console.log(response);
            let obj_result = JSON.parse(response);
            console.log(obj_result);
            let template = "";
            if (obj_result.length>0) {
                var cont = 0;
                obj_result.forEach(
                    (obj_result=>{
                        cont++;
                        template += `<option value="${obj_result.id_profesor_admin_fk}">${obj_result.nombre+obj_result.app+obj_result.apm}</option>`;
                    })
                );
                $("#profesor").html(template);
            }
        }
    });
}