<?php

    require_once 'conexion_bd.php';

    if(isset($_POST['btnLogin'])) {

        // Obtain the data

        $correo = $_POST['correo'];
        $password = $_POST['password'];

        try {

            $sql = "SELECT cau.correo, cau.contraseña, cau.nombres, cau.apellidos FROM clientes cli JOIN cuentausuarios cau ON cli.id_cuenta = cau.id_cuenta WHERE cau.correo='$correo'";

            $stmt = $cnx->query($sql);
            $row = $stmt->fetch(); // Uso para una consulat SELECT
        
            if ($row && password_verify($password, $row['contraseña'])) {

                session_start();
                $_SESSION['message'] = "Bienvenido " . $row['nombres'] . ' ' . $row['apellidos'];
                $_SESSION['message_type'] = "success";
                $_SESSION['verificador'] = true;
                header("Location: pagina_principal.php");
                exit();

            } else {

                session_start();
                $_SESSION['message'] = "Ingrese los datos correctos";
                $_SESSION['message_type'] = "danger";
                header("Location: login.php");
                exit();

            }

        } catch (PDOException $e) {

            $_SESSION['message'] = "Ocurrio un error: " .$e->getMessage();
            $_SESSION['message_type'] = "danger";
            header("Location: login.php");
            exit;

        }

    }

?>