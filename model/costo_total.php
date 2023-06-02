<?php

    require_once 'conexion_bd.php';

    try{

        $sql = "SELECT SUM(pub.precio * cart.cantidad) as Total FROM ventas vnt join publicaciones pub on pub.id_publicacion = vnt.id_publicacion join libros lb on lb.id_libro = pub.id_libro join carrito cart on cart.id_libro = lb.id_libro;";

        $stmt = $cnx->query($sql);

        $total_pagar = $stmt->fetchColumn();

    } catch (PDOException $e) {

        $_SESSION['message'] = "Ocurrio un error: " .$e->getMessage();
        $_SESSION['message_type'] = "danger";
        exit;

    }

?>