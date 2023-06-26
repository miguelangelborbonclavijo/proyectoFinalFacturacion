<?php
include("../db.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM trabajador WHERE TraPerId = $id";
    $resuleditar = mysqli_query($conn, $query);
    if (mysqli_num_rows($resuleditar) == 1) {
        $filas = mysqli_fetch_array($resuleditar);
        $TraCargId = $filas['TraCarId'];
        $HorLabora = $filas['TraHor'];
        $SalarTrab = $filas['TraSalar'];
    }
}
if (isset($_POST['actualizar_trabajador'])) {
    $id = $_GET['id'];
    $TraCargId = $_POST['TipCarTr'];
    $HorLabora = $_POST['HorLabTr'];
    $SalarTrab = $_POST['SalariTr'];
    $query = "UPDATE trabajador set TraCarId = '$TraCargId', TraHor = '$HorLabora', TraSalar = '$SalarTrab') WHERE TraPerId = $id";
    mysqli_query($conn, $query);
    header("Location: registro_trabajadores.php");
}
?>
<?php
	include("../db.php");
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$query = "SELECT * FROM proveedores WHERE  = $id";
		$resuleditar = mysqli_query($conn, $query);
		if(mysqli_num_rows($resuleditar) ==1){
			$filas = mysqli_fetch_array($resuleditar);
            $TipNomProv = $filas['PrNomPr'];
            $TipDirrP = $filas['PrDirr'];
		}
	}
    if(isset($_POST['actualizar_tipProveedor'])){
        $id = $_GET['id'];
        $TipNomProv = $_POST['NomPro'];
        $TipDirrP = $_POST['Dirr'];
        $query = "UPDATE proveedores set PrNomPr = '$TipNomProv', PrDirr = '$TipDirrP' WHERE PrId = $id";
        mysqli_query($conn, $query);
		header("Location: ../registro_proveedores/registro_proveedor.php");
    }
?>
<?php include("../../includes/head.php") ?>
<main class="p-5 text-center text-sm-start">
    <form action="../registro_trabajador/editar_trabajador.php" method="POST" style="width: 60%; margin-left: 20%" class="forCont row g-1">
        <h1 style="text-align: center;">REGISTRO DE TRABAJADOR</h1>
        <table>
            <tr>
                <td></td>
                <td style="width: 200px; text-align: center">
                    <p><strong>DATOS DEL TRABAJADOR</strong></p>
                </td>
                <td></td>
            </tr>
        </table>
        <br>
        <table>
            <div class="col-md-6 position-relative">
                <label for="validationTooltip01" class="form-label">Numero de Documento:</label>
                <input type="number" class="form-control" id="validationTooltip01" name="NumDocTr" name="id" required value="<?php echo $id ?>">
                <div class="valid-tooltip">
                Documento valido...!
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>
            </div>
            <div class="col-md-6 position-relative">
                <label style="width:2000%" for="inputState" class="form-label" name="TipCarTr">Tipo de cargo:</label>
                <select id="inputState" class="form-select" class="form-control" id="validationTooltip01" required name="TipCarTr" value="<?php echo $TraCargId ?>">
                    <option selected>Seleccione el tipo de cargo</option>
                    <option value="1">1. Administrador</option>
                    <option value="2">2. Gerente</option>
                    <option value="3">3. Vendedor</option>
                    <div id="validationServer04Feedback" class="invalid-feedback">
                        Seleccione el tipo de cargo
                    </div>
                </select>
            </div>
            <div class="col-md-6 position-relative">
                <label for="validationTooltip01" class="form-label">Horas Laborales:</label>
                <input type="number" class="form-control" id="validationTooltip01" name="HorLabTr" required value="<?php echo $HorLabora ?>">
                <div class="valid-tooltip">
                    Documento valido...!
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>
            </div>
            <div class="col-md-6 position-relative">
                <label for="validationTooltip01" class="form-label">Salario:</label>
                <input type="number" class="form-control" id="validationTooltip01" name="SalariTr" required value="<?php echo $SalarTrab ?>">
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
                    <div class="esp col-6">
                        <button type="submit" name="actualizar_trabajador" value="actualizar_trabajador" class="btn btn-success">Guardar</button>
                    </div>
                    <div class="esp col-6">
                        <button class="btn btn-warning" type="reset">Limpiar datos</button>
                    </div>
                </tr>
            </table>
    </form>
</main>
<?php include("../../includes/footer.php") ?>
</body>

</html>