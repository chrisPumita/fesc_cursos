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
    <link href="./plantilla/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="./plantilla/css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="container-fluid">

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
                                    <img src="./app/assets/img/logo.png" class="rounded mx-auto d-block" alt="Logo de SICEP" width="200">
                                    <h1 class="h4 text-gray-900 mb-4 py-3">Iniciar Sesión</h1>
                                </div>
                                <form class="user" id="login">
                                    <div class="form-group row">
                                        <div class="col-sm-12 row mb-3">
                                            <div class="col-sm-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked="">
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        Soy alumno
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                        Soy un Profesor
                                                    </label>
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


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h2>Registrate</h2>
                <p>Registrate para poder inscribirte a los cursos que ofrece las FES-Cuautitlán. Es facil y
                    rápido.
                </p>
                <hr>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-3">

                            <!-- Inicia el formulario-->
                            <form class="user" id="frm_crear_cuenta_alumno">
                                <div class="form-group row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Nombre">
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Primer Apellido">
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Segundo Apellido">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="tel" class="form-control form-control-user" id="exampleInputEmail" placeholder="Teléfono">
                                    </div>
                                    <div class="col-sm-6 row mb-3">
                                        <div class="col-sm-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Hombre
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                <label class="form-check-label" for="exampleRadios2">
                                                    Mujer
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Correo Electrónico">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <label for="exampleFormControlSelect2">Estado</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="estados">
                                            <!--AJAX result DB -->
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <label for="exampleFormControlSelect2">Municipio</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="municipios">
                                            <!--AJAX result DB -->
                                        </select>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <label for="exampleFormControlSelect2">Procedencia</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="municipios">
                                            <option>Comunidad FESC</option>
                                            <option>Comunidad UNAM</option>
                                            <option>Ex-Alumno</option>
                                            <option>Comunidad Externa</option>
                                            <option>Otro</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <label for="exampleFormControlSelect2">Universidad</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="universidades">
                                            <!--AJAX result DB -->
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-user d-none" id="nombre_u" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="carrera" placeholder="Carrera/Profesion actual">

                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="matricula" placeholder="No de Cuenta/Matricula">
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <div class="col-sm-8 mb-3 mb-sm-0">
                                        <p>Al hacer clic en "Registrarte", aceptas nuestras Condiciones,
                                            la Política de datos y la Política de cookies.</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <a href="login.html" class="btn btn-primary btn-user btn-block">
                                            Register Account
                                        </a>
                                    </div>
                                </div>
                            </form>
                            <!-- Inicia el formulario-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="./plantilla/vendor/jquery/jquery.min.js"></script>
<script src="./plantilla/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="./plantilla/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="./plantilla/js/sb-admin-2.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="./app/ajax/alumno_ajax.js"></script>
</body>

</html>