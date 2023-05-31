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
        
            <h2 class="text-center">Billetera de la cuenta</h2> 

            <p class="text-center mt-3">Revisar tu saldo actual en la billetera y Depositar dinero para poder ejercer tus compras</p>

            <h2>Depositar Saldo: </h2>
                
            <section class="p-4" style="text-align: center; border: solid #000 2px; border-radius: 10px; margin-top: 5%;">
                    
                    
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOaADWMN_Ebnpm-qji3MOA_8rBWNRsPRUXkQ&usqp=CAU" style="height:90px; width:90px">

                <span id="linea" ></span>
                        
                <div class="input-group mb-3">

                    <span class="input-group-text"><img src="https://cdn-icons-png.flaticon.com/512/423/423519.png" style="height:30px; width:30px"></span>

                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="XXXX-XXXX-XXXX-XXXX">

                </div>

                <div class="input-group mb-3">

                    <span class="input-group-text"><img src="https://cdn.icon-icons.com/icons2/2528/PNG/512/calendar_icon_151795.png" style="height:30px; width:30px"></span>

                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="DD/MM/AAAA">

                    <span class="input-group-text" style="margin-left:2rem"><img src="https://cdn-icons-png.flaticon.com/512/423/423519.png" style="height:30px; width:30px"></span>

                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="CVV">

                </div>

                <div class="input-group mb-3">

                    <span class="input-group-text"><img src="https://cdn-icons-png.flaticon.com/512/456/456212.png" style="height:30px; width:30px"></span>

                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="Nombre">

                    <span class="input-group-text" style="margin-left:2rem"><img src="https://cdn-icons-png.flaticon.com/512/456/456212.png" style="height:30px; width:30px"></span>

                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="Apellido">

                </div>

                <div class="input-group mb-3">

                    <span class="input-group-text"><img src="https://cdn-icons-png.flaticon.com/512/646/646094.png" style="height:30px; width:30px"></span>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="Correo electrónico">

                </div>

                <div class="input-group mb-3">

                    <span class="input-group-text"><img src="https://cdn-icons-png.flaticon.com/512/69/69192.png" style="height:30px; width:30px"></span>

                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="Saldo a depositar">

                </div>
                    
                <a href="" class="btn btn-success form-control mt-3">Depositar</a>

            </section>
                    
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