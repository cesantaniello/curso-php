<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST en la misma página</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
    <form method="POST" action="ejemplo6.php" class="form-inline">
        
        <label for="numero1">Numero</label>
        <input type="text" name="num1" class="form-control" id="numero1">
                
        <label for="numero2">Final</label>
        <input type="text" name="num2" class="form-control" id="numero2"> 

        <label for="operador">Operador</label>
        <select class="form-control" name="operador">
            <option>Suma</option>
            <option>Resta</option>
            <option>Multiplicacion</option>
            <option>Division</option>
            <option>Potenciacion</option>
        </select>  

        <input type="submit" value="Enviar" class="btn btn-success" name="btn1">
    </form>
    <center><h2>
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">

        <?php
            if(isset($_POST['btn1'])){
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $operador = $_POST['operador'];

                switch($operador){
                    case 'Suma': 
                        suma($num1, $num2);
                    break;

                    case 'Resta': 
                        $total = $num1 - $num2;
                        echo "$num1 - $num2 = $total";
                    break;
                    
                    case 'Multiplicacion': 
                        multiplicar($num1, $num2);
                    break;

                    case 'Division': 
                        $total = $num1 / $num2; 
                        echo "$num1 / $num2 = " . number_format($total,2,",",".");
                    break;

                    case 'Potenciacion': 
                        $total = $num1 ** $num2;
                        echo "$num1 ^ $num2 = $total";
                    break;

                    default: echo "Elige un operador de la lista";
                }
            }


        function suma($var1,$final)
        {
            echo "<h1>SUMA</h1>";
            echo "<table class=\"table table-striped\">";

            for ($i=0;$i<=$final;$i++){
                $total = $var1+$i;
                echo "<tr><td><center>$var1 + $i = ".number_format($total,2,",",".")."</center></td></tr>";
            }

            echo "</table>";
        }

        function multiplicar($var1,$final)
        {
            echo "<h1>MULTIPLICAR</h1>";
            echo "<table class=\"table table-striped\">";

            for ($i=0;$i<=$final;$i++){
                $total = $var1*$i;
                echo "<tr><td><center>$var1 x $i = ".number_format($total,2,",",".")."</center></td></tr>";
            }

            echo "</table>";
        }

        ?>
        </div>
        <div class="col-md-4"></div>
      </div>
  </h2></center>  
</body>
</html>