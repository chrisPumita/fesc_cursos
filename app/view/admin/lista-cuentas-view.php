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
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Cuentas</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="font-weight-bold mb-0">Panel de Cuentas de Administradores</h2>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-lg-12">
                                    <div class="callout callout-second">
                                        <div class="contariner">
                                            <div class="row">
                                                <div class="col-lg-9">
                                                    <h4 class="font-weight-bold">Asignar un nuevo Administrador</h4>
                                                    En este apartado puede asignar los permisos necesarios para un nuevo administrador.
                                                </div>
                                                <div class="col-lg-3 text-align-right">
                                                    <button class="btn btn-primary w-100 aling-self-center mt-3 ml-5" data-toggle='modal' data-target='#modal1'>Nuevo</button>
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
                                            <p>Al asignar a un nuevo administrador, a este le llegará una notificación por correo electrónico.</p>
                                            <hr>
                                            <!--INICIA FORMULARIO-->
                                            <form class="user needs-validation" id="frm-add-admin" role="form" autocomplete="off" novalidate>
                                                <div class="form-group row">
                                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                                        <label class="col-form-label font-weight-bold">Número de Trabajador: </label>
                                                    </div>
                                                    <div class="col-sm-5 ml-0 mb-3 mb-sm-0">
                                                        <input type="text" class="form-control" placeholder="" aria-label="No_trabajador">
                                                    </div>
                                                    <div class="col-sm-3 mb-3 mb-sm-0 text-aling-right">
                                                        <button class="btn btn-primary btn-sm w-100">
                                                        <i class="ion-md-search lead"></i><span class="ml-2">Buscar</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                                        <label class="col-form-label font-weight-bold">Nombre:</label>  
                                                    </div>
                                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                                        <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre" disabled readonly> 
                                                    </div>
                                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                                        <input type="text" class="form-control" placeholder="Apellido Paterno" aria-label="A_Pat" disabled readonly> 
                                                    </div>
                                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                                        <input type="text" class="form-control" placeholder="Apellido Materno" aria-label="A_Mat" disabled readonly> 
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                                        <label class="col-form-label font-weight-bold">Correo Electrónico:</label>  
                                                    </div>
                                                    <div class="col-sm-8 mb-3 mb-sm-0">
                                                        <input type="text" class="form-control" placeholder="" aria-label="Email" disabled readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                                        <label class="col-form-label font-weight-bold">Departamento:</label>  
                                                    </div>
                                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                                        <input type="text" class="form-control" placeholder="" aria-label="Depto" disabled readonly>
                                                    </div>
                                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                                        <label class="col-form-label font-weight-bold">Fecha de Registro:</label>  
                                                    </div>
                                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                                        <input type="text" class="form-control" placeholder="" aria-label="Fe_Reg" disabled readonly>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="form-group row">
                                                    <div class="col-sm-2 mb-3 mb-sm-0">
                                                        <label class="col-form-label font-weight-bold">Cargo:</label>  
                                                    </div>
                                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                                        <input type="text" class="form-control" placeholder="" aria-label="Cargo">
                                                    </div>
                                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                                        <label class="col-form-label font-weight-bold">Nivel de Permisos:</label>  
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <select class="form-control" name="permisos"  id="niv_permisos">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-8"></div>
                                                    <div class="col-sm-4 text-align-right">
                                                        <button class="btn btn-primary w-100">Asignar</button>
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
                        <!--INICIA SECCION DE TABLA-->
                        <section class="container py-2 bg-grey">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card mt-2">
                                        <div class="card-body">
                                            <div class="mx-auto">
                                                <div class="row p-3">
                                                    <div class="col-lg-9">
                                                        <h5><strong>Listado de Administradores del Sistema</strong></h5>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 overflow-auto">
                                                        <table class="table table-striped bg-light table-hover">
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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