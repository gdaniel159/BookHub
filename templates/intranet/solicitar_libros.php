<?php require_once '../../model/conexion_bd.php'; ?>
<?php require 'model/verificar_sesion.php' ?>
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

                <h1>Solicitar Libros</h1>

            </div>

            <div class="col-md-12">

                <div id="bookContainer" class="">

                    <div id="message">

                    </div>

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