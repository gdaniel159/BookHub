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
            $fecha_publicacion = new DateTime('now');
            $fecha_formateada = $fecha_publicacion->format('Y-m-d');
            
            $sql = "INSERT INTO publicaciones (id_libro,id_administrador,fecha_publicacion,precio) VALUES ('.$id_libro.','.$id_administrador.','.$fecha_formateada.','.$precio.')";

            $stmt = $cnx->query($sql);

            header("Location: ../index_admin.php");
            exit();

            // print_r($libro_publicar);
            // print_r($id_administrador);
    
        } catch (PDOException $e) {
    
            $_SESSION['message'] = "Ocurrio un error: " .$e->getMessage();
            $_SESSION['message_type'] = "danger";
            exit;
    
        }

    }

?>