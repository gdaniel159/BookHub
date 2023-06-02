<?php

    require_once 'conexion_bd.php';

    try {

        $nombre = $_SESSION['nombre'];
        
        $sql = "SELECT cau.nombres, cau.apellidos, cau.dni, cau.telefono, cau.correo, cli.id_cliente FROM clientes cli JOIN cuentausuarios cau on cau.id_cuenta = cli.id_cuenta WHERE cau.nombres = :nombre";

        $stmt = $cnx->prepare($sql);
        $stmt->bindValue(':nombre', $nombre, PDO::PARAM_STR);
        $stmt->execute();

        $datos_cliente = $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {

        $_SESSION['message'] = "Ocurrió un error: " . $e->getMessage();
        $_SESSION['message_type'] = "danger";
        exit;
        
    }

?>