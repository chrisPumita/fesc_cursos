<!-- RESPONSIVO TELEFONO-->
<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom navbar-static-top" role="navigation">
    <!-- Just an image -->
    <a class="navbar-brand" href="./home">
    <img src="./assets/img/logo.png" width="auto" height="30" alt="" class="d-block d-sm-block">
    </a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbarCollapse">
        <ul class="nav-link navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Cursos
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Ofertados</a>
                    <a class="dropdown-item" href="#">Todos los Cursos</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Mis Cursos</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Mis Profesores</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Inscripciones
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Ficha de Inscripción</a>
                    <a class="dropdown-item" href="#">Documentación</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Solicitudes</a>
                    <a class="dropdown-item" href="#">Constancias</a>
                </div>
            </li>
            <!-- Only Mobile -->
            <li class="nav-item dropdown d-block d-sm-block d-md-none">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Nombre User
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Mi perfil</a>
                    <a class="dropdown-item" href="#">Servicio Social</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Ayuda</a>
                    <a class="dropdown-item" href="#">Cerrar Sesión</a>
                </div>
            </li>
        </ul>
        <ul class="nav-link navbar-nav mr-rigth d-none d-sm-none d-md-block">
            <li class="d-block p-2 nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="" src="./assets/img/icons/profile-user2.svg" class="mr-2" width="42px">
                <span class="align-middle" >Nombre Usuario</span> 
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="./perfil-admin">Mi Perfil</a>
                    <a class="dropdown-item" href="./perfil-admin">Servicio Social</a>
                    <!--<a class="dropdown-item" href="account.php">Cuenta</a>-->
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../../controller/c_logout.php">Ayuda</a>
                    <a class="dropdown-item" href="../../controller/c_logout.php">Cerrar Sesión</a>
                </div>
            </li>
        </ul>
    </div>
</nav>