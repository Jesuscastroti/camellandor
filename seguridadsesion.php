<?php
session_start();
if($_SESSION['Sautenticado']!="Si") 
{
	?>
	<script type="text/javascript">
     alert('Por favor inicie sesion');
      location.href="index.php";
</script>
<?php
exit();
}
?>