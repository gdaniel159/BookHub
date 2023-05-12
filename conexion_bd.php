<?php

    session_start();

    // Conexion PDO

    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'bd_bookhub';

    // Usamos el try catch para manejar los errores de conexion en PDO

    try {

        $cnx = new PDO(

            // Donde esta el server / driver a usar / Base de datos a utilizar
            "mysql:hostname=$server;dbname=$db", 
            $user,
            $pass
    
        );

        // var_dump($cnx);

    } catch (PDOException $error) { // Aqui definimos el tipo de error que estamos buscando

        var_dump($error->getMessage()); // Con esto mostramos solo la salida del error obteniendo el mensaje de la instancia $error

    }

?>