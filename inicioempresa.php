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
		$nombre=$row['Nombrecomercial'];
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

		<title>INICIO - <?PHP echo $nombre ?></title>

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
                            Bienvenido 
                            <?php echo $nombre; ?><br>
                            <strong>Publica ya tus ofertas</strong>

							</h1>	
						</div>											
					</div>
				</div>
			
				<div class="container-contact100">
    <div class="wrap-contact100">
        <form action="verificarempresa.php" method="post" class="contact100-form validate-form" >
        <table class="table text-center table-bordered table-hover">
      	<tr>
      		<th colspan="2" class="bg-dark" > <center><h1 class="text-white">Lista de ofertas publicadas </h1></center></th>
      	</tr>
      	<tr>
          </table>
		      <table class="table text-center table-bordered table-hover">
            <?php
            $consulta="select * from ofertas o,empresa p where o.fk_empresa=p.nitempresa order by  o.titulooferta DESC";
            $resultado=mysqli_query($cadena,$consulta);
            $numregistros=mysqli_num_rows($resultado);
            ?>
    <th>Titulo Oferta</th>
    <th>Descripcion oferta</th>
    <th>Salario</th>
    <th>Tipo trabajp</th>
    <th>Lugar</th>
  </tr>
  <?php
  while ($row=mysqli_fetch_array($resultado)) {
    echo "<tr>";
    echo "<td>".$row['titulooferta']."</td>";
    echo "<td>".$row['descripcionoferta']."</td>";
    echo "<td>".$row['salario']."</td>";
	echo "<td>".$row['tipotrabajo']."</td>";
	echo "<td>".$row['lugartrabajo']."</td>";
    echo "</tr>";
  }
  ?>

</table>
   
          
        </form>
    </div>
</div>
	
<div class="container-contact100">
    <div class="wrap-contact100">
        <form action="verificarempresa.php" method="post" class="contact100-form validate-form" >
        <table class="table text-center table-bordered table-hover">
      	<tr>
      		<th colspan="2" class="bg-dark" > <center><h1 class="text-white">Lista de postulados </h1></center></th>
      	</tr>
      	<tr>
          </table>
		      <table class="table text-center table-bordered table-hover">
            <?php
            $consulta="select * from postulados p, ofertas o,empresa e,trabajador t where  p.fk_oferta=o.idoferta and p.fk_trabajador=t.iddocumento ";
            $resultado=mysqli_query($cadena,$consulta);
            $numregistros=mysqli_num_rows($resultado);
            ?>
    <th>Titulo Oferta</th>
    <th>Descripcion oferta</th>
    <th>Salario</th>
    <th>Tipo trabajp</th>
	<th>Lugar</th>   
	<th>Postulado</th>
  </tr>
  <?php
  while ($row=mysqli_fetch_array($resultado)) {
    echo "<tr>";
    echo "<td>".$row['titulooferta']."</td>";
    echo "<td>".$row['descripcionoferta']."</td>";
    echo "<td>".$row['salario']."</td>";
	echo "<td>".$row['tipotrabajo']."</td>";
	echo "<td>".$row['lugartrabajo']."</td>";
	if ($row['Fotoperfil']==null) {
		echo "<td><a href='detallespostulado.php?id=".$row['fk_trabajador']."'><img src='Fotousuario/predeterminado.jpg' style='width:50px; height:50px; border-radius: 50%;'></img></a></td>";
		}else{
		echo "<td><a href='detallespostulado.php?id=".$row['fk_trabajador']."'><img src=".$row['Fotoperfil']." style='width:50px; height:50px; border-radius: 50%;'></img></a></td>";
		}
    echo "</tr>";
  }
  ?>

</table>
   
          
        </form>
    </div>
</div>

		</section>


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



