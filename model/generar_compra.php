<?php

    require_once 'conexion_bd.php';

    try {

        // Recuperamos los datos

        $nombre_cliente = $_GET['nombre_cliente'];
        $productos_carrito_str = $_GET['libros'];
        $cantidad = $_GET['cantidad'];
        $productos_carrito = json_decode(urldecode($productos_carrito_str), true);

        // Traemos el id_cliente

        $stmt = $cnx->prepare("SELECT id_cliente FROM clientes cli JOIN cuentausuarios cau ON cau.id_cuenta = cli.id_cuenta WHERE cau.nombres = ?");
        $stmt->execute([$nombre_cliente]);
        $id_cliente = $stmt->fetchColumn();

        // Almacenamos los id_publicacion en un arreglo

        $id_publicaciones = array();

        // Iteramos sobre los productos del carrito

        foreach ($productos_carrito as $key => $producto) {

            // Obtén los datos del producto

            $id_libro = $producto['id_libro'];
            $cantidad_producto = $cantidad[$key];
        
            // Traemos los id de publicacion para el libro actual

            $stmt = $cnx->prepare("SELECT id_publicacion FROM publicaciones WHERE id_libro = ?");
            $stmt->execute([$id_libro]);
            $id_publicaciones_producto = $stmt->fetchAll(PDO::FETCH_COLUMN);
        
            // Agregamos los id de publicacion al arreglo principal

            $id_publicaciones = array_merge($id_publicaciones, $id_publicaciones_producto);

        }

        // Generamos las ventas utilizando los id_publicacion almacenados

        $fecha_venta = date('Y-m-d');
        $sql_generar_venta = "INSERT INTO ventas (id_cliente, id_publicacion, fecha) VALUES (?, ?, ?)";
        $stmt_insert_venta = $cnx->prepare($sql_generar_venta);

        foreach ($id_publicaciones as $id_publicacion) {

            $stmt_insert_venta->execute([$id_cliente, $id_publicacion, $fecha_venta]);

        }

        header("Location: ../templates/realizar_compra.php");
        exit();

    } catch (PDOException $e) {

        $_SESSION['message'] = "Ocurrió un error: " . $e->getMessage();
        $_SESSION['message_type'] = "danger";
        exit;
        
    }
    
?>
