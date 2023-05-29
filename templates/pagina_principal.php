<?php require_once '../model/conexion_bd.php' ?>
<?php include '../includes/header.html' ?>
<?php require '../model/verificar_sesion.php' ?>
<?php include '../model/manejo_categorias.php' ?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <div class="container-fluid">

            <a class="navbar-brand" href="">

                <img src="../images/brand/book-text_web-min.png" alt="" class="d-inline-block align-text-top img-fluid" style="width:200px; height:auto;">
                <!-- <span class="brandTitle">BookHub</span> -->

            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="backgroung-color:#fff;">

                <span class="navbar-toggler-icon" style="backgroung-color:#fff;"></span>

            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item" id="desplegable">

                        <a class="nav-link icon-navbar" href="#" onclick="toggleMenu()"><i class="fas fa-user"></i></a>

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

                                    <!-- Carrito -->

                                    <div class="item-text-container">

                                        <span class="item-text-item text-start"><a class="nav-link" href="">Carrito</a></span>
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

    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-12 mt-3">

                <?php if (isset($_SESSION['message'])) {?>
                    <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert" style="display:flex; justify-content: space-between; z-index:-1;">
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

			<div class="col-lg-3 col-md-12 filtros p-3">

				<div class="filtrosTitle">

					<h4 class="mt-2">Filtros <i class="fas fa-filter"></i> </h4>

				</div>

                <div class="desplegables mt-3">

                    <ul class="categoria">

                        <?php foreach($categorias as $categoria) {?>
                        
                            <li><a href="#"><?php echo $categoria['categoria_nombre'] ?></a></li>
                        
                        <?php } ?>

                    </ul>

                </div>

			</div>

			<div class="col-lg-8 col-md-12 libros">

                <div class="catalogoLibrosProductos" style="height:auto;">

                    <h5 style="text-decoration:underline;" class="mb-3">Libros de nuestros distribuidores</h5>

                </div>

			</div>

        </div>

    </div>

	<script src="../js/catalogo.js" type="text/javascript"></script>

<?php include '../includes/footer.html' ?>