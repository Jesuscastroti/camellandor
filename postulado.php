<?php
session_start();
include("conexionbd.php");;
$jcnit=$_GET['id'];
$jcoferta=$_GET['id2'];
$jctrabajador=$_GET['id3'];
$consulta="insert into postulados(fk_empresa,fk_oferta,fk_trabajador) 
values('{$jcnit}','{$jcoferta}','{$jctrabajador}')";
mysqli_query($cadena,$consulta);
if ($cadena->connect_error) {
   die('La conexion falló'.$cadena->connect_error);

}else{?>
<script language="JavaScript" type="text/javascript">
 var statusConfirm = confirm("Postulacion registrada"); 
   if (statusConfirm == true) 
   { 
    document.location.href= "iniciodepersona.php";
   } 
   else 
   { 
        document.location.href= "iniciodepersona.php";
   } 
 </script>

<?php
}

?>
?>