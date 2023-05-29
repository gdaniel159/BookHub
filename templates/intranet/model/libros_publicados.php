<?php

    require_once '../../model/conexion_bd.php';

    try{

        $sql = "SELECT lb.portada, lb.nombre_libro, lb.autor, cat.categoria_nombre, ge.genero_nombre, lb.id_libro, lb.sinopsis FROM libros lb join categorias cat on cat.id_categoria_libro = lb.id_categoria join generos ge on ge.id_genero_libro = lb.id_genero";

        $stmt = $cnx->query($sql);

        $publicaciones = $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {

        $_SESSION['message'] = "Ocurrio un error: " .$e->getMessage();
        $_SESSION['message_type'] = "danger";
        exit;

    }

?>