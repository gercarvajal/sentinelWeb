
<?php

include("../functions/setup.php");

// adminuser.php
$id = $_GET['idUsuario'];

$sql = "DELETE FROM usuario WHERE idUsuario=" . $id;


mysqli_query(conexion(), $sql);
header("Location: tables.php");
 echo"<script language='javascript'>window.location='tables.php'</script>;";
  exit();


?>