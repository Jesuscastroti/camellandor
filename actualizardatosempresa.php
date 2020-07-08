<?php
include("conexionbd.php");
session_start();
$jcfoto=$_FILES['txt_logo']['name'];
$jcruta_foto=$_FILES['txt_logo']['tmp_name'];
$jcerror=$_FILES['txt_logo']['error'];
$jctamano=$_FILES['txt_logo']['size'];
$jcuser=$_SESSION['empresa'];
$jcdireccion=$_POST['txt_direccion'];
$jctelefono=$_POST['txt_telefono'];
$jcrazonsocial=$_POST['txt_razonsocial'];
$jcciudad=$_POST['txt_ciudad'];
$jcdescripcion=$_POST['txt_descripcion'];
$jcinsertar=0;
$vacio=0;
if($jctamano>800000000)
{
echo "<br>Peso mayor del permitido";
}else{
	$jctipo=$_FILES['txt_logo']['type'];
	if ($jctipo=='image/jpg'|| $jctipo=='image/JPG'|| $jctipo=='image/jpeg'|| $jctipo=='image/JPEG') {
		//CREAR NOMBRE
		$jcdestino="Logosempresa/".$jcuser.".jpg";
		copy($jcruta_foto, $jcdestino);
		$jcinsertar=1;
		}else{?>
<script language="javascript">
alert("Formato no permitido");
window.location = 'inicioempresa.php';
</script>
            <?php
			$jcinsertar=1;
         $jcdestino="Logosempresa/predeterminado.jpg";
	}
}
if ($jcinsertar==1) {
	echo $jcdestino;
	$consulta="Update empresa set Logoempresa='$jcdestino',Descripcionemp='$jcdescripcion',Direccion='$jcdireccion',Razonsocial='$jcrazonsocial',
	Telefono='$jctelefono',Ciudad='$jcciudad' where nitempresa='".$_SESSION['empresa']."'";
	
mysqli_query($cadena,$consulta);
if ($cadena->connect_error) {
	die('La conexion falló'.$cadena->connect_error);

}
else{
	$mensaje = "Datos de empresa actualizado Actualizada";
	
    echo "<script>";
    echo "alert('$mensaje');";  
    echo "window.location = 'inicioempresa.php';";
    echo "</script>"; 

}


}


?>
