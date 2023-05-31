<?php require_once '../model/conexion_bd.php'; ?>
<?php include '../includes/header.html' ?>

<div class="container-fluid">

    <div class="row contenedordevainas p-3">
            
        <section class="col-lg-6 col-md-12 perfilcliente in-flex" style="border:2px solid #000; border-radius: 10px;">

            <div class="p-1 m-auto mb-3" style="text-align: center;">

                <img class="p-2" src="https://cdn-icons-png.flaticon.com/512/456/456212.png" style="height: 110px; text-align: center ;">
                <h5>Bienvenido!!/ Bienvenida!! </h5>
                <a href="pagina_principal.php">Back</a>

            </div>

            <button type="button" class="btn btn-light" onclick="window.location.href='datos_cuenta.php'">Datos de la cuenta</button>

            <button type="button" class="btn btn-light" onclick="window.location.href='carrito_de_compras.php'">Carrito de Compras</button>

            <button type="button" class="btn btn-light" onclick="window.location.href='billetera_cliente.php'">Billetera de la Cuenta</button>

            <button type="button" class="btn btn-light" onclick="window.location.href='gestion_contraseña.php'">Gestion de Contraseña</button>

            <button type="button" class="btn btn-light" onclick="window.location.href='pagina_principal.php'">Salir</button>

        </section>
            
        <section class="col-lg-6 col-md-12 m-auto p-3" style="border: solid #000 2px; border-radius: 10px">
                
            <h2>Carrito de compras</h2>
            <p>Revisa los libros que añadiste a tu carrito de compras</p>
                
            <div class="table-responsive">

                <table style="border: solid #000 2px; width:100%">

                    <tr style="text-align:center;">

                        <td style="border:solid #000 2px">Lista de Libros añadidos al Carrito</td>
                        <td style="width:23%; border:solid #000 2px">Acciones</td>

                    </tr>

                    <tr>

                        <td style="border: solid #000 2px">
                                
                            <div style="display: flex; align-items: center; margin-inline:7px">

                                <img src="#" style="background: grey; height: 90px; width: 75px">

                                <div class="style-p-ccompras" style="margin-inline: 10px;">

                                    <p class="style-p-ccompras">{{Nombre_autor}}</p>
                                    <p class="style-p-ccompras">{{Nombre_libro}}</p>
                                    <p class="style-p-ccompras">{{cantidad_libros}}</p>

                                </div>

                                <p style="margin-left: 1px; margin-top: 27%">{{Costo total}}</p>

                            </div>

                        </td>
                            

                        <td style="border:solid #000 2px; text-align:center;">

                            <button type="button" class="btn btn-success" style="border-radius: 3px; margin-bottom: 7px;">Comprar</button>

                            <button type="button" class="btn btn-danger" style="border-radius: 3px; margin-block:3px">Cancelar</button>

                        </td>

                    </tr>

                </table>

            </div>
                    
        </section>

    </div>
    
    <div class="row">

        <footer class="footer">

            <div class="navegacion">

                <ul class="navbar-nav">

                    <li class="nav-item">

                        <a class="nav-link" href="about-me.php">Sobre Nosotros</a>

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

<?php include '../includes/footer.html' ?>