<?php

    session_start(); // Inicia la sesión

    // Destruye todas las variables de sesión

    $_SESSION = array();

    session_destroy(); // Destruye la sesión

    // Redirige al usuario a la página de inicio de sesión u otra página deseada
    
    header("Location: ../../intranet.php");
    exit();
    
?>
