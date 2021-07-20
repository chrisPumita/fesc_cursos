<?php
if(isset($_POST['idProfesor']) && isset($_POST['id_curso'])){
    $id_prof=$_POST['idProfesor'];
    $id_curso=$_POST['id_curso'];
}else{
    $id_prof=0;
    //$id_curso=$_POST['id_curso'];
    $id_curso=0;
}
?>
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
                                                            <h4 class="text-light text-left">
                                                                <strong>Crear nueva asignacion de grupo</strong>
                                                            </h4>
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
                                                        <label class="label" for="profesorAsig">Profesor asignado:</label>
                                                    </div>
                                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                                        <input type="hidden" id="id_prof" name="id_prof" value="<?php echo $id_prof ?>" >
                                                        <input type="hidden" id="id_curso" name="id_curso" value="<?php echo $id_curso ?>" >
                                                        <select class="form-control" id="profesorAsig">

                                                        </select>
                                                    </div>
                                                    <div class="col-sm-2 mb-3 mb-sm-0">
                                                        <label class="label" for="fecha-creacion">Fecha de creación:</label>
                                                    </div>
                                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                                        <input class="form-control" type="text" name="fecha-creacion" id="fecha-creacion" disabled>
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
                                                        <a href="#" data-toggle="modal" data-target="#nuevoGrupo">
                                                        <img class="image mx-2 aling-center" src="./assets/img/icons/plus2.svg" width="30" height="30">
                                                        </a>                                                    
                                                    </div>
                                                    <div class="col-sm-2 mb-3 mb-sm-0">
                                                        <label class="label" for="modalidad">Modalidad: </label>
                                                    </div>
                                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                                        <!-- <input type="text" class="form-control form-control-user"  name="grupo" id="Grupo" required="" placeholder="Grupo"> -->
                                                        <select class="form-control" id="modalidad">
                                                            <option value="0">Presencial</option>
                                                            <option value="1">En Línea</option>
                                                            <option value="2">Mixto</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-2 mb-3 mb-sm-0">
                                                        <label class="label" for="generacion">Generación: </label>
                                                    </div>
                                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                                        <select class="form-control" id="generacion">

                                                        </select>
                                                    </div>
                                                    <div class="col-sm-2 mb-3 mb-sm-0">
                                                        <label class="label" for="semestre">Semestre: </label>
                                                    </div>
                                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                                        <select class="form-control" id="semestre">

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-2 mb-3 mb-sm-0">
                                                        <label class="label" for="campo">Campo:</label>
                                                    </div>
                                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                                        <select class="form-control" id="campus">
                                                            <option value="0">1</option>
                                                            <option value="1">4</option>
                                                            <option value="2">Otro</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-2 mb-3 mb-sm-0">
                                                        <label class="label" for="costo">Costo:</label>
                                                    </div>
                                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                                        <input class="form-control" type="text" name="costo" id="costo">
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
                                                    <div class="col-sm-2 mb-3 mb-sm-0">
                                                        <label class="label" for="dateLimite">Límite de inscripciones: </label>
                                                    </div>
                                                    <div class="col-sm-4 mb-3 mb-sm-0">
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
                                                <div class="form-group row">
                                                    <div class="col-sm-2 mb-3 mb-sm-0">
                                                        <label class="label" for="inicio-actas">Inicio Actas: </label>
                                                    </div>
                                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                                        <input type="date" name="inicio" max="3000-12-31" min="1000-01-01" class="form-control" id="inicio-actas">
                                                    </div>
                                                    <div class="col-sm-2 mb-3 mb-sm-0">
                                                        <label class="label" for="fin-actas">Fin Actas: </label>
                                                    </div>
                                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                                        <input type="date" name="fin-actas" max="3000-12-31" min="1000-01-01" class="form-control" id="fin-actas">
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                        <div class="mt-1 mb-1 overflow-auto">
                                                            <table class="table table-hover text-left">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col"></th>
                                                                        <th scope="col">Habilitar inscripción a:</th>
                                                                        <th scope="col">% Descuento</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="procedencias">
                                                                <!-- ajax-->
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 p-0">
                                                        <div class="form-group row">
                                                            <div class="col-sm-4 mb-3 mb-sm-0">
                                                                <label class="label" for="txtnotas">Notas: </label>
                                                            </div>
                                                            <div class="col-sm-8 p-0">
                                                                <textarea class="form-control" id="txtnotas" rows="12"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col text-right">
                                                            <div class="btn btn-primary w-100 col-lg-8 text-center">
                                                                <a href="./nuevo-curso">Crear</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- termina el formulario-->
                                        </div>
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
        <?php include "modal-nuevo-grupo.php";?>
        <!-- script_js -->
        <!--<script>
            $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4',
            locale: 'es-es',
            });
        </script>-->
        <script src="./ajax/asignacion_grupo.js"></script>
    </body>
</html>