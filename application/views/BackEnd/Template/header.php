<?php
$id_usuario = $this->session->has_userdata('id_usuario');
$nombre_usuario = $this->session->has_userdata('nombre_usuario');
$email = $this->session->has_userdata('email');
$status = $this->session->has_userdata('status_usuario');
$privilegios = $this->session->has_userdata('privilegios');

if(!$this->session->has_userdata('email')){
    redirect('Login_Adm');
}else{
    if (isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
        $email = htmlspecialchars($email);
    }

    if (isset($_SESSION['nombre_usuario'])) {
        $nombre = $_SESSION['nombre_usuario'];
        $nombre = htmlspecialchars($nombre);
    }

    if (isset($_SESSION['privilegios'])) {
        $privilegios = $_SESSION['privilegios'];
        $privilegios = htmlspecialchars($privilegios);

        if ($privilegios == 3) {
            redirect('Login_Adm/prohibido');
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Casa Rocha C-Panel</title>
    <link rel="icon" type="image/png" href="<?=base_url();?>/BackEnd/images/icon/logo.ico">

    <!-- Fontfaces CSS-->
    <link href="<?=base_url();?>BackEnd/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?=base_url();?>BackEnd/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?=base_url();?>BackEnd/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?=base_url();?>BackEnd/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?=base_url();?>BackEnd/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?=base_url();?>BackEnd/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?=base_url();?>BackEnd/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?=base_url();?>BackEnd/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?=base_url();?>BackEnd/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?=base_url();?>BackEnd/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?=base_url();?>BackEnd/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?=base_url();?>BackEnd/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?=base_url();?>BackEnd/css/theme.css" rel="stylesheet" media="all">

    <!-- Calendar-->
    <link href="<?=base_url();?>calendar/css/fullcalendar.min.css" rel="stylesheet">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="<?=base_url();?>BackEnd/index.html">
                            <img src="<?=base_url();?>BackEnd/images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="<?=base_url();?>index.php/Administrador">
                                <i class="fas fa-tachometer-alt"></i>Inicio</a>
                        </li>
                        <li>
                            <a href="<?=base_url();?>index.php/Productos">
                                <i class="fa fa-sun-o"></i>Productos</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-shopping-cart"></i>Pedidos</a>
                        </li>
                        <li>
                            <a href="<?=base_url();?>index.php/Usuarios">
                                <i class="fa fa-users"></i>Usuarios</a>
                        </li>
                        <li>
                            <a href="<?=base_url();?>index.php/Direcciones">
                                <i class="fa fa-map-marker-alt"></i>Direcciones</a>
                        </li>
                        <li>
                            <a href="<?=base_url();?>index.php/Preguntas_Frecuentes">
                                <i class="fa fa-question-circle"></i>Preguntas frecuentes</a>
                        </li>
                        <li>
                            <a href="<?=base_url();?>index.php/Contactos">
                                <i class="fa fa-phone-square"></i>Contactos</a>
                        </li>
                        <li>
                            <a href="<?=base_url();?>index.php/Categorias">
                                <i class="fa fa-tags"></i>Categorias</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fa fa-cogs"></i>Administradores</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="#">Registro</a>
                                </li>
                                <li>
                                    <a href="#">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>Metodos:</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="<?=base_url();?>index.php/Metodos_Pago">Metodos de pago</a>
                                </li>
                                <li>
                                    <a href="<?=base_url();?>index.php/Metodos_Envio">Metodos de envío</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?=base_url();?>index.php/Calendario">
                                <i class="fa fa-calendar-plus-o"></i>Calendario</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="<?=base_url();?>index.php/Administrador">
                    <p>Casa Rocha</p>
                    <!--img src="<?=base_url();?>BackEnd/images/icon/logo.png" alt="Casa Rocha"/>-->
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="<?=base_url();?>index.php/Administrador">
                                <i class="fas fa-tachometer-alt"></i>Inicio</a>
                        </li>
                        <li>
                            <a href="<?=base_url();?>index.php/Productos">
                                <i class="fa fa-sun-o"></i>Productos</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-shopping-cart"></i>Pedidos</a>
                        </li>
                        <li>
                            <a href="<?=base_url();?>index.php/Usuario">
                                <i class="fa fa-users"></i>Usuarios</a>
                        </li>
                        <li>
                            <a href="<?=base_url();?>index.php/Direcciones">
                                <i class="fa fa-map-marker-alt"></i>Direcciones</a>
                        </li>
                        <li>
                            <a href="<?=base_url();?>index.php/Preguntas_Frecuentes">
                                <i class="fa fa-question-circle"></i>Preguntas Frecuentes</a>
                        </li>
                        <li>
                            <a href="<?=base_url();?>index.php/Contactos">
                                <i class="fa fa-phone-square"></i>Contactos</a>
                        </li>
                        <li>
                            <a href="<?=base_url();?>index.php/Categorias">
                                <i class="fa fa-tags"></i>Categorias</a>
                        </li>
                        <li class="#">
                            <a class="js-arrow" href="#">
                                <i class="fa fa-cogs"></i>Administradores</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="#">Registro</a>
                                </li>
                                <li>
                                    <a href="#">Recuperar contraseña</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>Métodos:</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="<?=base_url();?>index.php/Metodos_Pago">Métodos de pago</a>
                                </li>
                                <li>
                                    <a href="<?=base_url();?>index.php/Metodos_Envio">Métodos de envío</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?=base_url();?>index.php/Calendario">
                                <i class="fa fa-calendar-plus-o"></i>Calendario</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="<?=base_url();?>BackEnd/images/icon/avatar-001.png"/>
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo "<p>$nombre</p>";?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="<?=base_url();?>BackEnd/images/icon/avatar-001.png" alt="<?php echo $nombre?>" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo "$email";?></a>
                                                    </h5>
                                                    <span class="email"><?php if ($privilegios == 1) {
                                                        echo "Super Administrador";
                                                    }else if($privilegios == 2){
                                                        echo "Administrador";
                                                    };?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Mi cuenta</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="<?=base_url();?>index.php/Login_Adm/logout">
                                                    <i class="zmdi zmdi-power"></i>Salir</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
    <!-- HEADER DESKTOP-->

    <!-- Jquery JS-->
    <script src="<?=base_url();?>BackEnd/vendor/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap JS-->

    <script src="<?=base_url();?>BackEnd/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?=base_url();?>BackEnd/vendor/bootstrap-4.1/bootstrap.min.js"></script>

    <!-- Vendor JS -->
    <script src="<?=base_url();?>BackEnd/vendor/slick/slick.min.js"></script>
    <script src="<?=base_url();?>BackEnd/vendor/wow/wow.min.js"></script>
    <script src="<?=base_url();?>BackEnd/vendor/animsition/animsition.min.js"></script>
    <script src="<?=base_url();?>BackEnd/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?=base_url();?>BackEnd/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?=base_url();?>BackEnd/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?=base_url();?>BackEnd/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?=base_url();?>BackEnd/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?=base_url();?>BackEnd/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?=base_url();?>BackEnd/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?=base_url();?>BackEnd/js/main.js"></script>

    <!--Calendar-->
    <script type="text/javascript" src="<?=base_url();?>calendar/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>calendar/js/moment.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>calendar/js/fullcalendar.min.js"></script>
</body>

</html>
<!-- end document-->
