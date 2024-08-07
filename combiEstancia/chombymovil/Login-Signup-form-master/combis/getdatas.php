<?php
include 'Conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $pick = $_GET['pick'];
    $pass = $_GET['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE user = '$pick' AND pass = '$pass'");
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            header("Location: index.html");
            exit;
        } else {
            echo "<script>alert('Credenciales incorrectas')</script>";
        }
    }
}
?>