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
<link rel="stylesheet" href="sweetalert2/dist/sweetalert2.min.css">

	<!--Calendar-->
	<link href="<?=base_url();?>calendar/css/fullcalendar.min.css" rel="stylesheet">
<script type="text/javascript" src="<?=base_url();?>calendar/js/jquery.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>calendar/js/moment.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>calendar/js/fullcalendar.min.js"></script>

</head>
<body>
<header id="header">
	<div class="header-top">
		<div class="container">
  		<div class="row align-items-center">
  			<div class="col-lg-6 col-sm-6 col-4 header-top-left">
          <?php if($this->session->has_userdata('email')){?>
            <a href="#"><span class="Icons lnr-user">
            </span> <span class="text"><span class="text"><?= $email; ?></span></span></a>
          <?php }else{ ?>
  				<a href="<?=base_url();?>index.php/Login_User"><span class="Icons lnr-user"></span> <span class="text"><span class="text">Iniciar Sesión</span></span></a>
          <?php }?>
  			</div>
        <div class="col-lg-6 col-sm-6 col-8 header-top-right">
          <?php if($total_items=$this->cart->total_items()):?> 
              <li class="primar-btn text-uppercase">
                Mi Carrito <?=$total_items;?>    
                </li> 
              <img src="<?=base_url();?>/FrontEnd/Template/img/shoppingcart.png" height="8%" width="8%">
            <?php endif;?>
  			</div>
  		</div>
		</div>
</div>
</header><!-- #header -->
