<?php

    require_once '../../model/conexion_bd.php';

    try{

        $sql = "SELECT lb.nombre_libro,lb.autor,cat.categoria_nombre,pub.precio FROM publicaciones pub join libros lb on lb.id_libro = pub.id_libro join categorias cat on cat.id_categoria_libro = lb.id_categoria;";

        $stmt = $cnx->query($sql);

        $publicaciones = $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {

        $_SESSION['message'] = "Ocurrio un error: " .$e->getMessage();
        $_SESSION['message_type'] = "danger";
        exit;

    }

?>