<?php
require_once "dbh.inc.php";
function showQuery($query, $conn)
{
    try {
        $stmt = $conn->query($query);

        foreach ($stmt->fetch_all() as $row) {
            foreach ($row as $data) {
                echo $data . " ";
            }
            echo "<br>";
        }

    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

$conn->query("INSERT INTO alumnos (nombre, apellidos, email, modalidad, curso, tutor) VALUES
('Cristina', 'Pérez García', 'cristina@hotmail.com', 'Online', 1, 'Ester'),
('Fernando', 'Escobar López', 'fernado@telefonica.net', 'Presencial', 1, 'Ester'),
('Elsa', 'Ruiz Ramos', 'elsa@gmail.com', 'Online', 2, 'Ramón'),
('Miguel', 'Rodríguez Calvo', 'miguel@yahoo.es', 'Online', 2, 'Ramón'),
('Sonia', 'Herranz Escalada', 'sonia@hotmail.com', 'Online', 2, 'Ramón'),
('Luis', 'Arias Argüelles', 'luis@gmail.com', 'Presencial', 1, 'Ester'),
('Eduardo', 'Zapatero Sánchez', 'eduardo@meparto.com', 'Online', 2, 'Ramón'),
('Paula', 'Fernández Recio', 'paula@telefonica.net', 'Presencial', 1, 'Ester'),
('Inés', 'Alfaro Medrano', 'ines@hotmail.com', 'Presencial', 1, 'Ester'),
('Adrián', 'Alamillo Pérez', 'adrian@hotmail.com', 'Presencial',2,'Cristina');");


echo "Tutora Ester:";
showQuery("SELECT nombre, apellidos FROM alumnos WHERE tutor = 'Ester' AND modalidad = 'Presencial'", $conn);
echo "<br>";

echo "Tutor Ramón:";
showQuery("SELECT nombre, apellidos FROM alumnos WHERE tutor = 'Ramón' AND modalidad = 'Online'", $conn);
echo "<br>";

echo "Hotmail:";
showQuery("SELECT email FROM alumnos WHERE email LIKE '%hotmail%'", $conn);
echo "<br>";

echo "Orden alfabético:";
showQuery("SELECT * FROM alumnos ORDER BY nombre ASC", $conn);
echo "<br>";
