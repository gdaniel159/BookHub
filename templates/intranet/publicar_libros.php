<?php require_once '../../model/conexion_bd.php'; ?>
<?php require 'model/verificar_sesion.php'; ?>
<?php include 'model/libros_publicados.php'; ?>
<?php include 'includes/header.html'; ?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <div class="container-fluid">

            <a class="navbar-brand m-auto" href="">

                <img src="../../images/brand/book-text_web-min.png" alt="" class="d-inline-block align-text-top img-fluid" style="width:200px; height:auto;">

            </a>

        </div>

    </nav>

    <div class="container">

        <div class="row">

            <div class="col-md-12 mt-3 mb-3 text-center">

                <h1>Publicar Libros de nuestros proveedores</h1>

            </div>

            <div class="col-md-12">

                <h3 class="mt-3 mb-3">Libros Disponibles</h3>

                <div class="table-responsive">

                    <table class="table table-hover">

                        <thead class="table-dark text-center">

                            <tr>

                                <th>Portada</th>
                                <th>Nombre</th>
                                <th>Autor</th>
                                <th>Categoria</th>
                                <th>Genero</th>
                                <th>Codigo</th>
                                <th>Acciones</th>

                            </tr>

                        </thead>

                        <tbody class="text-center">

                            <?php foreach($publicaciones as $publicacion) { ?>

                                <tr>

                                    <td><a href="<?php echo $publicacion['portada'] ?>" target="_blank">Ver portada</a></td>
                                    <td><?php echo $publicacion['nombre_libro'] ?></td>
                                    <td><?php echo $publicacion['autor'] ?></td>
                                    <td><?php echo $publicacion['categoria_nombre'] ?></td>
                                    <td><?php echo $publicacion['genero_nombre'] ?></td>
                                    <td><?php echo $publicacion['id_libro'] ?></td>
                                    <td>

                                        <?php echo '<a href="publicacion_form.php?id_libro='.$publicacion['id_libro'].'&portada='.$publicacion['portada'].'&sinopsis='.$publicacion['sinopsis'].'&autor='.$publicacion['autor'].'&categoria='.$publicacion['categoria_nombre'].'&genero='.$publicacion['genero_nombre'].'&nombre_libro='.$publicacion['nombre_libro'].'" class="btn btn-warning">Publicar</a>' ?>

                                        <?php echo '<a href="model/eliminar_libro.php?id='.$publicacion["id_libro"].'" class="btn btn-danger">Eliminar</a>' ?>

                                    </td>

                                </tr>

                            <?php } ?>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

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