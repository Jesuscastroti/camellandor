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
		<title>INICIO-CAMELLANDOR</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>

			  <header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="index.php">Inicio</a></li>
				          <li><a href="quienessomos.html">Sobre nosotros</a></li>
				          <li><a href="blog-home.html">Blog</a></li>
						  <li><a href="contact.html">Contacto</a></li>
						  <li><a class="ticker-btn" href="registroempresa.php">Publicar empleo</a></li>
				          <li><a class="ticker-btn" href="registropersona.php">Registra hoja de vida</a></li>
				          <li><a class="ticker-btn" href="iniciosesion.html">Iniciar sesion</a></li>				          				          
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->
<div>


			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white" style="font-size: 60px;">
								¿Sin empleo?<br><strong>Con <span>CAMELLANDOR</span> Estas en el lugar indicado!</strong>

							</h1>	
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
			
			<!-- Start post Area -->
			<section class="post-area section-gap">
					<?php
					include 'conexionbd.php';
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
											<a href='iniciosesion.html'><h2> ".$row['titulooferta']."</h2></a>
											<h4>".$row['Nombrecomercial']."</h4>					
										</div>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
										<ul class='btns'>
											<li><a href='iniciosesion.html'><span class='lnr lnr-heart'></span></a></li>
											<li><a href='iniciosesion.html'>APLICAR OFERTA</a></li>
										</ul>
									</div>
									<br>
									<label>Descripcion de la oferta:</label><p>
									".$row['descripcionoferta'].".
									</p>
									<h5>Tipo de empleo: ".$row['tipotrabajo']."</h5>
									<p class='address'><span class='lnr lnr-map'></span> Colombia, ".$row['lugartrabajo']."</p>
									<p class='address'><span class='lnr lnr-database'></span>".$row['salario']." </p>
									</div>
								</div>
								</div>
							";
					  }
	?>

						<div class="col-lg-4 sidebar">
							<div class="single-slidebar">
								<h4>Lugares de empleo</h4>
								<ul class="cat-list">
									<li><a class="justify-content-between d-flex" href="#"><p>Bogota D.C</p><span>37</span></a></li>
									<li><a class="justify-content-between d-flex" href="#"><p>Barranquilla</p><span>57</span></a></li>
									<li><a class="justify-content-between d-flex" href="#"><p>Medellin</p><span>33</span></a></li>
									<li><a class="justify-content-between d-flex" href="#"><p>Cali</p><span>36</span></a></li>
									<li><a class="justify-content-between d-flex" href="#"><p>Monteria</p><span>47</span></a></li>
									<li><a class="justify-content-between d-flex" href="#"><p>Valledupar</p><span>27</span></a></li>
									<li><a class="justify-content-between d-flex" href="#"><p>Santa Marta</p><span>17</span></a></li>
								</ul>
							</div>

							
							<div class="single-slidebar">
								<h4>Categorias de empleo</h4>
								<ul class="cat-list">
									<li><a class="justify-content-between d-flex" href="#"><p>Tecnologia</p><span>37</span></a></li>
									<li><a class="justify-content-between d-flex" href="#"><p>Entretenimiento</p><span>57</span></a></li>
									<li><a class="justify-content-between d-flex" href="#"><p>Administracion</p><span>33</span></a></li>
									<li><a class="justify-content-between d-flex" href="#"><p>Medicina</p><span>36</span></a></li>
									<li><a class="justify-content-between d-flex" href="#"><p>Restaurantantes</p><span>47</span></a></li>
									<li><a class="justify-content-between d-flex" href="#"><p>Desarrollo</p><span>27</span></a></li>
									<li><a class="justify-content-between d-flex" href="#"><p>Accounting</p><span>17</span></a></li>
								</ul>
							</div>

							
									
									
									</div>																		
								</div>
							</div>							

						</div>
					</div>
				</div>	
			</section>
			<!-- End post Area -->

					

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



