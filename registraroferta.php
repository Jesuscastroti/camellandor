<?php
session_start();
include("conexionbd.php");;
    $jcempresa=$_SESSION['empresa'];
    $jctitulooferta=$_POST['txt_titulooferta'];
    $jcdescripcion=$_POST['txt_descripcion'];
    $jcsalario=$_POST['txt_salario'];
    $jctipotrabajo=$_POST['txt_tipotrabajo'];
    $jclugartrabajo=$_POST['txt_ciudad'];

     $consulta="insert into ofertas(titulooferta,descripcionoferta,salario,tipotrabajo,lugartrabajo,fk_empresa) 
     values('{$jctitulooferta}','{$jcdescripcion}','{$jcsalario}','{$jctipotrabajo}','{$jclugartrabajo}','{$jcempresa}')";
    mysqli_query($cadena,$consulta);
    if ($cadena->connect_error) {
        die('La conexion falló'.$cadena->connect_error);
    
    }else{?>
    <script language="JavaScript" type="text/javascript">
      var statusConfirm = confirm("Oferta Registrada,Desea registrar otra oferta?"); 
        if (statusConfirm == true) 
        { 
         document.location.href= "publicaroferta.php";
        } 
        else 
        { 
             document.location.href= "inicioempresa.php";
        } 
      </script>
    
    <?php
     }
    
    ?>
