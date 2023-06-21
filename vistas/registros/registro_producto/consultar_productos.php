<?php include("../db.php") ?>
<?php include("../../includes/head.php") ?>
<main style="margin-top:30px;">
    <div class="container-lg">
        <table class="table">
            <thead>
                <tr>
                    <h1 style="text-align: center;">PRODUCTOS REGISTRADOS</h1>
                    <br>
                </tr>
                <tr style="text-align: center;">
                    <th scope="col">TIPO DE PRODUCTO</th>
                    <th scope="col">DESCRIPCION</th>
                    <th scope="col">PRECIO DE COMPRA</th>
                    <th scope="col">PRECIO DE VENTA</th>
                    <th scope="col">ESTADOS</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM productos";
                $resulproductos = mysqli_query($conn, $query);
                while ($filas = mysqli_fetch_array($resulproductos)) { ?>
                    <tr style="text-align: center;">
                        <td><?php echo $filas['ProTip'] ?></td>
                        <td><?php echo $filas['ProDes'] ?></td>
                        <td><?php echo $filas['ProPreCo'] ?></td>
                        <td><?php echo $filas['ProPreVe'] ?></td>
                        <td>
                            <a href="../registro_producto/editar_productos.php?id=<?php echo $filas['ProId'] ?>">Editar</a>
                            <a href="../registro_producto/eliminar_productos.php?id=<?php echo $filas['ProId'] ?>">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
            </tbody>
        </table>
    </div>
</main>
<?php include("../../includes/footer.php") ?>