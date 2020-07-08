<?php
   include 'conexionbd.php';
   session_start();
     if(!isset($_SESSION['empresa'])){
		 session_destroy();
    header('location:index.php');
   }
   $con = mysqli_connect('localhost','root','usbw');
    mysqli_select_db($con,'bolsaempleo');
	header('Content-type: text/html; charset=UTF-8');

	$consulta="select * from empresa where nitempresa='".$_SESSION['empresa']."'";
	$resultado=mysqli_query($con,$consulta);
	$numregistros=mysqli_num_rows($resultado);
	while ($row=mysqli_fetch_array($resultado)) {
		$jcnit=$row['nitempresa'];
		$jcnombrecompleto=$row['Nombrecomercial'];
		$jcemail=$row['emailempresa'];
		$jcdescripemp=$row['Descripcionemp'];
		$jcrazonsocial=$row['Razonsocial'];
		$jclogoempresa=$row['Logoempresa'];
        $jcciudadempresa=$row['Ciudad'];
        $jctelefono=$row['Telefono'];
        $jcdireccionemp=$row['Direccion'];
	
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

		<title>DATOS EMPRESARIALES</title>

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
				          <li class="menu-active"><a href="inicioempresa.php">Inicio</a></li>
				          <li><a href="#">Blog</a></li>
						  <li><a href="#">Contacto</a></li>
						  <li><a class="ticker-btn" href="publicaroferta.php">Publicar Oferta</a></li>
                          <li><a class="ticker-btn" href="datosdeempresa.php">Ver mis datos empresariales</a></li>
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
							<?php
echo $jcnombrecompleto;
?><br><strong>Publica ya tus ofertas</strong>

							</h1>	
						</div>											
					</div>
				</div>
			</section>
			<br>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form action="actualizardatosempresa.php" method="post" class="contact100-form validate-form" enctype="multipart/form-data">
				<span class="contact100-form-title">
					Datos de la empresa
					<br>
					
				</span>
				
				<div class="wrap-input100 bg1 rs1-wrap-input100" >
				<span class="label-input100">Logo de la empresa *</span>
				<?php 
				if ($jclogoempresa==null) {
				echo"<div>";
				echo "<a> <input type='file'  value='Logosempresa/predeterminado.jpg' name='txt_logo' required/></a><img src='Logosempresa/predeterminado.jpg' value='Logosempresa/predeterminado.jpg' style='width:150px; height:150px; border-radius: 50%;'></a></img>";
				echo"</div>";
				}else{
				echo"<div  ";
				echo "<a> <input type='file'  value='$jclogoempresa' name='txt_logo' /></a><img src='$jclogoempresa'  style='width:150px; height:150px; border-radius: 50%;'></a></img>";
				echo"</div>";
				  }
			?>		
				
             </div>
		<div class="wrap-input100 bg1 rs1-wrap-input100" data-validate="Numero de documento">
			<span class="label-input100">N° NIT*</span>	
			<input class="input100" type="text" value="<?php echo $jcnit ?>"  style="margin-top:25px;font-size:50px;" name="name" readonly>
		</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Por favor ingresa tu nombre">
					<span class="label-input100">Nombre comercial *</span>
					<input class="input100" type="text" value="<?php echo $jcnombrecompleto ?>"  name="name" readonly>
				</div>
                <div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Por favor describe tu perfil profesional">
					<span class="label-input100">Descripcion de la empresa</span>
					<textarea class="input100" name="txt_descripcion"> <?php echo $jcdescripemp;?></textarea>
				</div>
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Ingresa e-mail (e@a.x)">
					<span class="label-input100">Email *</span>
					<input class="input100" type="text" name="email"  value="<?php echo $jcemail?>" readonly>
				</div>

				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Telefono Empresarial</span>
					<input class="input100" type="number" name="txt_telefono" value="<?php echo $jctelefono ?>" placeholder="Ingresa numero de telefono">
				</div>
				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Ciudad *</span>
					<div>
						<select class="js-select2" name="txt_ciudad" selected>
							<option value="Bogota D.C">Bogota D.C</option>
							<option value="Barranquilla">Barranquilla</option>
							<option value="Medellin">Medellin</option>
						</select>
						
					</div>
				</div>
				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Direccion empresa *</span>
					<input class="input100" type="text" name="txt_direccion" value="<?php echo $jcdireccionemp ?>" placeholder="Ingresa tdireccion">
				</div>
					<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Razon social* </span>
					<input class="input100" type="text" value="<?php echo $jcrazonsocial ?>" name="txt_razonsocial" placeholder="Ingresa la razon social">
				</div>
                
				
				
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Guardar datos
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			
			</form>
		</div>
		
	</div>

		

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
	<script src="js/botonagregarinput.js"></script>

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



