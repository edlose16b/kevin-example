<?php


$mysqli = new mysqli("localhost", "root", "", "kevincrud");

if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    exit;
}

$nombre = $_REQUEST["nombre_de_emprendedora"];

$sentencia =  "INSERT INTO emprendedoras(name) VALUES('$nombre')";

$mysqli->query($sentencia);


echo 'Hola ' . $nombre . ' te agregamos a mysql';

header('Location: /');
