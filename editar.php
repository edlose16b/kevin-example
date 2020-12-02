<?php

require 'conexion.php';

$id = $_REQUEST['id'];

$query = "SELECT * FROM emprendedoras WHERE id = $id";

echo $query;
exit;
$resultado = $mysqli->query($query);
$emprendedora = $resultado->fetch_assoc();



if (isset($_REQUEST['btnEditar'])) {

    $name = $_REQUEST['nombre_de_emprendedora'];

    $query = "UPDATE emprendedoras SET name = '$name' WHERE id = $id";

    $resultado = $mysqli->query($query);

    if ($resultado == TRUE) {
        echo 'Fuiste editado';

        header('Location: /');
    } else {
        echo 'No pudimos editarte';
    }

}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar emprendedora</title>
</head>

<body>


    <form action="" method="GET">
        <input type="hidden" name="id" value="<?= $emprendedora['id'] ?>">
        <label for="id_nombre">Editar tu nombre</label>
        <br>
        <br>
        <input type="text" name="nombre_de_emprendedora" id="id_nombre" placeholder="Tu nombre aqui" value="<?= $emprendedora['name'] ?>">

        <br>
        <br>

        <button name="btnEditar">Editar</button>

    </form>

</body>

</html>