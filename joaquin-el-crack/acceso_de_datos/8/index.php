<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter&display=swap');

    body {
        font-family: 'Inter', sans-serif;
    }
</style>
<?php
$conn = new mysqli('localhost', 'root', '', 'bd_ccc');

// añadir columna anio
$sql = "ALTER TABLE personal ADD COLUMN anio INT";
$conn->query($sql);

// eliminar tabla 'centros'
$sql = "DROP TABLE IF EXISTS centros";
$conn->query($sql);

// insertar datos en la tabla 'personal'
$sql = "INSERT INTO personal (nombre, apellidos, direccion, ciudad, telefono, puesto, anio) VALUES
    ('Begoña', 'Pérez García', 'C/Mayor 5 2ºA, Madrid', 'Madrid', 777666555, 'administración', 2020),
    ('Fernando', 'Escobar López', 'C/Almirante 27 3°E, Getafe', 'Getafe', 915553344, 'docencia', 2021),
    ('Elsa', 'Ruiz Ramos', 'C/Silicio 37 9ºD, Torrejón de Ardoz', 'Torrejón de Ardoz', 675675675, 'docencia', 2022),
    ('Miguel', 'Rodríguez Calvo', 'Avda del Sol 124 P3 2º 19, Coslada', 'Coslada', 919919919, 'alumnado', 2021),
    ('Sonia', 'Herranz Escalada', 'Plaza Mayor 7, Leganés', 'Leganés', 912346554, 'alumnado', 2021),
    ('Luis', 'Arias Argüelles', 'Avda Juan XXIII PS 3º 2º, Madrid', 'Madrid', 770220330, 'alumnado', 2022),
    ('Eduardo', 'Zapatero Sánchez', 'C/Antonio Machado 12 2º, Guadalajara', 'Guadalajara', 607076607, 'alumnado', 2022),
    ('Paula', 'Fernández Recio', 'Avda Unión Europea 156 5º C, Torrejón de Ardoz', 'Torrejón de Ardoz', 912342323, 'docencia', 2023),
    ('Inés', 'Alfaro Medrano', 'C/Libreros 224 3º A, Leganés', 'Leganés', 645645645, 'alumnado', 2021),
    ('Adrián', 'Alamillo Pérez', 'C/Las torres 25, Madrid', 'Madrid', 666777555, 'administracion', 2021)";
$conn->query($sql);

// cambiar nombre de la columna 'id_ccc' a 'id_personal'
$sql = "ALTER TABLE personal CHANGE COLUMN id_ccc id_personal VARCHAR(150)";
$conn->query($sql);

// seleccionar y mostrar datos de la tabla 'personal'
$sql = "SELECT nombre, apellidos, direccion, ciudad, puesto FROM personal ORDER BY apellidos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Nombre: " . $row["nombre"] . ", Apellidos: " . $row["apellidos"] . ", Dirección: " . $row["direccion"] . ", Ciudad: " . $row["ciudad"] . ", Puesto: " . $row["puesto"] . "<br>";
    }
} else {
    echo "No se encontraron resultados.<br>";
}

// seleccionar ciudades distintas
$sql = "SELECT DISTINCT ciudad FROM personal";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<br>Ciudades distintas:<br>";
    while ($row = $result->fetch_assoc()) {
        echo $row["ciudad"] . "<br>";
    }
} else {
    echo "No se encontraron resultados.<br>";
}

// nombre y apellido anio >= 2022
$sql = "SELECT nombre, apellidos FROM personal WHERE anio >= 2022";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<br>Nombres y apellidos >= 2022:<br>";
    while ($row = $result->fetch_assoc()) {
        echo $row["nombre"] . " " . $row["apellidos"] . "<br>";
    }
} else {
    echo "No se encontraron resultados.";
}

// seleccionar nombres, apellidos y teléfono del alumnado
$sql = "SELECT nombre, apellidos, telefono FROM personal WHERE puesto = 'alumnado' AND anio >= 2021";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<br>Nombres, apellidos y teléfono con 'puesto' igual a 'alumnado' y 'anio' mayor o igual a 2021:<br>";
    while ($row = $result->fetch_assoc()) {
        echo $row["nombre"] . " " . $row["apellidos"] . ", Teléfono: " . $row["telefono"] . "<br>";
    }
} else {
    echo "No se encontraron resultados.<br>";
}

$conn->close();
