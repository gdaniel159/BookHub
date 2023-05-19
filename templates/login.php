<?php require_once '../model/conexion_bd.php'; ?>
<?php include '../includes/header.html'; ?>

    <div class="container-fluid loginContainer">

        <div class="row">

            <div class="col-lg-4 col-md-8 login">

                <form action="../model/loginPDO.php" method="POST" class="formulario">

                    <div class="topArea">

                        <h5 class="mb-3">Sign In</h5>
                        <span><a href="../index.php" title="Back to main page"><i class="fas fa-arrow-left"></i></a></span>

                    </div>

                    <div class="col-md-12">

                        <label for="correo">Correo:</label>
                        <input type="email" class="form-control" name="correo" id="correo">

                    </div>  

                    <div class="col-md-12">

                        <label for="password">Contraseña:</label>
                        <input type="password" class="form-control" name="password" id="password">

                    </div>

                    <div class="col-md-12">

                        <input type="submit" class="form-control mt-3 text-dark" name="btnLogin" id="btnLogin" value="Login">

                    </div>

                    <hr style="border:1px solid #ccc;">

                    <small>Nuevo en BookHub? <a href="register.php">Crea tu cuenta aquí &#10097; </a></small>

                    <small class="d-block mt-3">
                    
                        <?php if (isset($_SESSION['message'])) {?>
                            <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert" style="display:flex; justify-content: space-between;">
                                <?= $_SESSION['message']?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                </button>
                                <?php session_destroy(); ?>
                            </div>
                        <?php }?>
                    
                    </small>

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