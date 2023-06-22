<?php
include("../../registros/db.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM codven WHERE CodVenId = $id";
    $resuleditar = mysqli_query($conn, $query);
    if (mysqli_num_rows($resuleditar) == 1) {
        $filas = mysqli_fetch_array($resuleditar);
        $CoCliId = $filas['CodVenCl'];
        $CoTraId = $filas['CodTraId'];
        $CodFec = $filas['CodFec'];
        
    }
}
if (isset($_POST['actualizar_cod'])) {
    $id = $_GET['id'];
    $CoCliId = $_POST['CodCli'];
    $CoTraId = $_POST['CodTra'];
    $CodFec = $_POST['Fecha'];
    $query = "UPDATE codven set CodVenCl = '$CoCliId', CodTraId = '$CoTraId', CodFec = '$CodFec' WHERE CodVenId = $id";
    mysqli_query($conn, $query);
    header("Location: ../../../../../../proyectoFinalFacturacion/vistas/ventas/codigo_ventas/cod_venta.php");
}
?>
<?php include("../../includes/head.php") ?>
<main class="p-5 text-center text-sm-start">
    <form action="../../../../proyectoFinalFacturacion/vistas//ventas/editar_ventas.php?id=<?php echo $_GET['id']; ?>" method="POST" style="width: 60%; margin-left: 20%" class="forCont row g-1">
        <h1 style="text-align: center;">REGISTRO DE CODIGO DE VENTAS</h1>
        <table>
            <tr>
                <td></td>
                <td style="width: 200px; text-align: center">
                    <p><strong>DATOS DEl CODIGO DE VENTA</strong></p>
                </td>
                <td></td>
            </tr>
        </table>
        <br>
        <table>
            <td>
                <div class="col-md-12 position-relative">
                    <label for="validationTooltip01" class="form-label">Codigo Trabajador:</label>
                    <input type="number" class="form-control" id="validationTooltip01" name="CodTra" required value="<?php echo $CoCliId ?>">
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
                    <label for="inputState" class="form-label">Documento Clientes</label> 
                    <input type="number" class="form-control" id="validationTooltip01" name="CodCli" required value="<?php echo $CoTraId ?>">
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
                    <label for="inputState" class="form-label">Fecha</label>
                    <input type="datetime" class="form-control" id="validationTooltip01" name="Fecha" required value="<?= $fecha_actual ?>" value="<?php echo $CodFec ?>">
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
            <button type="submit" name="actualizar_cod" value="actualizar_cod" class="btn btn-success">Actualizar</button>
        </div>
        <div style="margin-right:12%" class="esp col-3">
            <button class="btn btn-warning" type="reset">Limpiar datos</button>
        </div>
        </td>
    </form>
</main>
<?php include("../../includes/footer.php") ?>