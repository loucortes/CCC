<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter&display=swap');

    body,
    input,
    select,
    option {
        font-family: 'Inter', sans-serif;
        font-size: 16px;
    }
</style>

<?php

$username = $_POST['username'];
$pwd = $_POST['pwd'];

$conn = new mysqli('localhost', 'root', '', 'r');

try {

    $conn->stmt_init();
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND pwd = ?");
    $stmt->bind_param('ss', $username, $pwd);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        header('Location: welcome.php?name='.$row['nombre'].'&lname='.$row['apellidos']);
    } else {
        header('Location: index.php?error=notFound');
    }
    
    $stmt->close();
    $conn->close();
} catch (Exception $e) {
    echo $e->getMessage();
}