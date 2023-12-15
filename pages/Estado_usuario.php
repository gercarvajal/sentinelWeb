<?php
include("../functions/setup.php");


if($_GET["ac"]=="Desactivar"){//Desactivar producto


$sql="update usuario set Estado = 1 where idUsuario =".$_GET["id"];



mysqli_query(conexion(),$sql);

header("Location: tables.php");
echo"<script language='javascript'>window.location='tables.php'</script>;";
 exit();


}
if($_GET["ac"]=="Activar"){//activar producto


    $sql="update usuario set Estado = 2 where idUsuario =".$_GET["id"];
    

    
    mysqli_query(conexion(),$sql);
    
    header("Location: tables.php");
echo"<script language='javascript'>window.location='tables.php'</script>;";
 exit();

    
    }




?>