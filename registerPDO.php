<?php

    require_once 'conexion_bd.php';

    if (isset($_POST['btnRegister'])) {

        $nombres = $_POST['name'];
        $apellido = $_POST['surname'];
        $correo = $_POST['correo'];
        $fecha = $_POST['nacimiento'];
        $contraseña = password_hash($_POST['password'], PASSWORD_BCRYPT);

        try {

            $sql = "

                -- Esta sentencia sql sirve para englobar todas las consultas que realizamos
                -- en este caso comenzamos una transaccion para hacer una query e insertar
                -- en dos tablas diferentes valores que son dependientes

                START TRANSACTION;
            
                INSERT INTO `cuenta usuarios`(id_tipo_cuenta, nombres, apellidos, fecha_nacimiento, correo, contraseña) VALUES (2,'$nombres','$apellido','$fecha','$correo','$contraseña');

                -- Esta sentencia nos ayuda a almacenar el ultimo id generado por la insercion
                -- en nuestra tabla 'cuenta usuarios'

                SET @last_id = LAST_INSERT_ID();

                INSERT INTO `Clientes` (id_cuenta_cliente) VALUES (@last_id);

                COMMIT;

            ";

            $stmt = $cnx->query($sql); // Aqui solo es necesario hacer la query y ya esta, no es necesario un fetch obviamente.

            if ($stmt) {

                session_start();
                $_SESSION['message'] = "Usuario Registrado Correctamente";
                $_SESSION['message_type'] = "success";
                header("Location: login.php");
                exit();

            } else {

                session_start();
                $_SESSION['message'] = "Ingrese los datos correctos";
                $_SESSION['message_type'] = "danger";
                header("Location: register.php");
                exit();
                
            }

        } catch (PDOException $e) {

            session_start();
            $_SESSION['message'] = "Error occurred: " . $e->getMessage();
            $_SESSION['message_type'] = "danger";
            header("Location: register.php");
            exit();

        }

    }

?>