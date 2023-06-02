<?php

    require_once 'conexion_bd.php';

    try{

        $sql = "SELECT lb.portada, lb.nombre_libro, lb.autor, pub.precio, cart.cantidad, pub.precio * cart.cantidad as 'Precio Total' FROM ventas vnt join publicaciones pub on pub.id_publicacion = vnt.id_publicacion join libros lb on lb.id_libro = pub.id_libro join carrito cart on cart.id_libro = lb.id_libro;";

        $stmt = $cnx->query($sql);

        $Detalles_compra = $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {

        $_SESSION['message'] = "Ocurrio un error: " .$e->getMessage();
        $_SESSION['message_type'] = "danger";
        exit;

    }

?>