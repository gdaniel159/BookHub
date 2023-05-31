<?php

    require_once 'conexion_bd.php';

    try{

        $sql = "SELECT lb.portada, lb.nombre_libro, est.estado_nombre, cat.categoria_nombre, gen.genero_nombre, lb.id_libro FROM `libros` lb join estados est on est.id_estado = lb.id_estado join categorias cat on cat.id_categoria_libro = lb.id_categoria join generos gen on gen.id_genero_libro = lb.id_genero WHERE lb.id_creador IS NOT NULL AND lb.id_administrador IS NULL;";

        $stmt = $cnx->query($sql);

        $listado_pub_creador = $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {

        $_SESSION['message'] = "Ocurrio un error: " .$e->getMessage();
        $_SESSION['message_type'] = "danger";
        exit;

    }

?>