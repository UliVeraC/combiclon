<?php
require 'Conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST['numeroReserva'];

    $stmt = $conn->prepare("INSERT INTO reserva (id, numeroReserva, id_vuelo, id_alumno) VALUES ('','$numero','','')");

    if ($stmt->execute()) {
        echo "<script>alert('Reserva agregada')</script>";
    } else {
        echo "<script>alert('Error al hacer la reserva')</script>";
    }
}

?>