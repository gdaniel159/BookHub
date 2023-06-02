<?php

    // Aquí debes incluir la configuración de conexión a la base de datos
    require 'conexion_bd.php';

    // Obtener el id del cliente (puedes usar $_SESSION u otra forma de identificación)
    $id_cliente = $_POST['id_cliente']; // Reemplaza esto con tu lógica para obtener el id del cliente

    try {

        // // Traer el id_venta de el usuario logeado en la pagina

        // $stmt_id_venta = $cnx->prepare("SELECT id_venta FROM ventas WHERE id_cliente = ?");
        // $stmt_id_venta->execute([$id_cliente]);
        // $id_venta = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // $id_venta = $id_venta[0][0];

        // // Traer el precio_total de cada producto

        // $stmt_precio = $cnx->prepare("SELECT (pub.precio * cart.cantidad) as 'Precio Total' FROM ventas vts join publicaciones pub on pub.id_publicacion = vts.id_publicacion join libros lb on lb.id_libro = pub.id_libro join carrito cart on cart.id_libro = lb.id_libro;");

        // $precio = $stmt_precio->fetchAll(PDO::FETCH_ASSOC);

        // // Insercion de los datos al detalle de compra

        // $sql = "INSERT INTO detalle_venta (id_venta,precio,xml_file) VALUES (?,?,?)";

        // $stmt_insert = $cnx->prepare($sql);

        // $stmt_insert->execute([$id_venta]);

        // Eliminar los registros de la tabla carrito
        
        $sql = "DELETE FROM carrito WHERE id_cliente = :id";
        $stmt_delete = $cnx->prepare($sql);
        $stmt_delete->bindParam(':id', $id_cliente);
        $stmt_delete->execute();

        // if ($stmt_insert) {

        //     header("Location: ../templates/carrito_de_compras.php");
        //     exit();

        // } else {

        //     header("Location: ../templates/pagina_principal.php");
        //     exit();
            
        // }

    } catch (PDOException $e) {

        $_SESSION['message'] = "Ocurrio un error: " .$e->getMessage();
        $_SESSION['message_type'] = "danger";
        exit;
        
    }

?>