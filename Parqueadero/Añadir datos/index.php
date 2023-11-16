<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/Añadir.css">
  <title>Añadir Vehiculo</title>
</head>
<body>

     <form method="post">
        <h2>Añadir Vehiculo</h2>

        <div class="input_grupo">
            <label for="Vehiculo">Ingrese El Tipo De Vehiculo</label>
            <input type="text" name="Vehiculo" id="Vehiculo">

            <label for="Placa">Ingresa La Placa Del Vehiculo</label>
            <input type="text" name="Placa" id="Placa">

            <label for="Entrada">Ingresa La Hora De Entrada Del Vehiculo</label>
            <input type="datatime" name="Entrada" id="Entrada">
            
            <input class="btn" type="submit" value="Enviar" name="Enviar">
            <input class="btn_1" type="submit" value="Cancelar">
        </div>
     </form>
     <?php

     include("Registro.php");
     
     
     ?>
        
</body>
</html>