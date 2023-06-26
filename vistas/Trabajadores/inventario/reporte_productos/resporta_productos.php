<?php include('../../registros/db.php') ?>
<?php include("../../includes/head.php") ?>
<main class="bg-dark text-light p-5 text-center text-sm-start">
  <form action="../../../../proyectoFinalFacturacion/vistas/inventario/reporte_productos/guardar_reporte_productos.php" method="POST" style="width: 60%; margin-left: 20%" class="forCont row g-1">
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
              <a href="../../../../proyectoFinalFacturacion/vistas/inventario/reporte_productos/consultar_reporte_productos.php" class="btn btn-primary">Consultar personas</a>
            </div>
          </tr>
        </table>
      </table>
  </form>
</main>
<?php include("../../includes/footer.php") ?>
</body>

</html>