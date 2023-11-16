<?php

include("Conexion.php");

if (isset($_POST['Enviar'])) {
    
    if (strlen($_POST['Vehiculo']) >= 1 && strlen($_POST['Placa']) >= 1 && strlen($_POST['Entrada']) >= 1 ) {
        $Vehiculo = trim($_POST['Vehiculo']);
        $Placa = trim($_POST['Placa']);
        $Entrada = trim($_POST['Entrada']);

        $consulta = "INSERT INTO transporte( Vehiculo, Placa, Entrada) VALUES ('$Vehiculo','$Placa','$Entrada')";
        $resultado = mysqli_query($conexion, $consulta);

        if ($resultado) {
            header("Location: ../Contenido/index.php");
        }

    }else {
        ?>
        <h3 class="Bad">Por Favor Complete Los Campos</h3>
        <?php
    }
}

?>