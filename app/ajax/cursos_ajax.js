// Activamos escucha

//variable global
let id_curso = 0;
$(document).ready(function () {
    if (lista)
        ListaCursosRegistrados(filtro_curso);
    else {
       id_curso = $("#id_curso").val();
       cargaDatosCurso(id_curso);
    }
});


// 0 inactivos, 1 activos, -x todos
function ListaCursosRegistrados(tipo) {
    $.ajax({
        url:"./control/list_cursos.php",
        data: {
            estado_filtro : tipo,
            idCurso : id_curso
        },
        type: "POST",
        success: function (response){
            let obj_result=JSON.parse(response);
            let template="";
            if(obj_result.length>0){
                var cont=0;
                obj_result.forEach((obj_result=>{
                    cont++;
                    let tipo_curso;
                    switch (obj_result.tipo_curso){
                        case "0":
                            tipo_curso="Curso";
                            break;
                        case "1":
                            tipo_curso="Diplomado";
                            break;
                        case "2":
                            tipo_curso="Seminario";
                            break;
                        default:
                            tipo_curso="No definido";
                            break;
                    }

                    let status_msg = obj_result.aprobado == 1 ? "Inhabilitar": "Acreditar";

                    template+=`<tr id_curso =${"'"+obj_result.id_curso+"' "}>
                                    <th scope="row">${cont}</th>
                                    <td>${obj_result.codigo}</td>
                                    <td>${obj_result.nombre_curso}</td>
                                    <td>${obj_result.nombre+" "+obj_result.app+" "+obj_result.apm}</td>
                                    <td>${obj_result.no_sesiones}</td>
                                    <td>${tipo_curso}</td>
                                    <td>${obj_result.costo_sugerido}</td>
                                    
                                    <!-- BOTON ACCIONES -->
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Opciones
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                <a href="./nueva-asignacion">
                                                    <button class="dropdown-item nuevo-grupo-curso" type="button">Nuevo grupo</button>
                                                </a>
                                                <button class="dropdown-item detalle-curso" type="button">Ver Detalles</button>
                                                <a href="#" data-toggle="modal" data-target="#histCurso">
                                                    <button class="dropdown-item historial-curso" type="button">Historial</button>
                                                </a>                                                        
                                                <button class="dropdown-item estatus-curso" type="button">${status_msg}</button>
                                            </div>
                                        </div>
                                    </td>
                               </tr>`;
                }));
                //se asigna al cuerpo de la tabla
                $("#tbl-cursos").html(template);
            }else{
                $("#tbl-containerCursos").empty();
                $("#tbl-container2Cursos").empty();
                template=`<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Lo sentimos</strong> No hay cursos activos aun, porfavor Active uno.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>`;
                $("#tbl-containerCursos").html(template);
            }
        }
    })
}

//fuincion que me carga los datos del curso
function cargaDatosCurso(id_curso) {
    $.ajax(
        {
            url:"./control/list_cursos.php",
            data: {
                estado_filtro: -1,
                idCurso : id_curso
            },
            type: "POST",
            success: function (response)
            {
                console.log(response)
                let obj_result = JSON.parse(response);
                console.log(obj_result);
                obj_result.forEach(
                    (obj_result)=>
                    {
                        $("#nombreCursoTitulo").html(`<h2 class="font-weight-bold mb-0">${obj_result.codigo} - ${obj_result.nombre_curso}</h2>`);
                        $("#detallesCurso").html(`${obj_result.descripcion}`);
                        //inputs de forms
                        $("#nombreCurso").val(obj_result.nombre_curso);
                    }
                );
            }
        }
    );
}

//escucha que se acciona al dar clic al boton
$(document).on("click",".detalle-curso",function () {
    //Accedo al tr y el tr tiene un atributo de id
    let element = $(this)[0].parentElement.parentElement.parentElement.parentElement;
    let id = $(element).attr("id_curso");
    var url = './detalles-curso';
    redirect_by_post(url, {
        id_curso: id
    }, false);
})

