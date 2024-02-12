<?php
include_once "./includes/dbh.inc.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <table class="table table-dark">
        <thead>
            <tr>
                <th>fname</th>
                <th>lname</th>
                <th>username</th>
                <th>email</th>
                <th>pwd</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
        <?php
        $stmt = $conn->query("SELECT * FROM users");

        if(isset($_GET["id"])){
        
            while($row = $stmt->fetch_assoc()){
                if($_GET["id"] == $row["id_users"]){
                    '<tr>';
        echo '      <form action="includes/create.php" method="post">';
        echo '       <td>     <label for="fname">Nombre: <input type="text" name="fname" id="fname" value="' . $row["fname"] . '"></label> </td>';
        echo '       <td>     <label for="lname">Apellidos: <input type="text" name="lname" id="lname" value"' . $row["lname"] .'"></label> </td>';
        echo '       <td>     <label for="username">Nombre de usuario: <input type="text" name="username" id="username"></label> </td>';
        echo '       <td>     <label for="email">Correo Electrónico: <input type="email" name="email" id="email"></label> </td>';
        echo '       <td>     <label for="pwd">Contraseña: <input type="password" name="pwd" id="pwd"></label> </td>';
        echo '       <td>     <input type="submit"> </td>';
        echo '       </form>';
                '</tr>';
                }else{
                    echo '  <tr>';
                    echo  '      <td>' . $row["fname"] . '</td>';
                    echo '       <td>' . $row["lname"] . '</td>';
                     echo '       <td>' . $row["username"] . '</td>';
                    echo   '     <td>' . $row["email"] . '</td>';
                    echo '        <td>' . $row["pwd"] . '</td>';
                    echo '       <td class="d-flex gap-4">';
                    echo '            <a href="update_form.php?id=' . $row["id_users"] . '" class="btn btn-primary">update</a> ';
                    echo '            <a href="update_form.php?id=' . $row["id_users"] . '" class="btn btn-danger">delete</a> ';
                    echo '        </td> ';
                    echo '    </tr>';
                }
                
                
            
        }
            
        }else{
            while($row = $stmt->fetch_assoc()){
            echo '  <tr>';
            echo  '      <td>' . $row["fname"] . '</td>';
            echo '       <td>' . $row["lname"] . '</td>';
             echo '       <td>' . $row["username"] . '</td>';
            echo   '     <td>' . $row["email"] . '</td>';
            echo '        <td>' . $row["pwd"] . '</td>';
            echo '       <td class="d-flex gap-4">';
            echo '            <a href="update_form.php?id=' . $row["id_users"] . '" class="btn btn-primary">update</a> ';
            echo '            <a href="update_form.php?id=' . $row["id_users"] . '" class="btn btn-danger">delete</a> ';
            echo '        </td> ';
            echo '    </tr>';
        }
    }

            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>