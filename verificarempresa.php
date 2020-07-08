<?php
$user=$_POST['txt_nitempresa'];
$email=$_POST['email'];
include("conexionbd.php");;
$consulta="select * from empresa where nitempresa='{$user}'";
$resultado=mysqli_query($cadena,$consulta);
$numregistros=mysqli_num_rows($resultado);
if ($numregistros>0) {
	?>
	<script type="text/javascript">
alert("El nit ya esta en uso, Verifique su NIT")
location.href='registropersona.php';
	</script>
	<?php
	exit();
}
$consulta1="select * from empresa where email='{$email}'";
$resultado1=mysqli_query($cadena,$consulta1);
$numregistros1=mysqli_num_rows($resultado1);
if ($numregistros1>0) {
	?>
	<script type="text/javascript">
alert("El correo ingresado ya existe, Ingrese otro")
location.href='registropersona.php';
	</script>
	<?php
	exit();
}
else{
    $jcnit=$_POST['txt_nitempresa'];
    $jcnombre=$_POST['txt_nombreempresa'];
    $jcemail=$_POST['email'];
    $pass=$_POST['txt_pass'];
    $pass1=crypt($pass,'$5$');
     $consulta3="insert into empresa(nitempresa,emailempresa,password,Nombrecomercial) values ('{$jcnit}','{$jcemail}','{$pass1}','{$jcnombre}')";
    mysqli_query($cadena,$consulta3);
    if ($cadena->connect_error) {
        die('La conexion falló'.$cadena->connect_error);
    
    }else{?>
    <script language="JavaScript" type="text/javascript">
      var statusConfirm = confirm("Empresa registrada correctamente,desea iniciar sesion?"); 
        if (statusConfirm == true) 
        { 
         document.location.href= "iniciosesion.html";
        } 
        else 
        { 
             document.location.href= "index.php";
        } 
      </script>
    
    <?php
    
     }
    }
    ?>
