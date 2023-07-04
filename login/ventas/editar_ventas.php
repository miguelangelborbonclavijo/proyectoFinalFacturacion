<?php
include("../../login/db.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM ventas WHERE VenId = $id";
    $resuleditar = mysqli_query($conn, $query);
    if (mysqli_num_rows($resuleditar) == 1) {
        $filas = mysqli_fetch_array($resuleditar);
        $VenId = $filas['VenId'];
        $VenCodId = $filas['VenCodId'];
        $VenTraId = $filas['VenTraId'];
        $VenCliId = $filas['VenCliId'];
        $VenCan = $filas['VenCan'];
        $VenFech = $filas['VenFech'];
        $VenTot = $filas['VenTot'];
        $VenAcId = $filas['VenAcId'];
        $VenProId = $filas['VenProId'];
    }
}
if (isset($_POST['actualizar_venta'])) {
    $id = $_GET['id'];
    $CodVen = $_POST['CodVen'];
    $CodTra = $_POST['CodTra'];
    $CodCli = $_POST['CodCli'];
    $CodPro = $_POST['CodPro'];
    $Can = $_POST['Can'];
    $Val = $_POST['Val'];
    $VenFech = $_POST['VenFech'];
    $VenEs = $_POST['VenEs'];
    $query = "UPDATE ventas set VenCodId = '$CodVen', VenTraId = '$CodTra', 
    VenCliId = '$CodCli' , VenCan = '$Can', VenFech = '$VenFech ', VenTot = '$Val'
    , VenAcId = '$VenEs ', VenProId = '$CodPro' WHERE VenId = $id";
    mysqli_query($conn, $query);
    header("Location: ../../../../login/ventas/consultar_venta.php");
}
?>
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
echo $nombre;
?>
<button><a href="../../login/salir.php">Salir</a></button><br>
<main style="margin-top:50px;">
    <a href="../../login/ventas/consultar_venta.php" class="btn btn-primary">Regresar</a>
    <form action="../../login/ventas/editar_ventas.php?id=<?php echo $_GET['id']; ?>" method="POST" style="width: 60%; margin-left: 20%" class="forCont row g-1">
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
                <input type="number" class="form-control" id="validationTooltip01" name="CodVen" required value="<?php echo $VenCodId ?>">
                <div class="valid-tooltip">
                    Documento valido...!
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>
            </div>
            <div class="col-md-6 position-relative">
                <label for="inputState" class="form-label" name="VenEs">ESTADO:</label>
                <select id="inputState" class="form-select" class="form-control" id="validationTooltip01" required name="VenEs" value="<?php echo $VenAcId ?>">
                    <option selected required>Estado venta</option>
                    <option value="1" required>1. ACTIVO</option>
                    <option value="2" required>2. ANULAR</option>
                    <div id="validationServer04Feedback" class="invalid-feedback" required>
                        Seleccione el tipo de cargo
                    </div>
                </select>
            </div>
            <div class="col-md-6 position-relative">
                <label for="validationTooltip01" class="form-label">Codigo Trabajador:</label>
                <input type="number" class="form-control" id="validationTooltip01" name="CodTra" required value="<?php echo $VenTraId ?>">
                <div class="valid-tooltip">
                    Documento valido...!
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>
            </div>
            <div class="col-md-6 position-relative">
                <label for="validationTooltip01" class="form-label">Codigo Clientes:</label>
                <input type="number" class="form-control" id="validationTooltip01" name="CodCli" required value="<?php echo $VenCliId ?>"> 
                <div class="valid-tooltip">
                    Documento valido...!
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>
            </div>
            <div class="col-md-6 position-relative">
                <label for="inputState" class="form-label">Codigo del Producto:</label>
                <input type="number" class="form-control" id="validationTooltip01" name="CodPro" required value="<?php echo $VenProId ?>">
                <div class="valid-tooltip">
                    Documento valido...!
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>
            </div>
            <div class="col-md-6 position-relative">
                <label for="validationTooltip01" class="form-label">Cantidad:</label>
                <input type="number" class="form-control" id="validationTooltip01" name="Can" required value="<?php echo $VenCan?>">
                <div class="valid-tooltip">
                    Documento valido...!
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>
            </div>
            <div class="col-md-6 position-relative">
                <label for="validationTooltip01" class="form-label">Valor:</label>
                <input type="number" class="form-control" id="validationTooltip01" name="Val" required value="<?php echo $VenTot  ?>">
                <div class="valid-tooltip">
                    Documento valido...!
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>
            </div>
            <div class="col-md-6 position-relative">
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
                        <button type="submit" name="actualizar_venta" value="actualizar_venta" class="btn btn-success">Guardar</button>
                    </div>
                    <div style="margin-right:12%" class="esp col-3">
                        <button class="btn btn-warning" type="reset">Limpiar datos</button>
                    </div>
                </tr>
            </table>
        </table>
    </form>
</main>
<?php include("../../login/includes/footer.php") ?>