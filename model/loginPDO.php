<?php

    require_once 'conexion_bd.php';

    if(isset($_POST['btnLogin'])) {

        // Obtain the data

        $correo = $_POST['correo'];
        $password = $_POST['password'];

        try {

            $sql = "SELECT cau.correo, cau.contraseña, cau.nombres, cau.apellidos, cau.id_tipo_cuenta FROM cuentausuarios cau where cau.correo = '$correo'";

            $stmt = $cnx->query($sql);
            $row = $stmt->fetch();
        
            if ($row && password_verify($password, $row['contraseña'])) {

                session_start();

                $_SESSION['message'] = "Bienvenido " . $row['nombres'] . ' ' . $row['apellidos'];
                $_SESSION['nombre'] = $row['nombres'];
                $_SESSION['apellido'] = $row['apellidos'];
                $_SESSION['message_type'] = "success";
                $_SESSION['verificador'] = true;

                if ($row['id_tipo_cuenta'] == 1) {

                    header("Location: ../templates/intranet/index_admin.php");
                    exit();

                } elseif ($row['id_tipo_cuenta'] == 2) {

                    header("Location: ../templates/pagina_principal.php");
                    exit();

                } elseif ($row['id_tipo_cuenta'] == 3) {

                    header('Location: ../templates/pag_creador.php');
                    exit();

                }

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