<?php
session_start();
include('../../login/db.php');
?>
<?php
if (!isset($_SESSION['usuario'])) {
    header("Location: ../../login/principal.php");
} ?>
<?php include('../../login/includes/head.php');
$nombre = $_SESSION['nombre'];

echo $nombre; ?>
<button><a href="../../login/salir.php">Salir</a></button><br>
<main style="margin-top:30px;">
    <a href="../../login/ventas/salidas.php" class="btn btn-primary">Regresar</a>
    <div class="container-lg">
        <table class="table">
            <thead>
                <tr>
                    <h1 style="text-align: center;">VENTAS REGISTRADAS</h1>
                    <br>
                </tr>
                <tr style="text-align: center;">
                    <th scope="col">CODIGO VENTA</th>
                    <th scope="col">CODIGO TRABAJADOR</th>
                    <th scope="col">CODIGO CLIENTE</th>
                    <th scope="col">PRODUCTO</th>
                    <th scope="col">CANTIDAD</th>
                    <th scope="col">TOTAL</th>
                    <th scope="col">FECHA</th>
                    <th scope="col">ESTADO</th>
                    <th scope="col">ESTADOS</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM ventas";
                $resulproductos = mysqli_query($conn, $query);
                while ($filas = mysqli_fetch_array($resulproductos)) { ?>
                    <tr style="text-align: center;">
                        <td><?php echo $filas['VenCodId'] ?></td>
                        <td><?php echo $filas['VenTraId'] ?></td>
                        <td><?php echo $filas['VenCliId'] ?></td>
                        <td><?php echo $filas['VenProId'] ?></td>
                        <td><?php echo $filas['VenCan'] ?></td>
                        <td><?php echo $filas['VenTot'] ?></td>
                        <td><?php echo $filas['VenFech'] ?></td>
                        <td><?php echo $filas['VenAcId'] ?></td>
                        <td>
                            <a href="../../login/ventas/editar_ventas.php?id=<?php echo $filas['VenId'] ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-success bi bi-pen" viewBox="0 0 16 16">
                                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                                </svg>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
            </tbody>
        </table>
    </div>
</main>
<table>
    <tr>
        <td>
            <main style="margin-top:30px;">
                <div class="container-lg">
                    <table class="table">
                        <thead>
                            <tr>
                                <h1 style="text-align: center;">CODIGO DE VENTAS REGISTRADOS</h1>
                                <br>
                            </tr>
                            <tr style="text-align: center;">
                                <th scope="col">CODIGO VENTA</th>
                                <th scope="col">CODIGO TRABAJADOR</th>
                                <th scope="col">CODIGO CLIENTE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM codven";
                            $resulproductos = mysqli_query($conn, $query);
                            while ($filas = mysqli_fetch_array($resulproductos)) { ?>
                                <tr style="text-align: center;">
                                    <td><?php echo $filas['CodVenId'] ?></td>
                                    <td><?php echo $filas['CodTraId'] ?></td>
                                    <td><?php echo $filas['CodVenCl'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                        </tbody>
                    </table>
                </div>
            </main>
        </td>
        <td>
            <main class="p-5 text-center text-sm-start">
                <div class="container-lg">
                    <table class="table">
                        <thead>
                            <tr>
                                <h1 style="text-align: center;">TRABAJADORES REGISTRADOS</h1>
                                <br>
                            </tr>
                            <tr style="text-align: center;">
                                <th scope="col">CODIGO TRABAJADOR</th>
                                <th scope="col">NUMERO DE DOCUMENTO</th>
                                <th scope="col">TIPO DE CARGO</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM trabajadores";
                            $resulproductos = mysqli_query($conn, $query);
                            while ($filas = mysqli_fetch_array($resulproductos)) { ?>
                                <tr style="text-align: center;">
                                    <td><?php echo $filas['TraId'] ?></td>
                                    <td><?php echo $filas['TraPerId'] ?></td>
                                    <td><?php echo $filas['TraCarId'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                        </tbody>
                    </table>
                </div>
            </main>
        </td>
        <td>
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
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM clientes";
                            $resulproductos = mysqli_query($conn, $query);
                            while ($filas = mysqli_fetch_array($resulproductos)) { ?>
                                <tr style="text-align: center;">
                                    <td><?php echo $filas['CliPerId'] ?></td>
                                    <td><?php echo $filas['CilTipId'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                        </tbody>
                    </table>
                </div>
                <br>
            </main>
        </td>
        <td>
            <main style="margin-top:30px;">
                <div class="container-lg">
                    <table class="table">
                        <thead>
                            <tr>
                                <h1 style="text-align: center;">PRODUCTOS REGISTRADOS</h1>
                                <br>
                            </tr>
                            <tr style="text-align: center;">
                                <th scope="col">CODIGO PRODUCTO</th>
                                <th scope="col">DESCRIPCION</th>
                                <th scope="col">PRECIO DE VENTA</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM productos";
                            $resulproductos = mysqli_query($conn, $query);
                            while ($filas = mysqli_fetch_array($resulproductos)) { ?>
                                <tr style="text-align: center;">
                                    <td><?php echo $filas['ProId'] ?></td>
                                    <td><?php echo $filas['ProDes'] ?></td>
                                    <td><?php echo $filas['ProPreVe'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                        </tbody>
                    </table>
                </div>
            </main>
        </td>
    </tr>
</table>
<?php include("../../login/includes/footer.php") ?>