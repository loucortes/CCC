<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter&display=swap');

    body {
        font-family: 'Inter', sans-serif;
    }
</style>
<?php
$conn = new mysqli('localhost', 'root', '', 'daw');

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
('Adrián', 'Alamillo Pérez', 'adrian@hotmail.com', 'Presencial',2,'Cristina')");

function q($query, $conn)
{
    try {
        $r = $conn->query($query);

        foreach ($r->fetch_all() as $u) {
            foreach ($u as $ui) {
                echo "$ui ";
            }
            echo '<br>';
        }

    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

echo '<h2>Alumnos con tutora Ester y presencial:</h2>';
q("SELECT nombre, apellidos FROM alumnos WHERE tutor = 'Ester' AND modalidad = 'Presencial'", $conn);

echo '<br>';

echo '<h2>Alumnos con tutor Ramón y online:</h2>';
q("SELECT nombre, apellidos FROM alumnos WHERE tutor = 'Ramón' AND modalidad = 'Online'", $conn);

echo '<br>';

echo '<h2>Alumnos con hotmail:</h2>';
q("SELECT email FROM alumnos WHERE email LIKE '%hotmail%'", $conn);

echo '<br>';

echo '<h2>Lista ordenada alfabéticamente:</h2>';
q("SELECT * FROM alumnos ORDER BY nombre ASC", $conn);

echo '<br>';
?>