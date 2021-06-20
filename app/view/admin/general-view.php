<!doctype html>
<html lang="en">
<?php
//Abrir para agregar los includes
$tittle = "Administracion General";
include("./view/includes/header.php");
?>

<style>

    /*  bhoechie tab */
    div.bhoechie-tab-container{
        z-index: 10;
        background-color: #ffffff;
        padding: 0 !important;
        border-radius: 4px;
        -moz-border-radius: 4px;
        -webkit-box-shadow: 0 6px 12px rgb(0 0 0 / 18%);
        box-shadow: 0 6px 12px rgb(0 0 0 / 18%);
        -moz-box-shadow: 0 6px 12px rgba(0,0,0,.175);
        background-clip: padding-box;
        opacity: 0.97;
        filter: alpha(opacity=97);
    }
    div.bhoechie-tab-menu{
        padding-right: 0;
        padding-left: 0;
        padding-bottom: 0;
    }
    div.bhoechie-tab-menu div.list-group{
        margin-bottom: 0;
    }
    div.bhoechie-tab-menu div.list-group>a{
        margin-bottom: 0;
    }
    div.bhoechie-tab-menu div.list-group>a .glyphicon,
    div.bhoechie-tab-menu div.list-group>a .fa {
        color: #5A55A3;
    }
    div.bhoechie-tab-menu div.list-group>a:first-child{
        border-top-right-radius: 0;
        -moz-border-top-right-radius: 0;
    }
    div.bhoechie-tab-menu div.list-group>a:last-child{
        border-bottom-right-radius: 0;
        -moz-border-bottom-right-radius: 0;
    }
    div.bhoechie-tab-menu div.list-group>a.active,
    div.bhoechie-tab-menu div.list-group>a.active .glyphicon,
    div.bhoechie-tab-menu div.list-group>a.active .fa{
        background-color: var(--primary);
        background-image: var(--primary);
        color: #ffffff;
    }
    div.bhoechie-tab-menu div.list-group>a.active:after{
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

    div.bhoechie-tab-content{
        background-color: #ffffff;
        /* border: 1px solid #eeeeee; */
        padding-left: 20px;
        padding-top: 10px;
    }

    div.bhoechie-tab div.bhoechie-tab-content:not(.active){
        display: none;
    }
    .img-config{
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
                                            Este acceso es solo para cuentas de administrador con alto acceso, por lo que si desea que alguien mas pueda realizar cambios, es necesario que configure la cuenta en nuvel alto.
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
                                            <img src="./assets/img/icons/folder.svg" class="card-img-top img-config"alt="">
                                            <h6>Departamentos</h6>
                                        </a>
                                        <a href="#" class="list-group-item text-center">
                                            <img src="./assets/img/icons/grado3.svg" class="card-img-top img-config"alt="">
                                            <h6>Universidades</h6>
                                        </a>
                                        <a href="#" class="list-group-item text-center">
                                            <img src="./assets/img/icons/comunidad3.svg" class="card-img-top img-config"alt="">
                                            <h6>Procedencias</h6>
                                        </a>
                                        <a href="#" class="list-group-item text-center">
                                            <img src="./assets/img/icons/home3.svg" class="card-img-top img-config"alt="">
                                            <h6>Aulas</h6>
                                        </a>
                                        <a href="#" class="list-group-item text-center">
                                            <img src="./assets/img/icons/seleccion3.svg" class="card-img-top img-config"alt="">
                                            <h6>Documentos</h6>
                                        </a>
                                        <a href="#" class="list-group-item text-center">
                                            <img src="./assets/img/icons/constancia1.svg" class="card-img-top img-config"alt="">
                                            <h6>Constancias</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-10 my-4">
                                <div class="col-md-12 bhoechie-tab">
                                    <!-- flight section -->
                                    <div class="bhoechie-tab-content active">
                                        <div class="text-center">
                                            <img src="./assets/img/icons/folder2.svg" class="card-img-top img-config"alt="">
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
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                                        Agregar Nuevo
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- train section -->
                                    <div class="bhoechie-tab-content">
                                        <div class="text-center">
                                            <img src="./assets/img/icons/grado1.svg" class="card-img-top img-config"alt="">
                                            <h2 style="margin-top: 0;color:#55518a">Universidades</h2>
                                            <p>
                                                Agregue o edite las Universidades
                                            </p>
                                        </div>
                                    </div>

                                    <!-- hotel search -->
                                    <div class="bhoechie-tab-content">
                                        <div class="text-center">
                                            <img src="./assets/img/icons/comunidad1.svg" class="card-img-top img-config"alt="">
                                            <h2 style="margin-top: 0;color:#55518a">Procecdencias de la comunidad</h2>
                                            <p>
                                                Agregue o edite las procedencias principales del sistema
                                            </p>
                                        </div>
                                        <div>
                                            <!-- Formulario de datos-->
                                        </div>
                                    </div>
                                    <div class="bhoechie-tab-content">
                                        <div class="text-center">
                                            <img src="./assets/img/icons/home1.svg" class="card-img-top img-config"alt="">
                                            <h2 style="margin-top: 0;color:#55518a">Aulas de la Facultad</h2>
                                            <p>
                                                Agregue o edite las aulas disponibles para impartir cursos de forma prescencial
                                            </p>
                                        </div>
                                    </div>
                                    <div class="bhoechie-tab-content">
                                        <div class="text-center">
                                            <img src="./assets/img/icons/seleccion1.svg" class="card-img-top img-config"alt="">
                                            <h2 style="margin-top: 0;color:#55518a">Tipo de Documentos</h2>
                                            <p>
                                                Agregue o edite las documentos que podra solicitar al momento de abrir un grupo
                                            </p>
                                        </div>
                                    </div>
                                    <div class="bhoechie-tab-content">
                                        <div class="text-center">
                                            <img src="./assets/img/icons/constancia2.svg" class="card-img-top img-config"alt="">
                                            <h2 style="margin-top: 0;color:#55518a">Configuración de Constancias</h2>
                                            <p>
                                                Modifique el estilo de las constancia que se le entregaran al alumno y al profesor
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </section>
            </div>
            <!--FIN contenido dinamico-->
            <?php include("./view/includes/footer.php");?>
        </div>
    </div>
</div>

<!-- modal zone-->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <label for="nombre">Nombre</label>
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

<!-- modal zone-->

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
</body>
</html>