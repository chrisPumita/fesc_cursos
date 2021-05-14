<!--INICIA ENCABEZADO DE DETALLES-->
<section class="container py-3 bg-grey">
    <div class="row">
        <div class="col-lg-9">
            <h2 class="font-weight-bold mb-0">PANEL DE PROFESORES</h2>
        </div>
        <div class="col-lg-3">
            <button class="btn btn-primary w-100 aling-self-center" data-toggle='modal' data-target='#modal1'>Nuevo</button>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="callout callout-second">
                <h4>Crear una nueva cuenta de profesor</h4>
                En este apartado puede crear cuentas de profesores y/o autorizar las cuentas generadas a partir del formulario.
                <br>Revise la información y asegurese de verificar bien los datos de las solicitudes.</br>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container py-3 bg-grey col-lg-12">
            <h3 class="font-weight-bold mb-0">ENVIAR SOLICITUD DE INSCRIPCIÓN</h3>
        </div>
    </div>
    <br><div class="container bg-white"></br>
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-1">
                <i class="icon ion-md-mail paleta"></i>
            </div>
            <div class="col-lg-5">
                <h4>Envíar invitación de registro</h4>
                    <p>Envíe la invitación al profesor, para que éste pueda registrarse en el sistema.</p>
            </div>
            <div class="col-lg-4">
                <h4>Correo electrónico del profesor</h4>
                    <p><input type="text" class="form-control" placeholder="ejemplo@dominio.com" aria-label="Correo"></p>
            </div>
            <div class="col-lg-2">
               <button class="btn btn-primary w-100 aling-self-center">Envíar</button>
            </div>
        </div>
    </div>
</section>
<!-- FIN ENCABEZADO DE DETALLES-->

<!--INICIA SECCION DEL MODAL 1: CREACIÓN DE CUENTA DE PROFESOR-->
<div class="container">
    <div class="modal" tabindex="-1" id="modal1">
        <div class="modal-dialog">
            <div class="modal-content">
                    <section class="container bg-grey">
                        <div class= "modal-header">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-11"></div>
                                    <div class="col-1">
                                        <button class="btn btn-danger" data-dismiss='modal'>&times;</button>
                                    </div> 
                                </div>    
                            </div>    
                        </div>
                        <div class="container py-2 bg-white">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3 class="font-weight-bold mb-0">Crear cuenta de profesor</h3>
                                    <p>Al crear una cuenta, le llegará una notificación por correo electrónico al profesor.</p>
                                </div>
                            </div>
                            <div class="row g-3 align-items-center">
                                <div class="col-3 py-2">
                                    <select class="form-control" id="abreviatura">
                                        <option>Lic.</option>
                                        <option>Mto.</option>
                                        <option>Dr.</option>
                                    </select>
                                </div>
                                <div class="col-lg-9 py-2">
                                    <input type="text" class="form-control" placeholder="Nombre(s)" aria-label="Nombres">
                                </div> 
                            </div>
                            <div class="row g-3 align-items-center">
                                <div class="col-lg-6 py-2">
                                    <input type="text" class="form-control" placeholder="Apellido Paterno" aria-label="Primer Apellido">
                                </div>
                                <div class="col-lg-6 py-2">
                                    <input type="text" class="form-control" placeholder="Apellido Materno" aria-label="Segundo Apellido">
                                </div>
                            </div>
                            <div class="row g-3 align-items-center">
                                <div class="col-lg-12 py-2">
                                    <input type="text" class="form-control" placeholder="Número de Trabajador" aria-label="No. Trabajador">
                                </div>
                            </div>
                            <div class="row g-3 align-items-center">
                                <div class="col-lg-12 py-2">
                                    <input type="text" class="form-control" placeholder="Teléfono" aria-label="Telefono">
                                </div>
                            </div>
                            <div class="row g-3 align-items-center">
                                <div class="col-lg-12 py-2">
                                    <input type="text" class="form-control" placeholder="Correo Electrónico" aria-label="Correo">
                                </div>
                            </div>
                            <div class="row g-3 align-items-center">
                                <div class="col-12 py-2">
                                    <select class="form-control" id="depto">
                                        <option>Informática</option>
                                        <option>Matemáticas</option>
                                        <option>Cómputo</option>
                                    </select>
                                </div> 
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 aling-self-center">Crear Cuenta</button>
                                </div>
                            </div>
                        </div>
                        <div class= "modal-footer">
                            <div class="container bg-grey">  
                            </div>    
                        </div>
                    </section>
            </div>
        </div>
    </div>
</div>
<!--FIN SECCION DEL MODAL 1: CREACIÓN DE CUENTA DE PROFESOR-->

<!--INICIA SECCION DE HISTORIAL DE CURSOS EN EL SISTEMA-->
<section class="container py-3 bg-grey">
    <div class="row">
            <div class="col-lg-12 py-3">
                <h3>Listado de profesores registrados en el sistema</h3>
            </div>
        </div>
    <div class="row">
        <div class="col-lg-12 overflow-auto">
            <table class="table table-striped bg-light">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">No.</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Departamento</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Email</th>
                        <th scope="col">Registro</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>123</td>
                        <td>Juan Pérez Sánchez</td>
                        <td>Informática</td>
                        <td>5563258917</td>
                        <td>juan@gmail.com</td>
                        <td>--------</td>
                        <td>  <!-- BOTON ACCIONES -->
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Opciones
                                </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <a href="./admin-detcursos-view.php">
                                            <button class="dropdown-item" type="button">Ver Asignaciones</button>
                                        </a>                                        
                                            <button class="dropdown-item" type="button">Reestablecer contraseña</button>
                                        <a href="./admin-profesorperfil-view.php">
                                            <button class="dropdown-item" type="button">Editar</button>
                                        </a>
                                            <button class="dropdown-item" type="button">Inhabilitar</button>
                                    </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>456</td>
                        <td>Roberto Gomez Ramírez</td>
                        <td>Matemáticas</td>
                        <td>5589367405</td>
                        <td>roberto@gmail.com</td>
                        <td>--------</td>
                    <!-- BOTON ACCIONES -->
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Opciones
                                </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <a href="./admin-detcursos-view.php">
                                        <button class="dropdown-item" type="button">Ver Asignaciones</button>
                                        </a>                                        
                                        <button class="dropdown-item" type="button">Reestablecer contraseña</button>
                                        <button class="dropdown-item" type="button" data-toggle='modal' data-target='#modal2'>Editar</button>
                                        <button class="dropdown-item" type="button">Inhabilitar</button>
                                    </div>
                            </div>   
                        </td>  
                       </tr>   
                </tbody>
            </table>
            </div>
            </div>

<!--INICIA SECCION DEL MODAL 2: EDITAR CUENTA DE PROFESOR-->
<div class="container">
    <div class="modal" tabindex="-1" id="modal2">
        <div class="modal-dialog">
            <div class="modal-content">
                    <section class="container bg-grey">
                        <div class= "modal-header">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-11"></div>
                                    <div class="col-1">
                                        <button class="btn btn-danger" data-dismiss='modal'>&times;</button>
                                    </div> 
                                </div>    
                            </div>    
                        </div>
                        <div class="container py-2 bg-white">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3 class="font-weight-bold mb-0">Editar cuenta de profesor</h3>
                                    <p>Modique los datos del profesor.</p>
                                </div>
                            </div>
                            <div class="row g-3 align-items-center">
                                <div class="col-3 py-2">
                                    <select class="form-control" id="abreviatura">
                                        <option>Lic.</option>
                                        <option>Mto.</option>
                                        <option>Dr.</option>
                                    </select>
                                </div>
                                <div class="col-lg-9 py-2">
                                    <input type="text" class="form-control" placeholder="Nombre(s)" aria-label="Nombres">
                                </div> 
                            </div>
                            <div class="row g-3 align-items-center">
                                <div class="col-lg-6 py-2">
                                    <input type="text" class="form-control" placeholder="Apellido Paterno" aria-label="Primer Apellido">
                                </div>
                                <div class="col-lg-6 py-2">
                                    <input type="text" class="form-control" placeholder="Apellido Materno" aria-label="Segundo Apellido">
                                </div>
                            </div>
                            <div class="row g-3 align-items-center">
                                <div class="col-lg-12 py-2">
                                    <input type="text" class="form-control" placeholder="Número de Trabajador" aria-label="No. Trabajador">
                                </div>
                            </div>
                            <div class="row g-3 align-items-center">
                                <div class="col-lg-12 py-2">
                                    <input type="text" class="form-control" placeholder="Teléfono" aria-label="Telefono">
                                </div>
                            </div>
                            <div class="row g-3 align-items-center">
                                <div class="col-lg-12 py-2">
                                    <input type="text" class="form-control" placeholder="Correo Electrónico" aria-label="Correo">
                                </div>
                            </div>
                            <div class="row g-3 align-items-center">
                                <div class="col-12 py-2">
                                    <select class="form-control" id="depto">
                                        <option>Informática</option>
                                        <option>Matemáticas</option>
                                        <option>Cómputo</option>
                                    </select>
                                </div> 
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 aling-self-center">Actualizar Datos</button>
                                </div>
                            </div>
                        </div>
                        <div class= "modal-footer">
                            <div class="container bg-grey">  
                            </div>    
                        </div>
                    </section>
            </div>
        </div>
    </div>
</div>
<!--FIN SECCION DEL MODAL 2: EDITAR CUENTA DEL PROFESOR-->

            <!-- PAGINADOR DE TABLA -->
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
    
</section>
<!-- FIN SECCION CURSOS ACTUALES -->