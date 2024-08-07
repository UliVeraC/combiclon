<?php
include 'Conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pick = $_POST['pick'];
    $pass = $_POST['password'];

    $stmt = $conn->prepare("INSERT INTO users (id, nombre, email, user, pass) VALUES ('','$name', '$email', '$pick', '$pass')");

    if ($stmt->execute()) {
        header("Location: index.html");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }
}


?>