<?php include('../../../registros/db.php') ?>
<?php include("../../../../includes/head.php") ?>
<main class="bg-dark text-light p-5 text-center text-sm-start">
    <form action="../codigo_ventas/guardar_cod.php" method="POST" style="width: 60%; margin-left: 20%" class="forCont row g-2">
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
            <td>
                <div class="col-md-12 position-relative">
                    <label for="validationTooltip01" class="form-label text-light">Codigo Trabajador:</label>
                    <input type="number" class="form-control" id="validationTooltip01" name="CodTra" required>
                    <div class="valid-tooltip">
                        Documento valido...!
                    </div>
                    <div class="invalid-tooltip">
                        Documento no valido.
                    </div>
                </div>
            </td>
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
            <td>
        </table>
        <div style="margin-right:12%" class="esp col-3">
            <button type="submit" name="guardar_salida" value="guardar_salida" class="btn btn-success">Guardar</button>
        </div>
        <div style="margin-right:12%" class="esp col-3">
            <button class="btn btn-warning" type="reset">Limpiar datos</button>
        </div>
        <div class="esp col-3">
            <a href="../codigo_ventas/cons_cod.php" class="btn btn-primary">Consultar Codigo</a>
        </div>
        </td>
    </form>
</main>
<?php include("../../../../includes/footer.php") ?>