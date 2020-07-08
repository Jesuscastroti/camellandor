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

    <title>REGISTRO EMPRESA</title>

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
                    <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
                  </div>
                  <nav id="nav-menu-container">
                    <ul class="nav-menu">
                      <li class="menu-active"><a href="index.html">Inicio</a></li>
                      <li><a href="quienessomos.html">Sobre nosotros</a></li>
                      <li><a href="#">Blog</a></li>
                      <li><a href="#">Contacto</a></li>
                      <li><a class="ticker-btn" href="registroempresa.php">Publicar empleo</a></li>
                      <li><a class="ticker-btn" href="registropersona.php">Registra hoja devida</a></li>
                      <li><a class="ticker-btn" href="iniciosesion.html">Iniciar sesion</a></li>				          				          
                    </ul>
                  </nav>		    		
                </div>
            </div>
          </header>


        <section class="banner-area relative" id="home" style="height:200px ;">	
            <div class="overlay overlay-bg"></div>
                   <div class="row d-flex align-items-center justify-content-center">
                    <div class="about-content col-lg-12">
                        <h1 class="text-white" style="font-size: 20px;">
                            ¿Sin empleo?<br><strong>Estas en el lugar indicado!</strong>

                        </h1>	
                    </div>											
 
            </div>
        </section> 

<div class="container-contact100">
    <div class="wrap-contact100">
        <form action="verificarempresa.php" method="post" class="contact100-form validate-form" >
            <span class="contact100-form-title">
                Registro empresarial
            </span>
            <div class="wrap-input100 validate-input bg1" data-validate="Por favor ingresa tu NIT">
                <span class="label-input100">Nit de la empresa *</span>
                <input class="input100" type="number" name="txt_nitempresa" placeholder="Ingresa NIT de la empresa" required>
            </div>
            <div class="wrap-input100 validate-input bg1" data-validate="Por favor ingresa el nombre empresarial">
                <span class="label-input100">Nombre comercial de la empresa *</span>
                <input class="input100" type="text" name="txt_nombreempresa" placeholder="Ingresa nombre comercial de la empresa">
            </div>

            <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Ingresa e-mail (miempresa@gmail.com)">
                <span class="label-input100">Email *</span>
                <input class="input100" type="text" name="email" placeholder="Ingresa e-mail  "required>
            </div>
            <div class="wrap-input100 bg1 rs1-wrap-input100">
                <span class="label-input100">Contraseña * </span>
                <input class="input100" type="password" name="txt_pass" placeholder="Ingresa contraseña" required>
            </div>


            <div class="container-contact100-form-btn">
                <button class="contact100-form-btn">
                    <span>
                        Registrar empresa
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



