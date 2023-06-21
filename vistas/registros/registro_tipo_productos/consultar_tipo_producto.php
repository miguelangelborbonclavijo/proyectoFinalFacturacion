<?php include("../db.php")?>
<?php include("../../includes/head.php")?>
<main tyle="margin-top:30;">
<div class="container-lg">
    <table class="table">
        <thead>
            <tr>
                <h1 style="text-align: center;">TIPO DE PRODUCTOS</h1>
            </tr>
            <tr style="text-align: center;" >
                <th>CODIGO</th>
                <th>TIPO DE PRODUCTO</th>
                <th>ESTADO</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $query = "SELECT * FROM tipodeproducto";
        $resulproductos = mysqli_query($conn, $query);
        while($filas = mysqli_fetch_array($resulproductos)){?>
        <tr style="text-align: center;">
            <td><?php echo $filas['TipId'] ?></td>
            <td><?php echo $filas['TipNom'] ?></td>
            <td>
                <a href="../registro_tipo_productos/editar_tipo_producto.php?id=<?php echo $filas['TipId']?>">Editar</a>
                <a href="../registro_tipo_productos/eliminar_tipo_productos.php?id=<?php echo $filas['TipId']?>">Eliminar</a>
            </td>
        </tr>
        <?php } ?> 
        </tbody>
    </table>
</div>
</main>
<?php include("../../includes/footer.php")?>