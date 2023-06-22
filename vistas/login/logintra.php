<?php include('../registros/db.php') ?>
<?php include("../includes/head.php") ?>
<main>
    <section class="bg-dark text-light p-5 text-center text-sm-start" id="home">
        <div class="container py-5">
            <div class="d-sm-flex align-item-center">
                <a href="">
                    <img style="height: 80%; width:80%" class="container-sm" src="../img/img1.png" class="img-fluid" width="1000" alt="">
                </a>
                <div>
                    <form action="../login/controlador.php" method="POST">
                        <h1>Bienvenidos a FacElec</h1>
                        <h3 class="my-4">Inicio Session<br>Trabajador</h3>
                        <!--<div class="form-group lead my-4">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Name">
                        </div>-->
                        <div class="form-group lead my-4">
                            <label for="email">Correo Electronico</label>
                            <input type="email" class="form-control" id="email" name="loginemail" placeholder="Introduzca su correo" required>
                        </div>
                        <div class="form-group lead my-4 ">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="logincontrasena" placeholder="Introduzca su contraseña" required>
                        </div>
                        <!--<div class="form-group lead my-4">
                            <label for="password">Confirm Password</label>
                            <input type="password" class="form-control" id="password2" placeholder="Enter Password">
                        </div>-->
                        <a href="../inicio_usuarios/hometra.php">ir</a>
                        <button type="submit" class="btn btn-primary" name="conflogtra">Ingresar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include("../includes/footer.php") ?>