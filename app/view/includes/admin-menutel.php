<!-- RESPONSIVO TELEFONO-->

<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom navbar-static-top" role="navigation">
    <!-- Just an image -->
    <a class="navbar-brand" href="./home">
        <img src="./assets/img/logo.png" width="auto" height="60" alt="" class="d-block d-sm-block d-md-none">
    </a>

    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbarCollapse">
        <ul class="nav-link navbar-nav mr-auto">
            <li class="nav-item">
                <form class="form-inline position-relative my-2 d-inline-block w-100">
                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar curso" aria-label="Search">
                    <button class="btn btn-search position-absolute " type="submit"><i class="icon ion-md-search"></i></button>
                </form>
            </li>
        </ul>
        <ul class="nav-link navbar-nav mr-rigth menu-perfil">
            <li class="nav-item  d-flex p-2 ">
                <a class="nav-link" href="#"><i class="icon ion-md-help mr-2 menu_icons lead"></i></a>
                <a class="nav-link" href="#"><i class="icon ion-md-settings mr-2 menu_icons lead"></i></a>
            </li>
            <li class="d-block p-2 nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="icon ion-md-contact mr-2 menu_icons lead align-middle"></i><span class="align-middle" >Nombre Usuario</span> 
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="./perfil-admin">Mi Perfil</a>
                    <a class="dropdown-item" href="account.php">Cuenta</a>
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
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#"><i class="icon ion-md-person mr-2 lead"></i>USUARIO<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="./perfil-admin">Mi Perfil</a></li>
                    <li><a class="dropdown-item" href="account.php">Cuenta</a></li>
                    <div class="dropdown-divider"></div>
                    <li><a class="dropdown-item" href="../controller/c_logout.php">Cerrar Sesión</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link navbar-nav mr-auto d-block d-sm-block d-md-none" href="./home"><i class="icon ion-md-apps mr-2 lead"></i>Principal</a>
            </li>
            <li class="nav-item">
                <a class="nav-link navbar-nav mr-auto d-block d-sm-block d-md-none" href="./lista-profesores"><i class="icon ion-md-school mr-2 lead"></i>Profesores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link navbar-nav mr-auto d-block d-sm-block d-md-none" href="./lista-cursos"><i class="icon ion-md-rocket mr-2 lead"></i>Cursos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link navbar-nav mr-auto d-block d-sm-block d-md-none" href="./lista-alumnos"><i class="icon ion-md-contacts mr-2 lead"></i>Alumnos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link navbar-nav mr-auto d-block d-sm-block d-md-none" href="./lista-cuentas"><i class="icon ion-md-finger-print mr-2 lead"></i>Cuentas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link navbar-nav mr-auto d-block d-sm-block d-md-none" href="./lista-servicio-social"><i class="icon ion-ios-attach mr-2 lead"></i>Servicio Social</a>
            </li>
            <li class="nav-item">
                <a class="nav-link navbar-nav mr-auto d-block d-sm-block d-md-none" href=""><i class="icon ion-md-stats mr-2 lead"></i>Reportes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link navbar-nav mr-auto d-block d-sm-block d-md-none" href="./general"><i class="icon ion-md-add mr-2 lead"></i>General</a>
            </li>
        </ul>
    </div>
</nav>