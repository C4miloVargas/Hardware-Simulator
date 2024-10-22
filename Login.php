<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    echo "Hola, " . htmlspecialchars($nombre) . "!";
}
?>

<?php
$servername = "localhost";
$username = "usuario";
$password = "contraseña";
$dbname = "login";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conectado exitosamente";
?>
    
</body>
</html>