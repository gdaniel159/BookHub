<?php

    require_once 'conexion_bd.php';

    try{

        $sql = "SELECT * FROM categorias";

        $stmt = $cnx->query($sql);

        $categorias = $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {

        $_SESSION['message'] = "Ocurrio un error: " .$e->getMessage();
        $_SESSION['message_type'] = "danger";
        exit;

    }


?>