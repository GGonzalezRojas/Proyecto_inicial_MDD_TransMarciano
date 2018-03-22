<?php

include 'conexion.php';

$nombre = $_POST["nombre"];

$insertar = "INSERT INTO nave_nodriza(nombre) VALUES ('$nombre')";

$resutado = mysqli_query($link, $insertar);

if(!$resutado)
{
    echo "Error al registrar";
}
else{echo "Nave registrada exitosamente";}

mysqli_close($link);

