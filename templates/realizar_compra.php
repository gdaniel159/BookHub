<?php require_once '../model/conexion_bd.php' ?>
<?php require '../model/verificar_sesion.php' ?>
<?php include '../model/compras_details.php' ?>
<?php include '../model/costo_total.php' ?>
<?php include '../model/datos_cliente.php' ?>
<?php include '../includes/header.html' ?>
<?php $suma = 0 ?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <div class="container-fluid">

            <a class="navbar-brand" href="">

                <img src="../images/brand/book-text_web-min.png" alt="" class="d-inline-block align-text-top img-fluid" style="width:200px; height:auto;">
                <!-- <span class="brandTitle">BookHub</span> -->

            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="backgroung-color:#fff;">

                <span class="navbar-toggler-icon" style="backgroung-color:#fff;"></span>

            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item" id="desplegable">

                        <a class="nav-link icon-navbar" href="#" onclick="toggleMenu()"><i class="fas fa-user"></i></a>

                        <div class="submenu-wrap" id="SubMenu">

                            <div class="sub-menu">

                                <div class="user-information">
                                    
                                    <?php if (isset($_SESSION['nombre'])) {  ?>

                                        <span class="nombre"><?= $_SESSION['nombre'] ?></span>

                                    <?php } ?>
                                    
                                    <hr>

                                    <!-- Perfil -->

                                    <div class="item-text-container">

                                        <span class="item-text-item text-start"><a class="nav-link" href="">Ver Perfil</a></span>
                                        <span class="item-text-item text-end"><i class="fas fa-chevron-right"></i></span>
                                        
                                    </div>

                                    <!-- Carrito -->

                                    <div class="item-text-container">

                                        <span class="item-text-item text-start"><a class="nav-link" href="">Carrito</a></span>
                                        <span class="item-text-item text-end"><i class="fas fa-chevron-right"></i></span>
                                        
                                    </div>

                                    <!-- Cerrar Sesion -->

                                    <div class="item-text-container">

                                        <span class="item-text-item text-start"><a class="nav-link" href="../model/logout.php">Cerrar Sesion</a></span>
                                        <span class="item-text-item text-end"><i class="fas fa-chevron-right"></i></span>
                                        
                                    </div>

                                    

                                </div>

                            </div>

                        </div>
                   
                    </li>

                </ul>

            </div>

        </div>

    </nav>

    <div class="container-fluid">

        <!-- Separador izq - der -->

        <div class="row">

            <!-- Lado izq-->

            <div class="col-lg-8 col-md-12 d-flex align-items-center justify-content-center">
                
                <div class="table-responsive">

                    <table class="table table-hover">

                        <thead class="table-dark text-center">

                            <tr>

                                <th class="">Portada</th>
                                <th class="">Nombre Libro</th>
                                <th class="">Autor</th>
                                <th class="">Precio por unidad</th>
                                <th class="">Cantidad</th>
                                <th class="">Precio Total</th>
                            
                            </tr>

                        </thead>

                        <tbody>

                            <?php foreach($Detalles_compra as $detalles) { ?>
                            
                                <tr class="text-center">

                                    <td><a href="<?php echo $detalles['portada'] ?>" target="_blank">Ver Portada</a></td>
                                    <td><?php echo $detalles['nombre_libro'] ?></td>
                                    <td><?php echo $detalles['autor'] ?></td>
                                    <td><?php echo $detalles['precio'] ?></td>
                                    <td><?php echo $detalles['cantidad'] ?></td>
                                    <td><?php echo $detalles['Precio Total'] ?></td>

                                </tr>
                            
                            <?php } ?>

                        </tbody>

                    </table>

                </div>

            </div>

            <!--Derecha -->

            <div class="col-lg-4 p-5">
                
                <h4 class="p-3">Información de la Compra</h4>

                <div class="table-responsive">
                                
                    <table class="table table-hover ">

                        <thead class="text-center">

                            <tr>

                                <th>Nombre del Libro</th>
                                <th>Cantidad</th>

                            </tr>

                        </thead>

                        <tbody>

                            <?php foreach($Detalles_compra as $detalles) { ?>
                                        
                                <tr class="text-center">

                                    <td><?php echo $detalles['nombre_libro'] ?></td>
                                    <td><?php echo $detalles['cantidad'] ?></td>
                                                
                                </tr>
                                            
                            <?php } ?>
                                            
                                            
                        </tbody>
                                                
                    </table>

                </div>

                <div class="text-center">
                
                    <span class="p-4">Costo Total</span> 
                    <span class="p-4">S/. <?php  echo $suma = $total_pagar ?></span>

                    <?php

						// Convertir el arreglo a una cadena de texto
						$productos = urlencode(json_encode($Detalles_compra));

                        $query_string = urlencode(json_encode($datos_cliente));

						// Generar la URL con los parámetros
						$url = '../model/htmltopdf.php?user_data='.$query_string.'&productos='.$productos.'';

					?>

                    <a href="<?php echo $url ?>" id="btn-descargar-boleta"><button type="button" class="btn btn-warning form-control mt-3">Finalizar Compra</button></a>

                </div>

            </div>

        </div>

        <div class="row">

            <footer class="footer">

                <div class="navegacion">

                    <ul class="navbar-nav">

                        <li class="nav-item">

                            <a class="nav-link" href="#">Sobre Nosotros</a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link" href="#">Terminos y Condiciones</a>

                        </li>

                    </ul>

                </div>

                <p class="text-muted">© 2023 BookHub, Independencia</p>

            </footer>             
                                            
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>

    <script type="text/javascript">

        $('#btn-descargar-boleta').click(function(e) {

            var encoded_user_data = '<?php echo $query_string; ?>';

            var user_data = JSON.parse(decodeURIComponent(encoded_user_data));

            var datosCliente_encoded = encodeURIComponent(JSON.stringify(user_data));

            var id_cliente_decoded = JSON.parse(decodeURIComponent(datosCliente_encoded));

            var idCliente = id_cliente_decoded[0].id_cliente;

            // Realizar la solicitud AJAX para eliminar los registros del carrito

            $.ajax({
                
                url: '../model/eliminar_carrito.php',
                type: 'POST',
                data: {id_cliente: idCliente},

                success: function(response) {

                    if (response.success) {

                        // Eliminación exitosa, redirigir a la página de carrito vacío o hacer alguna otra acción

                        window.location.href = '../templates/carrito_de_compras.php';

                    }

                },

                error: function(xhr, status, error) {

                    // Error en la solicitud AJAX, mostrar un mensaje de error o hacer alguna otra acción

                    alert('Ocurrió un error en la solicitud AJAX.');
                    console.log(error);
                
                }

            });
        });

    </script>

<?php include '../includes/footer.html' ?>