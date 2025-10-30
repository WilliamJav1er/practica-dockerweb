<?php
$servername = "db";
$username = "root";
$password = "123456";
$database = "pruebadb";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("<h2 style='color:red'>Error de conexión: " . $conn->connect_error . "</h2>");
}
echo "<div style='font-family:sans-serif;text-align:center;margin-top:50px'>";
echo "<h1>¡Hola Mundo desde PHP + MySQL + Docker! 🎉</h1>";
echo "<p>Conexión exitosa a la base de datos: <strong>$database</strong></p>";
echo "</div>";

$conn->close();
?>
