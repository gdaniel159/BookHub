<?php

    require_once '../../../model/conexion_bd.php';

    $autor = $_GET['autor'];
    $categoria = $_GET['categoria'];
    $genero = $_GET['genero'];
    $id_libro = $_GET['id_libro'];
    $titulo = $_GET['titulo'];
    $sinopsis = $_GET['sinopsis'];
    $portada = $_GET['portada'];

    try{

        $stmt = $cnx->prepare("SELECT id_categoria_libro FROM categorias WHERE categoria_nombre = ?");
        $stmt->execute([$categoria]);
        $categoria_id = $stmt->fetchColumn();

        // If the category doesn't exist, insert it
        
        if (!$categoria_id) {
            $stmt = $cnx->prepare("INSERT INTO categorias (categoria_nombre) VALUES (?)");
            $stmt->execute([$categoria]);
            $categoria_id = $cnx->lastInsertId();
        }

        // Check if the genre already exists

        $stmt = $cnx->prepare("SELECT id_genero_libro FROM generos WHERE genero_nombre = ?");
        $stmt->execute([$genero]);
        $genero_id = $stmt->fetchColumn();

        // If the genre doesn't exist, insert it

        if (!$genero_id) {
            $stmt = $cnx->prepare("INSERT INTO generos (genero_nombre) VALUES (?)");
            $stmt->execute([$genero]);
            $genero_id = $cnx->lastInsertId();
        }

        // Validamos si es que el libro existe o no

        $stmt = $cnx->prepare("SELECT nombre_libro FROM libros WHERE nombre_libro = ?");
        $stmt->execute([$titulo]);
        $libro_existe = $stmt->fetchColumn();

        if($libro_existe) {

            session_start();
            $_SESSION['message'] = "El libro ya existe en la BD";
            $_SESSION['message_type'] = "warning";
            header("Location: ../index_admin.php");

        } else {

            $stmt = $cnx->prepare("INSERT INTO libros (id_creador, id_administrador, id_genero, id_categoria, id_estado, nombre_libro, autor, sinopsis, portada) VALUES (NULL, 1, ?, ?, 2, ?, ?, ?, ?)");
            $stmt->execute([$genero_id, $categoria_id, $titulo, $autor, $sinopsis, $portada]);


            if ($stmt) {

                session_start();
                $_SESSION['message'] = "Libro registrado correctamente";
                $_SESSION['message_type'] = "success";
                header("Location: ../publicar_libros.php");
                exit();

            } else {

                session_start();
                $_SESSION['message'] = "Algo salio mal";
                $_SESSION['message_type'] = "danger";
                header("Location: ../solicitar_libros.php");
                exit();
                
            }

        }

    } catch (PDOException $e) {

        $_SESSION['message'] = "Ocurrio un error: " .$e->getMessage();
        $_SESSION['message_type'] = "danger";
        exit;

    }

?>