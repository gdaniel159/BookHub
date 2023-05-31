<?php

    require_once 'conexion_bd.php';

    try{

        $sql_get_id_genero = "SELECT id_genero_libro FROM generos WHERE genero_nombre = 'Ciencia Ficción'";

        $stmt_get_id_genero = $cnx->query($sql_get_id_genero);

        $id_genero = $stmt_get_id_genero->fetchColumn();

        var_dump($id_genero);


    } catch (PDOException $e) {

        $_SESSION['message'] = "Ocurrio un error: " .$e->getMessage();
        $_SESSION['message_type'] = "danger";
        exit;

    }

?>