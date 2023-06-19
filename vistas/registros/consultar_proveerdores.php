<?php include("db.php")?>
<?php include("../../includes/head.php")?> 
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
                    <th scope="col">ESTADOS</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                        $query = "SELECT * FROM proveedores";
                        $resulproductos = mysqli_query($conn, $query);
                        while($filas = mysqli_fetch_array($resulproductos)){?>
                            <tr  style="text-align: center;">
                                <td><?php echo $filas['PrId'] ?></td>
                                <td><?php echo $filas['PrNomPr'] ?></td>
                                <td><?php echo $filas['PrDirr'] ?></td>
                                <td>
                                    <a href="editar_proveedores.php?id=<?php echo $filas['PrId']?>">Editar</a>
                                    <a href="eliminar_productos.php?id=<?php echo $filas['PrId']?>">Eliminar</a>
                                </td>
                            </tr>
                    <?php } ?> 
                </tbody> 
            </tbody>
        </table>
    </div>
</main>
<?php include("../includes/footer.php")?>