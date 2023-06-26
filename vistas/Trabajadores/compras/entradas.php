<?php include('../registros/db.php')?>
<?php include("../../includes/head.php")?>
<main class="bg-dark text-light p-5 text-center text-sm-start">
<form action="../../../../proyectoFinalFacturacion/vistas/Trabajadores/compras/guardar_entrada.php" method="POST" style="width: 60%; margin-left: 20%" class="forCont row g-1">
    <h1 style="text-align: center;">REGISTRO DE COMPRAS</h1>
    <table>
        <tr>
            <td></td>
            <td style="width: 200px; text-align: center"><p><strong>DATOS DE COMPRA</strong></p></td>
            <td></td>
        </tr>
    </table>
    <br>
    <table>
        <div class="col-md-6 position-relative">
            <label for="validationTooltip01" class="form-label">Codigo Proveedor:</label>
            <input type="number" class="form-control" id="validationTooltip01" name="CodProve" required>
            <div class="valid-tooltip">
            Documento valido...!
            </div>
            <div class="invalid-tooltip">
                Documento no valido.
            </div>
        </div>
        <div class="col-md-6 position-relative">
            <label  for="inputState" class="form-label">Codigo del Producto:</label>
            <input type="number" class="form-control" id="validationTooltip01" name="CodProd" required>
            <div class="valid-tooltip">
            Documento valido...!
            </div>
            <div class="invalid-tooltip">
                Documento no valido.
            </div>
            
        </div>
        <div class="col-md-6 position-relative">
            <label for="validationTooltip01" class="form-label">Cantidad:</label>
            <input type="number" class="form-control" id="validationTooltip01" name="Can" required>
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
                <a href="../compras/consultar_entradas.php" class="btn btn-primary">Consultar clientes</a>
            </div>
        </tr>
    </table>
</form>
</main>
<?php include("../../includes/footer.php")?>