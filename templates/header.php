<?php
if ($_SESSION) {
    $estaEnAreaAdministrador = $_SERVER['SCRIPT_NAME'] == '/CodoACodo-Integrador/area-administrador.php';
    $estaEnAreaOrador = $_SERVER['SCRIPT_NAME'] == '/CodoACodo-Integrador/area-orador.php';
    $estaEnAreaCliente = $_SERVER['SCRIPT_NAME'] == '/CodoACodo-Integrador/area-cliente.php';

    $esAdministrador = $_SESSION['tipoUsuario'] == 'Administrador';
    $esOrador = $_SESSION['tipoUsuario'] == 'Orador';
    $esCliente = $_SESSION['tipoUsuario']  == 'Cliente';

    $nombreUsuario = $_SESSION['nombre'] . ' ' . $_SESSION['apellido'];
}
?>

<header>
    <!-- Navbar principal -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand text-white ms-5" href="index.php">
            <img src="https://cdn.nicolascalcagno.dev/nicolascalcagno/shared/conferencia-buenos-aires/images/general/codoacodo.webp" alt="Logo" width="100" height="60" class="d-inline-block align-text-center">
            Congreso Buenos Aires
        </a>

        <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
            <div class="mx-auto ">
                <ul class="navbar-nav">
                    <li class="nav-item <?php if ($_SERVER['SCRIPT_NAME'] == "/CodoACodo-Integrador/index.php") { ?>
                                            border-bottom border-white<?php } ?>">
                        <a class="nav-link <?php if ($_SERVER['SCRIPT_NAME'] == "/CodoACodo-Integrador/index.php") { ?> active fw-bold <?php } ?>" aria-current="page" href="index.php">La conferencia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php#oradores">Los oradores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php#lugarYFecha">El lugar y la fecha</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php#convierteteEnOrador">Conviértete en orador</a>
                    </li>
                    <li class="nav-item <?php if ($_SERVER['SCRIPT_NAME'] == "/CodoACodo-Integrador/tickets.php") { ?>
                                            border-bottom border-info<?php } ?>">
                        <a class="nav-link <?php if ($_SERVER['SCRIPT_NAME'] == "/CodoACodo-Integrador/tickets.php") { ?>
                             fw-bold text-info<?php } ?>" aria-current="page" id="navlink-tickets" href="tickets.php">Comprar tickets</a>
                    </li>
                </ul>
            </div>
            <?php if (!$_SESSION) { ?>
                <div class="navbar-nav border border-white me-4">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="login.php" id="navlink-acceder">Acceder</a>
                        </li>
                    </ul>
                </div>
            <?php } ?>
        </div>
    </nav>
    <!-- FIN Navbar principal -->

    <!-- Navbar usuario -->
    <?php
    if ($_SESSION) {
    ?>
        <nav class="<?php if ($esAdministrador) { ?>bg-danger<?php } else if ($esOrador) { ?>bg-warning<?php } else if ($esCliente) { ?>bg-primary<?php } ?>" id="navbarUsuario">
            <div class="d-flex justify-content-between align-items-center"">
                <!-- Elementos izquierda -->
                <div class=" d-flex align-items-center">
                <?php if ($esAdministrador) { ?>
                    <a href="area-administrador.php" class="my-0 px-3 <?php if ($estaEnAreaAdministrador) { ?> py-2 bg-white text-dark fw-bold<?php } else { ?>text-white<?php } ?>">
                        Area administrador
                    </a>
                <?php } else if ($esOrador) { ?>
                    <a href="area-orador.php" class="my-0 px-3 <?php if ($estaEnAreaOrador) { ?> py-2 bg-white text-dark fw-bold<?php } else { ?>text-white<?php } ?>">
                        Area orador
                    </a>
                <?php } else if ($esCliente) { ?>
                    <a href="area-cliente.php" class="my-0 px-3 <?php if ($estaEnAreaCliente) { ?> py-2 bg-white text-dark fw-bold<?php } else { ?>text-white<?php } ?>">
                        Area cliente
                    </a>
                <?php } ?>
            </div>
            <!-- Elementos derecha -->
            <div class="d-flex align-items-center text-bg-light h-100 pe-3">
                <img src="<?php echo $_SESSION['avatar']; ?>" class="h-100">
                <div class="dropdown">
                    <a class="btn btn-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="text-black"><?php echo $nombreUsuario ?></span>
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="backend/cerrar-sesion.php">Cerrar Sesión</a></li>
                    </ul>
                </div>
            </div>
            </div>
        </nav>
    <?php
    }
    ?>
    <!-- FIN Navbar usuario -->

</header>