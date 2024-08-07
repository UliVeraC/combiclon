<?php
require 'Conexion.php';
$consultar = "SELECT * FROM vuelo";
$query = mysqli_query($conn, $consultar);
$array = mysqli_fetch_array($query);
?>