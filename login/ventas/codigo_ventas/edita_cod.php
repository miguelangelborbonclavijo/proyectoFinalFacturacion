<?php
include("../../../login/db.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM codven WHERE CodVenId = $id";
    $resuleditar = mysqli_query($conn, $query);
    if (mysqli_num_rows($resuleditar) == 1) {
        $filas = mysqli_fetch_array($resuleditar);
        $CoTraId = $filas['CodTraId'];
        $CoCliId = $filas['CodVenCl'];
        $CodFec = $filas['CodFec'];
        
    }
}
if (isset($_POST['actualizar_cod'])) {
    $id = $_GET['id'];
    $CoTraId = $_POST['CodTra'];
    $CoCliId = $_POST['CodCli'];
    $query = "UPDATE  codven set  CodVenCl = '$CoCliId', CodTraId  = '$CoTraId' WHERE CodVenId = '$id'";
    mysqli_query($conn, $query);
}
?>
<?php
    session_start();
?>
<?php 
    if(!isset($_SESSION['usuario'])){
        header("Location: ../../login/principal.php");
    } ?>
<?php  include('../../../login/includes/head.php'); 
    $nombre = $_SESSION['nombre'];	

    echo $nombre;?>
<button><a href="../../salir.php">Salir</a></button>
<main class="p-5 text-center text-sm-start">
<a href="../../../login/ventas/codigo_ventas/cons_cod.php" class="btn btn-primary">Regresar</a>
    <form action="../../../login/ventas/codigo_ventas/edita_cod.php?id=<?php echo $_GET['id']; ?>" method="POST" style="width: 60%; margin-left: 20%" class="forCont row g-1">
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
                    <label for="validationTooltip01" class="form-label">Codigo Cliente:</label>
                    <input type="number" class="form-control" id="validationTooltip01" name="CodCli" required value="<?php echo $CoCliId ?>">
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
                    <label for="inputState" class="form-label">Documento Trabajador</label> 
                    <input type="number" class="form-control" id="validationTooltip01" name="CodTra" required value="<?php echo $CoTraId ?>">
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