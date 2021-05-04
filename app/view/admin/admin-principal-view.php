<!--INICIA ENCABEZADO DETALLES USUARIO BIENVENIDA-->
<section class="container py-3 bg-grey">
    <div class="row">
        <div class="col-lg-9">
            <h2 class="font-weight-bold mb-0">Panel de Administración</h2>
        </div>
        <div class="col-lg-3">
            <button class="btn btn-primary w-100 aling-self-center">
                <i class="icon ion-md-cloud-upload mr-2 lead"></i>Ver Cursos
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="callout callout-second">
                <h4>Bienvenido Nombre Admin</h4>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus voluptatum illum odio quos laudantium enim ratione cupiditate accusantium officia quisquam, similique fuga ipsa consequatur? Sequi, consequuntur unde! Enim, dolor deserunt!
            </div>
        </div>
    </div>
</section> 
<!-- FIN ENCABEZADO DETALLES USUARIO BIENVENIDA -->

<!--INICIA ESTADISTICAS-->
<section class="container bg-grey">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3 col-md-6 d-flex stat my-3">
                        <div class="mx-auto">
                            <i class="icon ion-md-rocket mr-1 position-absolute paleta"></i>
                            <h6 class="text-muted"></i><STrong>Cursos</STrong></h6>
                            <h3 class="font-weight-bold">50</h3>
                            <h6 class="text-success">Cursos activos</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex stat my-3">
                        <div class="mx-auto">
                            <i class="icon ion-md-checkmark mr-1 position-absolute paleta"></i>
                            <h6 class="text-muted"><strong>Constancias</strong></h6>
                            <h3 class="font-weight-bold">150</h3>
                            <h6 class="text-warning">Por revisar y acreditar</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex stat my-3">
                        <div class="mx-auto">
                            <i class="icon ion-md-stats mr-1 position-absolute paleta"></i>
                            <h6 class="text-muted"><strong>Inscripciones</strong></h6>
                            <h3 class="font-weight-bold">70</h3>
                            <h6 class="text-warning">Pendientes de revisión</h6>
                        </div>
                    </div>
                    <!-- PAGINADOR DE TABLA -->
                    <div class="col-lg-3 col-md-6 d-flex my-3">
                        <div class="mx-auto">
                            <i class="icon ion-md-contacts mr-1 position-absolute paleta"></i>
                            <h6 class="text-muted"><strong>Alumnos</strong></h6>
                            <h3 class="font-weight-bold">700</h3>
                            <h6 class="text-success">Registrados en el sistema</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- FIN SECCION  ESTADISTICAS-->

<!--INICIA SECCION CURSOS ACTUALES-->
    <section class="container bg-grey">
            <div class="row">
                <div class="col-lg-12 py-3">
                    <h3>Grupos actuales</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 overflow-auto">
                    <table class="table table-striped bg-light">
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
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>5110</td>
                            <td>Curso Diseño UIX</td>
                            <td>Juan Perez Sanchez</td>
                            <td>5/30</td>
                            <td>29 de Junio del 2021</td>
                            <td>Online</td>
                            <td>23 solicitudes pendientes</td>
                            <td> <!-- BOTON ACCIONES -->
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Opciones
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <button class="dropdown-item" type="button">Ver Horario</button>
                                        <button class="dropdown-item" type="button">Editar grupo</button>
                                        <button class="dropdown-item" type="button">Ver solicitudes</button>
                                        <button class="dropdown-item" type="button">Terminar grupo</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>2603</td>
                            <td>Curso Excel Avanzado con Macros</td>
                            <td>Alejandro Navarrete Perez</td>
                            <td>20/20</td>
                            <td>27 de Noviembre del 2021</td>
                            <td>Online</td>
                            <td>Grupo lleno</td>
                            <td> <!-- BOTON ACCIONES -->
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Opciones
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <button class="dropdown-item" type="button">Ver Horario</button>
                                        <button class="dropdown-item" type="button">Editar grupo</button>
                                        <button class="dropdown-item" type="button">Ver solicitudes</button>
                                        <button class="dropdown-item" type="button">Terminar grupo</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>2603</td>
                            <td>Iniciación al cómputo I</td>
                            <td>Ana Gabriela Guevara Espinoza</td>
                            <td>26/30</td>
                            <td>11 de Julio del 2021</td>
                            <td>Online</td>
                            <td>Sin solicitudes pendientes</td>
                            <!-- BOTON ACCIONES -->
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Opciones
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <button class="dropdown-item" type="button">Ver Horario</button>
                                        <button class="dropdown-item" type="button">Editar grupo</button>
                                        <button class="dropdown-item" type="button">Ver solicitudes</button>
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

<!--SECCION CURSOS REGISTRADOS ACTIVOS-->
    <section class="container bg-grey">
            <div class="row">
                <div class="col-lg-12 py-3">
                    <h3>Cursos Registrados activos</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 overflow-auto">
                    <table class="table table-striped bg-light">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Clave</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Autor</th>
                            <th scope="col">Sesiones</th>
                            <th scope="col">Cupo</th>
                            <th scope="col">Modalidad</th>
                            <th scope="col">Costo</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>28054</td>
                            <td>Iniciacion al computo II</td>
                            <td>alberto Suarez Mendiola</td>
                            <td>15</td>
                            <td>25</td>
                            <td>Presencial</td>
                            <td>$1350</td>
                            <td>Sin revisar</td>
                            <!-- BOTON ACCIONES -->
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Opciones
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <button class="dropdown-item" type="button">Nuevo grupo</button>
                                        <button class="dropdown-item" type="button">Ver detalles</button>
                                        <button class="dropdown-item" type="button">Historial</button>
                                        <button class="dropdown-item" type="button">Acreditar curso</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                            <td>27521</td>
                            <td>Introducción a Figma</td>
                            <td>Adriana Pascual Benitez</td>
                            <td>30</td>
                            <td>20</td>
                            <td>A distancia</td>
                            <td>$2500</td>
                            <td>Sin revisar</td>
                            <!-- BOTON ACCIONES -->
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Opciones
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <button class="dropdown-item" type="button">Nuevo grupo</button>
                                        <button class="dropdown-item" type="button">Ver detalles</button>
                                        <button class="dropdown-item" type="button">Historial</button>
                                        <button class="dropdown-item" type="button">Acreditar curso</button>
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
<!-- FIN SECCION CURSOS REGISTRADOS ACTIVOS -->

<!-- INICIA SECCION DOCS PENDIENTES DE REVISION -->
<section class="container bg-grey">
            <div class="row">
                <div class="col-lg-12 py-3">
                    <h3>Documentos pendientes de revisión</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 overflow-auto">
                    <table class="table table-striped bg-light">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Documento</th>
                            <th scope="col">Alumno</th>
                            <th scope="col">Inscripción</th>
                            <th scope="col">Grupo</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Ficha de inscripción</td>
                            <td>Jennifer Morales Rosas</td>
                            <td>158769</td>
                            <td>2601</td>
                            <td>Pendiente</td>
                            <!-- BOTON ACCIONES -->
                            <td> 
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Opciones
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <button class="dropdown-item" type="button">Ver documento</button>
                                        <button class="dropdown-item" type="button">Rechazar</button>
                                        <button class="dropdown-item" type="button">Aceptar</button>
                                        <button class="dropdown-item" type="button">Detalles Inscripción</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Copia de credencial</td>
                            <td>Jennifer Morales Rosas</td>
                            <td>158769</td>
                            <td>2601</td>
                            <td>Pendiente</td>
                            <!-- BOTON ACCIONES -->
                            <td> 
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Opciones
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <button class="dropdown-item" type="button">Ver documento</button>
                                        <button class="dropdown-item" type="button">Rechazar</button>
                                        <button class="dropdown-item" type="button">Aceptar</button>
                                        <button class="dropdown-item" type="button">Detalles Inscripción</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Baucher de pago</td>
                            <td>Jennifer Morales Rosas</td>
                            <td>158769</td>
                            <td>2601</td>
                            <td>Pendiente</td>
                            <!-- BOTON ACCIONES -->
                            <td> 
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Opciones
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <button class="dropdown-item" type="button">Ver documento</button>
                                        <button class="dropdown-item" type="button">Rechazar</button>
                                        <button class="dropdown-item" type="button">Aceptar</button>
                                        <button class="dropdown-item" type="button">Detalles Inscripción</button>
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
<!-- FIN SECCION DOC PENDIENTES DE REVISION -->

<!-- SECCION DE ACCESOS RAPIDOS -->
<section class="container bg-grey">
        <div class="row">
            <div class="col-lg-12 py-3">
                <h3>Accesos Rápidos</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 my-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Profesores</h5>
                        <p class="card-text text-muted">En este apartado se pueden realizar distintas acciones de gestion para las cuentas de profesores.</p>
                        <button type="button" class="btn btn-primary btn-sm">Crear cuenta</button>
                        <button type="button" class="btn btn-primary btn-sm">Gestión de cuentas</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 my-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Cuentas Administrativas</h5>
                        <p class="card-text text-muted">Crear nueva cuenta administrativa para entrar al sistema de Administración.</p>
                        <button type="button" class="btn btn-primary btn-sm">Ir</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 my-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Servicio Social</h5>
                        <p class="card-text text-muted">Cree o gestiones cuentas de alumno de servicio social.</p>
                        <button type="button" class="btn btn-primary btn-sm">Crear cuenta</button>
                        <button type="button" class="btn btn-primary btn-sm">Ver Alumnos</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 my-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Alumnos</h5>
                        <p class="card-text text-muted">Buscar alumno para ver su situacion actual dentro del sistema de inscripción de cursos. Ingresar numero de cuenta registrado por el alumno.</p>
                        <form class="form-inline position-relative my-2 d-inline-block w-100">
                            <input class="form-control mr-sm-2" type="search" placeholder="Buscar curso" aria-label="Search">
                            <button class="btn btn-search position-relative posicion-btn" type="submit"><i class="icon ion-md-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- FIN DE SECCION ACCESOS RAPIDOS -->

<section class="container bg-grey">
        <div class="row">
            <div class="col-lg-8 my-3">
                <div class="card text-left">
                    <!-- INICIO PRESENTACION IMAGENES SLIDER -->
                    <div class="card-body">
                        <h4 class="card-title">Cursos Recientes</h4>
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://www.diwebacademy.com/wp-content/uploads/2020/05/curso-online-de-excel-principiante-a-avanzado-diweb-academy.png" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Excel Básico para contadores</h5>
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="https://i.ytimg.com/vi/a44MbhzNhOY/maxresdefault.jpg"  class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Principios basicos de MVC</h5>
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="https://kmmx.mx/wp-content/uploads/2020/04/Curso-de-Prototipado-y-UX-UI-Design-con-Adobe-XD.png"  alt="..." class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Introduccion a Adobe XD</h5>
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Anterior</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Siguiente</span>
                            </a>
                        </div>
                    </div> 
                    <!-- FIN PRESENTACION IMAGENES SLIDER -->
                </div>
            </div>
            <!-- INICIO SECCION PAGOS RECIENTES -->
            <div class="col-lg-4 my-3">
                <div class="card rounded-0">
                    <div class="card-header bg-ligth">
                        <h6 class="font-weight-bold mb-0">Pagos recientes</h6>
                    </div>

                    <div class="card-body py-2">
                        <!--Pagos-->
                        <div class="d-flex border-bottom py-2">
                            <div class="d-flex mr-3">
                                <h2 class="align-self-center mb-0"><i class="icon ion-md-pricetag"></i></h2>
                            </div>
                            <div class="align-self-center">
                                <h6 class="d-inline-block mb-0">Inscripcion No 4564</h6>
                                <span class="badge badge-success ml-2">$250</span>
                                <small class="d-block text-muted">22-06-2021 6:50 PM.</small>
                            </div>
                        </div>
                        <!--Pagos-->
                        <!--Pagos-->
                        <div class="d-flex border-bottom py-2">
                            <div class="d-flex mr-3">
                                <h2 class="align-self-center mb-0"><i class="icon ion-md-pricetag"></i></h2>
                            </div>
                            <div class="align-self-center">
                                <h6 class="d-inline-block mb-0">Credito No 4584</h6>
                                <span class="badge badge-success ml-2">$480</span>
                                <small class="d-block text-muted">22-06-2021 6:50 PM.</small>
                            </div>
                        </div>
                        <!--Pagos-->
                        <button class="btn btn-primary w-100">
                            Ver todos
                        </button >
                    </div>
                </div>
            </div>
            <!-- FIN SECCION PAGOS RECIENTES  -->
        </div>
</section>