<?php

    // Aquí debes incluir la configuración de conexión a la base de datos
    require 'conexion_bd.php';

    // Obtener el id del cliente (puedes usar $_SESSION u otra forma de identificación)
    $id_cliente = $_POST['id_cliente']; // Reemplaza esto con tu lógica para obtener el id del cliente

    try {

        // Eliminar los registros de la tabla carrito
        $sql = "DELETE FROM carrito WHERE id_cliente = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id_cliente);
        $stmt->execute();

        // Enviar respuesta de éxito al cliente
        $response = ['success' => true];
        echo json_encode($response);

    } catch (PDOException $e) {

        // Enviar respuesta de error al cliente
        $response = ['success' => false];
        echo json_encode($response);
        
    }

?>