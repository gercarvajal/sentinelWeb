<?php

include("../functions/setup.php");

// adminuser.php
$id = $_GET['Id_maquina'];

$sql = "DELETE FROM Maquinaria WHERE Id_maquina=" . $id;


mysqli_query(conexion(), $sql);
header("Location: tables.php");
 echo"<script language='javascript'>window.location='tables.php'</script>;";
  exit();


?>