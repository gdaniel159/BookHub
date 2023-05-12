<?php require_once 'conexion_bd.php'; ?>
<?php include 'includes/header.html' ?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <div class="container-fluid">

            <a class="navbar-brand" href="">

                <img src="" alt="" class="d-inline-block align-text-top img-fluid" style="background-color:#ccc;">
                <span class="brandTitle">BookHub</span>

            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">

                        <a class="nav-link active" aria-current="page" href="#">Sobre Nosotros</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="#">Terminos y Condiciones</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="login.php">Inicio Sesion</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link disabled" href="#">/</a>

                    </li>

                    <div class="nav-item">

                        <a class="nav-link" href="register.php">Registrarse</a>

                    </div>

                </ul>
        
            </div>

        </div>

    </nav>

    <div class="container">

        <div class="row">

            <div class="col-lg-12 mt-3">

                <?php if (isset($_SESSION['message'])) {?>
                    <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert" style="display:flex; justify-content: space-between;">
                        <?= $_SESSION['message']?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times-circle"></i></span>
                        </button>
                    </div>
                <?php }?>

            </div>

        </div>

    </div>

    <main class="container">

        <div class="row">

            <section class="col-lg-6 col-md-12 leftContent">

                <div class="title">

                    <span class="tl1">COMPRA</span>
                    <span class="tl2">DE LIBROS</span>
                    <span class="tl3">ONLINE</span>

                </div>

                <div class="contenido">

                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo omnis delectus fuga et modi sunt, qui ipsum provident nisi ratione natus libero, voluptatibus vitae velit non veritatis similique aut, labore voluptatum ducimus soluta ex! Dolorem, ratione odit! Harum quibusdam rem porro ab magnam minima ullam ipsam quo maiores odit blanditiis quis veniam accusantium at nulla nemo vel dolores explicabo, hic eum ipsum! Itaque, quam quidem nulla adipisci distinctio cum tenetur odit quibusdam tempora repellendus ipsam veritatis numquam tempore esse in.</p>

                </div>

                <div class="btnComprar">

                    <a href="" class="btn btn-success">Ir a Comprar</a>

                </div>

            </section>

            <section class="col-lg-6 col-md-12 rightContent mt-4">

                <div class="imgRepresentativa">

                    <img src="" alt="" class="img-fluid">

                </div>

            </section>

        </div>

    </main>

<?php include 'includes/footer.html' ?>