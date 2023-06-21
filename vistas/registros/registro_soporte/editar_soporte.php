<?php include('../db.php') ?>
<?php include("../../includes/head.php") ?>
<?php
include("../db.php");
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM soporte WHERE SopoId = $id";
  $resuleditar = mysqli_query($conn, $query);
  if (mysqli_num_rows($resuleditar) == 1) {
    $filas = mysqli_fetch_array($resuleditar);
    $NumDoSop = $filas['SopDoCl'];
    $TipClSop = $filas['SopTiCl'];
    $EstadSop = $filas['SopTiS'];
    $DescrSop = $filas['SopEstId'];
    $TipSop = $filas['SopFe'];
    $PeTipDoc = $filas['SopDesc'];
  }
}
if (isset($_POST['actualizar_personas'])) {
  $id = $_GET['id'];
  $NumDoSop = $_POST['NumDocSop'];
  $TipClSop = $_POST['TipCliSop'];
  $EstadSop = $_POST['EstSop'];
  $DescrSop = $_POST['DesSop'];
  $TipSop = $_POST['TipSopor'];
  $query = "UPDATE soporte set TipDoc = '$PeTipDoc', PriNomPer = '$PriNom', SegNomPer = '$SegNom', PriApePer = '$PriApe', SegApePer = '$SegApe' $PerCor = 'PerCor', '$PerCon' = 'PerCon' WHERE PerId = $id";
  mysqli_query($conn, $query);
  header("Location: registro_personas.php");
}
?>
<main class="p-5 text-center text-sm-start">
  <form action="../registro_persona/editar_personas.php" method="POST" style="width: 60%; margin-left: 20%" class="forCont row g-1">
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
        <label for="validationTooltip01" class="form-label">TIPO DE DOCUMENTO:</label>
        <input type="number" class="form-control" id="validationTooltip01" name="TipDoc" required value="<?php echo $PeTipDoc ?>">
        <div class="valid-tooltip">
          Documento valido...!
        </div>
        <div class="invalid-tooltip">
          Documento no valido.
        </div>
      </div>
      <div class="col-md-6 position-relative">
        <label for="validationTooltip01" class="form-label">NUMERO DE DOCUMENTO:</label>
        <input type="number" class="form-control" id="validationTooltip01" name="NumDoc" required value="<?php echo $PeNumDoc ?>">
        <div class="valid-tooltip">
          Documento valido...!
        </div>
        <div class="invalid-tooltip">
          Documento no valido.
        </div>
      </div>
      <div class="col-md-6 position-relative">
        <label for="validationTooltip01" class="form-label">PRIMER NOMBRE:</label>
        <input type="text" class="form-control" id="validationTooltip01" name="PriNomPer" required value="<?php echo $PriNom ?>">
        <div class="valid-tooltip">
          Documento valido...!
        </div>
        <div class="invalid-tooltip">
          Documento no valido.
        </div>
      </div>
      <div class="col-md-6 position-relative">
        <label for="validationTooltip01" class="form-label">SEGUNDO NOMBRE:</label>
        <input type="text" class="form-control" id="validationTooltip01" name="SegNomPer" required value="<?php echo $SegApe ?>">
        <div class="valid-tooltip">
          Documento valido...!
        </div>
        <div class="invalid-tooltip">
          Documento no valido.
        </div>
      </div>
      <div class="col-md-6 position-relative">
        <label for="validationTooltip01" class="form-label">PRIMER APELLIDO:</label>
        <input type="text" class="form-control" id="validationTooltip01" name="PriApePer" required value="<?php echo $PriApe ?>">
        <div class="valid-tooltip">
          Documento valido...!
        </div>
        <div class="invalid-tooltip">
          Documento no valido.
        </div>
      </div>
      <div class="col-md-6 position-relative">
        <label for="validationTooltip01" class="form-label">SEGUNDO APELLIDO:</label>
        <input type="text" class="form-control" id="validationTooltip01" name="SegApePer" required value="<?php echo $SegApe ?>">
        <div class="valid-tooltip">
          Documento valido...!
        </div>
        <div class="invalid-tooltip">
          Documento no valido.
        </div>
      </div>
      <div class="col-md-6 position-relative">
        <label for="validationCustomUsername" class="form-label">CORREO</label>
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
          <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="PerCor" required value="<?php echo $PerCor ?>">
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
      <div class="col-md-6 position-relative">
        <label for="validationTooltip01" class="form-label">CONTRASEÑA:</label>
        <input type="text" class="form-control" id="validationTooltip01" name="PerCon" required value="<?php echo $PerCon ?>">
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
            <button type="submit" name="actualizar_personas" value="actualizar_personas" class="btn btn-success"><label for="">Actualizar</label></button>
          </td>
        </tr>
      </table>
      <table>
        <br>
      </table>
  </form>
</main>
<main class="p-5 text-center text-sm-start">
    <form action="../registro_soporte/guardar_soporte.php" method="POST" style="width: 60%; margin-left: 20%" class="forCont row g-1">
        <h1 style="text-align: center;">Formulario de Soporte</h1>
        <hr>
        <table>
            <tr>
                <td></td>
                <td style="width: 200px; text-align: center">
                    <p><strong>DATOS DEL USUARIO</strong></p>
                </td>
                <td></td>
            </tr>
        </table>
        <table>
            <div class="col-md-6 position-relative">
                <label for="validationTooltip01" class="form-label">Numero de Documento:</label>
                <input type="number" class="form-control" id="validationTooltip01" name="NumDocSop" required>
                <div class="valid-tooltip">
                    Documento valido...!
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>
            </div>
            <div class="col-md-6 position-relative">
                <label for="inputState" class="form-label" name="TipCliSop">Tipo de clientes:</label>
                <select id="inputState" class="form-select" class="form-control" id="validationTooltip01" required name="TipCliSop">
                    <option selected>Seleccione el tipo de cliente</option>
                    <option value="1">1. BASICO</option>
                    <option value="2">2. PREMIUM</option>
                    <div id="validationServer04Feedback" class="invalid-feedback">
                        Seleccione el tipo de cargo
                    </div>
                </select>
            </div>
            <div class="col-md-6 position-relative">
                <label for="inputState" class="form-label" name="EstSop">Estado de soporte:</label>
                <select id="inputState" class="form-select" class="form-control" id="validationTooltip01" required name="EstSop">
                    <option selected>Seleccione el Estado de soporte</option>
                    <option value="1">1. ACTIVO</option>
                    <option value="2">2. ESPERAR</option>
                    <option value="3">3. FINALIZADO</option>
                    <div id="validationServer04Feedback" class="invalid-feedback">
                        Seleccione el tipo de cargo
                    </div>
                </select>
            </div>
            <div class="col-md-6 position-relative">
                <label for="inputState" class="form-label" name="TipSopor">Tipo de soporte:</label>
                <select id="inputState" class="form-select" class="form-control" id="validationTooltip01" required name="TipSopor">
                    <option selected>Seleccione el tipo de soporte</option>
                    <option value="1">1. SOPORTE TECNICO</option>
                    <div id="validationServer04Feedback" class="invalid-feedback">
                        Seleccione el tipo de cargo
                    </div>
                </select>
            </div>
            <div class="col-md-12 position-relative">
                <label for="validationTooltip01" class="form-label">DESCRIPCIÓN:</label>
                <input type="text" class="form-control" id="validationTooltip01" name="DesSop" required>
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
                    <div style="margin-right:12%" class="esp col-3">
                        <button type="submit" name="guardar_soporte" value="guardar_soporte" class="btn btn-success">Guardar</button>
                    </div>
                    <div style="margin-right:13%" class="esp col-3">
                        <button class="btn btn-warning" type="reset">Limpiar datos</button>
                    </div>
                    <div class="esp col-3">
                        <a href="../registro_soporte/consultar_soporte.php" class="btn btn-primary">Consultar personas</a>
                    </div>
                </tr>
            </table>
        </table>
    </form>
</main>
<?php include("../../includes/footer.php") ?>