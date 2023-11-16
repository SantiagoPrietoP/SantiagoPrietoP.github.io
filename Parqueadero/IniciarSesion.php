<?php
session_start();
 include('conexion.php');

 if (isset($_POST['Usuario']) && isset($_POST['Contraseña'])) {
    function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $Usuario = validate($_POST['Usuario']);
    $Contraseña = validate($_POST['Contraseña']);

    if (empty($Usuario)) {
        header("Location: index.php?error=El Usuario es Requerido");
        exit();
    }elseif (empty($Contraseña)) {
        header("Location: index.php?error=La Contraseña es Requerido");
        exit();
    }else {
        //$Contraseña = md5($Contraseña);
        
        $Sql = "SELECT * FROM usuarios WHERE Usuario ='$Usuario' AND Contraseña ='$Contraseña'";
        $result =mysqli_query($conexion, $Sql);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if ($row['Usuario'] === $Usuario && $row['Contraseña'] === $Contraseña) {
            $_SESSION['Usuario'] = $row['Usuario'];
            $_SESSION['Nombre_Completo'] = $row['Nombre_Completo'];
            $_SESSION['Id'] = $row['Id'];
            header("Location: ./Contenido/index.php");
            exit();
            
        }else {
            header("Location: index.php?error=El Usuario y la contraseña son incorrectas");
            exit();
        }
            
        }else {
            header("Location: index.php?error=El Usuario y la contraseña son incorrectas");
            exit();
        }
    }
}
         
    
 