<!doctype html>
<html lang="en">
    <?php
        //Abrir para agregar los includes
        $tittle = "Administracion General";
        include("./view/includes/header.php");
        ?>
    <style>
        /*  bhoechie tab */
        div.bhoechie-tab-container {
        z-index: 10;
        background-color: #ffffff;
        padding: 0 !important;
        border-radius: 4px;
        -moz-border-radius: 4px;
        -webkit-box-shadow: 0 6px 12px rgb(0 0 0 / 18%);
        box-shadow: 0 6px 12px rgb(0 0 0 / 18%);
        -moz-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
        background-clip: padding-box;
        opacity: 0.97;
        filter: alpha(opacity=97);
        }
        div.bhoechie-tab-menu {
        padding-right: 0;
        padding-left: 0;
        padding-bottom: 0;
        }
        div.bhoechie-tab-menu div.list-group {
        margin-bottom: 0;
        }
        div.bhoechie-tab-menu div.list-group>a {
        margin-bottom: 0;
        }
        div.bhoechie-tab-menu div.list-group>a .glyphicon,
        div.bhoechie-tab-menu div.list-group>a .fa {
        color: #5A55A3;
        }
        div.bhoechie-tab-menu div.list-group>a:first-child {
        border-top-right-radius: 0;
        -moz-border-top-right-radius: 0;
        }
        div.bhoechie-tab-menu div.list-group>a:last-child {
        border-bottom-right-radius: 0;
        -moz-border-bottom-right-radius: 0;
        }
        div.bhoechie-tab-menu div.list-group>a.active,
        div.bhoechie-tab-menu div.list-group>a.active .glyphicon,
        div.bhoechie-tab-menu div.list-group>a.active .fa {
        background-color: var(--primary);
        background-image: var(--primary);
        color: #ffffff;
        }
        div.bhoechie-tab-menu div.list-group>a.active:after {
        content: '';
        position: absolute;
        left: 100%;
        top: 50%;
        margin-top: -13px;
        border-left: 0;
        border-bottom: 13px solid transparent;
        border-top: 13px solid transparent;
        border-left: 10px solid #5A55A3;
        }
        div.bhoechie-tab-content {
        background-color: #ffffff;
        /* border: 1px solid #eeeeee; */
        padding-left: 20px;
        padding-top: 10px;
        }
        div.bhoechie-tab div.bhoechie-tab-content:not(.active) {
        display: none;
        }
        .img-config {
        width: 3em;
        }
    </style>
    <body class="body-home">
        <div class="d-flex">
            <?php include("./view/includes/admin-menupc.php"); ?>
            <div class="w-100">
                <?php include("./view/includes/admin-menutel.php"); ?>
                <div id="content">
                    <!--Inicio contenido dinamico-->
                    <div class="componet-dinamico bg-grey">
                        <section class="container py-3 bg-grey">
                            <div class="row">
                                <div class="col-lg-12">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb bg-grey">
                                            <li class="breadcrumb-item"><a href="./home">Inicio</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Configuración</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="font-weight-bold mb-0">Configuración General</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="callout callout-second">
                                        <div class="contariner">
                                            <div class="row align-items-center justify-content-center">
                                                <div class="col-lg-9">
                                                    <h4>Administre la informacion general del sistema</h4>
                                                    Este acceso es sólo para cuentas de administrador con alto acceso, por lo que si desea que alguien más pueda realizar cambios, es necesario que configure la cuenta en nivel alto.
                                                </div>
                                                <div class="col-lg-3">
                                                    <a href="./lista-cuentas">
                                                    <button class="btn btn-primary w-100 m-3">Crear Cuenta</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row my-4 p-4 bg-white">
                                    <div class="col-sm-2 bhoechie-tab-container">
                                        <div class="bhoechie-tab-menu">
                                            <div class="list-group">
                                                <a href="#" class="list-group-item active text-center">
                                                    <img src="./assets/img/icons/folder.svg" class="card-img-top img-config" alt="">
                                                    <h6>Departamentos</h6>
                                                </a>
                                                <a href="#" class="list-group-item text-center">
                                                    <img src="./assets/img/icons/grado3.svg" class="card-img-top img-config" alt="">
                                                    <h6>Universidades</h6>
                                                </a>
                                                <a href="#" class="list-group-item text-center">
                                                    <img src="./assets/img/icons/comunidad3.svg" class="card-img-top img-config" alt="">
                                                    <h6>Procedencias</h6>
                                                </a>
                                                <a href="#" class="list-group-item text-center">
                                                    <img src="./assets/img/icons/home3.svg" class="card-img-top img-config" alt="">
                                                    <h6>Aulas</h6>
                                                </a>
                                                <a href="#" class="list-group-item text-center">
                                                    <img src="./assets/img/icons/seleccion3.svg" class="card-img-top img-config" alt="">
                                                    <h6>Documentos</h6>
                                                </a>
                                                <a href="#" class="list-group-item text-center">
                                                    <img src="./assets/img/icons/constancia1.svg" class="card-img-top img-config" alt="">
                                                    <h6>Constancias</h6>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-10 my-4">
                                        <div class="col-md-12 bhoechie-tab">
                                            <!-- Deptos section -->
                                            <div class="bhoechie-tab-content active">
                                                <div class="text-center">
                                                    <img src="./assets/img/icons/folder2.svg" class="card-img-top img-config" alt="">
                                                    <h2 style="margin-top: 0;color:#55518a">Departamentos</h2>
                                                    <p>
                                                        Departamentos disponibles del sistema
                                                    </p>
                                                </div>
                                                <div class="container">
                                                    <h3>Departamentos almacenados</h3>
                                                    <div class="row">
                                                        <div id="tbl-containerCursos" class="col-lg-12 overflow-auto table-responsive">
                                                            <table class="table table-hover table-striped table-sm bg-light">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">ID</th>
                                                                        <th scope="col">Nombre</th>
                                                                        <th scope="col">Acciones</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="tbl-cursos">
                                                                    <tr>
                                                                        <th scope="row">1</th>
                                                                        <td>003</td>
                                                                        <td>Informatica</td>
                                                                        <!-- BOTON ACCIONES -->
                                                                        <td>
                                                                            <div class="btn-group" role="group" aria-label="acciones">
                                                                                <button type="button" class="btn btn-primary">Editar</button>
                                                                                <button type="button" class="btn btn-danger">Quitar</button>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">1</th>
                                                                        <td>003</td>
                                                                        <td>Matematicas</td>
                                                                        <!-- BOTON ACCIONES -->
                                                                        <td>
                                                                            <div class="btn-group" role="group" aria-label="acciones">
                                                                                <button type="button" class="btn btn-primary">Editar</button>
                                                                                <button type="button" class="btn btn-danger">Quitar</button>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">1</th>
                                                                        <td>003</td>
                                                                        <td>Contabilidad</td>
                                                                        <!-- BOTON ACCIONES -->
                                                                        <td>
                                                                            <div class="btn-group" role="group" aria-label="acciones">
                                                                                <button type="button" class="btn btn-primary">Editar</button>
                                                                                <button type="button" class="btn btn-danger">Quitar</button>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#departamentos">
                                                            Agregar Nuevo
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Universidades section -->
                                            <div class="bhoechie-tab-content">
                                                <div class="text-center">
                                                    <img src="./assets/img/icons/grado1.svg" class="card-img-top img-config" alt="">
                                                    <h2 style="margin-top: 0;color:#55518a">Universidades</h2>
                                                    <p>
                                                        Agregue o edite las Universidades
                                                    </p>
                                                </div>
                                                <div class="container">
                                                    <h3>Universidades almacenadas</h3>
                                                    <div class="row">
                                                        <div id="tbl-containerUniversidades" class="col-lg-12 overflow-auto table-responsive">
                                                            <table class="table table-hover table-striped table-sm bg-light">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">ID</th>
                                                                        <th scope="col">Nombre</th>
                                                                        <th scope="col">Siglas</th>
                                                                        <th scope="col">Acciones</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="tbl-universidades">
                                                                    <tr>
                                                                        <th scope="row">1</th>
                                                                        <td>001</td>
                                                                        <td>Universidad Nacional Autónoma de México</td>
                                                                        <td>UNAM</td>
                                                                        <!-- BOTON ACCIONES -->
                                                                        <td>
                                                                            <div class="btn-group" role="group" aria-label="acciones">
                                                                                <button type="button" class="btn btn-primary">Editar</button>
                                                                                <button type="button" class="btn btn-danger">Quitar</button>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">2</th>
                                                                        <td>002</td>
                                                                        <td>Instituto Politécnico Nacional</td>
                                                                        <td>IPN</td>
                                                                        <!-- BOTON ACCIONES -->
                                                                        <td>
                                                                            <div class="btn-group" role="group" aria-label="acciones">
                                                                                <button type="button" class="btn btn-primary">Editar</button>
                                                                                <button type="button" class="btn btn-danger">Quitar</button>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">3</th>
                                                                        <td>003</td>
                                                                        <td>Universidad Autónoma Metropolitana</td>
                                                                        <td>UAM</td>
                                                                        <!-- BOTON ACCIONES -->
                                                                        <td>
                                                                            <div class="btn-group" role="group" aria-label="acciones">
                                                                                <button type="button" class="btn btn-primary">Editar</button>
                                                                                <button type="button" class="btn btn-danger">Quitar</button>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#universidades">
                                                            Agregar Nueva
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Procedencias section -->
                                            <div class="bhoechie-tab-content">
                                                <div class="text-center">
                                                    <img src="./assets/img/icons/comunidad1.svg" class="card-img-top img-config" alt="">
                                                    <h2 style="margin-top: 0;color:#55518a">Procedencias de la comunidad</h2>
                                                    <p>
                                                        Agregue o edite las procedencias principales del sistema
                                                    </p>
                                                </div>
                                                <div class="container">
                                                    <h3>Procedencias almacenadas</h3>
                                                    <div class="row">
                                                        <div id="tbl-containerProcedencias" class="col-lg-12 overflow-auto table-responsive">
                                                            <table class="table table-hover table-striped table-sm bg-light">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">ID</th>
                                                                        <th scope="col">Nombre</th>
                                                                        <th scope="col">Acciones</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="tbl-procedencias">
                                                                    <tr>
                                                                        <th scope="row">1</th>
                                                                        <td>001</td>
                                                                        <td>Comunidad FESC</td>
                                                                        <!-- BOTON ACCIONES -->
                                                                        <td>
                                                                            <div class="btn-group" role="group" aria-label="acciones">
                                                                                <button type="button" class="btn btn-primary">Editar</button>
                                                                                <button type="button" class="btn btn-danger">Quitar</button>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">2</th>
                                                                        <td>002</td>
                                                                        <td>Ex-Alumno</td>
                                                                        <!-- BOTON ACCIONES -->
                                                                        <td>
                                                                            <div class="btn-group" role="group" aria-label="acciones">
                                                                                <button type="button" class="btn btn-primary">Editar</button>
                                                                                <button type="button" class="btn btn-danger">Quitar</button>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">3</th>
                                                                        <td>003</td>
                                                                        <td>Externo</td>
                                                                        <!-- BOTON ACCIONES -->
                                                                        <td>
                                                                            <div class="btn-group" role="group" aria-label="acciones">
                                                                                <button type="button" class="btn btn-primary">Editar</button>
                                                                                <button type="button" class="btn btn-danger">Quitar</button>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#procedencias">
                                                            Agregar Nueva
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Aulas section -->
                                            <div class="bhoechie-tab-content">
                                                <div class="text-center">
                                                    <img src="./assets/img/icons/home1.svg" class="card-img-top img-config" alt="">
                                                    <h2 style="margin-top: 0;color:#55518a">Aulas de la Facultad</h2>
                                                    <p>
                                                        Agregue o edite las aulas disponibles para impartir cursos de forma presencial
                                                    </p>
                                                </div>
                                                <div class="container">
                                                    <h3>Aulas almacenadas</h3>
                                                    <div class="row">
                                                        <div id="tbl-containerAulas" class="col-lg-12 overflow-auto table-responsive">
                                                            <table class="table table-hover table-striped table-sm bg-light">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">ID</th>
                                                                        <th scope="col">Edificio</th>
                                                                        <th scope="col">Aula</th>
                                                                        <th scope="col">Campo</th>
                                                                        <th scope="col">Cupo</th>
                                                                        <th scope="col">Acciones</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="tbl-aulas">
                                                                    <tr>
                                                                        <th scope="row">1</th>
                                                                        <td>001</td>
                                                                        <td>A1</td>
                                                                        <td>101</td>
                                                                        <td>4</td>
                                                                        <td>30</td>
                                                                        <!-- BOTON ACCIONES -->
                                                                        <td>
                                                                            <div class="btn-group" role="group" aria-label="acciones">
                                                                                <button type="button" class="btn btn-primary">Editar</button>
                                                                                <button type="button" class="btn btn-danger">Quitar</button>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">2</th>
                                                                        <td>002</td>
                                                                        <td>A2</td>
                                                                        <td>212</td>
                                                                        <td>4</td>
                                                                        <td>35</td>
                                                                        <!-- BOTON ACCIONES -->
                                                                        <td>
                                                                            <div class="btn-group" role="group" aria-label="acciones">
                                                                                <button type="button" class="btn btn-primary">Editar</button>
                                                                                <button type="button" class="btn btn-danger">Quitar</button>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">3</th>
                                                                        <td>003</td>
                                                                        <td>E1</td>
                                                                        <td>301</td>
                                                                        <td>1</td>
                                                                        <td>20</td>
                                                                        <!-- BOTON ACCIONES -->
                                                                        <td>
                                                                            <div class="btn-group" role="group" aria-label="acciones">
                                                                                <button type="button" class="btn btn-primary">Editar</button>
                                                                                <button type="button" class="btn btn-danger">Quitar</button>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#aulas">
                                                            Agregar Nuevo
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Documentos section -->
                                            <div class="bhoechie-tab-content">
                                                <div class="text-center">
                                                    <img src="./assets/img/icons/seleccion1.svg" class="card-img-top img-config" alt="">
                                                    <h2 style="margin-top: 0;color:#55518a">Tipo de Documentos</h2>
                                                    <p>
                                                        Agregue o edite las documentos que podra solicitar al momento de abrir un grupo
                                                    </p>
                                                </div>
                                                <div class="container">
                                                    <h3>Documentos almacenados</h3>
                                                    <div class="row">
                                                        <div id="tbl-containerDocumentos" class="col-lg-12 overflow-auto table-responsive">
                                                            <table class="table table-hover table-striped table-sm bg-light">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">ID</th>
                                                                        <th scope="col">Nombre</th>
                                                                        <th scope="col">Formato</th>
                                                                        <th scope="col">Peso máximo</th>
                                                                        <th scope="col">Acciones</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="tbl-docs">
                                                                    <tr>
                                                                        <th scope="row">1</th>
                                                                        <td>001</td>
                                                                        <td>Credencial Escolar</td>
                                                                        <td>PDF</td>
                                                                        <td>1 MB</td>
                                                                        <!-- BOTON ACCIONES -->
                                                                        <td>
                                                                            <div class="btn-group" role="group" aria-label="acciones">
                                                                                <button type="button" class="btn btn-primary">Editar</button>
                                                                                <button type="button" class="btn btn-danger">Quitar</button>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">2</th>
                                                                        <td>002</td>
                                                                        <td>Historial Académico</td>
                                                                        <td>PDF</td>
                                                                        <td>1 MB</td>
                                                                        <!-- BOTON ACCIONES -->
                                                                        <td>
                                                                            <div class="btn-group" role="group" aria-label="acciones">
                                                                                <button type="button" class="btn btn-primary">Editar</button>
                                                                                <button type="button" class="btn btn-danger">Quitar</button>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">3</th>
                                                                        <td>003</td>
                                                                        <td>CURP</td>
                                                                        <td>PDF</td>
                                                                        <td>1 MB</td>
                                                                        <!-- BOTON ACCIONES -->
                                                                        <td>
                                                                            <div class="btn-group" role="group" aria-label="acciones">
                                                                                <button type="button" class="btn btn-primary">Editar</button>
                                                                                <button type="button" class="btn btn-danger">Quitar</button>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#documentos">
                                                            Agregar Nuevo
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Constancias section -->
                                            <div class="bhoechie-tab-content">
                                                <div class="text-center">
                                                    <img src="./assets/img/icons/constancia2.svg" class="card-img-top img-config" alt="">
                                                    <h2 style="margin-top: 0;color:#55518a">Configuración de Constancias</h2>
                                                    <p>
                                                        Modifique el estilo de las constancia que se le entregaran al alumno y al profesor
                                                    </p>
                                                </div>
                                                <img src="./assets/img/reposit-img/curso-excel.jpg" class="card-img-top img-thumbnail img-preview" alt="img del curso" id="preview">
                                                <div class="card-body">
                                                    <h6 class="card-title"><strong>Plantilla de la Constancia</strong></h6>
                                                    <p class="card-text py-1">Debe tener una resolución de 600px por 300px</p>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <input type="file" class="custom-file-input" id="preview" accept="image/*">
                                                            <label class="custom-file-label" for="preview" data-browse="Elegir">Seleccione una imagen</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <a href="#"><button type="button" class="btn btn-warning btn-sec btn-block">Quitar</button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-primary">Guardar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!--FIN contenido dinamico-->
                    <?php include("./view/includes/footer.php"); ?>
                </div>
            </div>
        </div>
        <!--start modal zone-->
        <!-- Inicia Modal Departamentos-->
        <div class="modal fade" id="departamentos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Departamentos</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="hidden" class="form-control" id="id_depto" aria-describedby="deptoHelp">
                                <input type="text" class="form-control" id="nombre" aria-describedby="deptoHelp">
                                <small id="deptoHelp" class="form-text text-muted">Escriba el nombre del departamento</small>
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin Modal Departamentos -->
        <!-- Inicia Modal Universidades-->
        <div class="modal fade" id="universidades" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Universidades</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="hidden" class="form-control" id="id_uni" aria-describedby="uniHelp">
                                <input type="text" class="form-control" id="nombre-uni" aria-describedby="uniHelp">
                                <small id="uniHelp" class="form-text text-muted">Escriba el nombre de la institución</small>
                                <label class="mt-3" for="siglas">Siglas:</label>
                                <input type="hidden" class="form-control" id="id_siglas" aria-describedby="siglasHelp">
                                <input type="text" class="form-control" id="siglas-uni" aria-describedby="siglasHelp">
                                <small id="siglasHelp" class="form-text text-muted">Escriba las siglas de la institución</small>
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin Modal Universidades -->
        <!-- Inicia Modal Procedencias-->
        <div class="modal fade" id="procedencias" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Procedencias</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="hidden" class="form-control" id="id_proce" aria-describedby="proceHelp">
                                <input type="text" class="form-control" id="nombre" aria-describedby="proceHelp">
                                <small id="proceHelp" class="form-text text-muted">Escriba el nombre la procedencia</small>
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Finaliza Modal Procedencias -->
        <!-- Inicia Modal Aulas-->
        <div class="modal fade" id="aulas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Aulas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="edificio">Edificio:</label>
                                <input type="hidden" class="form-control" id="id_edificio" aria-describedby="edificioHelp">
                                <input type="text" class="form-control" id="edificio" aria-describedby="edificioHelp">
                                <small id="edificioHelp" class="form-text text-muted">Escriba el edificio</small>
                                <label class="mt-3" for="aula">Aula:</label>
                                <input type="hidden" class="form-control" id="id_aula" aria-describedby="aulaHelp">
                                <input type="text" class="form-control" id="aula" aria-describedby="aulaHelp">
                                <small id="aulaHelp" class="form-text text-muted">Escriba el aula</small>
                                <label class="mt-3" for="campo">Campo:</label>
                                <input type="hidden" class="form-control" id="id_campo" aria-describedby="campoHelp">
                                <input type="text" class="form-control" id="campo" aria-describedby="campoHelp">
                                <small id="campoHelp" class="form-text text-muted">Escriba el campo</small>
                                <label class="mt-3" for="cupo">Cupo:</label>
                                <input type="hidden" class="form-control" id="id_cupo" aria-describedby="cupoHelp">
                                <input type="text" class="form-control" id="cupo" aria-describedby="cupoHelp">
                                <small id="cupoHelp" class="form-text text-muted">Escriba el cupo</small>
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Finaliza Modal Aulas -->
        <!-- Inicia Modal Documentos-->
        <div class="modal fade" id="documentos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Documentos</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="hidden" class="form-control" id="id_doc" aria-describedby="docHelp">
                                <input type="text" class="form-control" id="nombre-doc" aria-describedby="docHelp">
                                <small id="docHelp" class="form-text text-muted">Escriba el nombre del documento</small>
                                <label class="mt-3" for="formato">Formato:</label>
                                <input type="hidden" class="form-control" id="id_formato" aria-describedby="formatoHelp">
                                <input type="text" class="form-control" id="formato-doc" aria-describedby="formatoHelp">
                                <small id="formatoHelp" class="form-text text-muted">Escriba el formato del documento</small>
                                <label class="mt-3" for="peso">Peso Máximo:</label>
                                <input type="hidden" class="form-control" id="id_peso" aria-describedby="pesoHelp">
                                <input type="text" class="form-control" id="peso-doc" aria-describedby="pesoHelp">
                                <small id="pesoHelp" class="form-text text-muted">Escriba el tamaño del documento</small>
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Finaliza Modal Documentos -->
        <!-- end modal zone-->
        <!-- script_js -->
        <script>
            $(document).ready(function() {
                $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
                    e.preventDefault();
                    $(this).siblings('a.active').removeClass("active");
                    $(this).addClass("active");
                    var index = $(this).index();
                    $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
                    $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
                });
            });
        </script>
        <script>
            $(document).on("click", ".custom-file-input", function() {
                var file = $(this).parents().find(".file");
                file.trigger("click");
            });
            $('input[type="file"]').change(function(e) {
                var fileName = e.target.files[0].name;
                $("#preview").val(fileName);
            
                var reader = new FileReader();
                reader.onload = function(e) {
                    // get loaded data and render thumbnail.
                    document.getElementById("preview").src = e.target.result;
                };
                // read the image file as a data URL.
                reader.readAsDataURL(this.files[0]);
            });
            
                // Add the following code if you want the name of the file appear on select
            // Add the following code if you want the name of the file appear on select
            $(".custom-file-input").on("change", function() {
                var fileName = $(this).val().split("\\").pop();
                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });
        </script>
    </body>
</html>