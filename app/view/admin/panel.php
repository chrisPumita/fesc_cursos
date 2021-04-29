<!--Encabezado User Name details-->
<section class="container py-3 bg-grey">
    <div class="row">
        <div class="col-lg-9">
            <h2 class="font-weight-bold mb-0">Bienvenido Jennifer </h2>
            <p class="lead text-muted">PUESTO estamos listos para comenzar <br>ID Empleado: ID PROFESOR</p>
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
                <h4>Bienvenido Administrador </h4>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus voluptatum illum odio quos laudantium enim ratione cupiditate accusantium officia quisquam, similique fuga ipsa consequatur? Sequi, consequuntur unde! Enim, dolor deserunt!
            </div>
        </div>
    </div>
</section>
<!--INICIA TABLA DE GRUPOS ACTUAL-->
<section class="bg-grey">
    <div class="container">
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
    </div>
</section>
<!--INICIA SECCION CURSOS REGISTRADOS ACTIVOS-->
    <section class="bg-grey">
        <div class="container">
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
                        <tr>
                            <th scope="row">2</th>
                            <td>2603</td>
                            <td>Curso Excel Avanzado con Macros</td>
                            <td>Alejandro Navarrete Perez</td>
                            <td>20/20</td>
                            <td>27 de Noviembre del 2021</td>
                            <td>Online</td>
                            <td>Grupo lleno</td>
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
        </div>
    </section>

    <!--SECCION DOCUMENTOS POR REVISAR-->
    <section class="bg-grey">
    <div class="container">
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
                    <tr>
                        <th scope="row">2</th>
                        <td>2603</td>
                        <td>Curso Excel Avanzado con Macros</td>
                        <td>Alejandro Navarrete Perez</td>
                        <td>20/20</td>
                        <td>27 de Noviembre del 2021</td>
                        <td>Online</td>
                        <td>Grupo lleno</td>
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
    </div>
</section>


<!--ACCESOS RAPIDOS-->


<section class="bg-grey">
    <div class="container">
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
                    <tr>
                        <th scope="row">2</th>
                        <td>2603</td>
                        <td>Curso Excel Avanzado con Macros</td>
                        <td>Alejandro Navarrete Perez</td>
                        <td>20/20</td>
                        <td>27 de Noviembre del 2021</td>
                        <td>Online</td>
                        <td>Grupo lleno</td>
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
    </div>
</section>
<section class="bg-grey">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 my-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Vehiculos</h5>
                        <p class="card-text text-muted">¿Que desea hacer con el vehículo?</p>
                        <button type="button" class="btn btn-primary btn-sm">Vender</button>
                        <button type="button" class="btn btn-primary btn-sm">Registrar</button>
                        <button type="button" class="btn btn-primary btn-sm">Ver todos</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 my-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Archivos</h5>
                        <p class="card-text text-muted">Busque archivos especificos, o agregre nuevos</p>
                        <button type="button" class="btn btn-primary btn-sm">Gestionar</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 my-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Abono</h5>
                        <p class="card-text text-muted">Registre el abono de un pago de credito</p>
                        <button type="button" class="btn btn-primary btn-sm">Registrar</button>
                        <button type="button" class="btn btn-primary btn-sm">Reportes</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 my-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Clientes</h5>
                        <p class="card-text text-muted">Administrar los clientes actuales</p>
                        <button type="button" class="btn btn-primary btn-sm">Registrar</button>
                        <button type="button" class="btn btn-primary btn-sm">Ver todos</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-grey">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 my-3">
                <div class="card text-left">
                    <div class="card-body">
                        <h4 class="card-title">Recientemente</h4>
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://periodicoabcrm.blob.core.windows.net.optimalcdn.com/images/2020/09/18/5299733_1-focus-0-0-940-615.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Second slide label</h5>
                                        <p>Some representative placeholder content for the second slide.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="https://elsolsaleparatodos.com.mx/wp-content/uploads/2020/08/untitleddesign_1_original-14-3-850x560.jpg"  class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Second slide label</h5>
                                        <p>Some representative placeholder content for the second slide.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="https://www.hogarmania.com/archivos/201902/cobayas-caracteristicas-668x400x80xX.jpg"  alt="..." class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Second slide label</h5>
                                        <p>Some representative placeholder content for the second slide.</p>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
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
                                <h6 class="d-inline-block mb-0">Credito No 4564</h6>
                                <span class="badge badge-success ml-2">$25,000</span>
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
                                <h6 class="d-inline-block mb-0">Credito No 4564</h6>
                                <span class="badge badge-success ml-2">$25,000</span>
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
        </div>
    </div>
</section>