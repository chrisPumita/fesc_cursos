<!doctype html>
<html lang="en">
    <?php
    //Abrir para agregar los includes
    $tittle = "Detalle del curso";
    include("../includes/header.php");
    ?>
    <body class="body-home">
        <div class="d-flex">
            <div class="w-100">
                <?php include("../includes/alumno-navbar.php"); ?>
                <div id="content">
                    <!--Inicio contenido dinamico-->
                    <div class="componet-dinamico">
                        <!-- INICIA SECCIÓN DE ENCABEZADO CON ESTADÍSTICAS-->
                        <section class="container py-2 bg-grey">
                            <div class="row">
                                <div class="col-lg-7">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                            <li class="breadcrumb-item"><a href="#">Cursos</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Grupo 2210 - Gen 5°</li>
                                        </ol>
                                    </nav>
                                </div>
                                <div class="col-lg-2 py-1">
                                    <button class="btn btn-primary w-100 aling-self-center font-weight-bold">Solicitar</button>
                                </div>
                                <div class="col-lg-3 py-1">
                                    <button class="btn btn-danger w-100 aling-self-center font-weight-bold">Cancelar Solicitud</button>
                                </div>
                            </div>
                            <div class="card bg-light col-lg-12 py-2">
                                <img src="https://www.solucioneshipermedia.com/wp-content/uploads/medidas-pagina-web.png" class="card-img" alt="...">
                                <div class="card-img-overlay">
                                    <h3 class="font-weight-bold mb-2 text-primary">Páginas Web Semestre 2021-I Gen 5</h3>
                                    <h5 class="mb-1 text-warning">Profesor: Martha Arellano Félix</h5>
                                    <h5 class="mb-1 text-warning ">Grupo: 2210</h5>
                                    <h5 class="mb-1 text-warning">Departamento de Cómputo</h5>
                                    <h5 class="text-warning">Inicio: 5 de junio de 2021</h5>
                                </div>
                            </div>

                            <!--ESTADISTICAS-->
                        <div class="card bg-grey estadisticas">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="card">
                                            <div class="card-body">
                                                <div class="mx-auto">
                                                    <i class="icon ion-logo-usd mr-1 position-absolute paleta"></i>
                                                    <h6 class="text-muted"></i><strong>Costo</strong></h6>
                                                    <h3 class="font-weight-bold">$500</h3>
                                                    <h6 class="text-warning">Comunidad FESC</h6>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="card">
                                            <div class="card-body">
                                                <div class="mx-auto">
                                                    <i class="icon ion-ios-people mr-1 position-absolute paleta"></i>
                                                    <h6 class="text-muted"><strong>Cupo</strong></h6>
                                                    <h3 class="font-weight-bold">36</h3>
                                                    <h6 class="text-warning">Cupo Limitado</h6>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="card">
                                            <div class="card-body">
                                                <div class="mx-auto">
                                                    <i class="ion-ios-create mr-1 position-absolute paleta"></i>
                                                    <h6 class="text-muted"><strong>Inscritos</strong></h6>
                                                    <h3 class="font-weight-bold">10</h3>
                                                    <h6 class="text-warning">En Total</h6>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="card">
                                            <div class="card-body">
                                                <div class="mx-auto">
                                                    <div class="spinner-grow text-success position-absolute" style="width: 3rem; height: 3rem" role="status"></div>
                                                    <!--<i class="ion-ios-checkmark-circle mr-1 position-absolute paleta"></i>-->
                                                    <h6 class="text-muted"><strong>Estatus</strong></h6>
                                                    <h3 class="font-weight-bold text-success">Disponible</h3>
                                                    <h6 class="text-warning">El curso aún tiene lugares</h6>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- FINALIZA SECCIÓN DE ENCABEZADO CON ESTADÍSTICAS-->

                        <!-- INICIA SECCIÓN DE DETALLES-->
                            <section class="container py-1 bg-grey">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="container py-2">
                                            <div class="media">
                                                <div class="media-left media-middle">
                                                    <img src="../../assets/img/home.png" class="mr-2" width=30px alt="">
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="media-heading font-weight-bold">Objetivo General</h5>
                                                    <p>Al finalizar el curso, el alumno conocerá diversas tecnologías e identificará la importancia de las mismas para el desarrollo de aplicaciones para internet.</p>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-left media-middle">
                                                    <img src="../../assets/img/settings.png" class="mr-2" width=30px alt="">
                                                </div>
                                                <div class="media-body">
                                                    <p class="mb-0">Inicia: 5 de Junio de 2021</p>
                                                    <p>Finaliza el 5 de Diciembre de 2021</p>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-left media-middle">
                                                    <img src="../../assets/img/start-sesion.png" class="mr-2" width=30px alt="">
                                                </div>
                                                <div class="media-body">
                                                    <p class="mb-2">Límite de recepciones: 20 de Junio de 2021</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="container align-items-center py-2">
                                            <p class="mb-0">Generación: <span class="font-weight-bold">5°</span></p>
                                            <p class="mb-0">Modalidad: <span class="font-weight-bold">Mixto</span></p>
                                            <p class="mb-0">Semestre: <span class="font-weight-bold">2021-II</span></p>
                                            <p class="mb-0">Horas a la semana: <span class="font-weight-bold">6 hrs.</span></p>
                                            <p class="mb-0">Cupo: <span class="font-weight-bold">10/36</span></p>
                                            <p class="mb-0">Costo: <span class="font-weight-bold">$950.00</span></p>
                                            <p class="mb-0"><i>*Descuento: $500.00</i></p>
                                            <p class="mb-0">Descuento aplicado a: <span class="font-weight-bold">Comunidad FESC</span></p>
                                            <p class="mb-0">Plataforma a utlizar: <span class="font-weight-bold">Moodle</span></p>
                                        </div>
                                    </div>
                                </div> 
                            </section>
                        <!-- FINALIZA SECCIÓN DE DETALLES-->

                        <!-- INICIA SECCIÓN DE HORARIOS-->
                        <section class="container py-2 bg-grey">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="font-weight-bold ml-5">Horarios Establecidos</h2>
                                </div>
                            </div>
                            <div class="col-sm-12 py-1">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mx-auto">
                                            <div class="row">
                                                <div class="col-lg-12 mb-2">
                                                    <h4 class="font-weight-bold">Presencial:</h4>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 overflow-auto">
                                                    <table class="table table-striped bg-light">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Horario</th>
                                                                <th scope="col">Lunes</th>
                                                                <th scope="col">Martes</th>
                                                                <th scope="col">Miércoles</th>
                                                                <th scope="col">Jueves</th>
                                                                <th scope="col">Viernes</th>
                                                                <th scope="col">Sábado</th>
                                                                <th scope="col">Domingo</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td scope="row">08:00 AM - 10:00 AM</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>H103</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row">09:00 AM - 11:00 AM</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>H102</td>
                                                                <td></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 py-1">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mx-auto">
                                            <div class="row">
                                                <div class="col-lg-12 mb-2">
                                                    <h4 class="font-weight-bold">Remoto:</h4>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 overflow-auto">
                                                    <table class="table table-striped bg-light">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Horario</th>
                                                                <th scope="col">Lunes</th>
                                                                <th scope="col">Martes</th>
                                                                <th scope="col">Miércoles</th>
                                                                <th scope="col">Jueves</th>
                                                                <th scope="col">Viernes</th>
                                                                <th scope="col">Sábado</th>
                                                                <th scope="col">Domingo</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td scope="row">08:00 AM - 10:00 AM</td>
                                                                <td></td>
                                                                <td>ZOOM</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row">07:00 AM - 09:00 AM</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>MOODLE</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- FINALIZA SECCIÓN DE HORARIOS-->

                        <!--INICIA SECCIÓN DEL TEMARIO-->
                        <section class="container py-2 bg-grey">
                            <div class="row">
                                <div class="col-lg-10">
                                    <h2 class="font-weight-bold ml-5">TEMARIO</h2>
                                </div>
                                <div class="col-lg-2 mr-0">
                                    <img src="../../assets/img/save.png" class="aling-self-center" width="40px" alt=""><p class="aling-self-center"><a>Descargar</a></p>
                                </div>
                            </div>
                            <div class="col-sm-12 py-1">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mx-auto">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <ol>
                                                            <dt class="font-weight-bold py-2">Bloque I</dt>
                                                            <li>Antecedentes
                                                                <ul>    
                                                                    <li>1.1 Historia de Internet</li>
                                                                    <li>1.2 Web 1.0</li>
                                                                    <li>1.3 Web 2.0</li>
                                                                    <li>1.4 Actualidad de la Web</li>
                                                                </ul>
                                                            </li>
                                                            <dt class="font-weight-bold py-2">Bloque II</dt>
                                                            <li>HTML
                                                                <ul>    
                                                                    <li>2.1 El origen de HTML</li>
                                                                    <li>2.2 Versiones</li>
                                                                    <li>2.3 Otros lenguajes de mercado</li>
                                                                </ul>
                                                            </li>
                                                            <dt class="font-weight-bold py-2">Bloque III</dt>
                                                            <li>Hojas de Estilo en Cascada
                                                                <ul>    
                                                                    <li>3.1 Historia de CSS</li>
                                                                    <li>3.2 Selectores</li>
                                                                    <li>3.3 Versión de CSS</li>
                                                                    <li>3.4 Propiedades CSS</li>
                                                                </ul>
                                                            </li>
                                                            <dt class="font-weight-bold py-2">Bloque IV</dt>
                                                            <li>Java Script
                                                                <ul>    
                                                                    <li>4.1 Sintaxis</li>
                                                                    <li>4.2 Variables y tipos de dato</li>
                                                                    <li>4.3 Operadores</li>
                                                                </ul>
                                                            </li>
                                                        </ol>
                                                    </div>
                                                </div>
                                        </div>  
                                    </div> 
                                </div>
                            </div>
                        </section>
                        <!--FINALIZA SECCIÓN DEL TEMARIO-->

                        <!--INICIA SECCIÓN DE LOS DOCUMENTOS REQUERIDOS-->
                        <section class="container py-3 bg-grey">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="font-weight-bold ml-5">Documentos Requeridos</h2>
                                </div>
                                <div class="col-sm-12 py-1">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="mx-auto">
                                                <div class="row">
                                                    <div class="col-lg-12 overflow-auto">
                                                        <table class="table table-striped bg-light">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Nombre</th>
                                                                    <th scope="col">Tipo de documento</th>
                                                                    <th scope="col">Tamaño</th>
                                                                    <th scope="col">Notas</th>
                                                                    <th scope="col">Obligatorio</th>
                                                                    <th scope="col">Entregar</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td scope="row">1</td>
                                                                    <td>Credencial</td>
                                                                    <td>PDF</td>
                                                                    <td>1000 KB</td>
                                                                    <td>Al 200% (ambas caras)</td>
                                                                    <td>Si</td>
                                                                    <td><a>Subir Archivo</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td scope="row">2</td>
                                                                    <td>Comprobante de pago</td>
                                                                    <td>PDF</td>
                                                                    <td>1000 KB</td>
                                                                    <td></td>
                                                                    <td>Si</td>
                                                                    <td><a>Subir Archivo</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td scope="row">3</td>
                                                                    <td>CURP</td>
                                                                    <td>PDF</td>
                                                                    <td>1000 KB</td>
                                                                    <td>Actualizado, al 200% </td>
                                                                    <td>Si</td>
                                                                    <td><a>Subir Archivo</a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>   
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </section>
                        <!--FINALIZA SECCIÓN DE LOS DOCUMENTOS REQUERIDOS-->
                    </div>
                    <!--FIN contenido dinamico-->
                    <?php include("../includes/footer.php");?>
                </div>
            </div>
        </div>
    </body>
</html>