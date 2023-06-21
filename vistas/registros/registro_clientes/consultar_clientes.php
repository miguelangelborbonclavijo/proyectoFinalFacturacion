<?php include("../db.php") ?>
<?php include("../../includes/head.php") ?>
<main style="margin-top:30px;">
    <div class="container-lg">
        <table class="table">
            <thead>
                <tr>
                    <h1 style="text-align: center;">CLIENTES REGISTRADOS</h1>
                    <br>
                </tr>
                <tr style="text-align: center;">
                    <th scope="col">NUMERO DE DOCUMENTO</th>
                    <th scope="col">TIPO DE CLIENTE</th>
                    <th scope="col">ESTADO DE CLIENES</th>
                    <th scope="col">DIRECCION DE CLIENTES</th>
                    <th scope="col">ESTADOS</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM clientes";
                $resulproductos = mysqli_query($conn, $query);
                while ($filas = mysqli_fetch_array($resulproductos)) { ?>
                    <tr style="text-align: center;">
                        <td><?php echo $filas['CliPerId'] ?></td>
                        <td><?php echo $filas['CliTipId'] ?></td>
                        <td><?php echo $filas['CliEsId'] ?></td>
                        <td><?php echo $filas['CliDirr'] ?></td>
                        <td>
                            <a href="../registro_clientes/editar_clientes.php?id=<?php echo $filas['CliPerId'] ?>">Editar</a>
                            <a href="../registro_clientes/eliminar_clientes.php?id=<?php echo $filas['CliPerId'] ?>">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
            </tbody>
        </table>
    </div>
    <br>
</main>