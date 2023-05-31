<?php require_once '../model/conexion_bd.php'; ?>
<?php require '../model/listado_carrito_producto.php' ?>
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
                
            <h2 class="text-center">Carrito de compras</h2> 

            <p class="text-center">Revisa los libros que añadiste a tu carrito de compras</p>

			<div class="container">

        		<div class="row">

            		<div class="col-md-12">

                		<div class="table-responsive">

							<table class="table text-center m-auto">

								<thead class="table-dark">
						
									<tr>
						
										<th class="text-center" style="border: solid #000 2px;">Lista de Libros Añadidos al carrito</th>
						
									</tr>
						
								</thead>

								<tbody style="border: solid #000 2px;">

									<tr>

										<td>

											<div class="mb-3">

												<?php foreach($productos_carrito as $producto) { ?>

													<div class="contenido p-2 d-flex justify-content-around align-items-center">
													
														<div class="contenido-1">

															<img src="<?php echo $producto['portada'] ?>" alt="" width="200" height="300">

															<div class="sub-contenido-2 ms-4 mt-3">

																<p>Autor: <?php echo $producto['autor'] ?></p>
																<p>Nombre del libro: <?php echo $producto['nombre_libro'] ?></p>
																<p>Cantidad: <?php echo $producto['cantidad'] ?></p>

															</div>

															<div class="sub-contenido-3 mt-5">
																
																<p>Precio: S/. <?php echo $producto['precio'] * $producto['cantidad'] ?></p>

															</div>

														</div>

														<div class="acciones">

															<a href="" class="btn btn-success comprar">Comprar</a>
															<a href="" class="btn btn-danger cancelar">Cancelar</a>

														</div>
												
													</div>

												<?php } ?>

											</div>

										</td>

									</tr>

								</tbody>
						
							</table>
            
                		</div>

					</div>
					
				</div>

			</div>

            <div class="informacion-pago text-center">

                <p>Total de todo: Suma de los precios</p>

                <a href="" class="btn btn-success">Comprar Todo</a>

            </div>

        </div>

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