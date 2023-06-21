<?php include('../db.php')?>
<?php include("../../includes/head.php")?>
<main class="p-5 text-center text-sm-start">
<div class="container-lg">
            <table class="table">
            <thead>
                <tr>
                    <h1 style="text-align: center;">TRABAJADORES REGISTRADOS</h1>
                    <br>
                </tr>
                <tr style="text-align: center;">
                    <th scope="col">NUMERO DE DOCUMENTO</th>
                    <th scope="col">TIPO DE CARGO</th>
                    <th scope="col">HORAS LABORALES</th>
                    <th scope="col">SALARIO</th>
                    <th scope="col">ESTADOS</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = "SELECT * FROM trabajador";
                    $resulproductos = mysqli_query($conn, $query);
                    while($filas = mysqli_fetch_array($resulproductos)){?>
                        <tr style="text-align: center;">
                            <td><?php echo $filas['TraPerId'] ?></td>
                            <td><?php echo $filas['TraCarId'] ?></td>
                            <td><?php echo $filas['TraHor'] ?></td>
                            <td><?php echo $filas['TraSalar'] ?></td>
                            <td>
                                <a href="../registro_trabajador/editar_trabajador.php?id=<?php echo $filas['TraPerId']?>">Editar</a>
                                <a href="../registro_trabajador/eliminar_trabajador.php?id=<?php echo $filas['TraPerId']?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php } ?> 
                </tbody> 
            </tbody>
        </table>
    </div>
</main>
<?php include("../../includes/footer.php")?>