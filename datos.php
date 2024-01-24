<?php
function printList($dato){
    foreach ($dato as $x) {
        foreach ($x as $y) {
            echo $y . " ";
        }
        echo "<br>";
    }
    echo "<br>";
}

$conection = new PDO("mysql:host=localhost:3307; dbname = db_ccc", "root", "1234");
$conection->query("USE bd_ccc;");
$selec = $conection->prepare("SELECT nombre, apellidos, direccion, ciudad, puesto FROM personal ORDER BY apellidos;");
$selec->execute();
$result = $selec->fetchAll(PDO::FETCH_NUM);
printList($result);
$selec = $conection->prepare("SELECT DISTINCT ciudad FROM personal;");
$selec->execute();
$result = $selec->fetchAll(PDO::FETCH_NUM);
printList($result);
$selec = $conection->prepare("SELECT nombre, apellidos FROM personal WHERE anio >= 2022;");
$selec->execute();
$result = $selec->fetchAll(PDO::FETCH_NUM);
printList($result);
$selec = $conection->prepare("SELECT nombre, apellidos, Telefono FROM personal WHERE Puesto = 'alumnado' AND anio >= 2021;");
$selec->execute();
$result = $selec->fetchAll(PDO::FETCH_NUM);
printList($result);
echo "<br>";


