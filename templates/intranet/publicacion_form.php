<?php require_once '../../model/conexion_bd.php'; ?>
<?php require 'model/verificar_sesion.php'; ?>
<?php include 'includes/header.html'; ?>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <div class="container-fluid">

            <a class="navbar-brand m-auto" href="">

                <img src="../../images/brand/book-text_web-min.png" alt="" class="d-inline-block align-text-top img-fluid" style="width:200px; height:auto;">

            </a>

        </div>

    </nav>

    <div class="container d-flex justify-content-center align-items-center" style="height:70vh;">

        <div class="row m-auto p-4" style="border:1px solid #000">

            <div class="col-md-6 text-center" style="border:1px solid #000">

                <img src="<?php echo $_GET['portada']; ?>" alt="">

            </div>

            <div class="col-md-5 m-auto" style="border:1px solid #000">

                <p>Sinopsis: <?php echo $_GET['sinopsis']; ?></p>
                <p>Autor: <?php echo $_GET['autor']; ?></p>
                <p>Categoria: <?php echo $_GET['categoria']; ?></p> 
                <p>Genero: <?php echo $_GET['genero']; ?></p>

            </div>

            <div class="col-md-12 mt-4 p-3" style="border:1px solid #000; border-radius:5px;">

                <form action="<?php echo 'model/publicar.php?id_libro='.$_GET['id_libro'].'' ?>" method="POST">

                    <div class="form-group">

                        <label for="precio" class="mb-2">Precio</label>
                        <input type="text" class="form-control" id="precio" name="precio">

                    </div>

                    <div class="form-group">

                        <input type="submit" class="btn btn-primary form-control mt-3" value="Publicar" name="btnEnviar">

                    </div>

                </form>

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