<?php
include 'conexionbd.php';
session_start();
  if(!isset($_SESSION['admin'])){
    header('location:index.php');
   }
?>
<!DOCTYPE html>
<html>
<head>
      <title>Detalles</title>
      <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="customs.js"></script>
   </head>
   <body >
     <div class="container text-center" >
      <table class="table text-center table-bordered table-hover" style="width:50%; text-align:center;margin-left:25%;">
      	<tr>
      		<th colspan="2" class="bg-dark" > <center><h1 class="text-white">Datos de empresas</h1></center></th>
      	</tr>
      	<tr>
          </table>
		      <table class="table text-center table-bordered table-hover" style="width:50%; margin-left:25%;">
<?php
include("conexionbd.php");

$username= $_GET['id'];
$consulta="select * from empresa where nitempresa='".$username."' ";
$resultado=mysqli_query($cadena,$consulta);
$numregistros=mysqli_num_rows($resultado);
while ($row=mysqli_fetch_array($resultado)) {
    echo"<div class='centrar'>";
    if ($row['Logoempresa']==null) {
        echo "<img src='Logosempresa/predeterminado.jpg' style='width:200px; height:200px; border-radius: 50%;'></img>";
        }else{
        echo "<img src=".$row['Logoempresa']." style='width:200px; height:200px; border-radius: 50%;'></img>";
        }
        echo"</div>";
        echo"<br>";
        echo"<tr>";
    echo"<td><strong>NIT:</strong></td>";
    echo "<td>".$row['nitempresa']."</td>";
    echo"</tr>";
    echo"<tr>";
    echo"<td><strong>Nombre comercial:</strong></td>";
    echo "<td>".$row['Nombrecomercial']."</td>";
    echo"</tr>";
    echo"<tr>";
    echo"<td><strong>Correo:</strong></td>";
    echo "<td>".$row['emailempresa']."</td>";
    echo"</tr>";
    echo"<tr>";
    echo"<td><strong>Descripcion empresa:</strong></td>";
    echo "<td>".$row['Descripcionemp']."</td>";
    echo"</tr>";
    echo"<td><strong>Direccion:</strong></td>";
    echo "<td>".$row['Direccion']."</td>";
    echo"</tr>";echo"<td><strong>Telefono:</strong></td>";
    echo "<td>".$row['Telefono']."</td>";
    echo"</tr>";
}
?>
 </table>
 <a href="inicioadmin.php" class="btn btn-success"> Regresar</a>
 </div>
</body>
</html>