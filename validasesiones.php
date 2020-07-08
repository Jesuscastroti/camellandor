
 <?php
 session_start();
 $vuser=$_POST['txt_user'];
 $user2=$vuser;
 $pass=$_POST['txt_pass'];
 $pass1=crypt($pass,'$5$');
 try{
 include 'conexionbd.php';
 /*Consulta para el inicio de trabajador */
 $jcconsulta="select * from trabajador where iddocumento='{$vuser}' and password='{$pass1}'";
 $jcresultado=mysqli_query($cadena,$jcconsulta);
 $jcnumregistros=mysqli_num_rows($jcresultado);
 /*Consulta para el inicio de empresa */
 $jcconsulta1="select * from empresa where nitempresa='{$vuser}' and password='{$pass1}'";
 $jcresultado1=mysqli_query($cadena,$jcconsulta1);
 $jcnumregistros1=mysqli_num_rows($jcresultado1);
 /*Consulta para inicio admin */
 $jcconsulta2="select * from admin where idadmin='{$vuser}' and password='{$pass}'";
 $jcresultado2=mysqli_query($cadena,$jcconsulta2);
 $jcnumregistros2=mysqli_num_rows($jcresultado2);
 }catch(exception $e){
   echo "Error: $e";
 }


if($jcnumregistros > 0) 
{
    session_start();
    $_SESSION['trabajador']="$vuser";
    header("Location:iniciodepersona.php");
    exit(); 
}
 
/* Ahora comprobamos si el que intenta acceder es una empresa*/
else if($jcnumregistros1 > 0) 
{
    session_start();
    $_SESSION['empresa']="$vuser";
    header("Location: inicioempresa.php");
    exit(); 
}
 
//comprobamos si es  el que intenta abrir la sesión
else if($jcnumregistros2 > 0) 
{
    session_start();
    $_SESSION['admin']="$vuser";
    header("Location: inicioadmin.php");
    exit();
} 
else 
{
  ?>
  <script type="text/javascript">
  alert('El nombre de Usuario o Password son incorrectos');
   location.href="iniciosesion.html";

  </script>
<?php
}
?>
