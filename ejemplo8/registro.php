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
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <center><h1>PROPIETARIO</h1></center>
        <form method="POST" action="registro.php">
            
            <div class="form-group">
                <label for="doc">Documento</label>
                <input type="text" name="doc" class="form-control" id="doc">
            </div>

            <div class="form-group">
                <label for="doc">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="nombre">
            </div>

            <div class="form-group">
                <label for="doc">Direccion</label>
                <input type="text" name="dir" class="form-control" id="dir">
            </div>

            <div class="form-group">
                <label for="doc">Telefono</label>
                <input type="text" name="tel" class="form-control" id="tel">
            </div>

            <center>
                <input type="submit" value="Consultar" class="btn btn-primary" name="btn_consultar">
                <input type="submit" value="Registrar" class="btn btn-success" name="btn_registrar">
                <input type="submit" value="Actualizar" class="btn btn-info" name="btn_actualizar">
                <input type="submit" value="Eliminar" class="btn btn-danger" name="btn_eliminar">                
            </center>
        </form>

        <?php

            include("abrir_conexion.php");

            $doc = "";
            $nombre = "";                
            $dir = "";
            $tel = "";
                      
            if(isset($_POST['btn_consultar'])){
                $doc = $_POST['doc'];
                $existe = 0;

                if($doc=""){
                    echo "El documento es un campo obligatorio";
                }
                else{
                    $resultados = mysqli_query($conexion, "SELECT * FROM $tabla_db1 WHERE doc = '$doc'");
                    while($consulta = mysqli_fetch_array($resultados)){
                        echo $consulta['doc'] . "<br>";
                        echo $consulta['nombre'] . "<br>";
                        echo $consulta['direccion'] . "<br>";
                        echo $consulta['telefono'] . "<br>";
                        $existe++;                    
                    }
                    if($existe == 0){
                        echo "El documento no existe";
                    }
                }
            }

            if(isset($_POST['btn_registrar'])){
                echo "Presiono el botón Registrar";
            }

            if(isset($_POST['btn_actualizar'])){
                echo "Presiono el botón Actualizar";
            }

            if(isset($_POST['btn_eliminar'])){
                echo "Presiono el botón Eliminar";
            }
            
            include("cerrar_conexion.php");
        ?>
    </div>
    <div class="col-md-4"></div>
</div>
</body>
</html>