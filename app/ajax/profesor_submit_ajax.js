try {

    $("#frm-update-profesor").validate({

        event: "blur",
        rules: {
            nombre: "required",
            app: "required",
            apm: "required",
            n_trabajador:"required",
            telefono:"required",
            correo:"required"

        },
        messages: {
            nombre: "Es necesario colocar el nombre del profesor",
            app: "Escriba el primer apellido",
            apm: "Escriba el segundo apellido",
            n_trabajador:"Escriba el numero del trabajador",
            telefono:"Escriba el telefono del profesor",
            correo:"Escriba el correo del profesor"
        },
        debug: true,
        errorElement: "label",
        submitHandler: function (form) {
            $("#Editar_prof").hide();
            $("#alerta").show();
            $("#alerta").html(
                "<img src='https://c.tenor.com/I6kN-6X7nhAAAAAj/loading-buffering.gif' class='loading_save'/>" +
                "<strong>Guardando cambios...</strong>"
            );
            setTimeout(function () {
                $("#Editar_prof").fadeIn("slow");
                $("#alerta").fadeOut("slow");
            }, 5000);
            // ----- AJAX send php response
            $.ajax({
                type: "POST",
                url:"./control/update-profesor.php",
                data: {
                    id_persona : $("#id_persona").val(),
                    id_prof: $("#id_profe").val(),
                    abre:$("#abreviatura").val(),
                    nombre_prof: $("#nombre").val(),
                    app: $("#app").val(),
                    apm: $("#apm").val(),
                    n_trabajador: $("#n_trabajador").val(),
                    telefono: $("#telefono").val(),
                    correo: $("#correo").val(),
                    sexo: $("input:radio[name=sexo]:checked").val(),
                    depro: $("#depto").val()

                },
                success: function (msg) {

                    let mjetemplate =`<div class="alert alert-${msg==1? "success":"danger"} alert-dismissible fade show" role="alert">
                                            <strong>Mensaje:  </strong> ${msg==1?"Actualizacion exitosa":"Error al actualizar profesor"}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>`;
                    $("#mjeAjax").html(mjetemplate);
                },
            });
            //regresar a la anterior pagina
            return false;
        },
    });
} catch (error) {}
