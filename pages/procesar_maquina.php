
<?php
// adminuser.php
include("../functions/setup.php");

// Obtener datos del formulario
$Patente = $_POST['Patente'];
$tipo = $_POST['Tipo'];

// Verificar si se ha enviado una imagen
if (isset($_FILES['imagenes']) && $_FILES['imagenes']['error'] === 0) {
    $image = $_FILES['imagenes'];
    $targetDirectory = 'IMAGES/'; // Ruta de la carpeta de imágenes en el mismo directorio

    // Obtener el nombre único para la imagen
    $imageName = uniqid() . '_' . $image['name'];
    $targetFile = $targetDirectory . $imageName;

    // Mover la imagen a la carpeta de destino
    if (move_uploaded_file($image['tmp_name'], $targetFile)) {
        // Insertar datos en la base de datos
        $sql = "INSERT INTO Maquinaria (Patente, Tipo_Maquina, foto) VALUES ('$Patente', '$tipo', '$imageName')";
        if (mysqli_query(conexion(), $sql)) {
            // Redirigir a la página de destino
            echo"<script language='javascript'>window.location='tables.php'</script>;";
            exit();
        } else {
            echo "Error al insertar en la base de datos.";
        }
    } else {
        echo "Error al subir la imagen.";
    }
} else {
    echo "No se ha seleccionado una imagen.";
}
?>
