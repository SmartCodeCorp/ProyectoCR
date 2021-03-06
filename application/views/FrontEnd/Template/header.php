<?php
$id_usuario = $this->session->has_userdata('id_usuario');
$email = $this->session->has_userdata('email');
$status = $this->session->has_userdata('status_usuario');
$privilegios = $this->session->has_userdata('privilegios');

if(!$this->session->has_userdata('email')){
    
}else{
    if (isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
        $email = htmlspecialchars($email);
    }
}
?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
<!-- Mobile Specific Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Favicon-->
<link rel="icon" type="image/png" href="<?=base_url();?>/FrontEnd/Template/img/icons/logoR.ico">
<!-- Author Meta -->
<meta name="author" content="colorlib">
<!-- Meta Description -->
<meta name="description" content="">
<!-- Meta Keyword -->
<meta name="keywords" content="">
<!-- meta character set -->
<meta charset="UTF-8">
<!-- Site Title -->
<title>Casa Rocha</title>

<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
<!--
CSS
============================================= -->

<link rel="stylesheet" href="<?=base_url();?>/FrontEnd/Template/css/linearicons.css">
<link rel="stylesheet" href="<?=base_url();?>/FrontEnd/Template/css/style.css">
<link rel="stylesheet" href="<?=base_url();?>/FrontEnd/Template/css/font-awesome.min.css">
<link rel="stylesheet" href="<?=base_url();?>/FrontEnd/Template/css/bootstrap.css">
<link rel="stylesheet" href="<?=base_url();?>/FrontEnd/Template/css/magnific-popup.css">
<link rel="stylesheet" href="<?=base_url();?>/FrontEnd/Template/css/jquery-ui.css">
<link rel="stylesheet" href="<?=base_url();?>/FrontEnd/Template/css/nice-select.css">
<link rel="stylesheet" href="<?=base_url();?>/FrontEnd/Template/css/animate.min.css">
<link rel="stylesheet" href="<?=base_url();?>/FrontEnd/Template/css/owl.carousel.css">
<link rel="stylesheet" href="<?=base_url();?>/FrontEnd/Template/css/jquery-ui.css">
<link rel="stylesheet" href="<?=base_url();?>/FrontEnd/Template/css/main.css">
<link rel="stylesheet" href="<?=base_url();?>/FrontEnd/Template/scss/style.css">

<script src="<?=base_url();?>js/jquery.min.js"></script>
<script src="<?=base_url();?>sweetalert2/dist/sweetalert2.all.min.js"></script>
<script src="https://unpkg.com/promise-polyfill"></script>
<script src="<?=base_url();?>sweetalert2/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" href="<?=base_url();?>sweetalert2/dist/sweetalert2.min.css">

	<!--Calendar-->
	<link href="<?=base_url();?>calendar/css/fullcalendar.min.css" rel="stylesheet">
<script type="text/javascript" src="<?=base_url();?>calendar/js/jquery.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>calendar/js/moment.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>calendar/js/fullcalendar.min.js"></script>

<!--Plugin jQuery Ketchup-->
<link href="<?=base_url();?>FrontEnd/ketchup/css/jquery.ketchup.css" rel="stylesheet" media="screen" type="text/css" />
<link rel="stylesheet" type="text/css" media="screen" href="<?=base_url();?>FrontEnd/ketchup/css/jquery.ketchup.css" />

<script src="<?=base_url();?>FrontEnd/ketchup/js/jquery.js" type="text/javascript"></script>
<script src="<?=base_url();?>FrontEnd/ketchup/js/jquery.ketchup.js" type="text/javascript"></script>
<script src="<?=base_url();?>FrontEnd/ketchup/js/jquery.ketchup.validations.js" type="text/javascript"></script>
<script src="<?=base_url();?>FrontEnd/ketchup/js/jquery.ketchup.helpers.js" type="text/javascript"></script>
<script src="<?=base_url();?>FrontEnd/ketchup/js/scaffold.js" type="text/javascript"></script>

<script type="text/javascript" src="<?=base_url();?>FrontEnd/ketchup/js/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>FrontEnd/ketchup/js/jquery.ketchup.all.min.js"></script>

</head>
<body>
<header id="header">
	<div class="header-top">
		<div class="container">
  		<div class="row align-items-center">
  			<div class="col-lg-6 col-sm-6 col-4 header-top-left">
          <?php if($this->session->has_userdata('email')){?>
            <a href="<?=base_url();?>index.php/Login_User/salir"><span class="Icons lnr-user">
            </span> <span class="text"><span class="text">Salir</span></span></a>
            <span><?= $email; ?></span>
          <?php }else{ ?>
  				<a href="<?=base_url();?>index.php/Login_User"><span class="Icons lnr-user"></span> <span class="text"><span class="text">Iniciar Sesión</span></span></a>
          <?php }?>
  			</div>
        <div class="col-lg-6 col-sm-6 col-8 header-top-right">
          <?php if($total_items=$this->cart->total_items()):?> 
              <li class="primar-btn text-uppercase">
                <?=anchor('Producto/carrito', 'Ver mi carrito '.$total_items);?>
                </li> 
              <img src="<?=base_url();?>/FrontEnd/Template/img/shoppingcart.png" height="8%" width="8%">
            <?php endif;?>
  			</div>
  		</div>
		</div>
</div>
<div class="container main-menu">
	<div class="row align-items-center justify-content-between d-flex">

		<div id="log" class="hidden-xs hidden-sm">
			<img width="50%" style="margin-left: 15px"  src="<?=base_url();?>FrontEnd/Template/img/logoR.png">
		</div>

			<div id="log" class="hidden-lg hidden-md">
				<img width="30%"  style="margin-left: 15px"  src="<?=base_url();?>FrontEnd/Template/img/logoR.png">
			</div>



      <div style="margin-left: -350px;">
         <h1 class="text-casa hidden-xs hidden-sm hidden-md">Casa Rocha</h1>
      </div>




      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="<?=base_url();?>index.php/MiControlador/index/1">Inicio</a></li>
          <li class="menu-has-children"><a href="">Productos</a>
            <ul>
              <li><a href="<?=base_url();?>index.php/MiControlador/index/3">Calentadores</a></li>
              <li><a href="<?=base_url();?>index.php/MiControlador/index/4">Lamparas</a></li>
            </ul>
          </li>
          <li class="menu-has-children"><a href="">Servicios</a>
            <ul>
              <li><a href="<?=base_url();?>index.php/MiControlador/index/5">Instalación</a></li>
              <li><a href="<?=base_url();?>index.php/MiControlador/index/6">Mantenimiento</a></li>
            </ul>
          </li>

          <li><a href="<?=base_url();?>index.php/MiControlador/index/7">Preguntas Frecuentes</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
	</div>
</div>
</header><!-- #header -->
