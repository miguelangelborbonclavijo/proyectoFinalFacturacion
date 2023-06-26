<?php include('../registros/db.php')?>
<?php include("../includes/head.php")?>
<?php
include("../registros/db.php");
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM compras WHERE ComId  = $id";
  $resuleditar = mysqli_query($conn, $query);
  if (mysqli_num_rows($resuleditar) == 1) {
    $filas = mysqli_fetch_array($resuleditar);
    $PvId = $filas['ComPvId'];
    $PrId = $filas['ComPrId'];
    $Can = $filas['ComCan'];

  }
}
if (isset($_POST['guardar_inventario_entrada'])) {
  $id = $_GET['id'];
  $PvId = $_POST['CodProve'];
  $PrId = $_POST['CodProd'];
  $Can = $_POST['Can'];
  $query = "UPDATE compras set ComPvId = '$PvId', ComPrId = '$PrId', ComCan = '$Can' WHERE ComId  = $id";
  mysqli_query($conn, $query);
}
?>
<main class="bg-dark text-light p-5 text-center text-sm-start">
<form action="../../../proyectoFinalFacturacion/vistas/compras/editar_entradas.php?id=<?php echo $_GET['id']; ?>" method="POST" style="width: 60%; margin-left: 20%" class="forCont row g-1">
    <h1 style="text-align: center;">REGISTRO DE TRABAJADOR</h1>
    <table>
        <tr>
            <td></td>
            <td style="width: 200px; text-align: center"><p><strong>DATOS DEL TRABAJADOR</strong></p></td>
            <td></td>
        </tr>
    </table>
    <br>
    <table>
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
            <label  for="inputState" class="form-label">Codigo del Producto:</label>
            <input type="number" class="form-control" id="validationTooltip01" name="CodProd" required  value="<?php echo $PrId ?>">
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
            <div style="margin-right:13%" class="esp col-3" >
                <button type="submit" name="guardar_inventario_entrada" value="guardar_inventario_entrada" class="btn btn-success">Guardar</button>
            </div>
            <div style="margin-right:12%" class="esp col-3">
                <button class="btn btn-warning" type="reset">Limpiar datos</button>
            </div>
            <div class="esp col-3">
                <a href="../inventario/consultar_entradas.php" class="btn btn-primary">Consultar clientes</a>
            </div>
        </tr>
    </table>
</form>
</main>
<?php include("../../../proyectoFinalFacturacion/vistas/includes/footer.php") ?>
</body>

</html>