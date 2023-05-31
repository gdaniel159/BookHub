<?php require_once '../model/conexion_bd.php' ?>
<?php require '../model/verificar_sesion.php' ?>
<?php include '../model/manejo_categorias.php' ?>
<?php include '../model/solicitar_publicados.php' ?>
<?php include '../includes/header.html' ?>

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

                                        <span class="item-text-item text-start"><a class="nav-link" href="datos_cuenta.php">Ver Perfil</a></span>
                                        <span class="item-text-item text-end"><i class="fas fa-chevron-right"></i></span>
                                        
                                    </div>

                                    <!-- Carrito -->

                                    <div class="item-text-container">

                                        <span class="item-text-item text-start"><a class="nav-link" href="carrito_de_compras.php">Carrito</a></span>
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

            <div class="col-lg-12 mt-3 m-auto">

                <?php if (isset($_SESSION['message'])) {?>
                    <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert" style="display:flex; justify-content: space-between; z-index:1; position:start;">
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

                <div class="catalogoProveedores" style="height:auto;">

                    <h5 style="text-decoration:underline;" class="mb-3">Libros de nuestros distribuidores</h5>
                    
                    <div id="bookContainer">

                        <?php foreach($libros_publicados as $libro) { ?>

                                <div class="card">

                                    <img src="<?php echo $libro['portada'] ?>" alt="" class="img-fluid">
                                    <div class="card-body">

                                        <h6 class="card-title text-center"><?php echo $libro['nombre_libro'] ?></h6>
                                        <p class="card-text text-center">Autor: <?php echo $libro['autor'] ?></p>
                                        <p class="card-text text-dark text-center">Costo: <?php echo $libro['precio'] ?> soles</p>

                                        <div class="adition-data">

                                            <h4 class="text-center" style="text-decoration:underline;">Sinopsis</h4>

                                            <p class="card-text"><?php echo $libro['sinopsis'] ?></p>
                                            <p class="card-text">
                                                <span>Categoria: </span><?php echo $libro['categoria_nombre'] ?> 
                                            </p>

                                            <p class="card-text">
                                                <span>Genero: </span><?php echo $libro['genero_nombre'] ?>
                                            </p>

                                            <div class="funciones">

                                                <p>
                                                    <a href="#">
                                                        <i class="fas fa-search-plus"></i>
                                                        <span>Similares</span>
                                                    </a>
                                                </p>

                                                <p>
                                                    <a href="#">
                                                        <i class="fas fa-info-circle"></i>
                                                        <span>Detalles</span>
                                                    </a>
                                                </p>

                                                <p>
                                                    <a href="#" onclick="openCartPopup(<?php echo $libro['id_libro']; ?>)">
                                                        <i class="fas fa-cart-plus"></i>
                                                        <span>Carrito</span>
                                                    </a>
                                                </p>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                        <?php } ?>

                    </div>

                </div>

                <div class="catalogoCreadores" style="height:auto;">

                    <h5 style="text-decoration:underline;" class="mb-3">Libros de nuestros creadores</h5>

                </div>

			</div>

        </div>

    </div>

<?php include '../includes/footer.html' ?>