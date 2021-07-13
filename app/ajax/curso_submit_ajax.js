
try {
    $("#frm-update-curso").validate({
        event: "blur",
        rules: {
            editarNombreCurso: "required",
            editarDescripcion: "required",
            editarObjetivo: "required",
            editarDirigido: "required"
        },
        messages: {
            editarNombreCurso: "Es necesario colocar el nombre del Curso",
            editarDescripcion: "Necesitamos la descripcion del curso",
            editarObjetivo: "Esciba el objetivo del curso",
            editarDirigido: "Escriba brebemente a quienes va dirigido este curso"
        },
        debug: true,
        errorElement: "label",
        submitHandler: function (form) {
            $("#alerta").show();
            $("#alerta").html(
                "<img src='https://c.tenor.com/I6kN-6X7nhAAAAAj/loading-buffering.gif' class='loading_save'/>" +
                "<strong>Guardando cambios...</strong>"
            );
            setTimeout(function () {
                $("#alerta").fadeOut("slow");
            }, 100);
            // ----- AJAX send php response
            $.ajax({
                type: "POST",
                url:"./control/update-curso.php",
                data: {
                    id_curso: $("#idCurso").val(),
                    nombre_curso: $("#editarNombreCurso").val(),
                    descripcion: $("#editarDescripcion").val(),
                    objetivo: $("#editarObjetivo").val(),
                    dirigido: $("#editarDirigido").val(),
                    antecedentes: $("#editarAntecedentes").val(),
                    modalidad: $("#editarModalidad").val(),
                    no_sesiones: $("#editarSesiones").val(),
                    costo: $("#editarCosto").val()
                },
                success: function (msg) {
                    console.log(msg);

                    let mjetemplate =`<div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>Mensaje:  </strong> ${msg}
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


/*

* */