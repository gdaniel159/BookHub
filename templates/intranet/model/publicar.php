<?php

    require_once '../../../model/conexion_bd.php';

    if(isset($_POST['btnEnviar'])) {

        $id_libro = $_GET['id_libro'];
        $precio = $_POST['precio'];

        try{

            // Seleccionamos los datos
    
            $stmt = $cnx->prepare("SELECT * FROM libros WHERE id_libro = ?");
            $stmt->execute([$id_libro]);
    
            $libro_publicar =  $stmt->fetchAll();
    
            // Los insertamos a la publicacion
    
            $id_administrador = $libro_publicar[0][2];
            $id_creador = $libro_publicar[0][1];
            $fecha_publicacion = date('Y-m-d');

            // Validar si es de un administrador o de un creador

            if ($id_administrador === null) {

                $sql_insert = "INSERT INTO publicaciones (id_libro, id_creador, fecha_publicacion, precio) VALUES (?, ?, ?, ?)";

                $stmt_insert = $cnx->prepare($sql_insert);

                $stmt_insert->execute([$id_libro, $id_creador, $fecha_publicacion, $precio]);

            } else {

                $sql_insert = "INSERT INTO publicaciones (id_libro, id_administrador, fecha_publicacion, precio) VALUES (?, ?, ?, ?)";

                $stmt_insert = $cnx->prepare($sql_insert);

                $stmt_insert->execute([$id_libro, $id_administrador, $fecha_publicacion, $precio]);

            }

            // Actualizamos la tabla libros

            $sql_update = "UPDATE libros SET id_estado = ? WHERE id_libro = ?";

            $stmt_update = $cnx->prepare($sql_update);
            $stmt_update->execute([1, $id_libro]);

            header("Location: ../index_admin.php");
            exit();
    
        } catch (PDOException $e) {
    
            $_SESSION['message'] = "Ocurrio un error: " .$e->getMessage();
            $_SESSION['message_type'] = "danger";
            exit;
    
        }

    }

?>