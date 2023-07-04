<?php
    session_start();
    include('../../../login/db.php');
?>
<?php 
    if(!isset($_SESSION['usuario'])){
        header("Location: ../../login/principal.php");
    } ?>
<?php  include('../../../login/includes/head.php'); 
    $nombre = $_SESSION['nombre'];	

    echo $nombre;?>
<button><a href="../../../login/salir.php">Salir</a></button><br>
<?php
include("../../db.php");
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM reporteproductos WHERE ReId = $id";
  $resuleditar = mysqli_query($conn, $query);
  if (mysqli_num_rows($resuleditar) == 1) {
    $filas = mysqli_fetch_array($resuleditar);
    $RepId = $filas['ReId'];
    $ReProId = $filas['ReProId'];
    $DesRep = $filas['DesRePr'];
    $FechRep = $filas['RepFech'];
  }
}
if (isset($_POST['actualizar_reporte_producto'])) {
  $id = $_GET['id'];
  $ReProId = $_POST['CodPro'];
  $DesRep = $_POST['DesRepPro'];
  $query = "UPDATE reporteproductos set  ReProId = '$ReProId', DesRePr = '$DesRep' WHERE ReId = $id";
  mysqli_query($conn, $query);
  
}
?>
<main class="p-5 text-center text-sm-start">
<a href="../../../login/inventario/reporte_productos/consultar_reporte_productos.php" class="btn btn-primary">Regresar</a>
  <form action="../../inventario/reporte_productos/editar_reporte_productos.php?id=<?php echo $_GET['id']; ?>" method="POST" style="width: 60%; margin-left: 20%" class="forCont row g-1"> 
  <h1 style="text-align: center;">REGISTRO DE USUARIO</h1>
    <table>
      <tr>
        <td></td>
        <td style="width: 250px; text-align: center">
          <p><strong>Crea una cuenta de FacElec</strong></p>
        </td>
        <td></td>
      </tr>
    </table>
    <table>
    <div class="col-md-6 position-relative">
        <br>
        <label for="validationTooltip01" class="form-label">CODIGO DEL PRODUCTO:</label>
        <input type="number" class="form-control" id="validationTooltip01" name="CodPro" required value="<?php echo $ReProId ?>">
        <div class="valid-tooltip">
          Documento valido...!
        </div>
        <div class="invalid-tooltip">
          Documento no valido.
        </div>
      </div>
      <div class="col-md-6 position-relative">
        <br>
        <label for="validationTooltip01" class="form-label">DESCRIPCION:</label>
        <input type="text" class="form-control" id="validationTooltip01" name="DesRepPro" required value="<?php echo $DesRep ?>">
        <div class="valid-tooltip">
          Documento valido...!
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
      <table>
        <tr>
          <td>
            <button type="submit" name="actualizar_reporte_producto" value="actualizar_reporte_producto" class="btn btn-success"><label for="">Actualizar</label></button>
          </td>
        </tr>
      </table>
      <table>
        <br>
      </table>
  </form>
</main>
<?php include("../../includes/footer.php") ?>
</body>

</html>