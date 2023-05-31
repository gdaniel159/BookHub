<?php

    require_once 'conexion_bd.php';

    $id_libro = $_POST['bookId'];
    $cantidad = $_POST['quantity'];

    try{

        $sql = "INSERT INTO carrito (id_libro,cantidad) VALUES (?,?)";

        $stmt_insert = $cnx->prepare($sql);

        $stmt_insert->execute([$id_libro,$cantidad]);

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