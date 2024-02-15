<?php
require_once "dbh.inc.php";

$conn->query("INSERT INTO usuarios (usuario, nombre, email, marca, telefono, compania, saldo) VALUES
('BRE2271', 'Bianca', 'bianca@live.com', 'Samsung', 777666555, 'O2', 25.43),
('OSC4677', 'Oscar', 'oscar@gmail.com', 'Sony', 915553344, 'Movistar', 100.00),
('JOS7086', 'José', 'francisco@gmail.com', 'Alcatel', 675675675, 'Orange', 65.43),
('ENR6115', 'Enrique', 'enrique@outlook.com', 'Nokia', 919919919, 'Orange', 87.06),
('LUI7072', 'Luis María', 'luisma@hotmail.com', 'Siemens', 912346554, 'Movistar', 54.76),
('DAN2832', 'Daniel', 'daniel@outlook.com', 'Samsung', 770220330, 'Digi', 30.00),
('JAQ5351', 'Jacqueline', 'jaqueline@outlook.com', 'LG', 607076607, 'Yaztel', 91.54),
('ROM6520', 'Román', 'roman@gmail.com', 'Samsung', 912342323, 'Digi', 10.00),
('BLA9739', 'Blas', 'blas@hotmail.com', 'Nokia', 645645645, 'Orange', 0.00),
('JES4752', 'Jessica', 'jessica@hotmail.com', 'LG', 666777555, 'Movistar', 36.78);");

$stmt = $conn->query("SELECT DISTINCT usuario FROM usuarios;");

while ($row = $stmt->fetch_assoc()) {
    echo $row["usuario"] . "<br>";
}
echo "<br><br>";

$stmt = $conn->query("SELECT DISTINCT compania FROM usuarios;");
while ($row = $stmt->fetch_assoc()) {
    echo $row["compania"] . "<br>";
}
echo "<br><br>";

$stmt = $conn->query("SELECT nombre, telefono FROM usuarios WHERE marca IN ('Nokia', 'Samsung', 'Sony');");
while ($row = $stmt->fetch_assoc()) {
    echo $row["nombre"] . ", Teléfono: " . $row["telefono"] . "<br>";
}
echo "<br><br>";

$stmt = $conn->query("SELECT COUNT(*) AS total FROM usuarios WHERE saldo < 20;");

$row = $stmt->fetch_assoc();
echo "<br>Usuarios con saldo menor a 20: " . $row["total"] . "<br>";

echo "<br><br>";

$stmt = $conn->query("SELECT telefono FROM usuarios WHERE saldo <= 75;");

while ($row = $stmt->fetch_assoc()) {
    echo $row["telefono"] . "<br>";
}
echo "<br><br>";


$stmt = $conn->query("SELECT SUM(saldo) as total_saldo FROM usuarios WHERE compania = 'Orange';");
$row = $stmt->fetch_assoc();
echo "<br>Suma de saldos: " . $row["total_saldo"] . "<br>";
echo "<br><br>";


$stmt = $conn->query("SELECT email FROM usuarios WHERE email LIKE '%gmail%';");
echo "<br>Emails con email gmail:<br>";
while ($row = $stmt->fetch_assoc()) {
    echo $row["email"] . "<br>";
}
echo "<br><br>";


$stmt = $conn->query("SELECT email FROM usuarios WHERE saldo BETWEEN 50 AND 100;");
echo "<br>usuarios con saldo entre 50 y 100:<br>";
while ($row = $stmt->fetch_assoc()) {
    echo $row["email"] . "<br>";
}
echo "<br><br>";

$stmt = $conn->query("SELECT * FROM usuarios ORDER BY nombre DESC");
echo "<br>Usuarios forma descendente:<br>";
while ($row = $stmt->fetch_assoc()) {
    echo "ID: " . $row["id_telefonia"] . ", Usuario: " . $row["usuario"] . ", Nombre: " . $row["nombre"] . ", Email: " . $row["email"] . ", Marca: " . $row["marca"] . ", Teléfono: " . $row["telefono"] . ", Compañía: " . $row["compania"] . ", Saldo: " . $row["saldo"] . "<br>";
}

$conn->close();
