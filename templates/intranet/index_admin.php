<?php require_once '../../model/conexion_bd.php'; ?>
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

<h2>Admin Site</h2>
<?php include 'includes/footer.html' ?>