<?php include('../db.php') ?>
<?php include("../../includes/head.php") ?>
<main class="p-5 text-center text-sm-start">
    <div class="container-xxl">
        <table class="table">
            <thead>
                <tr>
                    <h1 style="text-align: center;">REGISTRO DE SOPORTES</h1>
                    <br>
                </tr>
                <tr style="text-align: center;">
                    <th>NUMERO DE DOCUMENTO</th>
                    <th>TIPO DE CLIENTE</th>
                    <th>TIPO DE SOPORTE</th>
                    <th>ESTADO DE SOPORTE</th>
                    <th>FECHA DE SOPORTE</th>
                    <th>DESCRIPCION</th>
                    <th>ESTADOS</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM soporte";
                $resulproductos = mysqli_query($conn, $query);
                while ($filas = mysqli_fetch_array($resulproductos)) { ?>
                    <tr style="text-align: center;">
                        <td><?php echo $filas['SopDoCl'] ?></td>
                        <td><?php echo $filas['SopTiCl'] ?></td>
                        <td><?php echo $filas['SopTiS'] ?></td>
                        <td><?php echo $filas['SopEstId'] ?></td>
                        <td><?php echo $filas['SopFe'] ?></td>
                        <td><?php echo $filas['SopDesc'] ?></td>
                        <td>
                            <a href="../registro_soporte/editar_soporte.php?id=<?php echo $filas['SopoId'] ?>">Editar</a>
                            <a href="../registro_soporte/eliminar_soporte.php?id=<?php echo $filas['SopoId'] ?>">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <br>
</main>
<?php include("../../includes/footer.php") ?>