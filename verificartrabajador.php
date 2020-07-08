<?php
$user=$_POST['txt_documento'];
$email=$_POST['txt_email'];
include("conexionbd.php");;
$consulta="select * from trabajador where iddocumento='{$user}'";
$resultado=mysqli_query($cadena,$consulta);
$numregistros=mysqli_num_rows($resultado);
if ($numregistros>0) {
	?>
	<script type="text/javascript">
alert("El numero de documento ya esta en uso, Verifique su N° Documento")
location.href='registropersona.php';
	</script>
	<?php
	exit();
}
$consulta1="select * from trabajador where email='{$email}'";
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
    $idusuario=$_POST['txt_documento'];
    $nombre=$_POST['txt_nombrecompleto'];
    $email=$_POST['txt_email'];
    $pass=$_POST['txt_pass'];
    $pass1=crypt($pass,'$5$');
     $consulta="insert into trabajador(iddocumento,Nombre,email,password) values ('{$idusuario}','{$nombre}','{$email}','{$pass1}')";
    mysqli_query($cadena,$consulta);
    if ($cadena->connect_error) {
        die('La conexion falló'.$cadena->connect_error);
    
    }else{?>
    <script language="JavaScript" type="text/javascript">
      var statusConfirm = confirm("Usuario Registrado,Desea registrar otro usuario?"); 
        if (statusConfirm == true) 
        { 
         document.location.href= "registrarusuario.php";
        } 
        else 
        { 
             document.location.href= "iniciosesion.html";
        } 
      </script>
    
    <?php
    
     }
    }
    ?>
