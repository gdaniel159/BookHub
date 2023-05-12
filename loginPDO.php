<?php

    require_once 'conexion_bd.php';

    if(isset($_POST['btnLogin'])) {

        // Obtain the data

        $correo = $_POST['correo'];
        $password = $_POST['password'];

        $sql = "SELECT cau.correo, cau.contraseña, cau.nombres, cau.apellidos FROM clientes cli JOIN `cuenta usuarios` cau ON cli.id_cuenta_cliente = cau.id_cuenta WHERE cau.correo='$correo' AND cau.contraseña='$password'";

        $rs = $cnx->query($sql);
        
        if ($row = $rs->fetch()) {

            $_SESSION['message'] = "Bienvenido ".$row[2].' '.$row[3];
            $_SESSION['message_type'] = "success";
            header("Location: index.php");

        } else {

            $_SESSION['message'] = "Ingrese los datos correctos";
            $_SESSION['message_type'] = "danger";
            header("Location: login.php");

        }

    }

?>