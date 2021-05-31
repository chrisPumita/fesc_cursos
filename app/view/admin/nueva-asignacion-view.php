<!doctype html>
<html lang="en">
    <?php
        //Abrir para agregar los includes
        $tittle = "Nueva asignación";
        include("./view/includes/header.php");
    ?>
    <body class="body-home">
        <div class="d-flex">
            <?php include("./view/includes/admin-menupc.php"); ?>
            <div class="w-100">
                <?php include("./view/includes/admin-menutel.php"); ?>
                <div id="content">
                    <!--Inicio contenido dinamico-->
                    <div class="componet-dinamico bg-grey">
                        <!--INICIA SECCION DEL BANNER-->
                        <section>
                            <div class="container py-3">
                                <div class="row justify-content-center">
                                    <div class="col-md-12 text-center">
                                        <div class="img" style="background-image: url(https://www.gruponestoro.com/wp-content/uploads/2019/01/Dise%C3%B1o-Banner-Nestoro-CURSOS-Enero-2019.png); ">
                                            <div class="overlay"></div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card-body">
                                                            <div class="mx-auto">
                                                                <h4 class="text-light text-left"><strong>Crear nueva asignacion de grupo</strong>
                                                                <h5 class="text-light text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--FINALIZA SECCION DEL BANNER-->
                        
                        <!--INICIA FORMULARIO EDICION-->
                        <section class="container bg-grey py-3">
                            <div class="container py-2 bg-white">
                                <div class="row">
                                    <div class="col-lg-12 py-2">
                                        <h3>Detalles de la Asignación</h3>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-lg-12">
                                    <div class="p-3">
                                        <!-- Inicia el formulario-->
                                        <form class="user needs-validation" id="frm-add-asignacion" role="form" autocomplete="off" novalidate>                                    
                                            <div class="form-group row">
                                                <div class="col-sm-2 mb-3 mb-sm-0">
                                                    <label class="label" for="profesorAsig">Profesor asignado</label>
                                                </div>
                                                <div class="col-sm-10 mb-3 mb-sm-0">
                                                    <select class="form-control" id="profesorAsig">
                                                        <option>Dorotea Alvarez Soto</option>
                                                        <option>Juan Manuel Perez Sanchez</option>
                                                        <option>Adrian Uribe Peña</option>
                                                    </select>
                                                </div>
                                                <!-- <div class="col-sm-6 row mb-3">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="rbnHombre" name="sexo" class="custom-control-input" value="0" checked>
                                                        <label class="custom-control-label" for="rbnHombre">Hombre</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="rbnMujer" name="sexo" class="custom-control-input"  value="1">
                                                        <label class="custom-control-label" for="rbnMujer">Mujer</label>
                                                    </div>
                                                </div> -->
                                            </div>                                            
                                            <div class="form-group row vertical-align-center">
                                                <div class="col-sm-2 mb-3 mb-sm-0">
                                                    <label class="label" for="grupo">Grupo: </label>
                                                </div>
                                                <div class="col-sm-4 mb-3 mb-sm-0 d-flex">
                                                    <!-- <input type="text" class="form-control form-control-user"  name="grupo" id="Grupo" required="" placeholder="Grupo"> -->
                                                    <select class="form-control" id="grupo">
                                                        <option>1509</option>
                                                        <option>1508</option>
                                                        <option>1507</option>
                                                    </select>
                                                    <img class="image mx-2 aling-center" src="https://img.icons8.com/flat-round/452/plus.png" width="30" height="30">
                                                </div>
                                                <div class="col-sm-2 mb-3 mb-sm-0">
                                                    <label class="label" for="modalidad">Modalidad: </label>
                                                </div>
                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <!-- <input type="text" class="form-control form-control-user"  name="grupo" id="Grupo" required="" placeholder="Grupo"> -->
                                                    <select class="form-control" id="modalidad">
                                                        <option>Mixto</option>
                                                        <option>Presencial</option>
                                                        <option>A distancia</option>
                                                    </select>
                                                </div>                                              
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-2 mb-3 mb-sm-0">
                                                    <label class="label" for="generacion">Generación: </label>
                                                </div>
                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <select class="form-control" id="generacion">
                                                        <option>2016</option>
                                                        <option>2017</option>
                                                        <option>2018</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-2 mb-3 mb-sm-0">
                                                    <label class="label" for="semestre">Semestre: </label>
                                                </div>
                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <select class="form-control" id="semestre">
                                                        <option>2020-2</option>
                                                        <option>2021-1</option>
                                                        <option>2021-2</option>
                                                    </select>
                                                </div>                                               
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-2 mb-3 mb-sm-0">
                                                    <label class="label" for="inicio">Inicio: </label>
                                                </div>
                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <input type="date" name="inicio" max="3000-12-31" min="1000-01-01" class="form-control">
                                                </div>
                                                <div class="col-sm-2 mb-3 mb-sm-0">
                                                    <label class="label" for="fin">Fin: </label>
                                                </div>
                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                <input type="date" name="fin" max="3000-12-31" min="1000-01-01" class="form-control">
                                                </div>                                              
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-3 mb-3 mb-sm-0">
                                                    <label class="label" for="dateLimite">Limite de inscripciones: </label>
                                                </div>
                                                <div class="col-sm-3 mb-3 mb-sm-0">
                                                    <!-- <input type="text" class="form-control form-control-user"  name="grupo" id="Grupo" required="" placeholder="Grupo"> -->
                                                    <input type="date" name="dateLimite" max="3000-12-31" min="2021-05-25" class="form-control">
                                                </div>
                                                <div class="col-sm-2 mb-3 mb-sm-0">
                                                    <label class="label" for="numCupo">Cupo: </label>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input class="form-control" type="number" value="150" id="numCupo">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-group row">
                                                <div class="col-sm-2 mb-3 mb-sm-0">
                                                    <label>Habilitar inscripción:</label>
                                                </div>
                                                <div class="col-sm-4 mb-3 mb-sm-0">                               
                                                    <label>Aplicar descuento*</label>
                                                </div>
                                                <div class="col-sm-2 mb-3 mb-sm-0">                               
                                                    <label>Notas:</label>
                                                </div>
                                                <div class="col-sm-4 mb-3 mb-sm-0">                               
                                                    <label>text</label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Default checkbox
                                                </label>
                                            </div>                                           
                                            </div>

                                        </form>
                                        <!-- termina el formulario-->
                                    </div>
                                </div>   
                            </div>
                        </section>
                        <!-- FIN FORMULARIO EDICION-->
                    </div>
                    <!--FIN contenido dinamico-->
                    <?php include("./view/includes/footer.php");?>
                </div>
            </div>
        </div>
        <!-- script_js -->
        <script>
                    
            $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4',
            locale: 'es-es',
            });
        </script>
    </body>
</html>