<?php

$mysqli = new mysqli("localhost", "root", "", "kevincrud");

if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    exit;
}

$resultado = $mysqli->query("SELECT * FROM emprendedoras WHERE eliminado = false");


$totalPutas = $resultado->num_rows;
echo  'El total de putas es ' . $totalPutas . '<br>';


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar emprendedoras</title>
</head>

<body>
    <a href="agregar.php">Añadir nueva empresaria</a>
    <br>
    <h1>Lista de Emprendedoras</h1>

    <table border="1" width=600>

        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Acción</th>
            </tr>
        </thead>

        <tbody>

            <?php

            for ($contador = 0; $contador < $totalPutas; $contador += 1) {
                $fila = $resultado->fetch_assoc();
            ?>
                <tr>
                    <td> <?= $fila['id'] ?> </td>
                    <td> <?= $fila['name'] ?> </td>
                    <td>

                    <a href='editar.php?id=<?= $fila['id'] ?>'>Editar</a>
                        
                        <a href='eliminar.php?id=<?= $fila['id'] ?>'>Eliminar</a>

                    </td>
                </tr>
            <?php
            }
            ?>

        </tbody>
    </table>
</body>

</html>