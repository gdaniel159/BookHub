<?php require_once 'conexion_bd.php'; ?>
<?php include 'includes/header.html' ?>
<?php require 'verificar_sesion.php' ?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <div class="container-fluid">

            <a class="navbar-brand" href="">

                <img src="" alt="" class="d-inline-block align-text-top img-fluid" style="background-color:#ccc;">
                <span class="brandTitle">BookHub</span>

            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="backgroung-color:#fff;">

                <span class="navbar-toggler-icon" style="backgroung-color:#fff;"></span>

            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <div class="nav-item">

                        <!-- Al cerrar la sesion voy a destruir la sesion existente -->
                        <a class="nav-link" href="logout.php">Cerrar Sesion</a>

                    </div>

                </ul>

            </div>

        </div>

    </nav>

    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-12 mt-3">

                <?php if (isset($_SESSION['message'])) {?>
                    <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert" style="display:flex; justify-content: space-between;">
                        <?= $_SESSION['message']?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <!-- <?php // session_destroy(); ?> -->
                    </div>
                <?php }?>

            </div>

        </div>

    </div>

    <div class="container-fluid">

        <div class="row catalogo">

			<div class="col-lg-4 col-md-12 filtros">

				<div class="filtrosTitle">

					<h4>Filtros</h4>

				</div>

			</div>

			<div class="col-lg-6 col-md-12 libros">

					

			</div>

        </div>

    </div>

	<script src="js/catalogo.js" type="text/javascript"></script>

<?php include 'includes/footer.html' ?>