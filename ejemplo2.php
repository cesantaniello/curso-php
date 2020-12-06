<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 1</title>
</head>
<body>
    <?php

        $num1 = 5;
        $num2 = 5;

        if($num1 == $num2){
            echo 'Los numeros son iguales';
        }
        else{
            if($num1 > $num2){
                echo "El número $num1 es mayor que el número $num2";
            }
            else{
                echo "El número $num1 es menor que el número $num2";
            }
        }
    ?>
</body>
</html>