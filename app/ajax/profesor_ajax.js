//Activar el escucha
$(document).ready(function () {
    if(pagList){
        consultaListaProfesoresA();
        validar_form();
    }else{
        id_profesor = $("#id_profe").val();
        cargadatosProfesor(id_profesor);

    }
    consultadepartamentos();
});

function DatoscuentaAdmin(id_profesor){
    $.ajax(
        {
            url:"./control/list_admin.php",
            data: { id_profesor : id_profesor},
            type: "POST",
            success: function (response){
                //console.log(response);
                let obj_result = JSON.parse(response);
                if (obj_result.length>0){
                let template="";
                obj_result.forEach(
                    (obj_result)=>{
                        template +=`
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="callout callout-second">
                                    <h5><strong>Cuenta de administrador</strong></h5>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="media mb-3">
                                                    <div class="media-left media-middle">
                                                        <img src="https://play-lh.googleusercontent.com/AeVwiUzhw9HVEg0s19qrGvyS40JuNBwzb94ZPaWiM529_gvC7RgOtObnsM2mgwT5CfY" class="mr-2 mt-0" width="40px" alt="">
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="mt-2">Este profesor tiene cuenta de adminsitrador</p>
                                                    </div>
                                                </div>
                                                <div class="media mb-3">
                                                    <div class="media-left media-middle">
                                                        <img src="https://image.flaticon.com/icons/png/512/42/42288.png" class="mr-2 mt-0" width="40px" alt="">
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="mt-2">Cargo: ${obj_result.cargo}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="container">
                                                    <div class="spinner-grow bg-success" role="status" style="width: 2rem; height: 2rem"></div>
                                                    <span class="ml-3 mb-3 font-weight-bold">Cuenta administrador activa</span>
                                                    <h6 class="mb-0 mt-3"><strong>Notas:</strong></h6>
                                                    <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur voluptas cum, vel repudiandae quibusdam consectetur dolorem, blanditiis incidunt laborum provident eum aspernatur voluptatibus non obcaecati mollitia! Cum eveniet rerum consectetur.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        `;
                        $("#detalles_cuenta").html(template);
                    }
                )
                }else{

                }
            }
        }
    );
}
function cargadatosProfesor(id_profesor){
    $.ajax(
        {
            url:"./control/list_profesores.php",
            data: {
                tipo: 2,
                idprof : id_profesor
            },
            type: "POST",
            success: function (response)
            {
                let obj_result = JSON.parse(response);
                obj_result.forEach(
                    (obj_result)=>
                    {

                        $("#abreviatura").html(` <option ${obj_result.prefijo =='Lic.' ? 'selected' : '' } > Lic.</option>
                                                        <option ${obj_result.prefijo =='Mto.' ? 'selected' : obj_result.prefijo =='Mta.'? 'selected':'' }>${obj_result.prefijo=='Mta.'?'Mta.':'Mto.'}</option>
                                                        <option ${obj_result.prefijo =='Dr.' ? 'selected' : obj_result.prefijo =='Dra.'? 'selected':'' }>${obj_result.prefijo=='Dra.'?'Dra.':'Dr.'}</option>`);
                        $("#nombre").html(`<input type="text" className="form-control" value="${obj_result.nombre}" aria-label="Nombres">`);
                        $("#primer_ap").html(`<input type="text" className="form-control" value="${obj_result.app}"  aria-label="Primer Apellido">`);
                        $("#segundo_ap").html(`<input type="text" class="form-control" value="${obj_result.apm}" aria-label="Segundo Apellido">
                                    `);
                        $("#n_trabajador").html(`<input type="text" class="form-control" value="${obj_result.no_trabajador}" aria-label="No. Trabajador">`);
                        $("#telefono").html(`<input type="text" className="form-control" value="${obj_result.telefono}" aria-label="Telefono">`);
                        $("#sexo").html(`
                                        <div class="custom-control custom-radio custom-control-inline mt-2">
                                            <input type="radio" id="rbnHombre" name="sexo" class="custom-control-input" value="0"  ${obj_result.sexo==0?'checked':''}>
                                            <label class="custom-control-label" for="rbnHombre">Hombre</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline mt-2">
                                            <input type="radio" id="rbnMujer" name="sexo" class="custom-control-input" value="1" ${obj_result.sexo==1? 'checked':''} >
                                            <label class="custom-control-label" for="rbnMujer">Mujer</label>
                                        </div>`);
                        $("#correo").html(`<input type="text" class="form-control" value="${obj_result.email}" aria-label="Correo">`);
                        DatoscuentaAdmin(id_profesor);
                    }
                );

            }
        }
    );

}


function consultaListaProfesoresA(){
    $.ajax({
        url: "./control/list_profesores.php",
        data: {
            tipo: 0
        },
        type: "POST",
        success: function (response) {
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
                    let edoCta;
                    let colorBool;
                    if(obj_result.estatus_profesor==1){
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
                    $estado_admin= obj_result.admin>0? "<span class='badge badge-success'>admin</span>":"";
                    template += `<tr id_profesor =${"'"+obj_result.id_profesor+"' "}>
                                <th scope="row">${cont}</th>
                                <td>${obj_result.no_trabajador}</td>
                                <td>${obj_result.app+" "+obj_result.apm+" "+obj_result.nombre+" "+$estado_admin} </td>
                                <td>${obj_result.depto_name}</td>
                                <td>${obj_result.telefono}</td>
                                <td>${obj_result.email}</td>
                                <td>${obj_result.fecha_registro}</td>
                                
                                <td><a href="" data-toggle="tooltip" data-placement="left" title="Cuenta ${edoCta}">
                                    <img src="./assets/img/${img}" class="rounded float-left" alt="..." width="60"></a>
                                    <div class="blob ${colorBool}"></div>
                                </td>
                                <td>
                                    <div class="dropdown" value_estatus="${obj_result.estatus_profesor}">
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
//escucha que se acciona al dar clic al boton
$(document).on("click",".detalle-profesor",function () {
    //Accedo al tr y el tr tiene un atributo de id
    let element = $(this)[0].parentElement.parentElement.parentElement.parentElement;
    let id = $(element).attr("id_profesor");
    //console.log(id);
    var url = './detalles-profesor';
    redirect_by_post(url, {
        idProfesor: id
    }, false);
})

$(document).on("click",".prof-estatus", function (){
    if(confirm("¿Estas seguro que deseas cambiar el estado de la cuenta?")){
        // se obtienen los elementos html que tienen el estatus y el id
        let element=$(this)[0].parentElement.parentElement.parentElement.parentElement;
        let element_estatus=$(this)[0].parentElement.parentElement
        /*console.log(element);
        console.log(element_estatus);*/
        // se obtiene el valor de los atributos de html
        let id= $(element).attr("id_profesor");
        let status=$(element_estatus).attr("value_estatus");
        let type =2;
        /*console.log(id);
        console.log(status);*/
        $.post(
            "./control/update-estatus.php",
            {id,status,type},
            function (responsive){
                console.log(responsive);
                //actualizar lista prof
                consultaListaProfesoresA();
            }
        )

    }
})

function consultadepartamentos() {
    $.ajax(
        {
            url: "./control/list_depto.php",
            success: function (response)
            {
                console.log(response);
                let obj_result = JSON.parse(response);
                let template = "";
                obj_result.forEach(
                    (obj_result)=>
                    {
                        template += `<option value="${obj_result.id_depto}">${obj_result.nombre}</option>`;
                    }
                );

                $("#depto").html(template);
            }
        }
    );
}

/* FRM  AGREGA CUENTA DE PROFESOR */
function validar_form() {
//Inciacia envio de formulario
    $(function () {
        jQuery("#frm-add-profesor").validate({ //inicamos la validación del formulario
            //Cada cosa que configures la debes de terminar con una coma ,
            onfocusout: false,  //Si un objeto no cumple con la validación, tomara el foco
            rules: { //iniciamos sección de reglas
                nombre_profesor: { //estas seras las reglas para el objeto que en su propiedad name tenga nameO
                    required: true, //indicamos que es requerido que contenga un valor
                    minlength: 3, //indicamos que debe de tener por lo menos 4 caracteres
                    maxlength: 20 //indicamos que debe de tener maximo 20 caracteres
                },
                app: {
                    required: true,
                    minlength: 3,
                    maxlength: 25
                },
                apm: {
                    required: true,
                    minlength: 3,
                    maxlength: 25
                },
                correo_prof: {
                    required: true,
                    email: true
                },
                notrabajador: {
                    required: true

                }
            },
            messages: {//estos seran los mensaje que aparezcan segun el objeto y la reque que espeficiquemos en la sección de reglas
                nombre_profesor: {
                    required: "Porfavor indicanos tu nombre",
                    minlength: $.format("Necesitamos por lo menos {0} caracteres"),
                    maxlength: $.format("{0} caracteres son demasiados!")
                },
                app: {
                    required: "Porfavor indicanos tu apellido paterno",
                    minlength: $.format("Necesitamos por lo menos {0} caracteres"),
                    maxlength: $.format("{0} caracteres son demasiados!")
                },
                apm: {
                    required: "Porfavor indicanos tu apellido materno",
                    minlength: $.format("Necesitamos por lo menos {0} caracteres"),
                    maxlength: $.format("{0} caracteres son demasiados!")
                },
                correo_prof: {
                    required: "Hey vamos, por favor, d&aacute;nos tu email",
                    email: "La estructura del correo es incorrecta"
                },
                notrabajador: {
                    required: "Por favor ingrese su numero de trabajador"
                }

            },
            submitHandler: function (form) { //si todos los controles cumplen con las validaciones, se ejecuta este codigo
                $("#formError").addClass("hidden"); //para ocultar el mensaje, le agregamos la clase de Bootstrap 3
                var btnEnviar = $("#btnEnviar");
                var formulario = $('#frm-add-profesor');
                // start ajax
                $.ajax({
                    /*
                        // variables Profesor
                        $id_depto = $_POST['id_depto'];
                        $no_trabajador = $_POST['no_trabajador'];
                        $prefijo= $_POST['prefijo'];
                    * */
                    url: "./control/profesor_add.php",
                    type: "POST",
                    dataType: 'html', //tipo de respuesta del servidor
                    data: {
                        nombre: $('#nombre_profesor').val(),
                        app: $('#app').val(),
                        apm: $('#apm').val(),
                        telefono: $('#telefono').val(),
                        sexo: $('#sexo').val(),
                        email: $('#correo').val(),
                        no_trabajador: $('#notrabajador').val(),
                        id_depto: $('#depto').val(),
                        prefijo: $('#prefijo').val()
                    }, //parametros (valores) en formato llaver:valor, que se enviaran con la solicitud
                    beforeSend: function () {
                        /** Esta función se ejecuta durante el envió de la petición al
                         * servidor.* */
                        formulario.css("opacity", ".5");
                        btnEnviar.val("Enviando..."); // Para input de tipo button
                        btnEnviar.attr("disabled", "disabled");
                    },
                    complete: function (xhr, textStatus) {
                        //se llama cuando se recibe la respuesta (no importa si es error o exito)
                        btnEnviar.val("Crear Cuenta");
                        btnEnviar.removeAttr("disabled");

                        $('#nuevoProfesor').modal('hide');
                        formulario.trigger("reset");
                        formulario.css("opacity", "");
                        btnEnviar.removeAttr("disabled");
                    },
                    success: function (msg) {
                        $('.statusMsg').html('');
                        var toast = `
                        <div id="toast" class="toast" role="alert" aria-live="assertive" aria-atomic="true"  data-autohide="false">
                            <div class="toast-header">
                                <img src="./app/assets/img/icon_logo.png" class="rounded mr-2" alt="logo" width="30">
                                <strong class="mr-auto">SICEP</strong>
                                <small class="text-muted">Mensaje</small>
                                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="toast-body">
                                ` + msg + `
                            </div>
                        </div>`;

                        $("#toast").html(toast);
                        $('.toast').toast('show');
                        consultaListaProfesoresA();
                    },
                    error: function (xhr, textStatus, errorThrown) {
                        //called when there is an error
                        alert("La respuesta fue con error");
                    }
                }); //end ajax
            },
            invalidHandler: function (event, validator) { //si por lo menos uno control no cumplen con las validaciones, se ejecuta este codigo
                var errors = validator.numberOfInvalids(); // número de errores encontrados al validar el formulario
                if (errors) { //si errors = 0 no se ejecuta el if, de ser mayor que cero se ejecuta
                    //la linea de abajo es un if ternario
                    var message = errors == 1 ? ' Error: Te perdiste 1 campo. Ha sido destacado' : ' Error: Te perdiste ' + errors + ' campos. Se han destacado';
                    $("div#formError span#Mensaje").html(message); //agregamos el valor de message a objeto seleccionado
                    $("div#formError").removeClass("hidden"); //para que se muestre el mensaje, le quitamos la clase que lo oculta
                }
            },
            highlight: function (element, errorClass) {//los objetos que no cumplan con la validación parpadearan
                $(element).fadeOut(function () {
                    $(element).fadeIn();
                });
            },
            errorElement: "div", //indicamos en qué tipo de objeto DOM se agregarán las alertas. El valor por default es "label"
            errorClass: "alert alert-danger", //indicamos la clase que se agregara a las alertas. El valor por default es "error"
        });
    });

}