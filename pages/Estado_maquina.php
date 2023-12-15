<?php
include("../functions/setup.php");


if($_GET["ac"]=="Desactivar"){//Desactivar producto


$sql="update Maquinaria set Estado = 1 where Id_maquina =".$_GET["id"];



mysqli_query(conexion(),$sql);

header("Location: tables.php");
echo"<script language='javascript'>window.location='tables.php'</script>;";
 exit();


}
if($_GET["ac"]=="Activar"){//activar producto


    $sql="update Maquinaria set Estado = 2 where Id_maquina =".$_GET["id"];
    

    
    mysqli_query(conexion(),$sql);
    
    header("Location: tables.php");
echo"<script language='javascript'>window.location='tables.php'</script>;";
 exit();

    
    }




?>