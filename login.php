<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SICEP - Login</title>

    <!-- Custom fonts for this template-->
    <link href="./assets/style/all.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="./assets/style/sb-admin-2.css" rel="stylesheet">
    <link rel="stylesheet" href="./app/assets/css/estilos-login.css">

    <style>
        .toggle_radio{
            position: relative;
            background: #0d70c9;
            margin: 1rem auto;
            overflow: hidden;
            padding: 0 !important;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 50px;
            position: relative;
            height: 40px;
            width: auto;
        }
        .toggle_radio > * {
            float: left;
        }
        .toggle_radio input[type=radio]{
            display: none;
            /*position: fixed;*/
        }
        .toggle_radio label{
            font: 1.5rem "Source Sans Pro";
            color: #ffffff;
            z-index: 0;
            z-index: 0;
            display: block;
            width: 100px;
            height: 20px;
            margin: 3px 3px;
            -webkit-border-radius: 50px;
            -moz-border-radius: 50px;
            border-radius: 50px;
            cursor: pointer;
            z-index: 1;
            text-align: center;
            /*margin: 0 2px;*/
            /*background: #145d8b;*/ /*make it blue*/
        }
        .toggle_option_slider{
            /*display: none;*/
            /*background: red;*/
            width: 100px;
            height: 35px;
            position: absolute;
            top: 3px;
            -webkit-border-radius: 50px;
            -moz-border-radius: 50px;
            border-radius: 50px;
            -webkit-transition: all .4s ease;
            -moz-transition: all .4s ease;
            -o-transition: all .4s ease;
            -ms-transition: all .4s ease;
            transition: all .4s ease;
        }

        #first_toggle:checked ~ .toggle_option_slider{
            background: rgba(255,255,255,.3);
            left: 3px;
        }
        #second_toggle:checked ~ .toggle_option_slider{
            background: rgba(255,255,255,.3);
            left: 109px;
        }
        #third_toggle:checked ~ .toggle_option_slider{
            background: rgba(255,255,255,.3);
            left: 215px;
        }

        .background {
            position: absolute;
            display: block;
            top: 0;
            left: 0;
            z-index: 0;
        }
        .nav-link img {
            border-radius: 50%;
            width: 36px;
            height: 36px;
            margin: -8px 0;
            float: left;
            margin-right: 10px;
        }
    </style>
</head>

<body class="bg-gradient-primary">
<!-- Cargando modal de registro de alumno -->
<?php include_once "./modal-add-alumno.php";?>
<div class="container-fluid">
    <canvas class="background"></canvas>
    <script src="./assets/js/particles.js"></script>
    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <a href="./"><img src="./app/assets/img/logo.png" class="rounded mx-auto d-block" alt="Logo de SICEP" width="200"></a>
                                    <h1 class="h4 text-gray-900 mb-4 py-3">Iniciar Sesión</h1>
                                </div>
                                <form class="user" id="login">
                                    <div class="form-group row">
                                        <div class="col-sm-12 row mb-3">
                                                <div class="toggle_radio">
                                                    <label for="first_toggle"><p>Alumno</p></label>
                                                    <input type="radio" class="toggle_option" id="first_toggle" name="toggle_option" checked>
                                                    <label for="second_toggle"><p>Profesor</p></label>
                                                    <input type="radio" class="toggle_option" id="second_toggle" name="toggle_option">
                                                    <div class="toggle_option_slider">
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user"
                                               id="exampleInputEmail" aria-describedby="emailHelp"
                                               placeholder="Ingresa tu correo..">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                               id="exampleInputPassword" placeholder="Contraseña">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Recuerdame</label>
                                        </div>
                                    </div>
                                    <a href="index.html" class="btn btn-primary btn-user btn-block">
                                        Iniciar
                                    </a>
                                </form>
                                <hr class="py-3">
                                <div class="text-center py-3">
                                    <a class="small" href="forgot-password.html">Olvidé la contraseña</a>
                                </div>
                                <div class="text-center">
                                    <p>¿No tienes una cuenta? <br>
                                        <a class="small" href="#" data-toggle="modal" data-target="#staticBackdrop">Crear una cuenta!</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<!--  Librerias de validacion en formularios que se tienen que validar
<script language="javascript" type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.min.js"></script>
-->
<script src="./app/assets/js/jquery.validate.js"></script>
<script src="./app/assets/js/jquery.form.js"></script>
<!--  Librerias de validacion en formularios que se tienen que validar-->
<script src="./app/ajax/alumno_ajax.js"></script>

<script type="text/javascript">
    window.onload = function() {
        Particles.init({
            selector: '.background',
            color: ['#196398', '#CDAC12', '#efefef'],
            connectParticles: true,
            responsive: [{
                breakpoint: 800,
                options: {
                    color: '#196398',
                    maxParticles: 80,
                    connectParticles: false
                }
            }]
        });
    };
</script>
</body>
</html>