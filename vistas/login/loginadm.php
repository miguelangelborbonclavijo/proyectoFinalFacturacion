<?php
    session_start();
    include('../registros/db.php') ;
    include("../includes/head.php") ;
    if($_POST){
        $usuario = $_POST['nombre'];
        $contrasena = $_POST['contrasena'];

        $query = "SELECT * FROM usuarios WHERE usuario ='$usuario'";
        $resul = mysqli_query($conn, $query);
        $num = $resul -> num_rows;

        if($num>0){
            $row = $resul -> fetch_assoc();
            $contra_db = $row['contrasena'];
            $pass_c= ($contrasena);
            if ($contra_db == $pass_c){
                $_SESSION['id'] = $row['id'];
                $_SESSION['usuario'] = $row['usuario'];
                $_SESSION['tipo_usuario'] = $row['tipo_usuario'];
                $_SESSION['nombre'] = $row['nombre'];
                header("location: principal.php");
            }else{
                echo "Contraseña incorrecta";
            }
        }else{
            echo "no existe usuario";
        }
    }
?>
<main>
    <section class="bg-dark text-light p-5 text-center text-sm-start" id="home">
        <div class="container py-5">
            <div class="d-sm-flex align-item-center">
                <a href="">
                    <img style="height: 80%; width:80%" class="container-sm" src="../img/img1.png" class="img-fluid" width="1000" alt="">
                </a>
                <div>
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                        <h1>Bienvenidos a FacElec</h1>
                        <h3 class="my-4">Inicio Session</h3>
                        <!--<div class="form-group lead my-4">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Name">
                        </div>--> 
                        <div class="form-group lead my-4">
                            <label for="">Nombre de Usuario</label>
                            <input type="text" class="form-control" name="nombre" placeholder="Introduzca su correo" required>
                        </div>
                        <div class="form-group lead my-4 ">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="contrasena" placeholder="Introduzca su contraseña" required>
                        </div>
                        <!--<div class="form-group lead my-4">
                            <label for="password">Confirm Passwo
                                rd</label>
                            <input type="password" class="form-control" id="password2" placeholder="Enter Password">
                        </div>-->
                        <a href="../inicio_usuarios/homeadm.php">ir</a>
                        <button type="submit" class="btn btn-primary">Ingresar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include("../includes/footer.php") ?>