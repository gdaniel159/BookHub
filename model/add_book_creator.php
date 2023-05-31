<?php

    require_once 'conexion_bd.php';

    $nombre = $_POST['name'];
    $autor = $_POST['author'];
    $categoria = $_POST['category'];
    $genero = $_POST['genero'];
    $sinopsis = $_POST['synopsis'];
    $portada = $_POST['portada'];

    try{

        // Insert en la tabla de genero y categoria

        /* Genero */

        // Validamos primero si el genero existe

        $stmt = $cnx->prepare("SELECT id_genero_libro FROM generos WHERE genero_nombre = ?");
        $stmt->execute([$genero]);
        $id_genero = $stmt->fetchColumn();

        if(!$id_genero) {

            $stmt = $cnx->prepare("INSERT INTO generos (genero_nombre) VALUES (?)");
            $stmt->execute([$genero]);
            $id_genero = $cnx->lastInsertId();

        }

        // Validamos si la categoria existe

        $stmt = $cnx->prepare("SELECT id_categoria_libro FROM categorias WHERE categoria_nombre = ?");
        $stmt->execute([$categoria]);
        $id_categoria = $stmt->fetchColumn();

        if(!$id_categoria) {

            $stmt = $cnx->prepare("INSERT INTO categorias (categoria_nombre) VALUES (?)");
            $stmt->execute([$categoria]);
            $id_categoria = $cnx->lastInsertId();

        }

        // Ahora almacenamos el libro dentro de nuestra tabla libros

        $sql_libro = "INSERT INTO libros (id_creador,id_genero,id_categoria,id_estado,nombre_libro,sinopsis,portada) VALUES (?,?,?,?,?,?,?)";

        $stmt_insert_libro = $cnx->prepare($sql_libro);

        $id_creador = 3; // Coloca el valor correcto para id_creador

        $stmt_insert_libro->execute([$id_creador, $id_genero, $id_categoria, 2, $nombre, $sinopsis, $portada]);

        var_dump($stmt_insert_libro);

        if ($stmt_insert_libro) {

            header("Location: ../templates/pag_creador.php");
            exit();

        } else {

            header("Location: ../templates/cargar_info_libro.php");
            exit();

        }

    } catch (PDOException $e) {

        $_SESSION['message'] = "Ocurrió un error: " . $e->getMessage();
        $_SESSION['message_type'] = "danger";
        exit;

    }

?>