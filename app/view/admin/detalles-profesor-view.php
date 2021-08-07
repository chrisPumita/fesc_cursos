<?php
if (!isset($_POST['idProfesor'])){
    header('Location: ./lista-profesores');
}
$id_prof = $_POST['idProfesor'];
?>
<!doctype html>
<html lang="en">
<?php
//Abrir para agregar los includes
$tittle = "Datos de Profesor";
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
                    <!--INICIA ENCABEZADO DETALLES USUARIO BIENVENIDA-->
                    <section class="container bg-grey py-2">
                        <div class="row">
                            <div class="col-lg-12">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb bg-grey">
                                        <li class="breadcrumb-item"><a href="./home">Inicio</a></li>
                                        <li class="breadcrumb-item"><a href="./lista-profesores">Profesores</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Detalles del Profesor</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="hidden" id="id_profe" value="<?php echo $id_prof ?>">
                                <input type="hidden" id="id_persona" name="id_persona" ">
                                <<input type="hidden" id="estatus_cuenta" name="estatus_cuenta" ">
                                <h2 class="font-weight-bold mb-0">Detalles del Profesor</h2>
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-lg-12">
                                <div class="callout callout-second">
                                    <div class="contariner">
                                        <div class="row">
                                            <div class="col-lg-9">
                                                <h4>Editar los datos del profesor</h4>
                                                Verifique su información, ya que ésta se utilizará para fines de Constancias y Enlace con los alumnos inscritos en los grupos que le sean asignados.
                                            </div>
                                            <div class="col-lg-3 text-align-right" id="Estatus_cuenta">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- FIN ENCABEZADO DETALLES USUARIO BIENVENIDA -->

                    <!--INICIA FORMULARIO EDICION-->
                    <section class="container py-2 bg-grey">
                        <div class="container py-2 bg-white" id="Editar_prof">
                            <span id="mjeAjax"></span>
                            <form class="submit" id="frm-update-profesor" >
                                <div class="form-group row">
                                    <div class="col-lg-3 mt-3 mb-1 text-right">

                                        <label class="col-form-label">Abreviación: </label>

                                    </div>
                                    <div class="col-lg-8 mt-3 mb-1 ">
                                        <select class="form-control" id="abreviatura" name="abreviatura">

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 mb-1 text-right">
                                        <label for="nombre" class="col-form-label">Nombre(s): </label>
                                    </div>
                                    <div class="col-lg-8 mb-1">
                                        <input type="text" class="form-control"  id="nombre" name="nombre" aria-label="Nombres">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 mb-1 text-right">
                                        <label for="app" class="col-form-label">Primer Apellido: </label>
                                    </div>
                                    <div class="col-lg-8 mb-1" id="primer_ap">
                                        <input type="text" class="form-control" value="" id="app" name="app" aria-label="Primer Apellido">
                                       </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 mb-1 text-right" >
                                        <label for="apm" class="col-form-label">Segundo Apellido: </label>
                                    </div>
                                    <div class="col-lg-8 mb-1" id="segundo_ap">
                                        <input type="text" class="form-control"  id="apm" name="apm" aria-label="Segundo Apellido">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 mb-1 text-right">
                                        <label class="col-form-label">No. de Trabajador: </label>
                                    </div>
                                    <div class="col-lg-8 mb-1">
                                        <input type="text" class="form-control"  id="n_trabajador" name="n_trabajador" aria-label="No. Trabajador">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 mb-1 text-right">
                                        <label class="col-form-label">Teléfono: </label>
                                    </div>
                                    <div class="col-lg-8 mb-1">
                                        <input type="text" className="form-control" id="telefono" name="telefono" aria-label="Telefono">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 mb-1 text-right">
                                        <label class="col-form-label">Sexo:</label>
                                    </div>
                                    <div class="col-lg-9 mb-1" id="sexoc">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 mb-1 text-right" >
                                        <label class="col-form-label">Correo Electrónico: </label>
                                    </div>
                                    <div class="col-lg-8 mb-1" >
                                        <input type="text" class="form-control" id="correo" name="correo"  aria-label="Correo">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 mb-1 text-right">
                                        <label class="col-form-label">Departamento: </label>
                                    </div>
                                    <div class="col-lg-8 mb-1">
                                        <select class="form-control" id="depto" name="depto">

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-8"></div>
                                    <div class="col-lg-3 text-align-right">
                                        <input type="submit" class="btn btn-primary" id="btnEnviar" value="Actualizar">
                                    </div>
                                </div>


                            </form>
                        </div>
                        <div class="container py-2 bg-white" id="alerta"></div>
                    </section>
                    <!-- FIN FORMULARIO EDICION-->
                    <section class="container py-2 bg-grey" id="detalles_cuenta">
                        <!-- Ajax-->
                    </section>
                    <!-- SECCION DE ACCESOS RAPIDOS -->
                    <section class="container bg-grey">
                        <div class="row">
                            <div class="col-lg-12 py-3">
                                <h3>Accesos Rápidos</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title font-weight-bold">Reestablecer contraseña</h5>
                                        <p class="card-text text-muted">Se reestablecerá la contraseña eliminando la actual. Tenga en cuenta que esta opción es sólo en caso de que el profesor no tenga acceso al correo con el que se registró y que tenga problemas para recuperarla él mismo.</p>
                                        <button type="button" class="btn btn-primary w-100 text-align-right">Reestablecer</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6" id="contenedornuevaasignacion">

                            </div>
                        </div>

                    </section>
                    <!-- FIN DE SECCION ACCESOS RAPIDOS -->

                    <!--INICIA SECCION HISTORIAL DE GRUPOS ASOCIADOS-->
                    <section class="container bg-grey" >
                        <div class="row">
                            <div class="col-sm-12 py-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mx-auto">
                                            <div class="row">
                                                <div class="col-lg-9">
                                                    <h3 class="mb-3">Historial de grupos asociados a este profesor</h3>

                                                </div>
                                                <div class="col-lg-3">
                                                    <select class="form-control mb-3" id="filtroHistorial">
                                                        <option>Todos</option>
                                                        <option>Presencial</option>
                                                        <option>Mixto</option>
                                                        <option>Online</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row" id="tbl-containerGrupos">
                                                <div class="col-lg-12 overflow-auto table-responsive">
                                                    <table class="table table-hover table-striped table-sm bg-light">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Grupo</th>
                                                                <th scope="col">Curso</th>
                                                                <th scope="col">Profesor</th>
                                                                <th scope="col">Cupo</th>
                                                                <th scope="col">Fecha de inicio</th>
                                                                <th scope="col">Tipo</th>
                                                                <th scope="col">Notas</th>
                                                                <th scope="col">Acciones</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="tbl-grupos">
                                                          <!-- ajax -->
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <!-- PAGINADOR DE TABLA -->
                                            <div class="row" id="tbl-container2Grupos">
                                                <div class="col-lg-12">
                                                    <nav aria-label="Page navigation example">
                                                        <ul class="pagination justify-content-center">
                                                            <li class="page-item disabled">
                                                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Anterior</a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                            <li class="page-item">
                                                                <a class="page-link" href="#">Siguiente</a>
                                                            </li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- FIN SECCION HISTORIAL DE GRUPOS ASOCIADOS-->
                </div>
                <!--FIN contenido dinamico-->
                <?php include("./view/includes/footer.php"); ?>
            </div>
        </div>
    </div>
    <script language="javascript" type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.min.js"></script>

    <?php include "modal-cambiarpassword-admin.php"; ?>
    <?php include "modal-cambiarclaveconfir-admin.php"; ?>
    <?php include "modal-ver-horario.php"; ?>
    <?php include "modal-ver-solicitudes.php"; ?>
    <!-- script_js -->
    <script>
        let pagList = false;
        let pagListP = true;
    </script>

    <script src="./ajax/validar-form.js"></script>
    <script src="./ajax/profesor_ajax.js"></script>
    <script src="./ajax/home_ajax.js"></script>
    <script src="./ajax/grupos_ajax.js"></script>
    <script src="./ajax/cursos_ajax.js"></script>
    <script src="./ajax/tools.js"></script>
    <script src="./ajax/profesor_submit_ajax.js"></script>

</body>

</html>