<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Contenido.css">
    <title>Document</title>
</head>



<?php 

$host = "localhost";
$User = "root";
$pass = "";
$db = "vehiculos";

$conexion = mysqli_connect($host, $User, $pass, $db);

if ($conexion) {
    $consulta = 'SELECT * FROM transporte';
    $datos = $conexion -> query($consulta);
    if ($datos->num_rows > 0) {
        $contador = 0;
        while ($fila = $datos -> fetch_assoc()) {
            $Id = $contador += 1;
            $Vehiculo = $fila['Vehiculo'];
            $Placa = $fila['Placa'];
            $Entrada = $fila['Entrada'];
?>
            <tr>
                <td><?= $Id ?></td>
                <td><?= $Vehiculo ?></td>
                <td><?= $Placa ?></td>
                <td><?= $Entrada ?></td>
                <td><button class="Boton_1">Editar</button><button class="Boton_2">Pagar</button></td>
            </tr>
<?php 
            
        }
    }
}

?>
</html>