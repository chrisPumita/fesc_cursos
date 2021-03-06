<?php
    if (!isset($_POST['id_alumno'])){
        header('Location: ./lista-alumnos');
    }
    $id_alumno = $_POST['id_alumno'];
?>

<!doctype html>
<html lang="en">
    <?php
        //Abrir para agregar los includes
        $tittle = "Datos de Alumno";
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
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                            <li class="breadcrumb-item"><a href="#">Alumnos</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Detalles del Alumno</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="font-weight-bold mb-0">Detalles del Alumno</h2>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-lg-12">
                                    <div class="callout callout-second">
                                        <div class="contariner">
                                            <div class="row">
                                                <div class="col-lg-9">
                                                    <h4>Editar los datos del alumno</h4>
                                                    Verifique su informaci??n, ya que ??sta se utilizar?? para fines de Constancias.
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
                                <form class="user needs-validation" id="frm-det-alumno" role="form" autocomplete="off" novalidate>
                                    <div class="form-group row">
                                        <div class="col-lg-3 mt-3 mb-1 text-right">
                                            <label class="col-form-label">Nombre(s): </label>
                                        </div>
                                        <div class="col-lg-9 mt-3 mb-1">
                                            <input type="text" class="form-control" id="nombreAlumno" name="nombreAlumno" placeholder="Nombre(s)" aria-label="Nombres">
                                            <input type="text" class="form-control" id="idAlumno" name="idAlumno" placeholder="Nombre(s)" aria-label="Nombres" value="<?php echo $id_alumno;?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 mb-1 text-right">
                                            <label class="col-form-label">Primer Apellido:</label>
                                        </div>
                                        <div class="col-lg-9 mb-1">
                                            <input type="text" class="form-control" id="txt-primer-ap" name="primer-apellido" placeholder="Primer Apellido" aria-label="Primer Apellido">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 mb-1 text-right">
                                            <label class="col-form-label">Segundo Apellido:</label>
                                        </div>
                                        <div class="col-lg-9 mb-1">
                                            <input type="text" class="form-control" id="txt-segundo-ap" name="segundo-apellido" placeholder="Segundo Apellido" aria-label="Segundo Apellido">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 mb-1 text-right">
                                            <label class="col-form-label">Tel??fono:</label>
                                        </div>
                                        <div class="col-lg-9 mb-1">
                                            <input type="text" class="form-control" id="txt-tel" name="telefono" placeholder="5555555555" aria-label="Telefono">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 mb-1 text-right">
                                            <label class="col-form-label">Sexo:</label>
                                        </div>
                                        <div class="col-lg-9 mb-1" >
                                            <select class="form-control" id="sexo">
                                                <option value="0">Hombre</option>
                                                <option value="1">Mujer</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 mb-1 text-right">
                                            <label class="col-form-label">Correo Electr??nico:</label>
                                        </div>
                                        <div class="col-lg-9 mb-1">
                                            <input type="text" class="form-control" id="correoAlumno" name="correoAlumno" placeholder="ejemplo@dominio.com" aria-label="Correo">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 mb-1 text-right">
                                            <label class="col-form-label">Estado:</label>
                                        </div>
                                        <div class="col-lg-9 mb-1">
                                            <select class="form-control" name="estados" id="estados">
                                                <!--AJAX-->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 mb-1 text-right">
                                            <label class="col-form-label">Municipio:</label>
                                        </div>
                                        <div class="col-lg-9 mb-1">
                                            <select class="form-control" id="municipios">
                                                <!--AJAX-->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 mb-1 text-right">
                                            <label class="col-form-label">Procedencia:</label>
                                        </div>
                                        <div class="col-lg-9 mb-1">
                                            <select class="form-control" id="procedencia">
                                                <!--AJAX-->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 mb-1 text-right">
                                            <label class="col-form-label">Universidad:</label>
                                        </div>
                                        <div class="col-lg-9 mb-1">
                                            <select class="form-control" id="universidades">
                                               <!--AJAX-->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 mb-1 text-right">
                                            <label class="col-form-label">Carrera/Profesi??n: </label>
                                        </div>
                                        <div class="col-lg-9 mb-1">
                                            <input type="text" class="form-control" id="txt-carrera" name="carrera" placeholder="Carrera o Profesi??n actual" aria-label="Carrera">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 mb-1 text-right">
                                            <label class="col-form-label">No. de Cuenta/Matr??cula:</label>
                                        </div>
                                        <div class="col-lg-9 mb-1">
                                            <input type="text" class="form-control" id="txt-matricula" name="matricula" placeholder="N??mero de Cuenta o Matr??cula" aria-label="Matricula">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-9"></div>
                                        <div class="col-lg-3 text-align-right">
                                            <button class="btn btn-primary w-100 aling-self-center mt-2 mb-3 ml-4">Actualizar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </section>
                        <!-- FIN FORMULARIO EDICION-->
                        <!-- SECCION DE ACCESOS RAPIDOS -->
                        <section class="container bg-grey">
                            <div class="row">
                                <div class="col-lg-12 py-3">
                                    <h3>Accesos R??pidos</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title font-weight-bold">Crear Cuenta de Servicio Social</h5>
                                            <p class="card-text text-muted mt-2 mb-2">Al crear esta cuenta, el alumno ser?? registrado como parte del servicio social dentro del sistema.</p>
                                            <a href="#" data-toggle="modal" data-target="#altaServicioSocial">
                                            <button type="button" class="btn btn-primary w-100 mt-4 text-align-right">Crear</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title font-weight-bold">Constancias</h5>
                                            <p class="card-text text-muted mb-1">Constancias pertenecientes a este alumno.</p>
                                            <select class="form-control mb-1" id="list-curso">
                                                <option>345891</option>
                                                <option>784649</option>
                                                <option>145712</option>
                                            </select>
                                            <a href="./nueva-asignacion">
                                            <button type="button" class="btn btn-primary w-100 mt-2 text-align-right">Ver</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- FIN DE SECCION ACCESOS RAPIDOS -->
                        <!--INICIA SECCION DEL CALLOUT DEL SERVICIO SOCIAL-->
                        <section class="container py-2 bg-grey">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="callout callout-second">
                                        <h5><strong>Servicio Social:</strong></h5>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="media mb-3">
                                                        <div class="media-left media-middle">
                                                            <img src="./assets/img/icons/socialserv-active1.svg" class="mr-2 mt-0" width=40px alt="">
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="mt-2">Este alumno tiene cuenta de Servicio Social</p>
                                                        </div>
                                                    </div>
                                                    <div class="media mb-3">
                                                        <div class="media-left media-middle">
                                                            <img src="./assets/img/icons/check-calendar1.svg" class="mr-2 mt-0" width=40px alt="">
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="mt-2">Fecha de Inicio: 22 de Febrero de 2021</p>
                                                        </div>
                                                    </div>
                                                    <div class="media mb-3">
                                                        <div class="media-left media-middle">
                                                            <img src="./assets/img/icons/cross-calendar1.svg" class="mr-2 mt-0" width=40px alt="">
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="mt-2">Fecha de T??rmino: 22 de Agosto de 2021</p>
                                                        </div>
                                                    </div>
                                                    <div class="media mb-3">
                                                        <div class="media-left media-middle">
                                                            <img src="./assets/img/icons/calendar1.svg" class="mr-2 mt-0" width=40px alt="">
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="mt-2">Fecha de Alta: 23 de Febrero de 2021</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="container">
                                                        <div class="spinner-grow bg-success" role="status" style="width: 2rem; height: 2rem"></div>
                                                        <span class="ml-3 mb-3 font-weight-bold">Servicio Activo</span>
                                                        <h6 class="mb-0 mt-3"><strong>Notas:</strong></h6>
                                                        <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur voluptas cum, vel repudiandae quibusdam consectetur dolorem, blanditiis incidunt laborum provident eum aspernatur voluptatibus non obcaecati mollitia! Cum eveniet rerum consectetur.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--FINALIZA SECCION DEL CALLOUT DEL SERVICIO SOCIAL--->
                        <!--INICIA SECCION HISTORIAL DE GRUPOS ASOCIADOS-->
                        <section class="container bg-grey">
                            <div class="row">
                                <div class="col-sm-12 mt-2 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="mx-auto">
                                                <div class="row">
                                                    <div class="col-lg-9">
                                                        <h3 class="mb-3">Historial de Inscripciones</h3>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <select class="form-control mb-3" id="filtroHistorial">
                                                            <option>Todas</option>
                                                            <option>Activas</option>
                                                            <option>Sin aprobar</option>
                                                            <option>Terminadas</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 overflow-auto table-responsive">
                                                        <table class="table table-hover table-striped table-sm bg-light">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Grupo</th>
                                                                    <th scope="col">Curso</th>
                                                                    <th scope="col">Profesor</th>
                                                                    <th scope="col">Estatus de Pago</th>
                                                                    <th scope="col">Autorizaci??n de Inscripci??n</th>
                                                                    <th scope="col">Constancia</th>
                                                                    <th scope="col">Fecha de Solicitud</th>
                                                                    <th scope="col">Fecha de T??rmino</th>
                                                                    <th scope="col">Notas</th>
                                                                    <th scope="col">Estatus</th>
                                                                    <th scope="col">Acciones</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">1</th>
                                                                    <td>5110</td>
                                                                    <td>Curso Dise??o UIX</td>
                                                                    <td>Juan Perez Sanchez</td>
                                                                    <td>Confirmado</td>
                                                                    <td>Confirmada</td>
                                                                    <td>Pendiente</td>
                                                                    <td>05-01-2021</td>
                                                                    <td>05-06-2021</td>
                                                                    <td></td>
                                                                    <td>Activa</td>
                                                                    <td>
                                                                        <!-- BOTON ACCIONES -->
                                                                        <div class="dropdown">
                                                                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            Opciones
                                                                            </button>
                                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                                                <a href="./ficha-inscripcion">
                                                                                    <button class="dropdown-item" type="button">Ficha de Incripci??n</button>
                                                                                </a>
                                                                                <button class="dropdown-item" type="button">Editar grupo</button>
                                                                                <a href="#" data-toggle="modal" data-target="#verSolicitudes">
                                                                                <button class="dropdown-item" type="button">Ver solicitudes</button>
                                                                                </a>
                                                                                <button class="dropdown-item" type="button">Terminar grupo</button>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">2</th>
                                                                    <td>5112</td>
                                                                    <td>Curso Excel Avanzado con Macros</td>
                                                                    <td>Alejandro Navarrete Perez</td>
                                                                    <td>Pendiente</td>
                                                                    <td>Pendiente</td>
                                                                    <td>Pendiente</td>
                                                                    <td>10-06-2021</td>
                                                                    <td>10-10-2021</td>
                                                                    <td></td>
                                                                    <td>Sin aprobar</td>
                                                                    <td>
                                                                        <!-- BOTON ACCIONES -->
                                                                        <div class="dropdown">
                                                                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            Opciones
                                                                            </button>
                                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                                                <a href="./ficha-inscripcion">
                                                                                    <button class="dropdown-item" type="button">Ficha de Incripci??n</button>
                                                                                </a>
                                                                                <button class="dropdown-item" type="button">Editar grupo</button>
                                                                                <a href="#" data-toggle="modal" data-target="#verSolicitudes">
                                                                                <button class="dropdown-item" type="button">Ver solicitudes</button>
                                                                                </a>
                                                                                <button class="dropdown-item" type="button">Terminar grupo</button>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">3</th>
                                                                    <td>5114</td>
                                                                    <td>Iniciaci??n al C??mputo I</td>
                                                                    <td>Ana Gabriela Guevara Espinoza</td>
                                                                    <td>Confirmado</td>
                                                                    <td>Confirmada</td>
                                                                    <td>Aprobada</td>
                                                                    <td>21-09-2020</td>
                                                                    <td>20-12-2020</td>
                                                                    <td></td>
                                                                    <td>Terminada</td>
                                                                    <td>
                                                                        <!-- BOTON ACCIONES -->
                                                                        <div class="dropdown">
                                                                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            Opciones
                                                                            </button>
                                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                                                <a href="./ficha-inscripcion">
                                                                                    <button class="dropdown-item" type="button">Ficha de Incripci??n</button>
                                                                                </a>
                                                                                <button class="dropdown-item" type="button">Editar grupo</button>
                                                                                <a href="#" data-toggle="modal" data-target="#verSolicitudes">
                                                                                <button class="dropdown-item" type="button">Ver solicitudes</button>
                                                                                </a>
                                                                                <button class="dropdown-item" type="button">Terminar grupo</button>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <!-- PAGINADOR DE TABLA -->
                                                <div class="row">
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
        <?php include "modal-serviciosocial-alumno.php";?>
        <?php include "modal-ver-solicitudes.php"; ?>
        <script>
            let pagList = false;
            let is_login = false;
            let filtroAlumno = -1;
        </script>
        <!-- script_js -->
        <script src="./ajax/alumno_ajax.js"></script>
        <script src="./ajax/tools.js"></scriptsrc>
    </body>
</html>