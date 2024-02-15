<?php
require_once "dbh.inc.php";

$conn->query("ALTER TABLE personal ADD COLUMN anio INT;");
$conn->query("DROP TABLE IF EXISTS centros;");

$conn->query("INSERT INTO personal (nombre, apellidos, direccion, ciudad, telefono, puesto, anio) VALUES
('Begoña', 'Pérez García', 'C/Mayor 5 2ºA, Madrid', 'Madrid', 777666555, 'administración', 2020),
('Fernando', 'Escobar López', 'C/Almirante 27 3°E, Getafe', 'Getafe', 915553344, 'docencia', 2021),
('Elsa', 'Ruiz Ramos', 'C/Silicio 37 9ºD, Torrejón de Ardoz', 'Torrejón de Ardoz', 675675675, 'docencia', 2022),
('Miguel', 'Rodríguez Calvo', 'Avda del Sol 124 P3 2º 19, Coslada', 'Coslada', 919919919, 'alumnado', 2021),
('Sonia', 'Herranz Escalada', 'Plaza Mayor 7, Leganés', 'Leganés', 912346554, 'alumnado', 2021),
('Luis', 'Arias Argüelles', 'Avda Juan XXIII PS 3º 2º, Madrid', 'Madrid', 770220330, 'alumnado', 2022),
('Eduardo', 'Zapatero Sánchez', 'C/Antonio Machado 12 2º, Guadalajara', 'Guadalajara', 607076607, 'alumnado', 2022),
('Paula', 'Fernández Recio', 'Avda Unión Europea 156 5º C, Torrejón de Ardoz', 'Torrejón de Ardoz', 912342323, 'docencia', 2023),
('Inés', 'Alfaro Medrano', 'C/Libreros 224 3º A, Leganés', 'Leganés', 645645645, 'alumnado', 2021),
('Adrián', 'Alamillo Pérez', 'C/Las torres 25, Madrid', 'Madrid', 666777555, 'administracion', 2021);");

$conn->query("ALTER TABLE personal CHANGE COLUMN id_ccc id_personal VARCHAR(150);");

$stmt = $conn->query("SELECT nombre, apellidos, direccion, ciudad, puesto FROM personal ORDER BY apellidos;");
while ($row = $stmt->fetch_assoc()) {
    echo "Nombre: " . $row["nombre"] . ", Apellidos: " . $row["apellidos"] . ", Dirección: " . $row["direccion"] . ", Ciudad: " . $row["ciudad"] . ", Puesto: " . $row["puesto"] . "<br>";
}
echo "<br>";

$stmt = $conn->query("SELECT DISTINCT ciudad FROM personal;");
while ($row = $stmt->fetch_assoc()) {
    echo $row["ciudad"] . "<br>";
}
echo "<br>";

$stmt = $conn->query("SELECT nombre, apellidos FROM personal WHERE anio >= 2022;");
while ($row = $stmt->fetch_assoc()) {
    echo $row["nombre"] . " " . $row["apellidos"] . "<br>";
}
echo "<br>";

$stmt = $conn->query("SELECT nombre, apellidos, telefono FROM personal WHERE puesto = 'alumnado' AND anio >= 2021;");

while ($row = $stmt->fetch_assoc()) {
    echo $row["nombre"] . " " . $row["apellidos"] . ", Teléfono: " . $row["telefono"] . "<br>";
}


$conn->close();
