<?php require_once '../model/conexion_bd.php'; ?>
<?php include '../includes/header.html' ?>

<div class="container-fluid">

    <div class="row">

        <div class="col-lg-6 col-md-8 m-auto">

            <form action="../model/add_book_creator.php" method="POST" class="formulario p-3 mt-4" style="border:1px solid #ccc">

                <div class="topArea">

                    <h5 class="mb-3">Cargar información del libro</h5>

                </div>

                <!-- Nombre -->

                <div class="col-md-12">

                    <label for="name" class="mb-3 mt-3"><strong>Nombre: </strong></label>
                    
                    <input type="text" class="form-control" name="name" id="name" placeholder="Ingrese el nombre del libro">

                </div>

                <!-- Autor -->

                <div class="col-md-12">

                    <label for="author" class="mb-3 mt-3"><strong>Autor: </strong></label>
                
                    <input type="text" class="form-control" name="author" id="author" placeholder="Ingrese el nombre del autor">

                </div>

                <!-- Categoía -->

                <div class="col-md-12">

                    <label for="category" class="mb-3 mt-3"><strong>Categoría:</strong></label>
                    
                    <input type="text" class="form-control" name="category" id="category" placeholder="Ingrese la categoria del libro">

                </div> 

                <!-- Género -->

                <div class="col-md-12">

                    <label for="genero" class="mb-3 mt-3"><strong>Género:</strong></label>

                    <input type="text" class="form-control" name="genero" id="genero" placeholder="Ingrese el genero del libro">
                    
                </div>

                <!-- Sinopsis -->

                <div class="col-md-12">

                    <label for="synopsis" class="mb-3 mt-3"><strong>Sinopsis:</strong></label>

                    <textarea class="form-control" name="synopsis" id="synopsis" rows="4" placeholder="Ingresa la sinopsis del libro"></textarea>

                </div>

                <!-- Portada -->

                <div class="mb-3">

                    <label for="portada" class="mb-3 mt-3"><strong>Portada</strong></label>

                    <input type="text" name="portada" id="portada" placeholder="Porfavor Ingrese la url de la imagen de la portada" class="form-control">

                </div>
                
                <div class="col-md-12">

                    <input type="submit" class="form-control mt-3 text-white btn btn-primary btn-block" name="btnCargarLibro" value="Cargar Libro">

                    <a href="pag_creador.php" class="btn btn-warning form-control mt-3">Regresar a la pagina principal</a>

                </div>

                    
                <hr style="border:1px solid #ccc;">
                
                <div class="text-center">

                    <small class="text-dark">
                        Al subir la información de su libro en BookHub, usted acepta los
                        <a href="../../templates/terminos_condiciones.php">términos y condiciones</a>

                    </small>

                </div>

                <?php if (isset($_SESSION['message'])) {?>

                    <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show mt-3" role="alert" style="display:flex; justify-content: space-between;">

                        <?= $_SESSION['message']?>

                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                        <?php //session_destroy(); ?>

                    </div>

                <?php }?>

            </form>
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

<?php include '../includes/footer.html' ?>