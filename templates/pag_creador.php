<?php require_once '../model/conexion_bd.php'; ?>
<?php require '../model/verificar_sesion.php' ?>
<?php require '../model/listado_pub_creador.php' ?>
<?php include '../includes/header.html'; ?>

  	<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">

		<div class="container-fluid">

			<a class="navbar-brand" href="">

				<img src="../images/brand/book-text_web-min.png" alt="" class="d-inline-block align-text-top img-fluid" style="width:200px; height:auto;">

			</a>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="backgroung-color:#fff;">

				<span class="navbar-toggler-icon" style="backgroung-color:#fff;"></span>

			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item" id="desplegable">
						
                        <a class="nav-link icon-navbar" href="#" onclick="toggleMenu()"><span style="margin-right:20px">DashBoard</span><i class="fas fa-user"></i></a>

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

									<!-- Billetera Virtual -->

                                    <div class="item-text-container">

                                        <span class="item-text-item text-start"><a class="nav-link" href="">Billetera Virtual</a></span>
                                        <span class="item-text-item text-end"><i class="fas fa-chevron-right"></i></span>
                                        
                                    </div>

									<!-- Cargar Libros -->

                                    <div class="item-text-container">

                                        <span class="item-text-item text-start"><a class="nav-link" href="cargar_info_libro.php">Cargar Libros</a></span>
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
 
  	<div class="container-fluid bg-white mt-5">

    	<div class="row">

     		<!-- contendido  -->

      		<div class="col-md-12">
				
        		<div class="p-4 justify-content-center">

          			<h5 class="text-lg font-weight-bold text-center display-5 text-uppercase mb-5">

            			Manejo de libros subidos a la página

          			</h5>

					<h3 class="mb-4 font-weight-bold text-uppercase">Lista de Publicaciones</h3>

					<div class="table-responsive">

						<table class="table table-hover">

							<thead class="table-dark text-center">

								<tr>
									<th>Codigo Libro</th>
									<th>Nombre</th>
									<th>Categoría</th>
									<th>Género</th>
									<th>Ventas</th>
									<th>Estado del libro</th>
									<th>Portada</th>
									<th>Acciones</th>
								</tr>

							</thead>

							<tbody class="table-striped text-center">

								<?php foreach($listado_pub_creador as $publiciones) { ?>

									<tr>

										<td><?php echo $publiciones['id_libro'] ?></td>
										<td><?php echo $publiciones['nombre_libro'] ?></td>
										<td><?php echo $publiciones['categoria_nombre'] ?></td>
										<td><?php echo $publiciones['genero_nombre'] ?></td>
										<td>contenido1</td>
										<td><?php echo $publiciones['estado_nombre'] ?></td>
										<td><a href="<?php echo $publiciones['portada'] ?>" target="_blank">Ver portada</a></td>
										<td>
											<a href="" class="btn btn-danger">Eliminar</a>
										</td>

									</tr>

								<?php } ?>

							</tbody>


						</table>
					</div>

        		</div>

      		</div>

      		<div class="col-md-12 ">

        		<div class="p-4 justify-content-center">

          			<h5 class="text-lg font-weight-bold text-center display-5 text-uppercase mb-5">
           		 		Manejo de publicaciones hechas en la pagina
          			</h5>

					<h3 class="mb-4 font-weight-bold text-uppercase">Publicaciones realizadas</h3>

					<div class="table-responsive">

						<table class="table table-hover">

							<thead class="table-dark text-center">

								<tr>
									<th>Nombre</th>
									<th>Categoría</th>
									<th>Género</th>
									<th>Código</th>
									<th>Género</th>
									<th>Costo</th>
									<th>Valoracion</th>
									<th>Ventas</th>
									<th>Acciones</th>
								</tr>

							</thead>

							<tbody class="table-striped text-center">

								<tr>
									<td>contenido1</td>
									<td>contenido1</td>
									<td>contenido1</td>
									<td>contenido1</td>
									<td>contenido1</td>
									<td>contenido1</td>
									<td>contenido1</td>
									<td>contenido1</td>
									<td>
									<a href="" class="btn btn-danger">Eliminar</a>
									</td>
								</tr>

							</tbody>

						</table>

					</div>
					
        		</div>

      		</div>

    	</div>             

	</div>

	<div class="row">

		<footer class="container-fluid footer">

			<div class="row navegacion">

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

<?php include '../includes/footer.html' ?>
