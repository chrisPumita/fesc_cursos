<!DOCTYPE html>
<html lang="en">
    <?php
        //Abrir para agregar los includes
        $tittle = "Ficha de Inscripción";
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
                        <!--INICIA SECCION DE NEVEGACIÓN-->
                        <section class="container py-2 bg-grey">
                            <div class="row">
                                <div class="col-lg-12">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                            <li class="breadcrumb-item"><a href="#">Cursos</a></li>
                                            <li class="breadcrumb-item"><a href="#">Grupo</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Alumno</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </section>
                        <!--FINALIZA SECCION DE NAVEGACIÓN-->
                        <!--INICIA SECCION DEL BANNER-->
                        <section>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-12 text-center">
                                        <div class="img" style="background-image: url(https://www.gruponestoro.com/wp-content/uploads/2019/01/Dise%C3%B1o-Banner-Nestoro-CURSOS-Enero-2019.png); ">
                                            <div class="overlay"></div>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <div class="mx-auto">
                                                            <h4 class="text-light text-left"><strong>Juan Álvarez Romo</strong><a href="./detalles-alumno"><img src="./assets/img/icons/edit3.svg" class="mr-2 mb-1" width="40px"></a></h4>
                                                            <h5 class="text-secondary text-left">Inscripción realizada el 22 de Febrero de 2021</h5>
                                                            <h5 class="text-secondary text-left">Concluida el 22 de Agosto de 2021</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="card-body">
                                                        <div class="mx-auto">
                                                            <h5 class="text-light text-left"><strong>Inscripción:</strong></h5>
                                                            <h4 class="text-success text-left"><strong>ACREDITADO</strong></h4>
                                                            <h6 class="text-success text-left">Inscripción acreditada</h6>
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
                        <!--INICIA SECCION DE DATOS E INFORMACIÓN PERSONAL DEL ALUMNO-->
                        <section class="container py-3 bg-grey">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="container py-2">
                                        <h5 class="mb-2"><strong>Datos Personales</strong></h5>
                                        <p class="mb-0">Nombre: <span class="font-weight-bold">Juan Álvarez Romo</span></p>
                                        <p class="mb-0">Teléfono: <span class="font-weight-bold">5528794510</span></p>
                                        <p class="mb-0">Correo eletrónico: <span class="font-weight-bold">juan@gmail.com</span></p>
                                        <p class="mb-0">Localidad: <span class="font-weight-bold">Cuautitlán Izcalli, México</span></p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="container py-2">
                                        <h5 class="mb-2"><strong>Información Académica</strong></h5>
                                        <p class="mb-0">Procedencia: <span class="font-weight-bold">Alumno FESC</span></p>
                                        <p class="mb-0">Universidad Nacional Autónoma de México (UNAM)</p>
                                        <p class="mb-0">Matrícula: <span class="font-weight-bold">215891463</span></p>
                                        <p class="mb-0">Carrera: <span class="font-weight-bold">Informática</span></p>
                                        <p class="mb-0">Fecha de registro: <span class="font-weight-bold">22 de Junio de 2019</span></p>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--FINALIZA SECCION DE DATOS E INFORMACIÓN PERSONAL DEL ALUMNO-->
                        <!--INICIA SECCION DEL CALLOUT DE LA INSCRIPCIÓN-->
                        <section class="container py-2 bg-grey">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="callout callout-second">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="media">
                                                        <div class="media-left media-middle">
                                                            <img src="./assets/img/icons/ok2.svg" class="mr-5 mt-2" width=80px alt="">
                                                        </div>
                                                        <div class="media-body">
                                                            <h6><strong>Inscripción:</strong></h6>
                                                            <p class="mb-0">Aprobado por: <span class="font-weight-bold">Esteban Ramírez Alcántara</span></p>
                                                            <p class="mb-3 font-weight-bold">Jefe del Departamento de Cómputo</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="media">
                                                        <div class="media-left media-middle">
                                                            <img src="./assets/img/icons/calendar2.svg" class="mr-5 mt-2" width=80px alt="">
                                                        </div>
                                                        <div class="media-body">
                                                            <h6><strong>Fecha:</strong></h6>
                                                            <p class="mb-0">Aprobado el día</p>
                                                            <p class="mb-0 font-weight-bold">15 de Febrero de 2021</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--FINALIZA SECCION DEL CALLOUT DE LA INSCRIPCIÓN--->
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
                                                            <p class="mt-2">Inicio: 22 de Febrero de 2021</p>
                                                        </div>
                                                    </div>
                                                    <div class="media mb-3">
                                                        <div class="media-left media-middle">
                                                            <img src="./assets/img/icons/cross-calendar1.svg" class="mr-2 mt-0" width=40px alt="">
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="mt-2">Fin: 22 de Agosto de 2021</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="container">
                                                        <div class="spinner-grow bg-dark" role="status" style="width: 2rem; height: 2rem"></div>
                                                        <span class="ml-3 mb-3 font-weight-bold">Servicio Terminado</span>
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
                        <!--INICIA SECCION DE DETALLES DEL CURSO INSCRITO-->
                        <section class="container py-2 bg-grey">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h5 class="mb-2 ml-2"><strong>Detalles del curso al que está inscrito:</strong></h5>
                                    <div class="container py-2">
                                        <p class="mb-0">Grupo: 2210<span class="font-weight-bold"> Páginas Web</span></p>
                                        <p class="mb-0">Profesor: <span class="font-weight-bold">Juan Pérez Sánchez</span></p>
                                        <p class="mb-0">Departamento de Cómputo</p>
                                        <p class="mb-0">Generación: <span class="font-weight-bold">5°</span></p>
                                        <p class="mb-0">Modalidad: <span class="font-weight-bold">Mixto</span></p>
                                        <p class="mb-0">Semestre: <span class="font-weight-bold">2021-II</span></p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="container py-2">
                                        <h6 class="mb-2 mt-3"><strong>Información del costo:</strong></h6>
                                        <p class="mb-0">Costo: <span class="font-weight-bold">$950.00</span> pesos</p>
                                        <p class="mb-0"><i>*Descuento Aplicado: <span class="font-weight-bold">$500.00</span></i></p>
                                        <p class="mb-0">Total: <span class="font-weight-bold">$450</span> pesos</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-6">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <img src="./assets/img/icons/cross-calendar3.svg" class="mr-2 ml-2" width="70px" alt="">
                                        </div>
                                        <div class="media-body">
                                            <p class="mb-0 mt-2">Este curso iniciará el día: <span class="font-weight-bold">15 de Junio de 2021</span></p>
                                            <p class="mb-3">Y finalizará el día: <span class="font-weight-bold">15 de Agosto de 2021</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <img src="./assets/img/icons/timer3.svg" class="mr-2 ml-2" width="70px" alt="">
                                        </div>
                                        <div class="media-body">
                                            <p class="mb-0 mt-2">Límite de Inscripciones</p>
                                            <p class="mb-3 font-weight-bold">15 de Julio de 2021</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--FINALIZA SECCION DE DETALLES DEL CURSO INSCRITO-->
                        <!--INICIA SECCION DE TARJETAS-->
                        <section class="container py-2 bg-grey">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="card mt-3">
                                        <div class="card-body">
                                            <div class="mx-auto">
                                                <h6></i><strong>Pago del curso</strong></h6>
                                                <div class="spinner-grow bg-dark mr-1" role="status" style="width: 2rem; height: 2rem"></div>
                                                <span class="ml-1 mb-3 align-self-center">Inscripción Acreditada</span>
                                                <div class="mt-2">
                                                    <select class="form-control" id="status-pago">
                                                        <option>Acreditado</option>
                                                        <option>Verificado y Rechazado</option>
                                                        <option>Pendiente</option>
                                                    </select>
                                                </div>
                                                <button class="btn btn-primary w-100 align-self-center mt-2">Aplicar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card mt-3">
                                        <div class="card-body">
                                            <div class="mx-auto">
                                                <h6></i><strong>Estado de la Inscripción</strong></h6>
                                                <div class="spinner-grow bg-dark mr-1" role="status" style="width: 2rem; height: 2rem"></div>
                                                <span class="ml-1 mb-3 align-self-center">Inscripción Activa</span>
                                                <div class="mt-2">
                                                    <select class="form-control" id="status-inscripcion">
                                                        <option>Activa</option>
                                                        <option>Sin verificar</option>
                                                        <option>Pendiente</option>
                                                    </select>
                                                </div>
                                                <button class="btn btn-primary w-100 align-self-center mt-2">Modificar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card mt-3">
                                        <div class="card-body">
                                            <div class="mx-auto">
                                                <h6></i><strong>Calificación</strong></h6>
                                                <p class="mb-3 align-self-center">Asignar calificación del curso:</p>
                                                <div class="mt-2">
                                                    <select class="form-control" id="calificacion">
                                                        <option value="10">10</option>
                                                        <option value="9">9</option>
                                                        <option value="8">8</option>
                                                        <option value="7">7</option>
                                                        <option value="6">6</option>
                                                        <option value="5">5</option>
                                                        <option value="np">N/P</option>
                                                    </select>
                                                </div>
                                                <button class="btn btn-primary w-100 align-self-center mt-2 mb-1">Calificar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card mt-3">
                                        <div class="card-body">
                                            <div class="mx-auto">
                                                <h6></i><strong>Constancia</strong></h6>
                                                <p class="mb-3 align-self-center">Aún no se ha generado la constancia</p>
                                                <button class="btn btn-primary w-100 align-self-center mb-2 mt-3">Generar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--FINALIZA SECCION DE TARJETAS-->
                        <!--INICIA SECCION DE REVISIÓN DE DOCUMENTOS-->
                        <section class="container py-2 bg-grey">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card mt-3">
                                        <div class="card-body">
                                            <div class="mx-auto">
                                                <div class="row p-3">
                                                    <div class="col-lg-9">
                                                        <h3>Revisión de Documentos</h3>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <select class="form-control" id="sel1">
                                                                <option value="0">Todos</option>
                                                                <option value="1">Aprobados</option>
                                                                <option value="2">Incorrectos</option>
                                                                <option value="3">Caducados</option>
                                                                <option value="4">Rechazados</option>
                                                                <option value="5">Falsos</option>
                                                                <option value="6">Eliminados</option>
                                                            </select>
                                                                <!--<option>Enviado para Verificar</option>
                                                                <option>Verificado y Aprobado</option>
                                                                <option>Revisado y en Espera</option>
                                                                <option>Revisado y Rechazado</option>
                                                                <option>Incorrecto</option>
                                                                <option>Falso</option>
                                                                <option>Eliminado</option>-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 overflow-auto">
                                                        <table class="table table-striped bg-light table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Revisión</th>
                                                                    <th scope="col">Nombre</th>
                                                                    <th scope="col">Subido el día</th>
                                                                    <th scope="col">Estado</th>
                                                                    <th scope="col">Tipo de documento</th>
                                                                    <th scope="col">Notas</th>
                                                                    <th scope="col">Acciones</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">1</th>
                                                                    <td>
                                                                        <div class="spinner-grow bg-success ml-3" role="status" style="width: 2rem; height: 2rem"></div>
                                                                    </td>
                                                                    <td>Credencial</td>
                                                                    <td>2 de Febrero de 2021</td>
                                                                    <td>Aceptado</td>
                                                                    <td>PDF</td>
                                                                    <td></td>
                                                                    <td>
                                                                        <!-- BOTON ACCIONES -->
                                                                        <div class="dropdown">
                                                                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            Opciones
                                                                            </button>
                                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                                                <a href="#" data-toggle="modal" data-target="#docsAlumno">
                                                                                    <button class="dropdown-item" type="button">Ver</button>
                                                                                </a>
                                                                                <button class="dropdown-item" type="button">Descargar</button>
                                                                                <button class="dropdown-item" type="button">Eliminar</button>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">2</th>
                                                                    <td>
                                                                        <div class="spinner-grow bg-danger ml-3" role="status" style="width: 2rem; height: 2rem"></div>
                                                                    </td>
                                                                    <td>Comprobante de Pago</td>
                                                                    <td>15 de Febrero de 2021</td>
                                                                    <td>Rechazado</td>
                                                                    <td>Imagen</td>
                                                                    <td></td>
                                                                    <td>
                                                                        <!-- BOTON ACCIONES -->
                                                                        <div class="dropdown">
                                                                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            Opciones
                                                                            </button>
                                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                                                <a href="#" data-toggle="modal" data-target="#docsAlumno">
                                                                                    <button class="dropdown-item" type="button">Ver</button>
                                                                                </a>
                                                                                <button class="dropdown-item" type="button">Descargar</button>
                                                                                <button class="dropdown-item" type="button">Eliminar</button>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">3</th>
                                                                    <td>
                                                                        <div class="spinner-grow bg-warning ml-3" role="status" style="width: 2rem; height: 2rem"></div>
                                                                    </td>
                                                                    <td>CURP</td>
                                                                    <td>02 de Febrero de 2021</td>
                                                                    <td>Caducado</td>
                                                                    <td>Documento</td>
                                                                    <td></td>
                                                                    <td>
                                                                        <!-- BOTON ACCIONES -->
                                                                        <div class="dropdown">
                                                                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            Opciones
                                                                            </button>
                                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                                                <a href="#" data-toggle="modal" data-target="#docsAlumno">
                                                                                    <button class="dropdown-item" type="button">Ver</button>
                                                                                </a>
                                                                                <button class="dropdown-item" type="button">Descargar</button>
                                                                                <button class="dropdown-item" type="button">Eliminar</button>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-9"></div>
                                                    <div class="col-lg-3">
                                                        <button class="btn btn-primary w-100 mr-0 ml-5 mb-3">Solicitar Documento</button>
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
                        <!--FINALIZA SECCION DE REVISIÓN DE DOCUMENTOS-->
                        <!--INICIA SECCION DE HISTORIAL DE CURSOS-->
                        <section class="container py-2 bg-grey">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card mt-3 mb-3">
                                        <div class="card-body">
                                            <div class="mx-auto">
                                                <div class="row p-3">
                                                    <div class="col-lg-9">
                                                        <h3>Historal de Cursos</h3>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <select class="form-control" id="sel1">
                                                                <option>Todos</option>
                                                                <option>Inscritos</option>
                                                                <option>Pendientes de Pago</option>
                                                                <option>Rechazados</option>
                                                                <option>Constancia Acreditada</option>
                                                                <option>Constancias Pendiente</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 overflow-auto">
                                                        <table class="table table-striped bg-light table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Grupo</th>
                                                                    <th scope="col">Curso</th>
                                                                    <th scope="col">Profesor</th>
                                                                    <th scope="col">Estado del Pago</th>
                                                                    <th scope="col">Constancia</th>
                                                                    <th scope="col">Inscripción</th>
                                                                    <th scope="col">Estado</th>
                                                                    <th scope="col">Calificación</th>
                                                                    <th scope="col">Notas</th>
                                                                    <th scope="col">Acciones</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">1</th>
                                                                    <td>2143</td>
                                                                    <td>Diseño Web</td>
                                                                    <td>Juan Álvarez Romo</td>
                                                                    <td>Pendiente</td>
                                                                    <td>Pendiente</td>
                                                                    <td>Pendiente</td>
                                                                    <td>Activa</td>
                                                                    <td></td>
                                                                    <td>Registro realizado el 22 de Febrero de 2021</td>
                                                                    <td>
                                                                        <!-- BOTON ACCIONES -->
                                                                        <div class="dropdown">
                                                                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            Opciones
                                                                            </button>
                                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                                                <button class="dropdown-item" type="button">Ficha de Inscripción</button>
                                                                                <button class="dropdown-item" type="button">Generar Constancia</button>
                                                                                <button class="dropdown-item" type="button">Revisar Documentos</button>
                                                                                <button class="dropdown-item" type="button">Cancelar Inscripción</button>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">2</th>
                                                                    <td>2144</td>
                                                                    <td>Iniciación al Cómputo I</td>
                                                                    <td>Alberto Mendez García</td>
                                                                    <td>Acreditado el 23 de Febrero de 2021</td>
                                                                    <td>02156</td>
                                                                    <td>Pendiente</td>
                                                                    <td>Acreditado</td>
                                                                    <td>Aceptado</td>
                                                                    <td></td>
                                                                    <td>
                                                                        <!-- BOTON ACCIONES -->
                                                                        <div class="dropdown">
                                                                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            Opciones
                                                                            </button>
                                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                                                <button class="dropdown-item" type="button">Ficha de Inscripción</button>
                                                                                <button class="dropdown-item" type="button">Generar Constancia</button>
                                                                                <button class="dropdown-item" type="button">Revisar Documentos</button>
                                                                                <button class="dropdown-item" type="button">Cancelar Inscripción</button>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">3</th>
                                                                    <td>2653</td>
                                                                    <td>Iniciación al Cómputo II</td>
                                                                    <td>Ana María Rosas Nuñez</td>
                                                                    <td>No realizado</td>
                                                                    <td>Rechazado</td>
                                                                    <td>Sin Documentos</td>
                                                                    <td>Cancelado</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td>
                                                                        <!-- BOTON ACCIONES -->
                                                                        <div class="dropdown">
                                                                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            Opciones
                                                                            </button>
                                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                                                <button class="dropdown-item" type="button">Ficha de Inscripción</button>
                                                                                <button class="dropdown-item" type="button">Generar Constancia</button>
                                                                                <button class="dropdown-item" type="button">Revisar Documentos</button>
                                                                                <button class="dropdown-item" type="button">Cancelar Inscripción</button>
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
                        <!--FINALIZA SECCION DE HISTORIAL DE CURSOS-->
                    </div>
                    <!--Fin contenido dinamico-->
                    <?php include("./view/includes/footer.php");?>
                </div>
            </div>
        </div>
        <?php include "modal-documentos-alumno.php";?>
    </body>
</html>