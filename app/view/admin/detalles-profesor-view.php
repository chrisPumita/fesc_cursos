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
                                            <div class="col-lg-3 text-align-right">
                                                <button class="btn btn-danger w-100 aling-self-center mt-3">DESACTIVAR CUENTA</button>
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
                        <div class="container py-2 bg-white">
                            <form class="user needs-validation" id="frm-det-profesor" role="form" autocomplete="off" novalidate>
                                <div class="form-group row">
                                    <div class="col-lg-3 mt-3 mb-1 text-right">

                                        <label class="col-form-label">Abreviación: </label>

                                    </div>
                                    <div class="col-lg-8 mt-3 mb-1 ">
                                        <select class="form-control" id="abreviatura">

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 mb-1 text-right">
                                        <label class="col-form-label">Nombre(s): </label>
                                    </div>
                                    <div class="col-lg-8 mb-1" id="nombre">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 mb-1 text-right">
                                        <label class="col-form-label">Primer Apellido: </label>
                                    </div>
                                    <div class="col-lg-8 mb-1" id="primer_ap">
                                       </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 mb-1 text-right" >
                                        <label class="col-form-label">Segundo Apellido: </label>
                                    </div>
                                    <div class="col-lg-8 mb-1" id="segundo_ap">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 mb-1 text-right">
                                        <label class="col-form-label">No. de Trabajador: </label>
                                    </div>
                                    <div class="col-lg-8 mb-1" id="n_trabajador">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 mb-1 text-right">
                                        <label class="col-form-label">Teléfono: </label>
                                    </div>
                                    <div class="col-lg-8 mb-1" id="telefono">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 mb-1 text-right">
                                        <label class="col-form-label">Sexo:</label>
                                    </div>
                                    <div class="col-lg-9 mb-1" id="sexo">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 mb-1 text-right" >
                                        <label class="col-form-label">Correo Electrónico: </label>
                                    </div>
                                    <div class="col-lg-8 mb-1" id="correo">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 mb-1 text-right">
                                        <label class="col-form-label">Departamento: </label>
                                    </div>
                                    <div class="col-lg-8 mb-1">
                                        <select class="form-control" id="depto">

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-8"></div>
                                    <div class="col-lg-3 text-align-right">
                                        <button class="btn btn-primary w-100 aling-self-center mt-2 mb-3 ml-5">Actualizar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
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
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body" id="contenedorasignacion">
                                        <h5 class="card-title font-weight-bold">Asignar grupo</h5>
                                        <p class="card-text text-muted">Crear y asignar un grupo nuevo a este profesor.</p>
                                        <select class="form-control" id="cursolista">


                                        </select>
                                        <a href="./nueva-asignacion">
                                            <button type="button" class="btn btn-primary w-100 mt-4 mb-2 text-align-right">Crear</button>
                                        </a>
                                    </div>
                                </div>
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
    <?php include "modal-cambiarpassword-admin.php"; ?>
    <?php include "modal-cambiarclaveconfir-admin.php"; ?>
    <?php include "modal-ver-horario.php"; ?>
    <?php include "modal-ver-solicitudes.php"; ?>
    <!-- script_js -->
    <script>
        let pagList = false;
    </script>
    <script src="./ajax/profesor_ajax.js"></script>
    <script src="./ajax/home_ajax.js"></script>
    <script src="./ajax/tools.js"></script>

</body>

</html>