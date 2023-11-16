<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/stilo.css">
    <title>Contenido</title>
</head>
<body>

<h1>Parqueadero</h1>
    
<div class="contenedor_1">

<a href="../Añadir datos/index.php" class="Boton">Añadir Veichulo</a>

</div>

<h1>Lista De Vehiculos</h1>
<br>
<center><div class="tabla">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Vehiculo</th>
      <th scope="col">Placa</th>
      <th scope="col">Entreda</th>
      <th scope="col">Opciones</th>

    </tr>
  </thead>
  <tbody>
     <?php require_once 'conexion.php'?>
  </tbody>
</table>
</div></center>

<a href="../index.php" class="Boton_3" >Cerrar sesion</a>
</body>
</html>