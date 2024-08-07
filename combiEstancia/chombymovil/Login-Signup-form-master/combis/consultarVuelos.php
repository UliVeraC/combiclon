<?php
require 'vuelos.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Aereolinea</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="vuelos.css">
    <script src="js/vuelos.js"></script>
    <h1 class="section-title" style="background-color: rgb(0, 0, 0); height: 80px; text-align:center"> CONSULTA DE
        COMBIS</h1>
</head>

<body>
    <div class="container">
        <div class="titulo">
            <h1 class="section-title " style="text-align:center">Vuelos</h1>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                    <th scope="col">Id</th>
                    <th scope="col">Origen</th>
                    <th scope="col">Destino</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Hora de Salida</th>
                    <th></th>
                </thead>
                <tbody id="datos">
                    <?php
                        foreach($query as $row){ ?>
                            <td><?php echo $row['id'] ?> </td>
                            <td><?php echo $row['origen'] ?></td>
                            <td><?php echo $row['destino'] ?></td>
                            <td><?php echo $row['fecha'] ?></td>
                            <td><?php echo $row['salida'] ?></td>
                            <td><button onclick="window.location.href='asientos.html'">Reservar</button></td>
                        
                </tbody>
                <?php
            }
            ?>
            </table>
        </div>
        <div id="copyright">
            <div class="container">
                <div class="abajo">
                    <div class="col-md-12">
                        <p>© Desarrollado por <a href="https://sii.upp.edu.mx/vista/comunes/vMenu.php"
                                rel="nofollow">LID</a></p>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>

