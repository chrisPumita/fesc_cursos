// Activamos escucha

//variable global
let id_curso = 0;
$(document).ready(function () {
    if (pagList)
        ListaCursosRegistrados(filtro_curso,0);

    else {
        if (pagListP){
            ListaCursosRegistrados(-1,1);
        }else{
            id_curso = $("#id_curso").val();
            cargaDatosCurso(id_curso);
        }

    }

});

// 0 inactivos, 1 activos, -x todos
function ListaCursosRegistrados(tipo,filtro) {
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
            let templateIMG="";
            let template2="";
            let templatelista="";
            if(obj_result.length>0){
                var cont=0;
                obj_result.forEach((obj_result=>{
                    cont++;
                    let status_msg = obj_result.aprobado == 1 ? "Inhabilitar": "Acreditar";
                    let aprobado = obj_result.aprobado == 1 ? "Aprobado" : "Por revisar";
                    let tipoAprobado = obj_result.aprobado == 1 ? "success" : "warning";
                    template+=`<tr id_curso =${"'"+obj_result.id_curso+"' "}>
                                    <th scope="row">${cont}</th>
                                    <td>${obj_result.codigo}</td>
                                    <td>${obj_result.nombre_curso} <span class="badge badge-${tipoAprobado}">${aprobado}</span></td>
                                    <td>${obj_result.nombre+" "+obj_result.app+" "+obj_result.apm}</td>
                                    <td>${obj_result.fecha_creacion}</td>
                                    <td>${getTipoCurso(obj_result.tipo_curso)}</td>
                                    <td><a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modalPDF"><i class="icon ion-md-eye"></i> Ver</a></td>
                                    
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
                    templateIMG += `<div class="carousel-item ${(cont-1)==0 ? "active": ""}">
                                    <div class="img d-block w-100" style="background-image: url(${obj_result.banner_img}); height: 300px; ">
                                            <div class="overlay"></div>
                                            <div class="carousel-caption d-md-block">
                                                <h5>${obj_result.nombre_curso}</h5>
                                                <a href="#">
                                                    <button type="button" class="btn btn-primary btn-sm">Mas Detalles</button>
                                                </a>
                                            </div>
                                        </div>
                                 </div>`;
                    template2+=`<li data-target="#carouselExampleIndicators" data-slide-to="${cont}" class="active"></li>`;
                    templatelista+=`<option value="${obj_result.id_curso}">${obj_result.nombre_curso} </option> `;

                }));
                //se asigna al cuerpo de la tabla
                if(filtro==0) {
                    $("#carruceles").html(templateIMG);
                    $("#indicadores").html(template2);
                    $("#tbl-cursos").html(template);
                }else{
                    // lista
                    $("#cursolista").html(templatelista);
                }
            }else{
                if(filtro==0) {
                    $("#tbl-containerCursos").empty();
                    $("#tbl-container2Cursos").empty();
                    template = `<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Lo sentimos</strong> No hay cursos activos aun, porfavor Active uno.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>`;
                    $("#tbl-containerCursos").html(template);
                    $("#carusel_img").empty();
                    template = `<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                 <strong>Lo sentimos</strong> No hay cursos activos aun, porfavor Active uno.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>`;
                    $("#carusel_img").html(template);
                }else{
                    // lista desplegable porfesor
                    $("#tbl-containerCursos").empty();
                    $("#tbl-container2Cursos").empty();
                    template = `<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Lo sentimos</strong> No hay cursos activos aun, porfavor Active uno.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>`;
                    $("#tbl-containerCursos").html(template);
                }
            }
        }
    })
}

//fuincion que me carga los datos del curso
function cargaDatosCurso(id_curso) {
    let acreditado = false;
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
                let obj_result = JSON.parse(response);
                obj_result.forEach(
                    (obj_result)=>
                    {
                        $("#nombreCursoTitulo").html(`<h2 class="font-weight-bold mb-0">${obj_result.codigo} - ${obj_result.nombre_curso}</h2>`);
                        $("#detallesCurso").html(`${obj_result.descripcion}`);
                        $("#nombreAutor").html(`${obj_result.nombre} ${obj_result.app} ${obj_result.apm}`);
                        $("#fechaCreacion").html(`${obj_result.fecha_creacion}`);
                        $("#dirigido_a").html(`${obj_result.dirigido_a}`);
                        $("#modalidad").html(getTipoCurso(obj_result.tipo_curso));
                        $("#objetivo").html(obj_result.objetivo);
                        $("#antecedentes").html(obj_result.antecedentes);
                        let img = `<div class="img d-block w-100" style="background-image: url(${obj_result.banner_img}); height: 300px; "></div>`;
                        $("#imgContainer").html(img);
                        let pdfFile = `<a href="${obj_result.link_temario_pdf}" download target="_blank"  class="btn btn-primary btn-block"> Descargar</a>`;
                        $("#filePDF").html(pdfFile);
                        let tmpPdf = `<embed src="${obj_result.link_temario_pdf}" type="application/pdf" width="100%" height="600px" />`;
                        $("#filePdfView").html(tmpPdf);
                        //consulto los detalles de la acredsitacion del curso
                        acreditado = obj_result.id_profesor_admin_acredita != null ? true:false;
                        detallesAcreditacion(id_curso,acreditado);

                        // cargar los datos al form
                        $("#editarNombreCurso").val(obj_result.nombre_curso);
                        $("#editarDescripcion").val(obj_result.descripcion);
                        $("#editarObjetivo").val(obj_result.objetivo);
                        $("#idCurso").val(obj_result.id_curso);
                        $("#editarDirigido").val(obj_result.dirigido_a);
                        $("#editarAntecedentes").val(obj_result.antecedentes);
                        $("#idCurso").val(obj_result.id_curso);
                    }
                );

            }
        }
    );

}


function detallesAcreditacion(id_Curso,acreditado) {
    let tmplate;
    if(acreditado){
        $.ajax(
            {
                url:"./control/acreditacion_curso.php",
                data: {
                    idCurso : id_Curso
                },
                type: "POST",
                success: function (response)
                {
                    let obj_result = JSON.parse(response);
                    if (obj_result.length == 1){
                        tmplate =`
                            <div class="d-flex">
                                <div class="m-auto">
                                    <img src="./assets/img/icons/ok.svg" width="80" alt="svg ok">
                                </div>
                                <div class="m-auto">
                                    <h5>Aprobado por:</h5>
                                    <h5><strong>${obj_result[0].prefijo} ${obj_result[0].nombre} ${obj_result[0].app} ${obj_result[0].apm}</strong></h5>
                                    <h6>No Trabajador: ${obj_result[0].no_trabajador}</h6>
                                    <h6>${obj_result[0].cargo} de Departamento de ${obj_result[0].departamento}</h6>
                                </div>
                            </div>
                            <div class="card-body d-flex text-align-right">
                                    <a href="#" class="btn btn-danger btn-block ">Inhabilitar</a>
                            </div>`;
                        $("#detallesAprobacionCurso").html(tmplate);
                    }
                }
            }
        );
    }
    else{
        tmplate =`
            <div class="d-flex">
                <div class="m-auto">
                    <img src="./assets/img/icons/cancel.svg" width="80" alt="svg ok">
                </div>
                <div class="m-auto">
                    <h5>Sin acreditar</h5>
                    <h6><strong>Este curso aun no se ha acreditado.</strong></h6>
                    <h6>Si este curso cumple con los requerimentos, puede aprobar este curso y comenzar a asignar grupos</h6>
                </div>
            </div>
            <div class="card-body d-flex text-align-right">
                <a href="#" class="btn btn-success btn-block ">Acreditar</a>
            </div>`;
        $("#detallesAprobacionCurso").html(tmplate);
    }

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

