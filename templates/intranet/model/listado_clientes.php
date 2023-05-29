<?php

    require_once '../../model/conexion_bd.php';

    try{

        $sql = "SELECT cau.correo, cau.dni, cau.telefono, cau.nombres, cau.apellidos FROM cuentausuarios cau WHERE cau.id_tipo_cuenta = 2";

        $stmt = $cnx->query($sql);

        $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {

        $_SESSION['message'] = "Ocurrio un error: " .$e->getMessage();
        $_SESSION['message_type'] = "danger";
        exit;

    }

?>