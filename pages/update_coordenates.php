
<?php
// Conexión a la base de datos
    $servername = "localhost";
    $username = "u150352309_sentinel";
    $password = "Chantanel2023";
    $dbname = "u150352309_sentinel";


try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consulta SQL para obtener las coordenadas
    $query = "SELECT Latitud, Longitud FROM alarma ORDER BY timestamp DESC LIMIT 10";

    $statement = $pdo->prepare($query);
    $statement->execute();
    $coordenadas = $statement->fetchAll(PDO::FETCH_ASSOC);

    // Devuelve las coordenadas como JSON
    header('Content-Type: application/json');
    echo json_encode($coordenadas);
    echo"$coordenadas";
} catch (PDOException $e) {
    die("Error de conexión a la base de datos: " . $e->getMessage());
}
?>
