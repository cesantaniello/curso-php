<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 1</title>
</head>
<body>
    <?php
    echo '<b>Hola!</b><br/>';

    $nombre = "Carlos";

    echo '<b>' . $nombre . '<b><br>';

    $num1 = 1;
    $num2 = 2;
    $total = $num1 + $num2;

    echo 'La suma de ' . $num1 . ' y ' . $num2 . ' es: ' . $total;
    ?>
</body>
</html>