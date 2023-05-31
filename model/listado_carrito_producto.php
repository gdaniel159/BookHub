<?php

    require_once 'conexion_bd.php';

    try{

        $sql = "SELECT lb.portada, lb.autor, lb.nombre_libro, ca.cantidad , pub.precio FROM `carrito` ca join libros lb on lb.id_libro = ca.id_libro join publicaciones pub on pub.id_libro = lb.id_libro;";

        $stmt = $cnx->query($sql);

        $productos_carrito = $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {

        $_SESSION['message'] = "Ocurrio un error: " .$e->getMessage();
        $_SESSION['message_type'] = "danger";
        exit;

    }

?>