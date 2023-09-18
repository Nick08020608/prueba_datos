<?php

$conexion= new mysqli('localhost', 'root', '', 'prueba_datos');

if ($conexion -> connect_errno){
    die ('Lo siento hubo un problema de conección');
} else{
    $sql = "INSERT INTO usuario (ID, nombre, edad) VALUES (null, 'Marlon', 25)";
    $resultado = $conexion -> query($sql);
    if ($conexion -> affected_rows >= 1){
        echo 'filas agregadas: '.$conexion -> affected_rows;
    }
}
?>
