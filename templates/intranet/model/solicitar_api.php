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

        // Insert the book with the obtained category and genre IDs
        
        $stmt = $cnx->prepare("INSERT INTO libros (id_creador, id_administrador, id_genero, id_categoria, id_estado, nombre_libro, autor, sinopsis, portada) VALUES (NULL, 1, ?, ?, 2, ?, ?, ?, ?)");
        $stmt->execute([$genero_id, $categoria_id, $titulo, $autor, $sinopsis, $portada]);


        if ($stmt) {

            session_start();
            $_SESSION['message'] = "Usuario Registrado Correctamente";
            $_SESSION['message_type'] = "success";
            header("Location: ../publicar_libros.php");
            exit();

        } else {

            session_start();
            $_SESSION['message'] = "Ingrese los datos correctos";
            $_SESSION['message_type'] = "danger";
            header("Location: ../solicitar_libros.php");
            exit();
            
        }

    } catch (PDOException $e) {

        $_SESSION['message'] = "Ocurrio un error: " .$e->getMessage();
        $_SESSION['message_type'] = "danger";
        exit;

    }

?>