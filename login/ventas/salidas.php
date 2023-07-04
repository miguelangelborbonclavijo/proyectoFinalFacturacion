<?php include('../../login/db.php') ?>
<?php include("../includes/head.php") ?>
<main class="bg-dark text-light p-5 text-center text-sm-start">
    <form action="../ventas/guardas_venta.php" method="POST" style="width: 60%; margin-left: 20%" class="forCont row g-1">
        <h1 style="text-align: center;">REGISTRO DE VENTAS</h1>
        <table>
            <tr>
                <td></td>
                <td style="width: 200px; text-align: center">
                    <p><strong>DATOS DE VENTA</strong></p>
                </td>
                <td></td>
            </tr>
        </table>
        <br>
        <table>
            <div class="col-md-6 position-relative">
                <label for="validationTooltip01" class="form-label">Codigo venta:</label>
                <input type="number" class="form-control" id="validationTooltip01" name="CodVen" required>
                <div class="valid-tooltip">
                    Documento valido...!
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>
            </div>
            <div class="col-md-6 position-relative">
                <label for="validationTooltip01" class="form-label">Codigo Trabajador:</label>
                <input type="number" class="form-control" id="validationTooltip01" name="CodTra" required>
                <div class="valid-tooltip">
                    Documento valido...!
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>
            </div>
            <div class="col-md-6 position-relative">
                <label for="validationTooltip01" class="form-label">Codigo Clientes:</label>
                <input type="number" class="form-control" id="validationTooltip01" name="CodCli" required>
                <div class="valid-tooltip">
                    Documento valido...!
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>
            </div>
            <div class="col-md-6 position-relative">
                <label for="inputState" class="form-label">Codigo del Producto:</label>
                <input type="number" class="form-control" id="validationTooltip01" name="CodPro" required>
                <div class="valid-tooltip">
                    Documento valido...!
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>
            </div>
            <div class="col-md-6 position-relative">
                <label for="validationTooltip01" class="form-label">Cantidad:</label>
                <input type="number" class="form-control" id="validationTooltip01" name="Can" required>
                <div class="valid-tooltip">
                    Documento valido...!
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>
            </div>
            <div class="col-md-6 position-relative">
                <label for="validationTooltip01" class="form-label">Valor:</label>
                <input type="number" class="form-control" id="validationTooltip01" name="Val" required>
                <div class="valid-tooltip">
                    Documento valido...!
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>
            </div>
            <div class="col-md-12 position-relative">
                <label for="validationCustomUsername" class="form-label">FECHA</label>
                <?php
                date_default_timezone_set('America/Bogota');
                $fecha_actual = date("y-m-d H:i:s");
                ?>
                <input type="datetime" class="form-control" id="validationTooltip01" name="VenFech" placeholder="Ingrese Fecha" required value="<?= $fecha_actual ?>">
                <div class="input-group has-validation">
                    <div class="invalid-feedback">
                        Please choose a username.
                    </div>
                </div>
                <div class="col-md-6 position-relative">
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>
            </div>
            <br>
            <br>
            <table>
                <tr>
                    <td>
                        <label for="cbox2">Señor usuario asegurese que los datos digitados estan correctos.</label>
                        <br>
                    </td>
                </tr>
            </table>
            <br>
            <br>
            <table>
                <tr>
                    <div style="margin-right:13%" class="esp col-3">
                        <button type="submit" name="guardar_salida" value="guardar_salida" class="btn btn-success">Guardar</button>
                    </div>
                    <div style="margin-right:12%" class="esp col-3">
                        <button class="btn btn-warning" type="reset">Limpiar datos</button>
                    </div>
                    <div class="esp col-3">
                        <a href="../../login/ventas/consultar_venta.php" class="btn btn-primary">Consultar clientes</a>
                    </div>
                </tr>
            </table>
        </table>
    </form>
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
    </tr>
    <tr>
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
                                <th scope="col">TIPO DE PRODUCTO</th>
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
                                    <td><?php echo $filas['ProTip'] ?></td>
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
<?php include("../includes/footer.php") ?>