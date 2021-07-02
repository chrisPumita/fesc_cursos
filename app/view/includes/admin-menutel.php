<!-- RESPONSIVO TELEFONO-->

<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom navbar-static-top" role="navigation">
    <!-- Just an image -->
    <a class="navbar-brand" href="./home">
        <img src="./assets/img/logo.png" width="auto" height="40" alt="" class="d-block d-sm-block d-md-none">
    </a>

    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbarCollapse">
        <ul class="nav-link navbar-nav mr-auto">
            <li class="nav-item">
                <form class="form-inline position-relative my-2 d-inline-block w-100">
                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar curso" aria-label="Search">
                    <button class="btn btn-search position-absolute" type="submit"><img src="./assets/img/icons/buscar1.svg" width="24px"></button>
                </form>
            </li>
        </ul>
        <ul class="nav-link navbar-nav mr-rigth menu-perfil">
            <li class="nav-item  d-flex p-2 ">
                <a class="nav-link" href="#"><img src="./assets/img/icons/help3.svg" class="mr-2" width="42px"></a>
                <a class="nav-link" href="./general"><img src="./assets/img/icons/settings3.svg" class="mr-2" width="42px"></a>
            </li>
            <li class="d-block p-2 nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="./assets/img/icons/profile-user2.svg" class="mr-2" width="42px"><span class="align-middle" >Nombre Usuario</span> 
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="./perfil-admin">Mi Perfil</a>
                    <!--<a class="dropdown-item" href="account.php">Cuenta</a>-->
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../../controller/c_logout.php">Cerrar Sesión</a>
                </div>
            </li>

        </ul>
        <ul  class="nav-link navbar-nav mr-auto d-block d-sm-block d-md-none">
            <!--
                navegation Perfile
            -->
            <li class="dropdown d-block nav-item">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#"><img src="./assets/img/icons/user1.svg" class="mr-2" width="24px">USUARIO<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="./perfil-admin">Mi Perfil</a></li>
                    <!--<li><a class="dropdown-item" href="account.php">Cuenta</a></li>-->
                    <div class="dropdown-divider"></div>
                    <li><a class="dropdown-item" href="../controller/c_logout.php">Cerrar Sesión</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link navbar-nav mr-auto d-block d-sm-block d-md-none" href="./home"><i class="icon ion-md-apps mr-2 lead"></i>Principal</a>
            </li>
            <li class="nav-item">
                <a class="nav-link navbar-nav mr-auto d-block d-sm-block d-md-none" href="./lista-profesores"><img src="./assets/img/icons/teacher3.svg" class="mr-2" width="24px">Profesores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link navbar-nav mr-auto d-block d-sm-block d-md-none" href="./lista-cursos"><img src="./assets/img/icons/grado1.svg" class="mr-2 mb-1" width="24px">Cursos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link navbar-nav mr-auto d-block d-sm-block d-md-none" href="./lista-grupos"><i class="icon ion-md-rocket mr-2 lead"></i>Grupos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link navbar-nav mr-auto d-block d-sm-block d-md-none" href="./lista-alumnos"><img src="./assets/img/icons/comunidad1.svg" class="mr-2 mb-1" width="24px">Alumnos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link navbar-nav mr-auto d-block d-sm-block d-md-none" href="./lista-cuentas"><img src="./assets/img/icons/accounts1.svg" class="mr-2 mb-1" width="24px">Cuentas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link navbar-nav mr-auto d-block d-sm-block d-md-none" href="./lista-servicio-social"><i class="icon ion-ios-attach mr-2 lead"></i>Servicio Social</a>
            </li>
            <!---<li class="nav-item">
                <a class="nav-link navbar-nav mr-auto d-block d-sm-block d-md-none" href=""><i class="icon ion-md-stats mr-2 lead"></i>Reportes</a>
            </li>-->
        </ul>
    </div>
</nav>