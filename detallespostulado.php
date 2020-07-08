<?php
include 'conexionbd.php';
session_start();
  if(!isset($_SESSION['empresa'])){
    header('location:index.php');
   }
?>
<!DOCTYPE html>
<html>
<head>
      <title>Detalles Postulado</title>
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
      		<th colspan="2" class="bg-dark" > <center><h1 class="text-white">Datos de trabajador</h1></center></th>
      	</tr>
      	<tr>
          </table>
		      <table class="table text-center table-bordered table-hover" style="width:50%; margin-left:25%;">
<?php
include("conexionbd.php");

$username= $_GET['id'];
$consulta="select * from trabajador where iddocumento='".$username."' ";
$resultado=mysqli_query($cadena,$consulta);
$numregistros=mysqli_num_rows($resultado);
while ($row=mysqli_fetch_array($resultado)) {
    echo"<div class='centrar'>";
    if ($row['Fotoperfil']==null) {
        echo "<img src='Fotousuario/predeterminado.jpg' style='width:200px; height:200px; border-radius: 50%;'></img>";
        }else{
        echo "<img src=".$row['Fotoperfil']." style='width:200px; height:200px; border-radius: 50%;'></img>";
        }
        echo"</div>";
        echo"<br>";
        echo"<tr>";
        echo"<h3>DATOS PERSONALES</h3>";
        echo"</tr>";
        echo"<tr>";
    echo"<td><strong>Identificacion:</strong></td>";
    echo "<td>".$row['iddocumento']."</td>";
    echo"</tr>";
    echo"<tr>";
    echo"<td><strong>Nombre:</strong></td>";
    echo "<td>".$row['Nombre']."</td>";
    echo"</tr>";
    echo"<tr>";
    echo"<td><strong>Titulo Profesional:</strong></td>";
    echo "<td>".$row['tituloprofesional']."</td>";
    echo"</tr>";
    echo"<tr>";
    echo"<td><strong>Descripcion perfil:</strong></td>";
    echo "<td>".$row['descripcionperfil']."</td>";
    echo"</tr>";
    echo"<td><strong>Fecha nacimiento:</strong></td>";
    echo "<td>".$row['fechanacimiento']."</td>";
    echo"</tr>";
    echo"<td><strong>Lugar nacimiento:</strong></td>";
    echo "<td>".$row['lugarnacimiento']."</td>";
    echo"</tr>";
    echo"<td><strong>Genero:</strong></td>";
    echo "<td>".$row['Genero']."</td>";
    echo"</tr>";
    echo"<td><strong>Direccion:</strong></td>";
    echo "<td>".$row['direccionresidencia']."</td>";
    echo"</tr>";
    echo"<td><strong>Telefono:</strong></td>";
    echo "<td>".$row['Telefono']."</td>";
    echo"</tr>";
    echo"<td><h3>Experiencia laboral</h3></td>";
    echo"</tr>";
    echo"<td><strong>Nombre empresa:</strong></td>";
    echo "<td>".$row['nombreempresa']."</td>";
    echo"</tr>";
    echo"<td><strong>Cargo:</strong></td>";
    echo "<td>".$row['cargo']."</td>";
    echo"</tr>";
    echo"<td><strong>Fecha inicio:</strong></td>";
    echo "<td>".$row['fechainicioexp']."</td>";
    echo"</tr>";
    echo"<td><strong>Fecha fin:</strong></td>";
    echo "<td>".$row['fechafinexp']."</td>";
    echo"</tr>";
    echo"<td><strong>Funciones:</strong></td>";
    echo "<td>".$row['funciones']."</td>";
    echo"</tr>";
    echo"</tr>";
    echo"<td><h3>Estudios realizados</h3></td>";
    echo"</tr>";
    echo"<td><strong>Nombre institucion:</strong></td>";
    echo "<td>".$row['nominst']."</td>";
    echo"</tr>";
    echo"<td><strong>Titulo:</strong></td>";
    echo "<td>".$row['titulo']."</td>";
    echo"</tr>";
    echo"<td><strong>Fecha inicio:</strong></td>";
    echo "<td>".$row['fechainicioest']."</td>";
    echo"</tr>";
    echo"<td><strong>Fecha fin:</strong></td>";
    echo "<td>".$row['fechafinest']."</td>";
    echo"</tr>";
    echo"</tr>";
    echo"<td><h3>Idioma</h3></td>";
    echo"</tr>";
    echo"<td><strong>Nombre idioma:</strong></td>";
    echo "<td>".$row['idioma']."</td>";
    echo"</tr>";
    echo"<td><strong>Nivel idioma:</strong></td>";
    echo "<td>".$row['nivelidioma']."</td>";
    echo"</tr>";
    echo"</tr>";
    echo"<td><h3>Estudios complementarios</h3></td>";
    echo"</tr>";
    echo"<td><strong>Estudio complementario:</strong></td>";
    echo "<td>".$row['estudiocomplementario']."</td>";
    echo"</tr>";
    echo"<td><strong>Lugar estudio:</strong></td>";
    echo "<td>".$row['lugarestudio']."</td>";
    echo"</tr>";

}
?>
 </table>
 <a href="inicioempresa.php" class="btn btn-success"> Regresar</a>
 </div>
</body>
</html>