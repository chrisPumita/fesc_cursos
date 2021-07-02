<!doctype html>
<html lang="en">
    <?php
        //Abrir para agregar los includes
        $tittle = "Perfil";
        include("./view/includes/header.php");
        ?>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Raleway:400,200,300,800);
        figure.snip0015 {
        font-family: 'Raleway', Arial, sans-serif;
        color: #fff;
        position: relative;
        overflow: hidden;
        margin: 10px;
        width: 140px;
        height: 140px;
        background: #000000;
        text-align: center;
        border-radius: 50%;
        }
        figure.snip0015 * {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        }
        figure.snip0015 img {
        opacity: 1;
        width: 140px;
        height: 140px;
        border-radius: 50%;
        -webkit-transition: opacity 0.35s;
        transition: opacity 0.35s;
        }
        figure.snip0015 figcaption {
        position: absolute;
        bottom: 0;
        left: 0;
        padding: 3em 3em;
        width: 100%;
        height: 100%;
        }
        figure.snip0015 figcaption::before {
        position: absolute;
        top: 50%;
        right: 30px;
        bottom: 50%;
        left: 30px;
        border-top: 1px solid rgba(255, 255, 255, 0.8);
        border-bottom: 1px solid rgba(255, 255, 255, 0.8);
        content: '';
        opacity: 0;
        background-color: #ffffff;
        -webkit-transition: all 0.4s;
        transition: all 0.4s;
        -webkit-transition-delay: 0.6s;
        transition-delay: 0.6s;
        }
        figure.snip0015 h2,
        figure.snip0015 p {
        margin: 0 0 5px;
        opacity: 0;
        -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
        transition: opacity 0.35s,-webkit-transform 0.35s,-moz-transform 0.35s,-o-transform 0.35s,transform 0.35s;
        }
        figure.snip0015 h2 {
        word-spacing: -0.15em;
        font-weight: 300;
        text-transform: uppercase;
        -webkit-transform: translate3d(0%, 50%, 0);
        transform: translate3d(0%, 50%, 0);
        -webkit-transition-delay: 0.3s;
        transition-delay: 0.3s;
        }
        figure.snip0015 h2 span {
        font-weight: 800;
        }
        figure.snip0015 p {
        font-weight: 600	;
        -webkit-transition-delay: 0s;
        transition-delay: 0s;
        }
        figure.snip0015 a {
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        position: absolute;
        color: #ffffff;
        }
        figure.snip0015:hover img {
        opacity: 0.35;
        }
        figure.snip0015:hover figcaption h2 {
        opacity: 1;
        -webkit-transform: translate3d(0%, 0%, 0);
        transform: translate3d(0%, 0%, 0);
        -webkit-transition-delay: 0.3s;
        transition-delay: 0.3s;
        }
        figure.snip0015:hover figcaption p {
        opacity: 0.9;
        -webkit-transition-delay: 0.6s;
        transition-delay: 0.6s;
        }
        figure.snip0015:hover figcaption::before {
        background: rgba(255, 255, 255, 0);
        top: 30px;
        bottom: 30px;
        opacity: 1;
        -webkit-transition-delay: 0s;
        transition-delay: 0s;
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
                        <!--INICIA ENCABEZADO DETALLES USUARIO BIENVENIDA-->
                        <section class="container bg-grey py-2">
                            <div class="row">
                                <div class="col-lg-12">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb bg-grey">
                                            <li class="breadcrumb-item"><a href="./home">Inicio</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Perfil</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-lg-12">
                                    <h2><strong>Lic. Marco Antonio Solis Olivares</strong></h2>
                                </div>
                            </div>
                            <div class="row py-1">
                                <div class="col-lg-12">
                                    <div class="callout callout-second">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-9">
                                                    <h4>Bienvenido a tu perfil</h4>
                                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit facere illo quae sint, quaerat pariatur odio labore. Atque soluta expedita similique quod reiciendis fuga ad aperiam, voluptatibus esse omnis dolorum?z</p>
                                                </div>
                                                <div class="col-lg-3">
                                                    <figure class="snip0015">
                                                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample38.jpg" alt="sample38"/>
                                                        <figcaption>
                                                            <p><span>Cambiar foto</span></p>
                                                            <a href="#" data-toggle="modal" data-target="#cambiofotoperfil"></a>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- FIN ENCABEZADO DETALLES USUARIO BIENVENIDA -->
                        <!--INICIA FORMULARIO EDICION-->
                        <section class="container py-2 bg-grey">
                            <div class="container py-2 bg-white">
                                <form class="user needs-validation" id="frm-det-profesor" role="form" autocomplete="off" novalidate>
                                    <div class="form-group row">
                                        <div class="col-lg-3 mt-3 mb-1 text-right">
                                            <label class="col-form-label">Abreviación:</label>
                                        </div>
                                        <div class="col-lg-8 mt-3 mb-1 ">
                                            <select class="form-control" id="list-abreviatura">
                                                <option>Lic.</option>
                                                <option>Mto.</option>
                                                <option>Dr.</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 mb-1 text-right">
                                            <label class="col-form-label">Nombre(s):</label>
                                        </div>
                                        <div class="col-lg-8 mb-1">
                                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre(s)" aria-label="Nombres">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 mb-1 text-right">
                                            <label class="col-form-label">Primer Apellido:</label>
                                        </div>
                                        <div class="col-lg-8 mb-1">
                                            <input type="text" class="form-control" id="primerap" name="primerap" placeholder="Primer Apellido" aria-label="Primer Apellido">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 mb-1 text-right">
                                            <label class="col-form-label">Segundo Apellido:</label>
                                        </div>
                                        <div class="col-lg-8 mb-1">
                                            <input type="text" class="form-control" id="segundoap" name="segudoap" placeholder="Segundo Apellido" aria-label="Segundo Apellido">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 mb-1 text-right">
                                            <label class="col-form-label">No. de Trabajador:</label>
                                        </div>
                                        <div class="col-lg-8 mb-1">
                                            <input type="text" class="form-control" id="numtrab" name="numtrab" placeholder="Número de Trabajador" aria-label="No. Trabajador">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 mb-1 text-right">
                                            <label class="col-form-label">Teléfono:</label>
                                        </div>
                                        <div class="col-lg-8 mb-1">
                                            <input type="text" class="form-control" id="tel" name="tel" placeholder="5555555555" aria-label="Telefono">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 mb-1 text-right">
                                            <label class="col-form-label">Sexo:</label>
                                        </div>
                                        <div class="col-lg-9 mb-1">
                                            <div class="custom-control custom-radio custom-control-inline mt-2">
                                                <input type="radio" id="rbnHombre" name="sexo" class="custom-control-input" value="0" checked>
                                                <label class="custom-control-label" for="rbnHombre">Hombre</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline mt-2">
                                                <input type="radio" id="rbnMujer" name="sexo" class="custom-control-input" value="1">
                                                <label class="custom-control-label" for="rbnMujer">Mujer</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 mb-1 text-right">
                                            <label class="col-form-label">Correo Electrónico:</label>
                                        </div>
                                        <div class="col-lg-8 mb-1">
                                            <input type="text" class="form-control" id="correo" name="correo" placeholder="ejemplo@dominio.com" aria-label="Correo">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 mb-1 text-right">
                                            <label class="col-form-label">Departamento:</label>
                                        </div>
                                        <div class="col-lg-8 mb-1">
                                            <select class="form-control" id="list-depto">
                                                <option>Informática</option>
                                                <option>Matemáticas</option>
                                                <option>Cómputo</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-8"></div>
                                        <div class="col-lg-3 text-align-right">
                                            <button class="btn btn-primary w-100 aling-self-center mt-2 mb-3 ml-5">Modificar mis datos</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </section>
                        <!-- FIN FORMULARIO EDICION-->                        
                        <!-- SECCION DE ACCESOS RAPIDOS -->
                        <section class="container bg-grey">
                            <div class="row">
                                <div class="col-lg-12 py-3">
                                    <h3>Accesos Rápidos</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <h5 class="card-title font-weight-bold">Cambiar Contraseña</h5>
                                            <p class="card-text text-muted">En este apartado puede cambiar su contraseña actual.</p>
                                            <a href="#" data-toggle="modal" data-target="#cambiopassword">
                                            <button class="btn btn-primary w-100 aling-self-center mt-3">Cambiar</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <h5 class="card-title font-weight-bold">Cambiar Clave de Confirmación</h5>
                                            <p class="card-text text-muted">En este apartado puede cambiar su clave de confirmación actual.</p>
                                            <a href="#" data-toggle="modal" data-target="#cambioclaveconfirm">
                                            <button class="btn btn-primary w-100 aling-self-center mt-3">Cambiar</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <h5 class="card-title font-weight-bold">Generar Llave Confidencial</h5>
                                            <p class="card-text text-muted">En este apartado puede generar su llave confidencial.</p>
                                            <a href="#" data-toggle="modal" data-target="#generadorllave">
                                            <button class="btn btn-primary w-100 aling-self-center mt-3">Generar</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <h5 class="card-title font-weight-bold">Cambiar Firma Digital</h5>
                                            <p class="card-text text-muted">En este apartado puede cambiar su firma digital.</p>
                                            <a href="#" data-toggle="modal" data-target="#firmadigital">
                                            <button class="btn btn-primary w-100 aling-self-center mt-3">Cambiar</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- FIN DE SECCION ACCESOS RAPIDOS -->
                    </div>
                    <!--FIN contenido dinamico-->
                    <?php include("./view/includes/footer.php"); ?>
                </div>
            </div>
            <?php include "modal-cambiarpassword-admin.php"; ?>
            <?php include "modal-cambiarclaveconfir-admin.php"; ?>
            <?php include "modal-ver-horario.php"; ?>
            <?php include "modal-fotoperfil-admin.php"; ?>
            <?php include "modal-generadorllave-admin.php"; ?>
            <?php include "modal-firmadigital-admin.php"; ?>
        </div>
    </body>
</html>