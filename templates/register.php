<?php require_once '../model/conexion_bd.php'; ?>
<?php include '../includes/header.html' ?>

    <div class="container-fluid registerContainer">

        <div class="row">
            
            <!-- Clientes -->

            <div class="col-lg-5 col-md-8 register" id="regiseterUsuario">

                <form action="../model/registerPDO.php" method="POST" class="formulario">

                    <div class="topArea">

                        <h5 class="mb-3">Create a user account</h5>
                        <span><a href="../index.php" title="Back to main page"><i class="fas fa-arrow-left"></i></a></span>

                    </div>

                    <div class="col-md-12">

                        <label for="name">Nombres:</label>
                        <input type="text" class="form-control" name="name" id="name"  placeholder="Ingrese sus nombres" required>

                    </div>

                    <div class="col-md-12">

                        <label for="surname">Apellidos:</label>
                        <input type="text" class="form-control" name="surname" id="surname" placeholder="Ingrese sus apellidos" required>

                    </div>

                    <div class="col-md-12">

                        <label for="gender">Genero:</label>
                        <input type="text" class="form-control" name="gender" id="gender" placeholder="Ingrese sus genero" required>

                    </div>

                    <div class="col-md-12">

                        <label for="date">Fecha nacimiento:</label>
                        <input type="date" class="form-control" name="date" id="date" required>

                    </div>

                    <div class="col-md-12">

                        <label for="dni">DNI:</label>
                        <input type="text" class="form-control" name="dni" id="dni" required>

                    </div>

                    <div class="col-md-12">

                        <label for="tel">Telefono:</label>
                        <input type="text" class="form-control" name="tel" id="tel" required>

                    </div>

                    <div class="col-md-12">

                        <label for="correo">Correo:</label>
                        <input type="email" class="form-control" name="correo" id="correo" placeholder="Ingrese un correo" required>

                    </div>

                    <div class="col-md-12">

                        <label for="password">Contraseña:</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Ingrese su contraseña" required>
                        <small class="text-dark"> <i class="fas fa-info-circle" style="color:#3498db;"></i> Passwords must be at least 6 characters.</small>

                    </div>

                    <div class="col-md-12">

                        <input type="submit" class="form-control mt-3 text-dark" name="btnRegister" value="Crear una cuenta">

                    </div>
                    
                    <small class="text-dark">Al crear una cuenta en BookHub, usted acepta los <a href="">terminos y condiciones</a></small>

                    <hr style="border:1px solid #ccc;">

                    <div class="enlacesCuentas">

                        <small>Ya tienes una cuenta? <a href="login.php">Iniciar Sesion &#10097; </a></small>

                    </div>

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