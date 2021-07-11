
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
                "<img src='https://c.tenor.com/I6kN-6X7nhAAAAAj/loading-buffering.gif' class='loading_save'/><strong>Guardando información...</strong>"
            );
            setTimeout(function () {
                $("#alerta").fadeOut("slow");
            }, 5000);
            // ----- AJAX send php response
            $.ajax({
                type: "POST",
                url:"./control/update-curso.php",
                data: {
                    id: $("#idCurso").val(),
                    nombreCurso: $("#editarNombreCurso").val()
                },
                success: function (msg) {
                    console.log(msg);
                    $("#alerta").html(msg);
                    setTimeout(function () {
                        $("#alerta").fadeOut("slow");
                    }, 3000);
                },
            });
            //regresar a la anterior pagina
            return false;
        },
    });
} catch (error) {}