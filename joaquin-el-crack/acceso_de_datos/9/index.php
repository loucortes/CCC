<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter&display=swap');

    body {
        font-family: 'Inter', sans-serif;
    }
</style>
<?php
$conn = new mysqli('localhost', 'root', '', 'bd_telefonia');

// insertar
$sql = "INSERT INTO usuarios (usuario, nombre, email, marca, telefono, compania, saldo) VALUES
    ('BRE2271', 'Bianca', 'bianca@live.com', 'Samsung', 777666555, 'O2', 25.43),
    ('OSC4677', 'Oscar', 'oscar@gmail.com', 'Sony', 915553344, 'Movistar', 100.00),
    ('JOS7086', 'José', 'francisco@gmail.com', 'Alcatel', 675675675, 'Orange', 65.43),
    ('ENR6115', 'Enrique', 'enrique@outlook.com', 'Nokia', 919919919, 'Orange', 87.06),
    ('LUI7072', 'Luis María', 'luisma@hotmail.com', 'Siemens', 912346554, 'Movistar', 54.76),
    ('DAN2832', 'Daniel', 'daniel@outlook.com', 'Samsung', 770220330, 'Digi', 30.00),
    ('JAQ5351', 'Jacqueline', 'jaqueline@outlook.com', 'LG', 607076607, 'Yaztel', 91.54),
    ('ROM6520', 'Román', 'roman@gmail.com', 'Samsung', 912342323, 'Digi', 10.00),
    ('BLA9739', 'Blas', 'blas@hotmail.com', 'Nokia', 645645645, 'Orange', 0.00),
    ('JES4752', 'Jessica', 'jessica@hotmail.com', 'LG', 666777555, 'Movistar', 36.78)";
$conn->query($sql);

// seleccionar usuarios distintos
$sql = "SELECT DISTINCT usuario FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Usuarios distintos:<br>";
    while ($row = $result->fetch_assoc()) {
        echo $row["usuario"] . "<br>";
    }
} else {
    echo "No se encontraron resultados.<br>";
}

// seleccionar compañías distintas de usuarios
$sql = "SELECT DISTINCT compania FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<br>Compañías distintas:<br>";
    while ($row = $result->fetch_assoc()) {
        echo $row["compania"] . "<br>";
    }
} else {
    echo "No se encontraron resultados.<br>";
}

// seleccionar nombres y teléfonos donde 'marca' esté en 'Nokia', 'Samsung', 'Sony'
$sql = "SELECT nombre, telefono FROM usuarios WHERE marca IN ('Nokia', 'Samsung', 'Sony')";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<br>Nombres y teléfonos con 'marca' en ('Nokia', 'Samsung', 'Sony'):<br>";
    while ($row = $result->fetch_assoc()) {
        echo $row["nombre"] . ", Teléfono: " . $row["telefono"] . "<br>";
    }
} else {
    echo "No se encontraron resultados.<br>";
}

// cuantos usuarios con saldo < 20
$sql = "SELECT COUNT(*) as total FROM usuarios WHERE saldo < 20";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "<br>Cantidad de usuarios con 'saldo' menor a 20: " . $row["total"] . "<br>";
} else {
    echo "No se encontraron resultados.<br>";
}

// cuantos usuarios con saldo <= 75
$sql = "SELECT telefono FROM usuarios WHERE saldo <= 75";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<br>Teléfonos de usuarios con 'saldo' menor o igual a 75:<br>";
    while ($row = $result->fetch_assoc()) {
        echo $row["telefono"] . "<br>";
    }
} else {
    echo "No se encontraron resultados.<br>";
}

// calcular la suma de saldos de usuarios donde 'compania' sea 'Orange'
$sql = "SELECT SUM(saldo) as total_saldo FROM usuarios WHERE compania = 'Orange'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "<br>Suma de saldos de usuarios con 'compania' igual a 'Orange': " . $row["total_saldo"] . "<br>";
} else {
    echo "No se encontraron resultados.<br>";
}

// seleccionar emails 'gmail'
$sql = "SELECT email FROM usuarios WHERE email LIKE '%gmail%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<br>Emails de usuarios con 'email' que contiene 'gmail':<br>";
    while ($row = $result->fetch_assoc()) {
        echo $row["email"] . "<br>";
    }
} else {
    echo "No se encontraron resultados.<br>";
}

// seleccionar emails de usuarios donde 'saldo' esté entre 50 y 100
$sql = "SELECT email FROM usuarios WHERE saldo BETWEEN 50 AND 100";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<br>Emails de usuarios con 'saldo' entre 50 y 100:<br>";
    while ($row = $result->fetch_assoc()) {
        echo $row["email"] . "<br>";
    }
} else {
    echo "No se encontraron resultados.<br>";
}

// seleccionar todos los campos de la tabla 'usuarios' ordenados por nombre de forma descendente
$sql = "SELECT * FROM usuarios ORDER BY nombre DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<br>Usuarios ordenados por nombre de forma descendente:<br>";
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id_telefonia"] . ", Usuario: " . $row["usuario"] . ", Nombre: " . $row["nombre"] . ", Email: " . $row["email"] . ", Marca: " . $row["marca"] . ", Teléfono: " . $row["telefono"] . ", Compañía: " . $row["compania"] . ", Saldo: " . $row["saldo"] . "<br>";
    }
} else {
    echo "No se encontraron resultados.<br>";
}
$conn->close();
?>
