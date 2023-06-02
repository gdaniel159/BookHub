<?php require_once '../model/conexion_bd.php' ?>
<?php require '../model/verificar_sesion.php' ?>
<?php require '../model/compras_details.php' ?>
<?php include '../includes/header.html' ?>

<?php $suma = 0 ?>

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

    <div class="container-fluid" >

        <!-- Separador izq - der -->

        <div class="row d-flex align-items-center">

            <!-- Lado izq-->

            <div class="col-lg-8 p-5" > 

                <div style="border: solid 2px;" class="p-5">

                    <div class="text-center" >
                                   
                        <h4 class="">Datos del Usuario</h4>
                        <hr>    

                    </div> 

                    <div class="text-center" > 

                        <h4 class="">{{Nombres}} {{Apellidos}}</h4>  
                        <h4 class="">{{Género}}</h4>  

                    </div>  

                    <div class="text-center" >      

                        <h4 class="">{{DNI}}</h4>  
                        <h4 class="">{{telefono}}</h4>  

                    </div>

                    <div class="text-center" >   

                        <h4 class="">{{Correo}}</h4> 
                        <hr class=""> 

                    </div>  

                    <div class="text-center">   

                        <h4 class="">Número de Cuenta:</h4>   
                        <h4 class="">{{num_cuenta_bancaria}}</h4>   

                    </div>   

                </div>   

            </div>

            <!--Derecha -->

            <div class="col-lg-4 p-5">

                <div style="border: solid 2px;" class="p-4">

                    <div class="col-md-12" >

                        <h4 class="p-3">Verificación de Saldo</h4>
                        <hr>

                        <?php foreach($Detalles_compra as $detalle) { ?>
                            
                            <?php $suma = $detalle['Precio Total']; ?>

                        <?php } ?>

                        <div class="container">

                            <div class="row text-center" >

                                <h3 class=" col p-3">Saldo Acual</h3>
                                <h3 class=" col p-3">S/.## </h3> 

                            </div>  

                            <div class="row text-center">

                                <h3 class=" col p-3">Costo Total</h3> 
                                <h3 class=" col p-3">S/.<?php  echo $suma ?></h3> 

                            </div>  

                            <div class="row"> 

                                <h1 class="col"></h1>
                                <hr class="w-50 col ">

                            </div>

                            <div class="row text-center">

                                <h3 class=" col p-3">Saldo Restante</h3> 
                                <h3 class=" col p-3">S/.##</h3> 

                            </div>  

                        </div>                   
                                         
                        <a href="../templates/pago_compra.php"><button   type="button" class="btn btn-warning w-100">Confirmar Compra</button></a>

                    </div>  

                </div>  

            </div>    

        </div>

    </div>

    <div class="row">

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

    </div>

</div>                                  

<?php include '../includes/footer.html' ?>