<?php

$conexion = new mysqli('localhost', 'root', '', 'prueba_datos');

if ($conexion -> connect_errno){

    die ('Lo siento hubo un problema en la coneccion');

} else{

    $sql = "SELECT * FROM usuario";
    $resultado = $conexion -> query($sql);

    if ($resultado -> num_rows){

        while ($fila = $resultado -> fetch_assoc()){
            echo $fila ['ID'].'  '. $fila ['Nombre'].'<br/>';
        }

    } else{

        echo 'no hay datos';

    }
}
?>