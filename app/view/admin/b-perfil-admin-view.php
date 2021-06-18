<!doctype html>
<html lang="en">
    <?php
    //Abrir para agregar los includes
    $tittle = "Perfil";
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
                                            <li class="breadcrumb-item active" aria-current="page">Mi Perfil</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="font-weight-bold mb-0">Mi Perfil</h2>
                                </div>
                            </div>
                        <!--<div class="row py-2">
                                <div class="col-lg-12">
                                    <div class="callout callout-second">
                                        <div class="contariner">
                                            <div class="row">
                                                <div class="col-lg-9">
                                                    <h4>Cambiar contraseña</h4>
                                                        En este apartado puede cambiar su contraseña actual.
                                                </div>
                                                <div class="col-lg-3 text-align-right">
                                                    <a href="#" data-toggle="modal" data-target="#cambiopassword">
                                                        <button class="btn btn-primary w-100 aling-self-center mt-3">Cambiar</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                        </section>
                        <!-- FIN ENCABEZADO DETALLES USUARIO BIENVENIDA -->
                        <!--INICIA FORMULARIO EDICION-->
                        <section class="container py-2 bg-grey">
                            <div class="container py-2 bg-white">
                                <form class="user needs-validation" id="frm-det-profesor" role="form" autocomplete="off" novalidate>
                                    <div class="form-group row">
                                        <div class="col-lg-3 mt-3 mb-1 text-right">
                                            <label class="col-form-label">Abreviación:</label>
                                        </div>
                                        <div class="col-lg-8 mt-3 mb-1 ">
                                            <select class="form-control" id="list-abreviatura">
                                                <option>Lic.</option>
                                                <option>Mto.</option>
                                                <option>Dr.</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 mb-1 text-right">
                                            <label class="col-form-label">Nombre(s):</label>
                                        </div>
                                        <div class="col-lg-8 mb-1">
                                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre(s)" aria-label="Nombres">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 mb-1 text-right">
                                            <label class="col-form-label">Primer Apellido:</label>
                                        </div>
                                        <div class="col-lg-8 mb-1">
                                            <input type="text" class="form-control" id="primerap" name="primerap" placeholder="Primer Apellido" aria-label="Primer Apellido">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 mb-1 text-right">
                                            <label class="col-form-label">Segundo Apellido:</label>
                                        </div>
                                        <div class="col-lg-8 mb-1">
                                            <input type="text" class="form-control" id="segundoap" name="segudoap" placeholder="Segundo Apellido" aria-label="Segundo Apellido">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 mb-1 text-right">
                                            <label class="col-form-label">No. de Trabajador:</label>
                                        </div>
                                        <div class="col-lg-8 mb-1">
                                            <input type="text" class="form-control" id="numtrab" name="numtrab" placeholder="Número de Trabajador" aria-label="No. Trabajador">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 mb-1 text-right">
                                            <label class="col-form-label">Teléfono:</label>
                                        </div>
                                        <div class="col-lg-8 mb-1">
                                            <input type="text" class="form-control" id="tel" name="tel" placeholder="5555555555" aria-label="Telefono">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 mb-1 text-right">
                                            <label class="col-form-label">Sexo:</label>
                                        </div>
                                        <div class="col-lg-9 mb-1">
                                            <div class="custom-control custom-radio custom-control-inline mt-2">
                                                <input type="radio" id="rbnHombre" name="sexo" class="custom-control-input" value="0" checked>
                                                <label class="custom-control-label" for="rbnHombre">Hombre</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline mt-2">
                                                <input type="radio" id="rbnMujer" name="sexo" class="custom-control-input" value="1">
                                                <label class="custom-control-label" for="rbnMujer">Mujer</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 mb-1 text-right">
                                            <label class="col-form-label">Correo Electrónico:</label>
                                        </div>
                                        <div class="col-lg-8 mb-1">
                                            <input type="text" class="form-control" id="correo" name="correo" placeholder="ejemplo@dominio.com" aria-label="Correo">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 mb-1 text-right">
                                            <label class="col-form-label">Departamento:</label>
                                        </div>
                                        <div class="col-lg-8 mb-1">
                                            <select class="form-control" id="list-depto">
                                                <option>Informática</option>
                                                <option>Matemáticas</option>
                                                <option>Cómputo</option>
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
                                            <h5 class="card-title font-weight-bold">Cambiar Contraseña</h5>
                                            <p class="card-text text-muted">En este apartado puede cambiar su contraseña actual.</p>
                                            <a href="#" data-toggle="modal" data-target="#cambiopassword">
                                                <button class="btn btn-primary w-100 aling-self-center mt-3">Cambiar</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title font-weight-bold">Cambiar Clave de Confirmación</h5>
                                            <p class="card-text text-muted">En este apartado puede cambiar su clave de confirmación actual.</p>
                                            <a href="#" data-toggle="modal" data-target="#cambioclaveconfirm">
                                                <button class="btn btn-primary w-100 aling-self-center mt-3">Cambiar</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- FIN DE SECCION ACCESOS RAPIDOS -->
                        <!--INICIA SECCION HISTORIAL DE GRUPOS ASOCIADOS-->
                        <section class="container bg-grey">
                            <div class="row">
                                <div class="col-sm-12 py-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="mx-auto">
                                                <div class="row">
                                                    <div class="col-lg-9">
                                                        <h3 class="mb-3">Historial de grupos</h3>
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
                                                <div class="row">
                                                    <div class="col-lg-12 overflow-auto table-responsive">
                                                        <table class="table table-hover table-striped table-sm bg-light">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Grupo</th>
                                                                    <th scope="col">Curso</th>
                                                                    <th scope="col">Cupo</th>
                                                                    <th scope="col">Fecha de inicio</th>
                                                                    <th scope="col">Fecha de término</th>
                                                                    <th scope="col">Tipo</th>
                                                                    <th scope="col">Notas</th>
                                                                    <th scope="col">Acciones</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">1</th>
                                                                    <td>5110</td>
                                                                    <td>Curso Diseño UIX</td>
                                                                    <td>30</td>
                                                                    <td>01 de Enero del 2021</td>
                                                                    <td>31 de Junio del 2021</td>
                                                                    <td>Prsencial</td>
                                                                    <td>Grupo lleno</td>
                                                                    <td>
                                                                        <!-- BOTON ACCIONES -->
                                                                        <div class="dropdown">
                                                                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                Opciones
                                                                            </button>
                                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                                                <a href="#" data-toggle="modal" data-target="#verHorario">
                                                                                    <button class="dropdown-item" type="button">Ver Horario</button>
                                                                                </a>
                                                                                <a href="./detalles-curso">
                                                                                    <button class="dropdown-item" type="button">Ver Curso</button>
                                                                                </a>
                                                                                <a href="#" data-toggle="modal" data-target="#">
                                                                                    <button class="dropdown-item" type="button">Ver Inscritos</button>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">2</th>
                                                                    <td>2603</td>
                                                                    <td>Curso Excel Avanzado con Macros</td>
                                                                    <td>20</td>
                                                                    <td>27 de Agosto del 2021</td>
                                                                    <td>27 de Noviembre del 2021</td>
                                                                    <td>Mixto</td>
                                                                    <td></td>
                                                                    <td>
                                                                        <!-- BOTON ACCIONES -->
                                                                        <div class="dropdown">
                                                                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                Opciones
                                                                            </button>
                                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                                                <a href="#" data-toggle="modal" data-target="#verHorario">
                                                                                    <button class="dropdown-item" type="button">Ver Horario</button>
                                                                                </a>
                                                                                <a href="./detalles-curso">
                                                                                    <button class="dropdown-item" type="button">Ver Curso</button>
                                                                                </a>
                                                                                <a href="#" data-toggle="modal" data-target="#">
                                                                                    <button class="dropdown-item" type="button">Ver Inscritos</button>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">3</th>
                                                                    <td>2603</td>
                                                                    <td>Iniciación al cómputo I</td>
                                                                    <td>30</td>
                                                                    <td>02 de Febrero del 2021</td>
                                                                    <td>11 de Julio del 2021</td>
                                                                    <td>Online</td>
                                                                    <td></td>
                                                                    <!-- BOTON ACCIONES -->
                                                                    <td>
                                                                        <div class="dropdown">
                                                                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                Opciones
                                                                            </button>
                                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                                                <a href="#" data-toggle="modal" data-target="#verHorario">
                                                                                    <button class="dropdown-item" type="button">Ver Horario</button>
                                                                                </a>
                                                                                <a href="./detalles-curso">
                                                                                    <button class="dropdown-item" type="button">Ver Curso</button>
                                                                                </a>
                                                                                <a href="#" data-toggle="modal" data-target="#">
                                                                                    <button class="dropdown-item" type="button">Ver Inscritos</button>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
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
                        </section>
                        <!-- FIN SECCION HISTORIAL DE GRUPOS ASOCIADOS-->
                    </div>
                    <!--FIN contenido dinamico-->
                    <?php include("./view/includes/footer.php"); ?>
                </div>
            </div>
            <?php include "modal-cambiarpassword-admin.php"; ?>
            <?php include "modal-cambiarclaveconfir-admin.php"; ?>
            <?php include "modal-ver-horario.php"; ?>
        </div>
    </body>
</html>