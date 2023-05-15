<?php

    // Verificar si la variable de sesión de verificación está establecida y es verdadera
    if (!isset($_SESSION['verificador']) || $_SESSION['verificador'] !== true) {

        // Si la variable de sesión no está establecida o no es verdadera, redirige al usuario a la página de inicio de sesión u otra página de acceso
        
        header("Location: login.php");
        exit();

    }

?>