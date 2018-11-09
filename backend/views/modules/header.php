
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="d-flex" href="admin">
            <img src="views/images/raptor-logo.png" class="logo w-25 mr-3 mt-1" alt="logo">
            <div class="profile-div align-self-center">
                <p class="admin">Administrador</p>
                <p class="admin-name"><?php echo $_SESSION['name'] ?></p>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul id="navOptions" class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-item nav-link" href="products">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-item nav-link" href="services">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-item nav-link" href="status_of_services">Estado de Servicio</a>
                </li>
                <li class="nav-item mr-2">
                    <a class="nav-item nav-link" href="admin">Administradores</a>
                </li>
                <li class="nav-item d-flex">
                    <a class="svg-logout-div" href="exit" data-toggle="tooltip" data-placement="bottom" title="Salir" >
                        <img src="views/images/logout.svg" class="svg-logout ">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script src="views/js/header.js"></script>






