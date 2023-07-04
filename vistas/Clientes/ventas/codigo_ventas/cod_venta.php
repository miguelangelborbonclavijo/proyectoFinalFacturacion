<?php include('../../../registros/db.php') ?>
<?php include("../../../includes/headcli.php") ?>
<main class="bg-dark text-light p-5 text-center text-sm-start">
<a href="../../ele_venta.php" class="btn btn-primary">Regresar</a>
    <form action="../../../Clientes/ventas/codigo_ventas/guardar_cod.php" method="POST" style="width: 60%; margin-left: 20%" class="forCont row g-2">
        <h1 style="text-align: center;">REGISTRO DE CODIGO DE VENTAS</h1>
        <table>
            <tr>
                <td></td>
                <td style="width: 200px; text-align: center">
                    <p class="text-light"><strong>DATOS DEl CODIGO DE VENTA</strong></p>
                </td>
                <td></td>
            </tr>
        </table>
        <br>
        <table>
            <tr>
                <td>
                    <div class="col-md-12 position-relative">
                        <label for="inputState" class="form-label text-light">Documento Clientes</label>
                        <input type="number" class="form-control" id="validationTooltip01" name="CodCli" required>
                        <div class="valid-tooltip">
                            Documento valido...!
                        </div>
                        <div class="invalid-tooltip">
                            Documento no valido.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <?php
                date_default_timezone_set('America/Bogota');
                $fecha_actual = date("y-m-d H:i:s");
                ?>
                <td>
                    <div class="col-md-12 position-relative">
                        <label for="inputState" class="form-label text-light">Fecha</label>
                        <input type="datetime" class="form-control" id="validationTooltip01" name="Fecha" required value="<?= $fecha_actual ?>">
                        <div class="valid-tooltip">
                            Documento valido...!
                        </div>
                        <div class="invalid-tooltip">
                            Documento no valido.
                        </div>
                    </div>
                </td>
            </tr>
            <td>
        </table>
        <div class="esp col-6">
            <button type="submit" name="guardar_salida" value="guardar_salida" class="btn btn-success">Guardar</button>
        </div>
        <div class="esp col-6">
            <button class="btn btn-warning" type="reset">Limpiar datos</button>
        </div>
    </div>
        </td>
    </form>
</main>
<main style="margin-top:30px;">
    <div class="container-lg">
        <table class="table">
            <thead>
                <tr>
                    <h1 style="text-align: center;">PRODUCTOS REGISTRADOS</h1>
                    <br>
                </tr>
                <tr style="text-align: center;">
                    <th scope="col">CODIGO VENTA</th>
                    <th scope="col">CODIGO CLIENTE</th>
                    <th scope="col">FECHA</th>
                    <th scope="col">ESTADOS</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM codven";
                $resulproductos = mysqli_query($conn, $query);
                while ($filas = mysqli_fetch_array($resulproductos)) { ?>
                    <tr style="text-align: center;">
                        <td><?php echo $filas['CodVenId'] ?></td>
                        <td><?php echo $filas['CodVenCl'] ?></td>
                        <td><?php echo $filas['CodFec'] ?></td>
                        <td>
                            <!--<a href="../../../Clientes/ventas/codigo_ventas/edita_cod.php?id=<//?php echo $filas['CodVenId'] ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-success bi bi-pen" viewBox="0 0 16 16">
                                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                                </svg>
                            </a>-->
                            <a href="../codigo_ventas/eliminar_cod.php?id= <//?php echo $filas['CodVenId'] ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-danger bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
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

<?php include("../../../includes/footer.php") ?>