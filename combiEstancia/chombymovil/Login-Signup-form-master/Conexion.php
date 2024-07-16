<?php
$servername = "localhost:3307";
$username = "pma";
$password = "";
$database = "movil";
$conn = mysqli_connect($servername, $username, $password, $database);

// Verificar conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
} else {
    echo ("Conexion exitosa");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pick = $_POST['pick'];
    $pass = $_POST['password'];

    $stmt = $conn->prepare("INSERT INTO users (nombre, email, user, pass) VALUES ('$name', '$email', '$pick', '$pass')");

    if ($stmt->execute()) {
        echo "Registro exitoso";
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>