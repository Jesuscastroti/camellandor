<?php
   include 'conexionbd.php';
   session_start();
     if(!isset($_SESSION['trabajador'])){
		 session_destroy();
    header('location:index.php');
   }
   $con = mysqli_connect('localhost','root','usbw');
    mysqli_select_db($con,'bolsaempleo');
    header('Content-type: text/html; charset=UTF-8');
    $consulta="select * from trabajador where iddocumento='".$_SESSION['trabajador']."'";
	$resultado=mysqli_query($con,$consulta);
	$numregistros=mysqli_num_rows($resultado);
	while ($row=mysqli_fetch_array($resultado)) {
		$jcnombre=$row['Nombre'];
			}
	
	?>
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<link rel="stylesheet" type="text/css" href="vendor2/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts2/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts2/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor2/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor2/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor2/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor2/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor2/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor2/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css2/util.css">
	<link rel="stylesheet" type="text/css" href="css2/main.css">

		<title>INICIO- <?php echo $jcnombre ?></title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
			<link rel="stylesheet" href="css/registro.css">

		</head>
		<body>

			  <header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="iniciodepersona.php"><img src="img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="iniciodepersona.php">Inicio</a></li>
				          <li><a href="#">Blog</a></li>
                          <li><a href="#">Contacto</a></li>
                          <li><a class="ticker-btn" href="registrarhojadevida.php">Ver mi hoja de vida</a></li>
				          <li><a class="ticker-btn" href="cerrarsesion.php">Cerrar sesion</a></li>				          				          
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->


			<!-- start banner Area -->
			<section class="banner-area relative" id="home" style="height:300px ;">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
                            <h1 class="text-white" style="font-size: 40px;">
                            Bienvenido 
                            <?php echo $jcnombre; ?><br>
                            <strong>Empieza la busqueda de ofertas</strong>

							</h1>	
						</div>											
					</div>
				</div>
			</section>
			
			
								<?php
								$consulta="select * from ofertas o,empresa p where o.fk_empresa=p.nitempresa ";
								$resultado=mysqli_query($cadena,$consulta);
								$numregistros=mysqli_num_rows($resultado);
					  while ($row=mysqli_fetch_array($resultado)) {
								echo "
							
								<div class='container'>
								<div class='row justify-content-center d-flex'>
									<div class='col-lg-8 post-list'>
										<div class='single-post d-flex flex-row'>
								<div class='thumb'>
									<img src='".$row['Logoempresa']."' style='width:150px; height:150px; border-radius: 50%;' alt=''>
								</div>
								<div class='details'>
									<div class='title d-flex flex-row justify-content-between'>
										<div class='titles'>
											<a href='#'><h2> ".$row['titulooferta']."</h2></a>
											<h4>".$row['Nombrecomercial']."</h4>					
										</div>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
										<ul class='btns'>
											<li><a href='#'><span class='lnr lnr-heart'></span></a></li>
											<li><a href='postulado.php?id=".$row['nitempresa']."&id2=".$row['idoferta']."&id3=".$_SESSION['trabajador']."'>APLICAR OFERTA</a></li>
										</ul>
									</div>
									<br>
									<h6>Descripcion de la oferta:</h6><p>
									".$row['descripcionoferta'].".
									</p>
									<h5>Tipo de empleo: ".$row['tipotrabajo']."</h5>
									<p class='address'><span class='lnr lnr-map'></span> Colombia, ".$row['lugartrabajo']."</p>
									<p class='address'><span class='lnr lnr-database'></span>".$row['salario']." </p>
								</div>
							</div>
							</div>
							</div>
							</div>
						
							";
					  }
	?>
	


<!--===============================================================================================-->
	<script src="vendor2/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor2/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor2/bootstrap/js/popper.js"></script>
	<script src="vendor2/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor2/select2/select2.min.js"></script>

<!--===============================================================================================-->
	<script src="vendor2/daterangepicker/moment.min.js"></script>
	<script src="vendor2/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor2/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="vendor2/noui/nouislider.min.js"></script>
	
<!--===============================================================================================-->
	<script src="js2/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>



			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>			
			<script src="js/parallax.min.js"></script>		
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>



