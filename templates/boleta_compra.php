<?php require_once '../model/conexion_bd.php'; ?>

<?php

    $user_data = json_decode($_GET['user_data'], true);
    $products = json_decode($_GET['productos'], true);

?>

<!DOCTYPE html>

<html lang="en" style="margin: 0px;">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boleta de Compra</title>

</head>

<body style="background-color: rgb(20, 20, 20);">

    <div>

        <div style="background-color: rgb(20, 20, 20); padding: 10px; height: 120px";>

            <div style="margin-top: 15px;">

                <h1 style="float: left; margin-right: -1px; margin-left: 17%; color: white;">BOOK</h1>
                <h1 style="float: left; margin-right: 90px; color: orange;">HUB</h1>

            </div>

            <div style="float: left; margin-right: 50px; margin-top: -2px; ">

                <p style="font-size: 15px; color: white;">Venta de Libros Físicos</p>
                <p style="font-size: 15px; color: white;" >RUC: 19538322240</p>
            
            </div>

            <div style="float: left; margin-right: 70px;">

                <h2 style="color: whitesmoke;">Perú</h2>

            </div>
            
            <div style=" float: left; margin-top: -7px; border: solid 4px whitesmoke; padding: 3px 7px 3px 7px;">

                <p style="font-size: 12px; color: white;">Fecha de emisión: <?php echo $fecha; ?><span id="fecha-emision"></span></p>
                <hr style="color: white;">
                <p style="font-size: 12px; color: white;">Tipo de Moneda: Soles</p>

            </div>

        </div>

        <div style="background-color: orange; margin-top: -25px ;">

            <p style="text-align: center; font-size: 20px; padding: 10px;">DATOS DEL CLIENTE</p>

        </div>

        <div style="background-color: rgb(20, 20, 20); margin-top:-20px; ">            
            <?php foreach($user_data as $user) { ?>

                <div style="border: solid 1px rgb(20, 20, 20);">

                    <p style="font-size:14px; color: white; float: left;  margin-left:10% ; margin-right: 1%;">Cliente:</p>

                    <p style="font-size:14px; color: white; "> <?php echo $user['nombres'] . ' ' . $user['apellidos']; ?> </p>

                </div>

                <div style="border: solid 1px rgb(20, 20, 20);">
                
                    <p style="font-size:14px; color: white; float: left;  margin-left:10% ; margin-right: 1%;">DNI:</p>
                    <p style="font-size: 14px; color: white;"> <?php echo $user['dni']; ?> </p>
                
                </div>

                <div style="border: solid 1px rgb(20, 20, 20);">

                    <p style="font-size:14px; color: white; float: left;  margin-left:10% ; margin-right: 1%;">Teléfono:</p>
                    <p style="font-size:14px; color: white;"><?php echo $user['telefono']; ?></p>

                </div>
                
                <div style="border: solid 1px rgb(20, 20, 20);">

                    <p style="font-size:14px; color: white; float: left;  margin-left:10% ; margin-right: 1%;">Correo:</p>
                    <p style="font-size: 14px; color: white;"><?php echo $user['correo']; ?></p>
                
                </div>

            <?php } ?>

        </div>

        <div style="background-color: orange; margin-top: -25px ;">

            <p style="text-align: center; font-size: 20px; padding: 10px;">DATOS DE LA COMPRA</p>

        </div>

        <div style="background-color: rgb(20, 20, 20);">

            <table style="width: 100%; padding: 10px; margin-top: -20px;">

                <tr>
            
                    <th style="border: solid 3px whitesmoke; color: white; padding: 5px;">Nombre del Libro</th>
                
                    <th style="border: solid 3px whitesmoke; color: white; padding: 5px;">Precio / u</th>
                
                    <th style="border: solid 3px whitesmoke; color: white; padding: 5px;">Cantidad</th>

                    <th style="border: solid 3px whitesmoke; color: white; padding: 5px;">Total</th>
            
                </tr>

                <?php foreach($products as $producto) { ?>
            
                    <tr style="text-align: center;">
                
                        <td style="color: white;"><?php echo $producto['nombre_libro'] ?></td>
                    
                        <td style="color: white;"><?php echo $producto['precio'] ?></td>
                    
                        <td style="color: white;"><?php echo $producto['cantidad'] ?></td>

                        <td style="color: white;"><?php echo $producto['Precio Total'] ?></td>
                
                    </tr>

                <?php } ?>
                
                <tr>

                    <td></td>
                    <td></td>
                    <td><hr style="color: whitesmoke;"></td>
                    <td><hr style="color: whitesmoke;"></td>

                </tr>

                <tfoot>
                    
                    <tr style="text-align: center;">
                        
                        <td></td>
            
                        <td></td>
                    
                        <th style="color: white;">SubTotal</th>
        
                        <td style="color: white;">S/. <?php echo $total ?></td>

                    </tr>

                    <tr style="text-align: center;">
                        
                        <td></td>
            
                        <td></td>
                    
                        <th style="color: white;">IGV (18%)</th>
        
                        <td style="color: white;">S/. <?php echo $impuesto ?> </td>

                    </tr>

                    <tr style="text-align: center;">
                        
                        <td></td>
            
                        <td></td>
                    
                        <th style="color: white;">TOTAL NETO</th>
        
                        <td style="color: white;">S/. <?php echo $total_a_pagar ?></td>

                    </tr>
                
                </tfoot>
            
            </table>

        </div>

    </div>
    
</body>
</html>