    <div class="row d-flex justify-content-center">
        <div class="col-12">
            <div class="">
                <div class="row">
                    <div class="col-12">
                        <div class="card card00 m-2 border-0">
                            <div class="row text-center justify-content-center px-3">
                                <p class="prev text-primary"><span class="fa fa-long-arrow-left">Anterior</span></p id="back">
                                <h3 class="mt-4">Detalles de la propuesta del nuevo curso</h3>
                            </div>
                            <div class="d-flex flex-md-row px-3 mt-4 flex-column-reverse">
                                <div class="col-md-4">
                                    <div class="card1">
                                        <ul id="progressbar" class="text-center">
                                            <li class="active step0"></li>
                                            <li class="step0"></li>
                                            <li class="step0"></li>
                                            <li class="step0"></li>
                                        </ul>
                                        <h6 class="mb-5">Información Básica</h6>
                                        <h6 class="mb-5">Configuración</h6>
                                        <h6 class="mb-5">Temario</h6>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <!-- Inicia perimer card-->
                                    <div class="card2 first-screen show ml-2">
                                        <div class="px-2 mt-12">
                                            <div class="mt-1 mb-1">
                                                <label for="exampleFormControlSelect2">Nombre</label>
                                                <input type="text" id="Curso" class="form-control" required placeholder="Nombre del curso">
                                            </div>
                                        </div>
                                        <div class="px-2 mt-12">
                                            <div class="mt-1 mb-1">
                                                <label for="exampleFormControlSelect2">Descripcion</label>
                                                <textarea class="form-control" rows="3" name="objetivo" id="objetivo" required="" placeholder="Escriba una breve descripcion del curso"></textarea>
                                            </div>
                                        </div>
                                        <div class="px-2 mt-12">
                                            <div class="mt-1 mb-1">
                                                <label for="exampleFormControlSelect2">Objetivo</label>
                                                <textarea class="form-control" rows="3" name="objetivo" id="objetivo" required="" placeholder="Escriba una breve descripcion del curso"></textarea>
                                            </div>
                                        </div>
                                        <div class="px-2 mt-12">
                                            <div class="mt-1 mb-1">
                                                <label for="exampleFormControlSelect2">Dirigido a</label>
                                                <textarea class="form-control" rows="3" name="objetivo" id="objetivo" required="" placeholder="Escriba una breve descripcion del curso"></textarea>
                                            </div>
                                        </div>
                                        <div class="px-2 mt-12">
                                            <div class="mt-1 mb-1">
                                                <label for="exampleFormControlSelect2">Antececdentes</label>
                                                <textarea class="form-control" rows="3" name="objetivo" id="objetivo" required="" placeholder="Escriba una breve descripcion del curso"></textarea>
                                            </div>
                                        </div>
                                        <div class="row px-3 mt-1 mb-5">
                                            <div class="next-button text-center mt-1 ml-2"> Siguiente </div>
                                        </div>
                                    </div>
                                    <!--Inicia card 2-->
                                    <div class="card2 ml-2">
                                        <!--Panel 2-->
                                        <div class="px-2 mt-12">
                                            <div class="mt-1 mb-1">
                                                <div class="card">
                                                    <img src="./assets/img/reposit-img/curso-excel.jpg" class="card-img-top" alt="img del curso">
                                                    <div class="card-body">
                                                        <h6 class="card-title"><strong>Imagen del Banner</strong></h6>
                                                        <p class="card-text py-1">Debe tener una resolución de 600px por 300px</p>
                                                        <div class="row">
                                                            <div class="col-md-9">
                                                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                                                <label class="custom-file-label" for="exampleInputFile" data-browse="Elejir">Seleccione una imagen</label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <a href="#"><button type="button" class="btn btn-warning btn-sec btn-block">Quitar</button></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="px-2 mt-12">
                                                    <div class="mt-1 mb-1">
                                                        <label for="exampleFormControlSelect2">No. de Sesiones</label>
                                                        <input class="form-control" type="number" value="42" id="example-number-input">
                                                    </div>
                                                </div>
                                                <div class="px-2 mt-12">
                                                    <div class="mt-1 mb-1 overflow-auto">
                                                        <label for="exampleFormControlSelect2">Documentación</label>
                                                        <table class="table table-hover text-center">
                                                            <thead>
                                                            <tr>
                                                                <th scope="col">Solicitar</th>
                                                                <th scope="col">Documento</th>
                                                                <th scope="col">Obligatorio</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="checkbox" class="form-check-input">
                                                                    </div>
                                                                </td>
                                                                <td>Comprobante de pago</td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="checkbox" class="form-check-input">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="checkbox" class="form-check-input">
                                                                    </div>
                                                                </td>
                                                                <td>Credencial Estudiante</td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="checkbox" class="form-check-input">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="checkbox" class="form-check-input">
                                                                    </div>
                                                                </td>
                                                                <td>Tira de materias</td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="checkbox" class="form-check-input">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="px-2 mt-12">
                                                    <div class="mt-1 mb-1">
                                                        <label for="exampleFormControlSelect2">Palabras clave</label>
                                                        <textarea id="demo1" class="tag-editor-hidden-src" readonly="readonly" style="display: block;"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row px-3 mt-3">
                                            <div class="form-group mt-1 mb-1"> <input type="password" id="pwd" class="form-control" required>
                                                <label class="ml-3 form-control-placeholder" for="pwd">Password</label>
                                            </div>
                                            <div class="next-button text-center mt-1 ml-2"> Siguiente</div>
                                        </div>
                                        <div class="row mt-3 mb-5">
                                            <div class="col-12">
                                                <p class="mb-1">Password must contain</p>
                                                <div class="row">
                                                    <div class="col-6"><span class="fa fa-circle text-danger"></span> lower case</div>
                                                    <div class="col-6"><span class="fa fa-circle text-danger"></span> numbers</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6"><span class="fa fa-circle text-danger"></span> upper case</div>
                                                    <div class="col-6"><span class="fa fa-circle text-danger"></span> 8-16 characters</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="card2 ml-2">
                                            <div class="row px-3 mt-3">
                                                <p class="mb-0">Select your Country</p>
                                                <div class="form-group mt-3 mb-4">
                                                    <div class="select mb-3"> <select name="account" class="form-control">
                                                            <option>India</option>
                                                            <option>USA</option>
                                                            <option>Germany</option>
                                                            <option>Mexico</option>
                                                        </select> </div>
                                                </div>
                                                <div class="next-button text-center mt-3 ml-2"> <span class="fa fa-arrow-right"></span> </div>
                                            </div>
                                        </div>
                                    <div class="card2 ml-2">
                                        <div class="row px-3 mt-2 mb-4 text-center">
                                            <h2 class="col-12 text-primary"><strong>Excelente!</strong></h2>
                                            <div class="col-12 text-center"><img class="tick" src="./assets/img/success.gif"></div>
                                            <h6 class="col-12 mt-2"><i>...TU curso se ha enviado a revisión...</i></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row px-3">
                                <h2 class="text-muted get-bonus mt-4 mb-5">Has creado <span class="text-danger">0</span> cursos</h2> <img class="pic ml-auto mr-3" src="./assets/img/course.svg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

<script>
    $(document).ready(function(){

        var current_fs, next_fs, previous_fs;

// No BACK button on first screen
        if($(".show").hasClass("first-screen")) {
            $(".prev").css({ 'display' : 'none' });
        }

// Next button
        $(".next-button").click(function(){

            current_fs = $(this).parent().parent();
            next_fs = $(this).parent().parent().next();

            $(".prev").css({ 'display' : 'block' });

            $(current_fs).removeClass("show");
            $(next_fs).addClass("show");

            $("#progressbar li").eq($(".card2").index(next_fs)).addClass("active");

            current_fs.animate({}, {
                step: function() {

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });

                    next_fs.css({
                        'display': 'block'
                    });
                }
            });
        });

// Previous button
        $(".prev").click(function(){

            current_fs = $(".show");
            previous_fs = $(".show").prev();

            $(current_fs).removeClass("show");
            $(previous_fs).addClass("show");

            $(".prev").css({ 'display' : 'block' });

            if($(".show").hasClass("first-screen")) {
                $(".prev").css({ 'display' : 'none' });
            }

            $("#progressbar li").eq($(".card2").index(current_fs)).removeClass("active");

            current_fs.animate({}, {
                step: function() {

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });

                    previous_fs.css({
                        'display': 'block'
                    });
                }
            });
        });

    });
</script>