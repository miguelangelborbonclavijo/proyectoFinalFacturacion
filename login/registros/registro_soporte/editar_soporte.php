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
include("../../../login/db.php");
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM soporte WHERE SopoId = $id";
  $resuleditar = mysqli_query($conn, $query);
  if (mysqli_num_rows($resuleditar) == 1) {
    $filas = mysqli_fetch_array($resuleditar);
    $NumDoSop = $filas['SopoId'];
    $CodSop = $filas['SopDoCl'];
    $TipCliSop = $filas['SopTiCl'];
    $DescrSop = $filas['SopDesc'];
    $EsSop = $filas['SopEstId'];
    $SopTiS = $filas['SopTiS'];
    $SopFe = $filas['SopFe'];
  }
}
if (isset($_POST['actualizar_personas'])) {
  $id = $_GET['id'];
  $CodSop = $_POST['NumDocSop'];
  $TipClSop = $_POST['TipCliSop'];
  $DescrSop = $_POST['DesSop'];
  $TipSop = $_POST['TipSopor'];
  $EsSop = $_POST['EsSop'];
  $query = "UPDATE soporte set SopDoCl = '$CodSop', SopTiCl = '$TipCliSop', 
  SopDesc = '$DescrSop',SopEstId = '$EsSop', SopTiS = '$SopTiS ' WHERE SopoId = $id";
  mysqli_query($conn, $query);}
?>
<main class="bg-dark text-light p-5 text-center text-sm-start"><br>
<a href="../../../login//registros/registro_soporte/consultar_soporte.php" class="btn btn-primary">Regresar</a>
    <form action="../../../login/registros/registro_soporte/editar_soporte.php?id=<?php echo $_GET['id']; ?>" method="POST" style="width: 60%; margin-left: 20%" class="forCont row g-1">
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
                <input type="number" class="form-control" id="validationTooltip01" name="NumDocSop" required value="<?php echo $CodSop ?>">
                <div class="valid-tooltip">
                    Documento valido...!
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>
            </div>
            <div class="col-md-6 position-relative">
                <label for="inputState" class="form-label" name="TipCliSop">Tipo de clientes:</label>
                <select id="inputState" class="form-select" class="form-control" id="validationTooltip01" required name="TipCliSop" value="<?php echo $SopTiS ?>">
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
                <input type="text" class="form-control" id="validationTooltip01" name="DesSop" required value="<?php echo $DescrSop ?>">
                <div class="valid-tooltip">
                    Documento valido...!
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>
            </div>
            <div class="col-md-6 position-relative">
                <label for="inputState" class="form-label" name="TipSopor">Tipo de soporte:</label>
                <select id="inputState" class="form-select" class="form-control" id="validationTooltip01" required name="TipSopor" value="<?php echo $PerCon ?>">
                    <option selected>Seleccione el tipo de soporte</option>
                    <option value="1">1. SOPORTE TECNICO</option>
                    <div id="validationServer04Feedback" class="invalid-feedback">
                        Seleccione el tipo de cargo
                    </div>
                </select>
            </div>
            <div class="col-md-6 position-relative">
                <label for="inputState" class="form-label" name="TipSopor">Estado:</label>
                <select id="inputState" class="form-select" class="form-control" id="validationTooltip01" required name="EsSop" value="<?php echo $TipSop ?>">
                    <option selected>Seleccione el tipo de soporte</option>
                    <option value="1">1. ACTIVO</option>
                    <option value="2">2. ESPERAR</option>
                    <option value="3">3. FINALIZADO</option>
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
                <td><button type="submit" name="actualizar_personas" value="actualizar_personas" class="btn btn-success"><label for="">Actualizar</label></button></td>
                <td><button class="btn btn-warning" type="reset">Limpiar datos</button></td>
                </tr>
            </table>
        </table>
    </form>
</main>
<table style="margin-left: 25%;">
    <tr>
        <td>
            <main style="margin-top:15px;">
                <div class="container-lg">
                    <table class="table">
                        <thead>
                            <tr>
                                <h1 style="text-align: center;">TIPO DE CLIENTE</h1>
                            </tr>
                            <tr style="text-align: center;">
                                <th scope="col">COD TIP</th>
                                <th scope="col">TIPO DE CLIENTE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM tipodeclientes";
                            $resulproductos = mysqli_query($conn, $query);
                            while ($filas = mysqli_fetch_array($resulproductos)) { ?>
                                <tr style="text-align: center;">
                                    <td><?php echo $filas['TipCliId'] ?></td>
                                    <td><?php echo $filas['TipCli'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                        </tbody>
                    </table>
                </div>
            </main>
        </td>
        <td>
            <main">
                <div class="container-lg">
                    <table class="table">
                        <thead>
                            <tr>
                                <h1 style="text-align: center;">TIPO DE SOPORTE</h1>
                            </tr>
                            <tr style="text-align: center;">
                                <th scope="col">COD SOPORTE</th>
                                <th scope="col">TIPO DE SOPORTE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM tipodesoporte";
                            $resulproductos = mysqli_query($conn, $query);
                            while ($filas = mysqli_fetch_array($resulproductos)) { ?>
                                <tr style="text-align: center;">
                                    <td><?php echo $filas['TisId'] ?></td>
                                    <td><?php echo $filas['TisSopr'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                        </tbody>
                    </table>
                </div>
                <br>
            </main>
        </td>
    </tr>
</table>
<?php include("../../includes/footer.php") ?>