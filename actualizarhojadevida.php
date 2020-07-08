<?php
include("conexionbd.php");
session_start();
$jcfoto=$_FILES['txt_fotousuario']['name'];
$jcruta_foto=$_FILES['txt_fotousuario']['tmp_name'];
$jcerror=$_FILES['txt_fotousuario']['error'];
$jctamano=$_FILES['txt_fotousuario']['size'];
$jcuser=$_SESSION['trabajador'];
$jcgenero=$_POST['txt_genero'];
$jcdireccion=$_POST['txt_direccion'];
$jctelefono=$_POST['txt_telefono'];
$jclugarnacimiento=$_POST['txt_lugarnacimiento'];
$jcfecha=$_POST['txt_fechanacimiento'];
$jctituloperfil=$_POST['txt_tituloperfil'];
$jcdescripcion=$_POST['txt_descripcion'];
$jcempresa=$_POST['txt_empresa'];
$jccargo=$_POST['txt_cargo'];
$jcfechainicioex=$_POST['txt_fechainicioex'];
$jcfechafinex=$_POST['txt_fechafinex'];
$jcfunciones=$_POST['txt_funciones'];
$jcnombreinst=$_POST['txt_nombreinst'];
$jctitulo=$_POST['txt_tituloobtenido'];
$jcfechaini=$_POST['txt_fechainicio'];
$jcfechafin=$_POST['txt_fechafin'];
$jcidioma=$_POST['txt_idioma'];
$jcnivel=$_POST['txt_nivel'];
$jcestudio=$_POST['txt_estudio'];
$jcrealizado=$_POST['txt_realizado'];

$jcinsertar=0;
$vacio=0;
if($jctamano>800000000)
{
echo "<br>Peso mayor del permitido";
}else{
	$jctipo=$_FILES['txt_fotousuario']['type'];
	if ($jctipo=='image/jpg'|| $jctipo=='image/JPG'|| $jctipo=='image/jpeg'|| $jctipo=='image/JPEG') {
		//CREAR NOMBRE
		$jcdestino="Fotousuario/".$jcuser.".jpg";
		copy($jcruta_foto, $jcdestino);
		$jcinsertar=1;
		}else{?>
<script language="javascript">
alert("Formato no permitido");
window.location = 'registrarhojadevida.php';
</script>
            <?php
			$jcinsertar=1;
         $jcdestino="Fotousuario/predeterminado.jpg";
	}
}
if ($jcinsertar==1) {
	echo $jcdestino;
	$consulta="Update trabajador set Fotoperfil='$jcdestino',fechanacimiento='$jcfecha',Genero='$jcgenero',
	direccionresidencia='$jcdireccion',lugarnacimiento='$jclugarnacimiento',
	Telefono='$jctelefono',tituloprofesional='$jctituloperfil',descripcionperfil='$jcdescripcion',nombreempresa='$jcempresa',
	cargo='$jccargo',fechainicioexp='$jcfechainicioex',fechafinexp='$jcfechafinex',funciones='$jcfunciones',
	nominst='$jcnombreinst',titulo='$jctitulo',fechainicioest='$jcfechaini',fechafinest='$jcfechafin',
	idioma='$jcidioma',nivelidioma='$jcnivel',estudiocomplementario='$jcestudio',
	lugarestudio='$jcrealizado'
	 where iddocumento='".$_SESSION['trabajador']."'";
mysqli_query($cadena,$consulta);
if ($cadena->connect_error) {
	die('La conexion falló'.$cadena->connect_error);

}
else{
	$mensaje = "Hoja de vida Actualizada";
	
    echo "<script>";
    echo "alert('$mensaje');";  
    echo "window.location = 'iniciodepersona.php';";
    echo "</script>"; 

}


}


?>
