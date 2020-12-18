<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Probando</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<input type="button" value="SALUDAME" onclick="saludame();">
<div id="mostrar_mensaje"></div>

<script>
	function saludame()
    { 
      var parametros = 
      {
        "nombre" : "dostin",
        "apellido" : "hurtado",
        "telefono" : "123456789"
      };

      $.ajax({
        data: parametros,
        url: 'codigo_php.php',
        type: 'POST',
        
        beforesend: function()
        {
          $('#mostrar_mensaje').html("Mensaje antes de Enviar");
        },

        success: function(mensaje)
        {
          $('#mostrar_mensaje').html(mensaje);
        }
      });
    }
</script>    
</body>
</html>