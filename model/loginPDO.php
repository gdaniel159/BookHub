<?php

    require_once 'conexion_bd.php';

    if(isset($_POST['btnLogin'])) {

        // Obtain the data

        $correo = $_POST['correo'];
        $password = $_POST['password'];

        try {

            $sql = "SELECT cau.correo, cau.contraseña, cau.nombres, cau.apellidos FROM administradores adm JOIN cuentausuarios cau ON adm.id_cuenta = cau.id_cuenta WHERE cau.correo='$correo'";

            $stmt = $cnx->query($sql);
            $row = $stmt->fetch();
        
            if ($row && password_verify($password, $row['contraseña'])) {

                session_start();
                $_SESSION['message'] = "Bienvenido " . $row['nombres'] . ' ' . $row['apellidos'];
                $_SESSION['nombre'] = $row['nombres'];
                $_SESSION['message_type'] = "success";
                $_SESSION['verificador'] = true;
                header("Location: ../templates/pagina_principal.php");
                exit();

            } else {

                session_start();
                $_SESSION['message'] = "Ingrese los datos correctos";
                $_SESSION['message_type'] = "danger";
                header("Location: ../templates/login.php");
                exit();

            }

        } catch (PDOException $e) {

            $_SESSION['message'] = "Ocurrio un error: " .$e->getMessage();
            $_SESSION['message_type'] = "danger";
            header("Location: ../templates/login.php");
            exit;

        }

    }

?>