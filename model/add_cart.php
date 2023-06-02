<?php

    require_once 'conexion_bd.php';

    $id_libro = $_POST['bookId'];
    $cantidad = $_POST['quantity'];

    try{

        // Traer el id_cliente para añadir al carrito

        $stmt = $cnx->prepare("SELECT id_cliente FROM clientes cli JOIN cuentausuarios cau on cau.id_cuenta = cli.id_cuenta  WHERE cau.nombres = ?");
        $stmt->execute([$_SESSION['nombre']]);
        $id_cliente = $stmt->fetchColumn();

        $sql = "INSERT INTO carrito (id_libro,id_cliente,cantidad) VALUES (?,?,?)";

        $stmt_insert = $cnx->prepare($sql);

        $stmt_insert->execute([$id_libro,$id_cliente,$cantidad]);

        if ($stmt_insert) {

            header("Location: ../templates/carrito_de_compras.php");
            exit();

        } else {

            header("Location: ../templates/pagina_principal.php");
            exit();
            
        }

    } catch (PDOException $e) {

        $_SESSION['message'] = "Ocurrio un error: " .$e->getMessage();
        $_SESSION['message_type'] = "danger";
        exit;

    }


?>