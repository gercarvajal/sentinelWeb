
    <?php
// adminuser.php
include("../functions/setup.php");

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$rut = $_POST['rut'];
$direc = $_POST['direc'];
$tipo_user = $_POST['Tipouser'];
$telef = $_POST['tel'];
$Estado=1;




  $sql = "INSERT INTO usuario SET 
       Nombre='" . $nombre . "',
    Apaterno='" . $apellido . "',
    Rut='" . $rut . "',
    Telefono='" . $telef . "',
    Tipo_usuario_id='" . $tipo_user. "',
    Direccion='" . $direc . "',
    Estado='" . $Estado . "',
        Clave='" . $pass . "'";

// Ejecuta la consulta SQL
mysqli_query(conexion(), $sql);
header("Location: tables.php");
echo"<script language='javascript'>window.location='tables.php'</script>;";
 exit();
?>