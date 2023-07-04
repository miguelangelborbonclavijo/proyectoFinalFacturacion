<?php include('../db.php') ?>
<?php
    session_start();
    if(!isset($_SESSION['id'])){
    }
    $nombre = $_SESSION['nombre'];	
    include("../../includes/head.php");
    echo $nombre;
?>
<?php include('../db.php') ?>
<button><a href="../../../login/includes/head.php">Salir</a></button>
<main class="bg-dark text-light p-5 text-center text-sm-start">
<a href="../../../login/registros/reg_cli.php" class="btn btn-primary">Regresar</a>
  <form action="../../registros/registro_usuario/guardar_usuario.php" method="POST" style="width: 60%; margin-left: 20%" class="forCont row g-1">
    <h1 style="text-align: center;">REGISTRO DE USUARIO</h1>
    <table>
      <tr>
        <td></td>
        <td style="width: 250px; text-align: center">
          <p><strong>Crea una cuenta de FacElec</strong></p>
          <a href="../../../../proyectoFinalFacturacion/vistas/login/logincli.php">Ya tienes cuenta?</a>
        </td>
        <td></td>
      </tr>
    </table>
    <table>
    <div class="col-md-12 position-relative">
        <br>
        <label for="inputState" class="form-label" name="TipCarTr">TIPO DE USUARIO:</label>
        <select id="inputState" class="form-select" class="form-control" id="validationTooltip01" required name="TipUsu">
          <option selected required>Seleccione el tipo de usuario</option>
          <option value="1" required>1. CLIENTES</option>
          <option value="2" required>2. PROVEEDORES</option>
          <option value="3" required>3. TRABAJADORES</option>
          <option value="3" required>4. Administrador</option>
          <div id="validationServer04Feedback" class="invalid-feedback" required>
            Seleccione el tipo de cargo
          </div>
        </select>
      </div>
        <div class="col-md-6 position-relative">
        <label for="validationTooltip01" class="form-label">NUMERO DE DOCUMENTO:</label>
        <input type="number" class="form-control" id="validationTooltip01" name="NumDocUsu" required>
        <div class="valid-tooltip">
          Documento valido...!
        </div>
        <div class="invalid-tooltip">
          Documento no valido.
        </div>
      </div>
      <div class="col-md-6 position-relative">
        <label for="validationTooltip01" class="form-label">CONTRASEÑA:</label>
        <input type="password" class="form-control" id="validationTooltip01" name="ConUsu" required>
        <div class="valid-tooltip">
          Documento valido...!
        </div>
        <div class="invalid-tooltip">
          Documento no valido.
        </div>
      </div>
      <div class="col-md-6 position-relative">
        <label for="validationTooltip01" class="form-label">NOMBRE DEL USUARIO:</label>
        <input type="text" class="form-control" id="validationTooltip01" name="NomUsu" required>
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
              <button type="submit" name="guardar_usuarios" value="guardar_usuarios" class="btn btn-success">Guardar</button>
            </div>
            <div style="margin-right:12%" class="esp col-3">
              <button class="btn btn-warning" type="reset">Limpiar datos</button>
            </div>
            <div class="esp col-3">
              <a href="../../../login/registros/registro_usuario/consultar_usuario.php" class="btn btn-primary">Consultar personas</a>
            </div>
          </tr>
        </table>
      </table>
  </form>
</main>
<?php include("../../includes/footer.php") ?>
</body>

</html>