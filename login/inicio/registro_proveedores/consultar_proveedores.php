<?php include('../../db.php')?>
<?php include("../../includes/head.php");?>
<a href="../../../login/inicio/registro_proveedores/registro_proveedor.php" class="btn btn-primary">Regresar</a>
<main tyle="margin-top:30px;">
    <div class="container-lg">
        <table class="table">
            <thead>
                <tr>
                    <h1 style="text-align: center;">REGISTRADOS PROVEEDORES</h1>
                    <br>
                </tr>
                <tr style="text-align: center;">
                    <th scope="col">NIP PROVEEROR</th>
                    <th scope="col">NOMBRE DEL PROVEEDOR</th>
                    <th scope="col">DIRECCION</th>
                    <th scope="col">NUMERO DE CELULAR</th>
                    <th scope="col">ESTADOS</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM proveedores";
                $resulproductos = mysqli_query($conn, $query);
                while ($filas = mysqli_fetch_array($resulproductos)) { ?>
                    <tr style="text-align: center;">
                        <td><?php echo $filas['PrId'] ?></td>
                        <td><?php echo $filas['PrNomPr'] ?></td>
                        <td><?php echo $filas['PrDirr'] ?></td>
                        <td><?php echo $filas['PrCel'] ?></td>
                        <td>
                            <a href="../registro_proveedores/editar_proveedores.php?id=<?php echo $filas['PrId'] ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-success bi bi-pen" viewBox="0 0 16 16">
                                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
            </tbody>
        </table>
    </div>
</main>
<?php include("../../includes/footer.php") ?>