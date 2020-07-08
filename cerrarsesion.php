<?php
session_start();
if (!isset($_SESSION['trabajador'])) 
{ 
 echo "<div align='center'>
<h1>Saliendo...<b></h1>
<br>
<img src='img/cargando1.gif'>
</div>";
session_unset();
session_destroy();
?>
<script type="text/javascript">
function fredirrecionar()
{
	location.href='index.php'
}
setTimeout(fredirrecionar,3000)
</script>
<?php
}elseif(!isset($_SESSION['empresa'])) 
{
 echo "<div align='center'>
<h1>Saliendo...<b></h1>
<br>
<img src='img/cargando1.gif'>
</div>";
session_unset();
 session_destroy();
?>
<script type="text/javascript">
function fredirrecionar()
{
	location.href='index.php'
}
setTimeout(fredirrecionar,3000)
</script>
<?php
}elseif (!isset($_SESSION['admin'])) 
{

 echo "<div align='center'>
<h1>Saliendo...<b></h1>
<br>
<img src='img/cargando1.gif'>
</div>";
session_unset();
 session_destroy();

?>
<script type="text/javascript">
function fredirrecionar()
{
	location.href='index.php'
}
setTimeout(fredirrecionar,3000)
</script>
<?php
}
?>