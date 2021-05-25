<!doctype html>
<html lang="en">
    <?php
        //Abrir para agregar los includes
        $tittle = "Cuentas";
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
                        <!--INICIA SECCIÓN DE ENCABEZADO DE DETALLES-->
                        <section class="container py-3 bg-grey">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="font-weight-bold mb-0">Panel de Cuentas de Administradores</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="callout callout-second">
                                        <div class="contariner">
                                            <div class="row align-items-center justify-content-center">
                                                <div class="col-lg-9">
                                                    <h4>Asignar un nuevo Administrador</h4>
                                                    En este apartado puede asignar los permisos necesarios para un nuevo administrador.
                                                </div>
                                                <div class="col-lg-3">
                                                    <button class="btn btn-primary w-100 m-3" data-toggle='modal' data-target='#modal1'>Nuevo</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--FINALIZA SECCIÓN DE ENCABEZADO DE DETALLES-->
                        <!--INICIA SECCION DEL MODAL DE ASIGNACIÓN A NUEVO ADMIN-->
                        <section class="container">
                            <div class="modal fade" id="modal1" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                            <h2>Asignación de un nuevo Administrador</h2>
                                            <p>Al asignar a un nuevo administrador, a este le llegará una notificación por correo electrónico con su clave de confirmación.</p>
                                            <hr>
                                            <!--INICIA FORMULARIO-->
                                            <form class="user needs-validation" id="frm-add-admin" role="form" autocomplete="off" novalidate>
                                                <div class="form-group row">
                                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                                        <label class="col-form-label font-weight-bold">Seleccione a un profesor: </label>
                                                    </div>
                                                    <div class="col-sm-8 mb-3 mb-sm-0">
                                                        <select class="form-control" name="profesor"  id="profesores">
                                                            <option value="1">Juan Pérez Sánchez</option>
                                                            <option value="2">Roberto Gomez Ramírez</option>
                                                            <option value="3">Maricela Lara Martínez</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="form-group row">
                                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                                        <label class="col-form-label font-weight-bold">Datos del profesor: </label>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                                        <label class="col-form-label">Número de Trabajador:</label>  
                                                    </div>
                                                    <div class="col-sm-8 mb-3 mb-sm-0">
                                                        <label class="col-form-label"></label> 
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                                        <label class="col-form-label">Correo Electrónico:</label>  
                                                    </div>
                                                    <div class="col-sm-8 mb-3 mb-sm-0">
                                                        <label class="col-form-label"></label> 
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                                        <label class="col-form-label">Departamento:</label>  
                                                    </div>
                                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                                        <label class="col-form-label"></label> 
                                                    </div>
                                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                                        <label class="col-form-label">Fecha de Registro:</label>  
                                                    </div>
                                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                                        <label class="col-form-label"></label> 
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="form-group row">
                                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                                        <label class="col-form-label font-weight-bold">Ingrese y seleccione los siguientes datos, al finalizar dé clic en el botón "Asignar":</label>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-2 mb-3 mb-sm-0">
                                                        <label class="col-form-label">Cargo:</label>  
                                                    </div>
                                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                                        <input type="text" class="form-control" placeholder="" aria-label="Cargo">
                                                    </div>
                                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                                        <label class="col-form-label">Nivel de Permisos:</label>  
                                                    </div>
                                                    <div class="col-sm-3  mb-3 mb-sm-0">
                                                        <select class="form-control" name="permisos"  id="niv_permisos">
                                                            <option value="1">Bajo</option>
                                                            <option value="2">Medio</option>
                                                            <option value="3">Alto</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-8"></div>
                                                    <div class="col-sm-4 text-align-right">
                                                        <a href="#modal2" class="btn btn-primary w-100" data-toggle='modal'>Asignar</a>
                                                    </div>
                                                </div>
                                            </form>
                                            <!--FINALIZA FORMULARIO-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--FINALIZA SECCIÓN DEL MODAL DE ASIGNACIÓN A NUEVO ADMIN-->
                        <!--INICIA SECCION DEL MODAL DE CLAVE DE VERIFICACIÓN-->
                        <section class="container">
                            <div class="modal" id="modal2" data-backdrop="static" data-keyboard="false" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content bg-grey">
                                        <div class="modal-header">
                                            <h6><strong>Escriba su clave de verificación para concluir con el procedimiento:</strong></h6>
                                        </div>
                                        <div class="modal-body">
                                            <!--INICIA FORMULARIO-->
                                            <form class="user needs-validation" id="frm-clave-verif" role="form" autocomplete="off" novalidate>
                                                <div class="form-group row">
                                                    <div class="col-sm-5 mb-3 mb-sm-0">
                                                        <label class="col-form-label">Clave de verificación:</label>
                                                    </div>
                                                    <div class="col-sm-7 mb-3 mb-sm-0">
                                                        <input type="text" class="form-control" placeholder="" aria-label="Clave_Verif">
                                                    </div>
                                                </div>
                                            </form>
                                            <!--FINALIZA FORMULARIO-->
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-danger btn-sm" type="button" data-dismiss="modal">Cancelar</button>
                                            <button class="btn btn-primary btn-sm" type="button">Aceptar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--FINALIZA SECCIÓN DEL MODAL DE CLAVE DE VERIFICACIÓN-->
                        <!--INICIA SECCION DE TABLA-->
                        <section class="container py-2 bg-grey">
                            <div class="row">
                                <div class="col-lg-12 py-3">
                                    <h3>Listado de Administradores del Sistema</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 overflow-auto">
                                    <table class="table table-striped bg-light">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">No. Trabajador</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Cargo</th>
                                                <th scope="col">Departamento</th>
                                                <th scope="col">Correo Electrónico</th>
                                                <th scope="col">Fecha de Registro</th>
                                                <th scope="col">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>213541849</td>
                                                <td>Claudia Cruz Sánchez</td>
                                                <td>Jefa del Departamento de Cómputo</td>
                                                <td>Cómputo</td>
                                                <td>ccs@gmail.com</td>
                                                <td>02-01-2021</td>
                                                <td>
                                                    <!-- BOTON ACCIONES -->
                                                    <div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Opciones
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                            <button class="dropdown-item" type="button">Ver Detalles</button>
                                                            <button class="dropdown-item" type="button">Inhabilitar</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>213879471</td>
                                                <td>Juan Martínez Valdez</td>
                                                <td>Docente</td>
                                                <td>Informática</td>
                                                <td>jmv@gmail.com</td>
                                                <td>12-02-2021</td>
                                                <td>
                                                    <!-- BOTON ACCIONES -->
                                                    <div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Opciones
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                            <button class="dropdown-item" type="button">Ver Detalles</button>
                                                            <button class="dropdown-item" type="button">Inhabilitar</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- INICIA PAGINADOR DE TABLA -->
                            <div class="row">
                                <div class="col-lg-12 my-2">
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
                            <!-- FINALIZA PAGINADOR DE TABLA -->
                        </section>
                        <!--FINALIZA SECCION DE TABLA-->
                    </div>
                    <!--FIN contenido dinamico-->
                    <?php include("./view/includes/footer.php");?>
                </div>
            </div>
        </div>
        <!-- script_js -->
    </body>
</html>