<!doctype html>
<html lang="en">
<?php
//Abrir para agregar los includes
$tittle = "Ficha de Inscripción";
include("./view/includes/header.php");
?>

<body class="body-home">
    <div class="d-flex">
        <div class="w-100">
            <?php include("./view/includes/alumno-navbar.php"); ?>
            <div id="content">
                <!--Inicio contenido dinamico-->
                <div class="componet-dinamico bg-grey">
                    <!--INICIA SECCION DEL BANNER-->
                    <section class="container py3 bg-grey">
                        <div class="row justify-content-center mt-4">
                            <div class="col-md-12 text-center">
                                <div class="img" style="background-image: url(https://www.gruponestoro.com/wp-content/uploads/2019/01/Dise%C3%B1o-Banner-Nestoro-CURSOS-Enero-2019.png); ">
                                    <div class="overlay"></div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <div class="mx-auto">
                                                    <h4 class="text-light text-left"><strong>Iniciación al Cómputo I</strong><a href="#"><img src="./assets/img/icons/edit3.svg" class="mr-2 mb-1" width="40px"></a></h4>
                                                    <h5 class="text-secondary text-left">Inscripción realizada el 22 de Febrero de 2021</h5>
                                                    <h5 class="text-secondary text-left">Concluida el 22 de Agosto de 2021</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card-body">
                                                <div class="mx-auto">
                                                    <h5 class="text-light text-left"><strong>Inscripción:</strong></h5>
                                                    <h4 class="text-warning text-left"><strong>PENDIENTE</strong></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--FINALIZA SECCION DEL BANNER-->
                    <!-- INICIA SECCIÓN DE DETALLES DEL CURSO -->
                    <section class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card mt-3" style="width: 18rem; border-radius: 20px">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h5 class="card-title"><strong>Detalles del Curso:</strong></h5>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <p class="mb-0">Grupo: <span class="font-weight-bold">2210 Páginas Web</span></p>
                                                <p class="mt-0 mb-0">Profesor: <span class="font-weight-bold">Juan Pérez Sánchez</span></p>
                                                <p class="mt-0 mb-0">Departamento de Cómputo</p>
                                                <p class="mt-0 mb-0">Generación: <span class="font-weight-bold">5°</span></p>
                                                <p class="mt-0 mb-0">Modalidad: <span class="font-weight-bold">Mixto</span></p>
                                                <p class="mt-0">Semestre: <span class="font-weight-bold">2021-II</span></p>
                                            </div>
                                            <div class="col-lg-4">
                                                <h6 class="mb-3"><strong>Información del Costo:</strong></h6>
                                                <p class="mb-0">Costo: <span class="font-weight-bold">$950</span> pesos</p>
                                                <p class="mt-0 mb-0">*Descuento aplicado: <span class="font-weight-bold">$500</span> pesos</p>
                                                <p class="mt-0 mb-0">Total: <span class="font-weight-bold">$450</span> pesos</p>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <img src="./assets/img/icons/timer3.svg" class="mt-0" width="50px" alt="">
                                                    </div>
                                                    <div class="col-lg-10">
                                                        <p class="mb-0 "> Límite de Inscripciones: <span class="font-weight-bold">15 de Julio de 2021</span></p>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <img src="./assets/img/icons/cross-calendar3.svg" class="mt-3" width="50px" alt="">
                                                    </div>
                                                    <div class="col-lg-10">
                                                        <p class="mb-0"> Este curso iniciará el día: <span class="font-weight-bold">15 de Junio de 2021</span></p>
                                                        <p>Y finalizará el día: <span class="font-weight-bold">15 de Agosto de 2021</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- FINALIZA SECCIÓN DE DETALLES DEL CURSO -->
                    <!-- INICIA SECCIÓN DE DOCUMENTOS REQUERIDOS -->
                    <section class="container py-3 bg-grey">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card" style="width: 18rem; border-radius: 20px">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h5 class="card-title"><strong>Documentos Requeridos</strong></h5>
                                                <p>Sube aquí los documentos solicitados del curso</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="alert alert-success mb-0" role="alert">
                                                    <p class="font-weight-bold mt-1 mb-0">Credencial Escolar</p>
                                                </div>
                                                <div class="card mt-0">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <input type="file" class="custom-file-input" id="preview" disabled>
                                                                <label class="custom-file-label" data-browse="Buscar">credencial.pdf</label>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col-lg-8"></div>
                                                            <div class="col-lg-2">
                                                                <button class="btn btn-primary w-100">Quitar</button>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <button class="btn btn-primary w-100">Visualizar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-lg-12">
                                                <div class="alert alert-warning mb-0" role="alert">
                                                    <p class="font-weight-bold mt-1 mb-0">Baucher de Pago</p>
                                                </div>
                                                <div class="card mt-0">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <input type="file" class="custom-file-input" id="preview" accept="">
                                                                <label class="custom-file-label" for="preview" data-browse="Buscar">Selecciona un archivo</label>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col-lg-8"></div>
                                                            <div class="col-lg-2">
                                                                <button class="btn btn-primary w-100">Quitar</button>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <button class="btn btn-primary w-100">Visualizar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-lg-12">
                                                <div class="alert alert-danger mb-0" role="alert">
                                                    <p class="font-weight-bold mt-1 mb-0">Formato de Inscripción</p>
                                                </div>
                                                <div class="card mt-0">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <input type="file" class="custom-file-input" id="preview" accept="">
                                                                <label class="custom-file-label" for="preview" data-browse="Buscar">Selecciona un archivo</label>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col-lg-8"></div>
                                                            <div class="col-lg-2">
                                                                <button class="btn btn-primary w-100">Quitar</button>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <button class="btn btn-primary w-100">Visualizar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- FINALIZA SECCIÓN DE DOCUMENTOS REQUERIDOS -->
                    <section class="container py-3 mb-3 bg-grey">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card" style="width: 18rem; border-radius: 20px">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>Estado de mi Inscripción</strong></h5>
                                        <div class="alert alert-warning" role="alert">
                                            <h6 class="card-subtitle mb-2"><strong>Documentos Pendientes</strong></h6>
                                            <p>Sube los documentos que se te solicitan antes de la fecha 15 - 08 -2021</p>
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
    <!-- script_js -->
</body>

</html>