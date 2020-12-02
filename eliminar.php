<?php

    require 'conexion.php';

    $id = $_REQUEST['id'];
    

    $query = "UPDATE emprendedoras SET eliminado = true WHERE id = $id";

    $resultado = $mysqli->query($query);

    if($resultado == TRUE){
        echo 'Fuiste funado';
        
        header('Location: /');
    }else{
        echo 'No pudimos eliminarte';
    }
