<?php
function conexion()
{
    $host = "localhost";
    $username = "cge93624";
    $password = "HWpUSrRYGLRQgmNUQWRj";
    $database = "cge93624_mydb";
    // Establecer conexión a bd
    $con = mysqli_connect($host, $username, $password, $database);
    // Verificar si se conectó o no
    if (!$con) {
        // Mensaje de error de conexión
        throw new Exception("Error al conectar a la base de datos: " . mysqli_connect_error());
    }
    // Establecer conexión con el utf8 por temas de caracteres :v con su respectiva validación
    if (!mysqli_set_charset($con, 'utf8')) {
        trigger_error("Error al establecer el juego de caracteres: " . mysqli_error($con), E_USER_WARNING);
    }
    return $con;
}
?>
