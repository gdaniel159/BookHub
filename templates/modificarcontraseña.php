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
                    
            <h2>Cambiar contraseña</h2> 

            <p>Cambia tu contraseña frecuentemente para evitar problemas a futuro</p>
    
            <section class="p-5" style="border: solid #000 2px; border-radius: 10px;">
                    
                <h3>Nueva Contraseña: </h3>
                        
                <input type="password" class="form-control" style="border:solid #000 2px; border-radius: 3px;" id="floatingPassword1" placeholder="Nueva contraseña">

                <p>Contraseña superior a 8 caracteres (letras, números y caracteres)</p>

                <label for="floatingPassword1"></label>
                    
                <h3>Confirmar Contraseña: </h3>
                        

                <input type="password" class="form-control" style="border:solid #000 2px; border-radius:3px" id="floatingPassword1" placeholder="Confirmar contraseña">

                <p>Debe ser igual a la contraseña antes brindada</p>

                <label for="floatingPassword1"></label>
        
                <a href="" class="btn btn-success mt-3 form-control">Actualizar Contraseña</a>

            </section>
                    
        </section>

    </div>

</div>

<?php include '../includes/footer.html' ?>