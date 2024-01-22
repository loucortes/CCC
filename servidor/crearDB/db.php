<?php

$conexion = mysqli_connect("localhost", "root", "1234", "bd_ccc");

$selec = mysqli_query($conexion, "
SELECT nombre, apellidos FROM personal;
");

$result = mysqli_fetch_all($selec);

echo "Nombre Apellidos<br>";
foreach($result as $filas){
    foreach($filas as $dato){
        echo $dato . " ";
    }
    echo "<br>";
};

mysqli_close($conexion);