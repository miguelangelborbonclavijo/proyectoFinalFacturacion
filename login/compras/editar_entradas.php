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
<?php
include("../../login/db.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM compras WHERE ComId  = $id";
    $resuleditar = mysqli_query($conn, $query);
    if (mysqli_num_rows($resuleditar) == 1) {
        $filas = mysqli_fetch_array($resuleditar);
        $PvId = $filas['ComPvId'];
        $PrId = $filas['ComPrId'];
        $Can = $filas['ComCan'];
        $PrTrId = $filas['ComTraId'];
        $ComEs = $filas['ComEs'];
    }
}
if (isset($_POST['guardar_inventario_entrada'])) {
    $id = $_GET['id'];
    $PvId = $_POST['CodProve'];
    $TraId = $_POST['TraId'];
    $Can = $_POST['Can'];
    $PrId = $_POST['CodProd'];
    $ComEs = $_POST['ComEs'];
    $query = "UPDATE compras set ComPvId = '$PvId', ComPrId = '$PrId', ComCan = '$Can', ComTraId = '$PrTrId', ComEs = '$ComEs' WHERE ComId  = $id";
    mysqli_query($conn, $query);
}
?>
<main class="bg-dark text-light p-5 text-center text-sm-start">
    <a href="../../login/compras/consultar_entradas.php" class="btn btn-primary">Regresar</a>
    <form action="../../login/compras/editar_entradas.php?id=<?php echo $_GET['id']; ?>" method="POST" style="width: 60%; margin-left: 20%" class="forCont row g-1">
        <h1 style="text-align: center;">EDITAR ENTRADAS</h1>
        <table>
            <tr>
                <td></td>
                <td style="width: 200px; text-align: center">
                    <p><strong>DATOS DEL TRABAJADOR</strong></p>
                </td>
                <td></td>
            </tr>
        </table>
        <br>
        <table>
            <div class="col-md-4 position-relative">
                <label for="inputState" class="form-label" name="ComEs">ESTADO:</label>
                <select id="inputState" class="form-select" class="form-control" id="validationTooltip01" required name="ComEs">
                    <option selected required>Estado venta</option>
                    <option value="1" required>1. ACTIVO</option>
                    <option value="2" required>2. ANULAR</option>
                    <div id="validationServer04Feedback" class="invalid-feedback" required>
                        Seleccione el tipo de cargo
                    </div>
                </select>
            </div>
            <div class="col-md-4 position-relative">
                <label for="validationTooltip01" class="form-label">Codigo Proveedor:</label>
                <input type="number" class="form-control" id="validationTooltip01" name="CodProve" required value="<?php echo $PvId ?>">
                <div class="valid-tooltip">
                    Documento valido...!
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>
            </div>
            <div class="col-md-4 position-relative">
                <label for="inputState" class="form-label">Codigo del Producto:</label>
                <input type="number" class="form-control" id="validationTooltip01" name="CodProd" required value="<?php echo $PrId ?>">
                <div class="valid-tooltip">
                    Documento valido...!
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>

            </div>
            <div class="col-md-4 position-relative">
                <label for="validationTooltip01" class="form-label">CODIGO TRABAJADOR:</label>
                <input type="number" class="form-control" id="validationTooltip01" name="TraId" required value="<?php echo $PrTrId ?>">
                <div class="valid-tooltip">
                    Documento valido...!
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>
            </div>
            <div class="col-md-4 position-relative">
                <label for="validationTooltip01" class="form-label">Cantidad:</label>
                <input type="number" class="form-control" id="validationTooltip01" name="Can" required value="<?php echo $Can ?>">
                <div class="valid-tooltip">
                    Documento valido...!
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>
            </div>
            <div class="col-md-4 position-relative">
                <label for="validationCustomUsername" class="form-label">FECHA</label>
                <?php
                date_default_timezone_set('America/Bogota');
                $fecha_actual = date("y-m-d H:i:s");
                ?>
                <input type="datetime" class="form-control" id="validationTooltip01" name="FechCli" placeholder="Ingrese Fecha" required value="<?= $fecha_actual ?>">
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
                        <button type="submit" name="guardar_inventario_entrada" value="guardar_inventario_entrada" class="btn btn-success">Guardar</button>
                    </div>
                    <div style="margin-right:12%" class="esp col-3">
                        <button class="btn btn-warning" type="reset">Limpiar datos</button>
                    </div>
                </tr>
            </table>
    </form>
</main>
<?php include("../../login/includes/footer.php") ?>
</body>

</html>