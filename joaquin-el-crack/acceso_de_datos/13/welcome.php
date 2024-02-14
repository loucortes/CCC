<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</head>

<body>
        <?php
        $name = $_GET['name'];
        $lname = $_GET['lname'];

        echo "Bienvenid@ $name $lname";
        ?>
</body>

</html>