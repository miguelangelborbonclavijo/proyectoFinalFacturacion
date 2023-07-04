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
    $tipo_usuario = $_SESSION['tipo_usuario'];	

    echo $nombre;?>
<button><a href="../../../login/salir.php">Salir</a></button><br>
<main class="bg-dark text-light p-5 text-center text-sm-start">
<a href="../../../login/inventario/ele_crepro.php" class="btn btn-primary">Regresar</a>
  <form action="../../../login/inventario/reporte_productos/guardar_reporte_productos.php" method="POST" style="width: 60%; margin-left: 20%" class="forCont row g-1">
    <h1 style="text-align: center;">REGISTRO DE USUARIO</h1>
    <table>
      <tr>
        <td></td>
        <td style="width: 250px; text-align: center">
          <p><strong>Reporta un producto</strong></p>
        <td></td>
      </tr>
    </table>
    <table>
      <div class="col-md-6 position-relative">
        <br>
        <label for="validationTooltip01" class="form-label">CODIGO DEL PRODUCTO:</label>
        <input type="number" class="form-control" id="validationTooltip01" name="CodPro" required>
        <div class="valid-tooltip">
          Documento valido...!
        </div>
        <div class="invalid-tooltip">
          Documento no valido.
        </div>
      </div>
      <div class="col-md-6 position-relative">
        <br>
        <label for="validationCustomUsername" class="form-label">FECHA</label>
        <?php 
        date_default_timezone_set('America/Bogota');
        $fecha_actual = date("y-m-d H:i:s");
        ?>
        <input type="datetime" class="form-control" id="validationTooltip01" name="FechRePro" placeholder="Ingrese Fecha" required value="<?= $fecha_actual ?>">
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
      <div class="col-md-12 position-relative">
        <label for="validationTooltip01" class="form-label">DESCRIPCION:</label>
        <input type="text" class="form-control" id="validationTooltip01" name="DesRepPro" required>
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
        <br>
        <table>
          <tr>
            <div style="margin-right: 13%" class="esp col-3">
              <button type="submit" name="guardar_reporte_productos" value="guardar_reporte_productos" class="btn btn-success">Guardar</button>
            </div>
            <div style="margin-right:12%" class="esp col-3">
              <button class="btn btn-warning" type="reset">Limpiar datos</button>
            </div>
            <div class="esp col-3">
              <a href="../../../login/inventario/reporte_productos/consultar_reporte_productos.php" class="btn btn-primary">Consultar personas</a>
            </div>
          </tr>
        </table>
      </table>
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
                    <th scope="col">TIPO DE PRODUCTO</th>
                    <th scope="col">DESCRIPCION</th>
                    <th scope="col">PRECIO DE COMPRA</th>
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
                        <td><?php echo $filas['ProPreCo'] ?></td>
                        <td><?php echo $filas['ProPreVe'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
            </tbody>
        </table>
    </div>
</main>
<?php include("../../includes/footer.php") ?>
</body>

</html>