<?php require_once '../../model/conexion_bd.php'; ?>
<?php require 'model/verificar_sesion.php' ?>
<?php include 'model/listado_clientes.php' ?>
<?php include 'model/lista_publicaciones.php' ?>
<?php include 'includes/header.html'; ?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <div class="container-fluid">

            <a class="navbar-brand" href="">

                <img src="../../images/brand/book-text_web-min.png" alt="" class="d-inline-block align-text-top img-fluid" style="width:200px; height:auto;">
                <!-- <span class="brandTitle">BookHub</span> -->

            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="backgroung-color:#fff;">

                <span class="navbar-toggler-icon" style="backgroung-color:#fff;"></span>

            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0" >

                    <li class="nav-item">

                        <?php if (isset($_SESSION['nombre']) && isset($_SESSION['apellido'])) {  ?>

                            <span class="text-white"><?= $_SESSION['nombre'] ?></span>
                            <span class="text-white"><?= $_SESSION['apellido'] ?></span>

                        <?php } ?>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link disabled" href="#">/</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="model/logout.php">Cerrar Sesion</a>

                    </li>

                </ul>
        
            </div>

        </div>

    </nav>

    <div class="container-fluid">

        <div class="row">

            <div class="sub-navbar">

                <ul class="sub-enlaces">

                    <li><a href="solicitar_libros.php">Solicitar Libros</a></li>
                    <li><a href="publicar_libros.php">Publicar Libros</a></li>

                </ul>

            </div>

        </div>

    </div>

    <main class="container">

        <!-- Tabla de las publicaciones -->

        <section class="row">

            <h3 class="mt-3 mb-3">Lista de Publicaciones</h3>

			<div class="table-responsive">

				<table class="table table-hover">

					<thead class="table-dark text-center">

						<tr>
							<th>Nombre</th>
							<th>Autor</th>
							<th>Categoria</th>
							<th>Valoracion</th>
							<th>Costo</th>
							<th>Ventas</th>
							<th>Acciones</th>
						</tr>

					</thead>

					<tbody class="text-center">

						<?php foreach($publicaciones as $publicacion) { ?>
						
							<tr>

								<td><?php echo $publicacion['nombre_libro'] ?></td>
								<td><?php echo $publicacion['autor'] ?></td>
								<td><?php echo $publicacion['categoria_nombre'] ?></td>
								<td>contenido1</td>
								<td><?php echo $publicacion['precio'] ?></td>
								<td>contenido1</td>
								<td>
									<a href="" class="btn btn-warning">Editar</a>
									<a href="" class="btn btn-danger">Eliminar</a>
								</td>

							</tr>
						
						<?php } ?>

					</tbody>

				</table>

			</div>

        </section>

		<!-- Tabla de creadores -->

        <section class="row">

            <h3 class="mt-3 mb-3">Lista de Creadores</h3>

			<div class="table-responsive">

				<table class="table table-hover">

					<thead class="table-dark text-center">

						<tr>
							<th>Correo</th>
							<th>DNI</th>
							<th>Telefono</th>
							<th>Nombre</th>
							<th>Apellidos</th>
							<th>Ganancias</th>
							<th>Acciones</th>
						</tr>

					</thead>

					<tbody class="text-center">

						<tr>
							<td>contenido1</td>
							<td>contenido1</td>
							<td>contenido1</td>
							<td>contenido1</td>
							<td>contenido1</td>
							<td>contenido1</td>
							<td>
								<a href="" class="btn btn-warning">Editar</a>
								<a href="" class="btn btn-danger">Eliminar</a>
							</td>
						</tr>

					</tbody>

				</table>

			</div>

        </section>

		<!-- Tabla de usuarios (Clientes) -->

        <section class="row">

            <h3 class="mt-3 mb-3">Lista de Clientes</h3>

			<div class="table-responsive">

				<table class="table table-hover">

					<thead class="table-dark text-center">

						<tr>
							<th>Correo</th>
							<th>DNI</th>
							<th>Telefono</th>
							<th>Nombre</th>
							<th>Apellidos</th>
							<th title="Total de compras hechas por el usuario">Compras</th>
							<th>Acciones</th>
						</tr>

					</thead>

					<tbody class="text-center">

						<?php foreach($clientes as $cliente) { ?>

							<tr>

								<td><?php echo $cliente['correo'] ?></td>
								<td><?php echo $cliente['dni'] ?></td>
								<td><?php echo $cliente['telefono'] ?></td>
								<td><?php echo $cliente['nombres'] ?></td>
								<td><?php echo $cliente['apellidos'] ?></td>
								<td>contenido1</td>
								<td>
									<a href="" class="btn btn-warning">Editar</a>
									<a href="" class="btn btn-danger">Eliminar</a>
								</td>

							</tr>

						<?php } ?>

					</tbody>

				</table>

			</div>

        </section>

    </main>

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

<?php include 'includes/footer.html' ?>