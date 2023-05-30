<?php

    require_once 'conexion_bd.php';

    try{

        $sql = "SELECT lb.portada, lb.nombre_libro, lb.autor, pub.precio, lb.sinopsis, cat.categoria_nombre, gen.genero_nombre FROM `libros` lb join publicaciones pub on pub.id_libro = lb.id_libro join generos gen on gen.id_genero_libro = lb.id_genero join categorias cat on cat.id_categoria_libro = lb.id_categoria WHERE id_estado = 1";

        $stmt = $cnx->query($sql);

        $libros_publicados = $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {

        $_SESSION['message'] = "Ocurrio un error: " .$e->getMessage();
        $_SESSION['message_type'] = "danger";
        exit;

    }

?>