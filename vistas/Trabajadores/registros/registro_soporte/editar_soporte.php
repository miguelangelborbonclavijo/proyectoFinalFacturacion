<?php include('../db.php') ?>
<?php include("../../../includes/head.php") ?>
<?php
include("../db.php");
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM soporte WHERE SopoId = $id";
  $resuleditar = mysqli_query($conn, $query);
  if (mysqli_num_rows($resuleditar) == 1) {
    $filas = mysqli_fetch_array($resuleditar);
    $NumDoSop = $filas['SopoId'];
    $TipClSop = $filas['SopDoCl '];
    $EstadSop = $filas['SopTiCl'];
    $DescrSop = $filas['SopDesc'];
    $TipSop = $filas['SopEstId'];
    $SopTiS = $filas['SopTiS'];
    $SopFe = $filas['SopFe'];
  }
}
if (isset($_POST['actualizar_personas'])) {
  $id = $_GET['id'];
  $NumDoSop = $_POST['NumDocSop'];
  $TipClSop = $_POST['TipCliSop'];
  $DescrSop = $_POST['DesSop'];
  $TipSop = $_POST['TipSopor'];
  $query = "UPDATE soporte set SopDoCl = '$NumDoSop', SopTiCl = '$TipClSop', 
  SopDesc = '$DescrSop', SopTiS = '$TipSop', WHERE SopoId = $id";
  mysqli_query($conn, $query);
  header("Location: ../../../../../../proyectoFinalFacturacion/vistas/registros/registro_soporte/registro_soportes.php");
}
?>
<main class="bg-dark text-light p-5 text-center text-sm-start">
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
                <input type="number" class="form-control" id="validationTooltip01" name="NumDocSop" required value="<?php echo $PerCon ?>>
                <div class="valid-tooltip">
                    Documento valido...!
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>
            </div>
            <div class="col-md-6 position-relative">
                <label for="inputState" class="form-label" name="TipCliSop">Tipo de clientes:</label>
                <select id="inputState" class="form-select" class="form-control" id="validationTooltip01" required name="TipCliSop" value="<?php echo $PerCon ?>>
                    <option selected>Seleccione el tipo de cliente</option>
                    <option value="1">1. BASICO</option>
                    <option value="2">2. PREMIUM</option>
                    <div id="validationServer04Feedback" class="invalid-feedback">
                        Seleccione el tipo de cargo
                    </div>
                </select>
            </div>
            <div class="col-md-12 position-relative">
                <label for="validationTooltip01" class="form-label">DESCRIPCIÓN:</label>
                <input type="text" class="form-control" id="validationTooltip01" name="DesSop" required value="<?php echo $PerCon ?>>
                <div class="valid-tooltip">
                    Documento valido...!
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>
            </div>
            <div class="col-md-6 position-relative">
                <label for="inputState" class="form-label" name="TipSopor">Tipo de soporte:</label>
                <select id="inputState" class="form-select" class="form-control" id="validationTooltip01" required name="TipSopor" value="<?php echo $PerCon ?>>
                    <option selected>Seleccione el tipo de soporte</option>
                    <option value="1">1. SOPORTE TECNICO</option>
                    <div id="validationServer04Feedback" class="invalid-feedback">
                        Seleccione el tipo de cargo
                    </div>
                </select>
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
                <button type="submit" name="actualizar_personas" value="actualizar_personas" class="btn btn-success"><label for="">Actualizar</label></button>
                </tr>
            </table>
        </table>
    </form>
</main>
<?php include("../../../includes/footer.php") ?>