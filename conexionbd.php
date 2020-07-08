<?php
$username="root";
$password="usbw";
$dbname="bolsaempleo";
$hostname="localhost";
$cadena=new mysqli($hostname,$username,$password,$dbname);
//valida conexion
/*if($cadena->connect_error)
{
	die("La conexion falló".$cadena->connect_error);
}
else
{
	echo"Conectó la base de datos";
}*/

?>