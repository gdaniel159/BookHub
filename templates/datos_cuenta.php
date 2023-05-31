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
                
            <h2>Datos de la Cuenta</h2> 

            <p>Revisa los datos vinculados a tu cuenta y/o actualizarlos.</p>
                
            <section class="p-3">
                    
                <h5>Nombres</h5>
                <p>{{Nombres_cuenta}}</p>

                <h5>Apellidos</h5>
                <p>{{Apellidos_cuenta}}</p>

                <h5>Gmail</h5>
                <p>{{gmail_cuenta}}</p>

                <h5>Genero</h5>
                <p>{{Masculino/Femenino/Motto Motto}}</p>

                <h5>Fecha de nacimiento</h5>
                <p>{{dd/mm/yyyy}}</p>

                <div style="text-align:center;">

                    <a href="editar_datos_cuenta.php" class="btn btn-primary form-control mt-3">Editar Datos</a>

                </div>
                        
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